<?php

use App\Http\Controllers\AutfController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaratonController;
use App\Http\Controllers\TakmicarController;
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

Route::resource('maraton', MaratonController::class)->only('index', 'show');
Route::resource('takmicar', TakmicarController::class)->only('index', 'show');

Route::post('register', [AutfController::class, 'register']);
Route::post('login', [AutfController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('logout', [AutfController::class, 'logout']);
    Route::resource('maraton', MaratonController::class)->only('destroy', 'store');
});
