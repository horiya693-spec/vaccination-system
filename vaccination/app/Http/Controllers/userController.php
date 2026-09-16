<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function user(){
        return view('user.home');
    }
    //vaccines//
    function vaccines(){
        return view('user.vaccines');
    }
}
