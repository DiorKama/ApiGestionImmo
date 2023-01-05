<?php

namespace App\Http\Controllers\Api;

use App\Models\Proprietaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProprietaireController extends Controller
{
    public function index()
    {
        $proriprietaire = Proprietaire::all();
        return response()->json($proriprietaire);
    }
    public function insertProprietaire(Request $request)
    {
        $proprietaire = new proprietaire();
        $proprietaire->nom = $request->input('nom');
        $proprietaire->prenom = $request->input('prenom');
        $proprietaire->adresse = $request->input('adresse');
        $proprietaire->contact1 = $request->input('contact1');
        $proprietaire->contact2 = $request->input('contact2');
        $proprietaire->email = $request->input('email');
        $proprietaire->ville = $request->input('ville');
        $proprietaire->save();
        return response()->json($proprietaire);
    }
}
