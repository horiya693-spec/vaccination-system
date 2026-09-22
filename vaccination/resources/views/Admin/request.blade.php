@extends('admin.sidebar')

@section('admin')
<style>
    .btn{
        color: black;
    }
</style>
<div class="container py-4">

    <h2 class="mb-4">Appointment Requests</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Child</th>
                            <th>Vaccine</th>
                            <th>Hospital</th>
                            <th>Appointment Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($appointments as $appointment)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $appointment->child->Child_Name }}
                                </td>

                                <td>
                                    {{ $appointment->vaccination->Vaccine_Name }}
                                </td>

                                <td>
                                    {{ $appointment->hospital->name }}
                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d M Y') }}
                                </td>

                                <td>
                                    <span class="badge bg-warning text-dark">
                                        {{ $appointment->status }}
                                    </span>
                                </td>

                                <td>

                                    <div class="d-flex gap-2">
<form
    action="{{ route('admin.appointment.approve', ['id' => $appointment->id]) }}"
    method="POST"
>
    @csrf

    <button type="submit" class="btn btn-success btn-sm">
        Approve
    </button>
</form>

  {{-- Reject --}}
   <form
    action="{{ route('admin.appointment.reject', ['id' => $appointment->id]) }}"
    method="POST"
>
    @csrf

    <button type="submit" class="btn btn-danger btn-sm">
        Reject
    </button>
</form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="text-center">
                                    No pending appointment requests.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection