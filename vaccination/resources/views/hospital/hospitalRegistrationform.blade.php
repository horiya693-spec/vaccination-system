<div class="card shadow-sm border-0 max-w-md mx-auto my-5">
    <div class="card-header bg-primary text-white text-center py-3">
        <h4 class="mb-0">🏥 Hospital Onboarding Registration</h4>
    </div>
    <div class="card-body p-4">
        <form action="{{ route('hospital.register.store') }}" method="POST">
            @csrf

            <!-- Hospital Official Name -->
            <div class="mb-3">
                <label for="name" class="form-label font-semibold">Hospital Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="e.g., Liaquat National Hospital" required>
            </div>

            <!-- Email Address (Used for Login Account) -->
            <div class="mb-3">
                <label for="email" class="form-label font-semibold">Official Email Address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="contact@hospital.com" required>
            </div>

            <!-- Contact Number -->
            <div class="mb-3">
                <label for="phone" class="form-label font-semibold">Phone / Helpline Number</label>
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="e.g., 021-111-XXXXXX" required>
            </div>

            <!-- Complete Physical Address -->
            <div class="mb-3">
                <label for="address" class="form-label font-semibold">Complete Address</label>
                <textarea name="address" id="address" rows="2" class="form-control" placeholder="Street, Area, City" required></textarea>
            </div>

            <!-- Account Password -->
            <div class="mb-3">
                <label for="password" class="form-label font-semibold">Account Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Minimum 8 characters" required>
            </div>

            <!-- Confirm Account Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="form-label font-semibold">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Retype password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 font-bold">Register Hospital Account</button>
        </form>
    </div>
</div>
