<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ReviewController extends Controller
{
    public function index()
    {
        return view("admin.reviews.index");
    }

    public function show()
    {
        $reviews = Review::with('service')->select('reviews.*');

        return DataTables::of($reviews)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('service_name', function ($d) {
                return $d->service->name;
            })
            ->addColumn('actions', function ($d) {
                return view('admin.reviews.action_buttons', compact('d'));
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function create()
    {
        $services = Service::all();
        return view("admin.reviews.create", compact('services'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'review' => 'required|string',
            'service_id' => 'required|exists:services,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('reviews', 'public');
        }

        Review::create($data);
        return response()->json(['success' => true, 'message' => 'Review Created Successfully']);
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        $services = Service::all();
        return view("admin.reviews.edit", compact('review', 'services'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'review' => 'required|string',
            'service_id' => 'required|exists:services,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('reviews', 'public');
        }

        $review = Review::findOrFail($id);
        $review->update($data);
        return response()->json(['success' => true, 'message' => 'Review Updated Successfully']);
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return response()->json(['success' => true, 'message' => 'Review Deleted Successfully']);
    }
}
