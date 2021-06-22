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

            <form action="{{ url('equipo/store') }}" id="form" method="post" enctype="multipart/form-data">
                @csrf 

            <div class="form-group">
                <label for="id"> ID Equipo </label>
                <input type="number" class="form-control" name="id" id="id" value="{{ old('id') }}">
                <span style="color:red"> @error('id') {{$message}} @enderror</span>
                <br>
            </div>


            <div class="form-group">
                <label for="nombre_equi"> Nombre de Equipo </label>
                <input type="text" class="form-control" value="{{ old('nombre_equi') }}" name="nombre_equi" id="nombre_equi">
                <span style="color:red"> @error('nombre_equi') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="pais_equi"> País del equipo </label>
                <input type="text" class="form-control" value="{{ old('pais_equi') }}" name="pais_equi" id="pais_equi">
                <span style="color:red"> @error('pais_equi') {{$message}} @enderror</span>
                <br>
            </div>
            
            <div class="form-group">
                <label for="presidente_equi"> Nombre de Presidente del equipo </label>
                <input type="text" class="form-control" value="{{ old('presidente_equi') }}" name="presidente_equi" id="presidente_equi">
                <span style="color:red"> @error('presidente_equi') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="fundador_equi"> Nombre de Fundador del equipo </label>
                <input type="text" class="form-control" value="{{ old('fundador_equi') }}" name="fundador_equi" id="fundador_equi">
                <span style="color:red"> @error('fundador_equi') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="entrenador_equi"> Nombre de Entrenador del equipo </label>
                <input type="text" class="form-control" value="{{ old('entrenador_equi') }}" name="entrenador_equi" id="entrenador_equi">
                <span style="color:red"> @error('entrenador_equi') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="fecha_fundada"> Fecha fundada </label>
                <input type="date" class="form-control" value="{{ old('fecha_fundada') }}" name="fecha_fundada" id="fecha_fundada">
                <span style="color:red"> @error('fecha_fundada') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="manager_equi"> Nombre de Manager del equipo </label>
                <input type="text" class="form-control" value="{{ old('manager_equi') }}" name="manager_equi" id="manager_equi">
                <span style="color:red"> @error('manager_equi') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="fecha_partido"> Fecha de partido </label>
                <input type="date" class="form-control" value="{{ old('fecha_partido') }}" name="fecha_partido" id="fecha_partido">
                <span style="color:red"> @error('fecha_partido') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="foto_equi"> Foto del equipo </label>
                <input type="file" class="form-control" name="foto_equi" id="foto_equi">
                <span style="color:red"> @error('foto_equi') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <input type="submit" class="form-control" value="Guardar datos">
                <br>
                <a href="{{ url('equipo') }}" class="btn btn-info btn-block" >Atrás</a>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
@endsection