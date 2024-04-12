<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    public function afficher(){
        $list=Module::all();
        return $list ;
    }

    public function suvgarder(Request $request){
        Module::create([
            'nom_module'=>$request->nom_module,
            'masse_horaire'=>$request->masse_horaire	
        ]);
       
    }
}

