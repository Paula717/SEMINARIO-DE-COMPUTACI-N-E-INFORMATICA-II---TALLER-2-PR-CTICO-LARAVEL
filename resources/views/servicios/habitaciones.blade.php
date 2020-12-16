@extends('layout.master')
    @section('content')
    <div class="card-tittle">
                </br><h2><center>HABITACIONES HOTEL CARIBE</center></h2>
                
                <p class="card-text text-center">Cómodas, Exquisitas y Únicas. Las habitaciones del Hotel 
                Caribe están diseñadas en estilo vintage, elegante y neocolonial. Son espacios que te invitan a descansar 
                en un ambiente lleno de paz a pocos pasos de la playa. ¿Te imaginas despertándote con las olas del mar de 
                fondo?.</p></br>  
            </div> 
        </div>

    <div class ="container">
        <div class ="row">
            @foreach($habitaciones as $p )
                <div class ="col-md-a">
                    <div class = "card" style="width: 20rem;">
                        <img src='{{url("/img/$p->foto")}}' class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-tittle">{{$p->descripcion}}</h6>
                            <p class="card-text" aling="justify"> Codigo: {{$p->numCama}}</p>
                            <p class="card-text" aling="justify"> Precio: {{$p->precio_id}}</p>
                            <br>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div> 

    <br>
        <div class="col-md-12" aling="center">
            <a href="{{url('/reservas')}}" class ="btn btn-secondary">Reservar</a>
        </div>
    <br> 

    <div class="col-md-12" aling="center">
        <a href="{{url('/')}}" class ="btn btn-secondary">Regresar</a>
    </div> 
@stop
