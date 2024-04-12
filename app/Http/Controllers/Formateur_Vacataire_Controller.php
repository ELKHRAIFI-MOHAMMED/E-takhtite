<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formateur;
use App\Models\Vacataire;

class Formateur_Vacataire_Controller extends Controller
{
    public function afficher(){
        $list=Formateur::all();
        $list2=Vacataire::all();
        $donnees = [
            'formateurs' => $list,
            'vacataires' => $list2,
        ];
        return $donnees;
    }
    public function suvgarder(Request $request){
        Formateur::create([
            'nom_prenom'=>$request->nom_prenom,
            'numero_tel'=>$request->numero_tel,
            'specialiste'=>$request->specialiste
        ]);
    }

    public function suvgarder_vacataire(Request $request){
        Vacataire::create([
            'nom_prenom'=>$request->nom_prenom,
            'numero_tel'=>$request->numero_tel,
            'specialiste'=>$request->specialiste
        ]);
    }
}
