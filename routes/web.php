<?php

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

/* Route::get('/logout', function(){ */
/*     Auth::logout(); */
/* 		return redirect('/login'); */
/* }) */

Route::group(['middleware'=>'auth'], function(){
   Route::resource('suppliers', 'SupplierController');
   Route::resource('products', 'ProductController');
   // Route::post('products', 'ProductController@store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
