<?php

namespace App\Http\Controllers;

use App\Models\GeneralInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|email',
            'location' => 'required|string',
            'phone' => 'required|string',
            'footer_desc' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('general_info', 'public');
        }

        $generalInfo = GeneralInfo::first();
        if ($generalInfo) {
            $generalInfo->update($data);
        } else {
            GeneralInfo::create($data);
        }

        return response()->json(['success' => true, 'message' => 'General Information Updated Successfully']);
    }
}
