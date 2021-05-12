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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('logistic', [App\Http\Controllers\LogisticController::class, 'index']);
Route::post('logistic', [App\Http\Controllers\LogisticController::class, 'create']);
Route::put('/logistic/{id}', [App\Http\Controllers\LogisticController::class, 'update']);
Route::delete('/logistic/{id}', [App\Http\Controllers\LogisticController::class, 'delete']);
