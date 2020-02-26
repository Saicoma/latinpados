<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    protected $table = 'compra';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // Los atributos que son asignables en masa.
    protected $fillable = [
        
        'codigoCompra',
        'fechaCompra',
        'valorTotal',
        'descripcion',
        'rutaArchivo',
        'idUsuario',
        'idProveedor',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // Los atributos que deberían estar ocultos para las matrices.
    protected $hidden = [
        //
    ];

     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // Los atributos que deben ser otorgados a los tipos nativos.
    protected $casts = [
        //
    ];
}
