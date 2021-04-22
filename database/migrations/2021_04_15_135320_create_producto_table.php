<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descripcion', 4000);
            $table->integer('precio');
            $table->string('img');
            $table->integer('stock');
            $table->string('estado');
            $table->bigInteger('visitas');
            $table->bigInteger('enlace_compra')->unsigned();
            $table->foreign('enlace_compra')->references('id')->on('enlace_compra')->onDelete('cascade');
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
        Schema::dropIfExists('producto');
    }
}
