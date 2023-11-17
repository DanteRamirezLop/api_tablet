<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TaxRate;
use Illuminate\Http\Request;

class TaxRateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
       
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tax = TaxRate::all();
        return $tax;
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
    public function show(TaxRate $taxRate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaxRate $taxRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaxRate $taxRate)
    {
        //
    }
}
