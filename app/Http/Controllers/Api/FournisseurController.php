<?php

namespace App\Http\Controllers\Api;

use App\Models\Fournisseur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FournisseurController extends Controller
{
    public function index()
    {
        $fournisseur = Fournisseur::all();
        return response()->json($fournisseur);
    }
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
    public function updateFournisseur(Request $request, $id)
    {
       $fournisseur = Fournisseur::findOrFail($id);
      $fournisseur->update($request->all());
      return response()->json($fournisseur);
    }

    public function deleteFournisseur($id)
    {
     $fournisseur = Fournisseur::find($id);
     $fournisseur->delete();
      return response()->json('Suppression réuissi'); 
    }

    public function show($id)
       {
        $fournisseur = Fournisseur::find($id);
        return response()->json($fournisseur);
       }

       public function search($nom)
       {
           $fournisseur = Fournisseur::where('nom', 'like', '%' . $nom . '%')->get();
           return response()->json($fournisseur);
       }
}
