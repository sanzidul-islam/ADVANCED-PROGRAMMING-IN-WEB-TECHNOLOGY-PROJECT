<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRegistationController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\CustomerReviewController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/AdminRegistationApi',[AdminRegistationController::class,'AdminRegistationApi']);
Route::post('/AdminRegistationApi',[AdminRegistationController::class,'AdminRegistationApiPost']);
Route::get('/hotelApi',[HotelController::class,'hotelApi']);
Route::post('/login',[AdminRegistationController::class,'login']);
Route::post('/logout',[AdminRegistationController::class,'logout']);
Route::get('/Buslistapi',[BusController::class,'Buslistapi']);
Route::post('/Buslistapi',[BusController::class,'Buslistapipost']);
Route::get('/CustomerReview',[CustomerReviewController::class,'CustomerReviewapi']);
Route::post('/CustomerReview',[CustomerReviewController::class,'CustomerReviewapipost']);