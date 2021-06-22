<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    //definir tabla
    protected $table = 'partido';
    //primary key
    protected $primarykey = 'id';
    //campos de partido
    protected $fillable = array('id_equipo_1', 'equipo_1', 'id_equipo_2', 'equipo_2', 'fecha_partido', 'id_sede', 'nombre_sede', 'pais', 'ciudad', 'resultado_equipo1', 'resultado_equipo2');
}
