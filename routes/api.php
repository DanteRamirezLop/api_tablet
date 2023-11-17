<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CatergoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UnitController;
use App\Http\Controllers\Api\TransactionPaymentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('users',UserController::class)->names('api.users');
Route::apiResource('categories',CatergoryController::class)->names('api.categories');
Route::apiResource('products',ProductController::class)->names('api.products');
Route::apiResource('units',UnitController::class)->names('api.units');
Route::apiResource('users',UserController::class)->names('api.users');
Route::apiResource('transaction',TransactionPaymentController::class)->names('api.transactionPayment');



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

