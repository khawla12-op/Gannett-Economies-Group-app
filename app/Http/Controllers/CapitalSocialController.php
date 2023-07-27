<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CapitalSocial;

class CapitalSocialController extends Controller
{
    public function storeCapitalSocialData(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'Nom' => 'required',
            'Email' => 'required|email',
            'Telephone' => 'required',
            'A_publier_dans' => 'nullable',
            'Nombre_de_journaux' => 'nullable',
            'Nom_de_la_societe_Denomination' => 'nullable',
            'FJ' => 'nullable',
            'Siege_social_Denomination' => 'nullable',
            'Capital' => 'nullable|numeric',
            'RC' => 'nullable|numeric',
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
            // Add validation rules for other fields
        ]);

        // Create a new CapitalSocial instance and save it to the database
        CapitalSocial::create($validatedData);

        // Optionally, you can redirect back or to a specific route after successful data submission
        return redirect()->back()->with('success', 'Capital Social data saved successfully!');
    }
}
