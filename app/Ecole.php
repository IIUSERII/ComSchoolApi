<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ecole extends Model
{
    protected $table = "ecole";

    public function etudiants(){

        return $this->hasMany(Etudiant::class , 'idEcole');

    }

    public function transports(){

        return $this->hasMany(Transport::class , 'idEcole');

    }

}
