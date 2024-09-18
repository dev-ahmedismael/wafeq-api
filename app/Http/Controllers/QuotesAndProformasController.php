<?php

namespace App\Http\Controllers;

use App\Models\QuotesAndProformas;
use Illuminate\Http\Request;

class QuotesAndProformasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return QuotesAndProformas::all();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(QuotesAndProformas $quotesAndProformas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuotesAndProformas $quotesAndProformas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuotesAndProformas $quotesAndProformas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuotesAndProformas $quotesAndProformas)
    {
        //
    }
}
