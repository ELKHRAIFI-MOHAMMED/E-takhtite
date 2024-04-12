<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffectationModuleTable extends Migration
{
    public function up()
    {
        Schema::create('affectation_module', function (Blueprint $table) {
            $table->id('id_affectation_module');
            $table->bigInteger('id_module')->unsigned();
            $table->foreign('id_module')->references('id_module')->on('modules');
            $table->bigInteger('id_filiere')->unsigned();
            $table->foreign('id_filiere')->references('id_filiere')->on('filieres');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('affectation_module');
    }
}
