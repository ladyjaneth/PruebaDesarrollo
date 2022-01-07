<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_empleado_rol', function (Blueprint $table) {

            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('rol_id');

            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('rol_id')->references('id')->on('roles');

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
        Schema::dropIfExists('_empleado_rol');
    }
}
