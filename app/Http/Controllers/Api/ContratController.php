<?php

namespace App\Http\Controllers\Api;

use App\Models\Contrat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContratController extends Controller
{
    public function index()
    {
        $contrat = Contrat::all();
        return response()->json($contrat);
    }

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

    public function updateContrat(Request $request, $id)
    {
       $contrat = Contrat::findOrFail($id);
      $contrat->update($request->all());
      return response()->json($contrat);
    }
    public function deleteContrat($id)
    {
     $contrat = Contrat::find($id);
     $contrat->delete();
      return response()->json('Suppression réuissi'); 
    }

    public function show($id)
    {
     $contrat = Contrat::find($id);
     return response()->json($contrat);
    }

    public function search($titre_contrat)
    {
        $contrat = Contrat::where('titre_contrat', 'like', '%' . $titre_contrat . '%')->get();
        return response()->json($contrat);
    }
}
