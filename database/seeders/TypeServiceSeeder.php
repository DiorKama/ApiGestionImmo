<?php

namespace Database\Seeders;

use App\Models\TypeService;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Ajout des données typeService dans la base de données 
    public function run()
    {
        $typeService = TypeService::create([
             'nom_service' =>'Electricite',
             'maintenance_id' =>1
        ]);
    }
}
