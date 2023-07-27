<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modifications extends Model
{
    use HasFactory;
    protected $table = 'modifications'; // Assuming the table name is 'annonce_legales'

    protected $fillable = [
        'denomination_sociale',
        'forme_sociale',
        'Siege_social',
        'capital_social',
        'extraordinaire_date',
        'la_societe',
        'ville',
        'montant_capital_social',
        'adresse_siege_social',
        'numero_rcs',
        'personne_a_contacter',
        'email',
        'telephone',
        'a_publier_dans',
        'nombre_journaux',
        'ajouter_cession_parts_sociales',
        'ajouter_changement_gerant',
        'ajouter_modification_objet_sociale',
        'ajouter_transfert_siege_social',
        'ajouter_changement_denomination',
        'ajouter_transformation_forme_juridique',
        'ajouter_texte_libre',
        'modification_article',
        'numeros_articles_modifies',
        'depot_legal',
        'ville_depot',
        'date_depot',
        'numero_depot',
    ];
}
