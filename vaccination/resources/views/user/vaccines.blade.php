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

        /* NAVBAR */
        nav {
            height: 75px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 8%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .logo {
            font-size: 26px;
            font-weight: bold;
            color: #0b8f9c;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }

        nav ul li a:hover {
            color: #0b8f9c;
        }

        /* HERO */
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

        /* VACCINES SECTION */
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

        /* GRID */
        .vaccine-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        /* CARD */
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
 /* .vaccine-icon { 
            width: 65px;
            height: 65px;
            background: #e5f7f8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin-bottom: 20px;
        /* } */

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

        /* FOOTER */
        footer {
            background: #123d4d;
            color: white;
            text-align: center;
            padding: 30px;
            margin-top: 40px;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .vaccine-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            nav {
                padding: 0 5%;
            }

            nav ul {
                gap: 12px;
            }

            .hero h1 {
                font-size: 35px;
            }

            .vaccine-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">VacciCare</div>

        <ul>
            <li><a href="user#home">Home</a></li>
            <li><a href="vaccines">Vaccines</a></li>
            <li><a href="#">Hospitals</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>


    <!-- HERO -->
    <section class="hero">
        <h1>Explore Our Vaccines</h1>

        <p>
            Learn about different vaccines and the diseases they help
            protect against. Explore our comprehensive vaccine information.
        </p>
    </section>


    <!-- VACCINES -->
    <section class="vaccines">

        <div class="heading">
            <h2>Available Vaccines</h2>
            <p>Explore a wide range of vaccines</p>
        </div>


        <div class="vaccine-container">

            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/BCG.jpg') }}" alt="BCG Vaccine">
                </div>
                <h3>BCG Vaccine</h3>
                <p>
                    Helps protect against tuberculosis, especially severe
                    forms of TB in children.
                </p>
                <span class="tag">Tuberculosis</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/HEPA.jpg') }}" alt="">
                </div>
                <h3>Hepatitis B</h3>
                <p>
                    Protects against hepatitis B virus and helps prevent
                    serious liver disease.
                </p>
                <span class="tag">Hepatitis B</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
        <img src="{{ asset('Admin/assets/images/png/POLIO.jpg') }}" alt="">
                </div>
                <h3>Polio Vaccine</h3>
                <p>
                    Protects against poliovirus and helps prevent
                    poliomyelitis.
                </p>
                <span class="tag">Polio</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/DTP.jpg') }}" alt="">
                </div>
                <h3>DTP Vaccine</h3>
                <p>
                    Protects against diphtheria, tetanus and pertussis.
                </p>
                <span class="tag">DTP</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/rota.jpg') }}" alt="">
                </div>
                <h3>Rotavirus Vaccine</h3>
                <p>
                    Helps protect babies and young children from
                    rotavirus infection.
                </p>
                <span class="tag">Rotavirus</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/coco.jpg') }}" alt="">
                </div>
                <h3>Pneumococcal Vaccine</h3>
                <p>
                    Helps protect against pneumococcal diseases such as
                    pneumonia and meningitis.
                </p>
                <span class="tag">Pneumococcal</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/mea.jpg') }}" alt="">
                </div>
                <h3>Measles Vaccine</h3>
                <p>
                    Protects against measles, a highly contagious
                    viral infection.
                </p>
                <span class="tag">Measles</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/HPV.jpg') }}" alt="">
                </div>
                <h3>HPV Vaccine</h3>
                <p>
                    Helps prevent infections caused by human papillomavirus
                    and related cancers.
                </p>
                <span class="tag">HPV</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/rub.jpg') }}" alt="">
                </div>
                <h3>Rubella Vaccine</h3>
                <p>
                    Protects against rubella and helps prevent complications
                    associated with infection.
                </p>
                <span class="tag">Rubella</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/mum.jpg') }}" alt="">
                </div>
                <h3>Mumps Vaccine</h3>
                <p>
                    Helps protect against mumps, a contagious viral disease.
                </p>
                <span class="tag">Mumps</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/in.jpg') }}" alt="">
                </div>
                <h3>Influenza Vaccine</h3>
                <p>
                    Helps protect against seasonal influenza and
                    circulating flu strains.
                </p>
                <span class="tag">Influenza</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/rab.jpg') }}" alt="">
                </div>
                <h3>Rabies Vaccine</h3>
                <p>
                    Used to help prevent rabies following certain
                    animal exposures and for selected preventive situations.
                </p>
                <span class="tag">Rabies</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/ty.jpg') }}" alt="">
                </div>
                <h3>Typhoid Vaccine</h3>
                <p>
                    Helps protect against typhoid fever caused by
                    Salmonella Typhi.
                </p>
                <span class="tag">Typhoid</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/HEPA.jpg') }}" alt="">
                </div>
                <h3>Hepatitis A</h3>
                <p>
                    Helps protect against hepatitis A, a viral infection
                    affecting the liver.
                </p>
                <span class="tag">Hepatitis A</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/menin.jpg') }}" alt="">
                </div>
                <h3>Meningococcal Vaccine</h3>
                <p>
                    Helps protect against meningococcal disease, including
                    meningitis and bloodstream infections.
                </p>
                <span class="tag">Meningococcal</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/vari.jpg') }}" alt="">
                </div>
                <h3>Varicella Vaccine</h3>
                <p>
                    Protects against varicella, commonly known as chickenpox.
                </p>
                <span class="tag">Chickenpox</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/yellow.jpg') }}" alt="">
                </div>
                <h3>Yellow Fever Vaccine</h3>
                <p>
                    Helps protect against yellow fever and may be required
                    for travel to certain regions.
                </p>
                <span class="tag">Yellow Fever</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/japan.jpg') }}" alt="">
                </div>
                <h3>Japanese Encephalitis</h3>
                <p>
                    Helps protect against Japanese encephalitis in
                    areas where the disease occurs.
                </p>
                <span class="tag">JE Vaccine</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/ch.jpg') }}" alt="">
                </div>
                <h3>Cholera Vaccine</h3>
                <p>
                    Helps protect against cholera in recommended
                    populations and settings.
                </p>
                <span class="tag">Cholera</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/RSV.jpg') }}" alt="">
                </div>
                <h3>RSV Vaccine</h3>
                <p>
                    Vaccination options are available to help protect
                    recommended groups against RSV.
                </p>
                <span class="tag">RSV</span>
            </div>


            <div class="vaccine-card">
                <div class="vaccine-icon">
                    <img src="{{ asset('Admin/assets/images/png/covid.jpg') }}" alt="">
                </div>
                <h3>COVID-19 Vaccine</h3>
                <p>
                    Helps protect against severe illness caused by
                    SARS-CoV-2.
                </p>
                <span class="tag">COVID-19</span>
            </div>


        </div>
    </section>


    <footer>
        <p>© 2026 VacciCare | Vaccination Management System</p>
    </footer>

</body>
</html>