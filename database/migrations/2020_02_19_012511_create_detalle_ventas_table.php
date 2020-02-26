<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla detalleVenta y sus atributos
        Schema::create('detalleVenta', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id del detalle de venta (Auto incremental)
            $table->integer('valor'); // Valor del detalle de venta
            $table->integer('cantidad'); // Cantidad de productos individuales de la venta
            // Claves foraneas 
            $table->unsignedBigInteger('idVenta'); // Id de la venta relacionada
            $table->unsignedBigInteger('idDetalleProducto'); // Ide del detalleProducto relacionado
            $table->foreign('idVenta')->references('id')->on('venta');
            $table->foreign('idDetalleProducto')->references('id')->on('detalleProducto');
            // Variables temporales
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
        Schema::dropIfExists('detalleVenta');
    }
}
