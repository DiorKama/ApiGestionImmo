<?php

namespace App\Http\Controllers\Api;

use App\Models\Bien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BienController extends Controller
{
    public function index()
    {
        $bien = Bien::all();
        return response()->json($bien);
    }

    public function insertBien(Request $request)
    {
        $bien = new bien();
        $bien->description = $request->input('description');
        $bien->nbrePiece = $request->input('nbrePiece');
        $bien->niveau = $request->input('niveau');
        $bien->nbreChambre = $request->input('nbreChambre');
        $bien->nbreCuisine = $request->input('nbreCuisine');
        $bien->nbreSalon = $request->input('nbreSalon');
        $bien->nbreChambreVisite = $request->input('nbreChambreVisite');
        $bien->nbreParking = $request->input('nbreParking');
        $bien->piscine = $request->input('piscine');
        $bien->jardin = $request->input('jardin');
        $bien->balcon = $request->input('balcon');
        $bien->ascenseur = $request->input('ascenseur');
        $bien->buanderie = $request->input('buanderie');
        $bien->type_propriete_id = $request->input('type_propriete_id');
        $bien->save();
        return response()->json($bien);
    }

    public function updateBien(Request $request, $id)
    {
       $bien = Bien::findOrFail($id);
      $bien->update($request->all());
      return response()->json($bien);
    }

    public function deleteBien($id)
    {
     $bien = Bien::find($id);
     $bien->delete();
      return response()->json('Suppression réuissi'); 
    }

    public function show($id)
       {
        $bien = Bien::find($id);
        return response()->json($bien);
       }

       public function search($description)
       {
           $bien = Bien::where('nom', 'like', '%' . $description . '%')->get();
           return response()->json($bien);
       }
}
