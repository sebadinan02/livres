<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livres;

class LivresController extends Controller
{
    public function index(){
        return view('livres');
    }

    public function traitement(Request $var){
        // $auteur=$var->input("auteur");
        // $livre=$var->input("livre");
        // $pays=$var->input("pays");
        // $type=$var->input("type");
        // $type=$var->input("accueil");
        // return "ça marche: ". $auteur. $livre. $pays. $type . $accueil;
        $titre=$var->input("titre");
        $edition=$var->input("edition");
        $annee=$var->input("annee");
        $type=$var->input("type");
        
        livres::create([
            "titre"=>$titre,
            "edition"=>$edition,
            "annee"=>$annee,
            "type"=>$type,
            
            ]);
    }
}

