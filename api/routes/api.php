<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\DistanceController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/test', function () {
//     return response()->json([
//         'success' => true
//     ]);
// });

Route::get('/test', [DistanceController::class, 'index']);
Route::post('/distanceInKm', [DistanceController::class, 'calculateDistanceInKilometers']);

Route::get('/ll', function () {
    return response()->json([
        'success' => true
    ]);
});