<?php

namespace App\Http\Controllers;

use App\Models\Experience;
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
            'title' => 'required|string',
            'company' => 'required|string',
            'duration' => 'required|string',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();
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
            'title' => 'required|string',
            'company' => 'required|string',
            'duration' => 'required|string',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();
        $experience = Experience::findOrFail($id);
        $experience->update($data);
        return response()->json(['success' => true, 'message' => 'Experience Updated Successfully']);
    }

    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();
        return response()->json(['success' => true, 'message' => 'Experience Deleted Successfully']);
    }
}
