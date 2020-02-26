<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla detalleCompra y sus atributos
        Schema::create('detalleCompra', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id del detalle de compra (Auto incremental)
            $table->integer('valor'); // Valor del detalle de compra
            $table->integer('cantidad'); // Cantidad del detalle de compra 
            // Claves foraneas
            $table->unsignedBigInteger('idCompra'); // Id de la compra general
            $table->unsignedBigInteger('idInsumo'); // Id del iunsumo comprado en detalle
            $table->foreign('idCompra')->references('id')->on('compra');
            $table->foreign('idInsumo')->references('id')->on('insumo');
            // Atributos temporales
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
        Schema::dropIfExists('detalleCompra');
    }
}
