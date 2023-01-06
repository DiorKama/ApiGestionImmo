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
}
