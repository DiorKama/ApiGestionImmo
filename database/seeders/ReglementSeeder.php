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
    public function run()
    {
        $reglement = Reglement::create([
             'typeReglement' =>'type de reglement',
             'libelle' =>'reglement',
             'locataire_id' =>1
        ]);
    }
}
