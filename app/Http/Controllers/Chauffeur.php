<?php

namespace App\Http\Controllers;

use App\Ecole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Chauffeur extends Controller
{

    public function index(){

        return \App\Chauffeur::all();

    }

    public function show($id){

        return DB::table('chauffeur')
            ->where('chauffeur.idChauffeur' , $id)
            ->get();

    }



}
