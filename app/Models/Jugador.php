<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    //definir tabla
    protected $table = 'jugador';
    //primary key
    protected $primarykey = 'id';
    //campos de jugador
    protected $fillable = array('id_equipo', 'nombre', 'apellido', 'dni', 'nacimiento', 'ingreso', 'email', 'nro_celular', 'direccion', 'nacionalidad', 'foto');
}
