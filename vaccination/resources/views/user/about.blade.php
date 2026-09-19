
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us | Vaccicare</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f7fbff;
            color: #172b4d;
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

        /* ================= HERO ================= */

        .contact-hero {
            text-align: center;
            padding: 70px 20px 55px;
            background: linear-gradient(135deg, #84c5b9, #f8fbff);
        }

        .contact-hero span {
            color: #087f8c;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .contact-hero h1 {
            font-size: 42px;
            margin: 12px 0;
        }

        .contact-hero p {
            max-width: 650px;
            margin: auto;
            color: #68778d;
            line-height: 1.7;
        }

        /* ================= CONTACT SECTION ================= */

        .contact-section {
            padding: 70px 8%;
            display: grid;
            grid-template-columns: 1fr 1.3fr;
            gap: 50px;
            max-width: 1200px;
            margin: auto;
        }

        /* Contact Information */

        .contact-info h2 {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .contact-info > p {
            color: #68778d;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .info-box {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 22px;
        }

        .info-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #e7f3ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .info-box h4 {
            margin-bottom: 5px;
            font-size: 16px;
        }

        .info-box p {
            color: #68778d;
            font-size: 14px;
        }
/* ======conact===== */
   .contact-image {
    position: relative;
    min-height: 480px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.image-wrapper {
    width: 90%;
    height: 430px;
    border-radius: 25px;
    overflow: hidden;
    background: #eaf5ff;
    box-shadow: 0 15px 40px rgba(36, 118, 216, 0.12);
}

.image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* Floating Card */

.image-card {
    position: absolute;
    bottom: 25px;
    left: 0;

    display: flex;
    align-items: center;
    gap: 12px;

    background: white;
    padding: 16px 22px;
    border-radius: 14px;

    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
}

.image-card > span {
    width: 42px;
    height: 42px;
    border-radius: 50%;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #e8f4ff;
    font-size: 20px;
}

.image-card strong {
    display: block;
    color: #172b4d;
    font-size: 15px;
    margin-bottom: 4px;
}

.image-card p {
    margin: 0;
    color: #718096;
    font-size: 12px;
}

        /* ================= FAQ ================= */

        .faq {
            padding: 80px 8%;
            background: white;
        }

        .faq-heading {
            text-align: center;
            margin-bottom: 45px;
        }

        .faq-heading span {
            color: #2476d8;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .faq-heading h2 {
            font-size: 35px;
            margin: 10px 0;
        }

        .faq-heading p {
            color: #68778d;
        }

        .faq-container {
            max-width: 850px;
            margin: auto;
        }

        .faq-item {
            border: 1px solid #e2eaf2;
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
        }

        .faq-question {
            width: 100%;
            padding: 20px;
            background: white;
            border: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: left;
            font-size: 16px;
            font-weight: 600;
            color: #172b4d;
            cursor: pointer;
        }

        .faq-question span {
            font-size: 24px;
            color: #2476d8;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: 0.3s ease;
        }

        .faq-answer p {
            padding: 0 20px 20px;
            color: #68778d;
            line-height: 1.6;
        }

        .faq-item.active .faq-answer {
            max-height: 150px;
        }

        /* ================= FOOTER ================= */

        footer {
            background: #172b4d;
            color: white;
            text-align: center;
            padding: 25px;
        }

        footer p {
            font-size: 14px;
            opacity: 0.8;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 800px) {

            .nav-links {
                gap: 15px;
            }

            .contact-hero h1 {
                font-size: 32px;
            }

            .contact-section {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>

<body>

   <!-- Navbar -->
    <header class="navbar">
        <div class="logo">
            <span>💉</span> VacciCare
        </div>

        <nav>
            <a href="home">Home</a>
            <a href="#services">Services</a>
            <a href="vaccines">Vaccines</a>
            <a href="about">About</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="nav-buttons">
            <a href="Auth/login" class="login-btn">Login</a>
            <a href="Auth/Register" class="signup-btn">Register</a>
        </div>
    </header>
    <!-- ================= CONTACT HERO ================= -->

    <section class="contact-hero">

        <span>GET IN TOUCH</span>

        <h1>About Us</h1>

        <p>
            Have a question or need help? We are here to assist you.
            Send us a message and our team will get back to you.
        </p>

    </section>


    <!-- ================= CONTACT SECTION ================= -->

    <section class="contact-section">

        <!-- Contact Information -->

        <div class="contact-info">

            <h2>Let's Talk</h2>

            <p>
                Whether you have a question about Vaccicare, need help
                with your account, or want to learn more about our system,
                feel free to contact us.
            </p>


            <div class="info-box">

                <div class="info-icon">📍</div>

                <div>
                    <h4>Address</h4>
                    <p>Healthcare Center, Karachi, Pakistan</p>
                </div>

            </div>


            <div class="info-box">

                <div class="info-icon">📧</div>

                <div>
                    <h4>Email</h4>
                    <p>support@vaccicare.com</p>
                </div>

            </div>


            <div class="info-box">

                <div class="info-icon">📞</div>

                <div>
                    <h4>Phone</h4>
                    <p>+92 300 1234567</p>
                </div>

            </div>


            <div class="info-box">

                <div class="info-icon">🕐</div>

                <div>
                    <h4>Working Hours</h4>
                    <p>Monday - Friday, 9:00 AM - 5:00 PM</p>
                </div>

            </div>

        </div>


        <!-- Contact Form -->

    <div class="contact-image">

    <div class="image-wrapper">
        <img src="{{ asset('Admin/assets/images/png/about.jpg') }}" alt="Contact Vaccicare">
    </div>

    <div class="image-card">
        
        <div>
            <strong>We’re Here For You</strong>
            <p>Feel free to reach out anytime.</p>
        </div>
    </div>

</div>

    </section>


    <!-- ================= FAQ ================= -->

    <section class="faq" id="faq">

        <div class="faq-heading">

            <span>FAQ</span>

            <h2>Frequently Asked Questions</h2>

            <p>
                Find answers to some common questions about Vaccicare.
            </p>

        </div>


        <div class="faq-container">


            <div class="faq-item">

                <button class="faq-question">
                    What is Vaccicare?
                    <span>↓</span>
                </button>

                <div class="faq-answer">
                    <p>
                        Vaccicare is a vaccination management system
                        designed to help patients and healthcare providers
                        manage vaccination information easily.
                    </p>
                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">
                    How can I book a vaccination?
                    <span>↓</span>
                </button>

                <div class="faq-answer">
                    <p>
                        You can select a vaccine, choose an available
                        healthcare provider, and schedule your vaccination
                        through the system.
                    </p>
                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">
                    Can I view my vaccination history?
                    <span>↓</span>
                </button>

                <div class="faq-answer">
                    <p>
                        Yes. Registered patients can view their vaccination
                        history and records through their account.
                    </p>
                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">
                    How do I know which vaccines I need?
                    <span>↓</span>
                </button>

                <div class="faq-answer">
                    <p>
                        Recommended vaccines can depend on factors such as
                        age and vaccination history. A healthcare provider
                        can provide personalized guidance.
                    </p>
                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">
                    Is my vaccination information secure?
                    <span>↓</span>
                </button>

                <div class="faq-answer">
                    <p>
                        Vaccicare is designed to protect vaccination
                        information and provide access to authorized users.
                    </p>
                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">
                    How can I contact Vaccicare support?
                    <span>↓</span>
                </button>

                <div class="faq-answer">
                    <p>
                        You can contact our support team using the contact
                        form or the contact information provided on this page.
                    </p>
                </div>

            </div>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer>

        <p>
            © 2026 Vaccicare. All Rights Reserved.
        </p>

    </footer>


    <!-- ================= FAQ JAVASCRIPT ================= -->

    <script>

        const questions = document.querySelectorAll(".faq-question");

        questions.forEach(question => {

            question.addEventListener("click", () => {

                const item = question.parentElement;

                document.querySelectorAll(".faq-item").forEach(faq => {

                    if (faq !== item) {
                        faq.classList.remove("active");
                    }

                });

                item.classList.toggle("active");

            });

        });

    </script>

</body>
</html>
