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
            $table->integer('precio')->nullable();
            $table->string('img');
            $table->integer('stock')->nullable();
            $table->string('estado')->nullable();
            $table->bigInteger('visitas')->nullable();
            $table->bigInteger('enlace_compra')->unsigned();
            $table->bigInteger('id_tienda')->unsigned();
            $table->foreign('enlace_compra')->references('id')->on('enlace_compra');
            $table->foreign('id_tienda')->references('id')->on('tienda');
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
