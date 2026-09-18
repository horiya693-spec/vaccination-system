<?php

namespace App\Http\Controllers;

use App\Models\child;
use App\Models\User;
use App\Models\vaccination;
use Illuminate\Http\Request;

class adminController extends Controller
{
    // view for dasboard
    function dashboard(){
    $totalUsers = User::count();
    $totalchild = child::count();

    return view('Admin.admindashboard', compact('totalUsers','totalchild'));
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
 public function create()
    {
        return view('Admin/createvaccine');
    }
public function store(Request $request)
    {
        // Validate inputs to prevent database crashes
        $request->validate([
            'vaccine_name' => 'required|string|max:255',
            'dose_number'  => 'required|string|max:50',
            'target_age'   => 'required|string|max:100',
        ]);

        // Insert rows directly inside the vaccinations table
        vaccination::create([
            'vaccine_name' => $request->vaccine_name,
            'dose_number'  => $request->dose_number,
            'target_age'   => $request->target_age,
        ]);

        // Redirect back with a alert success flash message
        return redirect()->back()->with('success', 'Vaccine uploaded successfully to master list!');
    }

}