<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarls extends Model
{
    use HasFactory;

    protected $fillable = [
        'Personne_a_contacter',
        'Email',
        'Téléphone',
        'A_publier_dans',
        'Nombre_de_journaux',
        'Aux_termes_dun_acte',
        'en_date_du',
        'Numéro_R_C',
        'Forme',
        'Dénomination_sociale',
        'Objet_social',
        'Siège_social',
        'Durée',
        'montant_du_capital_social_en_DHS',
        'nombre_de_parts_sociales',
        'Valeur_dune_part_sociale',
        'Nom_Prénom_et_adresse_1er_associé',
        'Le_nombre_de_parts',
        'Nom_Prénom_et_adresse_2er_associé',
        'Le_nombre_de_parts_2',
        'Nom_Prénom_adresse_et_nombre_de_parts_des_autres_associés',
        'total_des_parts',
        'Gérance',
        'Nom_Prénom_et_adresse_du_gérant_ou_du_co_gerant',
        'co_gerant_1',
        'Nom_Prénom_et_adresse_du_gérant',
        'co_gerant_2',
        'Nom_Prénom_et_adresse_du_gérant2',
        'Année_Sociale',
        'Text_libre',
        'Le_dépôt_légal_a_été_effectué_au',
        'ville',
        'le',
        'numero_de_dépôt',
    ];
}
