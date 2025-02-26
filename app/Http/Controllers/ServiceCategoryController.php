<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        return view("admin.service_categories.index");
    }

    public function show()
    {
        $categories = ServiceCategory::query();

        return DataTables::of($categories)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.service_categories.action_buttons', compact('d'));
            })
            ->make(true);
    }

    public function create()
    {
        return view("admin.service_categories.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();
        ServiceCategory::create($data);
        return response()->json(['success' => true, 'message' => 'Service Category Created Successfully']);
    }

    public function edit($id)
    {
        $category = ServiceCategory::findOrFail($id);
        return view("admin.service_categories.edit", compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();
        $category = ServiceCategory::findOrFail($id);
        $category->update($data);
        return response()->json(['success' => true, 'message' => 'Service Category Updated Successfully']);
    }

    public function destroy($id)
    {
        $category = ServiceCategory::findOrFail($id);
        $category->delete();
        return response()->json(['success' => true, 'message' => 'Service Category Deleted Successfully']);
    }
}
