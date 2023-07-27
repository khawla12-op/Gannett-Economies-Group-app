<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modifications;



class ModificationsController extends Controller
{
  
    public function storeModificationsData(Request $request)
    {
        $annonceLegale = new Modifications;
        $annonceLegale->denomination_sociale = $request->input('denomination_sociale');
        $annonceLegale->forme_sociale = $request->input('forme_sociale');
        $annonceLegale->montant_capital_social = $request->input('montant_capital_social');
        $annonceLegale->adresse_siege_social = $request->input('adresse_siege_social');
        $annonceLegale->numero_rcs = $request->input('numero_rcs');
        $annonceLegale->Siege_social=$request->input('Siege_social');
        $annonceLegale->capital_social=$request->input('capital_social');
        $annonceLegale->la_societe=$request->input('la_societe');
        $annonceLegale->ville=$request->input('ville');
        $annonceLegale->extraordinaire_date=$request->input('extraordinaire_date');
        $annonceLegale->personne_a_contacter = $request->input('personne_a_contacter');
        $annonceLegale->email = $request->input('email');
        $annonceLegale->telephone = $request->input('telephone');
        $annonceLegale->a_publier_dans = $request->input('a_publier_dans');
        $annonceLegale->nombre_journaux = $request->input('nombre_journaux');
        
        $annonceLegale->ajouter_cession_parts_sociales = $request->input('ajouter_cession_parts_sociales');
        $annonceLegale->ajouter_changement_gerant = $request->input('ajouter_changement_gerant');
        $annonceLegale->ajouter_modification_objet_sociale = $request->input('ajouter_modification_objet_sociale');
        $annonceLegale->ajouter_transfert_siege_social = $request->input('ajouter_transfert_siege_social');
        $annonceLegale->ajouter_changement_denomination = $request->input('ajouter_changement_denomination');
        $annonceLegale->ajouter_transformation_forme_juridique = $request->input('ajouter_transformation_forme_juridique');

        $annonceLegale->ajouter_texte_libre = $request->input('ajouter_texte_libre');
        $annonceLegale->modification_article = $request->input('modification_article');
        $annonceLegale->numeros_articles_modifies = $request->input('numeros_articles_modifies');
        $annonceLegale->depot_legal = $request->input('depot_legal');
        $annonceLegale->ville_depot = $request->input('ville_depot');
        $annonceLegale->date_depot = $request->input('date_depot');
        $annonceLegale->numero_depot = $request->input('numero_depot');

        $annonceLegale->save();

        return redirect()->back()->with('success', 'Form data submitted successfully!');
    }
}

