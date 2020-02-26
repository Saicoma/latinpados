<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla detalleProducto y sus atributos
        Schema::create('detalleProducto', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id del detalle de productos asociados a la venta
            $table->string('nombre')->nullable(); // Nombre del detalle de producto (Nulo)
            $table->integer('valorDetalle'); // Valor del detalle de producto
            $table->integer('stock')->default(0); // Stock del producto especifico
            $table->string('descripcion')->nullable(); // Descripcion del producto especifico (Nulo)
            $table->string('rutaArchivo')->nullable(); // Ruta de la foto del producto especifico (Nulo)
            // Claves foraneas
            $table->unsignedBigInteger('idProducto'); // Id del producto general especifico
            $table->foreign('idProducto')->references('id')->on('producto');
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
        Schema::dropIfExists('detalleProducto');
    }
}
