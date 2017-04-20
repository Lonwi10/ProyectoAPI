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

Route::get('/busqueda/{year}',function(request $request, $year){
	$busqueda = Champion::selectRaw('region as variable, count(*) as total')->where('year','like',"%".$year."%")->groupBy("region")->get();
	return response()->json($busqueda);
});