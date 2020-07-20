<?php

namespace SisEscolar\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;
use Redirect;
use SisEscolar\Http\Requests;
use SisEscolar\Http\Requests\LoginRequest;
use SisEscolar\Http\Controllers\Controller;
use SisEscolar\User;
use SisEscolar\Admin;
use SisEscolar\Escuela;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $users = DB::table('escuelas')
            ->join('users', 'escuelas.id', '=', 'users.escuelas_id')
            ->select('users.*', 'escuelas.nombre')
            ->get();

        return view('users.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Escuela = Escuela::pluck('nombre','id')->prepend('Escuela');
        return view('users.create',compact('Escuela'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());

        Session::flash('message','Haz agreado un usuario satisfactoriamente');
        return redirect::to('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Escuela = Escuela::pluck('nombre','id');
        $users= User::find($id);
        return view('users.edit',['users'=>$users,'Escuela'=>$Escuela]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->password = $request->get('password');
        $users->admins_id = $request->get('admins_id');
        $users->escuelas_id = $request->get('escuelas_id');
        
        
        $users->update();

        Session::flash('message','Haz actualizado los datos del usuario satisfactoriamente');
        return redirect::to('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $users = User::find($id);
      $users->delete();
      Session::flash('message','Los datos del usuario se eliminaron correctamente');
      return redirect::to('/users');
    }
}
