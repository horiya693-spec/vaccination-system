<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\appointment as ModelsAppointment;
use App\Models\Booking;
use App\Models\child;
use App\Models\Hospital;
use App\Models\vaccination;
use App\Models\vaccineschild;
use Carbon\Carbon;
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
    $data = child::find($id);

    if (!$data) {
        return redirect()->back()->with("error", "Child details record not found.");
    }

    $data->Child_Name   = $req->Child_Name;
    $data->Father_Name  = $req->Father_Name;
    $data->Mother_Name  = $req->Mother_Name;
    $data->Child_Gender = $req->Child_Gender; 
    $data->DOB          = $req->DOB;
    $data->Phone_Number = $req->Phone_Number; 
    $data->Address      = $req->Address;      

    $data->save();

    return redirect()->route('child', $id)->with("success", "Child Details Updated successfully");
}
function childprofile(){
$parentId = Auth::id();

    $children = Child::where('parent_id', $parentId)->get();
return view('parent/childprofile',compact('children'));
}

//chld vaccines 

  
public function childvaccine()
{
    // Logged-in parent
    $parentId = Auth::id();

    // Sirf is parent ke children
    $children = child::where('Parent_Id', $parentId)->get();

    // Saari vaccines
    $vaccinations = vaccination::all();

    $data = [];

    foreach ($children as $child) {

        $vaccineList = [];

        foreach ($vaccinations as $vaccine) {

            // Target Age ko days mein convert karna
            $days = $this->targetAgeToDays($vaccine->Target_Age);

            // Child ki DOB + target age
            $dueDate = Carbon::parse($child->DOB)->addDays($days);

            // Vaccine complete hai ya nahi
            $completed = vaccineschild::where('child_id', $child->id)
                ->where('vaccination_id', $vaccine->id)
                ->where('status', 'Completed')
                ->first();


            // Appointment check karna
            $appointment = booking::where('child_id', $child->id)
                ->where('vaccination_id', $vaccine->id)
                ->latest()
                ->first();


            // Vaccine ka status
            if ($completed) {

                $status = 'Completed';

            } elseif ($dueDate->isPast() || $dueDate->isToday()) {

                $status = 'Due';

            } else {

                $status = 'Upcoming';
            }


            // Vaccine list mein data add karna
            $vaccineList[] = [

                'vaccine' => $vaccine,

                'due_date' => $dueDate,

                'status' => $status,

                'completed' => $completed,

                'appointment' => $appointment,

            ];
        }


        $data[] = [

            'child' => $child,

            'vaccines' => $vaccineList,

        ];
    }


    return view('parent.vaccinations', compact('data'));
}



private function targetAgeToDays($targetAge)
{
    $targetAge = strtolower(trim($targetAge));

    // At Birth
    if ($targetAge === 'at birth') {
        return 0;
    }

    // Weeks
    if (preg_match('/(\d+)\s*weeks?/', $targetAge, $matches)) {
        return (int) $matches[1] * 7;
    }

    // Months
    if (preg_match('/(\d+)\s*months?/', $targetAge, $matches)) {
        return (int) $matches[1] * 30;
    }

    // Years
    if (preg_match('/(\d+)\s*years?/', $targetAge, $matches)) {
        return (int) $matches[1] * 365;
    }

    return 0;
}


    // appointment form ka sara kaam 


    

 

   


}
