@extends('layout.master')
    @section('content')
    
    <div class ="container">
        <div class ="row">
            @foreach ($consultas as $p)
                <div class="card-body">
                    
                    <p class="card-text" aling="justify">{{$p->nombre}}</p>
                    <p class="card-text" aling="justify">Numero de Veces: {{$p->cliente}}</p>
                    <br>
                </div>
            @endforeach 
        </div>
    </div> 
        
@stop