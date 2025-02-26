<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use App\Models\PricingFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class PricingController extends Controller
{
    public function index()
    {
        return view('admin.pricings.index');
    }

    public function show()
    {
        $pricings = Pricing::with('features')->select('pricings.*');
        return DataTables::of($pricings)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.pricings.action_buttons', compact('d'));
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function create()
    {
        return view('admin.pricings.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'price' => 'required|numeric',
            'base' => 'required|string',
            'features' => 'nullable|array',
            'features.*' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();
        $pricing = Pricing::create($data);

        if (isset($data['features'])) {
            foreach ($data['features'] as $feature) {
                $pricing->features()->create(['feature' => $feature]);
            }
        }

        return response()->json(['success' => true, 'message' => 'Pricing Created Successfully']);
    }

    public function edit($id)
    {
        $pricing = Pricing::with('features')->findOrFail($id);
        return view('admin.pricings.edit', compact('pricing'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'price' => 'required|numeric',
            'base' => 'required|string',
            'features' => 'nullable|array',
            'features.*' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $validator->validated();
        $pricing = Pricing::findOrFail($id);
        $pricing->update($data);

        $pricing->features()->delete();
        if (isset($data['features'])) {
            foreach ($data['features'] as $feature) {
                $pricing->features()->create(['feature' => $feature]);
            }
        }

        return response()->json(['success' => true, 'message' => 'Pricing Updated Successfully']);
    }

    public function destroy($id)
    {
        $pricing = Pricing::findOrFail($id);
        $pricing->delete();
        return response()->json(['success' => true, 'message' => 'Pricing Deleted Successfully']);
    }
}
