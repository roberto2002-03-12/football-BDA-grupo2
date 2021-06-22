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
                    <a class="nav-link" aria-current="page" href="{{ url('equipo') }}">Equipo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('sede') }}">Sede</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('partido') }}">Partido</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('manager') }}">Manager</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('jugador') }}">Jugador</a>
                </li>
            </ul>
        </div>
    </nav>
    </b>
    <div class="container">
        <br><br>
        <div id="table">
            <br><br>

            <h1>Equipos</h1>

            <br><br>

            <table class="table table-info table-striped" width="80" id="tableEquipor">
            
                <thead>
                    <tr>
                        <th class="text-center">ID Equipo</th>
                        <th class="text-center">Nombre equipo</th>
                        <th class="text-center">País equipo</th>
                        <th class="text-center">Presidente del equipo</th>
                        <th class="text-center">Fundador del equipo</th>
                        <th class="text-center">Entrenador del equipo</th>
                        <th class="text-center">Fecha fundada</th>
                        <th class="text-center">Manager del equipo</th>
                        <th class="text-center">Fecha del partido</th>
                        <th class="text-center">Foto del partido</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($equipos as $equipo)

                    <tr>
                        <td class="text-center">{{ $equipo -> id }}</td>
                        <td class="text-center">{{ $equipo -> nombre_equi }}</td>
                        <td class="text-center">{{ $equipo -> pais_equi }}</td>
                        <td class="text-center">{{ $equipo -> presidente_equi }}</td>
                        <td class="text-center">{{ $equipo -> fundador_equi }}</td>
                        <td class="text-center">{{ $equipo -> entrenador_equi }}</td>
                        <td class="text-center">{{ $equipo -> fecha_fundada }}</td>
                        <td class="text-center">{{ $equipo -> manager_equi }}</td>
                        <td class="text-center">{{ $equipo -> fecha_partido }}</td>
                        <td class="text-center"><img src="{{ asset('images/'.$equipo->foto_equi) }}" alt="" width="75" height="75"></td>

                        <td>
                            <button class="btn btn-warning">
                                <a href="{{url('equipo/'.$equipo->id.'/edit')}}">Editar</a>
                            </button>

                            <button class="btn btn-warning">
                                <a href="{{url('equipo/'.$equipo->id)}}">Borrar</a>
                            </button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-primary" type="button" id="button"> <a href="{{url('equipo/create')}}" style="color:white"> Crear Equipo </a></button>
        </div>
    </div>
</body>
</html>
@endsection