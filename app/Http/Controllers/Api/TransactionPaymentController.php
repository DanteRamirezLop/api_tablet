<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TransactionPayment;
use Illuminate\Http\Request;

class TransactionPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth:api');
        
     }
     
    public function index()
    {
        $transaction = TransactionPayment::all();

        return $transaction;
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
    public function show(TransactionPayment $transactionPayment)
    {
        return $transactionPayment;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransactionPayment $transactionPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionPayment $transactionPayment)
    {
        //
    }
}
