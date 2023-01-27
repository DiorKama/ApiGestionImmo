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
    // Ajout des attributs de la table charge_locatives
    public function up()
    {
        Schema::create('charge_locatives', function (Blueprint $table) {
            $table->id();
            $table->string('nom_charge');
            $table->string('description');
            $table->integer('taux');
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
        Schema::dropIfExists('charge_locatives');
    }
};
