<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VacciCare - Vaccination Management System</title>

   
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
/* public/css/style.css */

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
    background: #ffffff;
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


/* Hero */

.hero {
    min-height: 650px;
    padding: 70px 8%;
    display: flex;
    align-items: center;
background-image: url("{{ asset('Admin/assets/images/png/vacc1.jpg') }}");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.hero-content {
    width: 52%;
}

.badge {
    display: inline-block;
    background: #dff5f5;
    color: #087f8c;
    padding: 9px 16px;
    border-radius: 30px;
    font-size: 14px;
    margin-bottom: 20px;
}

.hero h1 {
    font-size: 58px;
    line-height: 1.1;
    margin-bottom: 25px;
}

.hero h1 span {
    color: #087f8c;
}

.hero p {
    color: #f8f9f9;
    font-size: 17px;
    line-height: 1.8;
    max-width: 600px;
}

.hero-buttons {
    display: flex;
    gap: 15px;
    margin-top: 30px;
}

.primary-btn,
.secondary-btn {
    padding: 14px 25px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
}

.primary-btn {
    background: #087f8c;
    color: white;
}

.secondary-btn {
    border: 1px solid #087f8c;
    color: #087f8c;
}

.hero-stats {
    display: flex;
    gap: 50px;
    margin-top: 45px;
}

.hero-stats div {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.hero-stats strong {
    font-size: 25px;
    color: #17324d;
}

.hero-stats span {
    color: #718394;
}


/* Hero Image */

.hero-image {
    width: 40%;
    height: 450px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.circle {
    width: 350px;
    height: 350px;
    border-radius: 50%;
    background: #cdeff1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.vaccine-icon {
    font-size: 150px;
    transform: rotate(-25deg);
}

.floating-card {
    position: absolute;
    background: white;
    padding: 15px 20px;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    font-weight: bold;
}

.card-one {
    top: 80px;
    right: 20px;
    color: #087f8c;
}

.card-two {
    bottom: 80px;
    left: 20px;
    color: #087f8c;
}


/* General Sections */

.services,
.vaccines {
    padding: 90px 8%;
}

.section-heading {
    text-align: center;
    max-width: 700px;
    margin: auto;
}

.section-heading span,
.about-content span,
.contact span {
    color: #087f8c;
    font-size: 13px;
    font-weight: bold;
    letter-spacing: 2px;
}

.section-heading h2 {
    font-size: 38px;
    margin: 15px 0;
}

.section-heading p {
    color: #718394;
    line-height: 1.7;
}


/* Services */

.service-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
    margin-top: 50px;
}

.service-card {
    padding: 30px 25px;
    border-radius: 15px;
    background: white;
    border: 1px solid #e5eeee;
    transition: 0.3s;

}
 .service-card img{
width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.08);
}

.service-icon {
    width: 55px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #e1f6f6;
    border-radius: 12px;
    font-size: 25px;
    margin-bottom: 20px;
}

.service-card h3 {
    margin-bottom: 12px;
}

.service-card p {
    color: #718394;
    line-height: 1.6;
    font-size: 14px;
    margin-bottom: 20px;
}

.service-card a {
    color: #087f8c;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
}


/* Vaccines */

.vaccines {
    background: #f5fbfb;
}

.vaccine-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-top: 45px;
}

.vaccine-card {
    background: white;
   
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}


.vaccine-top {
    width: 100%;
    height: 180px;
    overflow: hidden;
    border-radius: 15px 15px 0 0;
    font-size: 50px;
    margin-bottom: 15px;
}

.vaccine-top img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.vaccine-card h3 {
    margin-bottom: 10px;
}

.vaccine-card p {
    color: #718394;
    margin-bottom: 20px;
}

.vaccine-card button {
    border: none;
    background: #087f8c;
    color: white;
    padding: 11px 20px;
    border-radius: 7px;
    cursor: pointer;
}

.vaccine-card button:hover {
    background: #05636d;
}


/* About */

.about {
    padding: 100px 8%;
    display: flex;
    align-items: center;
    gap: 100px;
}

.about-image {
    width: 45%;
    display: flex;
    justify-content: center;
    
}

.about-circle {
    width: 330px;
    height: 330px;
    border-radius: 50%;
    background: #e0f5f5;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 130px;
    background-image: url("{{ asset('Admin/assets/images/png/logocircle.webp') }}");
    background-position:center;
    background-size:cover ;
}

.about-content {
    width: 50%;
}

.about-content h2 {
    font-size: 40px;
    margin: 15px 0 20px;
}

.about-content > p {
    color: #718394;
    line-height: 1.8;
}

.about-list {
    margin: 25px 0;
}

.about-list p {
    margin: 12px 0;
    color: #40566b;
}


/* CTA */

.cta {
    padding: 80px 10%;
    text-align: center;
    background: #087f8c;
    color: white;
}

.cta h2 {
    font-size: 38px;
    margin-bottom: 15px;
}

.cta p {
    margin-bottom: 30px;
}

.cta-btn {
    display: inline-block;
    padding: 14px 28px;
    background: white;
    color: #087f8c;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
}


/* Contact */

.contact {
    padding: 80px 8%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.contact h2 {
    font-size: 35px;
    margin: 12px 0;
}

.contact p {
    color: #718394;
    line-height: 1.7;
}

.contact-info p {
    margin: 12px 0;
}


/* Footer */

footer {
    padding: 30px 8%;
    background: #102c40;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footer-logo {
    font-size: 22px;
    font-weight: bold;
}

footer p {
    color: #b5c3cc;
    font-size: 13px;
}

.social {
    display: flex;
    gap: 15px;
}

.social a {
    color: #b5c3cc;
    text-decoration: none;
}


/* Responsive */

@media (max-width: 900px) {

    nav {
        display: none;
    }

    .hero {
        flex-direction: column;
        text-align: center;
    }

    .hero-content,
    .about-content {
        width: 100%;
    }

    .hero h1 {
        font-size: 42px;
    }

    .hero-buttons,
    .hero-stats {
        justify-content: center;
    }

    .hero-image {
        width: 100%;
        margin-top: 50px;
    }

    .service-container {
        grid-template-columns: repeat(2, 1fr);
    }

    .vaccine-container {
        grid-template-columns: 1fr;
    }

    .about {
        flex-direction: column;
    }

    .about-image {
        width: 100%;
    }

    .contact,
    footer {
        flex-direction: column;
        gap: 25px;
        text-align: center;
    }
}

@media (max-width: 550px) {

    .navbar {
        padding: 0 5%;
    }

    .nav-buttons .login-btn {
        display: none;
    }

    .hero {
        padding: 50px 5%;
    }

    .hero h1 {
        font-size: 35px;
    }

    .hero-stats {
        gap: 20px;
    }

    .circle {
        width: 260px;
        height: 260px;
    }

    .service-container {
        grid-template-columns: 1fr;
    }

    .section-heading h2,
    .about-content h2 {
        font-size: 30px;
    }

    .about {
        padding: 70px 5%;
    }

    .about-circle {
        width: 250px;
        height: 250px;
        font-size: 90px;
    }
}
</style>
<body>

    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">
            <span>💉</span> VacciCare
        </div>

        <nav>
            <a href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#vaccines">Vaccines</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="nav-buttons">
            <a href="Auth/login" class="login-btn">Login</a>
            <a href="Auth/Register" class="signup-btn">Register</a>
        </div>
    </header>


    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <span class="badge"> Your Health, Our Priority</span>

            <h1>
                Protecting Lives<br>
                Through <span>Vaccination</span>
            </h1>

            <p>
                A simple and reliable vaccination management system
                that helps patients, hospitals, and healthcare providers
                manage vaccinations efficiently.
            </p>

            <div class="hero-buttons">
                <a href="#" class="primary-btn">Get Started →</a>
                <a href="#about" class="secondary-btn">Learn More</a>
            </div>

            <div class="hero-stats">
                <div>
                    <strong>10K+</strong>
                    <span>Patients</span>
                </div>

                <div>
                    <strong>50+</strong>
                    <span>Hospitals</span>
                </div>

                <div>
                    <strong>25+</strong>
                    <span>Vaccines</span>
                </div>
            </div>
        </div>

        <div class="hero-image">
            <div class="circle">
                <div class="vaccine-icon">💉</div>
            </div>

            <div class="floating-card card-one">
                ✓ Vaccination Safe
            </div>

            <div class="floating-card card-two">
                🛡️ Health Protected
            </div>
        </div>
    </section>


    <!-- Services -->
    <section class="services" id="services">
        <div class="section-heading">
            <span>OUR SERVICES</span>
            <h2>Everything You Need for Better Vaccination</h2>
            <p>
                Manage your vaccination journey easily with our
                comprehensive healthcare services.
            </p>
        </div>

        <div class="service-container">

            <div class="service-card">
                <div class="service-icon">📅</div>
                <h3>Vaccination Schedule</h3>
                <p>
                    Keep track of your vaccination dates and
                    never miss an important dose.
                </p>
                <a href="#">Learn More →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">🏥</div>
                <h3>Find Hospitals</h3>
                <p>
                    Find nearby hospitals and vaccination
                    centers easily.
                </p>
                <a href="#">Find Hospital →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">💊</div>
                <h3>Vaccine Information</h3>
                <p>
                    Get useful information about available
                    vaccines and their doses.
                </p>
                <a href="vaccines">View Vaccines →</a>
            </div>

            <div class="service-card">
              <img src="{{ asset('Admin/assets/images/png/kote.jpg') }}" alt="">
        </div>
    </section>


    <!-- Vaccines -->
    <section class="vaccines" id="vaccines">

        <div class="section-heading">
            <span>VACCINES</span>
            <h2>Common Vaccines</h2>
            <p>Learn about some of the important vaccines.</p>
        </div>

        <div class="vaccine-container">

            <div class="vaccine-card">
                <div class="vaccine-top">
                <img src="{{ asset('Admin/assets/images/png/BCG.jpg') }}" alt="">
                </div>
                <h3>BCG Vaccine</h3>
                <p>Helps protect against tuberculosis.</p>
                <button onclick="showInfo('BCG Vaccine')">
                    View Details
                </button>
            </div>

            <div class="vaccine-card">
                <div class="vaccine-top">
                    <img src="{{ asset('Admin/assets/images/png/POLIO.jpg') }}" alt="">
                </div>
                <h3>Polio Vaccine</h3>
                <p>Helps protect children from polio.</p>
                <button onclick="showInfo('Polio Vaccine')">
                    View Details
                </button>
            </div>

            <div class="vaccine-card">
                <div class="vaccine-top">
                    <img src="{{ asset('Admin/assets/images/png/HEPA.jpg') }}" alt="">
                </div>
                <h3>Hepatitis B</h3>
                <p>Helps protect against hepatitis B infection.</p>
                <button onclick="showInfo('Hepatitis B Vaccine')">
                    View Details
                </button>
            </div>

        </div>
    </section>


    <!-- About -->
    <section class="about" id="about">
        <div class="about-image">
            <div class="about-circle">
                
            </div>
        </div>

        <div class="about-content">
            <span>ABOUT VACCICARE</span>

            <h2>
                Making Vaccination Management Simple & Reliable
            </h2>

            <p>
                VacciCare is a vaccination management system designed
                to connect patients, hospitals, and healthcare
                administrators on one platform.
            </p>

            <div class="about-list">
                <p>✓ Easy vaccination management</p>
                <p>✓ Hospital and vaccine information</p>
                <p>✓ Appointment tracking</p>
                <p>✓ Secure patient records</p>
            </div>

            <a href="#" class="primary-btn">Explore System →</a>
        </div>
    </section>


    <!-- CTA -->
    <section class="cta">
        <h2>Take Control of Your Vaccination Journey</h2>
        <p>
            Stay informed, stay protected, and keep your vaccination
            records organized.
        </p>

        <a href="#" class="cta-btn">Get Started Today →</a>
    </section>


    <!-- Contact -->
    <section class="contact" id="contact">
        <div>
            <span>CONTACT US</span>
            <h2>Have Questions?</h2>
            <p>
                Our team is here to help you with your vaccination
                management needs.
            </p>
        </div>

        <div class="contact-info">
            <p>📧 support@vaccicare.com</p>
            <p>📞 +92 300 1234567</p>
            <p>📍 Healthcare Center</p>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="footer-logo">
         VacciCare
        </div>

        <p>
            © 2026 VacciCare. Vaccination Management System.
        </p>

        <div class="social">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
        </div>
    </footer>


    <script src="{{ asset('js/script.js') }}"></script>

</body>
<script>

</script>
</html>