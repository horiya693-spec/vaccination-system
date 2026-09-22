<?php

namespace App\Http\Controllers;

use App\Models\child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class parentController extends Controller
{
    //-----------parent dashboard view------------

       function dashboard(){

    $parentId = Auth::id();

    $children = Child::where('parent_id', $parentId)->get();
    return view('parent/parentdashboard', compact('children'));
    }

    //-------------child form view--------

     public function create()
    {
        return view('user.addchild'); 
    }
    //------------childform data-------------------
    public function addchild(Request $request) { 
    $data = $request->validate([ 
        'Parent_Id'    => 'required|integer', 
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
       return redirect()->route('childprofile');

}
else{
    return redirect()->back()->with("danger","User Not Found....");
}
    }

  
    //------------ parent childdeatils data-------------------

    public function childdeatils($id) 
{
    $data = child::findorfail($id); 
        return view('parent/child-deatils',compact('data'));
    
}
    //------------ parent childdeatils edit-------------------
function editchild($id){
    // This fetches ONE child
    $data = child::findOrFail($id);
    
    // Send it to a dedicated edit page
    return view('parent/editchildinfo', compact('data'));
}
    //------------ parent childdeatils update-------------------

function updatechild(Request $req, $id) 
{
    // 1. Find the child record
    $data = child::find($id);

    // Safety Check: If the child does NOT exist, send back an error
    if (!$data) {
        return redirect()->back()->with("error", "Child details record not found.");
    }

    // 2. Update the fields (REMOVED Parent_Id check for security)
    $data->Child_Name   = $req->Child_Name;
    $data->Father_Name  = $req->Father_Name;
    $data->Mother_Name  = $req->Mother_Name;
    $data->Child_Gender = $req->Child_Gender; 
    $data->DOB          = $req->DOB;
    $data->Phone_Number = $req->Phone_Number; 
    $data->Address      = $req->Address;      

    // 3. Save the new information to the database
    $data->save();

    // 4. FIXED: Redirect back to the details page WITH the specific child ID
    return redirect()->route('child', $id)->with("success", "Child Details Updated successfully");
}
function childprofile(){
$parentId = Auth::id();

    $children = Child::where('parent_id', $parentId)->get();
return view('parent/childprofile',compact('children'));
}


}
