<?php

namespace App\Http\Controllers;

use App\Models\GeneralInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class GeneralInfoController extends Controller
{
    public function index()
    {
        $generalInfo = GeneralInfo::first();
        return view('admin.general_info.index', compact('generalInfo'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'nullable|email',
            'location' => 'nullable|string',
            'phone' => 'nullable|string',
            'footer_desc' => 'nullable|string',
            'sidebar_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sidebar_title' => 'nullable|string',
            'sidebar_description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('sidebar_image')) {
            $data['sidebar_image'] = $request->file('sidebar_image')->store('sidebar_images', 'public');
        }

        $generalInfo = GeneralInfo::first();
        if (!$generalInfo) {
            $generalInfo = GeneralInfo::create($data);
        } else {
            $generalInfo->update($data);
        }

        return response()->json(['success' => true, 'message' => 'General Information Updated Successfully']);
    }
}
