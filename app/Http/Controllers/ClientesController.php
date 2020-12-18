<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function showClientes()
    {
        $cliente = DB::table('cliente')->orderBy('nombre','ASC')
        ->get();
        return view('clientes.clientes',['clientes' => $cliente]);
    }
}
