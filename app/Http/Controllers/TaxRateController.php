<?php

namespace App\Http\Controllers;

use App\Models\TaxRate;
use Illuminate\Http\Request;

class TaxRateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = TaxRate::all();
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TaxRate::create($request->all());
        return response()->json(['message' => 'تم حفظ البيانات بنجاح.'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response = TaxRate::find($id);
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaxRate $taxRate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tax_rate = TaxRate::find($id);
        $tax_rate->update($request->all());
        $tax_rate->save();
        return response()->json(['message' => 'تم التعديل بنجاح.'], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tax_rate = TaxRate::find($id);
        if ($tax_rate->editable == true) {
            TaxRate::destroy($id);
            return response()->json(['message' => 'تم الحذف بنجاح.'], 200);
        }
        return response()->json(['message' => 'Uneditable'], 422);
    }

    // Search
    public function search(Request $request)
    {
        $response = TaxRate::where('name', 'LIKE',  '%' . $request->search . '%')->get();
        return response()->json($response, 200);
    }

    // Sort
    public function sort(Request $request)
    {
        $response = TaxRate::orderBy($request->col, $request->direction)->get();
        return response()->json($response, 200);
    }

    // Filter
    public function filter(Request $request)
    {
        if ($request->tax_type == '') {
            $response = TaxRate::all();
            return response()->json($response, 200);
        }
        $response = TaxRate::where('tax_type', $request->tax_type)->get();
        return response()->json($response, 200);
    }
}
