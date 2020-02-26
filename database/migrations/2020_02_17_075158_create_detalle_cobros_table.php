<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCobrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla detalleCobro y sus atributos
        Schema::create('detalleCobro', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id del detalle de cobro (Auto incremental)
            $table->integer('valor'); // Valor del detalle de cobro
            $table->string('metodoCobro'); // Metodo de cobro del detalle
            $table->string('estadoCobro'); // Estado del cobro
            $table->date('fechaInicio'); // Fecha de ingreso del detalle
            $table->date('fechaFin')->nullable(); // Fecha de cobro del detalle (Nulo)
            $table->string('descripcion')->nullable(); // Descripcion del detalle (Nulo)
            // Claves foraneas
            $table->unsignedBigInteger('idVenta'); // Id de la venta relacionada
            $table->foreign('idVenta')->references('id')->on('venta');
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
        Schema::dropIfExists('detalleCobro');
    }
}
