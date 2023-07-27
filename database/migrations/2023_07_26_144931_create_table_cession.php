<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCession extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('cessions', function (Blueprint $table) {
            $table->id();
            $table->string('Personne_a_contacter');
            $table->string('Email');
            $table->string('Télephone');
            $table->string('A_publier_dans')->nullable();
            $table->string('Nombre_de_journaux')->nullable();
            $table->string('Dénomination_sociale_de_la_société')->nullable();
            $table->string('Forme')->nullable();
            $table->string('Lieu_du_siège_social_de_la_société')->nullable();
            $table->string('montant_du_capital_social_en_DH')->nullable();
            $table->string('numéro_RC')->nullable();
            $table->string('ville2')->nullable();
            $table->date('L’assemblée_générale_extraordinaire_en')->nullable();
            $table->string('La_nomination_d_un_nouveau_gérant_dans_la_société_soit')->nullable();
            $table->string('En_remplacement_de')->nullable();
            $table->string('Nom_et_prénom_cède')->nullable();
            $table->integer('nombredeparts')->nullable();
            $table->string('Nom_et_prénom')->nullable();
            $table->string('Texte_libre')->nullable();
            $table->string('Nom_Prénom')->nullable();
            $table->integer('Nombre_de_parts')->nullable();
            $table->string('monsieur')->nullable();
            $table->integer('Nombre_de_parts_')->nullable();
            $table->string('monsieur_')->nullable();
            $table->integer('Nombre_de_parts__')->nullable();
            $table->integer('Total_des_parts')->nullable();
            $table->string('numéro_d_article_des_statuts')->nullable();
            $table->string('Le_dépôt_légal_a_été_effectué')->nullable();
            $table->string('ville')->nullable();
            $table->date('le')->nullable();
            $table->string('numéro_de_dépôt')->nullable();
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
        Schema::dropIfExists('cessions');
    }
}
