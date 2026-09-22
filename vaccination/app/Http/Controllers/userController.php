<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\child;
use App\Models\Hospital;
use App\Models\hospitalstock;
use App\Models\vaccination;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    function user(){
        return view('user.about');
    }
    //vaccines//
    function vaccines(){
        return view('vaccines');
    }
    function index(){
        return view('user.home');
    }
function about(){
        return view('user.about');

        

    }
 function hospitals(){
       return view('user.hospitals'); 
    }
   function location()
{
    $hospitals = Hospital::all();

    return view('user.location', compact('hospitals'));
}


  public function create($child_id, $vaccination_id)
{
    // Parent ka child verify
    $child = child::where('id', $child_id)
        ->where('Parent_Id', Auth::id())
        ->firstOrFail();

    // Click ki hui vaccine
    $vaccine = vaccination::findOrFail($vaccination_id);

    // Sirf is vaccine wale available hospitals
    $hospitals = Hospital::whereHas('stock', function ($query) use ($vaccination_id) {

        $query->where('vaccination_id', $vaccination_id)
              ->where('status', 'Available');

    })->get();

    return view('user.appointment', compact(
        'child',
        'vaccine',
        'hospitals'
    ));
}


    public function store(Request $request)
    {
        $request->validate([
            'child_id' => 'required|exists:children,id',
            'vaccination_id' => 'required|exists:vaccinations,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'appointment_date' => 'required|date|after_or_equal:today',
        ]);

        // Parent ka child verify
        $child = child::where('id', $request->child_id)
            ->where('Parent_Id', Auth::id())
            ->firstOrFail();

        // Vaccine
        $vaccine = vaccination::findOrFail($request->vaccination_id);

        // Due date calculate
        $days = $this->targetAgeToDays($vaccine->Target_Age);

        $dueDate = Carbon::parse($child->DOB)->addDays($days);

        // Completed check
        $completed = \App\Models\VaccinesChild::where('child_id', $child->id)
            ->where('vaccination_id', $vaccine->id)
            ->where('status', 'Completed')
            ->exists();

        // Sirf Due vaccine
        if ($completed || $dueDate->isFuture()) {
            return back()->with('error', 'Only due vaccines can be booked.');
        }

        // Hospital mein vaccine Available hai?
        $available = hospitalstock::where('hospital_id', $request->hospital_id)
            ->where('vaccination_id', $request->vaccination_id)
            ->where('status', 'Available')
            ->exists();

        if (!$available) {
            return back()
                ->with('error', 'Selected hospital does not have this vaccine available.')
                ->withInput();
        }

        // Appointment create
    Booking::create([
            'child_id' => $child->id,
            'vaccination_id' => $vaccine->id,
            'hospital_id' => $request->hospital_id,
            'appointment_date' => $request->appointment_date,
            'status' => 'Pending',
        ]);

        return redirect()
            ->route('parent.vaccinations')
            ->with('success', 'Appointment sent to admin successfully.');
    }


    private function targetAgeToDays($targetAge)
    {
        $targetAge = strtolower(trim($targetAge));

        if ($targetAge === 'at birth') {
            return 0;
        }

        if (preg_match('/(\d+)\s*weeks?/', $targetAge, $matches)) {
            return (int) $matches[1] * 7;
        }

        if (preg_match('/(\d+)\s*months?/', $targetAge, $matches)) {
            return (int) $matches[1] * 30;
        }

        if (preg_match('/(\d+)\s*years?/', $targetAge, $matches)) {
            return (int) $matches[1] * 365;
        }

        return 0;
    }
}





