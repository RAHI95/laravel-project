<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller
{
    public function manush(){
        return view('pages.about');
    }
    
}
