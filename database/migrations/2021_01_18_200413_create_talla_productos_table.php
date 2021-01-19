<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTallaProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talla_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produto');
            $table->unsignedTinyInteger('id_talla');
            $table->smallInteger('stock')->default(0);
            $table->enum('estado', ['no disponible', 'disponible'])->default('no disponible');
            $table->softDeletes('deleted_at', 0);
            $table->timestamps();
            $table->foreign('id_produto')->references('id')->on('productos');
            $table->foreign('id_talla')->references('id')->on('tallas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talla_productos');
    }
}