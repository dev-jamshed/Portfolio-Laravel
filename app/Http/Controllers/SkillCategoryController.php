<?php

namespace App\Http\Controllers;

use App\Models\SkillCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SkillCategoryController extends Controller
{
    public function index()
    {
        $categories = SkillCategory::all();
        return view('admin.skill_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.skill_categories.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        SkillCategory::create($validator->validated());
        return redirect()->route('admin.skill_categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(SkillCategory $skillCategory)
    {
        return view('admin.skill_categories.edit', compact('skillCategory'));
    }

    public function update(Request $request, SkillCategory $skillCategory)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $skillCategory->update($validator->validated());
        return redirect()->route('admin.skill_categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(SkillCategory $skillCategory)
    {
        $skillCategory->delete();
        return redirect()->route('admin.skill_categories.index')->with('success', 'Category deleted successfully.');
    }
}
