<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    public function getFactura()
    {
        return view('facturacion.factura');
    }
}
