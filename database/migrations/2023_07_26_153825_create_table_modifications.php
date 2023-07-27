<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableModifications extends Migration
{
    public function up()
    {
        Schema::create('modifications', function (Blueprint $table) {
            $table->id();
            $table->string('denomination_sociale')->nullable();
            $table->string('forme_sociale')->nullable();
            $table->string('nature_changement')->nullable();
            $table->integer('montant_capital_social')->nullable();
            $table->string('adresse_siege_social')->nullable();
            $table->string('numero_rcs')->nullable();
            $table->string('ville_greffe')->nullable();
            $table->string('type_assemblee')->nullable();
            $table->string('modification')->nullable();
            $table->date('date_effet_modification')->nullable();
            $table->string('personne_a_contacter');
            $table->string('email');
            $table->string('telephone');
            $table->string('a_publier_dans')->nullable();
            $table->string('nombre_journaux')->nullable();
            $table->string('ajouter_cession_parts_sociales')->nullable();
            $table->string('ajouter_changement_gerant')->nullable();
            $table->string('ajouter_modification_objet_sociale')->nullable();
            $table->string('ajouter_transfert_siege_social')->nullable();
            $table->string('ajouter_changement_denomination')->nullable();
            $table->string('ajouter_transformation_forme_juridique')->nullable();
            $table->string('ajouter_texte_libre')->nullable();
            $table->string('modification_article')->nullable();
            $table->string('numeros_articles_modifies')->nullable();
            $table->string('depot_legal')->nullable();
            $table->string('ville_depot')->nullable();
            $table->date('date_depot')->nullable();
            $table->string('numero_depot')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('modifications');
    }
}
