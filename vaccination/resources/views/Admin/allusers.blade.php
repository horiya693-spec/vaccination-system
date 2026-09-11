@extends('Admin.sidebar')
@section('admin')


    <div class="container">
            <div class="row text-center p-3">
                <h1>ALL PARENTS </h1>
                <div class="col-md-10 offset-1">

                  <table class="table">
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                
                    <tr>
                        @foreach($data as $user)
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                    
                        <td>
                            <a href="{{route('edituser',$user['id'])}}">edit</a>
                            <a href="{{route('deleteuser',$user['id'])}}">delete</a>

                        </td>




                    </tr>
@endforeach                
                  </table>
                </div>
            </div>
@endsection