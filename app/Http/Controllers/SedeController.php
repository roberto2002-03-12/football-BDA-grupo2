<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sede;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SedeController extends Controller
{
    //

    public function index() {
        $datos = Sede::all();
        return view('sede.index', ['sedes' => $datos]);
    }

    public function index2() {
        $datos = Sede::all();
        return view('sede.indexu', ['sedes' => $datos]);
    }

    public function create() {
        return view('sede.create');
    }

    public function store(Request $request) {
        //validar campos
        $request->validate([
            'id'=>'required',
            'nombre'=>'required',
            'direccion'=>'required',
            'ancho_estadio'=>'required',
            'altura_estadio'=>'required',
            'largo_estadio'=>'required',
            'ancho_patio'=>'required',
            'largo_patio'=>'required',
            'foro_max'=>'required',
            'foto'=>'required|mimes:jpg,png,jpeg'
        ]);

        $newImageName = time() . '-' . $request->foto->extension();
        $request->foto->move(public_path('images'), $newImageName);

        //solicitar e insertar datos
        $query = DB::table('sede')->insert([
            'id'=>$request->input('id'),
            'nombre'=>$request->input('nombre'),
            'direccion'=>$request->input('direccion'),
            'ancho_estadio'=>$request->input('ancho_estadio'),
            'altura_estadio'=>$request->input('altura_estadio'),
            'largo_estadio'=>$request->input('largo_estadio'),
            'ancho_patio'=>$request->input('ancho_patio'),
            'largo_patio'=>$request->input('largo_patio'),
            'foro_max'=>$request->input('foro_max'),
            'foto'=>$newImageName
        ]);

        //redireccionar una vez guardado
        return redirect('sede');
    }

    public function destroy($id) {
        $datos = Sede::find($id);
        $datos->delete();
        return redirect('sede');
    }

    public function edit($id) {
        $datos = Sede::findOrFail($id);
        return view('sede.edit', ['sede' => $datos]);
    }

    public function update(Request $request, $id) {
        $newImageName = time() . '-' . $request->foto_equi->extension();
        $request->foto_equi->move(public_path('images'), $newImageName);

        Sede::findOrFail($id)->update([
            'nombre' => $request -> nombre,
            'direccion' => $request -> direccion,
            'ancho_estadio' => $request -> ancho_estadio,
            'altura_estadio' => $request -> altura_estadio,
            'largo_estadio' => $request -> largo_estadio,
            'ancho_patio' => $request -> ancho_patio,
            'largo_patio' => $request -> largo_patio,
            'foro_max' => $request -> foro_max,
            'foto' => $newImageName
        ]);

        return redirect('sede');
    }
}