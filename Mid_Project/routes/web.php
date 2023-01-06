<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRegistationController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\CustomerReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/AdminRegistation',[AdminRegistationController::class,'AdminRegistation'])->name('AdminRegistation');
Route::post('/AdminRegistation',[AdminRegistationController::class,'AdminRegistationsubmit'])->name('AdminRegistation');
Route::get('/logins',[AdminRegistationController::class,'logins'])->name('logins');
Route::post('/logins',[AdminRegistationController::class,'loginSubmit'])->name('logins');
Route::get('/logout',[AdminRegistationController::class,'logouts'])->name('logout');
Route::get('/Admindashboard',[AdminRegistationController::class,'Admindashboard'])->name('Admindashboard')->middleware('Validadmin');
Route::get('/Adminlist',[AdminRegistationController::class,'Adminlist'])->name('Adminlist')->middleware('Validadmin');
Route::get('/Adminlistedit/{id}',[AdminRegistationController::class, 'Adminlistedit'])->name('Adminlistedit');
Route::post('/Adminlistedit',[AdminRegistationController::class, 'AdminlisteditSubmit'])->name('Adminlistedit');
Route::get('/AdminDelete/{id}',[AdminRegistationController::class, 'AdminDelete'])->name('AdminDelete');
//Route::get('/search',[AdminRegistationController::class, 'search'])->name('search');
Route::get('/search','AdminRegistationController@search');

//Hotel
Route::get('/Addhotel',[HotelController::class,'Addhotel'])->name('Addhotel')->middleware('Validadmin');
Route::post('/Addhotel',[HotelController::class,'AddhotelSubmit'])->name('Addhotel');
Route::get('/Hotellist',[HotelController::class,'Hotellist'])->name('Hotellist')->middleware('Validadmin');
Route::get('/HotelDelete/{id}',[HotelController::class, 'HotelDelete'])->name('HotelDelete');

//bus
Route::get('/Buslist',[BusController::class,'Buslist'])->name('Buslist')->middleware('Validadmin');
Route::get('/BusDelete/{id}',[BusController::class, 'BusDelete'])->name('BusDelete');

//customer

Route::get('/Customerdashboard',[CustomerReviewController::class,'Customerdashboard'])->name('Customerdashboard');
Route::get('/Addcomplain',[CustomerReviewController::class,'Addcomplain'])->name('Addcomplain');
Route::post('/Addcomplain',[CustomerReviewController::class,'AddcomplainSubmit'])->name('Addcomplain');
Route::get('/Complainlist',[CustomerReviewController::class,'Complainlist'])->name('Complainlist')->middleware('Validadmin');