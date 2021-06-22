<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ManagerController extends Controller
{
    //

    public function index() {
        $datos = Manager::all();
        return view('manager.index', ['managers' => $datos]);
    }

    public function create() {
        return view('manager.create');
    }

    public function store(Request $request) {
        //validar campos
        $request->validate([
            'id'=>'required',
            'id_equipo_man'=>'required',
            'nombre'=>'required',
            'apellido'=>'required',
            'dni'=>'required',
            'nro_celular'=>'required',
            'email'=>'required',
            'nacimiento'=>'required',
            'trabajo_ingreso'=>'required',
            'foto'=>'required|mimes:jpg,png,jpeg'
        ]);

        $newImageName = time() . '-' . $request->foto->extension();
        $request->foto->move(public_path('images'), $newImageName);

        //solicitar e insertar datos
        $query = DB::table('manager')->insert([
            'id'=>$request->input('id'),
            'id_equipo_man'=>$request->input('id_equipo_man'),
            'nombre'=>$request->input('nombre'),
            'apellido'=>$request->input('apellido'),
            'dni'=>$request->input('dni'),
            'nro_celular'=>$request->input('nro_celular'),
            'ingreso'=>$request->input('ingreso'),
            'email'=>$request->input('email'),
            'nacimiento'=>$request->input('nacimiento'),
            'trabajo_ingreso'=>$request->input('trabajo_ingreso'),
            'foto'=>$newImageName
        ]);

        //redireccionar una vez guardado
        return redirect('manager');
    }

    public function destroy($id) {
        $datos = Manager::find($id);
        $datos->delete();
        return redirect('manager');
    }

    public function edit($id) {
        $datos = Manager::findOrFail($id);
        return view('manager.edit', ['manager' => $datos]);
    }

    public function update(Request $request, $id) {

        $newImageName = time() . '-' . $request->foto_equi->extension();
        $request->foto_equi->move(public_path('images'), $newImageName);

        Manager::findOrFail($id)->update([
            'id_equipo_man' => $request -> id_equipo_man,
            'nombre' => $request -> nombre,
            'apellido' => $request -> apellido,
            'dni' => $request -> dni,
            'nro_celular' => $request -> nro_celular,
            'ingreso' => $request -> ingreso,
            'email' => $request -> email,
            'nacimiento' => $request -> nacimiento,
            'trabajo_ingreso' => $request -> trabajo_ingreso,
            'foto' => $newImageName
        ]);

        return redirect('manager');
    }
}
