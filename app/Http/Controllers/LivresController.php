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
        $annee=$var->input("annee");
        $type=$var->input("type");
        $auteur=$var->input("auteur");
        $pays=$var->input("pays");

        
        livres::create([
            "titre"=>$titre,
            "annee"=>$annee,
            "type"=>$type,
            "auteur"=>$auteur,
            "pays"=>$pays,
            
            ]);
    }
}

