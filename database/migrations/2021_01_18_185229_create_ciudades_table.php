<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('nombre',40);
            $table->unsignedTinyInteger('id_departamento');
            $table->softDeletes('deleted_at', 0);
            $table->timestamps();
            $table->foreign('id_departamento')->references('id')->on('departamentos');
        });

        Schema::table('users', function (Blueprint $table) {
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
        Schema::dropIfExists('ciudades');
    }
}
