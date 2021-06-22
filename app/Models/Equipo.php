<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    //definir tabla
    protected $table = 'equipo';
    //primary key
    protected $primarykey = 'id';
    //campos de equipo
    protected $fillable = array('nombre_equi', 'pais_equi', 'presidente_equi', 'fundador_equi', 'entrenador_equi', 'fecha_fundada', 'manager_equi', 'fecha_partido', 'pais_equi', 'foto_equi');
}
