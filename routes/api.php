<?php

use App\Http\Controllers\SensorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Study;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/study', function (Request $request) {
    $study = Study::all()->first();
    return json_encode([
        'status' => 0,
        'data' => $study,
    ]);
});

Route::post('/sensor', [SensorController::class, 'store']);
Route::get('/sensor', [SensorController::class, 'index']);