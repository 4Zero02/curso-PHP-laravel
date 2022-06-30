<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        return view('site.principal');
    }

    public function contato(){
        var_dump($_POST);
        return view('site.contact', ['titulo' => 'Contato (teste)']);
    }

    public function sobre(){
        return view('site.about');
    }

}
