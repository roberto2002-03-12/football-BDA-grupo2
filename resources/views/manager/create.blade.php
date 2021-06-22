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
            <h1>Registrar Equipo</h1>
            <br><br>

            <form action="{{ url('manager/store') }}" id="form" method="post" enctype="multipart/form-data">
                @csrf 

            <div class="form-group">
                <label for="id"> ID Manager </label>
                <input type="number" class="form-control" name="id" id="id" value="{{ old('id') }}">
                <span style="color:red"> @error('id') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="id_equipo_man"> ID Equipo de Manager </label>
                <input type="number" class="form-control" value="{{ old('id_equipo_man') }}" name="id_equipo_man" id="id_equipo_man">
                <span style="color:red"> @error('id_equipo_man') {{$message}} @enderror</span>
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
                <label for="nro_celular"> Nro Celular </label>
                <input type="number" class="form-control" value="{{ old('nro_celular') }}" name="nro_celular" id="nro_celular">
                <span style="color:red"> @error('nro_celular') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="email"> Email </label>
                <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email">
                <span style="color:red"> @error('email') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="nacimiento"> Nacimiento </label>
                <input type="date" class="form-control" value="{{ old('nacimiento') }}" name="nacimiento" id="nacimiento">
                <span style="color:red"> @error('nacimiento') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="trabajo_ingreso"> Fecha de ingreso de trabajo </label>
                <input type="number" class="form-control" value="{{ old('trabajo_ingreso') }}" name="trabajo_ingreso" id="trabajo_ingreso">
                <span style="color:red"> @error('trabajo_ingreso') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="foto"> foto </label>
                <input type="file" class="form-control" name="foto" id="foto">
                <span style="color:red"> @error('foto') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <input type="submit" class="form-control" value="Guardar datos">
                <br>
                <a href="{{ url('manager') }}" class="btn btn-info btn-block" >Atrás</a>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
@endsection