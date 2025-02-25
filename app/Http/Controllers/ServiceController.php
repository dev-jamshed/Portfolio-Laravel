<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    public function index()
    {
        return view("admin.services.index");
    }

    public function show()
    {
        $services = Service::query();

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
            ->make(true);
    }

    public function create()
    {
        return view("admin.services.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'nullable|string',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'projects_done' => 'required|integer',
            'show_on_homepage' => 'required|boolean',
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
        return view("admin.services.edit", compact('service'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'projects_done' => 'required|integer',
            'show_on_homepage' => 'required|boolean',
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
}
