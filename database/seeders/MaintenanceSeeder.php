<?php

namespace Database\Seeders;

use App\Models\Maintenance;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Ajout des données Maintenance dans la base de données 
    public function run()
    {
        $maintenance = Maintenance::create([
            'description_maint' =>'decrire la maintenance',
            'buget' =>15000,
            'dateDebut' =>'2023-01-12',
            'dateFin' =>'2023-09-12',
            'propriete_id' =>1
        ]);
    }
}
