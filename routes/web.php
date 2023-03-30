<?php

use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\UtilisateurController;
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
Route::get('/proprietaire', [ProprietaireController::class , 'index'] )->name("proprietaire");
Route::post('/proprietaire', [ProprietaireController::class , 'store']);
Route::get('/utilisateur', [UtilisateurController::class , 'index'] )->name("utilisateur");

