<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function vehiculeProprietaire(){
    //     return view('vehicule', compact('vehiculeProprietaire'));
    // }
    private function getRandomStr($n) { 
        $n=2;
        // Stockez toutes les lettres possibles dans une chaîne.
        $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomStr = ''; 
      
        // Générez un index aléatoire de 0 à la longueur de la chaîne -1.
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($str) - 1); 
            $randomStr .= $str[$index]; 
        } 

        return $randomStr.random_int(1000,9999);
     }
     
    public function index()
    {
        //
        $proprietaires = Proprietaire::all();
        $vehicules = Vehicule:: orderBy("id", "desc")->get();
        return view("vehicule", compact("proprietaires", "vehicules"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'type'=>'required',
            'marque'=>'required',
            'modele'=>'required',      
            'proprietaire_id' => ['required'] ,
        ]);

        $validateData['plaque'] = $this->getRandomStr(2);
        // dd($validateData);
        $vehicule = Vehicule::create($validateData);
        // dd($vehicule);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
