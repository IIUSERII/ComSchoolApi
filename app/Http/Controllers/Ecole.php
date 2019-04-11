<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ecole extends Controller
{

    public function index(){

        return \App\Ecole::all();

    }

    public function show($id){

        return  DB::table('ecole')
            ->where('ecole.idEcole' , $id)
            ->get();

    }

    public function indexTransport($id){

        return DB::table('ecole')
            ->join('transport' , 'ecole.idEcole' , '=' , 'transport.idEcole')
            ->where('ecole.idEcole' , $id)
            ->select('transport.*')
            ->get();

    }

    public function showTransport($id, $idTransport){

        return DB::table('ecole')
            ->join('transport' , 'ecole.idEcole' , '=' , 'transport.idEcole')
            ->where('ecole.idEcole' , $id)
            ->where('transport.idTransport' , $idTransport)
            ->select('transport.*')
            ->get();

    }

    public function indexEtudiant($id){

        return DB::table('ecole')
            ->join('etudiant' , 'ecole.idEcole' , '=' , 'etudiant.idEcole')
            ->where('ecole.idEcole' , $id)
            ->select('etudiant.*')
            ->get();

    }

    public function showEtudiant($id, $idEtudiant){

        return DB::table('ecole')
            ->join('etudiant' , 'ecole.idEcole' , '=' , 'etudiant.idEcole')
            ->whereColumn([

                ['ecole.idEcole' , $id],
                ['etudiant.idEtudiant' , $idEtudiant]

            ])
            ->select('etudiant.*')
            ->get();

    }


}
