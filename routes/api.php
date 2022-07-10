<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\LoginController;
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

Route::post('login', [LoginController::class, 'login']);
Route::post('register', [LoginController::class, 'register']);


Route::middleware('auth:sanctum')->apiResource('channels', ChannelController::class);
Route::middleware('auth:sanctum')->post('logout', [LoginController::class, 'logout']);
