
 @extends('parent.sidebard')
 @section('parent')
 
 
 
 
@inject('childModel', 'App\Models\Child')

      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4"> 
          <div class="page-heading p-3">
            <div class="page-heading-copy">
              <div>
                <p class="eyebrow mb-1">Overview</p>
                <a href="{{route('createchild')}}" class="btn btn-success">Add New +</a>
                <h1><!-- Check if a user is actually logged in first -->
@if(Auth::check())
    <p>Welcome, <strong>{{ Auth::user()->name }}</strong>!</p>
@endif
</h1>
                <p class="text-muted mb-0">view your child perfomance .</p>
              </div>
            </div>
          </div>
@if($children->isEmpty())
    <!-- This card shows UP ONLY IF the parent has NO children registered -->
    <div class="card m-5 border-danger">
        <h5 class="card-header text-danger">No Children Registered</h5>
        <div class="card-body">
            <h5 class="card-title">Please complete your profile</h5>
            <p class="card-text">You need to register your children to view their dashboard profiles.</p>
            <a href="{{ route('createchild') }}"><button class="btn btn-success">Register a Child Now</button></a>
        </div>
    </div>
@else
    <!-- This loop will run automatically for every child the parent has -->
    @foreach($children as $child)
        <div class="card m-5"> 
            <h5 class="card-header"> 
                <span> {{ $child->Child_Name }} </span> 
            </h5> 
            <div class="card-body"> 
                <h5 class="card-title"> Gender: {{ $child->Child_Gender }}</h5> 
                <p class="card-text fw-bold"> Date Of Birth : {{ $child->DOB }}</p> 
                
                <!-- CRITICAL: Pass the specific child's ID to the route so the system knows WHOM to view -->
                <a href="{{ route('child', $child->id) }}"><button class="btn btn-info">View Child Profile</button></a> 
            </div> 
        </div>
    @endforeach
@endif



         
        </div>
      </main>

     <!-- Footer Section -->
<<!-- Minimal Admin Footer -->
<footer class="bg-light border-top py-3 text-muted">
    <div class="container-fluid px-4">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between small">
            
            <!-- Left Side: System Information & Status -->
            <div class="mb-2 mb-md-0 d-flex align-items-center gap-3">
                <span>© 2026 <strong>LittleShield Admin</strong></span>
                <span class="text-secondary">|</span>
                <span class="d-flex align-items-center gap-1">
                    <span class="d-inline-block rounded-circle bg-success" style="width: 8px; height: 8px;"></span>
                    <span>System Online</span>
                </span>
            </div>

            <!-- Middle Side: Direct Action Tech Links -->
            <div class="mb-2 mb-md-0">
                <a href="#sys-logs" class="text-secondary text-decoration-none mx-2 hover-admin-link">System Logs</a>
                <a href="#hospital-nodes" class="text-secondary text-decoration-none mx-2 hover-admin-link">Hospital Database</a>
                <a href="#api-status" class="text-secondary text-decoration-none mx-2 hover-admin-link">API Status</a>
                <a href="mailto:sysadmin@littleshield.gov" class="text-secondary text-decoration-none mx-2 hover-admin-link">Report IT Bug</a>
            </div>

            <!-- Right Side: Environment / Version Build -->
            <div>
                <span class="badge bg-secondary-subtle text-secondary border px-2 py-1">Env: Production-v2.4</span>
            </div>

        </div>
    </div>
</footer>

<!-- Minimal style adjustments -->
<style>
    .hover-admin-link:hover {
        color: #212529 !important; /* Darkens to pure black on hover */
        text-decoration: underline !important;
    }
</style>



    </div>
    @endsection