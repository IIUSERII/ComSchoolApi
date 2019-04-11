<?php

namespace App\Http\Controllers;

use App\Parent_Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Parent_Etd extends Controller
{
    public function index(){

        return Parent_Etudiant::all();

    }

    public function show(Parent_Etudiant $parent){

        return $parent;

    }

    public function indexEtudiant($id){

        return DB::table('parent')
            ->join('etudiant' , 'parent.idParent' , '=' , 'etudiant.idParent')
            ->where('parent.idParent' , $id)
            ->select('etudiant.*')
            ->get();

    }

    public function showEtudiant($id, $idEtudiant){

        return DB::table('parent')
            ->join('etudiant' , 'parent.idParent' , '=' , 'etudiant.idParent')
            ->whereColumn([
                ['parent.idParent' , $id],
                ['etudiant.idEtudiant' , $idEtudiant]

            ])
            ->select('etudiant.*')
            ->get();

    }

}
