<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    
     //Recuperation des proprietaires depuis la base de données
     function index(){
        // dd('ici');
        $utilisateurs = Utilisateur::orderBy("id", "asc")->get();
        return view("utilisateur", compact("utilisateurs"));
    }
}
