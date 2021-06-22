<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\SedeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'getUser']);

Route::get('equipo', [EquipoController::class, 'index']);
Route::get('equipo/create', [EquipoController::class, 'create']);
Route::post('equipo/store', [EquipoController::class, 'store']);
Route::get('equipo/{id}', [EquipoController::class, 'destroy']);
Route::get('equipo/{id}/edit', [EquipoController::class, 'edit']);
Route::post('equipo/update/{id}', [EquipoController::class, 'update']);

//Rutas para sede
Route::get('sede', [SedeController::class, 'index']);
Route::get('sede/create', [SedeController::class, 'create']);
Route::post('sede/store', [SedeController::class, 'store']);
Route::get('sede/{id}', [SedeController::class, 'destroy']);
Route::get('sede/{id}/edit', [SedeController::class, 'edit']);
Route::post('sede/update/{id}', [SedeController::class, 'update']);

//rutas para partido
Route::get('partido', [PartidoController::class, 'index']);
Route::get('partidou', [PartidoController::class, 'index2']);
Route::get('partidou2', [PartidoController::class, 'index3']);
Route::get('partido/create', [PartidoController::class, 'create']);
Route::post('partido/store', [PartidoController::class, 'store']);
Route::get('partido/{id}', [PartidoController::class, 'destroy']);
Route::get('partido/{id}/edit', [PartidoController::class, 'edit']);
Route::post('partido/update/{id}', [PartidoController::class, 'update']);

//rutas para manager
Route::get('manager', [ManagerController::class, 'index']);
Route::get('manager/create', [ManagerController::class, 'create']);
Route::post('manager/store', [ManagerController::class, 'store']);
Route::get('manager/{id}', [ManagerController::class, 'destroy']);
Route::get('manager/{id}/edit', [ManagerController::class, 'edit']);
Route::post('manager/update/{id}', [ManagerController::class, 'update']);

//rutas para jugador
Route::get('jugador', [JugadorController::class, 'index']);
Route::get('jugadoru', [JugadorController::class, 'index2']);
Route::get('jugador/create', [JugadorController::class, 'create']);
Route::post('jugador/store', [JugadorController::class, 'store']);
Route::get('jugador/{id}', [JugadorController::class, 'destroy']);
Route::get('jugador/{id}/edit', [JugadorController::class, 'edit']);
Route::post('jugador/update/{id}', [JugadorController::class, 'update']);

//ruta de busqueda
Route::get('equipo/search/nombre_equipo', [EquipoController::class, 'search']);
Route::get('equipo/search/id', [EquipoController::class, 'search2']);
Route::get('sede/search/sede_nombre', [SedeController::class, 'search']);
Route::get('sede/search/id', [SedeController::class, 'search2']);
Route::get('partido/search/partido_nombre', [PartidoController::class, 'search']);
Route::get('partido/search/id', [PartidoController::class, 'search2']);
Route::get('manager/search/manager_nombre', [ManagerController::class, 'search']);
Route::get('manager/search/id', [ManagerController::class, 'search2']);
Route::get('jugador/search/jugador_nombre', [JugadorController::class, 'search']);
Route::get('jugador/search/id', [JugadorController::class, 'search2']);