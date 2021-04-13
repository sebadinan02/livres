<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibliothequeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function traitement(Request $var){
        $auteur=$var->input("auteur");
        $livre=$var->input("livre");
        $pays=$var->input("pays");
        $type=$var->input("type");
        $type=$var->input("accueil");
        return "somme: ". $auteur. $livre . $pays. $type . $accueil;
    }
}
