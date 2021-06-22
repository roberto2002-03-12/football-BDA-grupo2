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
                    <a class="nav-link active" href="{{ url('partido') }}">Partido</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('manager') }}">Manager</a>
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

            <h1>Managers</h1>

            <br><br>

            <table class="table table-info table-striped" width="80" id="tableManager">
            
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">ID Equipo de Manager</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido</th>
                        <th class="text-center">DNI</th>
                        <th class="text-center">Número de celular</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Nacimiento</th>
                        <th class="text-center">Ingreso</th>
                        <th class="text-center">Foto</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($managers as $manager)

                    <tr>
                        <td class="text-center">{{ $manager -> id }}</td>
                        <td class="text-center">{{ $manager -> id_equipo_man }}</td>
                        <td class="text-center">{{ $manager -> nombre }}</td>
                        <td class="text-center">{{ $manager -> apellido }}</td>
                        <td class="text-center">{{ $manager -> dni }}</td>
                        <td class="text-center">{{ $manager -> nro_celular }}</td>
                        <td class="text-center">{{ $manager -> email }}</td>
                        <td class="text-center">{{ $manager -> nacimiento }}</td>
                        <td class="text-center">{{ $manager -> trabajo_ingreso }}</td>
                        <td class="text-center"><img src="{{ asset('images/'.$manager->foto) }}" alt="" width="75" height="75"></td>

                        <td>
                            <button class="btn btn-warning">
                                <a href="{{url('manager/'.$manager->id.'/edit')}}">Editar</a>
                            </button>

                            <button class="btn btn-warning">
                                <a href="{{url('manager/'.$manager->id)}}">Borrar</a>
                            </button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-primary" type="button" id="button"> <a href="{{url('manager/create')}}" style="color:white"> Registrar manager </a></button>
        </div>
    </div>
</body>
</html>
@endsection