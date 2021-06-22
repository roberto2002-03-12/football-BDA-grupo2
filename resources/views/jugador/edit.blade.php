@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
    <div id="table">
        <br><br>
        <h1>Editar Jugador</h1>
        <br><br>
        <form action="{{ url('jugador/update/'.$jugador->id) }}" id="form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="id_equipo"> ID Equipo </label>
                <input type="number" class="form-control" value="{{ $jugador['id_equipo'] }}" name="id_equipo" id="id_equipo">
                <br>
            </div>

            <div class="form-group">
                <label for="nombre"> Nombre </label>
                <input type="text" class="form-control" value="{{ $jugador['nombre'] }}" name="nombre" id="nombre">
                <br>
            </div>
            
            <div class="form-group">
                <label for="apellido"> Apellido </label>
                <input type="text" class="form-control" value="{{ $jugador['apellido'] }}" name="apellido" id="apellido">
                <br>
            </div>

            <div class="form-group">
                <label for="dni"> DNI </label>
                <input type="number" class="form-control" value="{{ $jugador['dni'] }}" name="dni" id="dni">
                <br>
            </div>

            <div class="form-group">
                <label for="nacimiento"> Nacimiento </label>
                <input type="date" class="form-control" value="{{ $jugador['nacimiento'] }}" name="nacimiento" id="nacimiento">
                <br>
            </div>

            <div class="form-group">
                <label for="ingreso"> Ingreso </label>
                <input type="date" class="form-control" value="{{ $jugador['ingreso'] }}" name="ingreso" id="ingreso">
                <br>
            </div>

            <div class="form-group">
                <label for="email"> Email </label>
                <input type="email" class="form-control" value="{{ $jugador['email'] }}" name="email" id="email">
                <br>
            </div>

            <div class="form-group">
                <label for="nro_celular"> NRO Celular </label>
                <input type="number" class="form-control" value="{{ $jugador['nro_celular'] }}" name="nro_celular" id="nro_celular">
                <br>
            </div>

            <div class="form-group">
                <label for="direccion"> Dirección </label>
                <input type="text" class="form-control" value="{{ $jugador['direccion'] }}" name="direccion" id="direccion">
                <br>
            </div>

            <div class="form-group">
                <label for="nacionalidad"> Nacionalidad </label>
                <input type="text" class="form-control" value="{{ $jugador['nacionalidad'] }}" name="nacionalidad" id="nacionalidad">
                <br>
            </div>

            <div class="form-group">
                <label for="foto"> Foto </label>
                <input type="file" class="form-control" value="{{ $jugador['foto'] }}" name="foto" id="foto">
                <br>
            </div>

            <div class="form-group">
                <input type="submit" class="form-control" value="Guardar datos">
                <br>
            </div>
        </form>
    </div>
</body>
</html>
@endsection