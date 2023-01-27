<?php

namespace Database\Seeders;

use App\Models\Reglement;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReglementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Ajout des données  dans reglement la base de données 
    public function run()
    {
        $reglement = Reglement::create([
             'typeReglement' =>'type de reglement',
             'libelle' =>'reglement',
             'locataire_id' =>1
        ]);
    }
}
