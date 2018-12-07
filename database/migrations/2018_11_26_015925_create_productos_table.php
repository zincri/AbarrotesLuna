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
            $table->integer('activo');//
            $table->decimal('costo', 8, 2);//
            $table->string('descripcion',1000);//
            $table->integer('existencia');//stock
            $table->date('fecha_caducidad');
            $table->increments('id');//
            $table->string('imagen',500);
            $table->string('nombre',50);//
            $table->decimal('precio', 8, 2);//
            $table->integer('proveedor');//
            $table->integer('tipo_producto');//
            $table->integer('usuario_ins');//
            $table->integer('usuario_upd');//
            $table->timestamps();

            $table->foreign('tipo_producto')->references('id')->on('tipo_productos');
            $table->foreign('proveedor')->references('id')->on('proveedors');
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
        Schema::dropIfExists('productos');
    }
}
