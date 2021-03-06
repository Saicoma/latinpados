<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insumo extends Model
{
    protected $table = 'insumo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // Los atributos que son asignables en masa.
    protected $fillable = [
        'codigo',
        'nombre',
        'valorInsumo',
        'stock',
        'unidadMedida',
        'tipoInsumo',
        'descripcion',
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
