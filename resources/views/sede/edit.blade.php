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
        <h1>Editar Sede</h1>
        <br><br>
        <form action="{{ url('sede/update/'.$sede->id) }}" id="form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre"> Nombre </label>
                <input type="text" class="form-control" value="{{ $sede['nombre'] }}" name="nombre" id="nombre">
                <br>
            </div>

            <div class="form-group">
                <label for="direccion"> Dirección </label>
                <input type="text" class="form-control" value="{{ $sede['direccion'] }}" name="direccion" id="direccion">
                <br>
            </div>
            
            <div class="form-group">
                <label for="ancho_estadio"> Ancho de estadio </label>
                <input type="number" class="form-control" value="{{ $sede['ancho_estadio'] }}" name="ancho_estadio" id="ancho_estadio">
                <br>
            </div>

            <div class="form-group">
                <label for="altura_estadio"> Altura de estadio </label>
                <input type="number" class="form-control" value="{{ $sede['altura_estadio'] }}" name="altura_estadio" id="altura_estadio">
                <br>
            </div>

            <div class="form-group">
                <label for="largo_estadio"> Largo de estadio </label>
                <input type="number" class="form-control" value="{{ $sede['largo_estadio'] }}" name="largo_estadio" id="largo_estadio">
                <br>
            </div>

            <div class="form-group">
                <label for="ancho_patio"> Ancho de patio </label>
                <input type="number" class="form-control" value="{{ $sede['ancho_patio'] }}" name="ancho_patio" id="ancho_patio">
                <br>
            </div>

            <div class="form-group">
                <label for="largo_patio"> Largo de patio </label>
                <input type="number" class="form-control" value="{{ $sede['largo_patio'] }}" name="largo_patio" id="largo_patio">
                <br>
            </div>

            <div class="form-group">
                <label for="foro_max"> Foro máximo </label>
                <input type="number" class="form-control" value="{{ $sede['foro_max'] }}" name="foro_max" id="foro_max">
                <br>
            </div>

            <div class="form-group">
                <label for="foto"> Foto </label>
                <input type="file" class="form-control" value="{{ $sede['foto'] }}" name="foto" id="foto">
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