<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla publicacion y sus atributos
        Schema::create('publicacion', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id de la publicacion (Auto incremental)
            $table->date('fecha'); // Fecha de la publicacion
            $table->string('descripcion')->nullable(); // Descripcion de la publicacion (Nulo)
            // Claves foraneas 
            $table->unsignedBigInteger('idUsuario'); // Id del usuario relacionado a la publicacion
            $table->unsignedBigInteger('idDetalleProducto'); // Id del detalleProducto relacionado a la publicacion
            $table->foreign('idUsuario')->references('id')->on('users');
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
        Schema::dropIfExists('publicacion');
    }
}
