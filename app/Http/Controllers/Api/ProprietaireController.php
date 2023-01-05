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
}
