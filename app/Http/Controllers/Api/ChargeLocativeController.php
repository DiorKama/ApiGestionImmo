<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ChargeLocative;
use App\Http\Controllers\Controller;

class ChargeLocativeController extends Controller
{
    public function index()
    {
        $chargeLoc = ChargeLocative::all();
        return response()->json($chargeLoc);
    }

    public function insertCharge(Request $request)
    {
        $chargeLoc = new chargeLocative();
        $chargeLoc->nom_charge = $request->input('nom_charge');
        $chargeLoc->description = $request->input('description');
        $chargeLoc->taux = $request->input('taux');
        $chargeLoc->propriete_id = $request->input('propriete_id');
        $chargeLoc->save();
        return response()->json($chargeLoc);
    }

    public function updateCharge(Request $request, $id)
    {
       $chargeLoc = ChargeLocative::findOrFail($id);
      $chargeLoc->update($request->all());
      return response()->json($chargeLoc);
    }
    public function deleteCharge($id)
    {
     $chargeLoc = ChargeLocative::find($id);
     $chargeLoc->delete();
      return response()->json('Suppression réuissi'); 
    }

    public function show($id)
    {
     $chargeLoc = ChargeLocative::find($id);
     return response()->json($chargeLoc);
    }
}
