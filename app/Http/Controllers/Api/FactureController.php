<?php

namespace App\Http\Controllers\Api;

use App\Models\Facture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FactureController extends Controller
{
    // fonction pour lister les factures
    public function index()
    {
        $facture = Facture::all();
        return response()->json($facture);
    }

    // fonction pour inserer les factures
    public function insertFacture(Request $request)
    {
        $facture = new facture();
        $facture->numeroFacture = $request->input('numeroFacture');
        $facture->Date = $request->input('Date');
        $facture->etatPayement = $request->input('etatPayement');
        $facture->montant = $request->input('montant');
        $facture->locataire_id = $request->input('locataire_id');
        $facture->save();
        return response()->json($facture);
    }

    // fonction pour mettre à jour les factures
    public function updateFacture(Request $request, $id)
    {
       $facture = Facture::findOrFail($id);
      $facture->update($request->all());
      return response()->json($facture);
    }

     // fonction pour supprimer les factures
    public function deleteFacture($id)
    {
     $facture = Facture::find($id);
     $facture->delete();
      return response()->json('Suppression réuissi'); 
    }

    // fonction pour montrer les factures
    public function show($id)
    {
     $facture = Facture::find($id);
     return response()->json($facture);
    }

    // fonction pour rechercher les factures
    public function search($numeroFacture)
    {
        $facture = Facture::where('numeroFacture', 'like', '%' . $numeroFacture . '%')->get();
        return response()->json($facture);
    }
}
