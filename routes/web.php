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

Route::get('/m', function () {
    return view('mobile_welcome');
});

Route::get('/categorias', function () {
    return view('categories');
});

Route::get('/categorias/m', function () {
    return view('mobile_categories');
});

Route::get('/contacto', function () {
    return view('contact');
});

Route::get('/contacto/m', function () {
    return view('mobile_contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/m/projects', 'ProjectController');
Route::get('/multimedia/{project}', 'MultimediaController@get');
Route::post('/multimedia/{project}', 'MultimediaController@store');
Route::delete('/multimedia/{multimedia}', 'MultimediaController@destroy');
