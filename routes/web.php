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

Route::get('/Blog', function () {
    return view('Blog');
});

Route::get('/Liga', function () {
    return view('Liga');
});

Route::get('/Equipo', function () {
    return view('Equipo');
});

Route::get('/Equipos', function () {
    return view('Equipos');
});

Route::get('/AddPartido', function (){
    return view('AddPartido');
});
    
Route::get('/CargarBlog', "BlogController@cargarBlog");

Route::get('/AñadirBlog', function () {
    return view('AñadirBlog');
});

Route::get('/AñadirPartido', function (){
    return view('AñadirPartido');
});

Route::get('/ActulizaPersonajes', function(){
    return view('ActualizaPersonaje');
});

Route::get('/AddPartido2', 'AddJugadorController@addPartido');

Route::get('/AddPersonaje', 'AddJugadorController@actualizaPersonajes');

Route::get('/AddJugador', 'AddJugadorController@addJugador');

Route::post('/Login', "LoginRegisterController@login");

Route::post('/Register', "LoginRegisterController@register");

Route::get('/CerrarSesion', 'CerrarSesionController@cerrarSesion');

Route::post('/NuevoBlog', "BlogController@newBlog");

//pelopicopata
//66666


