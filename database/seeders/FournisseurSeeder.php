<?php

namespace Database\Seeders;

use App\Models\Fournisseur;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FournisseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     // Ajout des données  dans Fournisseur la base de données 
    public function run()
    {
        $founisseur = Fournisseur::create([
            'nom' =>'Moussa',
            'adresse' =>'Grand Dakar',
            'contact1' =>'+221 76 567 23 54',
            'contact2' =>'+221 77 887 23 59',
            'email' =>'moussa@gmail.com',
            'website' =>'https://service.sn/',
            'fax' =>'33 865 98 97',
            'type_service_id' =>1
        ]);
    }
}
