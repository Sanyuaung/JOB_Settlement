@extends('layouts/app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">
    <div class="container-fluid">
        <div class="btn1">
            <a href="{{ route('userhome') }}" role="button"><span>Back</span></a>
        </div>
        <div class="table-container">
            <form class="text-center" style="color: #757575;" action="{{ route('editUpdateUser', $edituser->id) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <table id="table" class="scroll-table">
                    <tr>
                        <th scope="col">User Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Department</th>
                        <th scope="col">Status</th>
                        <th scope="col">Update</th>
                    </tr><br><br><br>
                    <tr>
                        <td><input readonly type="text" id="materialRegisterFormFirstName" class="text-center form-control"
                                name="username" placeholder="User Name" value="{{ $edituser->name }}"></td>
                        <td><input readonly type="email" id="materialRegisterFormEmail" class="text-center form-control"
                                name="email" placeholder="E-mail" value="{{ $edituser->email }}"></td>
                        <td><select name="department" class="text-center">
                                <option value="" {{ $edituser->department == '' ? 'selected' : '' }}></option>
                                <option value="Admin" {{ $edituser->department == 'Admin' ? 'selected' : '' }}>Admin
                                </option>
                                <option value="Card" {{ $edituser->department == 'Card' ? 'selected' : '' }}>Card Dept;
                                </option>
                                <option value="Settlement" {{ $edituser->department == 'Settlement' ? 'selected' : '' }}>
                                    Settlement Dept;</option>
                            </select></td>
                        <td><select name="status">
                                <option value="1" {{ $edituser->status == '1' ? 'selected' : '' }}>Approved</option>
                                <option value="0" {{ $edituser->status == '0' ? 'selected' : '' }}>Pending</option>
                            </select></td>
                        <td><button class="btn btn-sm green white-text" type="submit">Update</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
