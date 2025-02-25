<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{
    public function index()
    {
        return view("admin.projects.index");
    }

    public function show()
    {
        $projects = Project::with('service')->select('projects.*');

        return DataTables::of($projects)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('service_name', function ($d) {
                return $d->service->name;
            })
            ->addColumn('actions', function ($d) {
                return view('admin.projects.action_buttons', compact('d'));
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function create()
    {
        $services = Service::all();
        return view("admin.projects.create", compact('services'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'service_id' => 'required|exists:services,id',
            'author' => 'required|string',
            'date' => 'required|date',
            'tags' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('main_image')) {
            $data['main_image'] = $request->file('main_image')->store('projects', 'public');
        }

        $project = Project::create($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $project->images()->create(['path' => $image->store('projects', 'public')]);
            }
        }

        return response()->json(['success' => true, 'message' => 'Project Created Successfully']);
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $services = Service::all();
        return view("admin.projects.edit", compact('project', 'services'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'service_id' => 'required|exists:services,id',
            'author' => 'required|string',
            'date' => 'required|date',
            'tags' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('main_image')) {
            $data['main_image'] = $request->file('main_image')->store('projects', 'public');
        }

        $project = Project::findOrFail($id);
        $project->update($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $project->images()->create(['path' => $image->store('projects', 'public')]);
            }
        }

        return response()->json(['success' => true, 'message' => 'Project Updated Successfully']);
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return response()->json(['success' => true, 'message' => 'Project Deleted Successfully']);
    }

    public function removeImage($id)
    {
        $image = ProjectImage::findOrFail($id);
        Storage::disk('public')->delete($image->path);
        $image->delete();
        return response()->json(['success' => true, 'message' => 'Image Removed Successfully']);
    }
}
