<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;

class FiliereController extends Controller
{
    public function afficher(){
        $list=Filiere::all();
        return $list ;
    }

    public function suvgarder(Request $request){
        Filiere::create([
            'nom_filiere'=>$request->nom_filiere,
            'nomber_module	'=>$request->nomber_module		
        ]);
    }
}
