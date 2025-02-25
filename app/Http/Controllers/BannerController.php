<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class BannerController extends Controller
{
    public function index()
    {
        return view("admin.banners.index");
    }

    public function show()
    {
        $banners = Banner::query();

        return DataTables::of($banners)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.banners.action_buttons', compact('d'));
            })
            ->make(true);
    }

    public function create()
    {
        return view("admin.banners.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'skills' => 'nullable|array',
            'top_skill' => 'required|string',
            'bottom_skill' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        if (isset($data['skills'])) {
            $data['skills'] = json_encode($data['skills']);
        }

        Banner::create($data);
        return response()->json(['success' => true, 'message' => 'Banner Created Successfully']);
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view("admin.banners.edit", compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'skills' => 'nullable|array',
            'top_skill' => 'required|string',
            'bottom_skill' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        $data['skills'] = json_encode($request->skills);
        $banner = Banner::findOrFail($id);
        $banner->update($data);
        return response()->json(['success' => true, 'message' => 'Banner Updated Successfully']);
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        return response()->json(['success' => true, 'message' => 'Banner Deleted Successfully']);
    }
}
