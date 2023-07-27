<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sarls;

class SarlsAUController extends Controller
{
    public function storeFormSARLSAUData(Request $request)
    {
        
      // Validate the form data, including the uploaded file
      $validatedData = $request->validate([
        'file' => 'nullable|mimes:pdf|max:2048', // Allow PDF files up to 2MB, but it's optional
        'Personne_a_contacter' => 'required',
        'Email' => 'required|email',
        'Téléphone' => 'required',
        'A_publier_dans' => 'nullable',
        'Nombre_de_journaux' => 'nullable',
        'النسب' => 'nullable|string',
        'الاسم' => 'nullable|string',
        'العنوان' => 'nullable|string',
        'Aux_termes_d_un_acte' => 'nullable',
        'en_date_du' => 'nullable|date',
        'Forme' => 'nullable|string',
        'dénomination_sociale_de_la_SARL_AU' => 'nullable|string',
        'description_sommaire_de_l_objet_social' => 'nullable|string',
        'Siège_social' => 'nullable|string',
        'Durée_en_ans' => 'nullable|numeric',
        'Capital_Social' => 'nullable|numeric',
        'divisé_en' => 'nullable|numeric',
        'parts_sociales_de' => 'nullable|numeric',
        'Gérant' => 'nullable|string',
        'Année_Sociale' => 'nullable|string',
        'Numéro_RC' => 'nullable|string',
        'Ville1' => 'nullable|string',
        'Le_dépôt_légal_a_été_effectué' => 'nullable',
        'ville2' => 'nullable|string',
        'le' => 'nullable|date',
        'numéro_de_dépôt' => 'nullable|string',
    ]);

    
    // Store the form data in the database
    Sarls::create($validatedData);

    // You can add any additional logic here, such as sending email notifications, etc.

    // Redirect back to the form with a success message
    return redirect()->back()->with('success', 'Form data submitted successfully!');
}
    }
