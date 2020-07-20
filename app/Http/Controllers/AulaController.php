<?php

namespace SisEscolar\Http\Controllers;

use SisEscolar\Aula;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;
use Redirect;
use SisEscolar\Http\Requests;
use SisEscolar\Http\Requests\LoginRequest;
use SisEscolar\Http\Controllers\Controller;
use SisEscolar\Profesor;
use SisEscolar\Escuela;
use DB;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aulas = Aula::All();
        return view('aulas.index',['aulas'=>$aulas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $profesores = Profesor::selectRaw('id, CONCAT(nombre," ",apellidos) as full_name')->pluck('full_name', 'id');
        return view('aulas.create',['profesores'=>$profesores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aula::create($request->all());

        Session::flash('message','Haz agreado una nueva aula satisfactoriamente');
        return redirect::to('/aulas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \SisEscolar\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function show(Aula $aula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SisEscolar\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aula = Aula::find($id);
        $profesores = Profesor::selectRaw('id, CONCAT(nombre," ",apellidos) as full_name')->pluck('full_name', 'id');
        return view('aulas.edit',['aula' => $aula,'profesores'=>$profesores]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SisEscolar\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aula = Aula::find($id);
        $aula->grado = $request->get('grado');
        $aula->grupo = $request->get('grupo');
        $aula->escuelas_id = $request->get('escuelas_id');
        $aula->profesors_id = $request->get('profesors_id');
        
        $aula->update();

        Session::flash('message','Haz actualizado los datos del aula satisfactoriamente');
        return redirect::to('/aulas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SisEscolar\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $aula = Aula::find($id);
      $aula->delete();
      Session::flash('message','Los datos del aula se eliminaron correctamente');
      return redirect::to('/aulas');
    }
}
