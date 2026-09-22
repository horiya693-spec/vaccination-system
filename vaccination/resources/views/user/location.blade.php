@extends('user.navbar')
@section('user')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hospitals - Vaccination System</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f8fb;
            color: #263238;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #087f8c, #0aa6a6);
            padding: 25px 8%;
            color: white;
            text-align: center;
        }

        .header h1 {
            font-size: 38px;
            margin-bottom: 8px;
        }

        .header p {
            font-size: 17px;
            opacity: 0.95;
        }

        /* Search */
        .search-box {
            width: 85%;
            max-width: 700px;
            margin: 30px auto;
            display: flex;
        }

        .search-box input {
            width: 100%;
            padding: 15px 20px;
            border: 1px solid #ddd;
            border-radius: 30px;
            outline: none;
            font-size: 16px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        /* Container */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding-bottom: 50px;
        }

        .section-title {
            text-align: center;
            margin: 20px 0 30px;
        }

        .section-title h2 {
            color: #087f8c;
            font-size: 30px;
        }

        .section-title p {
            color: #777;
            margin-top: 8px;
        }

        /* Cards */
        .hospital-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .hospital-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.09);
            transition: 0.3s;
        }

        .hospital-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 28px rgba(0,0,0,0.15);
        }

        .hospital-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .hospital-content {
            padding: 20px;
        }

        .hospital-content h3 {
            color: #087f8c;
            font-size: 21px;
            margin-bottom: 12px;
        }

        .location {
            color: #555;
            font-size: 15px;
            margin-bottom: 12px;
            line-height: 1.5;
        }

        .description {
            color: #777;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 18px;
        }

        .btn {
            display: inline-block;
            background: #087f8c;
            color: white;
            text-decoration: none;
            padding: 11px 20px;
            border-radius: 25px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #065d67;
        }

        /* Footer */
        .footer {
            background: #087f8c;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }

        @media(max-width: 600px) {
            .header h1 {
                font-size: 30px;
            }

            .hospital-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <div class="header">
        <h1>Our Hospitals</h1>
        <p>Find vaccination and healthcare facilities across Pakistan</p>
    </div>

   

    <div class="container">

        <div class="section-title">
            <h2>Hospitals in Pakistan</h2>
            <p>Choose a hospital near your location</p>
        </div>

        <div class="hospital-grid" id="hospitalGrid">

            <!-- Aga Khan -->
            <div class="hospital-card">
                <img
                    src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?auto=format&fit=crop&w=900&q=80"
                    alt="Aga Khan University Hospital"
                >

                <div class="hospital-content">
                    <h3>Aga Khan University Hospital</h3>

                    <div class="location">
                        📍 Stadium Road, Karachi, Pakistan
                    </div>

                    <div class="description">
                        A major healthcare and teaching hospital serving
                        patients in Karachi and across Pakistan.
                    </div>

                    <a
                        href="https://www.google.com/maps/search/?api=1&query=Aga+Khan+University+Hospital+Karachi"
                        target="_blank"
                        class="btn"
                    >
                        View Location
                    </a>
                </div>
            </div>


            <!-- Shifa -->
            <div class="hospital-card">
                <img
                    src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=900&q=80"
                    alt="Shifa International Hospital"
                >

                <div class="hospital-content">
                    <h3>Shifa International Hospital</h3>

                    <div class="location">
                        📍 H-8/4, Islamabad, Pakistan
                    </div>

                    <div class="description">
                        A major healthcare facility providing a wide range
                        of medical and surgical specialties.
                    </div>

                    <a
                        href="https://www.google.com/maps/search/?api=1&query=Shifa+International+Hospital+Islamabad"
                        target="_blank"
                        class="btn"
                    >
                        View Location
                    </a>
                </div>
            </div>


            <!-- Shaukat Khanum Lahore -->
            <div class="hospital-card">
                <img
                    src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=900&q=80"
                    alt="Shaukat Khanum Hospital Lahore"
                >

                <div class="hospital-content">
                    <h3>Shaukat Khanum Hospital</h3>

                    <div class="location">
                        📍 Johar Town, Lahore, Pakistan
                    </div>

                    <div class="description">
                        Shaukat Khanum Memorial Cancer Hospital and
                        Research Centre in Lahore.
                    </div>

                    <a
                        href="https://www.google.com/maps/search/?api=1&query=Shaukat+Khanum+Hospital+Lahore"
                        target="_blank"
                        class="btn"
                    >
                        View Location
                    </a>
                </div>
            </div>


            <!-- Indus Karachi -->
            <div class="hospital-card">
                <img
                    src="https://images.unsplash.com/photo-1587351021759-3e566b6af7cc?auto=format&fit=crop&w=900&q=80"
                    alt="Indus Hospital Karachi"
                >

                <div class="hospital-content">
                    <h3>Indus Hospital</h3>

                    <div class="location">
                        📍 Korangi Crossing, Karachi, Pakistan
                    </div>

                    <div class="description">
                        Indus Hospital & Health Network provides
                        healthcare services through its hospital network.
                    </div>

                    <a
                        href="https://www.google.com/maps/search/?api=1&query=Indus+Hospital+Korangi+Karachi"
                        target="_blank"
                        class="btn"
                    >
                        View Location
                    </a>
                </div>
            </div>


            <!-- Indus Lahore -->
            <div class="hospital-card">
                <img
                    src="https://images.unsplash.com/photo-1538108149393-fbbd81895907?auto=format&fit=crop&w=900&q=80"
                    alt="Indus Hospital Lahore"
                >

                <div class="hospital-content">
                    <h3>Indus Hospital Lahore</h3>

                    <div class="location">
                        📍 Jubilee Town, Lahore, Pakistan
                    </div>

                    <div class="description">
                        Indus Hospital & Health Network facility serving
                        patients in Lahore.
                    </div>

                    <a
                        href="https://www.google.com/maps/search/?api=1&query=Indus+Hospital+Lahore"
                        target="_blank"
                        class="btn"
                    >
                        View Location
                    </a>
                </div>
            </div>


            <!-- Shaukat Khanum Peshawar -->
            <div class="hospital-card">
                <img
                    src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&w=900&q=80"
                    alt="Shaukat Khanum Hospital Peshawar"
                >

                <div class="hospital-content">
                    <h3>Shaukat Khanum Hospital</h3>

                    <div class="location">
                        📍 Hayatabad, Peshawar, Pakistan
                    </div>

                    <div class="description">
                        Shaukat Khanum Memorial Cancer Hospital and
                        Research Centre in Peshawar.
                    </div>

                    <a
                        href="https://www.google.com/maps/search/?api=1&query=Shaukat+Khanum+Hospital+Peshawar"
                        target="_blank"
                        class="btn"
                    >
                        View Location
                    </a>
                </div>
            </div>

        </div>
    </div>


    <!-- Footer -->
    <div class="footer">
        <p>© 2026 Vaccination System | Pakistan</p>
    </div>


    <!-- Search Script -->
    <script>
        function searchHospitals() {

            let input = document
                .getElementById("searchHospital")
                .value
                .toLowerCase();

            let cards = document
                .getElementById("hospitalGrid")
                .getElementsByClassName("hospital-card");

            for (let i = 0; i < cards.length; i++) {

                let text = cards[i]
                    .innerText
                    .toLowerCase();

                if (text.includes(input)) {
                    cards[i].style.display = "";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }
    </script>

</body>
</html>
@endsection
