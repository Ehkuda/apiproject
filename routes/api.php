<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
 
Route::group(['middleware' => 'auth:sanctum'], function () {
	Route::apiResource('products', ProductController::class);
});
Route::post("login",[UserController::class,'index']);

Route::apiResource('products', ProductController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
