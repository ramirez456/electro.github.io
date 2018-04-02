<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('id',true);
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('direccion',50);
            $table->string('telefono',50);
            $table->string('correo',50);
            $table->string('contrasenia',50);            
            $table->integer('concesionaria')->unsigned();
            $table->foreign('concesionaria')->references('id')->on('concesionaria');
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
        Schema::dropIfExists('usuario');
    }
}
