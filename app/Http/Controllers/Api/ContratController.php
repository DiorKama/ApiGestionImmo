<?php

namespace App\Http\Controllers\Api;

use App\Models\Contrat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContratController extends Controller
{
    // fonction pour lister les contrats
    public function index()
    {
        $contrat = Contrat::all();
        return response()->json($contrat);
    }

    // fonction pour inserer les contrats
    public function insertContrat(Request $request)
    {
        $contrat = new contrat();
        $contrat->titreContrat = $request->input('titreContrat');
        $contrat->description_contrat = $request->input('description_contrat');
        $contrat->dateDebut = $request->input('dateDebut');
        $contrat->dateFin = $request->input('dateFin');
        $contrat->locataire_id = $request->input('locataire_id');
        $contrat->save();
        return response()->json($contrat);
    }

    // fonction pour metre à jour les contrats
    public function updateContrat(Request $request, $id)
    {
       $contrat = Contrat::findOrFail($id);
      $contrat->update($request->all());
      return response()->json($contrat);
    }

    // fonction pour supprimer les contrats
    public function deleteContrat($id)
    {
     $contrat = Contrat::find($id);
     $contrat->delete();
      return response()->json('Suppression réuissi'); 
    }

    // fonction pour montrer un contrat par l'Id
    public function show($id)
    {
     $contrat = Contrat::find($id);
     return response()->json($contrat);
    }

    // fonction pour rechercher les contrats
    public function search($titre_contrat)
    {
        $contrat = Contrat::where('titre_contrat', 'like', '%' . $titre_contrat . '%')->get();
        return response()->json($contrat);
    }
}
