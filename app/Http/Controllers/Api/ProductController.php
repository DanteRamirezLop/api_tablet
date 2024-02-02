<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
         //return Product::all();
         $products = Product::all();
         $products->map(function($item, $key) {
             $item->price = $item->variation->first()->sell_price_inc_tax;
             $item->picture = config('services.trading.url').'/uploads/img/'.$item->image;
         });
         return $products;
     }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
                'business_id' => 'required',
                'sku' => 'required',
                'created_by' => 'required',
            ]);
            $product = Product::create($request->all());
            return $product;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product->picture = config('services.trading.url').'/uploads/img/'.$product->image;
        $product->price = $product->variation->first()->sell_price_inc_tax;
        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
