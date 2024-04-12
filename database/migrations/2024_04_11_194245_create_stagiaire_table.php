<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagiaireTable extends Migration
{
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id('id_stagiaire');
            $table->string('nom_stagiaire');
            $table->string('prenom_stagiaire');
            $table->string('email');
            $table->string('numero');
            $table->bigInteger('id_groupe')->unsigned();
            $table->foreign('id_groupe')->references('id_groupe')->on('groupes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stagiaires');
    }
}
