<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Ajout des attributs de la table maintenances
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->string('description_maint');
            $table->integer('buget');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->foreignId('propriete_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenances');
    }
};
