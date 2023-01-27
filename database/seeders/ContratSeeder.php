<?php

namespace Database\Seeders;

use App\Models\Contrat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Ajout des données Contrat dans la base de données 
    public function run()
    {
        $contrat = Contrat::create([
           'titreContrat' =>'nom du contrat',
           'description_contrat' =>'contrat pour 6mois',
           'dateDebut' =>'2023-02-13',
           'dateFin' =>'2023-07-13',
           'locataire_id' =>1
        ]);
    }
}
