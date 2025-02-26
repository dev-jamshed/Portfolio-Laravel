<?php

namespace App\Http\Controllers;

use App\Models\ExperienceYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExperienceYearController extends Controller
{
    public function index()
    {
        $experienceYear = ExperienceYear::first();
        return view('admin.experience_years.index', compact('experienceYear'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'total_years' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $validator->validated();

        $experienceYear = ExperienceYear::first();
        if (!$experienceYear) {
            ExperienceYear::create($data);
        } else {
            $experienceYear->update($data);
        }

        return redirect()->route('admin.counters.index')->with('success', 'Experience Year Updated Successfully');
    }
}
