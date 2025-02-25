<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class SocialMediaController extends Controller
{
    public function index()
    {
        return view("admin.social_media.index");
    }

    public function show()
    {
        $socialMediaLinks = SocialMedia::query();

        return DataTables::of($socialMediaLinks)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.social_media.action_buttons', compact('d'));
            })
            ->make(true);
    }

    public function create()
    {
        return view("admin.social_media.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'url' => 'required|url',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('social_media_icons', 'public');
        }

        SocialMedia::create($data);
        return response()->json(['success' => true, 'message' => 'Social Media Link Created Successfully']);
    }

    public function edit($id)
    {
        $socialMedia = SocialMedia::findOrFail($id);
        return view("admin.social_media.edit", compact('socialMedia'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'url' => 'required|url',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('social_media_icons', 'public');
        }

        $socialMedia = SocialMedia::findOrFail($id);
        $socialMedia->update($data);
        return response()->json(['success' => true, 'message' => 'Social Media Link Updated Successfully']);
    }

    public function destroy($id)
    {
        $socialMedia = SocialMedia::findOrFail($id);
        $socialMedia->delete();
        return response()->json(['success' => true, 'message' => 'Social Media Link Deleted Successfully']);
    }
}
