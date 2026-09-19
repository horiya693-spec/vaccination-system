@extends('Admin.sidebar')
@section('admin')
<div class="container">
    <div class="row text-center">
        <h1>ALL VACCINES </h1>
        <div class="col-md-8 offset-2 text-center">
       <table class="table">
        <th>Id</th>
        <th>Vaccine Name</th>
        <th>Dose Number</th>
        <th>Target Name</th>
        @foreach($data as $vaccine)
        <tr>
            <td>{{$vaccine->id}}</td>
       <td>{{$vaccine->Vaccine_Name}}</td>
       <td>{{$vaccine->Dose_Number}}</td>
       <td>{{$vaccine->Target_Age}}</td>

        </tr>
        @endforeach
       </table>
    </div>
    </div>
</div>
@endsection