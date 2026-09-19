@extends('Admin.sidebar')
@section('admin')
<div class="container">
    <div class="row text-center">
        <h1>All Registered Children</h1>
        <hr>
        <div class="col-md-12 offset-1 text-center">
  
<!-- Data Table -->
<table class="table">
    <thead>
        <tr>
            <th>Child Id</th>
            <th>Child Name</th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>Gender</th>
            <th>Parent ID</th>

            <th>DOB</th>
            <th>Phone Number</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach($children as $data)
            <tr>
                <!-- Jo fields aapne batayi thin, unhein is tarah table mein print karenge -->
                <td>{{$data->id}}</td>
                <td>{{ $data->Child_Name }}</td>
                <td>{{ $data->Father_Name }}</td>
                <td>{{ $data->Mother_Name }}</td>
                <td>{{ $data->Child_Gender }}</td>
                <td>{{ $data->Parent_Id }}</td>
                <td>{{ $data->DOB }}</td>
                <td>{{ $data->Phone_Number }}</td>
                <td>{{ $data->Address }}</td>
            </tr>
            <tr>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
    </div>
</div>
@endsection