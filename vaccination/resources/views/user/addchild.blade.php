<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Child - Vaccination Portal</title>
    <style>
        /* Modern Blue Theme Variables */
        :root {
            --primary-blue: #2563eb;    /* Deep Royal Blue */
            --light-blue: #eff6ff;      /* Soft Ice Blue Background */
            --border-blue: #bfdbfe;     /* Gentle Input Accent Border */
            --hover-blue: #1d4ed8;      /* Darker Blue for Button Hover */
            --text-dark: #1e3a8a;       /* Dark Blue for Typography */
            --text-muted: #64748b;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-blue);
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }

        .form-container {
            background: #ffffff;
            width: 100%;
            max-width: 650px;
            padding: 40px;
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

        /* 2-Column Grid Layout */
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

        input, select, textarea {
            padding: 12px 16px;
            border: 1px solid var(--border-blue);
            border-radius: 8px;
            font-size: 15px;
            color: #334155;
            background-color: #f8fafc;
            transition: all 0.3s ease;
            outline: none;
        }

        input:focus, select:focus, textarea:focus {
            border-color: var(--primary-blue);
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.15);
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

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

        /* Responsive Fix for Small Mobile Phones */
        @media (max-width: 500px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            .full-width {
                grid-column: span 1;
            }
            .form-container {
                padding: 24px;
            }
        }
    </style>
</head>
<body>

<div class="form-container">
    <div class="form-header">
        <h2>👶 Child Registration</h2>
        <p>Please enter your child's legal information to schedule vaccinations.</p>
    </div>

    <!-- Laravel Form Submission Target -->
    <form action="{{ route('addchild') }}" method="POST">
        @csrf

        <div class="form-grid">
            
            <!-- Child Name -->
            <div class="form-group full-width">
                <label for="child_name">Child Name</label>
                <input type="text" name="Child Name" placeholder="Enter child's full name" required
             
                >
     
            </div>

            <!-- Father Name -->
            <div class="form-group">
                <label for="father_name">Father's Name</label>
                <input type="text" id="father_name" name="Father Name" placeholder="Enter father's name" required>
            </div>

            <!-- Mother Name -->
            <div class="form-group">
                <label for="mother_name">Mother's Name</label>
                <input type="text" id="mother_name" name="Mother Name" placeholder="Enter mother's name" required>
            </div>

            <!-- Child Gender -->
            <div class="form-group">
                <label for="child_gender">Gender</label>
                <select id="child_gender" name="Child Gender" required>
                    <option value="" disabled selected>Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <!-- Date of Birth -->
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="DOB" max="{{ date('Y-m-d') }}" required>
            </div>

            <!-- Phone Number -->
            <div class="form-group full-width">
                <label for="phone_number">Contact Phone Number</label>
                <input type="tel" id="phone_number" name="Phone Number" placeholder="e.g., +1234567890" required>
            </div>

            <!-- Residential Address -->
            <div class="form-group full-width">
                <label for="address">Home Address</label>
                <textarea id="address" name="Address" placeholder="Enter complete home address" required></textarea>
            </div>

            <!-- Hidden Field for Logged In Parent ID -->
            <input type="hidden" name="Parent_Id" value="{{ Auth::id() }}">

            <!-- Submit Button -->
            <div class="form-group full-width">
                <button type="submit" class="btn-submit">Save Child Profile</button>
            </div>

        </div>
    </form>
</div>

</body>
</html>
