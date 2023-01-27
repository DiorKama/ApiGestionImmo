<?php

namespace Database\Seeders;

use App\Models\Propriete;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProprieteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Ajout des données Propriete dans la base de données 
    public function run()
    {
        $propriete = Propriete::create([
            'nom' => 'Immeuble1',
            'statut' => 1,
            'adresse' =>'liberte6',
            'description' =>'Immeuble à 8étage avec Parking et Ascensseur',
            'photo' =>'https://c8.alamy.com/compfr/d0we06/dans-immeuble-6-etages-d0we06.jpg',
            'localisation' =>'en face rond poind',
            'ville' =>'Dakar',
            'proprietaire_id' =>1,
            'user_id' =>1
        ]);
    }
}
