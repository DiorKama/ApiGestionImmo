<?php

namespace Database\Seeders;

use App\Models\Proprietaire;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProprietaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proprietaire = Proprietaire::create([
            'nom' => 'Senghor',
            'prenom' => 'Jean Gabriel',
            'adresse' => 'Medina',
            'contact1' =>'(+221) 78 435 09 63',
            'contact2' =>'(+221) 76 266 32 73',
            'email'   =>'gabriel@gmail.com',
            'ville'  =>'Dakar'    
      ]); 
    }
}
