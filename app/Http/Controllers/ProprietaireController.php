<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\Request;

class ProprietaireController extends Controller
{
    //Recuperation des proprietaires depuis la base de données
    function index(){
        $proprietaires = Proprietaire::orderBy("id", "asc")->get();
        return view("proprietaire", compact("proprietaires"));
    }

}
