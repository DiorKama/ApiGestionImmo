<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BienSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AgenceSeeder;
use Database\Seeders\ContratSeeder;
use Database\Seeders\FactureSeeder;
use Database\Seeders\LocataireSeeder;
use Database\Seeders\ProprieteSeeder;
use Database\Seeders\ReglementSeeder;
use Database\Seeders\FournisseurSeeder;
use Database\Seeders\MaintenanceSeeder;
use Database\Seeders\TypeServiceSeeder;
use Database\Seeders\ProprietaireSeeder;
use Database\Seeders\TypeProprieteSeeder;
use Database\Seeders\ChargeLocativeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(AgenceSeeder::class);
        $this->call(ProprietaireSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProprieteSeeder::class);
        $this->call(ChargeLocativeSeeder::class);
        $this->call(TypeProprieteSeeder::class);
        $this->call(BienSeeder::class);
        $this->call(LocataireSeeder::class);
        $this->call(FactureSeeder::class);
        $this->call(MaintenanceSeeder::class);  
        $this->call(ReglementSeeder::class);
        $this->call(ContratSeeder::class);
        $this->call(TypeServiceSeeder::class);
        $this->call(FournisseurSeeder::class);
        
    }
}
