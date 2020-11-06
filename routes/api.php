<?php

use App\Http\Controllers\GetLocationController;
use App\Http\Controllers\GetUsersListController;
use App\Http\Controllers\PostLocationController;
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

Route::get('/users', GetUsersListController::class)->name('getLocation');
Route::get('/', GetLocationController::class)->name('getUsers');
Route::post('/', PostLocationController::class)->name('postLocation');
