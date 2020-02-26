<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla diseño y sus atributos
        Schema::create('diseno', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id del diseño (Auto incremental)
            $table->string('nombre')->nullable(); // Nombre del diseño (Nulo)
            $table->integer('valorDiseno'); // Valor del diseño
            $table->string('tipoDiseno'); // Tipo de diseño
            $table->string('dimenciones'); // Dimenciones del diseño
            $table->string('descripcion')->nullable(); // Descripcion del diseño (Nulo)
            $table->string('rutaArchivo')->nullable(); // Ruta de la foto del diseño
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
        Schema::dropIfExists('diseno');
    }
}
