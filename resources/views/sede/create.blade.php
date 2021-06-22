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

            <form action="{{ url('sede/store') }}" id="form" method="post" enctype="multipart/form-data">
                @csrf 

            <div class="form-group">
                <label for="id"> ID Sede </label>
                <input type="number" class="form-control" value="{{ old('id') }}" name="id" id="id">
                <span style="color:red"> @error('id') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="nombre"> Nombre </label>
                <input type="text" class="form-control" value="{{ old('nombre') }}" name="nombre" id="nombre">
                <span style="color:red"> @error('nombre') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="direccion"> Dirección </label>
                <input type="text" class="form-control" value="{{ old('direccion') }}" name="direccion" id="direccion">
                <span style="color:red"> @error('direccion') {{$message}} @enderror</span>
                <br>
            </div>
            
            <div class="form-group">
                <label for="ancho_estadio"> Ancho de estadio </label>
                <input type="number" class="form-control" value="{{ old('ancho_estadio') }}" name="ancho_estadio" id="ancho_estadio">
                <span style="color:red"> @error('ancho_estadio') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="altura_estadio"> Altura de estadio </label>
                <input type="number" class="form-control" value="{{ old('altura_estadio') }}" name="altura_estadio" id="altura_estadio">
                <span style="color:red"> @error('altura_estadio') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="largo_estadio"> Largo de estadio </label>
                <input type="number" class="form-control" value="{{ old('largo_estadio') }}" name="largo_estadio" id="largo_estadio">
                <span style="color:red"> @error('largo_estadio') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="ancho_patio"> Ancho de patio </label>
                <input type="number" class="form-control" value="{{ old('ancho_patio') }}" name="ancho_patio" id="ancho_patio">
                <span style="color:red"> @error('ancho_patio') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="largo_patio"> Largo de patio </label>
                <input type="number" class="form-control" value="{{ old('largo_patio') }}" name="largo_patio" id="largo_patio">
                <span style="color:red"> @error('largo_patio') {{$message}} @enderror</span>
                <br>
            </div>

            <div class="form-group">
                <label for="foro_max"> Foro máximo </label>
                <input type="number" class="form-control" value="{{ old('foro_max') }}" name="foro_max" id="foro_max">
                <span style="color:red"> @error('foro_max') {{$message}} @enderror</span>
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
                <a href="{{ url('sede') }}" class="btn btn-info btn-block" >Atrás</a>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
@endsection