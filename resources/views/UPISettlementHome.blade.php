@extends('layouts.app')
@section('content')
    @include('sweetalert::alert')

    <link href="/css/style.css" rel="stylesheet">

    <div class="container mt-3 p-4">
        <h1 id="MPU" class="text-center">Welcome UPI Settlement File</h1>
        <form class=" border border-light p-5" action="{{ route('UPIupload') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (session('mpuerror'))
                <div class="alert alert-danger">
                    {{ session('mpuerror') }}
                </div>
            @endif

            @if (session('nodata'))
                <div class="alert alert-danger">
                    {{ session('nodata') }}
                </div>
            @endif
            <div class="input-group mb-5">
                <div class="btn3">
                    <button type="submit"><span>UPI Upload&nbsp;<i class="fas fa-upload"></i></span></button>
                </div>
                <input type="file" name="upi" class="form-control mt-2">
            </div>

        </form>
    </div>
@endsection
