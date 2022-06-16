<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        return view('site.principal');
    }

    public function contato(){
        return view('site.contact');
        // echo "Contato = 4002-8922";
    }

    public function sobre(){
        return view('site.about');
        // echo "Coisas sobre nozes";
    }

}
