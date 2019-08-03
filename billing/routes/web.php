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
    return view('auth.login');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/bills', function(){
    return view('bills.bills');
});

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de Servicio de Usuarios
Route:: resource('users', 'UserController');

//Rutas de Servicio de Productos
Route::resource('products', 'ProductController');

//Rutas de Servicio de Facturas
Route::resource('bills', 'BillController');


//Rutas de Servicio de Facturación 
//Route::post('/getBills', 'JoinController@getBills');
Route::get('/viewBills', 'JoinController@getBills');

//Route::post('/getBillsByUser', 'JoinController@getBillsByUser');
Route::get('/viewBillsByUser', 'JoinController@getBillsByUser');

//Route::post('/getBillsByProduct', 'JoinController@getBillsByProduct');
Route::get('/viewBillsbyProduct','JoinController@getBillsByProduct');