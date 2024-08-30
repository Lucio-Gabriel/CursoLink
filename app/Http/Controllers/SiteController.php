<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index(){
        return view('index');
    }

    public  function cursos(){
        return view('cursos');
    }

    public function sobre(){
        return view('sobre');
    }

    public function contatos(){
        return view('contatos');
    }

}
