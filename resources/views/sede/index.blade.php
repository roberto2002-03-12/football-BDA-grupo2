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
                    <a class="nav-link" aria-current="page" href="{{ url('sede') }}">Sede</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('partido') }}">Partido</a>
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

            <h1>Sedes</h1>

            <br><br>

            <table class="table table-info table-striped" width="80" id="tableEquipor">
            
                <thead>
                    <tr>
                        <th class="text-center">ID Sede</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Dirección</th>
                        <th class="text-center">Ancho de estadio M.</th>
                        <th class="text-center">Altura de estadio M.</th>
                        <th class="text-center">Largo de estadio M.</th>
                        <th class="text-center">Ancho del patio</th>
                        <th class="text-center">Largo del patio</th>
                        <th class="text-center">Foro Max</th>
                        <th class="text-center">Foto</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($sedes as $sede)

                    <tr>
                        <td class="text-center">{{ $sede -> id }}</td>
                        <td class="text-center">{{ $sede -> nombre }}</td>
                        <td class="text-center">{{ $sede -> direccion }}</td>
                        <td class="text-center">{{ $sede -> ancho_estadio }}</td>
                        <td class="text-center">{{ $sede -> altura_estadio }}</td>
                        <td class="text-center">{{ $sede -> largo_estadio }}</td>
                        <td class="text-center">{{ $sede -> ancho_patio }}</td>
                        <td class="text-center">{{ $sede -> largo_patio }}</td>
                        <td class="text-center">{{ $sede -> foro_max }}</td>
                        <td class="text-center"><img src="{{ asset('images/'.$sede->foto) }}" alt="" width="75" height="75"></td>

                        <td>
                            <button class="btn btn-warning">
                                <a href="{{url('sede/'.$sede->id.'/edit')}}">Editar</a>
                            </button>

                            <button class="btn btn-warning">
                                <a href="{{url('sede/'.$sede->id)}}">Borrar</a>
                            </button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-primary" type="button" id="button"> <a href="{{url('sede/create')}}" style="color:white"> Crear Equipo </a></button>
        </div>
    </div>
</body>
</html>
@endsection