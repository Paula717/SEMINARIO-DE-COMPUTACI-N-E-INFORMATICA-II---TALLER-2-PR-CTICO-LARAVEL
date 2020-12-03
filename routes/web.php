<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Ruta /
Route::get('/', function () 
{
    return view('principal');
});

//Ruta hotel/historia
Route::get('hotel/historia', function () 
{
    return view('hotel.historia');
});

//Ruta hotel/mision-vision 
Route::get('hotel/mision-vision', function () 
{
    return view('hotel.vision');
});

//Ruta hotel/ubicación
Route::get('hotel/ubicacion', function () 
{
    return view('hotel.ubicacion');
});

//Ruta servicios/habitaciones
Route::get('servicios/habitaciones', function () 
{
    return view('servicios.habitaciones');
});

//Ruta servicios/eventos => Parametro
Route::get('servicios/eventos/{id}', function ($id) 
{
    return view('servicios.eventos', array('id' => $id));
});

//Ruta clientes/visualizar
Route::get('clientes/visualizar', function () 
{
    return view('clientes.clientes');
});

//Ruta facturacion
Route::get('facturacion', function () 
{
    return view('facturacion.factura');
});

//Ruta reservas
Route::get('reservas', function () 
{
    return view('reservas.reservas');
});

//Ruta contactos
Route::get('contactos', function () 
{
    return view('contacto');
});

