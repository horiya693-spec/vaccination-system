<?php

namespace App\Http\Controllers;

use App\Models\child;
use App\Models\User;
use App\Models\vaccination;
use Illuminate\Http\Request;

class adminController extends Controller
{
    // view for dasboard-------------
    function dashboard(){
    $totalUsers = User::count();
    $totalchild = child::count();

    return view('Admin.admindashboard', compact('totalUsers','totalchild'));
    }
    //all users data fetch-------------
    function fetch(){
        $data=User::all();

        return view('Admin.allusers',compact('data'));
    }
//edit users deatils----------------

function edituser($id){
$data=User::findOrfail($id);
        return view('admin/edituser',compact("data"));  
}
// update deatils of user------------


function updateuser(Request $req, $id) {
    

    $data = User::find($id);

    if (!$data) {
        return redirect('admin/edituser')->with("error", "User not found");
    }

    $data->name = $req->name;
    $data->email = $req->email;
    $data->role = $req->role;

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
//----all vaccine uploaded form view----------
 public function create()
    {
        return view('Admin/createvaccine');
    }
//------------logic of all form vaccine
public function store(Request $request)
    {
        $request->validate([
            'vaccine_name' => 'required|string|max:255',
            'dose_number'  => 'required|string|max:50',
            'target_age'   => 'required|string|max:100',
        ]);

        vaccination::create([
            'vaccine_name' => $request->vaccine_name,
            'dose_number'  => $request->dose_number,
            'target_age'   => $request->target_age,
        ]);

        return redirect()->back()->with('success', 'Vaccine uploaded successfully to master list!');
    }
    //all vaccines fetch  logic------------------
     function fetchvaccine(){
        $data=vaccination::all();

        return view('Admin.all-vaccines',compact('data'));
    }
//---------all registerd child-------

    public function fetchchildren(Request $req)
    {
        // 1. Query shuru karein
        $query = Child::query();

        // 2. Agar user dashboard par Parent ID likh kar filter/search kare
        if ($req->has('parent_id') && $req->parent_id != '') {
            $query->where('Parent_Id', $req->parent_id);
        }

        // 3. Saara data fetch karein (Ya paginate use karein agar data zyada hai)
        $children    = $query->get();

        // 4. Data ko blade view (dashboard table) par bhejein
        return view('Admin/allchildren', compact('children'));
    }
}

