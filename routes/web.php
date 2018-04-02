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

Route::get('/', function () {
    return view('login.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/concesionaria', function () {
    return view(' concesionaria.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// API para consumir datos  de la concesionaria
Route::resource('/empresas','ConcesionariaController',['except'=>'show','create','edit']);