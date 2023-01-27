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
    // Ajout des attributs de la table agence
    public function up()
    {
        Schema::create('agences', function (Blueprint $table) {
            $table->id();
            $table->string('nom_agence');
            $table->string('adresse');
            $table->string('localisation');
            $table->string('contact1');
            $table->string('contact2');
            $table->string('email');
            $table->string('siteWeb');
            $table->string('fax');
            $table->date('horaires');
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
        Schema::dropIfExists('agences');
    }
};
