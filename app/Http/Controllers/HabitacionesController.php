<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function showHabitaciones()
    {
        $habitacion = DB::table('habitacion')->join('precio','precio_id','=','precio.id')->orderBy('numero','ASC')->get();
        return view('servicios.habitaciones',['habitaciones' => $habitacion]);
    }

    //SELECT precio.precio FROM `habitacion`, `precio` WHERE habitacion.precio_id=precio.id
    public function showEventos()
    {
        $eventos =[
            array('id'=> '1', 'nombre' => '20 de Diciembre: Fiesta nocturna para los huespedes.'),
            array('id'=> '2', 'nombre' => '24 de Diciembre: Celebracion de Navidad para los niños con tematicas navideñas para la familia.'),
            array('id'=> '3', 'nombre' => '31 de Diciembre: Celebracion de año nuevo, cena, conciertos y fuegos artificiales.'),
            array('id'=> '4', 'nombre' => '6 de enero: Dia de los Reyes magos.')

        ];
        return view('servicios.eventos', compact('eventos'));
    }
}
