<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    //definir tabla
    protected $table = 'sede';
    //primary key
    protected $primarykey = 'id';
    //campos de sede
    protected $fillable = array('nombre', 'direccion', 'ancho_estadio', 'altura_estadio', 'largo_estadio', 'ancho_patio', 'largo_patio', 'foro_max', 'foto');
}
