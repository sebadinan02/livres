<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class AccueilController extends Controller
{
    public function index(){
        return view('accueil');
    }

    public function traitement(Request $var){
        // $auteur=$var->input("auteur");
        // $livre=$var->input("livre");
        // $pays=$var->input("pays");
        // $type=$var->input("type");
        // $type=$var->input("accueil");
        // return "somme: ". $auteur. $livre . $pays. $type . $accueil;
        $nom=$var->input("nom");
        $prenoms=$var->input("prenoms");
        $email=$var->input("email");
        $password=$var->input("password");
        $phone=$var->input("phone");
        admin::create([
            "nom"=>$nom,
            "prenoms"=>$prenoms,
            "email"=>$email,
            "password"=>$password,
            "tel"=>$phone
            ]);
    }
}
