<?php

use App\Http\Controllers\PageController;
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

Route::get('comics', 'PageController@index')->name('comics');
Route::get('comics/create',  'PageController@create')->name('comics.create');
Route::post('comics',  'PageController@store')->name('comics.store');
Route::get('comics//{comic}',  'PageController@show')->name('comics.show');
Route::get('comics//{comic}/edit',  'PageController@edit')->name('comics.edit');
Route::put('comics/{comic}',  'PageController@update')->name('comics.update');
Route::delete('comics/{comic}',  'PageController@destroy')->name('comics.delete');

//Route::resource('comics', PageController::class);