<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class EducationController extends Controller
{
    public function index()
    {
        return view("admin.educations.index");
    }

    public function show()
    {
        $educations = Education::query();

        return DataTables::of($educations)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.educations.action_buttons', compact('d'));
            })
            ->make(true);
    }

    public function create()
    {
        return view("admin.educations.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'institution' => 'required|string',
            'year' => 'required|string',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();
        Education::create($data);
        return response()->json(['success' => true, 'message' => 'Education Created Successfully']);
    }

    public function edit($id)
    {
        $education = Education::findOrFail($id);
        return view("admin.educations.edit", compact('education'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'institution' => 'required|string',
            'year' => 'required|string',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();
        $education = Education::findOrFail($id);
        $education->update($data);
        return response()->json(['success' => true, 'message' => 'Education Updated Successfully']);
    }

    public function destroy($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();
        return response()->json(['success' => true, 'message' => 'Education Deleted Successfully']);
    }
}
