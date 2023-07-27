<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiquidationTable extends Migration
{
    
    public function up()
    {
        Schema::create('liquidations', function (Blueprint $table) {
            $table->id();
            $table->string('personne_a_contacter')->nullable();
            $table->string('nom')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('a_publier_dans')->nullable();
            $table->string('nombre_de_journaux')->nullable();
            $table->string('denomination_sociale')->nullable();
            $table->string('forme')->nullable();
            $table->string('siege_social')->nullable();
            $table->decimal('capital_social', 10, 2)->nullable();
            $table->string('numero_rc')->nullable();
            $table->string('ville2')->nullable();
            $table->date('aux_termes_deliberation_date')->nullable();
            $table->string('nom_prenom_adresse_liquidateur')->nullable();
            $table->string('depot_legal')->nullable();
            $table->string('ville')->nullable();
            $table->date('date_depot')->nullable();
            $table->integer('numero_depot')->nullable();
            $table->string('villeDe')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('liquidations');
    }
}
?>
