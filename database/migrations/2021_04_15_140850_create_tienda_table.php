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
            $table->string('logo')->nullable();
            $table->string('desc',4000)->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->bigInteger('id_categoria')->unsigned();
            $table->bigInteger('enlace_compra')->unsigned()->nullable();
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->foreign('enlace_compra')->references('id')->on('enlace_compra');
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
