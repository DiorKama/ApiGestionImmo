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
    // Ajout des attributs de la table type_proprietes
    public function up()
    {
        Schema::create('type_proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('appartement')->nullable();
            $table->string('bureau')->nullable();
            $table->string('studio')->nullable();
            $table->string('magasin')->nullable();
            $table->string('duplex')->nullable();
            $table->string('villa')->nullable();
            $table->foreignId('propriete_id')->constrained()->nullable();
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
        Schema::dropIfExists('type_proprietes');
    }
};
