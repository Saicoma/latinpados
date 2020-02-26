<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla detallePago y sus atributos
        Schema::create('detallePago', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id del detalle de pago (Auto incremental)
            $table->integer('valor'); // Valor del detalle de pago
            $table->string('metodoPago'); // Metodo de pago del detalle
            $table->string('estadoPago'); // Estado del pago 
            $table->date('fechaInicio'); // Fecha de ingreso del detalle
            $table->date('fechaFin'); // Fecha de pago del detalle
            $table->string('descripcion')->nullable(); // Descripcion del detalle (Nulo) 
            // Claves foraneas
            $table->unsignedBigInteger('idCompra'); // Id de la compra relacionada
            $table->foreign('idCompra')->references('id')->on('compra');
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
        Schema::dropIfExists('detallePago');
    }
}
