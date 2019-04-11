<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Transport extends Controller
{
    public function index(){

        return \App\Transport::all();

    }

    public function show(\App\Transport $transport){

        return $transport;

    }

    public function indexEtudiant($id){

        return DB::table('transport')
            ->join('etudiant' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->where('transport.idTransport' , $id)
            ->get();

    }

    public function showEtudiant($id, $idEtudiant){

        return DB::table('transport')
            ->join('etudiant' , 'transport.idTransport' , '=' , 'etudiant.idTransport')
            ->whereColumn([

                ['transport.idTransport' , $id],
                ['etudiant.idTransport' , $idEtudiant]

            ])
            ->get();

    }

    public function showChauffeur($id){

        return DB::table('transport')
            ->join('chauffeur' , 'transport.idTransport' , '=' , 'chauffeur.idTransport')
            ->where('transport.idTransport' , $id)
            ->select('chauffeur.*')
            ->get();

    }

    public function showLocalisation($id){

        return DB::table('transport')
            ->join('localisation' , 'transport.idTransport' , '=' , 'localisation.idTransport')
            ->where('transport.idTransport' , $id)
            ->select('localisation.*')
            ->get();

    }

    public function showNotification($id){

        return DB::table('transport')
            ->join('notification' , 'transport.idTransport' , '=' , 'notification.idTransport')
            ->where('transport.idTransport' , $id)
            ->select('notification.*')
            ->get();

    }

}
