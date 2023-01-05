<?php

namespace Database\Seeders;

use App\Models\TypePropriete;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeProprieteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typePropriete = TypePropriete::create([
                 'appartement' =>'Appartement',
                 'bureau' =>'Bureau',
                 'studio' =>'Studio',
                 'magasin' =>'Magasin',
                 'duplex' =>'Duplex',
                 'villa' =>'Villa',
                 'propriete_id' =>1
        ]);
    }
}
