<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapitalsocialTable extends Migration
{
    public function up()
    {
        Schema::create('capital_socials', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Email');
            $table->string('Telephone');
            $table->string('A_publier_dans')->nullable();
            $table->string('Nombre_de_journaux')->nullable();
            $table->string('Nom_de_la_societe_Denomination')->nullable();
            $table->string('FJ')->nullable();
            $table->string('Siege_social_Denomination')->nullable();
            $table->integer('Capital')->nullable();
            $table->integer('RC')->nullable();
            $table->string('Par_decision')->nullable();
            $table->date('Date_decision')->nullable();
            $table->string('Nomination_nouveau_gerant')->nullable();
            $table->string('Remplacement_de')->nullable();
            $table->string('Modification_article')->nullable();
            $table->date('Modifications_compter_du')->nullable();
            $table->string('Espace_plus_1')->nullable();
            $table->string('Espace_plus_2')->nullable();
            $table->string('Depot_legal')->nullable();
            $table->string('Ville')->nullable();
            $table->date('Date_depot')->nullable();
            $table->integer('Numero_de_depot')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('capital_socials');
    }
}
