<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class SkillController extends Controller
{
    public function index()
    {
        return view("admin.skills.index");
    }

    public function show()
    {
        $skills = Skill::query();

        return DataTables::of($skills)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.skills.action_buttons', compact('d'));
            })
            ->make(true);
    }

    public function create()
    {
        return view("admin.skills.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'range' => 'required|integer|min:0|max:100',
            'show_on_homepage' => 'nullable|boolean',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();
        Skill::create($data);
        return response()->json(['success' => true, 'message' => 'Skill Created Successfully']);
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view("admin.skills.edit", compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'range' => 'required|integer|min:0|max:100',
            'show_on_homepage' => 'nullable|boolean',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();
        $skill = Skill::findOrFail($id);
        $skill->update($data);
        return response()->json(['success' => true, 'message' => 'Skill Updated Successfully']);
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();
        return response()->json(['success' => true, 'message' => 'Skill Deleted Successfully']);
    }
}
