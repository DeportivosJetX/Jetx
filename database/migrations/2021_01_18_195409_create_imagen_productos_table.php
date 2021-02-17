<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_producto');
            $table->string('nombre_imagen',100)->unique();
            $table->string('descripcion',70);
            $table->UnsignedTinyInteger('prioridad');
            $table->unique(['id_producto','nombre_imagen']);
            $table->timestamps();
            $table->foreign('id_producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagen_productos');
    }
}
