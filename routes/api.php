<?php

use Illuminate\Http\Request;
use App\Http\Resources\UserRessource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BienController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\ContratController;
use App\Http\Controllers\Api\FactureController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LocataireController;
use App\Http\Controllers\Api\ProprieteController;
use App\Http\Controllers\Api\ReglementController;
use App\Http\Controllers\Api\FournisseurController;
use App\Http\Controllers\Api\MaintenanceController;
use App\Http\Controllers\Api\TypeServiceController;
use App\Http\Controllers\Api\ProprietaireController;
use App\Http\Controllers\Api\TypeProprieteController;
use App\Http\Controllers\Api\ChargeLocativeController;

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

Route::get('/proprietaires', [ProprietaireController::class, 'index']);
Route::post('/ajoutProprietaires', [ProprietaireController::class, 'insertProprietaire']);
Route::put('/modifierProprietaires/{id}', [ProprietaireController::class, 'updateProprietaire']);
Route::delete('/deleteProprietaire/{id}', [ProprietaireController::class, 'deleteProprietaire']);
Route::get('/showProprietaires/{id}', [ProprietaireController::class, 'show']);
Route::get('/rechercheProprietaire/{nom}', [ProprietaireController::class, 'search']);

Route::get('/typeProprietes', [TypeProprieteController::class, 'index']);
Route::post('/ajoutypePropriete', [TypeProprieteController::class, 'insertypePropriete']);
Route::put('/modifierTyepePro/{id}', [TypeProprieteController::class, 'updateTypePropriete']);
Route::delete('/deleteTypePro/{id}', [TypeProprieteController::class, 'deleteTypePropriete']);
Route::get('/showTypePro/{id}', [TypeProprieteController::class, 'show']);

Route::get('/biens', [BienController::class, 'index']);
Route::post('/ajoutBiens', [BienController::class, 'insertBien']);
Route::put('/modifierBiens/{id}', [BienController::class, 'updateBien']);
Route::delete('/deleteBiens/{id}', [BienController::class, 'deleteBien']);
Route::get('/showBiens/{id}', [BienController::class, 'show']);
Route::get('/rechercheBiens/{description}', [BienController::class, 'search']);

Route::get('/locataires', [LocataireController::class, 'index']);
Route::post('/ajoutLocataires', [LocataireController::class, 'insertLocataire']);
Route::put('/modifierLocataire/{id}', [LocataireController::class, 'updateLocataire']);
Route::delete('/deleteLocataire/{id}', [LocataireController::class, 'deleteLocataire']);
Route::get('/showLocataire/{id}', [LocataireController::class, 'show']);
Route::get('/rechercheLocataire/{nom}', [LocataireController::class, 'search']);

Route::get('/factures', [FactureController::class, 'index']);
Route::post('/ajoutFactures', [FactureController::class, 'insertFacture']);
Route::put('/modifierFactures/{id}', [FactureController::class, 'updateFacture']);
Route::delete('/deleteFacture/{id}', [FactureController::class, 'deleteFacture']);
Route::get('/showFacture/{id}', [FactureController::class, 'show']);
Route::get('/rechercheFacture/{numeroFacture}', [FactureController::class, 'search']);

Route::get('/maintenances', [MaintenanceController::class, 'index']);
Route::post('/ajoutMaintenances', [MaintenanceController::class, 'insertMaintenance']);
Route::put('/modifierMaintenances/{id}', [MaintenanceController::class, 'updateMaintenance']);
Route::delete('/deleteMaintenance/{id}', [MaintenanceController::class, 'deleteMaintenance']);
Route::get('/showMaintenance/{id}', [MaintenanceController::class, 'show']);

Route::get('/charges', [ChargeLocativeController::class, 'index']);
Route::post('/ajoutCharges', [ChargeLocativeController::class, 'insertCharge']);
Route::put('/modifierCharges/{id}', [ChargeLocativeController::class, 'updateCharge']);
Route::delete('/deleteCharges/{id}', [ChargeLocativeController::class, 'deleteCharge']);
Route::get('/showCharges/{id}', [ChargeLocativeController::class, 'show']);

Route::get('/reglements', [ReglementController::class, 'index']);
Route::post('/ajoutReglements', [ReglementController::class, 'insertReglement']);
Route::put('/modifierReglements/{id}', [ReglementController::class, 'updateReglement']);
Route::delete('/deleteReglements/{id}', [ReglementController::class, 'deleteReglement']);
Route::get('/showReglements/{id}', [ReglementController::class, 'show']);

Route::get('/contrats', [ContratController::class, 'index']);
Route::post('/ajoutContrat', [ContratController::class, 'insertContrat']);
Route::put('/modifierContrat/{id}', [ContratController::class, 'updateContrat']);
Route::delete('/deleteContrat/{id}', [ContratController::class, 'deleteContrat']);
Route::get('/showContrat/{id}', [ContratController::class, 'show']);
Route::get('/rechercheContrat/{titre_contrat}', [ContratController::class, 'search']);

Route::get('/services', [TypeServiceController::class, 'index']);
Route::post('/ajoutServices', [TypeServiceController::class, 'insertService']);
Route::put('/modifierServices/{id}', [TypeServiceController::class, 'updateService']);
Route::delete('/deleteServices/{id}', [TypeServiceController::class, 'deleteService']);
Route::get('/showServices/{id}', [TypeServiceController::class, 'show']);

Route::get('/fournisseurs', [FournisseurController::class, 'index']);
Route::post('/ajoutFournisseurs', [FournisseurController::class, 'insertFournisseur']);
Route::put('/modifierFournisseurs/{id}', [FournisseurController::class, 'updateFournisseur']);
Route::delete('/deleteFournisseurs/{id}', [FournisseurController::class, 'deleteFournisseur']);
Route::get('/showFournisseurs/{id}', [FournisseurController::class, 'show']);
Route::get('/rechercheFournisseurs/{nom}', [FournisseurController::class, 'search']);
