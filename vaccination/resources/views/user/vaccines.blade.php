

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>More Vaccines</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5fafb;
            color: #173b4d;
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

        .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .login-btn,
        .signup-btn {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
        }

        .login-btn {
            color: #087f8c;
        }

        .signup-btn {
            background: #087f8c;
            color: white;
        }


        /* ================= HERO ================= */

        .hero {
            text-align: center;
            padding: 70px 20px;
            background: linear-gradient(135deg, #dff7f8, #ffffff);
        }

        .hero h1 {
            font-size: 45px;
            color: #087f8c;
            margin-bottom: 15px;
        }

        .hero p {
            max-width: 700px;
            margin: auto;
            color: #666;
            font-size: 18px;
            line-height: 1.7;
        }


        /* ================= VACCINES ================= */

        .vaccines {
            padding: 60px 8%;
        }

        .heading {
            text-align: center;
            margin-bottom: 45px;
        }

        .heading h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .heading p {
            color: #777;
        }

        .vaccine-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }


        /* ================= CARD ================= */

        .vaccine-card {
            background: white;
            padding: 30px;
            border-radius: 16px;
            border: 1px solid #e4eeee;
            box-shadow: 0 5px 18px rgba(0,0,0,0.07);
            transition: 0.3s;
        }

        .vaccine-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }

        .vaccine-icon {
            width: 100%;
            height: 180px;
            overflow: hidden;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .vaccine-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .vaccine-card h3 {
            font-size: 22px;
            color: #087f8c;
            margin-bottom: 12px;
        }

        .vaccine-card p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 18px;
        }

        .tag {
            display: inline-block;
            background: #edf8fa;
            color: #087f8c;
            padding: 7px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }


        /* ================= VIEW DETAILS BUTTON ================= */

        .details-btn {
            display: block;
            width: 100%;
            margin-top: 18px;
            padding: 12px 18px;
            border: none;
            border-radius: 10px;
            background: #087f8c;
            color: white;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .details-btn:hover {
            background: #065f69;
            transform: translateY(-2px);
            box-shadow: 0 5px 12px rgba(8,127,140,0.25);
        }


        /* ================= MODAL ================= */

        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: 2000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal-content {
            position: relative;
            width: 100%;
            max-width: 570px;
            max-height: 85vh;
            overflow-y: auto;
            background: white;
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.25);
            animation: popup 0.3s ease;
        }

        .modal-content h2 {
            color: #087f8c;
            font-size: 28px;
            margin-bottom: 10px;
            padding-right: 30px;
        }

        .modal-line {
            width: 60px;
            height: 4px;
            background: #087f8c;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .modal-content p {
            color: #666;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .detail-box {
            background: #f1fafb;
            padding: 15px 17px;
            border-radius: 12px;
            margin-top: 12px;
            color: #40566b;
            line-height: 1.6;
        }

        .detail-box strong {
            display: block;
            color: #087f8c;
            margin-bottom: 4px;
        }

        .close-btn {
            position: absolute;
            right: 18px;
            top: 13px;
            width: 38px;
            height: 38px;
            border: none;
            border-radius: 50%;
            background: #edf8fa;
            color: #087f8c;
            font-size: 25px;
            cursor: pointer;
            transition: 0.3s;
        }

        .close-btn:hover {
            background: #087f8c;
            color: white;
            transform: rotate(90deg);
        }

        @keyframes popup {

            from {
                opacity: 0;
                transform: translateY(-25px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }

        }


        /* ================= FOOTER ================= */

        footer {
            background: #123d4d;
            color: white;
            text-align: center;
            padding: 30px;
            margin-top: 40px;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 900px) {

            .vaccine-container {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 600px) {

            nav {
                padding: 0 5%;
                gap: 12px;
            }

            .navbar {
                padding: 0 5%;
            }

            nav a {
                font-size: 12px;
            }

            .nav-buttons a {
                padding: 8px 10px;
                font-size: 12px;
            }

            .hero h1 {
                font-size: 35px;
            }

            .vaccine-container {
                grid-template-columns: 1fr;
            }

            .modal-content {
                padding: 28px 22px;
            }

        }

    </style>

</head>


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

        <div class="nav-buttons">
            <a href="Auth/login" class="login-btn">Login</a>
            <a href="Auth/Register" class="signup-btn">Register</a>
        </div>

    </header>

@extends('user.sidebar')
@section('user')




    <!-- ================= HERO ================= -->

    <section class="hero">

        <h1>Explore Our Vaccines</h1>

        <p>
            Learn about different vaccines and the diseases they help
            protect against. Explore our comprehensive vaccine information.
        </p>

    </section>



    <!-- ================= VACCINES ================= -->

    <section class="vaccines">

        <div class="heading">

            <h2>Available Vaccines</h2>

            <p>Explore a wide range of vaccines</p>

        </div>


        <div class="vaccine-container">


            <!-- BCG -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/BCG.jpg') }}"
                         alt="BCG Vaccine">
                </div>

                <h3>BCG Vaccine</h3>

                <p>
                    Helps protect against tuberculosis, especially severe
                    forms of TB in children.
                </p>

                <span class="tag">Tuberculosis</span>

                <button class="details-btn"
                        onclick="showDetails('bcg')">
                    View Details
                </button>

            </div>



            <!-- HEPATITIS B -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/HEPA.jpg') }}"
                         alt="Hepatitis B Vaccine">
                </div>

                <h3>Hepatitis B</h3>

                <p>
                    Protects against hepatitis B virus and helps prevent
                    serious liver disease.
                </p>

                <span class="tag">Hepatitis B</span>

                <button class="details-btn"
                        onclick="showDetails('hepatitisB')">
                    View Details
                </button>

            </div>



            <!-- POLIO -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/POLIO.jpg') }}"
                         alt="Polio Vaccine">
                </div>

                <h3>Polio Vaccine</h3>

                <p>
                    Protects against poliovirus and helps prevent
                    poliomyelitis.
                </p>

                <span class="tag">Polio</span>

                <button class="details-btn"
                        onclick="showDetails('polio')">
                    View Details
                </button>

            </div>



            <!-- DTP -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/DTP.jpg') }}"
                         alt="DTP Vaccine">
                </div>

                <h3>DTP Vaccine</h3>

                <p>
                    Protects against diphtheria, tetanus and pertussis.
                </p>

                <span class="tag">DTP</span>

                <button class="details-btn"
                        onclick="showDetails('dtp')">
                    View Details
                </button>

            </div>



            <!-- ROTAVIRUS -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/rota.jpg') }}"
                         alt="Rotavirus Vaccine">
                </div>

                <h3>Rotavirus Vaccine</h3>

                <p>
                    Helps protect babies and young children from
                    rotavirus infection.
                </p>

                <span class="tag">Rotavirus</span>

                <button class="details-btn"
                        onclick="showDetails('rotavirus')">
                    View Details
                </button>

            </div>



            <!-- PNEUMOCOCCAL -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/coco.jpg') }}"
                         alt="Pneumococcal Vaccine">
                </div>

                <h3>Pneumococcal Vaccine</h3>

                <p>
                    Helps protect against pneumococcal diseases such as
                    pneumonia and meningitis.
                </p>

                <span class="tag">Pneumococcal</span>

                <button class="details-btn"
                        onclick="showDetails('pneumococcal')">
                    View Details
                </button>

            </div>



            <!-- MEASLES -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/mea.jpg') }}"
                         alt="Measles Vaccine">
                </div>

                <h3>Measles Vaccine</h3>

                <p>
                    Protects against measles, a highly contagious
                    viral infection.
                </p>

                <span class="tag">Measles</span>

                <button class="details-btn"
                        onclick="showDetails('measles')">
                    View Details
                </button>

            </div>



            <!-- HPV -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/HPV.jpg') }}"
                         alt="HPV Vaccine">
                </div>

                <h3>HPV Vaccine</h3>

                <p>
                    Helps prevent infections caused by human papillomavirus
                    and related cancers.
                </p>

                <span class="tag">HPV</span>

                <button class="details-btn"
                        onclick="showDetails('hpv')">
                    View Details
                </button>

            </div>



            <!-- RUBELLA -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/rub.jpg') }}"
                         alt="Rubella Vaccine">
                </div>

                <h3>Rubella Vaccine</h3>

                <p>
                    Protects against rubella and helps prevent complications
                    associated with infection.
                </p>

                <span class="tag">Rubella</span>

                <button class="details-btn"
                        onclick="showDetails('rubella')">
                    View Details
                </button>

            </div>



            <!-- MUMPS -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/mum.jpg') }}"
                         alt="Mumps Vaccine">
                </div>

                <h3>Mumps Vaccine</h3>

                <p>
                    Helps protect against mumps, a contagious viral disease.
                </p>

                <span class="tag">Mumps</span>

                <button class="details-btn"
                        onclick="showDetails('mumps')">
                    View Details
                </button>

            </div>



            <!-- INFLUENZA -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/in.jpg') }}"
                         alt="Influenza Vaccine">
                </div>

                <h3>Influenza Vaccine</h3>

                <p>
                    Helps protect against seasonal influenza and
                    circulating flu strains.
                </p>

                <span class="tag">Influenza</span>

                <button class="details-btn"
                        onclick="showDetails('influenza')">
                    View Details
                </button>

            </div>



            <!-- RABIES -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/rab.jpg') }}"
                         alt="Rabies Vaccine">
                </div>

                <h3>Rabies Vaccine</h3>

                <p>
                    Used to help prevent rabies following certain
                    animal exposures and for selected preventive situations.
                </p>

                <span class="tag">Rabies</span>

                <button class="details-btn"
                        onclick="showDetails('rabies')">
                    View Details
                </button>

            </div>



            <!-- TYPHOID -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/ty.jpg') }}"
                         alt="Typhoid Vaccine">
                </div>

                <h3>Typhoid Vaccine</h3>

                <p>
                    Helps protect against typhoid fever caused by
                    Salmonella Typhi.
                </p>

                <span class="tag">Typhoid</span>

                <button class="details-btn"
                        onclick="showDetails('typhoid')">
                    View Details
                </button>

            </div>



            <!-- HEPATITIS A -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/HEPA.jpg') }}"
                         alt="Hepatitis A Vaccine">
                </div>

                <h3>Hepatitis A</h3>

                <p>
                    Helps protect against hepatitis A, a viral infection
                    affecting the liver.
                </p>

                <span class="tag">Hepatitis A</span>

                <button class="details-btn"
                        onclick="showDetails('hepatitisA')">
                    View Details
                </button>

            </div>



            <!-- MENINGOCOCCAL -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/menin.jpg') }}"
                         alt="Meningococcal Vaccine">
                </div>

                <h3>Meningococcal Vaccine</h3>

                <p>
                    Helps protect against meningococcal disease, including
                    meningitis and bloodstream infections.
                </p>

                <span class="tag">Meningococcal</span>

                <button class="details-btn"
                        onclick="showDetails('meningococcal')">
                    View Details
                </button>

            </div>



            <!-- VARICELLA -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/vari.jpg') }}"
                         alt="Varicella Vaccine">
                </div>

                <h3>Varicella Vaccine</h3>

                <p>
                    Protects against varicella, commonly known as chickenpox.
                </p>

                <span class="tag">Chickenpox</span>

                <button class="details-btn"
                        onclick="showDetails('varicella')">
                    View Details
                </button>

            </div>



            <!-- YELLOW FEVER -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/yellow.jpg') }}"
                         alt="Yellow Fever Vaccine">
                </div>

                <h3>Yellow Fever Vaccine</h3>

                <p>
                    Helps protect against yellow fever and may be required
                    for travel to certain regions.
                </p>

                <span class="tag">Yellow Fever</span>

                <button class="details-btn"
                        onclick="showDetails('yellowFever')">
                    View Details
                </button>

            </div>



            <!-- JAPANESE ENCEPHALITIS -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/japan.jpg') }}"
                         alt="Japanese Encephalitis Vaccine">
                </div>

                <h3>Japanese Encephalitis</h3>

                <p>
                    Helps protect against Japanese encephalitis in
                    areas where the disease occurs.
                </p>

                <span class="tag">JE Vaccine</span>

                <button class="details-btn"
                        onclick="showDetails('japaneseEncephalitis')">
                    View Details
                </button>

            </div>



            <!-- CHOLERA -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/ch.jpg') }}"
                         alt="Cholera Vaccine">
                </div>

                <h3>Cholera Vaccine</h3>

                <p>
                    Helps protect against cholera in recommended
                    populations and settings.
                </p>

                <span class="tag">Cholera</span>

                <button class="details-btn"
                        onclick="showDetails('cholera')">
                    View Details
                </button>

            </div>



            <!-- RSV -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/RSV.jpg') }}"
                         alt="RSV Vaccine">
                </div>

                <h3>RSV Vaccine</h3>

                <p>
                    Vaccination options are available to help protect
                    recommended groups against RSV.
                </p>

                <span class="tag">RSV</span>

                <button class="details-btn"
                        onclick="showDetails('rsv')">
                    View Details
                </button>

            </div>



            <!-- COVID -->

            <div class="vaccine-card">

                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/covid.jpg') }}"
                         alt="COVID-19 Vaccine">
                </div>

                <h3>COVID-19 Vaccine</h3>

                <p>
                    Helps protect against severe illness caused by
                    SARS-CoV-2.
                </p>

                <span class="tag">COVID-19</span>

                <button class="details-btn"
                        onclick="showDetails('covid')">
                    View Details
                </button>

            </div>


        </div>

    </section>



    <!-- ================= DETAILS MODAL ================= -->

    <div id="detailsModal" class="modal">

        <div class="modal-content">

            <button class="close-btn" onclick="closeDetails()">
                &times;
            </button>

            <h2 id="modalTitle"></h2>

            <div class="modal-line"></div>

            <p id="modalDescription"></p>

            <div class="detail-box">

                <strong>Disease / Protection Against</strong>

                <span id="modalDisease"></span>

            </div>

            <div class="detail-box">

                <strong>Protection</strong>

                <span id="modalProtection"></span>

            </div>

            <div class="detail-box">

                <strong>Important Information</strong>

                <span id="modalInfo"></span>

            </div>

        </div>

    </div>



    <!-- ================= FOOTER ================= -->

    <footer>

        <p>
            © 2026 VacciCare | Vaccination Management System
        </p>

    </footer>



    <!-- ================= JAVASCRIPT ================= -->

    <script>

        const vaccineDetails = {

            bcg: {
                title: "BCG Vaccine",
                description:
                    "Helps protect against tuberculosis, especially severe forms of tuberculosis in children.",
                disease: "Tuberculosis",
                protection:
                    "Helps protect against severe forms of tuberculosis.",
                info:
                    "BCG vaccination is commonly used as part of childhood immunization programs."
            },

            hepatitisB: {
                title: "Hepatitis B Vaccine",
                description:
                    "Protects against hepatitis B virus and helps prevent serious liver disease.",
                disease: "Hepatitis B",
                protection:
                    "Helps prevent hepatitis B virus infection.",
                info:
                    "Hepatitis B vaccination is an important part of routine immunization."
            },

            polio: {
                title: "Polio Vaccine",
                description:
                    "Protects against poliovirus and helps prevent poliomyelitis.",
                disease: "Polio",
                protection:
                    "Helps prevent poliovirus infection and poliomyelitis.",
                info:
                    "Polio vaccination is an important part of efforts to prevent the spread of poliovirus."
            },

            dtp: {
                title: "DTP Vaccine",
                description:
                    "Protects against diphtheria, tetanus and pertussis.",
                disease: "Diphtheria, Tetanus and Pertussis",
                protection:
                    "Helps protect against three serious bacterial diseases.",
                info:
                    "DTP-containing vaccines are commonly included in childhood vaccination schedules."
            },

            rotavirus: {
                title: "Rotavirus Vaccine",
                description:
                    "Helps protect babies and young children from rotavirus infection.",
                disease: "Rotavirus",
                protection:
                    "Helps protect young children against rotavirus disease.",
                info:
                    "Rotavirus vaccination is given to infants according to recommended schedules."
            },

            pneumococcal: {
                title: "Pneumococcal Vaccine",
                description:
                    "Helps protect against pneumococcal diseases such as pneumonia and meningitis.",
                disease: "Pneumococcal Disease",
                protection:
                    "Helps protect against infections caused by pneumococcal bacteria.",
                info:
                    "Pneumococcal vaccination can help prevent serious pneumococcal infections."
            },

            measles: {
                title: "Measles Vaccine",
                description:
                    "Protects against measles, a highly contagious viral infection.",
                disease: "Measles",
                protection:
                    "Helps prevent measles infection and its complications.",
                info:
                    "Measles vaccination is commonly provided as part of combination vaccination programs."
            },

            hpv: {
                title: "HPV Vaccine",
                description:
                    "Helps prevent infections caused by human papillomavirus and related cancers.",
                disease: "Human Papillomavirus (HPV)",
                protection:
                    "Helps protect against HPV infections associated with certain cancers.",
                info:
                    "HPV vaccination is most effective when given according to recommended age-based schedules."
            },

            rubella: {
                title: "Rubella Vaccine",
                description:
                    "Protects against rubella and helps prevent complications associated with infection.",
                disease: "Rubella",
                protection:
                    "Helps prevent rubella infection.",
                info:
                    "Rubella vaccination is often included in combination vaccines."
            },

            mumps: {
                title: "Mumps Vaccine",
                description:
                    "Helps protect against mumps, a contagious viral disease.",
                disease: "Mumps",
                protection:
                    "Helps prevent mumps infection.",
                info:
                    "Mumps vaccination is commonly provided as part of combination vaccination."
            },

            influenza: {
                title: "Influenza Vaccine",
                description:
                    "Helps protect against seasonal influenza and circulating flu strains.",
                disease: "Influenza",
                protection:
                    "Helps reduce the risk of influenza illness.",
                info:
                    "Influenza vaccines are updated periodically to address circulating influenza viruses."
            },

            rabies: {
                title: "Rabies Vaccine",
                description:
                    "Used to help prevent rabies following certain animal exposures and for selected preventive situations.",
                disease: "Rabies",
                protection:
                    "Helps prevent rabies infection.",
                info:
                    "Rabies vaccination may be used after certain animal exposures or for selected preventive situations."
            },

            typhoid: {
                title: "Typhoid Vaccine",
                description:
                    "Helps protect against typhoid fever caused by Salmonella Typhi.",
                disease: "Typhoid Fever",
                protection:
                    "Helps protect against typhoid fever.",
                info:
                    "Typhoid vaccination may be recommended for people at increased risk of typhoid exposure."
            },

            hepatitisA: {
                title: "Hepatitis A Vaccine",
                description:
                    "Helps protect against hepatitis A, a viral infection affecting the liver.",
                disease: "Hepatitis A",
                protection:
                    "Helps prevent hepatitis A infection.",
                info:
                    "Hepatitis A vaccination can provide protection against hepatitis A virus."
            },

            meningococcal: {
                title: "Meningococcal Vaccine",
                description:
                    "Helps protect against meningococcal disease, including meningitis and bloodstream infections.",
                disease: "Meningococcal Disease",
                protection:
                    "Helps protect against certain meningococcal infections.",
                info:
                    "Meningococcal vaccination may be recommended for specific age groups and people at increased risk."
            },

            varicella: {
                title: "Varicella Vaccine",
                description:
                    "Protects against varicella, commonly known as chickenpox.",
                disease: "Chickenpox",
                protection:
                    "Helps prevent varicella infection.",
                info:
                    "Varicella vaccination helps reduce the risk of chickenpox and related complications."
            },

            yellowFever: {
                title: "Yellow Fever Vaccine",
                description:
                    "Helps protect against yellow fever and may be required for travel to certain regions.",
                disease: "Yellow Fever",
                protection:
                    "Helps protect against yellow fever virus infection.",
                info:
                    "Yellow fever vaccination may be relevant for travel to or residence in certain areas."
            },

            japaneseEncephalitis: {
                title: "Japanese Encephalitis Vaccine",
                description:
                    "Helps protect against Japanese encephalitis in areas where the disease occurs.",
                disease: "Japanese Encephalitis",
                protection:
                    "Helps reduce the risk of Japanese encephalitis infection.",
                info:
                    "Vaccination may be recommended for people living in or traveling to areas where Japanese encephalitis occurs."
            },

            cholera: {
                title: "Cholera Vaccine",
                description:
                    "Helps protect against cholera in recommended populations and settings.",
                disease: "Cholera",
                protection:
                    "Helps reduce the risk of cholera disease.",
                info:
                    "Cholera vaccination may be recommended in specific settings and populations."
            },

            rsv: {
                title: "RSV Vaccine",
                description:
                    "Vaccination options are available to help protect recommended groups against RSV.",
                disease: "Respiratory Syncytial Virus (RSV)",
                protection:
                    "Helps protect recommended groups against serious RSV disease.",
                info:
                    "RSV prevention options depend on age, health status and current vaccination recommendations."
            },

            covid: {
                title: "COVID-19 Vaccine",
                description:
                    "Helps protect against severe illness caused by SARS-CoV-2.",
                disease: "COVID-19",
                protection:
                    "Helps reduce the risk of severe COVID-19 illness.",
                info:
                    "COVID-19 vaccination recommendations can change as public-health guidance is updated."
            }

        };


        /* ================= SHOW DETAILS ================= */

        function showDetails(vaccine) {

            const data = vaccineDetails[vaccine];

            if (!data) {
                return;
            }

            document.getElementById("modalTitle").textContent =
                data.title;

            document.getElementById("modalDescription").textContent =
                data.description;

            document.getElementById("modalDisease").textContent =
                data.disease;

            document.getElementById("modalProtection").textContent =
                data.protection;

            document.getElementById("modalInfo").textContent =
                data.info;

            document.getElementById("detailsModal").style.display =
                "flex";

            document.body.style.overflow = "hidden";
        }


        /* ================= CLOSE DETAILS ================= */

        function closeDetails() {

            document.getElementById("detailsModal").style.display =
                "none";

            document.body.style.overflow = "auto";
        }


        /* ================= CLOSE WHEN CLICKING OUTSIDE ================= */

        window.onclick = function(event) {

            const modal =
                document.getElementById("detailsModal");

            if (event.target === modal) {

                closeDetails();

            }

        };


        /* ================= CLOSE WITH ESC ================= */

        document.addEventListener("keydown", function(event) {

            if (event.key === "Escape") {

                closeDetails();

            }

        });

    </script>


</body>


</html>
</html>
@endsection

