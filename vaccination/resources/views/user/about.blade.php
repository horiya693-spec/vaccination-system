@extends('user.navbar')
@section('user')
<style>
    
/* =========================================
   CONTACT / ABOUT PAGE
========================================= */

.contact-hero {
    width: 100%;
    padding: 80px 8%;
    text-align: center;
    background: linear-gradient(135deg, #087f8c, #12b8b0);
    color: white;
}

.contact-hero span {
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 2px;
    margin-bottom: 12px;
    opacity: 0.9;
}

.contact-hero h1 {
    font-size: 48px;
    margin: 0 0 15px;
    font-weight: 700;
}

.contact-hero p {
    max-width: 650px;
    margin: auto;
    font-size: 17px;
    line-height: 1.7;
    opacity: 0.95;
}


/* =========================================
   CONTACT SECTION
========================================= */

.contact-section {
    width: 90%;
    max-width: 1200px;
    margin: 70px auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 70px;
    align-items: center;
}


/* LEFT SIDE */

.contact-info h2 {
    font-size: 34px;
    color: #087f8c;
    margin-bottom: 15px;
}

.contact-info > p {
    color: #666;
    line-height: 1.8;
    font-size: 16px;
    margin-bottom: 30px;
}


/* INFO BOX */

.info-box {
    display: flex;
    align-items: center;
    gap: 18px;
    padding: 18px;
    margin-bottom: 15px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 5px 18px rgba(0, 0, 0, 0.07);
    transition: 0.3s ease;
}

.info-box:hover {
    transform: translateX(5px);
    box-shadow: 0 8px 22px rgba(0, 0, 0, 0.10);
}

.info-icon {
    width: 50px;
    height: 50px;
    min-width: 50px;
    border-radius: 50%;
    background: #e5f7f7;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 23px;
}

.info-box h4 {
    margin: 0 0 5px;
    color: #333;
    font-size: 16px;
}

.info-box p {
    margin: 0;
    color: #777;
    font-size: 14px;
}


/* =========================================
   IMAGE
========================================= */

.contact-image {
    position: relative;
}

.image-wrapper {
    width: 100%;
    height: 450px;
    overflow: hidden;
    border-radius: 25px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

.image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: 0.5s ease;
}

.image-wrapper:hover img {
    transform: scale(1.05);
}


/* IMAGE CARD */

.image-card {
    position: absolute;
    bottom: -25px;
    left: 30px;
    right: 30px;
    background: white;
    padding: 20px 25px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.image-card strong {
    color: #087f8c;
    font-size: 18px;
}

.image-card p {
    margin: 5px 0 0;
    color: #777;
    font-size: 14px;
}


/* =========================================
   FAQ SECTION
========================================= */

.faq {
    background: #f4f9fa;
    padding: 80px 8%;
}

.faq-heading {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 45px;
}

.faq-heading span {
    color: #087f8c;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 2px;
}

.faq-heading h2 {
    font-size: 35px;
    color: #263238;
    margin: 12px 0;
}

.faq-heading p {
    color: #777;
    font-size: 16px;
}


/* FAQ CONTAINER */

.faq-container {
    max-width: 900px;
    margin: auto;
}

.faq-item {
    background: white;
    margin-bottom: 15px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
}


/* QUESTION */

.faq-question {
    width: 100%;
    border: none;
    background: white;
    padding: 20px 25px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    text-align: left;
    font-size: 16px;
    font-weight: 600;
    color: #333;
    cursor: pointer;
    transition: 0.3s;
}

.faq-question:hover {
    color: #087f8c;
}

.faq-question span {
    font-size: 18px;
    color: #087f8c;
    transition: 0.3s;
}


/* ANSWER */

.faq-answer {
    max-height: 0;
    overflow: hidden;
    padding: 0 25px;
    transition: all 0.35s ease;
}

.faq-answer p {
    color: #666;
    line-height: 1.7;
    padding-bottom: 20px;
    font-size: 15px;
}


/* ACTIVE FAQ */

.faq-item.active .faq-answer {
    max-height: 200px;
}

.faq-item.active .faq-question {
    color: #087f8c;
}

.faq-item.active .faq-question span {
    transform: rotate(180deg);
}


/* =========================================
   FOOTER
========================================= */

footer {
    background: #087f8c;
    color: white;
    text-align: center;
    padding: 22px;
}

footer p {
    margin: 0;
    font-size: 14px;
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 900px) {

    .contact-section {
        grid-template-columns: 1fr;
        gap: 50px;
    }

    .contact-hero h1 {
        font-size: 40px;
    }

    .image-wrapper {
        height: 400px;
    }
}


@media (max-width: 600px) {

    .contact-hero {
        padding: 60px 5%;
    }

    .contact-hero h1 {
        font-size: 32px;
    }

    .contact-hero p {
        font-size: 15px;
    }

    .contact-section {
        width: 90%;
        margin: 50px auto;
    }

    .contact-info h2 {
        font-size: 28px;
    }

    .image-wrapper {
        height: 300px;
    }

    .image-card {
        left: 15px;
        right: 15px;
    }

    .faq {
        padding: 60px 5%;
    }

    .faq-heading h2 {
        font-size: 28px;
    }
}

</style>

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
@endsection
