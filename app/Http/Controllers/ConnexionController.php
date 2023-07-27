<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('connexion');
    }

    public function traitement(Request $request)
    {
        // Récupérer la requête de l'utilisateur et valider les informations
        $request->validate([
            'Nom' => 'required',
            'password' => 'required',
        ]);

        // Si les informations sont valides, vous pouvez maintenant les utiliser pour le traitement
        // Par exemple, vous pouvez accéder aux données saisies par l'utilisateur ainsi :
        $nomUtilisateur = $request->input('Nom');
        $motDePasse = $request->input('password');

        // Effectuer votre traitement ici (par exemple, vérification des informations d'identification)
        
        // Une fois le traitement terminé, vous pouvez rediriger l'utilisateur ou afficher un message de succès
        return 'Traitement formulaire connexion';
    }
}
