@extends('parent.sidebard')
 @section('parent')
<div class="container">
        <div class="row text-center">
        <div class="col-md-10 offset-1">
            <h1>Child Deatils</h1>
  <hr><hr><hr>
                <form action="{{route('createchilddeatils')}}" enctype="multipart/form-data" method="POST">
                 <div class="row">
                 <div class="col-md-6 mt-4">
                        <label>Date Of Birth</label>
                        <input type="text">
                    </div>
                    <div class="col-md-6 mt-4">
                        <label>Father Name</label>
                        <input type="text">
                    </div>
                    
                    
                 <div class="col-md-6 mt-4">
                        <label>Date Of Birth</label>
                        <input type="text">
                    </div>
                    <div class="col-md-6 mt-4">
                        <label>Father Name</label>
                        <input type="text">
                    </div>
                    <div class="col-md-6 mt-4">
                        <label>Mother Name</label>
                        <input type="text">
                    </div>
                    <div class="col-md-6 mt-4">
                        <label>adress</label>
                        <input type="text"> 
                    </div>
                     <div class="col-md-12">
                        <label>Child Name</label>
                        <input type="text">
                    </div>
                </form>
        </div>
    </div>
</div>
</div>
@endsection