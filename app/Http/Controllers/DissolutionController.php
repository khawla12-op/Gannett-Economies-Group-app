<?php

namespace App\Http\Controllers;
use App\Models\Dissolution;

use Illuminate\Http\Request;

class DissolutionController extends Controller
{
    public function storeDissolutionData(Request $request)
    {
        $data = $request->validate([
            'personne_a_contacter' => 'nullable|string',
            'nom' => 'nullable|string',
            'email' => 'nullable|email',
            'telephone' => 'nullable|string',
            'denomination_sociale' => 'nullable|string',
            'forme' => 'nullable|string',
            'siege_social' => 'nullable|string',
            'capital_social' => 'nullable|string',
            'numero_rc' => 'nullable|string',
            'ville2' => 'nullable|string',
            'par_decision_en_date' => 'nullable|date',
            'dissolution_anticipee_date' => 'nullable|date',
            'prenom_nom_liquidateur' => 'nullable|string',
            'adresse_liquidateur' => 'nullable|string',
            'siege_de_liquidation' => 'nullable|string',
            'depot_legal' => 'nullable|string',
            'ville' => 'nullable|string',
            'date_depot' => 'nullable|date',
            'numero_depot' => 'nullable|integer',
        ]);

        Dissolution::create($data);
        return redirect()->back()->with('success', 'Form data submitted successfully!');
    }
}
