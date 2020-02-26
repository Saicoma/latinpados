<?php

namespace App\Http\Controllers;

use App\detalleProducto;
use Illuminate\Http\Request;

class DetalleProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Devuelve todas las tuplas de la tabla 
    public function index()
    {
        return detalleProducto::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Guarda una tupla en la base de datos
    public function store(Request $request)
    {
        return detalleProducto::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detalleProducto  $detalleProducto
     * @return \Illuminate\Http\Response
     */
    // Devuelve una tupla de un id especifico
    public function show($id)
    {
        return detalleProducto::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detalleProducto  $detalleProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(detalleProducto $detalleProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detalleProducto  $detalleProducto
     * @return \Illuminate\Http\Response
     */
    // Modifica una tupla de un id especifico
    public function update(Request $request, $id)
    {
        detalleProducto::where('id', $id)->first()->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detalleProducto  $detalleProducto
     * @return \Illuminate\Http\Response
     */
    // Elimina una tupla de un id especifico
    public function destroy($id)
    {
        detalleProducto::where('id', $id)->first()->delete();
    }
}
