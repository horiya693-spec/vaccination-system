<?php

namespace App\Http\Controllers;


class userController extends Controller
{
    function user(){
        return view('user.about');
    }
    //vaccines//
    function vaccines(){
        return view('vaccines');
    }
    function index(){
        return view('user.home');
    }
function about(){
        return view('user.about');

        return view('user/home');

    }
 function hospitals(){
       return view('user.hospitals'); 
    }
}


