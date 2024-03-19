<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
       
    }
    
   public function index()
   {
       return Table::all();
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
       try {
           $request->validate([
               'name' => 'required|max:255',
               'slug' => 'required|max:255|unique:categories',
           ]);
           $table = Table::create($request->all());
           return $table;
       } catch (\Throwable $th) {
           return $th->getMessage();
       }
   }

   /**
    * Display the specified resource.
    */
   public function show(Table $table)
   {
       return $table;
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, Table $table)
   {
       //
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Table $table)
   {
       $table->delete();
       return "Table Eliminada";
   }
}
