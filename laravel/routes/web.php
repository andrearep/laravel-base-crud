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

Route::get('comics', 'PageController@index')->name('posts');
Route::get('comics/create',  'PageController@create')->name('posts.create');
Route::post('comics',  'PageController@store')->name('posts.store');
Route::get('comics//{comic}',  'PageController@show')->name('posts.show');
Route::get('comics//{comic}/edit',  'PageController@edit')->name('posts.edit');
Route::put('comics/{comic}',  'PageController@update')->name('posts.update');
Route::delete('comics/{comic}',  'PageController@destroy')->name('posts.delete');