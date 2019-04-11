<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    protected $table = 'chauffeur';

    protected $guarded = ['id'];

    public function transport(){

        return $this->hasOne(Transport::class , 'idChauffeur');

    }

}
