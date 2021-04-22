<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tienda', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social');
            $table->string('rut')->nullable();
            $table->string('email');
            $table->string('telefono');
            $table->string('foto_perfil')->nullable();
            $table->string('foto_portada')->nullable();
            $table->bigInteger('id_direccion')->unsigned();
            $table->bigInteger('id_enlace_compra')->unsigned();
            $table->bigInteger('id_categoria')->unsigned(); 
            $table->foreign('id_direccion')->references('id')->on('direccion')->onDelete('cascade')->nullable();
            $table->foreign('id_enlace_compra')->references('id')->on('enlace_compra')->onDelete('cascade')->nullable();
            $table->foreign('id_categoria')->references('id')->on('categorias');
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
        Schema::dropIfExists('tienda');
    }
}
