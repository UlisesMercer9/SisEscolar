<?php

namespace SisEscolar\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use SisEscolar\Http\Requests;
use SisEscolar\Http\Requests\LoginRequest;
use SisEscolar\Http\Controllers\Controller;
use SisEscolar\Escuela;
use DB;

class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Escuela = Escuela::all();
        return view('escuelas.index',['Escuela'=> $Escuela]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('escuelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Escuela::create($request->all());

        Session::flash('message','Haz agreado una nueva escuela satisfactoriamente');
        return redirect::to('/escuelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \SisEscolar\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Escuela = Escuela::find($id);
        return view('escuelas.show',['Escuela'=> $Escuela]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SisEscolar\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Escuela = Escuela::find($id);
        return view('escuelas.edit',['Escuela'=> $Escuela]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SisEscolar\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $Escuela = Escuela::find($id);
        $Escuela->nombre = $request->get('nombre');
        $Escuela->clave = $request->get('clave');
        $Escuela->direccion = $request->get('direccion');
        $Escuela->telefono = $request->get('telefono');
        $Escuela->correo = $request->get('correo');
        $Escuela->estado = $request->get('estado');
        $Escuela->municipio = $request->get('municipio');
        $Escuela->localidad = $request->get('localidad');
        
        $Escuela->update();

        Session::flash('message','Haz actualizado los datos de la escuela satisfactoriamente');
        return redirect::to('/escuelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SisEscolar\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Escuela = Escuela::find($id);
      $Escuela->delete();
      Session::flash('message','Los datos de la escuelas se eliminaron correctamente');
      return redirect::to('/escuelas');
    }
}
