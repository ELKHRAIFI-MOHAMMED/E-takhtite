<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermiController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\Formateur_Vacataire_Controller;
use App\Http\Controllers\ModuleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// ==========================les route pour la gestion de formateurs et vacataires========================================
 // ------afficher-------------------------------------------------------------------------------
Route::get('/afficher-formateur-vacataire', [Formateur_Vacataire_Controller::class, 'afficher']);
// result={
//     "formateurs": [
//         {
//             "matricule": 0,"nom_prenom": "formateur 1","numero_tel": "formateur 1","specialiste": "formateur 1","created_at": null,"updated_at": null
//         },
//         {}...
//     ],
//     "vacataires": [
//         {"matricule": 0,"nom_prenom": "vacataire1", "numero_tel": "vacataire1","specialiste": "vacataire1","created_at": null,"updated_at": null},
//         {}...
//     ]
// }
//----ajouter formateur ------------------------------------------------------------------------------------------
      Route::post('/ajouter-formateur', [Formateur_Vacataire_Controller::class, 'suvgarder']);
//----ajouter vacataire -------------------------------------------------------------------------------------------
      Route::post('/ajouter-vacataire', [Formateur_Vacataire_Controller::class, 'suvgarder_vacataire']);

//====================================================================================================================


//=========================== Module ==================================================================================
//---------afficher---------------------------------------------------------------------------------------------------=
Route::get('/afficher-module ', [ModuleController::class, 'afficher']);      //                                       =
//-------------ajouter--------------------------------------------------------------------------------------------    =
Route::post('/ajouter-module', [ModuleController::class, 'suvgarder']);     //                                        =
//=====================================================================================================================


//=========================== Filiere ==================================================================================
//---------afficher---------------------------------------------------------------------------------------------------=
Route::get('/afficher-filiere ', [FiliereController::class, 'afficher']);      //                                       =
//-------------ajouter--------------------------------------------------------------------------------------------    =
Route::post('/ajouter-filier', [FiliereController::class, 'suvgarder']);     //                                        =
//=====================================================================================================================

//=========================== Groupe ==================================================================================
//---------afficher---------------------------------------------------------------------------------------------------=
Route::get('/afficher-groupe ', [GroupeController::class, 'afficher']);      //                                       =
//-------------ajouter--------------------------------------------------------------------------------------------    =
Route::post('/ajouter-groupe', [GroupeController::class, 'suvgarder']);     //                                        =
//=====================================================================================================================

