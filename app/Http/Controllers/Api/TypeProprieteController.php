<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\TypePropriete;
use App\Http\Controllers\Controller;

class TypeProprieteController extends Controller
{
    public function index()
    {
        $typePropriete = TypePropriete::all();
        return response()->json($typePropriete);
    }
    public function insertypePropriete(Request $request)
    {
        $typePropriete = new typePropriete();
        $typePropriete->appartement = $request->input('appartement');
        $typePropriete->bureau = $request->input('bureau');
        $typePropriete->studio = $request->input('studio');
        $typePropriete->magasin = $request->input('magasin');
        $typePropriete->duplex = $request->input('duplex');
        $typePropriete->villa = $request->input('villa');
        $typePropriete->propriete_id = $request->input('propriete_id');
        $typePropriete->save();
        return response()->json($typePropriete);
    }
    public function updateTypePropriete(Request $request, $id)
    {
       $typePropriete = TypePropriete::findOrFail($id);
      $typePropriete->update($request->all());
      return response()->json($typePropriete);
    }

    public function deleteTypePropriete($id)
    {
     $typePropriete = TypePropriete::find($id);
     $typePropriete->delete();
      return response()->json('Suppression réuissi'); 
    }

    public function show($id)
       {
        $typePropriete = TypePropriete::find($id);
        return response()->json($typePropriete);
       }
}
