<?php

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

Route::group(['prefix' => 'products'], function () {
   Route::get('', [\App\Http\Controllers\ProductController::class, 'all']);
   Route::get('{id}', [\App\Http\Controllers\ProductController::class, 'getById']);
   Route::post('', [\App\Http\Controllers\ProductController::class, 'create']);
   Route::put('update/{id}', [\App\Http\Controllers\ProductController::class, 'update']);
   Route::delete('delete/{id}', [\App\Http\Controllers\ProductController::class, 'delete']);
});

Route::group(['prefix' => 'commodities'], function () {
    Route::get('', [\App\Http\Controllers\CommodityController::class, 'all']);
    Route::get('{id}', [\App\Http\Controllers\CommodityController::class, 'getById']);
    Route::post('', [\App\Http\Controllers\CommodityController::class, 'create']);
    Route::put('update/{id}', [\App\Http\Controllers\CommodityController::class, 'update']);
    Route::delete('delete/{id}', [\App\Http\Controllers\CommodityController::class, 'delete']);
});

Route::group(['prefix' => 'invoices'], function () {
    Route::get('', [\App\Http\Controllers\InvoiceController::class, 'all']);
    Route::post('', [\App\Http\Controllers\InvoiceController::class, 'create']);
});
