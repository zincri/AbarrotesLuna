<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->integer('activo');
            $table->increments('id');
            $table->decimal('total', 8, 2);
            $table->decimal('pago', 8, 2);
            $table->integer('usuario_ins');
            $table->integer('usuario_upd');
            $table->integer('numero_venta');
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
        Schema::dropIfExists('ventas');
    }
}
