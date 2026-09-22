@extends('user.navbar')

@section('user')

<style>

/* Modern Blue Theme */
:root {
    --primary-blue: #0f766e;
    --light-blue: #eff6ff;
    --border-blue: #bfdbfe;
    --hover-blue: #0f766e;
    --text-dark: #0f766e;
    --text-muted: #64748b;
}

/* PAGE */
.user-page {
    min-height: calc(100vh - 75px);
    padding: 40px 20px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    background: #f8fafc;
}

/* FORM */
.form-container {
    background: #ffffff;
    width: 100%;
    max-width: 650px;
    padding: 40px;
    margin: 20px auto;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.1);
    border: 1px solid var(--border-blue);
}

.form-header {
    text-align: center;
    margin-bottom: 30px;
}

.form-header h2 {
    color: var(--text-dark);
    margin: 0 0 8px 0;
    font-size: 28px;
    font-weight: 700;
}

.form-header p {
    color: var(--text-muted);
    margin: 0;
    font-size: 15px;
}

/* GRID */
.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.full-width {
    grid-column: span 2;
}

.form-group {
    display: flex;
    flex-direction: column;
}

label {
    color: var(--text-dark);
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 8px;
}

input,
select,
textarea {
    padding: 12px 16px;
    border: 1px solid var(--border-blue);
    border-radius: 8px;
    font-size: 15px;
    color: #334155;
    background-color: #f8fafc;
    transition: all 0.3s ease;
    outline: none;
    width: 100%;
    box-sizing: border-box;
}

input:focus,
select:focus,
textarea:focus {
    border-color: var(--primary-blue);
    background-color: #ffffff;
    box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.15);
}

textarea {
    resize: vertical;
    min-height: 80px;
}

/* BUTTON */
.btn-submit {
    background-color: var(--primary-blue);
    color: white;
    border: none;
    padding: 14px 20px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
    width: 100%;
    margin-top: 10px;
    transition: background-color 0.2s;
}

.btn-submit:hover {
    background-color: var(--hover-blue);
}

/* NAVBAR ALWAYS ON TOP */
.navbar,
.user-navbar {
    position: sticky;
    top: 0;
    z-index: 9999;
}

/* MOBILE */
@media (max-width: 500px) {

    .user-page {
        padding: 20px 12px;
    }

    .form-container {
        padding: 24px;
        margin: 10px auto;
    }

    .form-grid {
        grid-template-columns: 1fr;
    }

    .full-width {
        grid-column: span 1;
    }
}

</style>


<div class="user-page">

    <div class="form-container">

        <div class="form-header">
            <h2>Child Registration</h2>
            <p>Please enter your child's legal information to schedule vaccinations.</p>
        </div>

        <form action="{{ route('addchild') }}" method="POST">

            @csrf

            <div class="form-grid">

                <div class="form-group full-width">
                    <label for="child_name">Child Name</label>
                    <input
                        type="text"
                        id="child_name"
                        name="Child Name"
                        placeholder="Enter child's full name"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="father_name">Father's Name</label>
                    <input
                        type="text"
                        id="father_name"
                        name="Father Name"
                        placeholder="Enter father's name"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="mother_name">Mother's Name</label>
                    <input
                        type="text"
                        id="mother_name"
                        name="Mother Name"
                        placeholder="Enter mother's name"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="child_gender">Gender</label>
                    <select id="child_gender" name="Child Gender" required>
                        <option value="" disabled selected>Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input
                        type="date"
                        id="dob"
                        name="DOB"
                        max="{{ date('Y-m-d') }}"
                        required
                    >
                </div>

                <div class="form-group full-width">
                    <label for="phone_number">Contact Phone Number</label>
                    <input
                        type="tel"
                        id="phone_number"
                        name="Phone Number"
                        placeholder="e.g., +1234567890"
                        required
                    >
                </div>

                <div class="form-group full-width">
                    <label for="address">Home Address</label>
                    <textarea
                        id="address"
                        name="Address"
                        placeholder="Enter complete home address"
                        required
                    ></textarea>
                </div>

                <input
                    type="hidden"
                    name="Parent_Id"
                    value="{{ Auth::id() }}"
                >

                <div class="form-group full-width">
                    <button type="submit" class="btn-submit">
                        Save Child Profile
                    </button>
                </div>

            </div>

        </form>

    </div>

</div>

@endsection