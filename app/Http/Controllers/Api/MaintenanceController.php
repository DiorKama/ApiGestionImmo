<?php

namespace App\Http\Controllers\Api;

use App\Models\Maintenance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaintenanceController extends Controller
{
    // fonction pour lister les maintenances
    public function index()
    {
        $maintenance = Maintenance::all();
        return response()->json($maintenance);
    }

    // fonction pour inserer les maintenances
    public function insertMaintenance(Request $request)
    {
        $maintenance = new maintenance();
        $maintenance->description_maint = $request->input('description_maint');
        $maintenance->buget = $request->input('buget');
        $maintenance->dateDebut = $request->input('dateDebut');
        $maintenance->dateFin = $request->input('dateFin');
        $maintenance->propriete_id = $request->input('propriete_id');
        $maintenance->save();
        return response()->json($maintenance);
    }

    // fonction pour mettre à jour les maintenances
    public function updateMaintenance(Request $request, $id)
    {
       $maintenance = Maintenance::findOrFail($id);
      $maintenance->update($request->all());
      return response()->json($maintenance);
    }

    // fonction pour supprimer les maintenances
    public function deleteMaintenance($id)
    {
     $maintenance = Maintenance::find($id);
     $maintenance->delete();
      return response()->json('Suppression réuissi'); 
    }

    // fonction pour montrer les maintenances
    public function show($id)
    {
     $maintenance = Maintenance::find($id);
     return response()->json($maintenance);
    }   
}
