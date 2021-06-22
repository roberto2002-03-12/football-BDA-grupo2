<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    
    //definir tabla
    protected $table = 'manager';
    //primary key
    protected $primarykey = 'id';
    //campos de manager
    protected $fillable = array('id_equipo_man', 'nombre', 'apellido', 'dni', 'nro_celular', 'email', 'nacimiento', 'trabajo_ingreso', 'foto');
}
