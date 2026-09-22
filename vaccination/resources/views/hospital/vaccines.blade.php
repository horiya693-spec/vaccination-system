@extends('hospital.sidebar')

@section('hospital')

<div class="container-fluid px-3 px-lg-4 py-4">

    <div class="mb-4">
        <p class="text-muted mb-1">Hospital Management</p>

        <h1 class="mb-2">
            Vaccine Availability
        </h1>

        <p class="text-muted">
            Manage the availability of vaccines in your hospital.
        </p>
    </div>


    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white py-3">
            <h5 class="mb-0">
                Vaccines
            </h5>
        </div>

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover mb-0">

                    <thead class="table-light">
                        <tr>
                            <th>Vaccine</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                    @forelse($vaccines as $vaccine)

                        @php
                            $stock = \App\Models\hospitalstock::where('hospital_id', $hospital->id)
                                ->where('vaccination_id', $vaccine->id)
                                ->first();

                            $status = $stock ? $stock->status : 'Unavailable';
                        @endphp

                        <tr>

                            <td>
                                <strong>
                                    {{ $vaccine->Vaccine_Name }}
                                </strong>
                            </td>

                            <td>

                                @if($status === 'Available')

                                    <span class="badge bg-success">
                                        Available
                                    </span>

                                @else

                                    <span class="badge bg-danger">
                                        Unavailable
                                    </span>

                                @endif

                            </td>

                            <td>

                                <form
                                    action="{{ route('hospital.vaccine.status', $vaccine->id) }}"
                                    method="POST"
                                >

                                    @csrf

                                    @if($status === 'Available')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-danger text-dark"
                                        >
                                            Mark Unavailable
                                        </button>

                                    @else

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-success text-dark"
                                        >
                                            Mark Available
                                        </button>

                                    @endif

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="3" class="text-center py-4 text-muted">
                                No vaccines found.
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