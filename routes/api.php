<?php

use Illuminate\Http\Request;
use App\Http\Resources\UserRessource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\ProprieteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return new UserRessource($request->user());
});

Route::post('/login',[LoginController::class, 'login']);
Route::post('/register',[RegisterController::class, 'register']);

Route::get('/proprietes', [ProprieteController::class, 'index']);
Route::post('/ajoutProprietes', [ProprieteController::class, 'insertPropriete']);
Route::put('/modifierProprietes/{id}', [ProprieteController::class, 'updatePropriete']);
Route::delete('/deletePropriete/{id}', [ProprieteController::class, 'deletePropriete']);
Route::get('/showProprietes/{id}', [ProprieteController::class, 'show']);
Route::get('/recherchePropriete/{nom}', [ProprieteController::class, 'search']);
