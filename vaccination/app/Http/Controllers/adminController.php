<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    // view for dasboard
    function dashboard(){
        return view('Admin.admindashboard');
    }
    //all users data fetch
    function fetch(){
        $data=User::all();

        return view('Admin.allusers',compact('data'));
    }
//edit users deatils

function edituser($id){
$data=User::findOrfail($id);
        return view('admin/edituser',compact("data"));  
}
// update deatils of user


function updateuser(Request $req, $id) {
    

    // 2. Find the user
    $data = User::find($id);

    if (!$data) {
        return redirect('admin/edituser')->with("error", "User not found");
    }

    // 3. Update the fields
    $data->name = $req->name;
    $data->email = $req->email;
    $data->role = $req->role;

    // 5. Save and redirect
    $data->save();

    return redirect('admin/allusers')->with("success", "User updated successfully");
}
function deleteuser($id){
    $data = User::find($id);
    User::destroy($data->id);
    if($data){
        return redirect('admin/allusers');
        
    }
}
}