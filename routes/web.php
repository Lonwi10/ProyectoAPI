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

Route::get('/', "ChampionController@inicio");
Route::get('/grafico1', "ChampionController@grafico1");
Route::get('/grafico2', "ChampionController@grafico2");
Route::get('/externa', "ChampionController@externa");