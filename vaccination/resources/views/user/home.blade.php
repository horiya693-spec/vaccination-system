@extends('user.navbar')
@section('user')




    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
           

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
                <a href="/hospitals" class="primary-btn">Get Started →</a>
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
                <h3>book appointment</h3>
                <p>
                    Find nearby hospitals and vaccination
                    centers easily.
                </p>
                <a href="hospitals">book appointment →</a>
            </div>
            <div class="service-card">
                <div class="service-icon">🏥</div>
                <h3>hospitals</h3>
                <p>
                    Keep track of your vaccination dates and
                    never miss an important dose.
                </p>
                <a href="location">Learn More →</a>
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

            <a href="about" class="primary-btn">Explore System →</a>
        </div>
    </section>


    <!-- CTA -->
    <section class="cta">
        <h2>Take Control of Your Vaccination Journey</h2>
        <p>
            Stay informed, stay protected, and keep your vaccination
            records organized.
        </p>

        <a href="Auth/Register" class="cta-btn">Get Started Today →</a>
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
@endsection