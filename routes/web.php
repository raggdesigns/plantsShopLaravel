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

Route::get('/', 'AdController@index')->name('ad.index');
Route::get('/{ad}', 'AdController@show')->name('ad.show');

Route::group([
    'prefix' => 'ad',
], function () {
    Route::get('/create', 'AdController@create')->name('ad.create')->middleware('auth');
    Route::get('/edit/{ad}', 'AdController@edit')->name('ad.edit')->middleware('auth');
    Route::post('/', 'AdController@store')->name('ad.store')->middleware('auth');
    Route::post('/update/{ad}', 'AdController@update')->name('ad.update')->middleware('auth');
    Route::get('/delete/{ad}', 'AdController@destroy')->name('ad.delete')->middleware('auth');
});