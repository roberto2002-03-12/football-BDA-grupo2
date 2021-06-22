<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class JugadorController extends Controller
{
    //
    public function index() {
        $datos = Jugador::all();
        return view('jugador.index', ['jugadores' => $datos]);
    }

    public function index2() {
        $datos = Jugador::all();
        return view('jugador.indexu', ['jugadores' => $datos]);
    }

    public function create() {
        return view('jugador.create');
    }

    public function store(Request $request) {
        //validar campos
        $request->validate([
            'id'=>'required',
            'id_equipo'=>'required',
            'nombre'=>'required',
            'apellido'=>'required',
            'dni'=>'required',
            'nacimiento'=>'required',
            'ingreso'=>'required',
            'email'=>'required',
            'nro_celular'=>'required',
            'direccion'=>'required',
            'nacionalidad'=>'required',
            'foto'=>'required|mimes:jpg,png,jpeg'
        ]);

        $newImageName = time() . '-' . $request->foto->extension();
        $request->foto->move(public_path('images'), $newImageName);

        //solicitar e insertar datos    
        $query = DB::table('jugador')->insert([
            'id'=>$request->input('id'),
            'id_equipo'=>$request->input('id_equipo'),
            'nombre'=>$request->input('nombre'),
            'apellido'=>$request->input('apellido'),
            'dni'=>$request->input('dni'),
            'nacimiento'=>$request->input('nacimiento'),
            'ingreso'=>$request->input('ingreso'),
            'email'=>$request->input('email'),
            'nro_celular'=>$request->input('nro_celular'),
            'direccion'=>$request->input('direccion'),
            'nacionalidad'=>$request->input('nacionalidad'),
            'foto'=>$newImageName
        ]);

        //redireccionar una vez guardado
        return redirect('jugador');
    }

    public function destroy($id) {
        $datos = Jugador::find($id);
        $datos->delete();
        return redirect('jugador');
    }

    public function edit($id) {
        $datos = Jugador::findOrFail($id);
        return view('jugador.edit', ['jugador' => $datos]);
    }

    public function update(Request $request, $id) {
        $newImageName = time() . '-' . $request->foto_equi->extension();
        $request->foto_equi->move(public_path('images'), $newImageName);

        Jugador::findOrFail($id)->update([
            'id_equipo' => $request -> id_equipo,
            'nombre' => $request -> nombre,
            'apellido' => $request -> apellido,
            'dni' => $request -> dni,
            'nacimiento' => $request -> nacimiento,
            'ingreso' => $request -> ingreso,
            'email' => $request -> email,
            'nro_celular' => $request -> nro_celular,
            'direccion' => $request -> direccion,
            'nacionalidad' => $request -> nacionalidad,
            'foto' => $newImageName
        ]);

        return redirect('jugador');
    }
}
