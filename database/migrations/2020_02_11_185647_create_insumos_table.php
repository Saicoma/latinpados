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
            $table->integer('valorInsumo')->default(0); // Valor del insumo, valor predeterminado (0)
            $table->float('stock')->default(0); // Stock del insumo en el almacen, varor predefinido (0)
            $table->string('unidadMedida')->default('Unidad'); // Unidad de medida del insumo (NUlo)
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
