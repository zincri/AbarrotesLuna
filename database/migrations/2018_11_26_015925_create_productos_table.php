<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('activo');
            $table->decimal('costo', 8, 2);
            $table->string('descripcion',1000);
            $table->integer('existencia');
            $table->date('fecha_caducidad');
            $table->increments('id');
            $table->string('imagen',500);
            $table->string('nombre',50);
            $table->decimal('precio', 8, 2);
            $table->integer('tipo_producto');
            $table->integer('proveedor');
            $table->timestamps();

            $table->foreign('tipo_producto')->references('id')->on('tipo_productos');
            $table->foreign('proveedor')->references('id')->on('proveedors');
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
