<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea la tabla users y sus atributos
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id'); // Id del usuario (Auto incremental)
            $table->string('nombre'); // Nombre del usuario
            $table->string('email')->unique(); // Email del usuario (Unico)
            $table->timestamp('email_verified_at')->nullable(); // Verificacion de correo (Nulo)
            $table->string('rol'); // Rol del usuario
            $table->string('direccion')->nullable(); // Direccion del usuario (Nulo)
            $table->integer('telefono')->nulleable(); // Numero telefonico del usuario (Nulo)
            $table->string('estadoUsuario'); // Estado de uso del usuario
            $table->string('password'); // Password del usuario
            $table->rememberToken(); // Para guardar el token activo
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
        Schema::dropIfExists('users');
    }
}
