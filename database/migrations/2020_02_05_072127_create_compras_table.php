<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla compra y sus atributos
        Schema::create('compra', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id de la compra (Auto incremental)
            $table->string('codigoCompra')->unique(); // Codigo de la compra (Unico)
            $table->date('fechaCompra'); // Fecha de compra
            $table->integer('valorTotal'); // Valor de la compra
            $table->string('descripcion')->nullable(); // Descripcion de la compra (Nulo)
            $table->string('rutaArchivo')->nullable(); // Ruta de la boleta de la compra (Nulo)
            // Claves foraneas
            $table->unsignedBigInteger('idUsuario'); // Id del usuario que registra la compra 
            $table->unsignedBigInteger('idProveedor'); // Id del proveedor
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->foreign('idProveedor')->references('id')->on('proveedor');
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
        Schema::dropIfExists('compra');
    }
}
