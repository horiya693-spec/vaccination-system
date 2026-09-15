<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hospitalController extends Controller
{
     function dashboard(){

    return view('hospital.hospitaldashboard');
    }
}
