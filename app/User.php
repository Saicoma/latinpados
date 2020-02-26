<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens; // Importa la libreria para utilizar Tokens

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // Los atributos que son asignables en masa.
    protected $fillable = [
        'nombre', 
        'email', 
        'rol',
        'direccion',
        'telefono',
        'estadoUsuario',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // Los atributos que deberían estar ocultos para las matrices.
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // Los atributos que deben ser otorgados a los tipos nativos.
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
