@extends('layouts/app')
@section('content')
<link href="/css/style.css" rel="stylesheet">
   <div class="container-fluid">
       <div class="btn1">
           <a  href="{{route('userhome')}}" role="button"><span>Back</span></a>
        </div>
        <div class="table-container">
        <form class="text-center" style="color: #757575;" action="{{route('editUpdateUser',$edituser->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <table id="table" class="scroll-table">
          <tr>
            <th scope="col">User Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">isAdmin</th>
            <th scope="col">isApproved</th>
            <th scope="col">Card Dept;</th>
            <th scope="col">Settlement Dept;</th>
            <th scope="col">Update</th>
          </tr><br><br><br>
            <tr>
                <td><input readonly type="text" id="materialRegisterFormFirstName" class="text-center form-control" name="username" placeholder="User Name" value="{{$edituser->name}}"></td>
                <td><input readonly type="email" id="materialRegisterFormEmail" class="text-center form-control" name="email" placeholder="E-mail" value="{{$edituser->email}}"></td>
                <td><select name="isAdmin">
                    <option value="1" {{$edituser->isAdmin=="1" ? "selected" : ""}}>YES</option>
                    <option value="0" {{$edituser->isAdmin=="0" ? "selected" : ""}}>NO</option>
                </select></td>
                <td><select name="isApproved">
                    <option value="1" {{$edituser->isApproved=="1" ? "selected" : ""}}>YES</option>
                    <option value="0" {{$edituser->isApproved=="0" ? "selected" : ""}}>NO</option>
                </select></td>
                <td><select name="Card">
                    <option value="1" {{$edituser->Card=="1" ? "selected" : ""}}>YES</option>
                    <option value="0" {{$edituser->Card=="0" ? "selected" : ""}}>NO</option>
                </select></td>
                <td><select name="Settlement">
                    <option value="1" {{$edituser->Settlement=="1" ? "selected" : ""}}>YES</option>
                    <option value="0" {{$edituser->Settlement=="0" ? "selected" : ""}}>NO</option>
                </select></td>
                <td><button class="btn btn-sm green white-text" type="submit">Update</button></td>
            </tr>
      </table>
      </form>
    </div>
</div>

@endsection
