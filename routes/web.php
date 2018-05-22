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
    return view('Principal');
});

Route::get('/LoginRegister', function () {
    return view('LoginRegister');
});

Route::get('AñadirPartido', function (){
    return view('AñadirPartido');
});

Route::post('/Login', "LoginRegisterController@login");

Route::post('/Register', "LoginRegisterController@register");

Route::get('/CerrarSesion', 'CerrarSesionController@cerrarSesion');

Route::get('/AñadiPartido', 'AñadirPartido@añadirPartido');

//pelopicopata
//66666


