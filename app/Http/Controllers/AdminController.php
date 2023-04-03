<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function store(Request $request){

        $validateData = $request->validate([
            'nomComplet'=>'required',            
            'email'=>'required',      
            'motDePasse' => 'required',
        ]);

        $admins=Admin::create($validateData);
        // dd($vehicule);
        return back();
    }
    public function check(Request $request){
        $request->validate([
            'email'=>'required',      
            'motDePasse' => 'required|min:8|max:12',
        ]);
        $adminInfo = Admin::where('email','=',$request->email)->first();
        if(!$adminInfo){
            return back()->with('fail','Ce mail n\'est aps correct');
        }else
        {
            if($adminInfo->motDePasse){
              $request->session()->put('LoggedUser', $adminInfo->id) ;
              return redirect('/tableauDeBord');
            }else{
                return back()->with('fail','Mot de passe incorrect');
            }
        }
    }
}
