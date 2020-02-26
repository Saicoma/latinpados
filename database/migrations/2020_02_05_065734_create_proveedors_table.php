<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla proveedor y sus atributos
        Schema::create('proveedor', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id de proveedor (auto incremental)
            $table->string('nombre'); // Nombre del proveedor
            $table->string('direccion')->nulleable(); // Direccion del proveedor (Nulo)
            $table->integer('telefono')->nulleable(); // Numero telefonico del proveedor (Nulo)
            $table->string('email')->nullable(); // Direccion de Email del proveedor (Nulo)
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
        Schema::dropIfExists('proveedor');
    }
}
