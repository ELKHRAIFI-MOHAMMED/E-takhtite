<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacataireTable extends Migration
{
    public function up()
    {
        Schema::create('vacataires', function (Blueprint $table) {
            $table->id('matricule_vacataire');
            $table->string('nom_prenom');
            $table->string('numero_tel');
            $table->string('specialiste');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vacataires');
    }
}
