<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MoviesController@showAll');

Auth::routes();

Route::get('contact', function () {
    return view('contact');
});
Route::get('/home', 'HomeController@showAll')->name('home');
Route::get('/movies', 'MoviesController@showAll');
Route::get('/movies/create', 'MoviesController@create');
Route::post('/movies', 'MoviesController@store');
Route::get('/movies/{movie}', 'HomeController@show')->name('showDetail');
Route::get('/movies/{movie}/admin', 'MoviesController@edit')->name('editOrdelete');
Route::put('/movies/{movie}', 'MoviesController@update');
Route::delete('/movies/{movie}', 'MoviesController@delete');

