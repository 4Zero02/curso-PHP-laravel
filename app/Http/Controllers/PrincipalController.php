<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class principalController extends Controller
{
    public function principal(){
        return view('site.principal');
    }
    
    public function contact(){
        return view('site.contact');
        // echo "Contato = 4002-8922";
    }

    public function about(){
        return view('site.about');
        // echo "Coisas sobre nozes";
    }
     
}
