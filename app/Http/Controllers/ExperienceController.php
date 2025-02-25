<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\ExperienceSectionImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ExperienceController extends Controller
{
    public function index()
    {
        return view("admin.experiences.index");
    }

    public function show()
    {
        $experiences = Experience::query();

        return DataTables::of($experiences)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.experiences.action_buttons', compact('d'));
            })
            ->make(true);
    }

    public function create()
    {
        return view("admin.experiences.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'duration' => 'required|string',
            'show_on_homepage' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('icons', 'public');
        }

        Experience::create($data);
        return response()->json(['success' => true, 'message' => 'Experience Created Successfully']);
    }

    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        return view("admin.experiences.edit", compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'duration' => 'required|string',
            'show_on_homepage' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('icons', 'public');
        }

        $experience = Experience::findOrFail($id);
        $experience->update($data);
        return response()->json(['success' => true, 'message' => 'Experience Updated Successfully', 'redirect' => route('admin.experiences.index')]);
    }

    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();
        return response()->json(['success' => true, 'message' => 'Experience Deleted Successfully']);
    }

    public function editSectionImage()
    {
        $sectionImage = ExperienceSectionImage::latest()->first();
        return view('admin.experiences.section_image', compact('sectionImage'));
    }

    public function updateSectionImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'experience_section_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        if ($request->hasFile('experience_section_image')) {
            $imagePath = $request->file('experience_section_image')->store('section_images', 'public');
            ExperienceSectionImage::create(['image_path' => $imagePath]);
        }

        return response()->json(['success' => true, 'message' => 'Experience Section Image Updated Successfully']);
    }
}
