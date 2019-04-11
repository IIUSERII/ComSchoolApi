<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Localisation extends Controller
{

    public function index(){

        return \App\Localisation::all();

    }

    public function show(\App\Localisation $localisation){

        return $localisation;

    }

}
