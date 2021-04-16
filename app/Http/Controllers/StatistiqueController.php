<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StatistiqueController extends Controller
{
    public function index (){
        $nbrauteurs=DB::table('auteurs')->count();
        // $nbrtype=DB::table('type')->count();
        $nbrlivres=DB::table('livres')->count();
        $auteurs= DB::table('livres')->join('auteurs','livres.id','','auteurs.id');
        // $statlivres= DB::select('SELECT COUNT(*) FROM `livres` INNER JOIN auteurs ON livres.idauteur = auteurs.id GROUP BY auteurs.nom ');
        $nomauteur= DB::select('SELECT COUNT(*) AS nombres,auteur FROM `livres` GROUP BY auteur');
        $nomtype= DB::select('SELECT COUNT(*) FROM `livres` GROUP BY type');
        $nompays= DB::select('SELECT COUNT(*) FROM `livres` GROUP BY pays');
        $nombreauteur = [];
        foreach ($nomauteur[0] as $key => $value) {
            $nombreauteur[$key] = $value;
        }
        $var = [
            ["Nombre de livre", $nbrlivres],
            // ["Nombre de type", $nbrtype],
            ["Nombre d'auteurs", $nbrauteurs]
            // ["type", $nomtype],
            // ["pays", $nompays]

        ];
        return view ('statistique', ['data' => $var, 'nombreauteur' => $nombreauteur]);
    }

}
