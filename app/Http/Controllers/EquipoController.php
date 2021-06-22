<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class EquipoController extends Controller
{
    //

    public function index() {
        $datos = Equipo::all();
        return view('equipo.index', ['equipos' => $datos]);
    }

    public function index2() {
        $datos = Equipo::all();
        return view('equipo.indexu', ['equipos' => $datos]);
    }

    public function create() {
        return view('equipo.create');
    }

    public function store(Request $request) {
        //validar campos
        $request->validate([
            'id'=>'required',
            'nombre_equi'=>'required',
            'pais_equi'=>'required',
            'presidente_equi'=>'required',
            'fundador_equi'=>'required',
            'entrenador_equi'=>'required',
            'fecha_fundada'=>'required',
            'manager_equi'=>'required',
            'fecha_partido'=>'required',
            'foto_equi'=>'required|mimes:jpg,png,jpeg'
        ]);

        $newImageName = time() . '-' . $request->foto_equi->extension();
        $request->foto_equi->move(public_path('images'), $newImageName);


        //solicitar e insertar datos
        $query = DB::table('equipo')->insert([
            'id'=>$request->input('id'),
            'nombre_equi'=>$request->input('nombre_equi'),
            'pais_equi'=>$request->input('pais_equi'),
            'presidente_equi'=>$request->input('presidente_equi'),
            'fundador_equi'=>$request->input('fundador_equi'),
            'entrenador_equi'=>$request->input('entrenador_equi'),
            'fecha_fundada'=>$request->input('fecha_fundada'),
            'manager_equi'=>$request->input('manager_equi'),
            'fecha_partido'=>$request->input('fecha_partido'),
            'foto_equi'=>$newImageName
        ]);
        //redireccionar una vez guardado
        return redirect('equipo');
    }

    public function destroy($id) {
        $datos = Equipo::find($id);
        $datos->delete();
        return redirect('equipo');
    }

    public function edit($id) {
        $datos = Equipo::findOrFail($id);
        return view('equipo.edit', ['equipo' => $datos]);
    }

    public function update(Request $request, $id) {
        $newImageName = time() . '-' . $request->foto_equi->extension();
        $request->foto_equi->move(public_path('images'), $newImageName);

        Equipo::findOrFail($id)->update([
            'nombre_equi' => $request -> nombre_equi,
            'pais_equi' => $request -> pais_equi,
            'presidente_equi' => $request -> presidente_equi,
            'fundador_equi' => $request -> fundador_equi,
            'entrenador_equi' => $request -> entrenador_equi,
            'fecha_fundada' => $request -> fecha_fundada,
            'manager_equi' => $request -> manager_equi,
            'fecha_partido' => $request -> fecha_partido,
            'foto_equi' => $newImageName
        ]);

        return redirect('equipo');
    }
}