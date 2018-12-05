<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->integer('activo');
            $table->string('direccion',100);
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('telefono',30);
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
        Schema::dropIfExists('proveedors');
    }
}
