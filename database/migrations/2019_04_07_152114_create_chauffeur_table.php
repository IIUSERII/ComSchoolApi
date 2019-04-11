<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChauffeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chauffeur', function (Blueprint $table) {
            $table->bigIncrements('idChauffeur');
            $table->integer("idTransport");
            $table->integer("idCompte");
            $table->string('nomChauffeur' , 100);
            $table->string('telChauffeur' , 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chauffeur');
    }
}
