<?php

namespace App\Http\Controllers\Api;

use App\Models\Reglement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReglementController extends Controller
{
    // fonction pour lister les reglements
    public function index()
    {
        $reglement = Reglement::all();
        return response()->json($reglement);
    }

    // fonction pour inserer les reglements
    public function insertReglement(Request $request)
    {
        $reglement = new reglement();
        $reglement->typeReglement = $request->input('typeReglement');
        $reglement->libelle = $request->input('libelle');
        $reglement->locataire_id = $request->input('locataire_id');
        $reglement->save();
        return response()->json($reglement);
    }

    // fonction pour mettre à jour les reglements
    public function updateReglement(Request $request, $id)
    {
       $reglement = Reglement::findOrFail($id);
      $reglement->update($request->all());
      return response()->json($reglement);
    }

    // fonction pour supprimer les reglements
    public function deleteReglement($id)
    {
     $reglement = Reglement::find($id);
     $reglement->delete();
      return response()->json('Suppression réuissi'); 
    }

    // fonction pour montrer les reglements
    public function show($id)
    {
     $reglement = Reglement::find($id);
     return response()->json($reglement);
    }
}
