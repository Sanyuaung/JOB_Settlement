@extends('layouts/app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">

    <div class="container-fluid">
        {{-- <div class="scroll-table-container"> --}}
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="btn1">
            <a href="{{ route('home') }}" role="button"><span>Back</span></a>
        </div>
        <div class="table-container">
            <table id="table" class="scroll-table">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Department</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr><br><br><br>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->department }}</td>
                        <td>{{ $user->status == '0' ? 'Pending' : 'Approved' }}</td>
                        <td><a class="btn btn-sm green white-text" href="{{ route('edituser', $user->id) }}">Update</a></td>
                        <td><a class="btn btn-sm red white-text" href="{{ route('deleteUser', $user->id) }}"
                                onclick="return confirm('Are you sure?')">Delete</a></td>
                    </tr>
                @endforeach
            </table>
            <div class="col-md-12">
                {{ $users->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
@endsection
