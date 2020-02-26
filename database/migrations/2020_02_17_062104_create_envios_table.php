<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla envio y sus atributos
        Schema::create('envio', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id del envio (Auto incremental)
            $table->string('codigoEnvio'); // Codigo del envio
            $table->string('estadoEnvio'); // Estado del envio
            $table->string('descripcion')->nullable(); // Descripcion del envio (Nulo)
            // Claves foraneas
            $table->unsignedBigInteger('idVenta'); // Id de la venta asociada
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
        Schema::dropIfExists('envio');
    }
}
