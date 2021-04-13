<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        return view('type');
    }

    public function traitement(Request $var){
        $auteur=$var->input("auteur");
        $livre=$var->input("livre");
        $pays=$var->input("pays");
        $type=$var->input("type");
        $type=$var->input("accueil");
        return "ça marche: ". $auteur. $livre. $pays. $type . $accueil;
    }
}

