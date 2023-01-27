<?php

namespace Database\Seeders;

use App\Models\Agence;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Ajout des données agence dans la base de données 
    public function run()
    {
        $agence = Agence::create([
            'nom_agence' => 'CDCI',
            'adresse' => 'Mermoz Cite Keur Gorgui',
            'localisation' => 'En face rond point Immeuble Fallou lo',
            'contact1' =>'(+221) 78 591 63 63',
            'contact2' =>'(+221) 77 266 32 73',
            'email'   =>'contact@cdci.sn',
            'siteWeb'  =>'https://cdci.sn/',
            'fax'   => '33 843 37 11',
            'horaires' =>'2022-02-12'   
      ]);
    }
}
