<?php

namespace SisEscolar\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use SisEscolar\Http\Requests;
use SisEscolar\Http\Controllers\Controller;
use Session;
use Redirect;
use DB;

class HomeController extends Controller
{
      public function index()
    {
    	return view('index');
    }

    public function panel()
    {
        return view('layout/admin');
    }

}
