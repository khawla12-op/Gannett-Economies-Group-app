<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Liquidation;

class LiquidationController extends Controller
{
    public function storeLiquidationData(Request $request)
    {
        $data = $request->validate([
            'personne_a_contacter' => 'nullable|string',
            'nom' => 'nullable|string',
            'email' => 'nullable|email',
            'telephone' => 'nullable|string',
            'a_publier_dans' => 'nullable|string',
            'nombre_de_journaux' => 'nullable|string',
            'denomination_sociale' => 'nullable|string',
            'forme' => 'nullable|string',
            'siege_social' => 'nullable|string',
            'capital_social' => 'nullable|numeric',
            'numero_rc' => 'nullable|string',
            'ville2' => 'nullable|string',
            'aux_termes_deliberation_date' => 'nullable|date',
            'nom_prenom_adresse_liquidateur' => 'nullable|string',
            'depot_legal' => 'nullable|string',
            'ville' => 'nullable|string',
            'date_depot' => 'nullable|date',
            'numero_depot' => 'nullable|integer',
            'villeDe' => 'nullable|string',
        ]);

        Liquidation::create($data);

        return redirect()->back()->with('success', 'Form data submitted successfully!');    }
}
