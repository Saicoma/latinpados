<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla venta y sus atributos
        Schema::create('venta', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id de la venta (Auto incremental)
            $table->string('codigoVenta')->unique(); // Codigo de la venta (Unico) 
            $table->string('estadoVenta'); // Estado de la venta 
            $table->string('tipoEntrega'); // Tipo de entrega de la venta
            $table->date('fechaVenta'); // Fecha donde se genera la venta 
            $table->date('fechaEntrega')->nullable(); // Fecha donde se entrega la venta (Nulo)
            $table->integer('valorTotal'); // Valor de la venta 
            $table->string('descripcion')->nullable(); // Descripcion de la venta (Nulo)
            $table->string('rutaArchivo')->nullable(); // Ruta de la boleta de la venta (Nulo)
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
        Schema::dropIfExists('venta');
    }
}
