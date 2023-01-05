<?php

namespace Database\Seeders;

use App\Models\Locataire;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocataireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locataire = Locataire::create([
             'nom' =>'Ndiaye',
             'prenom' =>'Astou',
             'telephone' =>'+221 77 545 54 68',
             'dateLocation' =>'2022-02-09',
             'email' =>'astou@gmail.com',
             'cni' =>'202254789009',
             'bulletinSalaire' =>'https://t3.ftcdn.net/jpg/02/46/26/38/360_F_246263828_JbJy4qrCZsZe64EHZiTqkhMBzM62EXDO.jpg',
             'profession' =>'Formateur',
             'note' =>'Ecrire une note',
             'nationalite' =>'Senegalaise',
             'propriete_id' =>1
        ]);
    }
}
