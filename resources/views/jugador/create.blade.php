@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div id="table">
            <br><br>
            <h1>Registrar Jugador</h1>
            <br><br>

            <form action="{{ url('jugador/store') }}" id="form" method="post" enctype="multipart/form-data">
                @csrf 

            <div class="form-group">
                <label for="id"> ID Jugador </label>
                <input type="number" class="form-control" name="id" id="id" value="{{ old('id') }}">
                <span style="color:red"> @error('id') {{$message}} @enderror</span>
                <br>
            </div>


            <div class="form-group">
            <label for="id_equipo"> ID Equipo </label>
                <input type="number" class="form-control" value="{{ old('id_equipo') }}" name="id_equipo" id="id_equipo">
                <span style="color:red"> @error('id_equipo') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="nombre"> Nombre </label>
                <input type="text" class="form-control" value="{{ old('nombre') }}" name="nombre" id="nombre">
                <span style="color:red"> @error('nombre') {{$message}} @enderror</span>
                <br>
            </div>
            
            <div class="form-group">
                <label for="apellido"> Apellido </label>
                <input type="text" class="form-control" value="{{ old('apellido') }}" name="apellido" id="apellido">
                <span style="color:red"> @error('apellido') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="dni"> DNI </label>
                <input type="number" class="form-control" value="{{ old('dni') }}" name="dni" id="dni">
                <span style="color:red"> @error('dni') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="nacimiento"> Nacimiento </label>
                <input type="date" class="form-control" value="{{ old('nacimiento') }}" name="nacimiento" id="nacimiento">
                <span style="color:red"> @error('nacimiento') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="ingreso"> Ingreso </label>
                <input type="date" class="form-control" value="{{ old('ingreso') }}" name="ingreso" id="ingreso">
                <span style="color:red"> @error('ingreso') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="email"> Email </label>
                <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email">
                <span style="color:red"> @error('email') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="nro_celular"> NRO Celular </label>
                <input type="number" class="form-control" value="{{ old('nro_celular') }}" name="nro_celular" id="nro_celular">
                <span style="color:red"> @error('nro_celular') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="direccion"> Dirección </label>
                <input type="text" class="form-control" value="{{ old('direccion') }}" name="direccion" id="direccion">
                <span style="color:red"> @error('direccion') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="nacionalidad"> Nacionalidad </label>
                <input type="text" class="form-control" value="{{ old('nacionalidad') }}" name="nacionalidad" id="nacionalidad">
                <span style="color:red"> @error('nacionalidad') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="foto"> Foto </label>
                <input type="file" class="form-control" value="{{ old('foto') }}" name="foto" id="foto">
                <span style="color:red"> @error('foto') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <input type="submit" class="form-control" value="Guardar datos">
                <br>
                <a href="{{ url('jugador') }}" class="btn btn-info btn-block" >Atrás</a>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
@endsection