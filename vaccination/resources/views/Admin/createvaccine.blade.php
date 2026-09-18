
@extends('Admin.sidebar')
@section('admin')


<div class="container mt-5" style="max-width: 500px;">
    <div class="card shadow">
        <div class="card-header bg-dark text-white text-center">
            <h4>💉 Add New Official Vaccine</h4>
        </div>
        <div class="card-body p-4">

            <!-- Success Notification Alert Badge -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.vaccine.store') }}" method="POST">
                @csrf

                <!-- Vaccine Name Text Field Input -->
                <div class="mb-3">
                    <label for="vaccine_name" class="form-label">Vaccine Name:</label>
                    <input type="text" name="vaccine_name" id="vaccine_name" class="form-control" placeholder="e.g., Pentavalent" required>
                </div>

                <!-- Dose Number Select Dropdown -->
                <div class="mb-3">
                    <label for="dose_number" class="form-label">Dose Number:</label>
                    <select name="dose_number" id="dose_number" class="form-select" required>
                        <option value="Single Dose">Single Dose</option>
                        <option value="Dose 1">Dose 1</option>
                        <option value="Dose 2">Dose 2</option>
                        <option value="Dose 3">Dose 3</option>
                        <option value="Booster">Booster</option>
                    </select>
                </div>

                <!-- Target Age Context Duration Selection Field -->
                <div class="mb-4">
                    <label for="target_age" class="form-label">Target Age Duration:</label>
                    <input type="text" name="target_age" id="target_age" class="form-control" placeholder="e.g., At Birth, 6 Weeks, 9 Months" required>
                </div>

                <!-- Submit Database Commit Action Button Switch -->
                <button type="submit" class="btn btn-dark w-100">Upload Vaccine to System</button>
            </form>
            
        </div>
    </div>
</div>
@endsection
