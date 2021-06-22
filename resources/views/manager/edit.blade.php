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
        <h1>Editar Manager</h1>
        <br><br>
        <form action="{{ url('manager/update/'.$manager->id) }}" id="form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="id_equipo_man"> ID Equipo </label>
                <input type="number" class="form-control" value="{{ $manager['id_equipo_man'] }}" name="id_equipo_man" id="id_equipo_man">
                <br>
            </div>

            <div class="form-group">
                <label for="nombre"> Nombre </label>
                <input type="text" class="form-control" value="{{ $manager['nombre'] }}" name="nombre" id="nombre">
                <br>
            </div>
            
            <div class="form-group">
                <label for="apellido"> Apellido </label>
                <input type="text" class="form-control" value="{{ $manager['apellido'] }}" name="apellido" id="apellido">
                <br>
            </div>

            <div class="form-group">
                <label for="dni"> DNI </label>
                <input type="number" class="form-control" value="{{ $manager['dni'] }}" name="dni" id="dni">
                <br>
            </div>

            <div class="form-group">
                <label for="nro_celular"> Número de Celular </label>
                <input type="date" class="form-control" value="{{ $manager['nro_celular'] }}" name="nro_celular" id="nro_celular">
                <br>
            </div>

            <div class="form-group">
                <label for="email"> Email </label>
                <input type="email" class="form-control" value="{{ $manager['email'] }}" name="email" id="email">
                <br>
            </div>

            <div class="form-group">
                <label for="nacimiento"> Nacimiento </label>
                <input type="date" class="form-control" value="{{ $manager['nacimiento'] }}" name="nacimiento" id="nacimiento">
                <br>
            </div>

            <div class="form-group">
                <label for="trabajo_ingreso"> NRO Celular </label>
                <input type="date" class="form-control" value="{{ $manager['trabajo_ingreso'] }}" name="trabajo_ingreso" id="trabajo_ingreso">
                <br>
            </div>

            <div class="form-group">
                <label for="foto"> Foto </label>
                <input type="file" class="form-control" value="{{ $manager['foto'] }}" name="foto" id="foto">
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