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
Auth::routes();

Route::get('/', function () {
    return view('home');
});



Route::get('/home', 'HomeController@index')->name('home');

//Rutas de Servicio de Usuarios
Route:: resource('users', 'UserController');

//Rutas de Servicio de Productos
Route::resource('products', 'ProductController');

//Rutas de Servicio de Facturas
Route::resource('bills', 'BillController');

Route::get('/getBills', 'BillControler@getBills');
Route::get('/getBillsByUser', 'BillController@getBillsByUser');
Route::get('/getBillsByProduct', 'BillController@getBillsByProduct');