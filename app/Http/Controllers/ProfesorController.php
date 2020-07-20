<?php

namespace SisEscolar\Http\Controllers;

use SisEscolar\Profesor;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;
use Redirect;
use SisEscolar\Http\Requests;
use SisEscolar\Http\Requests\LoginRequest;
use SisEscolar\Http\Controllers\Controller;
use SisEscolar\User;
use SisEscolar\Escuela;
use DB;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesor::All();
        return view('profesors.index',['profesores' => $profesores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('profesors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Profesor::create($request->all());

        Session::flash('message','Haz agreado un nuevo maestro satisfactoriamente');
        return redirect::to('/profesors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \SisEscolar\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SisEscolar\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor = Profesor::find($id);
        return view('profesors.edit',['profesor' => $profesor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SisEscolar\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profesor = Profesor::find($id);
        $profesor->nombre = $request->get('nombre');
        $profesor->apellidos = $request->get('apellidos');
        $profesor->cedula = $request->get('cedula');
        $profesor->direccion = $request->get('direccion');
        $profesor->telefono = $request->get('telefono');
        $profesor->email = $request->get('email');
        $profesor->password = $request->get('password');
        
        $profesor->update();

        Session::flash('message','Haz actualizado los datos del maestro satisfactoriamente');
        return redirect::to('/profesors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SisEscolar\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $profesor = Profesor::find($id);
      $profesor->delete();
      Session::flash('message','Los datos del maestro se eliminaron correctamente');
      return redirect::to('/profesors');
    }
}
