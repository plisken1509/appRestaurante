<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDetalleProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('productos_id');
            $table->foreign('productos_id', 'fk_productos_detalle_productos')->references('id')->on('productos')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('modo_pago_id');
            $table->foreign('modo_pago_id', 'fk_modo_pago_detalle')->references('id')->on('modo_pago')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('ventas_id');
            $table->foreign('ventas_id', 'fk_ventas_detalle')->references('id')->on('ventas')->onDelete('restrict')->onUpdate('restrict');
            $table->bigInteger('cantidad');
            $table->double('subtotal', 8, 2);   
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
        Schema::dropIfExists('detalle_productos');
    }
}
