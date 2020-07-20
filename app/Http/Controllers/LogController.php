<?php

namespace SisEscolar\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Auth;
use Session;
use Redirect;
use SisEscolar\Http\Requests;
use SisEscolar\Http\Requests\LoginRequest;
use SisEscolar\Http\Controllers\Controller;
use SisEscolar\User;
use SisEscolar\Admin;
use DB;

class LogController extends Controller
{
         public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      public function store(Request $request)
    {
         

        if(Auth('admins')->attempt(['email'=>$request['email'], 'password'=>$request['password']]) ){
            
            return Redirect::to('escuelas');
       
        }elseif(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){

            return Redirect::to('profesors');

        }elseif (Auth('profesors')->attempt(['email'=>$request['email'], 'password'=>$request['password']]) ) {
            return Redirect::to('alumnos');
        }

        Session::flash('message-error','Datos son incorrectos');
        return Redirect::to('/');

      

      
    }


      public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
