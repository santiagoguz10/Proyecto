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

Route::resource('clientes', 'ClientesController', [
    'names' => [
        'index' => 'clientes.index'
    ]]);

//ruta
//alias
//el controlador@metodo que se va invocar.
Route::delete('clientes/destroy/{id}', [
		'as'=> 'clientesDestroy', 
        'uses' => 'ClientesController@destroy'
]);		



Route::get('clientes/create', [
		'as'=> 'clientes.create', 
        'uses' => 'ClientesController@create'
]);


Route::post('clientes/store', [
		'as'=> 'clientes.store', 
        'uses' => 'ClientesController@store'
]);

Route::get('clientes/edit/{id}', [
		'as'=> 'clientes.edit', 
        'uses' => 'ClientesController@edit'
]);

Route::post('clientes/update', [
		'as'=> 'clientes.update', 
        'uses' => 'ClientesController@update'
]);




Route::get('/', function () {
    return view('welcome');
});

Route::resource('ventas', 'VentasController', [
    'names' => [
        'index' => 'ventas.index'
    ]]);



Route::resource('ventas', 'VentasController', [
    'names' => [
        'index' => 'ventas.index'
    ]]);

//ruta
//alias
//el controlador@metodo que se va invocar.
Route::delete('ventas/destroy/{id}', [
        'as'=> 'ventasDestroy', 
        'uses' => 'VentasController@destroy'
]);     



Route::get('ventas/create', [
        'as'=> 'ventas.create', 
        'uses' => 'VentasController@create'
]);


Route::post('ventas/store', [
        'as'=> 'ventas.store', 
        'uses' => 'VentasController@store'
]);

Route::get('ventas/edit/{id}', [
        'as'=> 'ventas.edit', 
        'uses' => 'VentasController@edit'
]);

Route::post('ventas/update', [
        'as'=> 'ventas.update', 
        'uses' => 'VentasController@update'
]);