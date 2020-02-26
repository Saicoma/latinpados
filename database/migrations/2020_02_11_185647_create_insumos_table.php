<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla insumo y sus atributos 
        Schema::create('insumo', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id del insumo (Auto incremental)
            $table->string('codigo')->unique(); // Codigo del insumo (Unico)
            $table->string('nombre'); // Nombre del insumo
            $table->integer('valorInsumo')->nullable(); // Valor del insumo (Nulo)
            $table->float('stock'); // Stock del insumo en el almacen 
            $table->string('unidadMedida'); // Unidad de medida del insumo
            $table->string('tipoInsumo'); // Tipo del insumo
            $table->string('descripcion')->nullable(); // Descripcion del insumo (Nulo)
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
        Schema::dropIfExists('insumo');
    }
}
