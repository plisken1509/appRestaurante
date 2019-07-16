<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAliados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliados', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->unsignedBigInteger('tipos_id');
            $table->foreign('tipos_id', 'fk_tipos_aliados')->references('id')->on('tipos')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('sectores_id');
            $table->foreign('sectores_id', 'fk_sectores_aliados')->references('id')->on('sectores')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nombre',50);
            $table->string('direccion',100);
            $table->string('telefono',10);
            $table->string('descripcion',50);
            $table->string('foto',100)->nullable();
            $table->boolean('condicion')->default(1);
            $table->timestamps();
            $table->charset ="utf8mb4";
            $table->collation ="utf8mb4_spanish_ci";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aliados');
    }
}
