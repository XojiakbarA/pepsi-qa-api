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

Route::middleware(['auth:sanctum'])->get('/auth', function (Request $request) {
    return $request->user();
});

Route::apiResource('products', \App\Http\Controllers\ProductController::class);
Route::apiResource('formats', \App\Http\Controllers\FormatController::class);
Route::apiResource('lines', \App\Http\Controllers\LineController::class);
Route::apiResource('container-suppliers', \App\Http\Controllers\ContainerSupplierController::class);
Route::apiResource('caps', \App\Http\Controllers\CapController::class);
Route::apiResource('users', \App\Http\Controllers\UserController::class);
Route::apiResource('tanks', \App\Http\Controllers\TankController::class);
Route::apiResource('shift-modes', \App\Http\Controllers\ShiftModeController::class);
Route::apiResource('factories', \App\Http\Controllers\FactoryController::class);
Route::apiResource('syrups', \App\Http\Controllers\SyrupController::class);
Route::apiResource('removal-torque-analyses', \App\Http\Controllers\RemovalTorqueAnalysisController::class);
Route::apiResource('section-weight-analyses', \App\Http\Controllers\SectionWeightAnalysisController::class);
Route::apiResource('water-analyses', \App\Http\Controllers\WaterAnalysisController::class);
Route::apiResource('secure-seal-tests', \App\Http\Controllers\SecureSealTestController::class);
Route::apiResource('burst-tests', \App\Http\Controllers\BurstTestController::class);
Route::apiResource('carbonated-analyses', App\Http\Controllers\CarbonatedAnalysisController::class);
Route::apiResource('non-carbonated-analyses', App\Http\Controllers\NonCarbonatedAnalysisController::class);

Route::put('shifts', [\App\Http\Controllers\ShiftController::class, 'updateValues']);
Route::apiResource('shifts', \App\Http\Controllers\ShiftController::class);
