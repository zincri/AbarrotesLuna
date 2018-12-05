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


Route::get('/', function() { //ruta login
    if(Auth::check()){
        return redirect('/home');
    }
    return view('auth.login');
});


Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('/usuarios','UsuariosController'); //Falta este modulo
Route::resource('/productos','ProductoController');
Route::resource('/tipo_producto','TipoProductoController');
Route::resource('/proveedores','ProveedoresController');