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
                    <a class="nav-link active"  href="{{ url('partidou') }}">Partido</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('partidou2') }}">Resultados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('jugadoru') }}">Jugadores</a>
                </li>
            </ul>
        </div>
    </nav>
    </b>
    <div class="container">
        <div id="table">
            <br><br>

            <h1>Jugadores</h1>

            <br><br>

            <table class="table table-info table-striped" width="80" id="tableEquipor">
            
                <thead>
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido</th>
                        <th class="text-center">Nacionalidad</th>
                        <th class="text-center">Foto de jugador</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($jugadores as $jugador)

                    <tr>
                        <td class="text-center">{{ $jugador -> nombre }}</td>
                        <td class="text-center">{{ $jugador -> apellido }}</td>
                        <td class="text-center">{{ $jugador -> nacionalidad }}</td>
                        <td class="text-center"><img src="{{ asset('images/'.$jugador->foto) }}" alt="" width="75" height="75"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
@endsection