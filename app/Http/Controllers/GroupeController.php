<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupe;
use App\Models\Filiere;


class GroupeController extends Controller
{
    public function afficher(){
        $list=Groupe::all();
        return $list;
    }

    public function suvgarder(Request $request){
        Groupe::create([
            'nom_groupe'=>$request->nom_groupe,
            'nombre_stagiaire'=>$request->nombre_stagiaire,
            'id_filiere'=>$request->id_filiere,
            'annee'=>$request->annee
        ]);
    }

}
