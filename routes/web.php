<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\VehiculeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tableauDeBord', function () {
    return view('tableauDeBord');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/proprietaire', [ProprietaireController::class , 'index'] )->name("proprietaire");
Route::get('/utilisateur', [UtilisateurController::class , 'index'] )->name("utilisateur");
Route::get('/vehicule', [VehiculeController::class , 'index'] )->name("vehicule");

Route::post('/check', [AdminController::class , 'check'] )->name("check");

Route::post('/proprietaire', [ProprietaireController::class , 'store']);
Route::post('/utilisateur',[UtilisateurController::class, 'store']);
Route::post('/vehicule',[VehiculeController::class, 'store']);
Route::post('/admins',[AdminController::class, 'store']);
// Route::get('/proprietaire/{proprietaire}/edite',[ProprietaireController::class, 'edite']);
Route::patch('/proprietaire/update/{proprietaire}',[ProprietaireController::class, 'update'])->name('proprietaire.update');
Route::delete('/proprietaire/destroy/{id}',[ProprietaireController::class, 'destroy'])->name('proprietaire.delete');