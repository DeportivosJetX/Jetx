<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->char('referencia', 10);
            $table->string('nombre',100);
            $table->string('slug',150)->unique();
            $table->decimal('costo', 10, 0);
            $table->decimal('descuento', 3, 2)->default(0);
            $table->text('descripcion');
            $table->string('guia_tallas_img',100)->nullable();
            $table->enum('publico', ['hombres', 'mujeres', 'niños','unisex']);
            $table->enum('envio', ['gratis', 'calculado']);
            $table->unsignedTinyInteger('id_categoria');
            $table->unsignedTinyInteger('id_deporte');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedSmallInteger('id_ciudad');
            $table->softDeletes('deleted_at', 0);
            $table->timestamps();
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->foreign('id_deporte')->references('id')->on('deportes');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_ciudad')->references('id')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
