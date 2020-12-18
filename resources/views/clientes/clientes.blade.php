@extends('layout.master')
    @section('content')

    <div class="card-tittle">
        </br><h2><center>Listado de Clientes</center></h2>      
    </div>

    <br>
    <div class ="container">
        <div class ="row">
            @foreach($clientes as $p )
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                            <div class="col-md-4">
                                <img src='{{url("/img/$p->foto")}}' class="card-img-top" alt="...">
                            </div>

                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-tittle">{{$p->nombre}}</h6>
                                <p class="card-text" aling="justify"> Celuda: {{$p->dni}}</p>
                                <p class="card-text" aling="justify"> Genero: {{$p->genero}}</p>
                                <p class="card-text" aling="justify"> Domicilio: {{$p->domicilio}}</p>
                                <p class="card-text" aling="justify"> Telefono: {{$p->telefono}}</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div> 

@stop