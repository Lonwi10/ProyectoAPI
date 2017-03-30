<?php

use Illuminate\Database\Seeder;
use App\Champion;

class ChampionSeeder extends Seeder
{

    public function run()
    {
        $row = 1;
		if (($handle = fopen("lol1.csv", "r")) !== FALSE) {
			$columnes = fgetcsv($handle, 1000, ",");
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $row++;
		        $champion = new Champion();
		        $champion->champ = $data[0];
		        $champion->posicion = $data[1];
		        $champion->year = $data[2];
		        $champion->precio = $data[3];
		        $champion->region = $data[4];
		        $champion->vida = $data[5];
		        $champion->regVida = $data[6];
		        $champion->mana = $data[7];
		        $champion->regMana = $data[8];
		        $champion->dmg = $data[9];
		        $champion->attSpeed = $data[10];
		        $champion->armor = $data[11];
		        $champion->magicResist = $data[12];
		        $champion->movement = $data[13];
		        $champion->save();

		    }
		    fclose($handle);
		}
    }
}
