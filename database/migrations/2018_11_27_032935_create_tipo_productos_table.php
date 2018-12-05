<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_productos', function (Blueprint $table) {
            $table->integer('activo');
            $table->string('descripcion',1000);
            $table->increments('id');
            $table->string('nombre',50);
            $table->integer('usuario_ins');
            $table->integer('usuario_upd');
            $table->timestamps();

            $table->foreign('usuario_ins')->references('id')->on('users');
            $table->foreign('usuario_upd')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_productos');
    }
}
