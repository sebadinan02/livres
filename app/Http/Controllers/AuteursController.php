<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\auteurs;

class AuteursController extends Controller
{
    public function index(){
        return view('auteurs');
    }

    public function traitement(Request $var){
        // $auteur=$var->input("auteur");
        // $livre=$var->input("livre");
        // $pays=$var->input("pays");
        // $type=$var->input("type");
        // $type=$var->input("accueil");
        // return "ça marche: ". $auteur. $livre. $pays. $type . $accueil;
        $nom=$var->input("nom");
        $prenoms=$var->input("prenoms");
        $pays=$var->input("pays");
        
        auteurs::create([
            "nom"=>$nom,
            "prenoms"=>$prenoms,
            "pays"=>$pays,
            
            ]);
    }
}

