<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sarls;

class SarlsController extends Controller
{
    public function storeFormData(Request $request)
    {
        
        // Validate the form data
        $validatedData = $request->validate([
            'Personne_a_contacter' => 'required',
            'Email' => 'required|email',
            'Téléphone' => 'required',
            // Add other validation rules for your form fields here if needed
        ]);

        // Store the form data in the database
        Sarls::create([
            
            'Personne_a_contacter' => $validatedData['Personne_a_contacter'],
            'Email' => $validatedData['Email'],
            'Téléphone' => $validatedData['Téléphone'],
            'A_publier_dans' => $request->input('A_publier_dans'),
            'Nombre_de_journaux' => $request->input('Nombre_de_journaux'),
            'Aux_termes_dun_acte' => $request->input('Aux_termes_dun_acte'),
            'en_date_du' => $request->en_date_du,
            'Numéro_R_C' => $request->input('Numéro_R_C'),
            'Forme' => $request->input('Forme'),
            'Dénomination_sociale' => $request->input('Dénomination_sociale'),
            'Objet_social' => $request->input('Objet_social'),
            'Siège_social' => $request->input('Siège_social'),
            'Durée' => $request->input('Durée'),
            'montant_du_capital_social_en_DHS' => $request->input('montant_du_capital_social_en_DHS'),
            'nombre_de_parts_sociales' => $request->input('nombre_de_parts_sociales'),
            'Valeur_dune_part_sociale' => $request->input('Valeur_dune_part_sociale'),
            'Nom_Prénom_et_adresse_1er_associé' => $request->input('Nom_Prénom_et_adresse_1er_associé'),
            'Le_nombre_de_parts' => $request->input('Le_nombre_de_parts'),
            'Nom_Prénom_et_adresse_2er_associé' => $request->input('Nom_Prénom_et_adresse_2er_associé'),
            'Le_nombre_de_parts_2' => $request->input('Le_nombre_de_parts_2'),
            'Nom_Prénom_adresse_et_nombre_de_parts_des_autres_associés' => $request->input('Nom_Prénom_adresse_et_nombre_de_parts_des_autres_associés'),
            'total_des_parts' => $request->input('total_des_parts'),
            'Gérance' => $request->input('Gérance'),
            'Nom_Prénom_et_adresse_du_gérant_ou_du_co_gerant' => $request->input('Nom_Prénom_et_adresse_du_gérant_ou_du_co_gerant'),
            'co_gerant_1' => $request->input('co_gerant_1'),
            'Nom_Prénom_et_adresse_du_gérant' => $request->input('Nom_Prénom_et_adresse_du_gérant'),
            'co_gerant_2' => $request->input('co_gerant_2'),
            'Nom_Prénom_et_adresse_du_gérant2' => $request->input('Nom_Prénom_et_adresse_du_gérant2'),
            'Année_Sociale' => $request->input('Année_Sociale'),
            'Text_libre' => $request->input('Text_libre'),
            'Le_dépôt_légal_a_été_effectué_au' => $request->input('Le_dépôt_légal_a_été_effectué_au'),
            'ville' => $request->input('ville'),
            'le' => $request->le,
            'numero_de_dépôt' => $request->input('numero_de_dépôt'),
        ]);
        
        // You can add any additional logic here, such as sending email notifications, etc.
       // Mail::to('khawlaallak@gmail.com')->send(new FormDataNotification($validatedData));
        //Why i got an error?

        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Form data submitted successfully!');
    }
}
