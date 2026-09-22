@extends('parent.sidebard')

@section('parent')

<div class="container py-5">

    <div class="card shadow-sm">

        <div class="card-header">
            <h4>Book Appointment</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('appointment.store') }}" method="POST">

                @csrf

                {{-- Child --}}
                <div class="mb-3">
                    <label class="form-label">Child</label>

                    <input
                        type="text"
                        class="form-control"
                        value="{{ $child->Child_Name }}"
                        readonly
                    >

                    <input
                        type="hidden"
                        name="child_id"
                        value="{{ $child->id }}"
                    >
                </div>


                {{-- Vaccine --}}
                <div class="mb-3">
                    <label class="form-label">Due Vaccine</label>

                    <input
                        type="text"
                        class="form-control"
                        value="{{ $vaccine->Vaccine_Name }}"
                        readonly
                    >

                    <input
                        type="hidden"
                        name="vaccination_id"
                        value="{{ $vaccine->id }}"
                    >
                </div>


                {{-- Hospital --}}
                <div class="mb-3">
                    <label class="form-label">Select Hospital</label>

                    <select
                        name="hospital_id"
                        class="form-select"
                        required
                    >

                        <option value="">
                            Select Available Hospital
                        </option>

                        @forelse($hospitals as $hospital)

                            <option value="{{ $hospital->id }}">
                                {{ $hospital->name }}
                            </option>

                        @empty

                            <option value="" disabled>
                                No hospital has this vaccine available
                            </option>

                        @endforelse

                    </select>
                </div>


                {{-- Appointment Date --}}
                <div class="mb-3">
                    <label class="form-label">
                        Appointment Date
                    </label>

                    <input
                        type="date" name="appointment_date" class="form-control" min="{{ date('Y-m-d') }}"required>
                </div>


                <button type="submit" class="btn btn-primary">
                    Book Appointment
                </button>

            </form>

        </div>
    </div>

</div>

@endsection