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
    return view('frontend');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware(['auth'])->group(function () {
    Route::resource('categories','CategoryController');
    Route::resource('posts','PostController');
    Route::resource('salarios', 'SalarioController');
    Route::resource('noticias', 'NoticiaController');
});

//rutas frontend
Route::get('/','FrontController@index');
Route::get('post/{slug}','FrontController@post');

Route::get('noticia/{titulo}','FrontController@noticia');

