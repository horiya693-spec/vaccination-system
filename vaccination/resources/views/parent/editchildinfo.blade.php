@extends('parent.sidebard')
 @section('parent')
<div class="container">
        <div class="row text-center">
        <div class="col-md-10 offset-1">
            <h1>Child Deatils</h1>
  <hr><hr><hr>
<form id="editForm" action="{{route('updatechild',$data->id)}}" method="post">
   
         @csrf
                 <div class="row">   
                    <!-- Full Name -->
                    <div class="col-md-6 mt-4">
                        <label for="Child_Name" class="form-label  form fw-bold">Child Full Name</label>
                        <input type="text" class="form-control" name="Child_Name" placeholder="Enter Name" readonly value="{{$data->Child_Name}}">
                    </div>

                    <!-- Date Of Birth -->
                     <div class="col-md-6 mt-4">
                        <label for="DOB" class="form-label  form fw-bold"> Date Of Birth</label>
                        <input type="text" class="form-control" name="DOB" placeholder="Enter Name" readonly value="{{$data->DOB}}">
                    </div>
       
                    <!-- Father Name -->
                 <div class="col-md-6 mt-4">
                        <label for="Father_Name" class="form-label  form fw-bold">Father Name</label>
                        <input type="text" class="form-control" name="Father_Name" placeholder="Enter Name" readonly value="{{$data->Father_Name}}">
                    </div>

                    <!-- Mother Name -->
                 <div class="col-md-6 mt-4">
                        <label for="Mother_Name" class="form-label  form fw-bold">Mother Name</label>
                        <input type="text" class="form-control" name="Mother_Name" placeholder="Enter Name" readonly value="{{$data->Mother_Name}}">
                    </div>   
                    
                    <!-- Gender -->
                 <div class="col-md-6 mt-4">
                        <label for="Child_Gender" class="form-label  form fw-bold">Child Gender</label>
                        <input type="text" class="form-control" name="Child_Gender" placeholder="Enter Name" readonly value="{{$data->Child_Gender}}">
                    </div>

                    <!-- Phone Number -->
                    <div class="col-md-6 mt-4">
                        <label for="Phone_Number" class="form-label  form fw-bold">Phone Number</label>
                        <div class="position-relative d-flex align-items-center">
                            <input type="text" class="form-control" name="Phone_Number" placeholder="Enter Phone" value="{{$data->Phone_Number}}">
                            <span class="position-absolute end-0 me-3 text-muted">
                                <!-- Triggers immediate form submission via JavaScript directly -->
                                <a href="javascript:void(0);" onclick="document.getElementById('editForm').submit();">
                                    <i class="fa-solid fa-check" style="color: rgb(163, 29, 29);"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- Address -->
                    <div class="col-md-12 mt-4">
                        <label for="Address" class="form-label  form fw-bold">Address</label>
                        <div class="position-relative d-flex align-items-center">
                            <textarea name="Address" class="form-control">{{$data->Address}}</textarea>
                            <span class="position-absolute end-0 me-3 text-muted">
                                <!-- Triggers immediate form submission via JavaScript directly -->
                                <a href="javascript:void(0);" onclick="document.getElementById('editForm').submit();">
                                    <i class="fa-solid fa-check" style="color: rgb(163, 29, 29);"></i>
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
    // Handles dynamic input field unlocking mechanics seamlessly
    document.querySelectorAll('.btn-edit-field').forEach(button => {
        button.addEventListener('click', function() {
            const inputField = this.parentElement.querySelector('.editable-input');
            if(inputField) {
                inputField.removeAttribute('readonly');
                inputField.focus();
                inputField.style.borderColor = '#0f766e';
            }
        });
    });
</script>
@endsection
