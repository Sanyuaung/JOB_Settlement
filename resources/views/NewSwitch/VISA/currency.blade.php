@extends('layouts/app')
@section('content')
    @include('sweetalert::alert')

    <link href="/css/visa.css" rel="stylesheet">
    <div class="container">
        <div>
            <strong class="float-left green-text">CBM Exchange Rate Latest</strong><br>
            <strong class="float-left green-text">USD - {{$data}}</strong>
            <h1 id="VISA" class="grey-text text-center">Welcome Daily Currency Rate</h1>
            @if (Session('success'))
                <div class="alert alert-success">
                    {{ Session('success') }}
                </div>
            @endif
            @if (session('already'))
                <div class="alert alert-danger">
                    {{ session('already') }}
                </div>
            @endif
            <h5 class="mt-4 card-header indigo  white-text text-center py-4">
                <strong>Add Today Currency Rate</strong>
            </h5>
            <div class="card-body px-lg-5 pt-0">

                <form class="text-center" action="{{ route('ccyinsert') }}" method="post">
                    @csrf
                    <div class="md-form mt-4">
                        {{-- <input type="date" id="materialRegisterFormEmail" class="form-control" name="settledate"> --}}
                        <input type="date" id="materialRegisterFormEmail" class="form-control" name="date">
                        <label for="materialRegisterFormEmail">Date</label>
                        @error('date')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md-form mt-4">
                        <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control" name="rate">
                        <label for="materialRegisterFormEmail">Mid Rate</label>
                        @error('rate')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <label for="ccy">Select Currency : </label>
                    <select name="ccy" id="terminal">
                        <option selected></option>
                        <option value="USD">USD</option>
                        {{-- <option value="THB">THB</option>
                        <option value="EUR">EUR</option> --}}
                    </select>
                    @error('ccy')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <button class="white-text btn btn-indigo btn-rounded btn-block my-4 waves-effect z-depth-0"
                        type="sumbit">Add Now</button>
                </form>
            </div>
        </div>
    @endsection
