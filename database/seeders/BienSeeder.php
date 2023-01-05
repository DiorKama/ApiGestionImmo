<?php

namespace Database\Seeders;

use App\Models\Bien;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bien = Bien::create([
              'description' =>'description du bien',
              'nbrePiece' =>3,
              'niveau' =>2,
              'nbreChambre' =>3,
              'nbreCuisine' =>1,
              'nbreSalon' =>1,
              'nbreChambreVisite' =>1,
              'nbreparking' =>1,
              'piscine' =>'Piscine',
              'jardin' =>'Jardin',
              'balcon' =>'Balcon',
              'ascenseur' =>'Ascensseur',
              'buanderie' =>'Buanderie',
              'type_propriete_id' =>1
        ]);
    }
}
