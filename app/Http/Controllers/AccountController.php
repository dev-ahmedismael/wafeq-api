<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Account::all();
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
        Account::create($request->all());
        return response()->json(['message' => 'تم حفظ البيانات بنجاح.'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response = Account::find($id);
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $account = Account::find($id);
        $account->update($request->all());
        $account->save();
        return response()->json(['message' => 'تم التعديل بنجاح.'], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $account = Account::find($id);
        if ($account->editable == 1) {
            Account::destroy($id);
            return response()->json(['message' => 'تم الحذف بنجاح.'], 200);
        }
        return response()->json(['message' => 'Uneditable'], 422);
    }

    // Search
    public function search(Request $request)
    {
        $response = Account::where('account_name', 'LIKE',  '%' . $request->search . '%')->get();
        return response()->json($response, 200);
    }

    // Sort
    public function sort(Request $request)
    {
        $response = Account::orderBy($request->col, $request->direction)->get();
        return response()->json($response, 200);
    }

    // Filter
    public function filter(Request $request)
    {
        if ($request->tax_type == '') {
            $response = Account::all();
            return response()->json($response, 200);
        }
        $response = Account::where('tax_type', $request->tax_type)->get();
        return response()->json($response, 200);
    }
}
