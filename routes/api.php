<?php

use App\Http\Controllers\Api\v1\ProductController;
use App\Http\Controllers\Api\v1\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
  
});

Route::group(['prefix'=>'v1'], function(){
    Route::apiResource('transaction', TransactionController::class);
    Route::apiResource('product', ProductController::class);
});

