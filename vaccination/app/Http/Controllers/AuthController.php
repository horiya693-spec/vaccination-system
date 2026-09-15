<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class AuthController extends Controller
{

// register form view
     function Register(){
return view('Auth/Register');
    }
    // register form
   function userregister(Request $req){
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
    }
     public function login(){
        return view('Auth/login');
    }

  function userlogin(Request $req){
  $data=$req->validate([
            "email"=>"required | email ",
            "password"=>"required|max:8"
        ]);

    $check=Auth::attempt($data);
if($check){
return redirect()->route('website');

}
else{
    return redirect()->back()->with("danger","User Not Found....");
}
    }
    
 

public function logout(Request $request)
{
    // 1. Log the user out of the application
    Auth::logout();

    // 2. Invalidate their current session
    $request->session()->invalidate();

    // 3. Regenerate the CSRF token to prevent attacks
    $request->session()->regenerateToken();

    // 4. Redirect them back to the login page or homepage
       return redirect('Auth/login');
}

}

    
    
    

