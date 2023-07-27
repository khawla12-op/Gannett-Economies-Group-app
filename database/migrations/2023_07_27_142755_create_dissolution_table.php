<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDissolutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('dissolutions', function (Blueprint $table) {
                $table->id();
                $table->string('personne_a_contacter')->nullable();
                $table->string('nom')->nullable();
                $table->string('email')->nullable();
                $table->string('telephone')->nullable();
                $table->string('denomination_sociale')->nullable();
                $table->string('forme')->nullable();
                $table->string('siege_social')->nullable();
                $table->string('capital_social')->nullable();
                $table->string('numero_rc')->nullable();
                $table->string('ville2')->nullable();
                $table->date('par_decision_en_date')->nullable();
                $table->date('dissolution_anticipee_date')->nullable();
                $table->string('prenom_nom_liquidateur')->nullable();
                $table->string('adresse_liquidateur')->nullable();
                $table->string('siege_de_liquidation')->nullable();
                $table->string('depot_legal')->nullable();
                $table->string('ville')->nullable();
                $table->date('date_depot')->nullable();
                $table->integer('numero_depot')->nullable();
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
        Schema::dropIfExists('dissolutions');
    }
}
