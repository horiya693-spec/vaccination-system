<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination System</title>

   
</head>

<body>

<nav class="navbar">
    <div class="logo">VacciCare</div>

    <div class="nav-links">
        <a href="{{ url('/user') }}">Home</a>
        <a href="{{ url('/user/about') }}">About</a>
        <a href="{{ url('/user/vaccines') }}">Vaccines</a>
        <a href="/login" class="login-btn">Login</a>
    </div>
</nav>

<section class="hero">
    <div class="hero-content">
        <h1>Protect Your Family With Vaccination</h1>

        <p>
            Stay protected with safe, reliable and accessible
            vaccination services for you and your family.
        </p>

        <div class="hero-buttons">
            <a href="{{ url('/user/vaccines') }}" class="btn">
                Explore Vaccines
            </a>

            <a href="{{ url('/user/about') }}" class="btn-outline">
                Learn More
            </a>
        </div>
    </div>
</section>

<section class="section">
    <h2>Why Vaccination Matters</h2>

    <p class="section-text">
        Vaccination helps protect individuals and communities
        from preventable diseases and keeps families healthier.
    </p>

    <div class="cards">

        <div class="card">
            <div class="icon">🛡️</div>
            <h3>Protection</h3>
            <p>Vaccines help protect against serious diseases.</p>
        </div>

        <div class="card">
            <div class="icon">👨‍👩‍👧‍👦</div>
            <h3>Family Safety</h3>
            <p>Keep your loved ones protected and healthy.</p>
        </div>

        <div class="card">
            <div class="icon">🏥</div>
            <h3>Easy Access</h3>
            <p>Find vaccination services easily and conveniently.</p>
        </div>

    </div>
</section>

<section class="info-section">
    <div>
        <h2>Vaccination Made Simple</h2>

        <p>
            Our vaccination system helps parents and users
            learn about vaccines and manage their vaccination needs.
        </p>

        <a href="{{ url('/user/about') }}" class="btn">
            About Our System
        </a>
    </div>
</section>

<footer>
    <h3>VacciCare</h3>
    <p>Making vaccination simple, safe and accessible.</p>
    <p>© 2026 Vaccination System</p>
</footer>

</body>
</html>