<nav class="navbar">
    <a href="/">VaccinePortal</a>

    <div class="nav-links">
        <!-- If the user is NOT logged in, show Login/Register -->
        @guest
            <a href="{{ route('loginform') }}" class="btn-login">Login</a>
        @endguest

        <!-- If a user IS logged in, check their role to show the right button -->
        @auth
            @if(Auth::user()->role == 'parent')
                <!-- This links directly to your protected route! -->
                <a href="{{ route('parent.dashboard') }}" class="btn-dashboard">My Dashboard</a>
            @elseif(Auth::user()->role == 'admin')
                <a href="{{ route('admin.dashboard') }}" class="btn-dashboard">Admin Panel</a>
            @elseif(Auth::user()->role == 'hospital')
                <a href="{{ route('hospital.dashboard') }}" class="btn-dashboard">Hospital Panel</a>
            @endif

            <!-- Logout Button -->
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth
    </div>
</nav>
