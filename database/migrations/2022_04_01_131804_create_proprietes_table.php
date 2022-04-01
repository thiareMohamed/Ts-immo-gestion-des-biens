<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->boolean('statut');
            $table->integer('montant');
            $table->integer('surface');
            $table->integer('nombre_piece');
            $table->integer('nombre_etage');
            $table->integer('location_etage');
            $table->foreignId('quartier_id')->constrained('quartiers');
            $table->foreignId('type_propriete_id')->constrained('type_proprietes');
            $table->foreignId('proprietaire_id')->constrained('proprietaires');
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
        Schema::dropIfExists('proprietes');
    }
}
