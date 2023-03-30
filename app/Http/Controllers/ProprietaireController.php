<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use App\Models\Proprietaire;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Symfony\Contracts\Service\Attribute\Required;

class ProprietaireController extends Controller
{
    //Recuperation des proprietaires depuis la base de données
    function index(){
        // dd('ici');
        $proprietaires = Proprietaire::orderBy("id", "asc")->get();
        return view("proprietaire", compact("proprietaires"));
    }
    public function store(Proprietaire $proprietaire,ValidationRequest $request){
        
       Proprietaire::create([
        'nomComplet'=>$request->nom,
        'email'=>$request->email,
        'adresse'=>$request->adresse,      
        'telephone'=>$request->telephone,      
        'pieceIdentite'=>'fichier.png',
        'nip'=>$request->nip    
              
       ]);
       return back();
       
    }

    // function create(){
       
    //     return view("cretateProprietaire");
    // }
}
