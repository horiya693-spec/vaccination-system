@extends('parent.sidebard')
 @section('parent')
<div class="container">
        <div class="row text-center">
        <div class="col-md-10 offset-1">
            <h1>Child Deatils</h1>
  <hr><hr><hr>
<form action="#"  method="POST">
                 <div class="row">   
                  <div class="col-md-6 mt-4">
                        <label for="name"class="form-label fw-bold" >Child Full Name</label>
                        <div class="position-relative d-flex align-items-center">
                            <input type="text" class="form-control pe-5 editable-input" name="Child_Name" placeholder="Enter Name" value="{{$data->Child_Name}}" readonly>
                            <span class="position-absolute end-0 me-3 text-muted btn-edit-field" style="cursor: pointer;">

                            </span>
                        </div>
                    </div>

                     <div class="col-md-6 mt-4">
                        <label for="name" class="form-label fw-bold"> Date Of Birth</label>
                        <div class="position-relative d-flex align-items-center">
                            <input type="text" class="form-control pe-5 editable-input" name="DOB" placeholder="Enter Name" value="{{$data->DOB}}" readonly>
                            <span class="position-absolute end-0 me-3 text-muted btn-edit-field" style="cursor: pointer;">

                            </span>
                        </div>
                    </div>
       
                 <div class="col-md-6 mt-4">
                        <label for="name"class="form-label fw-bold" >Father Name</label>
                        <div class="position-relative d-flex align-items-center">
                            <input type="text" class="form-control pe-5 editable-input" name="Father_Name" placeholder="Enter Name" value="{{$data->Father_Name}}" readonly>
                            <span class="position-absolute end-0 me-3 text-muted btn-edit-field" style="cursor: pointer;">

                            </span>
                        </div>
                    </div>

                 <div class="col-md-6 mt-4">
                        <label for="name" class="form-label fw-bold" >Mother Name</label>
                        <div class="position-relative d-flex align-items-center">
                            <input type="text" class="form-control pe-5 editable-input" name="Mother_Name" placeholder="Enter Name" value="{{$data->Mother_Name}}" readonly>
                            <span class="position-absolute end-0 me-3 text-muted btn-edit-field" style="cursor: pointer;">

                            </span>
                        </div>
                    </div>   
                    
                 <div class="col-md-6 mt-4">
                        <label for="name" class="form-label fw-bold" >Child Gender</label>
                        <div class="position-relative d-flex align-items-center">
                            <input type="text" class="form-control pe-5 editable-input" name="Child_Gender" placeholder="Enter Name" value="{{$data->Child_Gender}}" readonly>
                            <span class="position-absolute end-0 me-3 text-muted btn-edit-field" style="cursor: pointer;">

                            </span>
                        </div>
                    </div>

                      <div class="col-md-6 mt-4">
    <label for="name" class="form-label fw-bold">Phone Number</label>
    <div class="position-relative d-flex align-items-center">
                       <input type="text" class="form-control pe-5 " name="Phone_number" placeholder="Enter Name" value="{{$data->Phone_Number}}" readonly>
        <span class="position-absolute end-0 me-3 " style="cursor: pointer;">
                 <a href="{{route('editchild',$data['id'])}}">

 <i  class="fa-solid fa-pen fs-5" style="color: rgb(29, 87, 163);"></i>



                </a>

</span>
    </div>
</div>
                    <div class=" col-md-12 mt-4">
    <label for="name" class="form-label fw-bold">Address</label>
    <div class="position-relative d-flex align-items-center">
           <textarea name="description "class="form-control pe-5 editable-input" id="" readonly>{{$data->Address}}</textarea>

        <span class="position-absolute end-0 me-3 text-muted btn-edit-field" style="cursor: pointer;">
          <!-- Your Icon Here -->
                <a href="{{route('editchild',$data['id'])}}">

 <i  class="fa-solid fa-pen fs-5" style="color: rgb(29, 87, 163);"></i>



                </a>

</span>
    </div>
</div>
                        
                   

                    
                 </div>
                </form>
        </div>
</div>
</div>

<script>
    document.querySelectorAll('.btn-edit-field').forEach(button => {
        button.addEventListener('click', function() {
            // Find the exact input box or textarea sitting inside this wrapper group
            const inputField = this.parentElement.querySelector('.editable-input');
            
            if(inputField) {
                // Remove the lock
                inputField.removeAttribute('readonly');
                // Target focus typing cursor into it
                inputField.focus();
                // Visual border indicator change
                inputField.style.borderColor = '#0f766e';
            }
        });
    });
</script>
@endsection
