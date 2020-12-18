<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ReservasController;


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
//Controlador Hotel
Route::get('/', [HotelController::class, 'getIndex']); //Ruta /
Route::get('hotel/historia', [HotelController::class, 'showHistoria']); //Ruta hotel/historia
Route::get('hotel/mision-vision', [HotelController::class, 'showMision']); //Ruta hotel/mision-vision 
Route::get('hotel/ubicacion', [HotelController::class, 'showUbicacion']); //Ruta hotel/ubicación
Route::get('contactos', [HotelController::class, 'showContactos']); //Ruta contactos

//Controlador Habitacion
Route::get('servicios/habitaciones', [HabitacionesController::class, 'showHabitaciones']); //Ruta servicios/habitaciones
Route::get('servicios/eventos', [HabitacionesController::class, 'showEventos']); //Ruta servicios/eventos => Parametro

//Controlador Clientes
Route::get('clientes/visualizar', [ClientesController::class, 'showClientes']); //Ruta clientes/visualizar

//Controlador Facturacion
Route::get('facturacion', [FacturacionController::class, 'getFactura']); //Ruta facturacion

//Controlador Reservas

Route::get('reservas', [ReservasController::class, 'getReservas'])->name('formularioReserva');//Ruta reservas
Route::post('reservas', [ReservasController::class, 'getRegistrar'])->name('registroCli');//Ruta registrar
Route::get('consultas', [ReservasController::class, 'getConsultar']);//Ruta consultas
