<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diseno extends Model
{
    protected $table = 'diseno';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // Los atributos que son asignables en masa.
    protected $fillable = [
        'nombre',
        'valorDiseno',
        'tipoDiseno',
        'dimenciones',
        'descripcion',
        'rutaArchivo',
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
