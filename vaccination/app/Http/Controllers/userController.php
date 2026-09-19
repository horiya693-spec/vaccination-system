<?php

namespace App\Http\Controllers;


class userController extends Controller
{
    function user(){
        return view('user.about');
    }
    //vaccines//
    function vaccines(){
        return view('user.vaccines');
    }
    function index(){
        return view('user/home');
    }

}


