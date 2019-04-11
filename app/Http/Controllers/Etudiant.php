<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Etudiant extends Controller
{
    public function index(){

        return \App\Ecole::all();

    }

    public function show(\App\Etudiant $etudiant){

        return $etudiant;

    }

    public function showLocalisation($id){

        return DB::table('etudiant')
            ->join('localisation' , 'etudiant.idEtudiant' , '=' , 'localisation.idEtudiant')
            ->where('etudiant.id' , $id)
            ->whereNull('localisation.idTransport')
            ->get();

    }

}
