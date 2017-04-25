<?php

use Illuminate\Http\Request;
use App\Champion;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posicion',function(request $request){
	$champ = Champion::selectRaw('posicion as variable, count(*) as total')->groupBy("posicion")->get();
//	$champ = Champion::Select("posicion")->get();
	return response()->json($champ);
});

Route::get('/region',function(request $request){
	$region = Champion::selectRaw('region as variable, count(*) as total')->groupBy("region")->get();
	return response()->json($region);
});

Route::get('/precio',function(request $request){
	$precio = Champion::selectRaw('precio as variable, count(*) as total')->groupBy("precio")->get();
	return response()->json($precio);
});

Route::get('/champ',function(request $request){
	$champ = Champion::selectRaw('champ as variable, count(*) as total')->groupBy("champ")->get();
	return response()->json($champ);
});

Route::get('/year',function(request $request){
	$year = Champion::selectRaw('year as variable, count(*) as total')->groupBy("year")->get();
	return response()->json($year);
});