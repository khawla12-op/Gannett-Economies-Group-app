<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SarlsAU extends Model
{
    use HasFactory;

    protected $fillable = [
        'file',
        'Personne_a_contacter',
        'Email',
        'Téléphone',
        'A_publier_dans',
        'Nombre_de_journaux',
        'النسب',
        'الاسم',
        'العنوان',
        'Aux_termes_d_un_acte',
        'en_date_du',
        'Forme',
        'dénomination_sociale_de_la_SARL_AU',
        'description_sommaire_de_l_objet_social',
        'Siège_social',
        'Durée_en_ans',
        'Capital_Social',
        'divisé_en',
        'parts_sociales_de',
        'Gérant',
        'Année_Sociale',
        'Numéro_RC',
        'Ville1',
        'Le_dépôt_légal_a_été_effectué',
        'ville2',
        'le',
        'numéro_de_dépôt',
    ];
}
