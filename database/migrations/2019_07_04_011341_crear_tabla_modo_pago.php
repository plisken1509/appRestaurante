<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaModoPago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modo_pago', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50);   
            $table->string('descripcion',50);
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
        Schema::dropIfExists('modo_pago');
    }
}
