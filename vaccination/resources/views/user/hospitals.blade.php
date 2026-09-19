<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

html {
    scroll-behavior: smooth;
}

body {
    background: #f5fbfb;
    color: #17324d;
}

/* ================= NAVBAR ================= */

.navbar {
    height: 75px;
    padding: 0 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: white;
    box-shadow: 0 2px 15px rgba(0,0,0,0.06);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo {
    font-size: 25px;
    font-weight: bold;
    color: #087f8c;
    white-space: nowrap;
}

.logo span {
    font-size: 27px;
}

nav {
    display: flex;
    gap: 30px;
}

nav a {
    text-decoration: none;
    color: #40566b;
    font-size: 15px;
    transition: 0.3s;
}

nav a:hover {
    color: #087f8c;
}

/* Login / Register */

.nav-buttons {
    display: flex;
    align-items: center;
    gap: 10px;
}

.login-btn,
.register-btn {
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 8px;
    transition: 0.3s;
}

.login-btn {
    color: #087f8c;
}

.register-btn {
    background: #087f8c;
    color: white;
}

.login-btn:hover {
    background: #eefafa;
}

.register-btn:hover {
    background: #05636d;
}

/* Logged in user */

.welcome-user {
    text-decoration: none;
    color: #087f8c;
    font-size: 17px;
    font-weight: 600;
    padding: 10px 18px;
    border: 1px solid #d6eeee;
    border-radius: 10px;
    background: #f5fbfb;
    transition: 0.3s;
}

.welcome-user:hover {
    color: white;
    background: #087f8c;
    border-color: #087f8c;
}

/* ================= APPOINTMENT FORM ================= */

.requirement-wrapper {
    min-height: calc(100vh - 75px);
    padding: 60px 7%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.requirement-card {
    width: 100%;
    max-width: 850px;
    background: white;
    padding: 45px;
    border-radius: 24px;
    border: 1px solid #e1eeee;
    box-shadow: 0 20px 50px rgba(8, 127, 140, 0.10);
}

/* Heading */

.requirement-heading {
    text-align: center;
    margin-bottom: 35px;
}

.requirement-heading span {
    color: #087f8c;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 3px;
}

.requirement-heading h2 {
    margin: 10px 0;
    color: #17324d;
    font-size: 32px;
}

.requirement-heading p {
    color: #718394;
    font-size: 14px;
    line-height: 1.6;
}

/* Inputs */

.input-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 22px;
    margin-bottom: 22px;
}

.input-box {
    display: flex;
    flex-direction: column;
}

.input-box label {
    margin-bottom: 8px;
    color: #294956;
    font-size: 14px;
    font-weight: 600;
}

.input-box input,
.input-box select {
    width: 100%;
    height: 52px;
    padding: 0 15px;
    border: 1px solid #d8e8e8;
    border-radius: 12px;
    background: #fbfefe;
    color: #40566b;
    font-size: 14px;
    outline: none;
    transition: 0.3s;
}

.input-box input:focus,
.input-box select:focus {
    border-color: #087f8c;
    box-shadow: 0 0 0 4px rgba(8, 127, 140, 0.08);
    background: white;
}

/* Pending Box */

.requirement-note {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 16px 18px;
    margin-top: 8px;
    border-radius: 14px;
    background: #f1fafa;
    border: 1px solid #dceeee;
}

.note-icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #087f8c;
    color: white;
    font-size: 18px;
    font-weight: bold;
}

.requirement-note h4 {
    margin-bottom: 4px;
    color: #244b58;
    font-size: 14px;
}

.requirement-note p {
    color: #71838d;
    font-size: 13px;
}

.requirement-note strong {
    color: #087f8c;
}

/* Submit Button */

.submit-btn {
    width: 100%;
    height: 54px;
    margin-top: 25px;
    border: none;
    border-radius: 13px;
    background: linear-gradient(135deg, #087f8c, #05636d);
    color: white;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.submit-btn span {
    margin-left: 8px;
    font-size: 18px;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(8, 127, 140, 0.25);
}

/* ================= RESPONSIVE ================= */

@media (max-width: 1000px) {

    nav {
        gap: 15px;
    }

    .navbar {
        padding: 0 4%;
    }
}

@media (max-width: 750px) {

    .navbar {
        height: auto;
        padding: 18px 5%;
        flex-wrap: wrap;
        gap: 15px;
    }

    nav {
        order: 3;
        width: 100%;
        justify-content: center;
        flex-wrap: wrap;
    }

    .requirement-wrapper {
        padding: 40px 5%;
    }

    .requirement-card {
        padding: 30px 22px;
    }

    .input-row {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 500px) {

    .requirement-heading h2 {
        font-size: 26px;
    }

    .welcome-user {
        font-size: 14px;
    }

    .logo {
        font-size: 21px;
    }
}
</style>


<body>

<!-- ================= NAVBAR ================= -->

<header class="navbar">

    <div class="logo">
        <span>💉</span> VacciCare
    </div>

    <nav>
        <a href="/home">Home</a>
        <a href="#services">Services</a>
        <a href="/vaccines">Vaccines</a>
        <a href="/about">About</a>
        <a href="/hospitals">Contact</a>
    </nav>


    @guest

        <div class="nav-buttons">

            <a href="/Auth/login" class="login-btn">
                Login
            </a>

            <a href="/Auth/Register" class="register-btn">
                Register
            </a>

        </div>

    @endguest


    @auth

        <a href="/profile" class="welcome-user">
            Hey, {{ Auth::user()->name }}!
        </a>

    @endauth

</header>


<!-- ================= APPOINTMENT FORM ================= -->

<div class="requirement-wrapper">

    <div class="requirement-card">

        <div class="requirement-heading">

            <span>VACCICARE</span>

            <h2>Book Your Appointment</h2>

            <p>
                Provide the required information to request
                your child's vaccination appointment.
            </p>

        </div>


        <form action="#" method="POST">

            @csrf

            <!-- Row 1 -->

            <div class="input-row">

                <div class="input-box">

                    <label for="child_name">
                        Child Name
                    </label>

                    <input
                        type="text"
                        id="child_name"
                        name="child_name"
                        placeholder="Enter child's name"
                        required
                    >

                </div>


                <div class="input-box">

                    <label for="vaccination">
                        Vaccine
                    </label>

                    <select
                        name="vaccination"
                        id="vaccination"
                        required
                    >

                        <option value="" disabled selected>
                            Select vaccine
                        </option>

                        <option value="BCG">
                            BCG Vaccine
                        </option>

                        <option value="Polio">
                            Polio Vaccine
                        </option>

                        <option value="Hepatitis B">
                            Hepatitis B Vaccine
                        </option>

                    </select>

                </div>

            </div>


            <!-- Row 2 -->

            <div class="input-row">

                <div class="input-box">

                    <label for="hospital">
                        Hospital
                    </label>

                    <select
                        name="hospital"
                        id="hospital"
                        required
                    >

                        <option value="" disabled selected>
                            Select hospital
                        </option>

                        <option value="City Hospital">
                            City Hospital
                        </option>

                        <option value="Children Hospital">
                            Children Hospital
                        </option>

                        <option value="General Hospital">
                            General Hospital
                        </option>

                    </select>

                </div>


                <div class="input-box">

                    <label for="appointment_date">
                        Preferred Date
                    </label>

                    <input
                        type="date"
                        id="appointment_date"
                        name="appointment_date"
                        required
                    >

                </div>

            </div>


            <!-- Status -->

            <div class="requirement-note">

                <div class="note-icon">
                    ✓
                </div>

                <div>

                    <h4>
                        Request Status
                    </h4>

                    <p>
                        Your appointment request will be submitted 
                        <strong>Pending</strong>.
                    </p>

                </div>

            </div>


            <!-- Button -->

            <button type="submit" class="submit-btn">

                Submit Appointment

                <span>→</span>

            </button>

        </form>

    </div>

</div>

</body>