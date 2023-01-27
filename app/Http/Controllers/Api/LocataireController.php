<?php

namespace App\Http\Controllers\Api;

use App\Models\Locataire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocataireController extends Controller
{
    // fonction pour lister les locataires
    public function index()
    {
        $locataire = Locataire::all();
        return response()->json($locataire);
    }

    // fonction pour inserer les locataires
    public function insertLocataire(Request $request)
    {
        $locataire = new locataire();
        $locataire->nom = $request->input('nom');
        $locataire->prenom = $request->input('prenom');
        $locataire->telephone = $request->input('telephone');
        $locataire->dateLocation = $request->input('dateLocation');
        $locataire->email = $request->input('email');
        $locataire->cni = $request->input('cni');
        $locataire->bulletinSalaire = $request->input('bulletinSalaire');
        $locataire->profession = $request->input('profession');
        $locataire->note = $request->input('note');
        $locataire->nationalite = $request->input('nationalite');
        $locataire->bien_id = $request->input('bien_id');
        $locataire->save();
        return response()->json($locataire);
    }

    // fonction pour mettre à jour les locataires
    public function updateLocataire(Request $request, $id)
    {
       $locataire = Locataire::findOrFail($id);
      $locataire->update($request->all());
      return response()->json($locataire);
    }

     // fonction pour supprimer les locataires
    public function deleteLocataire($id)
    {
     $locataire = Locataire::find($id);
     $locataire->delete();
      return response()->json('Suppression réuissi'); 
    }

    // fonction pour montrer les locataires
    public function show($id)
    {
     $locataire = Locataire::find($id);
     return response()->json($locataire);
    }

    // fonction pour rechercher les locataires
    public function search($nom)
    {
        $locataire = Locataire::where('nom', 'like', '%' . $nom . '%')->get();
        return response()->json($locataire);
    }
}
