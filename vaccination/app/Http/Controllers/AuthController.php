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
return redirect()->route('web');

}
else{
    return redirect()->back()->with("danger","User Not Found....");
}
    }
    
 function logout(Request $request)    {
        // 1. Log out the active authentication guard instance
        Auth::logout();

        // 2. Invalidate the user's active session data payload
        $request->session()->invalidate();

        

        // 4. Redirect the user back to the primary system login landing screen
        return redirect()->route('userlogin')->with('status', 'You have been successfully logged out.');
    }
}

    
    
    

