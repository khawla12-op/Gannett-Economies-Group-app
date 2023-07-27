<?php

namespace App\Http\Controllers;

use App\Models\Cession;
use Illuminate\Http\Request;

class CessionController extends Controller
{
    public function storeFormCessionData(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'Personne_a_contacter' => 'required',
            'Email' => 'required|email',
            'Télephone' => 'required',
            'A_publier_dans' => 'nullable',
            'Nombre_de_journaux' => 'nullable',
            'Dénomination_sociale_de_la_société' => 'nullable|string',
            'Forme' => 'nullable|string',
            'Lieu_du_siège_social_de_la_société' => 'nullable|string',
            'montant_du_capital_social_en_DH' => 'nullable|string',
            'numéro_RC' => 'nullable|string',
            'ville2' => 'nullable|string',
            'L’assemblée_générale_extraordinaire_en' => 'nullable|date',
            'La_nomination_d_un_nouveau_gérant_dans_la_société_soit' => 'nullable|string',
            'En_remplacement_de' => 'nullable|string',
            'Nom_et_prénom_cède' => 'nullable|string',
            'nombredeparts' => 'nullable|integer',
            'Nom_et_prénom' => 'nullable|string',
            'Texte_libre' => 'nullable|string',
            'Nom_Prénom' => 'nullable|string',
            'Nombre_de_parts' => 'nullable|integer',
            'monsieur' => 'nullable|string',
            'Nombre_de_parts_' => 'nullable|integer',
            'monsieur_' => 'nullable|string',
            'Nombre_de_parts__' => 'nullable|integer',
            'Total_des_parts' => 'nullable|integer',
            'numéro_d_article_des_statuts' => 'nullable|string',
            'Le_dépôt_légal_a_été_effectué' => 'nullable|string',
            'ville' => 'nullable|string',
            'le' => 'nullable|date',
            'numéro_de_dépôt' => 'nullable|string',
        ]);

        // Store the form data in the database  
        //Hna kandiro smya dyal model
        Cession::create($validatedData);

        // You can add any additional logic here, such as sending email notifications, etc.

        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Form data submitted successfully!');
    }
}
