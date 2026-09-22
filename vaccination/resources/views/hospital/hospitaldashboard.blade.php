
@extends('hospital.sidebar')

@section('hospital')

<main class="dashboard-content">

    <div class="container-fluid px-3 px-lg-4 py-4">

        {{-- Welcome Section --}}
        <div class="page-heading p-4 mb-4 bg-white rounded shadow-sm">

            <h1>
                Hospital Dashboard
            </h1>

            <p class="text-muted mb-0">
                Manage your hospital, vaccine availability and appointments.
            </p>

        </div>


        {{-- Summary Cards --}}
        <div class="row g-4 mb-4">

            {{-- Hospital --}}
            <div class="col-md-4">
                <div class="card shadow-sm h-100">

                    <div class="card-body">

                        <p class="text-muted mb-1">
                            Hospital
                        </p>

                        <h4 class="mb-0">
                            {{ $hospital->name ?? 'Hospital' }}
                        </h4>

                    </div>

                </div>
            </div>


            {{-- Available Vaccines --}}
            <div class="col-md-4">
                <div class="card shadow-sm h-100">

                    <div class="card-body">

                        <p class="text-muted mb-1">
                            Available Vaccines
                        </p>

                        <h2 class="mb-0">
                            {{ $availableVaccines ?? 0 }}
                        </h2>

                    </div>

                </div>
            </div>


            {{-- Pending Appointments --}}
            <div class="col-md-4">
                <div class="card shadow-sm h-100">

                    <div class="card-body">

                        <p class="text-muted mb-1">
                            Pending Appointments
                        </p>

                        <h2 class="mb-0">
                            {{ $pendingAppointments ?? 0 }}
                        </h2>

                    </div>

                </div>
            </div>

        </div>


        {{-- Hospital Information --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white py-3">

                <h5 class="mb-0">
                    Hospital Information
                </h5>

            </div>


            <div class="card-body">

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <strong>Hospital Name</strong>

                        <p class="text-muted mb-0">
                            {{ $hospital->name ?? 'Not added' }}
                        </p>

                    </div>


                    <div class="col-md-6 mb-3">

                        <strong>Phone</strong>

                        <p class="text-muted mb-0">
                            {{ $hospital->phone ?? 'Not added' }}
                        </p>

                    </div>


                    <div class="col-md-12">

                        <strong>Address</strong>

                        <p class="text-muted mb-0">
                            {{ $hospital->address ?? 'Not added' }}
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- Recent Appointments --}}
        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white py-3">

                <h5 class="mb-0">
                    Recent Appointments
                </h5>

            </div>


            <div class="card-body p-0">

                @if(isset($appointments) && $appointments->count())

                    <div class="table-responsive">

                        <table class="table table-hover align-middle mb-0">

                            <thead class="table-light">

                                <tr>

                                    <th class="px-3">
                                        Child
                                    </th>

                                    <th>
                                        Vaccine
                                    </th>

                                    <th>
                                        Appointment Date
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                    <th>
                                        Action
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                @foreach($appointments as $appointment)

                                    <tr>

                                        {{-- Child --}}
                                        <td class="px-3">
                                            {{ $appointment->child->Child_Name ?? 'N/A' }}
                                        </td>


                                        {{-- Vaccine --}}
                                        <td>
                                            {{ $appointment->vaccination->Vaccine_Name ?? 'N/A' }}
                                        </td>


                                        {{-- Appointment Date --}}
                                        <td>
                                            {{ $appointment->appointment_date ?? 'N/A' }}
                                        </td>


                                        {{-- Status --}}
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


                                        {{-- Action --}}
                                        <td>

                                            <form
                                                action="{{ route('hospital.appointment.complete', $appointment->id) }}"
                                                method="POST"
                                                class="m-0"
                                            >

                                                @csrf

                                                <button
                                                    type="submit"
                                                    class="btn btn-success btn-sm"
                                                >
                                                    Mark as Vaccinated
                                                </button>

                                            </form>

                                        </td>

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

            </div>

        </div>

    </div>

</main>


{{-- Footer --}}
<footer class="bg-light border-top py-3 mt-4">

    <div class="container-fluid px-4">

        <div class="text-center text-muted small">

            © 2026 VacciCare —
            Hospital Management Dashboard

        </div>

    </div>

</footer>

@endsection
