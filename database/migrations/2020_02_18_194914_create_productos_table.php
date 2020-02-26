<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla producto y sus atributos
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id del producto (Auto incremental)
            $table->integer('codigoProducto')->unique(); // Codigo del producto (Unico)
            $table->integer('valorProducto'); // Valor del producto general
            $table->string('talla'); // Talla del producto
            $table->string('color'); // Color del producto
            $table->string('sexo')->nullable(); // Sexo del producto en caso de tenerlo (Nulo)
            $table->string('tipoManga'); // Tipo de manga en caso de tenerla
            $table->string('descripcion')->nullable(); // Descripcion del producto (Nulo)
            $table->string('rutaArchivo')->nullable(); // Ruta de la foto del producto (Nulo)
            // Claves foraneas
            $table->unsignedBigInteger('idInsumo'); // Id del insumo relacionado
            $table->foreign('idInsumo')->references('id')->on('insumo');
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
        Schema::dropIfExists('producto');
    }
}
