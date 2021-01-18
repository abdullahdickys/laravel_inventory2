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
   Route::resource('products', 'ProductController');
   Route::get('products/detail/{id}', 'ProductController@detail')->name('products.detail');
   Route::resource('suppliers', 'SupplierController');
   Route::resource('po', 'po_controller');
   Route::get('po/products/{supplier}', 'po_controller@get_product')->name('po.products');
   Route::get('po/products/{supplier}', 'po_controller@get_product')->name('po.products');
   // Route::resource('products', 'ProductController');
   // Route::post('products', 'ProductController@store');
});
   	   
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
