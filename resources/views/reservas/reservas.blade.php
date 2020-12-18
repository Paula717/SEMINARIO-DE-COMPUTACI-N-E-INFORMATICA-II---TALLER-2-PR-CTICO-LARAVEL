@extends('layout.master')
    @section('content')
    <br>
    <div  align="center">
        <font size=4 face="Comic Sans MS,arial,verdana"><h2>Reservas De Habitaciones</h2></font>
    </div>
    <br>
    <form action="{{url('reservas')}}" method="POST">
    @csrf

        <label for="nombre">Nombre </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='nombre' name='nombre' placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Apellido </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='apellido' name='apellido' placeholder="Apellido" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Edad </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='edad' name='edad' min='18' max='100' placeholder="Edad" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Cedula </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='cedula' name='cedula' placeholder="Cedula" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Celular </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='celular' name='celular' placeholder="Celular" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" id="correo" name='correo' placeholder='example@hotmail.com' aria-describedby="correo">
        </div>

        <div>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Tipo de Habitación</option>
                <option value="1">SENCILLA</option>
                <option value="2">DOBLE</option>
                <option value="3">MATRIMONIAL</option>
                <option value="2">SUITE</option>
            </select>
        </div>

        <label for="nombre">Fecha de Ingreso </label>
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                <input type="date" class="form-control" id='fecha_Ing' name='fecha_Ing'  placeholder="fecha_Ing"  aria-describedby="basic-addon1">
                </div>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>

        <button type="reset" class="btn btn-danger">Borrar</button>
        
        <button type="button" class="btn btn-dark">
            <a href="{{url('servicios/habitaciones')}}" >Volver</a>
        </button>
    </form>
@stop