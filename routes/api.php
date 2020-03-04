<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para autenticacion mediante Passport 
Route::post('signup', 'AuthController@signup');
Route::post('login', 'AuthController@login');
Route::group(['middleware' => 'auth:api'], function(){
    // Rutas de usuario dentro del middleware
    Route::post('details', 'AuthController@details');
    Route::post('logout', 'AuthController@logout');
    
    // CRUD basico para la tabla 'users' 
    Route::get('user','UsersController@index');
    Route::post('user','UsersController@store');
    Route::get('user/{id}','UsersController@show');
    Route::put('user/{id}','UsersController@update');
    Route::delete('user/{id}','UsersController@destroy');

    // CRUD basico para la tabla 'proveedor' 
    Route::get('proveedor','ProveedorController@index');
    Route::post('proveedor','ProveedorController@store');
    Route::get('proveedor/{id}','ProveedorController@show');
    Route::put('proveedor/{id}','ProveedorController@update');
    Route::delete('proveedor/{id}','ProveedorController@destroy');

    // CRUD basico para la tabla 'compra' 
    Route::get('compra','CompraController@index');
    Route::post('compra','CompraController@store');
    Route::get('compra/{id}','CompraController@show');
    Route::put('compra/{id}','CompraController@update');
    Route::delete('compra/{id}','CompraController@destroy');

    // CRUD basico para la tabla 'detallePago' 
    Route::get('detallePago','DetallePagoController@index');
    Route::post('detallePago','DetallePagoController@store');
    Route::get('detallePago/{id}','DetallePagoController@show');
    Route::put('detallePago/{id}','DetallePagoController@update');
    Route::delete('detallePago/{id}','DetallePagoController@destroy');

    // CRUD basico para la tabla 'insumo' 
    Route::get('insumo','InsumoController@index');
    Route::post('insumo','InsumoController@store');
    Route::get('insumo/{id}','InsumoController@show');
    Route::put('insumo/{id}','InsumoController@update');
    Route::delete('insumo/{id}','InsumoController@destroy');

    // CRUD basico para la tabla 'detalleCompra' 
    Route::get('detalleCompra','DetalleCompraController@index');
    Route::post('detalleCompra','DetalleCompraController@store');
    Route::get('detalleCompra/{id}','DetalleCompraController@show');
    Route::put('detalleCompra/{id}','DetalleCompraController@update');
    Route::delete('detalleCompra/{id}','DetalleCompraController@destroy');

    // CRUD basico para la tabla 'venta' 
    Route::get('venta','VentaController@index');
    Route::post('venta','VentaController@store');
    Route::get('venta/{id}','VentaController@show');
    Route::put('venta/{id}','VentaController@update');
    Route::delete('venta/{id}','VentaController@destroy');

    // CRUD basico para la tabla 'detalleUsuario' 
    Route::get('detalleUsuario','DetalleUsuarioController@index');
    Route::post('detalleUsuario','DetalleUsuarioController@store');
    Route::get('detalleUsuario/{id}','DetalleUsuarioController@show');
    Route::put('detalleUsuario/{id}','DetalleUsuarioController@update');
    Route::delete('detalleUsuario/{id}','DetalleUsuarioController@destroy');

    // CRUD basico para la tabla 'envio' 
    Route::get('envio','EnvioController@index');
    Route::post('envio','EnvioController@store');
    Route::get('envio/{id}','EnvioController@show');
    Route::put('envio/{id}','EnvioController@update');
    Route::delete('envio/{id}','EnvioController@destroy');

    // CRUD basico para la tabla 'detalleCobro' 
    Route::get('detalleCobro','DetalleCobroController@index');
    Route::post('detalleCobro','DetalleCobroController@store');
    Route::get('detalleCobro/{id}','DetalleCobroController@show');
    Route::put('detalleCobro/{id}','DetalleCobroController@update');
    Route::delete('detalleCobro/{id}','DetalleCobroController@destroy');

    // CRUD basico para la tabla 'producto' 
    Route::get('producto','ProductoController@index');
    Route::post('producto','ProductoController@store');
    Route::get('producto/{id}','ProductoController@show');
    Route::put('producto/{id}','ProductoController@update');
    Route::delete('producto/{id}','ProductoController@destroy');

    // CRUD basico para la tabla 'diseño' 
    Route::get('diseno','DisenoController@index');
    Route::post('diseno','DisenoController@store');
    Route::get('diseno/{id}','DisenoController@show');
    Route::put('diseno/{id}','DisenoController@update');
    Route::delete('diseno/{id}','DisenoController@destroy');

    // CRUD basico para la tabla 'detalleProducto' 
    Route::get('detalleProducto','DetalleProductoController@index');
    Route::post('detalleProducto','DetalleProductoController@store');
    Route::get('detalleProducto/{id}','DetalleProductoController@show');
    Route::put('detalleProducto/{id}','DetalleProductoController@update');
    Route::delete('detalleProducto/{id}','DetalleProductoController@destroy');

    // CRUD basico para la tabla 'detalleVenta' 
    Route::get('detalleVenta','DetalleVentaController@index');
    Route::post('detalleVenta','DetalleVentaController@store');
    Route::get('detalleVenta/{id}','DetalleVentaController@show');
    Route::put('detalleVenta/{id}','DetalleVentaController@update');
    Route::delete('detalleVenta/{id}','DetalleVentaController@destroy');

    // CRUD basico para la tabla 'publicacion' 
    Route::get('publicacion','PublicacionController@index');
    Route::post('publicacion','PublicacionController@store');
    Route::get('publicacion/{id}','PublicacionController@show');
    Route::put('publicacion/{id}','PublicacionController@update');
    Route::delete('publicacion/{id}','PublicacionController@destroy');

    // CRUD basico para la tabla 'detalleDiseno' 
    Route::get('detalleDiseno','DetalleDisenoController@index');
    Route::post('detalleDiseno','DetalleDisenoController@store');
    Route::get('detalleDiseno/{id}','DetalleDisenoController@show');
    Route::put('detalleDiseno/{id}','DetalleDisenoController@update');
    Route::delete('detalleDiseno/{id}','DetalleDisenoController@destroy');
});