<?php

namespace App\Http\Controllers\Api;

use App\Models\Propriete;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProprieteController extends Controller
{
    public function index()
    {
        $proriprietes = Propriete::all();
        return response()->json($proriprietes);
    }
    public function insertPropriete(Request $request)
    {
        $proprietes = new propriete();
        $proprietes->nom = $request->input('nom');
        $proprietes->statut = $request->input('statut');
        $proprietes->adresse = $request->input('adresse');
        $proprietes->description = $request->input('description');
        $proprietes->photo = $request->input('photo');
        $proprietes->localisation = $request->input('localisation');
        $proprietes->ville = $request->input('ville');
        $proprietes->proprietaire_id = $request->input('proprietaire_id');
        $proprietes->user_id = $request->input('user_id');
        $proprietes->save();
        return response()->json($proprietes);
    }
    
         public function updatePropriete(Request $request, $id)
        {
           $propriete = Propriete::findOrFail($id);
          $propriete->update($request->all());
          return response()->json($propriete);
        }


        public function deletePropriete($id)
       {
        $proprietes = Propriete::find($id);
        $proprietes->delete();
         return response()->json('Suppression réuissi'); 
       }

       public function show($id)
       {
        $proprietes = Propriete::find($id);
        return response()->json($proprietes);
       }
      
       public function search($nom)
    {
        $proprietes = Propriete::where('nom', 'like', '%' . $nom . '%')->get();
        return response()->json($proprietes);
    }
}
