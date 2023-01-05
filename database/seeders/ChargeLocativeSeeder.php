<?php

namespace Database\Seeders;

use App\Models\ChargeLocative;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChargeLocativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chargeLocative = ChargeLocative::create([
            'nom_charge' =>'charge location',
            'description' =>'description charge locative',
            'taux' =>15000,
            'propriete_id' =>1
        ]);
    }
}
