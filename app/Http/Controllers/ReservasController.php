<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function getReservas()
    {
        return view('reservas.reservas');
    }

    public function getRegistrar()
    {
        return view('reservas.mensaje');
    }

    public function getConsultar()
    {
        $consulta = DB::table('reserva')->join('cliente','cliente','=','cliente.id')->get();
        
        return view('consultas',['consultas' => $consulta]);
    }
}
