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

Route::post('auth/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

Route::controller(UserController::class)->group(function(){
    Route::get('users', [App\Http\Controllers\Api\UserController::class, 'index']);
    Route::get('users/{id}', [App\Http\Controllers\Api\UserController::class, 'show']);
    Route::post('users', [App\Http\Controllers\Api\UserController::class, 'store']);
    Route::put('users/{id}', [App\Http\Controllers\Api\UserController::class, 'update']);
    Route::delete('users/{id}', [App\Http\Controllers\Api\UserController::class, 'destroy']);

});