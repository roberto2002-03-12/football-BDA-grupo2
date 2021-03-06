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
    <b>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active"  href="{{ url('equipo') }}">Equipo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('sede') }}">Sede</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('partido') }}">Partido</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('manager') }}">Manager</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"  href="{{ url('jugador') }}">Jugador</a>
                </li>
            </ul>
        </div>
    </nav>
    </b>
    <div class="container">
        <div id="table">
            <br><br>

            <h1>Partidos</h1>

            <br><br>

            <table class="table table-info table-striped" width="80" id="tableEquipor">
            
                <thead>
                    <tr>
                        <th class="text-center">ID Partido</th>
                        <th class="text-center">ID Equipo 1</th>
                        <th class="text-center">Nombre de Equipo 1</th>
                        <th class="text-center">ID Equipo 2</th>
                        <th class="text-center">Nombre de Equipo 2</th>
                        <th class="text-center">Fecha de Partido</th>
                        <th class="text-center">ID Sede</th>
                        <th class="text-center">Nombre de Sede</th>
                        <th class="text-center">Pa??s</th>
                        <th class="text-center">Ciudad</th>
                        <th class="text-center">Resultado de Equipo 1</th>
                        <th class="text-center">Resultado de Equipo 2</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($partidos as $partido)

                    <tr>
                        <td class="text-center">{{ $partido -> id }}</td>
                        <td class="text-center">{{ $partido -> id_equipo_1 }}</td>
                        <td class="text-center">{{ $partido -> equipo_1 }}</td>
                        <td class="text-center">{{ $partido -> id_equipo_2 }}</td>
                        <td class="text-center">{{ $partido -> equipo_2 }}</td>
                        <td class="text-center">{{ $partido -> fecha_partido }}</td>
                        <td class="text-center">{{ $partido -> id_sede }}</td>
                        <td class="text-center">{{ $partido -> nombre_sede }}</td>
                        <td class="text-center">{{ $partido -> pais }}</td>
                        <td class="text-center">{{ $partido -> ciudad }}</td>
                        <td class="text-center">{{ $partido -> resultado_equipo1 }}</td>
                        <td class="text-center">{{ $partido -> resultado_equipo2 }}</td>

                        <td>
                            <button class="btn btn-warning">
                                <a href="{{url('partido/'.$partido->id.'/edit')}}">Editar</a>
                            </button>

                            <button class="btn btn-warning">
                                <a href="{{url('partido/'.$partido->id)}}">Borrar</a>
                            </button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-primary" type="button" id="button"> <a href="{{url('partido/create')}}" style="color:white"> Crear Partido </a></button>
        </div>
    </div>
</body>
</html>
@endsection