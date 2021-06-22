<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PartidoController extends Controller
{
    //

    public function index() {
        $datos = Partido::all();
        return view('partido.index', ['partidos' => $datos]);
    }

    public function index2() {
        $datos = Partido::all();
        return view('partido.indexu', ['partidos' => $datos]);
    }

    public function index3() {
        $datos = Partido::all();
        return view('partido.indexu2', ['partidos' => $datos]);
    }

    public function create() {
        return view('partido.create');
    }

    public function store(Request $request) {
        //validar campos
        $request->validate([
            'id'=>'required',
            'id_equipo_1'=>'required',
            'equipo_1'=>'required',
            'id_equipo_2'=>'required',
            'equipo_2'=>'required',
            'fecha_partido'=>'required',
            'id_sede'=>'required',
            'nombre_sede'=>'required',
            'pais'=>'required',
            'ciudad'=>'required',
            'resultado_equipo1'=>'required',
            'resultado_equipo2'=>'required'
        ]);

        //solicitar e insertar datos
        $query = DB::table('partido')->insert([
            'id'=>$request->input('id'),
            'id_equipo_1'=>$request->input('id_equipo_1'),
            'equipo_1'=>$request->input('equipo_1'),
            'id_equipo_2'=>$request->input('id_equipo_2'),
            'equipo_2'=>$request->input('equipo_2'),
            'fecha_partido'=>$request->input('fecha_partido'),
            'id_sede'=>$request->input('id_sede'),
            'nombre_sede'=>$request->input('nombre_sede'),
            'pais'=>$request->input('pais'),
            'ciudad'=>$request->input('ciudad'),
            'resultado_equipo1'=>$request->input('resultado_equipo1'),
            'resultado_equipo2'=>$request->input('resultado_equipo2')
        ]);

        //redireccionar una vez guardado
        return redirect('partido');
    }

    public function destroy($id) {
        $datos = Partido::find($id);
        $datos->delete();
        return redirect('partido');
    }

    public function edit($id) {
        $datos = Partido::findOrFail($id);
        return view('partido.edit', ['partido' => $datos]);
    }

    public function update(Request $request, $id) {
        Partido::findOrFail($id)->update([
            'id_equipo_1' => $request -> id_equipo_1,
            'equipo_1' => $request -> equipo_1,
            'id_equipo_2' => $request -> id_equipo_2,
            'equipo_2' => $request -> equipo_2,
            'fecha_partido' => $request -> fecha_partido,
            'id_sede' => $request -> id_sede,
            'nombre_sede' => $request -> nombre_sede,
            'pais' => $request -> pais,
            'ciudad' => $request -> ciudad,
            'resultado_equipo1' => $request -> resultado_equipo1,
            'resultado_equipo2' => $request -> resultado_equipo2
        ]);

        return redirect('partido');
    }
}
