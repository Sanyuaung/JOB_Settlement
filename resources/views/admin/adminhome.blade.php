@extends('layouts/app')
@section('content')
<link href="/css/style.css" rel="stylesheet">

   <div class="container-fluid">
    <div class="scroll-table-container">
      @if (session('message'))
      <div class="alert alert-success">
        {{session('message')}}
      </div>
      @endif
      <div class="btn1">
        <a  href="{{route('home')}}" role="button"><span>Back</span></a>
    </div>
    {{-- <div class="scroll-table-container"> --}}
      <table id="table" class="scroll-table">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">User Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">isAdmin</th>
            <th scope="col">isApproved</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
          </tr><br><br><br>
            @foreach ($users as $users)
            <tr>
                <td>{{$users->id}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->isAdmin=='0'?"NO":"YES"}}</td>
                <td>{{$users->isApproved=='0'?"NO":"YES"}}</td>
                <td><a class="btn btn-sm green white-text" href="{{route('edituser',$users->id)}}">Update</a></td>
                <td><a class="btn btn-sm red white-text" href="{{route('deleteUser',$users->id)}}" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
            @endforeach
      </table>
   </div>
  </div>

@endsection
