<?php

namespace SisEscolar\Http\Controllers;

use SisEscolar\Periodo;
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

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = Periodo::All();
        return view('periodos.index',['periodos' => $periodos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periodos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Periodo::create($request->all());

        Session::flash('message','Haz agreado un nuevo ciclo escolar satisfactoriamente');
        return redirect::to('/periodos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \SisEscolar\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function show(Periodo $periodo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SisEscolar\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periodo = Periodo::find($id);
        return view('periodos.edit',['periodo' => $periodo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SisEscolar\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $periodo = Periodo::find($id);
        $periodo->ciclo_escolar = $request->get('ciclo_escolar');
       
        
        $periodo->update();

        Session::flash('message','Haz actualizado los datos del ciclo escolar satisfactoriamente');
        return redirect::to('/periodos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SisEscolar\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $periodo = Periodo::find($id);
        $periodo->delete();
        Session::flash('message','Los datos del ciclo escolar se eliminaron correctamente');
        return redirect::to('/periodos');
    }
}
