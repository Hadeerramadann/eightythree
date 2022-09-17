<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\compaignController;

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

Route::get('/', 'App\Http\Controllers\compaignController@index');
Route::resource('compaign', 'App\Http\Controllers\compaignController');

 Route::get('show_images', 'App\Http\Controllers\compaignController@show')->name('show_images');

 Route::get('edit/{compaign_id}', 'App\Http\Controllers\compaignController@edit')->name('edit');
 Route::post('update/{compaign_id}', 'App\Http\Controllers\compaignController@update')->name('update');
 Route::post('edit/delete_image/{id}', 'App\Http\Controllers\compaignController@delete_image')->name('delete_image');
 Route::post('/add', 'App\Http\Controllers\compaignController@store')->name('add');

 
