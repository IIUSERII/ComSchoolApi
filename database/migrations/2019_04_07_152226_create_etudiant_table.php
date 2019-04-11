<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant', function (Blueprint $table) {
            $table->bigIncrements('idEtudiant');
            $table->integer('idParent');
            $table->integer('idTransport');
            $table->integer('idEcole');
            $table->string('nomEtudiant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiant');
    }
}
