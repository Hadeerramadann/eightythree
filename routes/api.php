<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\compaignControllerApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware'=>'api','namespace'=>'App\Http\Controllers\Api'],function(){
    Route::post(uri:'get_compaigns',action:'compaignControllerApi@index');
    Route::post(uri:'add_compaigns',action:'compaignControllerApi@store');
    Route::post(uri:'update_compaigns',action:'compaignControllerApi@update');
    Route::post(uri:'delete_compaigns',action:'compaignControllerApi@destroy');



});