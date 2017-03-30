<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaChampions extends Migration
{

     public function up(){
        //
        Schema::create('champions', function(Blueprint $table) {
            $table->increments("id");
            $table->string("champ");
            $table->string("posicion");
            $table->integer("year");
            $table->integer("precio");
            $table->string("region");
            $table->integer("vida");
            $table->float("regVida");
            $table->integer("mana");
            $table->float("regMana");
            $table->integer("dmg");
            $table->float("attSpeed");
            $table->float("armor");
            $table->float("magicResist");
            $table->integer("movement");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champs');
    }
}
