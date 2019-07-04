<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPermisoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('permisos_id');
            $table->foreign('permisos_id', 'fk_permisos_permiso_rol')->references('id')->on('permisos')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id', 'fk_rol_permiso_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            
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
        Schema::dropIfExists('permiso_rol');
    }
}
