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

Auth::routes();

// Route::get('/logi', 'HomeController@login')->name('logi');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/index', 'LokerController@index')->name('loker.index');
Route::get('/lokers', 'LokerController@lokers')->name('loker.lokers');
Route::get('/loker/{loker}/detail', 'LokerController@detail')->name('loker.detail');

// Route::get('/auth', 'LokerController@auth')->name('auth.passwords.login');




Route::middleware('auth')->group(function() {
    Route::get('/create', 'LokerController@create')->name('loker.create');
    Route::post('/create', 'LokerController@store')->name('loker.store');
    Route::get('/loker/{loker}/edit', 'LokerController@edit')->name('loker.edit');
    Route::PATCH('/loker/{loker}/edit', 'LokerController@update')->name('loker.update');
    Route::get('/loker/{loker}/destroy', 'LokerController@destroy')->name('loker.destroy');
    Route::get('/lokerku', 'LokerController@lokerku')->name('loker.lokerku');
    Route::get('/lokerkuu', 'LokerController@cari')->name('loker.cari');
    });

