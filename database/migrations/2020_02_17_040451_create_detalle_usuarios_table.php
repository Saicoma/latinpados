<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla detalleUsuario y sus atributos
        Schema::create('detalleUsuario', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id del detalle de usuarios de cada venta (Auto incremental)
            // Claves foraneas 
            $table->unsignedBigInteger('idVenta'); // Id de la venta general
            $table->unsignedBigInteger('idUsuario'); // Id de los usuarios relacionados a la venta
            $table->foreign('idVenta')->references('id')->on('venta');
            $table->foreign('idUsuario')->references('id')->on('users');
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
        Schema::dropIfExists('detalleUsuario');
    }
}
