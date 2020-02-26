<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleDisenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla detalleDiseno y sus atributos
        Schema::create('detalleDiseno', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id del detalleDiseno (Auto incremental)
            //Claves foraneas 
            $table->unsignedBigInteger('idDiseno'); // Id del diseño relacionado
            $table->unsignedBigInteger('idDetalleProducto'); // Id del detalloProducto
            $table->foreign('idDiseno')->references('id')->on('diseno');
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
        Schema::dropIfExists('detalleDiseno');
    }
}
