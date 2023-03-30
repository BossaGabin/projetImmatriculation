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
    public function store(ValidationRequest $request){
        
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
    public function update(Proprietaire $proprietaire, ValidationRequest $request){
        // dd('ici');
        // //La variable proprietaire permet de recuperer les donnees du proprietaire dont on souhaite fait la mise a jour
        // //La variable request permet de recuprer la nouvelle valeur(le donnees du formulaires)
        // dd($request->ignore() ) ;
        Proprietaire::where('id','=', $proprietaire->id)->update([
            'nomComplet'=>$request->nom,
            'email'=>$request->email,
            'adresse'=>$request->adresse,      
            'telephone'=>$request->telephone,      
            'pieceIdentite'=>'fichier.png',
            'nip'=>$request->nip    
                  
           ]);
        // $proprietaire->nom = $request->nom;
        //$proprietaire->save();
        return back();

    }
    public function delete($id){

        $proprietaire = Proprietaire::findOrFail($id);
        $proprietaire->delete();
    }
}
