<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormateurTable extends Migration
{
    public function up()
    {
        Schema::create('formateurs', function (Blueprint $table) {
            $table->id('matricule_formateur');
            $table->string('nom_prenom');
            $table->string('numero_tel');
            $table->string('specialiste');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formateurs');
    }
}
