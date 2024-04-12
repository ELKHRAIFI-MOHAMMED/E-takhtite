<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffectationTable extends Migration
{
    public function up()
    {
        Schema::create('affectations', function (Blueprint $table) {
            $table->id('id_affectation');
            $table->bigInteger('matricule_formateur')->unsigned(); // Changer le type en string
            $table->foreign('matricule_formateur')->references('matricule_formateur')->on('formateurs');
            $table->bigInteger('matricule_vacataire')->unsigned();
            $table->foreign('matricule_vacataire')->references('matricule_vacataire')->on('vacataires');
            $table->bigInteger('id_module')->unsigned();
            $table->foreign('id_module')->references('id_module')->on('modules');
            $table->bigInteger('id_groupe')->unsigned();
            $table->foreign('id_groupe')->references('id_groupe')->on('groupes');
            $table->bigInteger('id_filiere')->unsigned();
            $table->foreign('id_filiere')->references('id_filiere')->on('filieres');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('affectations');
    }
}
