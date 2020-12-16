@extends('layout.master')
    @section('content')
    <h1> Listado de Eventos </h1>
    <br>
    <ul>
        @foreach($eventos as $c)
        <li>
           <h2> {{ $c['nombre'] }} 
            <a href='{{ url("servicios/eventos/$c[id]/$c[nombre]") }}'> </a>
           </h2>
           <br>
        </li>
        @endforeach

    </ul>
@stop