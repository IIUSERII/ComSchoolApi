<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Notification extends Controller
{

    public function index(){

        return \App\Notification::all();

    }

    public function show(\App\Notification $notification){

        return $notification;

    }

}
