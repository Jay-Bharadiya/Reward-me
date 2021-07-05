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
Route::post('/v1/user','App\Http\Controllers\UserController@index');
Route::post('/v1/logout','App\Http\Controllers\UserController@logout');
Route::post('/v1/pricing','App\Http\Controllers\UserController@pricing');
Route::post('/v1/payment_type','App\Http\Controllers\UserController@payment_type');
