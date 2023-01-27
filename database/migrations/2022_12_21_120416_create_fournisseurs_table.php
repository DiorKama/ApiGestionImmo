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
    public function up()
    {
        // Ajout des attributs de la table fournisseurs
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->string('contact1');
            $table->string('contact2');
            $table->string('email');
            $table->string('webSite');
            $table->string('fax');
            $table->foreignId('type_service_id')->constrained();
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
        Schema::dropIfExists('fournisseurs');
    }
};
