<?php

namespace App\Http\Controllers\Api;

use App\Models\Locataire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocataireController extends Controller
{
    public function index()
    {
        $locataire = Locataire::all();
        return response()->json($locataire);
    }

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
        $locataire->propriete_id = $request->input('propriete_id');
        $locataire->save();
        return response()->json($locataire);
    }

    public function updateLocataire(Request $request, $id)
    {
       $locataire = Locataire::findOrFail($id);
      $locataire->update($request->all());
      return response()->json($locataire);
    }
    public function deleteLocataire($id)
    {
     $locataire = Locataire::find($id);
     $locataire->delete();
      return response()->json('Suppression réuissi'); 
    }

    public function show($id)
    {
     $locataire = Locataire::find($id);
     return response()->json($locataire);
    }

    public function search($nom)
    {
        $locataire = Locataire::where('nom', 'like', '%' . $nom . '%')->get();
        return response()->json($locataire);
    }
}
