<?php

namespace App\Http\Controllers\Api;

use App\Models\Proprietaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProprietaireController extends Controller
{
    // fonction pour lister les proprietaires
    public function index()
    {
        $proriprietaire = Proprietaire::all();
        return response()->json($proriprietaire);
    }

    // fonction pour inserer les proprietaires
    public function insertProprietaire(Request $request)
    {
        $proprietaire = new proprietaire();
        $proprietaire->nom = $request->input('nom');
        $proprietaire->prenom = $request->input('prenom');
        $proprietaire->adresse = $request->input('adresse');
        $proprietaire->contact1 = $request->input('contact1');
        $proprietaire->contact2 = $request->input('contact2');
        $proprietaire->email = $request->input('email');
        $proprietaire->ville = $request->input('ville');
        $proprietaire->save();
        return response()->json($proprietaire);
    }

     // fonction pour mettre à jour les proprietaires
    public function updateProprietaire(Request $request, $id)
    {
       $proprietaire = Proprietaire::findOrFail($id);
      $proprietaire->update($request->all());
      return response()->json($proprietaire);
    }

    // fonction pour supprimer les proprietaires
    public function deleteProprietaire($id)
    {
     $proprietaire = Proprietaire::find($id);
     $proprietaire->delete();
      return response()->json('Suppression réuissi'); 
    }

    // fonction pour montrer les proprietaires
    public function show($id)
       {
        $proprietaire = Proprietaire::find($id);
        return response()->json($proprietaire);
       }

        // fonction pour rechercher les proprietaires
       public function search($nom)
       {
           $proprietaire = Proprietaire::where('nom', 'like', '%' . $nom . '%')->get();
           return response()->json($proprietaire);
       }
}
