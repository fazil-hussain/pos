<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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



Route::view('login', 'login')->name('login');
Route::post('/auth', 'App\Http\Controllers\AuthController@authenticate')->name('authentication');

Route::middleware(['auth', 'web'])->group(function () {

    Route::get('/', function () {
        return view('layout');
    });

Route::view('home', 'layout')->name('home');
Route::get('logout','App\Http\Controllers\AuthController@logout')->name('logout');
Route::resource('category', 'App\Http\Controllers\CategoryController');
Route::resource('product', 'App\Http\Controllers\ProdcutController');
Route::resource('sale', 'App\Http\Controllers\SaleController');

Route::post('productbycategory','App\Http\Controllers\ProdcutController@productbycategory')->name('productbycategory');
Route::post('fetchproductdetails','App\Http\Controllers\ProdcutController@fetchproductdetails')->name('fetchproductdetails');
});
