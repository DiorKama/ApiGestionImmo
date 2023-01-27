<?php

namespace App\Http\Controllers\Api;

use App\Models\Fournisseur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FournisseurController extends Controller
{
    // fonction pour lister les fournisseurs
    public function index()
    {
        $fournisseur = Fournisseur::all();
        return response()->json($fournisseur);
    }

    // fonction pour inserer les fournisseurs
    public function insertFournisseur(Request $request)
    {
        $fournisseur = new fournisseur();
        $fournisseur->nom = $request->input('nom');
        $fournisseur->adresse = $request->input('adresse');
        $fournisseur->contact1 = $request->input('contact1');
        $fournisseur->contact2 = $request->input('contact2');
        $fournisseur->email = $request->input('email');
        $fournisseur->webSite = $request->input('webSite');
        $fournisseur->fax = $request->input('fax');
        $fournisseur->type_service_id = $request->input('type_service_id');
        $fournisseur->save();
        return response()->json($fournisseur);
    }

     // fonction pour mettre à jour les fournisseurs
    public function updateFournisseur(Request $request, $id)
    {
       $fournisseur = Fournisseur::findOrFail($id);
      $fournisseur->update($request->all());
      return response()->json($fournisseur);
    }

    // fonction pour suprimer les fournisseurs
    public function deleteFournisseur($id)
    {
     $fournisseur = Fournisseur::find($id);
     $fournisseur->delete();
      return response()->json('Suppression réuissi'); 
    }

    // fonction pour montrer les fournisseurs
    public function show($id)
       {
        $fournisseur = Fournisseur::find($id);
        return response()->json($fournisseur);
       }

        // fonction pour rechercher les fournisseurs
       public function search($nom)
       {
           $fournisseur = Fournisseur::where('nom', 'like', '%' . $nom . '%')->get();
           return response()->json($fournisseur);
       }
}
