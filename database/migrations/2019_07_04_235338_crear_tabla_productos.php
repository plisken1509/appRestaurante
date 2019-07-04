<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categorias_id');
            $table->foreign('categorias_id', 'fk_categorias_productos')->references('id')->on('categorias')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedBigInteger('aliados_id');
            $table->foreign('aliados_id', 'fk_aliados_productos')->references('id')->on('aliados')->onDelete('restrict')->onUpdate('restrict');
             $table->string('nombre',50);  
             $table->double('precio_unitario', 8, 2);  
            $table->boolean('condicion')->default(1);
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
        Schema::dropIfExists('productos');
    }
}
