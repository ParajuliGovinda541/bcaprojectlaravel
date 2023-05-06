<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    //creating a function
    public function home()
    {
        return view ('home');
    }
}
