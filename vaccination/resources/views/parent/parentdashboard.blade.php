
 @extends('parent.sidebard')
 @section('parent')
 
 
 
 

      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4"> 
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Overview</p>
                <h1><!-- Check if a user is actually logged in first -->
@if(Auth::check())
    <p>Welcome, <strong>{{ Auth::user()->name }}</strong>!</p>
@endif
</h1>
                <p class="text-muted mb-0">view your child perfomance .</p>
              </div>
            </div>
          </div>
<div class="card m-5">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
<button class="btn  btn-primary">view your child profile</button>
  </div>
</div>

         
        </div>
      </main>

      <footer class="admin-footer">
        <div class="container-fluid px-3 px-lg-4">
          <span>Copyright 2026 adminHMD. <br> Developed by <a target="_blank" class="fw-bold text-success" href="https://github.com/HasanMahmudDev">Md. Hasan Mahmud</a> • Distributed by <a target="_blank" class="fw-bold text-success" href="https://themewagon.com">ThemeWagon</a> </span>
          <span>Professional dashboard template.</span>
        </div>
      </footer>
    </div>
    @endsection