<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hospitalController extends Controller
{
     function dashboard(){

    return view('hospital.hospitaldashboard');
    }
    function hospital(){
     $data=$req->validate([
            "name"=>"required ",
            "email"=>"required | email",
            "password"=>"required|max:8"
        ]);
        $register=User::create($data);
        if($register){
            return redirect()->route('loginform');
        }
        else{
            return redirect()->route('userregister');
        }
       return view('hospitals'); 
    }
}
