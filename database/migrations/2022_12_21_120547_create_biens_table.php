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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('nbrePiece');
            $table->integer('niveau')->nullable();
            $table->integer('nbreChambre')->nullable();
            $table->integer('nbreCuisine')->nullable();
            $table->integer('nbreSalon')->nullable();
            $table->integer('nbreChambreVisite')->nullable();
            $table->integer('nbreParking')->nullable();
            $table->string('piscine')->nullable();
            $table->string('jardin')->nullable();
            $table->string('balcon')->nullable();
            $table->string('ascenseur')->nullable();
            $table->string('buanderie')->nullable();
            $table->foreignId('type_propriete_id')->constrained();
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
        Schema::dropIfExists('biens');
    }
};
