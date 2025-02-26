<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\ServiceSectionImage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index()
    {
        return view("admin.services.index");
    }

    public function show()
    {
        $services = Service::with('category')->select('services.*');

        return DataTables::of($services)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.services.action_buttons', compact('d'));
            })
            ->addColumn('category_name', function ($d) {
                return $d->category ? $d->category->name : 'N/A';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function create()
    {
        $categories = ServiceCategory::all();
        return view("admin.services.create", compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'long_description' => 'nullable|string',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'projects_done' => 'required|integer',
            'show_on_homepage' => 'required|boolean',
            'show_latest_service' => 'nullable|boolean',
            'category_id' => 'nullable|exists:service_categories,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('icons', 'public');
        }

        Service::create($data);
        return response()->json(['success' => true, 'message' => 'Service Created Successfully']);
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $categories = ServiceCategory::all();
        return view("admin.services.edit", compact('service', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'long_description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'projects_done' => 'required|integer',
            'show_on_homepage' => 'required|boolean',
            'show_latest_service' => 'nullable|boolean',
            'category_id' => 'nullable|exists:service_categories,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('icons', 'public');
        }

        $service = Service::findOrFail($id);
        $service->update($data);
        return response()->json(['success' => true, 'message' => 'Service Updated Successfully', 'redirect' => route('admin.services.index')]);
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return response()->json(['success' => true, 'message' => 'Service Deleted Successfully']);
    }
    public function editSectionImage()
    {
        $sectionImage = ServiceSectionImage::latest()->first();
        return view('admin.services.section_image', compact('sectionImage'));
    }

    public function updateSectionImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_section_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        if ($request->hasFile('service_section_image')) {
            $imagePath = $request->file('service_section_image')->store('section_images', 'public');
            ServiceSectionImage::create(['image_path' => $imagePath]);
        }

        return response()->json(['success' => true, 'message' => 'Service Section Image Updated Successfully']);
    }
}
