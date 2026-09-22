<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Hospital;
use App\Models\hospitalstock;
use App\Models\User;
use App\Models\vaccination;
use App\Models\vaccineschild;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class hospitalController extends Controller
{
public function dashboardhospital()
{
    $hospital = Hospital::where('user_id', Auth::id())->first();

    if (!$hospital) {
        return view('hospital.hospitaldashboard', [
            'hospital' => null,
            'availableVaccines' => 0,
            'pendingAppointments' => 0,
            'appointments' => collect(),
        ]);
    }

    // Available vaccines
    $availableVaccines = $hospital->stock()
        ->where('status', 'Available')
        ->count();

    // Approved appointments
    $appointments = Booking::where('hospital_id', $hospital->id)
        ->where('status', 'Approved')
        ->with(['child', 'vaccination'])
        ->latest()
        ->get();

    // Approved appointments ki count
    $pendingAppointments = $appointments->count();

    return view('hospital.hospitaldashboard', compact(
        'hospital',
        'availableVaccines',
        'pendingAppointments',
        'appointments'
    ));
}
    //hospital ka stock ka yeh avaible ha yah nahi-------------
    public function vaccines()
{
    $hospital = Hospital::where('user_id', Auth::id())->firstOrFail();

    $vaccines = vaccination::all();

    return view('hospital.vaccines', compact('hospital', 'vaccines'));
}



public function updateVaccineStatus($vaccination_id)
{
    $hospital = Hospital::where('user_id', Auth::id())->firstOrFail();

    $stock = hospitalstock::where('hospital_id', $hospital->id)
        ->where('vaccination_id', $vaccination_id)
        ->first();

    if (!$stock) {
        $stock = new hospitalstock();
        $stock->hospital_id = $hospital->id;
        $stock->vaccination_id = $vaccination_id;
    }

    $stock->status = $stock->status === 'Available'
        ? 'Unavailable'
        : 'Available';

    $stock->save();

    return back()->with('success', 'Vaccine availability updated successfully.');


    }
public function appointments()
{
    $hospital = Hospital::where('user_id', Auth::id())->first();

    if (!$hospital) {
        return view('hospital.bookrequest', [
            'appointments' => collect(),
        ]);
    }

    $appointments = Booking::where('hospital_id', $hospital->id)
        ->where('status', 'Approved')
        ->with(['child', 'vaccination'])
        ->latest()
        ->get();

    return view('hospital.bookrequest', compact('appointments'));
}

public function complete($id)
{
    $appointment = Booking::findOrFail($id);

    $appointment->status = 'Completed';
    $appointment->save();

    vaccineschild::updateOrCreate(
        [
            'child_id' => $appointment->child_id,
            'vaccination_id' => $appointment->vaccination_id,
        ],
        [
            'hospital_id' => $appointment->hospital_id,
            'vaccination_date' => $appointment->appointment_date,
            'status' => 'Completed',
        ]
    );

    return back()->with(
        'success',
        'Vaccination marked as completed.'
    );
}


}

