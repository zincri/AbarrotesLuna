<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoPorVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_por_ventas', function (Blueprint $table) {
            $table->integer('activo');
            $table->increments('id');
            $table->integer('producto');
            $table->integer('venta');
            $table->integer('usuario_ins');
            $table->integer('usuario_upd');
            $table->timestamps();


            $table->foreign('producto')->references('id')->on('productos');
            $table->foreign('venta')->references('id')->on('ventas');
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
        Schema::dropIfExists('producto_por_ventas');
    }
}
