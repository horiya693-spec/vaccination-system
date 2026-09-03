<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Registerform(){
return view('auth.register');
    }
     public function loginform(){
        return view('auth.login');
    }
     public function RegisterUser(){
        
    }

     public function loginUser(){
        
    }

}
