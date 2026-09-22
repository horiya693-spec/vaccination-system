<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
  <title>Admin Dashboard</title>

  <link rel="stylesheet" href="{{asset('Admin/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('Admin/assets/css/style.css')}}">
</head>
<style>

  .btn{
    font-weight: bold;
    background-color:#0f766e;
    color: #ece9e9;

    }
    .card-header{
      background-color: #0f766e;
    color:white;
    }
    .bg-green {
    background-color: #d4edda !important; /* Light green color */
    border: 1px solid #c3e6cb;
    border-radius: 5px;
    padding: 10px; /* Adds space inside the box */
}
.admin-navbar {
    height: 75px;
    padding: 0 7%;
    display: flex;
    align-items: center;

    background: white;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.06);

    position: sticky;
    top: 0;
    z-index: 1000;
}

/* Sidebar Toggle - LEFT */
.sidebar-toggle {
    position: relative;
    z-index: 10;

    border: none;
    background: transparent;
    padding: 8px;

    display: flex;
    flex-direction: column;
    gap: 4px;

    cursor: pointer;
}

.sidebar-toggle span {
    display: block;
    width: 24px;
    height: 2px;
    background: #333;
    border-radius: 2px;
}

/* VacciCare - EXACT CENTER */
.logo {
    position: absolute;
    left: 50%;
    top: 50%;

    transform: translate(-50%, -50%);

    font-size: 25px;
    font-weight: bold;
    color: #087f8c;

    white-space: nowrap;
}

.logo span {
    font-size: 27px;
}

</style>
<nav class="navbar admin-navbar bg-white">

    <!-- Sidebar Toggle - Left -->
    <button
        class="sidebar-toggle"
        type="button"
        data-sidebar-toggle
        aria-controls="adminSidebar"
        aria-expanded="true"
        aria-label="Toggle sidebar"
    >
        <span></span>
        <span></span>
        <span></span>
    </button>

    <!-- Brand Name - Center -->
    <div class="logo">
        <span>💉</span> VacciCare
    </div>

</nav>





      </nav>
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>
<!-- sidebar start -->
    <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
      <div class="sidebar-header">
        <a class="brand-mark" href="{{route('parentdashboard')}}" aria-label="adminHMD dashboard">
          <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
          <span class="brand-copy">
            <span class="brand-title">My Profile</span>
            <span class="brand-subtitle"></span>
          </span>
        </a>
      </div>

      <nav class="sidebar-nav">
        <a class="nav-link active" href="{{route('dashboard')}}" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Home Page</span>
        </a>
        <a class="nav-link" href="{{route('childprofile')}}">
          <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
          <span class="nav-text">View Child Profile</span>
        </a>
        <a class="nav-link" href="{{route('allusers')}}">
          <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
          <span class="nav-text">Upcoming Vaccination</span>
        </a>
        <a class="nav-link" href="{{route('parent.vaccinations')}}">
          <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
          <span class="nav-text">Vaccination</span>
        </a>
        <a class="nav-link" href="charts.html">
          <span class="nav-icon"><i class="bi bi-bar-chart-line" aria-hidden="true"></i></span>
          <span class="nav-text">Hospitals</span>
        </a>
      </nav>

     

      <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
      </div>
    </aside>
<!-- sidebar start -->
  @yield('parent')

  </div>

  <script src="{{asset('Admin/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Admin/assets/js/main.js')}}"></script>
</body>
</html>
