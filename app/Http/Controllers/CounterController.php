<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class CounterController extends Controller
{
    public function index()
    {
        return view("admin.counters.index");
    }

    public function create()
    {
        return view("admin.counters.create");
    }
    public function edit(Counter $counter)
    {
        return view("admin.counters.edit",compact('counter'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'value' => 'required|integer',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();
        Counter::create($data);
        return response()->json(['success' => true, 'message' => 'Counter Created Successfully']);
    }

    public function show()
    {
        $counters = Counter::query();

        return DataTables::of($counters)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.counters.action_buttons', compact('d'));
            })
            ->make(true);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'value' => 'required|integer',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();
        $counter = Counter::findOrFail($id);
        $counter->update($data);
        return response()->json(['success' => true, 'message' => 'Counter Updated Successfully']);
    }

    public function destroy($id)
    {
        $counter = Counter::findOrFail($id);
        $counter->delete();
        return response()->json(['success' => true, 'message' => 'Counter Deleted Successfully']);
    }
}
