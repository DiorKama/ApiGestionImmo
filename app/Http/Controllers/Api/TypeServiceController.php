<?php

namespace App\Http\Controllers\Api;

use App\Models\TypeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeServiceController extends Controller
{
    // fonction pour lister les types de services
    public function index()
    {
        $typeServive = TypeService::all();
        return response()->json($typeServive);
    }

    // fonction pour inserer les types de services
    public function insertService(Request $request)
    {
        $typeService = new typeService();
        $typeService->nom_service = $request->input('nom_service');
        $typeService->maintenance_id = $request->input('maintenance_id');
        $typeService->save();
        return response()->json($typeService);
    }

    // fonction pour mettre à jour les types de services
    public function updateService(Request $request, $id)
    {
       $typeService = TypeService::findOrFail($id);
      $typeService->update($request->all());
      return response()->json($typeService);
    }

    // fonction pour supprimer les types de services
    public function deleteService($id)
    {
     $typeService = TypeService::find($id);
     $typeService->delete();
      return response()->json('Suppression réuissi'); 
    }

    // fonction pour montrer les types de services
    public function show($id)
    {
     $typeService = TypeService::find($id);
     return response()->json($typeService);
    }
}
