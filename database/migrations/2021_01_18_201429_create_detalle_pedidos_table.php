<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidios', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('id_pedido');
            $table->UnsignedBigInteger('id_talla_producto');
            $table->unsignedSmallInteger('cantidad');
            $table->decimal('precio', 10, 0);
            $table->timestamps();
            $table->foreign('id_pedido')->references('id')->on('pedidos');
            $table->foreign('id_talla_producto')->references('id')->on('talla_productos');
            $table->unique(['id_pedido', 'id_talla_producto']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_pedidios');
    }
}
