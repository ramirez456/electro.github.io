<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediente', function (Blueprint $table) {
            $table->interger('id',true);
            $table->string('nro_atencion');
            $table->string('nro_reclamo');
            $table->string('suministro');
            $table->string('sector');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('motivo');
            $table->integer('proceso')->unsigned();
            $table->foreign('proceso')->references('id')->on('proceso');
            $table->date('fecha');
            $table->integer('concesionaria')->unsigned();
            $table->foreign('concesionaria')->references('id')->on('concesionaria');
            $table->string('ot');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expediente');
    }
}
