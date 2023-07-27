<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSarlsAUTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sarlsau', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('Personne_a_contacter');
            $table->string('Email');
            $table->string('Téléphone');
            $table->string('A_publier_dans')->nullable();
            $table->string('Nombre_de_journaux')->nullable();
            $table->string('النسب')->nullable();
            $table->string('الاسم')->nullable();
            $table->string('العنوان')->nullable();
            $table->string('Aux_termes_d_un_acte')->nullable();
            $table->date('en_date_du')->nullable();
            $table->string('Forme')->nullable();
            $table->string('dénomination_sociale_de_la_SARL_AU')->nullable();
            $table->string('description_sommaire_de_l_objet_social')->nullable();
            $table->string('Siège_social')->nullable();
            $table->integer('Durée_en_ans')->nullable();
            $table->integer('Capital_Social')->nullable();
            $table->integer('divisé_en')->nullable();
            $table->integer('parts_sociales_de')->nullable();
            $table->string('Gérant')->nullable();
            $table->string('Année_Sociale')->nullable();
            $table->string('Numéro_RC')->nullable();
            $table->string('Ville1')->nullable();
            $table->string('Le_dépôt_légal_a_été_effectué')->nullable();
            $table->string('ville2')->nullable();
            $table->date('le')->nullable();
            $table->string('numéro_de_dépôt')->nullable();
            $table->timestamps();
        });
    }

   
    //Where is the error here?return void
    
    public function down()
    {
        Schema::dropIfExists('sarlsau');
    }
}
