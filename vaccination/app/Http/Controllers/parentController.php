<?php

namespace App\Http\Controllers;

use App\Models\child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class parentController extends Controller
{
       function dashboard(){

    return view('parent/parentdashboard');
    }
     public function create()
    {
        return view('user.addchild'); 
    }

    public function addchild(Request $request) { 
    $data = $request->validate([ 
        'Parent_Id'    => 'required|integer', // Add this line
        'Child_Name'   => 'required|string|max:255', 
        'Father_Name'  => 'required|string|max:255', 
        'Mother_Name'  => 'required|string|max:255', 
        'Child_Gender' => 'required|string', 
        'DOB'          => 'required|date|before_or_equal:today', 
        'Phone_Number' => 'required|string|max:20', 
        'Address'      => 'required|string', 
    ]); 




 $addchild=child::create($data);
        if($addchild){
       return redirect()->route('website');

}
else{
    return redirect()->back()->with("danger","User Not Found....");
}
    }
    function childdeatils(){
        return view('parent/child-deatils');
    }
    function chiddea(Request $req){
  $data=$req->validate([
       'Parent_Id'    => 'required|integer', // Add this line
        'Child_Name'   => 'required|string|max:255', 
        'Father_Name'  => 'required|string|max:255', 
        'Mother_Name'  => 'required|string|max:255', 
        'Child_Gender' => 'required|string', 
        'DOB'          => 'required|date|before_or_equal:today', 
        'Phone_Number' => 'required|string|max:20', 
        'Address'      => 'required|string', 

  ]);

    $check=Auth::attempt($data);
    if($check){
          return redirect('parent/child-deatils')->with("error", "User not found");
    }
    else{
        "not updated";
    }

    }
}
