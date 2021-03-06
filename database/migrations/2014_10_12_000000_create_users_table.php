<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('activo');
            $table->string('apellido_paterno',50)->nullable();
            $table->string('apellido_materno',50)->nullable();
            $table->string('datos_control',100)->nullable();
            $table->string('email',50)->unique();
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('password');
            $table->string('telefono',30)->nullable();
            $table->string('usuario',50)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
