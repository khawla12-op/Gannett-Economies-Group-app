<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cession extends Model
{   
    use HasFactory;
    protected $table = 'cessions';
    protected $fillable = [
        'file',
        'Personne_a_contacter',
        'Email',
        'Télephone',
        'A_publier_dans',
        'Nombre_de_journaux',
        'Dénomination_sociale_de_la_société',
        'Forme',
        'Lieu_du_siège_social_de_la_société',
        'montant_du_capital_social_en_DH',
        'numéro_RC',
        'ville2',
        'L’assemblée_générale_extraordinaire_en',
        'La_nomination_d_un_nouveau_gérant_dans_la_société_soit',
        'En_remplacement_de',
        'Nom_et_prénom_cède',
        'nombredeparts',
        'Nom_et_prénom',
        'Texte_libre',
        'Nom_Prénom',
        'Nombre_de_parts',
        'monsieur',
        'Nombre_de_parts_',
        'monsieur_',
        'Nombre_de_parts__',
        'Total_des_parts',
        'numéro_d_article_des_statuts',
        'Le_dépôt_légal_a_été_effectué',
        'ville',
        'le',
        'numéro_de_dépôt',
    ];
}
