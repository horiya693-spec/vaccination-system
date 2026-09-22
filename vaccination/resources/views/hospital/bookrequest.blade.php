@extends('hospital.sidebar')

@section('hospital')

   <div class="card border-0 shadow-sm">

            <div class="card-header bg-white py-3">
                <h5 class="mb-0">
                    Recent Appointments
                </h5>
            </div>

            <div class="card-body p-0">

                @if(isset($appointments) && $appointments->count())

                    <div class="table-responsive">

                        <table class="table table-hover mb-0">

                            <thead class="table-light">
                                <tr>
                                    <th>Child</th>
                                    <th>Vaccine</th>
                                    <th>Appointment Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($appointments as $appointment)

                                    <tr>

                                        <td>
                                            {{ $appointment->child->Child_Name ?? 'N/A' }}
                                        </td>

                                        <td>
                                            {{ $appointment->vaccination->Vaccine_Name ?? 'N/A' }}
                                        </td>

                                        <td>
                                            {{ $appointment->appointment_date ?? 'N/A' }}
                                        </td>

                                        <td>

                                            @if($appointment->status === 'Approved')

                                                <span class="badge bg-success">
                                                    Approved
                                                </span>

                                            @elseif($appointment->status === 'Pending')

                                                <span class="badge bg-warning text-dark">
                                                    Pending
                                                </span>

                                            @elseif($appointment->status === 'Rejected')

                                                <span class="badge bg-danger">
                                                    Rejected
                                                </span>

                                            @else

                                                <span class="badge bg-secondary">
                                                    {{ $appointment->status }}
                                                </span>

                                            @endif

                                        </td>
<td><form action="{{ route('hospital.appointment.complete', $appointment->id) }}"
      method="POST">

    @csrf

    <button type="submit" class="btn btn-success">
        Mark as Vaccinated
    </button>

</form></td>
                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <div class="text-center py-5">

                        <h6 class="text-muted">
                            No appointments yet
                        </h6>

                        <p class="text-muted mb-0">
                            Appointments will appear here after they are approved.
                        </p>

                    </div>

                @endif

@endsection








