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
    // Ajout des attributs de la table factures
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('numeroFacture');
            $table->date('Date');
            $table->boolean('etatPayement');
            $table->integer('montant');
            $table->foreignId('locataire_id')->constrained();
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
        Schema::dropIfExists('factures');
    }
};
