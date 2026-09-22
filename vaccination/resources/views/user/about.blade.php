@extends('user.navbar')
@section('user')

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
