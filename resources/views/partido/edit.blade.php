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
            <h1>Editar Jugador</h1>
            <br><br>
            <form action="{{ url('partido/update/'.$partido->id) }}" id="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="id_equipo_1"> ID Equipo 1< </label>
                    <input type="number" class="form-control" value="{{ $partido['id_equipo_1'] }}" name="id_equipo_1" id="id_equipo_1">
                    <br>
                </div>

                <div class="form-group">
                    <label for="equipo_1"> Nombre de Equipo 1 </label>
                    <input type="text" class="form-control" value="{{ $partido['equipo_1'] }}" name="equipo_1" id="equipo_1">
                    <br>
                </div>
                
                <div class="form-group">
                    <label for="id_equipo_2"> ID Equipo 2 </label>
                    <input type="number" class="form-control" value="{{ $partido['id_equipo_2'] }}" name="id_equipo_2" id="id_equipo_2">
                    <br>
                </div>

                <div class="form-group">
                    <label for="equipo_2"> Nombre de Equipo 2 </label>
                    <input type="text" class="form-control" value="{{ $partido['equipo_2'] }}" name="equipo_2" id="equipo_2">
                    <br>
                </div>

                <div class="form-group">
                    <label for="fecha_partido"> Fecha de Partido </label>
                    <input type="date" class="form-control" value="{{ $partido['fecha_partido'] }}" name="fecha_partido" id="fecha_partido">
                    <br>
                </div>

                <div class="form-group">
                    <label for="id_sede"> ID Sede </label>
                    <input type="number" class="form-control" value="{{ $partido['id_sede'] }}" name="id_sede" id="id_sede">
                    <br>
                </div>

                <div class="form-group">
                    <label for="nombre_sede"> Nombre de Sede </label>
                    <input type="text" class="form-control" value="{{ $partido['nombre_sede'] }}" name="nombre_sede" id="nombre_sede">
                    <br>
                </div>

                <div class="form-group">
                    <label for="pais"> País </label>
                    <input type="text" class="form-control" value="{{ $partido['pais'] }}" name="pais" id="pais">
                    <br>
                </div>

                <div class="form-group">
                    <label for="ciudad"> Ciudad </label>
                    <input type="text" class="form-control" value="{{ $partido['ciudad'] }}" name="ciudad" id="ciudad">
                    <br>
                </div>

                <div class="form-group">
                    <label for="resultado_equipo1"> Resultado de Equipo 1 </label>
                    <input type="number" class="form-control" value="{{ $partido['resultado_equipo1'] }}" name="resultado_equipo1" id="resultado_equipo1">
                    <br>
                </div>

                <div class="form-group">
                    <label for="resultado_equipo2"> Resultado de Equipo 2 </label>
                    <input type="number" class="form-control" value="{{ $partido['resultado_equipo2'] }}" name="resultado_equipo2" id="resultado_equipo2">
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