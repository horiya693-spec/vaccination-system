<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hospitals | VacciCare</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5fbfb;
            color: #17324d;
        }

        /* Navbar */

        .navbar {
            height: 75px;
            padding: 0 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
            box-shadow: 0 2px 15px rgba(0,0,0,0.06);
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #087f8c;
        }

        nav {
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: #40566b;
            font-size: 15px;
        }

        nav a:hover {
            color: #087f8c;
        }

        .welcome-user {
            text-decoration: none;
            color: #087f8c;
            font-weight: 600;
            padding: 10px 18px;
            border: 1px solid #d6eeee;
            border-radius: 10px;
        }


        /* Hospital Section */

        .hospital-section {
            padding: 70px 7%;
        }

        .heading {
            text-align: center;
            margin-bottom: 45px;
        }

        .heading span {
            color: #087f8c;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 3px;
        }

        .heading h1 {
            margin: 10px 0;
            font-size: 36px;
            color: #17324d;
        }

        .heading p {
            color: #718394;
            font-size: 14px;
        }


        /* Cards */

        .hospital-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .hospital-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #e1eeee;
            box-shadow: 0 12px 35px rgba(8,127,140,0.08);
            transition: 0.3s;
        }

        .hospital-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 18px 40px rgba(8,127,140,0.15);
        }


        /* Image */

        .hospital-image {
            height: 210px;
            overflow: hidden;
        }

        .hospital-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        /* Content */

        .hospital-content {
            padding: 23px;
        }

        .hospital-content h2 {
            font-size: 21px;
            margin-bottom: 12px;
            color: #17324d;
        }

        .location {
            color: #718394;
            font-size: 14px;
            margin-bottom: 20px;
        }


        /* Vaccines */

        .vaccine-title {
            font-size: 13px;
            font-weight: bold;
            color: #294956;
            margin-bottom: 10px;
        }

        .vaccines {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
        }

        .vaccine {
            background: #eef9f9;
            color: #087f8c;
            padding: 7px 11px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }


        /* Button */

        .appointment-btn {
            display: block;
            text-align: center;
            margin-top: 22px;
            padding: 13px;
            border-radius: 10px;
            background: #087f8c;
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: 0.3s;
        }

        .appointment-btn:hover {
            background: #05636d;
        }


        @media(max-width: 1000px) {

            .hospital-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width: 650px) {

            nav {
                display: none;
            }

            .hospital-grid {
                grid-template-columns: 1fr;
            }

            .hospital-section {
                padding: 50px 5%;
            }

        }

    </style>
</head>

<body>

    <!-- Navbar -->

    <header class="navbar">

        <div class="logo">
            💉 VacciCare
        </div>

        <nav>
            <a href="/user">Home</a>
            <a href="/vaccines">Vaccines</a>
            <a href="/hospitals">Hospitals</a>
            <a href="/about">About</a>
        </nav>

        @auth
            <a href="/profile" class="welcome-user">
                Hey, {{ Auth::user()->name }}!
            </a>
        @endauth

    </header>


    <!-- Hospitals -->

    <section class="hospital-section">

        <div class="heading">

            <span>VACCICARE</span>

            <h1>Our Vaccination Hospitals</h1>

            <p>
                Find a trusted hospital and book your vaccination appointment.
            </p>

        </div>


        <div class="hospital-grid">

            @foreach($hospitals as $hospital)

                <div class="hospital-card">

                    <div class="hospital-image">

                        <img
                            src="{{ asset('Admin/assets/images/hospitals/' . $hospital->image) }}"
                            alt="{{ $hospital->name }}"
                        >

                    </div>


                    <div class="hospital-content">

                        <h2>
                            {{ $hospital->name }}
                        </h2>

                        <div class="location">
                            📍 {{ $hospital->location }}
                        </div>


                        <div class="vaccine-title">
                            Available Vaccines
                        </div>

                        <div class="vaccines">
@foreach($hospitals as $hospital)

    <h2>{{ $hospital->name }}</h2>

    <p>{{ $hospital->location }}</p>

@endforeach

                        </div>


                        <a
                            href="{{ route('hospitals') }}"
                            class="appointment-btn"
                        >
                            Book Appointment →
                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    </section>

</body>
</html>