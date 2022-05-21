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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('products', \App\Http\Controllers\ProductController::class);
Route::apiResource('formats', \App\Http\Controllers\FormatController::class);
Route::apiResource('lines', \App\Http\Controllers\LineController::class);
Route::apiResource('container-suppliers', \App\Http\Controllers\ContainerSupplierController::class);
Route::apiResource('caps', \App\Http\Controllers\CapController::class);
Route::apiResource('physical-chemical-analyses', \App\Http\Controllers\PhysicalChemicalAnalysisController::class);