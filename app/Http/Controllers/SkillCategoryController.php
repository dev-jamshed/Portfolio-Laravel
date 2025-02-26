<?php

namespace App\Http\Controllers;

use App\Models\SkillCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SkillCategoryController extends Controller
{
    public function index()
    {
        return view('admin.skill_categories.index');
    }

    public function show()
    {
        $categories = SkillCategory::select('skill_categories.*');
        return DataTables::of($categories)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.skill_categories.action_buttons', compact('d'));
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function create()
    {
        return view('admin.skill_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        SkillCategory::create($request->all());
        return redirect()->route('admin.skill_categories.index')->with('success', 'Skill Category Created Successfully');
    }

    public function edit($id)
    {
        $category = SkillCategory::findOrFail($id);
        return view('admin.skill_categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = SkillCategory::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('admin.skill_categories.index')->with('success', 'Skill Category Updated Successfully');
    }

    public function destroy($id)
    {
        $category = SkillCategory::findOrFail($id);
        $category->delete();
        return response()->json(['success' => true, 'message' => 'Skill Category Deleted Successfully']);
    }
}
