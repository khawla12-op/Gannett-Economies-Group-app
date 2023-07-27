<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dissolution extends Model
{
    protected $fillable = [
        'personne_a_contacter',
        'nom',
        'email',
        'telephone',
        'denomination_sociale',
        'forme',
        'siege_social',
        'capital_social',
        'numero_rc',
        'ville2',
        'par_decision_en_date',
        'dissolution_anticipee_date',
        'prenom_nom_liquidateur',
        'adresse_liquidateur',
        'siege_de_liquidation',
        'depot_legal',
        'ville',
        'date_depot',
        'numero_depot',
    ];
}
