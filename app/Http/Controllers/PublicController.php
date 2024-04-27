<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //

    public function welcome(){

        return view('welcome');
    }

    public function contattami(){
    
        return view('contattami');
    }
    public function esperienze(){
        return view('esperienze');
    }
}
