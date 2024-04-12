<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupeTable extends Migration
{
    public function up()
    {
        Schema::create('groupes', function (Blueprint $table) {
            $table->id('id_groupe');
            $table->string('nom_groupe');
            $table->integer('nombre_stagiaire');
            $table->bigInteger('id_filiere')->unsigned();
            $table->foreign('id_filiere')->references('id_filiere')->on('filieres');
            $table->year('annee');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('groupes');
    }
}