<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSarlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sarls', function (Blueprint $table) {
            $table->id();
            $table->string('Personne_a_contacter');
            $table->string('Email');
            $table->string('Téléphone');
            $table->string('A_publier_dans')->nullable();
            $table->string('Nombre_de_journaux')->nullable();
            $table->string('Aux_termes_dun_acte')->nullable();
            $table->date('en_date_du')->nullable();
            $table->string('Numéro_R_C')->nullable();
            $table->string('Forme')->nullable();
            $table->string('Dénomination_sociale')->nullable();
            $table->string('Objet_social')->nullable();
            $table->string('Siège_social')->nullable();
            $table->integer('Durée')->nullable();
            $table->string('montant_du_capital_social_en_DHS')->nullable();
            $table->string('nombre_de_parts_sociales')->nullable();
            $table->string('Valeur_dune_part_sociale')->nullable();
            $table->string('Nom_Prénom_et_adresse_1er_associé')->nullable();
            $table->string('Le_nombre_de_parts') ->nullable();
            $table->string('Nom_Prénom_et_adresse_2er_associé') ->nullable();           
            $table->string('Le_nombre_de_parts_2')->nullable();
            $table->text('Nom_Prénom_adresse_et_nombre_de_parts_des_autres_associés')->nullable();
            $table->string('total_des_parts')->nullable();
            $table->string('Gérance')->nullable();
            $table->string('Nom_Prénom_et_adresse_du_gérant_ou_du_co_gerant')->nullable();
            $table->string('co_gerant_1')->nullable();
            $table->string('Nom_Prénom_et_adresse_du_gérant')->nullable();
            $table->string('co_gerant_2')->nullable();
            $table->string('Nom_Prénom_et_adresse_du_gérant2')->nullable();
            $table->string('Année_Sociale')->nullable();
            $table->string('Text_libre')->nullable();
            $table->string('Le_dépôt_légal_a_été_effectué_au')->nullable();
            $table->string('ville')->nullable();
            $table->date('le')->nullable();
            $table->string('numero_de_dépôt')->nullable();
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
        Schema::dropIfExists('sarls');
    }
}
