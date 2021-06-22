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
    <div class="container">
        <div id="table">
            <br><br>
            <h1>Editar Equipo</h1>
            <br><br>
            <form action="{{ url('equipo/update/'.$equipo->id) }}" id="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nombre_equi"> Nombre de Equipo </label>
                    <input type="text" class="form-control" value="{{ $equipo['nombre_equi'] }}" name="nombre_equi" id="nombre_equi">
                    <br>
                </div>

                <div class="form-group">
                    <label for="pais_equi"> País del equipo </label>
                    <input type="text" class="form-control" value="{{ $equipo['pais_equi'] }}" name="pais_equi" id="pais_equi">
                    <br>
                </div>
                
                <div class="form-group">
                    <label for="presidente_equi"> Nombre de Presidente del equipo </label>
                    <input type="text" class="form-control" value="{{ $equipo['presidente_equi'] }}" name="presidente_equi" id="presidente_equi">
                    <br>
                </div>

                <div class="form-group">
                    <label for="fundador_equi"> Nombre de Fundador del equipo </label>
                    <input type="text" class="form-control" value="{{ $equipo['fundador_equi'] }}" name="fundador_equi" id="fundador_equi">
                    <br>
                </div>

                <div class="form-group">
                    <label for="entrenador_equi"> Nombre de Entrenador del equipo </label>
                    <input type="text" class="form-control" value="{{ $equipo['entrenador_equi'] }}" name="entrenador_equi" id="entrenador_equi">
                    <br>
                </div>

                <div class="form-group">
                    <label for="fecha_fundada"> Fecha fundada </label>
                    <input type="date" class="form-control" value="{{ $equipo['fecha_fundada'] }}" name="fecha_fundada" id="fecha_fundada">
                    <br>
                </div>

                <div class="form-group">
                    <label for="manager_equi"> Nombre de Manager del equipo </label>
                    <input type="text" class="form-control" value="{{ $equipo['manager_equi'] }}" name="manager_equi" id="manager_equi">
                    <br>
                </div>

                <div class="form-group">
                    <label for="fecha_partido"> Fecha de partido </label>
                    <input type="date" class="form-control" value="{{ $equipo['fecha_partido'] }}" name="fecha_partido" id="fecha_partido">
                    <br>
                </div>

                <div class="form-group">
                    <label for="foto_equi"> Foto del equipo </label>
                    <input type="file" class="form-control" value="{{ $equipo['foto_equi'] }}" name="foto_equi" id="foto_equi">
                    <br>
                </div>

                <div class="form-group">
                    <input type="submit" class="form-control" value="Guardar datos">
                    <br>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
@endsection