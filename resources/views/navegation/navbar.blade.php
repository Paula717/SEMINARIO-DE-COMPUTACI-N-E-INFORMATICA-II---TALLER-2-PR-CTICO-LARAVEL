<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
    <div class="container" >
        <a class="navbar-brand" href="{{url('/')}}" style="color:#777"><span style="font-size:15pt">&#127751;</span><font size=4 face="Comic Sans MS,arial,verdana"> Hotel Caribe</font></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <body>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <font size=4 face="Comic Sans MS,arial,verdana">&#127958; Hotel</font>
                            </a>
                            <div class="dropdown-menu " aria-labelledby="dropdownMenuBoton">
                                <a class="dropdown-item" href="{{url('/hotel/historia')}}"><font size=4 face="Comic Sans MS,arial,verdana">Historia</font></a>
                                <a class="dropdown-item" href="{{url('/hotel/mision-vision')}}"><font size=4 face="Comic Sans MS,arial,verdana">Misión y Visión</font></a>
                                <a class="dropdown-item" href="{{url('/hotel/ubicacion')}}"><font size=4 face="Comic Sans MS,arial,verdana">Ubicación</font></a>
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <font size=4 face="Comic Sans MS,arial,verdana">&#128276; Servicios</font>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}"><font size=4 face="Comic Sans MS,arial,verdana">Habitaciones</font></a>
                                <a class="dropdown-item" href="{{url('/servicios/eventos')}}"><font size=4 face="Comic Sans MS,arial,verdana">Eventos</font></a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <font size=4 face="Comic Sans MS,arial,verdana">&#128106; Clientes</font>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{url('/clientes/visualizar')}}"><font size=4 face="Comic Sans MS,arial,verdana">Visualizar</font></a>
                            </div>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/facturacion')}}"><font size=4 face="Comic Sans MS,arial,verdana">&#128176; Facturacion</font> <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/reservas')}}"><font size=4 face="Comic Sans MS,arial,verdana">&#128221; Reservas</font> <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/contactos')}}"><font size=4 face="Comic Sans MS,arial,verdana">&#128222; Contactos</font> <span class="sr-only">(current)</span></a>
                        </li>
                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                    </body>
                </ul>
            </div>
        @endif
    </div>
</nav>
