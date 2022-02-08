@extends('layouts/app')
@section('content')
<link href="/css/visa.css" rel="stylesheet">

<div class="container">
    <div class="text-center">
        {{-- <a href="{{route('showall')}}" class="btn white-text btn-indigo btn-rounded-pill float-right" role="button">Show All</a> --}}
    </div>
    <div>
        <h1 id="welcome" class="grey-text text-center">Welcome ATM Performance Reports</h1>
        @if (Session('success'))
        <div class="alert alert-success">
            {{Session('success')}}
        </div>
        @endif

    <h5 class="mt-4 card-header indigo  white-text text-center py-4">
        <strong>Select Report Date</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" action="{{route("print")}}" method="post">
            @csrf
            <!-- User Name -->
            <div class="md-form mt-4">
                {{-- <input type="date" id="materialRegisterFormEmail" class="form-control" name="settledate"> --}}
                <input type="date" id="materialRegisterFormEmail" class="form-control" name="start">
                <label for="materialRegisterFormEmail">Start Date</label>
                @error('start')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="md-form mt-4">
                {{-- <input type="date" id="materialRegisterFormEmail" class="form-control" name="settledate"> --}}
                <input type="date" id="materialRegisterFormEmail" class="form-control" name="end">
                <label for="materialRegisterFormEmail">End Date</label>
                @error('end')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <!-- Order button -->
            <button class="white-text btn btn-indigo btn-rounded btn-block my-4 waves-effect z-depth-0" type="sumbit">Print Now</button>
            {{-- <footer id="viasFot"> Copyright © 2021 San Yu Aung. All Rights Reserved.</footer> --}}

        </form>
        <!-- Form -->

    </div>

</div>

@endsection
