<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChampionController extends Controller
{
   public function inicio() {
        return view('Champions.index');
    } 

    public function grafico1() {
        return view('Champions.grafico1');
    }  
    public function grafico2() {
        return view('Champions.grafico2');
    } 

    public function externa(){
        return view('Champions.externa');
    }
}
