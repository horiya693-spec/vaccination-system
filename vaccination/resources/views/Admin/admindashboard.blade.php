@extends('Admin.sidebar')

@section('admin')

<div class="container-fluid px-3 px-lg-4 py-4">

    {{-- ===================== PAGE HEADING ===================== --}}
    <div class="page-heading mb-4">

        <div class="page-heading-copy">

            <span class="page-icon">
                <i class="bi bi-speedometer2" aria-hidden="true"></i>
            </span>

            <div>

                <p class="eyebrow mb-1">
                    Overview
                </p>

                <h1>
                    @if(Auth::check())
                        Welcome, <strong>{{ Auth::user()->name }}</strong>!
                    @endif
                </h1>

                <p class="text-muted mb-0">
                    Monitor Parents, Children, Hospitals, Vaccines and Appointments
                    from one clean workspace.
                </p>

            </div>

        </div>

    </div>


    {{-- ===================== DASHBOARD CARDS ===================== --}}
    <section class="row g-3 mt-1" aria-label="Dashboard metrics">


        {{-- TOTAL USERS --}}
        <div class="col-12 col-sm-6 col-xl-3">

            <article class="metric-card metric-primary">

                <div class="metric-top">

                    <span class="metric-label">
                        Total Registered Users
                    </span>

                    <span class="metric-icon">
                        <i class="bi bi-people" aria-hidden="true"></i>
                    </span>

                </div>

                <div class="metric-value">
                    <strong>{{ $totalUsers }}</strong>
                </div>

                <div class="metric-meta">
                    <span>
                        Registered Users
                    </span>
                </div>

            </article>

        </div>


        {{-- TOTAL CHILDREN --}}
        <div class="col-12 col-sm-6 col-xl-3">

            <article class="metric-card metric-success">

                <div class="metric-top">

                    <span class="metric-label">
                        Total Registered Children
                    </span>

                    <span class="metric-icon">
                        <i class="bi bi-person-hearts" aria-hidden="true"></i>
                    </span>

                </div>

                <div class="metric-value">
                    <strong>{{ $totalchild }}</strong>
                </div>

                <div class="metric-meta">
                    <span>
                        Registered Children
                    </span>
                </div>

            </article>

        </div>


        {{-- TOTAL HOSPITALS --}}
        <div class="col-12 col-sm-6 col-xl-3">

            <article class="metric-card metric-warning">

                <div class="metric-top">

                    <span class="metric-label">
                        Total Registered Hospitals
                    </span>

                    <span class="metric-icon">
                        <i class="bi bi-hospital" aria-hidden="true"></i>
                    </span>

                </div>

                <div class="metric-value">
                    <strong>{{ $totalHospital }}</strong>
                </div>

                <div class="metric-meta">
                    <span>
                        Registered Hospitals
                    </span>
                </div>

            </article>

        </div>


        {{-- TOTAL VACCINES --}}
        <div class="col-12 col-sm-6 col-xl-3">

            <article class="metric-card metric-danger">

                <div class="metric-top">

                    <span class="metric-label">
                        Total Available Vaccines
                    </span>

                    <span class="metric-icon">
                        <i class="bi bi-capsule" aria-hidden="true"></i>
                    </span>

                </div>

                <div class="metric-value">
                    <strong>{{ $totalVaccine }}</strong>
                </div>

                <div class="metric-meta">
                    <span>
                        Vaccines in System
                    </span>
                </div>

            </article>

        </div>

    </section>



    {{-- ===================== APPOINTMENT REQUESTS ===================== --}}
    <section class="panel mt-4">

        {{-- PANEL HEADER --}}
        <div class="panel-header">

            <div>

                <h2 class="h5 mb-1 section-title">

                    <i class="bi bi-calendar-check" aria-hidden="true"></i>

                    <span>
                        Appointment Requests
                    </span>

                </h2>

                <p class="text-muted mb-0">
                    Review and manage pending vaccination appointment requests.
                </p>

            </div>

        </div>


        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))

            <div class="alert alert-success mx-3 mt-3">
                {{ session('success') }}
            </div>

        @endif


        {{-- ERROR MESSAGE --}}
        @if(session('error'))

            <div class="alert alert-danger mx-3 mt-3">
                {{ session('error') }}
            </div>

        @endif


        {{-- APPOINTMENT TABLE --}}
        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>

                    <tr>

                        <th>#</th>

                        <th>
                            Child
                        </th>

                        <th>
                            Vaccine
                        </th>

                        <th>
                            Hospital
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

                    @forelse($appointments as $appointment)

                        <tr>

                            {{-- NUMBER --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>


                            {{-- CHILD --}}
                            <td>

                                @if($appointment->child)

                                    {{ $appointment->child->Child_Name }}

                                @else

                                    <span class="text-muted">
                                        N/A
                                    </span>

                                @endif

                            </td>


                            {{-- VACCINE --}}
                            <td>

                                @if($appointment->vaccination)

                                    {{ $appointment->vaccination->Vaccine_Name }}

                                @else

                                    <span class="text-muted">
                                        N/A
                                    </span>

                                @endif

                            </td>


                            {{-- HOSPITAL --}}
                            <td>

                                @if($appointment->hospital)

                                    {{ $appointment->hospital->name }}

                                @else

                                    <span class="text-muted">
                                        N/A
                                    </span>

                                @endif

                            </td>


                            {{-- APPOINTMENT DATE --}}
                            <td>

                                @if($appointment->appointment_date)

                                    {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d M Y') }}

                                @else

                                    <span class="text-muted">
                                        N/A
                                    </span>

                                @endif

                            </td>


                            {{-- STATUS --}}
                            <td>

                                <span class="badge text-bg-warning">
                                    {{ $appointment->status }}
                                </span>

                            </td>


                            {{-- ACTION --}}
                            <td>

                                <div class="d-flex gap-2">


                                    {{-- APPROVE --}}
                                    <form
                                        action="{{ route('admin.appointment.approve', $appointment->id) }}"
                                        method="POST"
                                    >

                                        @csrf

                                        <button
                                            type="submit"
                                            class="btn btn-success btn-sm"
                                        >
                                            <i class="bi bi-check-circle"></i>
                                            Approve
                                        </button>

                                    </form>


                                    {{-- REJECT --}}
                                    <form
                                        action="{{ route('admin.appointment.reject', $appointment->id) }}"
                                        method="POST"
                                    >

                                        @csrf

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm"
                                        >
                                            <i class="bi bi-x-circle"></i>
                                            Reject
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>


                    @empty

                        <tr>

                            <td
                                colspan="7"
                                class="text-center py-4"
                            >

                                <i class="bi bi-calendar-x fs-3 d-block mb-2"></i>

                                <span>
                                    No pending appointment requests.
                                </span>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </section>



    {{-- ===================== RECENT USERS ===================== --}}
    <section class="panel mt-4">

        <div class="panel-header">

            <div>

                <h2 class="h5 mb-1 section-title">

                    <i class="bi bi-people" aria-hidden="true"></i>

                    <span>
                        Recent Users
                    </span>

                </h2>

                <p class="text-muted mb-0">
                    Latest account activity across the system.
                </p>

            </div>

        </div>


        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>

                    <tr>

                        <th>
                            User
                        </th>

                        <th>
                            Role
                        </th>

                        <th>
                            Email
                        </th>

                        <th>
                            Status
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <tr>

                        <td>
                            Sarah Ahmed
                        </td>

                        <td>
                            Admin
                        </td>

                        <td>
                            sarah@example.com
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                    </tr>


                    <tr>

                        <td>
                            Rafi Khan
                        </td>

                        <td>
                            Parent
                        </td>

                        <td>
                            rafi@example.com
                        </td>

                        <td>
                            <span class="badge text-bg-success">
                                Active
                            </span>
                        </td>

                    </tr>


                    <tr>

                        <td>
                            Nadia Islam
                        </td>

                        <td>
                            Parent
                        </td>

                        <td>
                            nadia@example.com
                        </td>

                        <td>
                            <span class="badge text-bg-warning">
                                Pending
                            </span>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </section>

</div>


{{-- ===================== FOOTER ===================== --}}
<footer class="admin-footer">

    <div class="container-fluid px-3 px-lg-4">

        <span>
            Copyright 2026 adminHMD.
            <br>
            Developed by
            <a
                target="_blank"
                class="fw-bold text-success"
                href="https://github.com/HasanMahmudDev"
            >
                Md. Hasan Mahmud
            </a>
        </span>

        <span>
            VacciCare Admin Dashboard
        </span>

    </div>

</footer>


@endsection
```
