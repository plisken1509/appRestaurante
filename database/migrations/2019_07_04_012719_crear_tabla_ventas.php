<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuarios_id');
            $table->foreign('usuarios_id', 'fk_usuarios_ventas')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->double('iva', 8, 2);
            $table->double('total', 8, 2);  
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
        Schema::dropIfExists('ventas');
    }
}
