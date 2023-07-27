<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AjoutChangement;

class AjoutChangementController extends Controller
{
    public function storeAjoutChangementData(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'Personne_a_contacter' => 'required',
            'Email' => 'required|email',
            'Telephone' => 'required',
            'A_publier_dans' => 'nullable',
            'Nombre_de_journaux' => 'nullable',
            'Nom_de_la_societe_Denomination' => 'nullable',
            'FJ' => 'nullable',
            'Siege_social_Denomination' => 'nullable',
            'Capital' => 'nullable|integer',
            'RC' => 'nullable|integer',
            'Par_decision' => 'nullable',
            'Date_decision' => 'nullable|date',
            'Nomination_nouveau_gerant' => 'nullable',
            'Remplacement_de' => 'nullable',
            'Modification_article' => 'nullable',
            'Modifications_compter_du' => 'nullable|date',
            'Espace_plus_1' => 'nullable',
            'Espace_plus_2' => 'nullable',
            'Depot_legal' => 'nullable',
            'Ville' => 'nullable',
            'Date_depot' => 'nullable|date',
            'Numero_de_depot' => 'nullable|integer',
        ]);

        // Create a new Ajout instance and save it to the database
        ajoutchangement::create($validatedData);
        return redirect()->back()->with('success', 'Form data submitted successfully!');


        // Add any additional logic or redirect response as per your requirements
    }
}
