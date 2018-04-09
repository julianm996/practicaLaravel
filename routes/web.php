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
/*Pantalla principal*/
Route::get('/', function () {
    return view('welcome');
});
/*Login usuario*/
Route::get('/login', function () {
    return 'Login' ;
})->name('login');
/*Logout usuario*/
Route::get('/logOut', function () {
    return 'logOut' ;
})->name('logOut');

/*Listado películas*/
Route::get('/catalog', function () {
    return 'catalog' ;
})->name('catalog');

/*Vista detalle película {id}*/
Route::get('/catalog/show/{id}', function ($id) {
    return "Movie ID: $id" ;
})->name('showMovie');

/*Añadir película*/
Route::get('/catalog/create', function () {
    return "New Movie" ;
})->name('createMovie');

/*Modificar película {id}*/
Route::get('/catalog/edit/{id}', function ($id) {
    return "Movie to Modify: $id" ;
})->name('editMovie');
