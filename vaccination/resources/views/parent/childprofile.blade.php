 @extends('parent.sidebard')
 @section('parent')

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
  









 @endsection