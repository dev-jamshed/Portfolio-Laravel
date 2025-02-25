<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class SkillController extends Controller
{
    public function index()
    {
        return view("admin.skills.index");
    }

    public function show()
    {
        $skills = Skill::with('category')->select('skills.*');
        
        // Debugging: Check if the query returns any data
        // dd($skills->get());

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
            ->addColumn('category_name', function ($d) {
                return $d->category ? $d->category->name : 'N/A';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function create()
    {
        $categories = SkillCategory::all();
        return view("admin.skills.create", compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'range' => 'required|integer|min:0|max:100',
            'show_on_homepage' => 'nullable|boolean',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'best_skill' => 'nullable|boolean',
            'category_id' => 'nullable|exists:skill_categories,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('icons', 'public');
        }

        Skill::create($data);
        return response()->json(['success' => true, 'message' => 'Skill Created Successfully']);
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        $categories = SkillCategory::all();
        return view("admin.skills.edit", compact('skill', 'categories'));
    }

    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'range' => 'required|integer|min:0|max:100',
            'show_on_homepage' => 'nullable|boolean',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'best_skill' => 'nullable|boolean',
            'category_id' => 'nullable|exists:skill_categories,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('icons', 'public');
        }

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
