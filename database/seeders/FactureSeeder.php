<?php

namespace Database\Seeders;

use App\Models\Facture;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Ajout des données Facture dans la base de données 
    public function run()
    {
        $facture = Facture::create([
          'numeroFacture' =>'0F1',
          'Date' =>'2022-02-14',
          'etatPayement' =>1,
          'montant' =>150000,
          'locataire_id' =>1
        ]);
    }
}
