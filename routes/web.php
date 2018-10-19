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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/view_cart', 'PagesController@view_cart');
Route::get('/add_product_page', 'PagesController@add_product_page');

// Route::post('/view_product', 'ProductsController@view');
Route::post('/insert_product', 'ProductsController@insert');
Route::post('/update_product/{id}', 'ProductsController@update');
Route::get('/view_product/{id}', 'ProductsController@view');
Route::get('/edit_product/{id}', 'ProductsController@edit');
Route::get('/delete_product/{id}', 'ProductsController@delete');

Route::post('/add_to_cart', 'CartsController@add');
Route::get('/cart_remove/{id}', 'CartsController@remove');

Route::get('/sample/{id}', function($id) {
	return 'This is a test - ' . $id;
});
