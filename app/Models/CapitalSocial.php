<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapitalSocial extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Nom',
        'Email',
        'Telephone',
        'A_publier_dans',
        'Nombre_de_journaux',
        'Nom_de_la_societe_Denomination',
        'FJ',
        'Siege_social_Denomination',
        'Capital',
        'RC',
        'Par_decision',
        'Date_decision',
        'Nomination_nouveau_gerant',
        'Remplacement_de',
        'Modification_article',
        'Modifications_compter_du',
        'Espace_plus_1',
        'Espace_plus_2',
        'Depot_legal',
        'Ville',
        'Date_depot',
        'Numero_de_depot',
    ];

}
