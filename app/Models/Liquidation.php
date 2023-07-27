<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liquidation extends Model
{
    use HasFactory;
    protected $fillable = [
        'personne_a_contacter',
        'nom',
        'email',
        'telephone',
        'a_publier_dans',
        'nombre_de_journaux',
        'denomination_sociale',
        'forme',
        'siege_social',
        'capital_social',
        'numero_rc',
        'ville2',
        'aux_termes_deliberation_date',
        'nom_prenom_adresse_liquidateur',
        'depot_legal',
        'ville',
        'date_depot',
        'numero_depot',
        'villeDe',
    ];
}
