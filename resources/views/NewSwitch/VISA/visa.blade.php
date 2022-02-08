@extends('layouts/app')
@section('content')
<link href="/css/visa.css" rel="stylesheet">

<div class="container">
    <div class="text-center">
        {{-- <a href="{{route('download')}}" class="btn btn float-right rounded-pill" role="button">Download</a> --}}
        <a href="{{route('showall')}}" class="btn white-text btn-indigo btn-rounded-pill float-right" role="button">Show All</a>
        {{-- <a href="{{route('home')}}" class="btn white-text btn-indigo btn-rounded-pill float-left" role="button">Back</a> --}}
    </div>
    <div>
        <h1 id="welcome" class="grey-text text-center">Welcome Visa Transactions</h1>
        {{-- <img src="{{asset('images/logo.png')}}" class="img-responsive "> --}}
        {{-- <img  src="{{asset('images/logo.png')}}" class="text-center"> --}}

        @if (Session('success'))
        <div class="alert alert-success">
            {{Session('success')}}
        </div>
        @endif

    <h5 class="mt-4 card-header indigo  white-text text-center py-4">
        <strong>Create Transactions</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" action="{{route("insert")}}" method="post">
            @csrf
            <!-- User Name -->
            <div class="md-form mt-4">
                {{-- <input type="date" id="materialRegisterFormEmail" class="form-control" name="settledate"> --}}
                <input type="date" id="materialRegisterFormEmail" class="form-control" name="settledate">
                <label for="materialRegisterFormEmail">Settlement Date</label>
                @error('settledate')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <!-- Pizza Name -->
            <div class="md-form mt-4">
                <input type="number" step="0" id="materialRegisterFormEmail" class="form-control" name="num">
                <label for="materialRegisterFormEmail">Number of Transactions</label>
                @error('num')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <!-- Toppings -->
            <div class="md-form mt-4">
                <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control" name="usd">
                <label for="materialRegisterFormEmail">USD Amount</label>
                @error('usd')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <!-- Sauce -->
            <div class="md-form mt-4">
                <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control" name="mmk">
                <label for="materialRegisterFormEmail">MMK Amount</label>
                @error('mmk')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <!-- Price -->
            <div class="md-form mt-4">
                <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control" name="rate">
                <label for="materialRegisterFormEmail">Exchange Rate</label>
                @error('rate')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="md-form mt-4">
                <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control" name="commAmt">
                <label for="materialRegisterFormEmail">Commissions Amount</label>
                @error('rate')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="md-form mt-4">
                <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control" name="Debit">
                <label for="materialRegisterFormEmail">Debit</label>
                @error('Debit')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="md-form mt-4">
                <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control" name="Credit">
                <label for="materialRegisterFormEmail">Credit</label>
                @error('Credit')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="md-form mt-4">
                <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control" name="Prepaid">
                <label for="materialRegisterFormEmail">Prepaid</label>
                @error('Prepaid')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <label for="terminal">Select Type of Transaction : </label>
            <select name="typeOfTrans" id="terminal">
                <option selected></option>
                <option value="visapos">VISA_POS</option>
                <option value="visaatm">VISA_ATM</option>
                <option value="masterpos">Master_POS</option>
                <option value="masteratm">Master_ATM</option>
                <option value="upipos">UPI_POS</option>
                <option value="upiatm">UPI_ATM</option>
                <option value="jcbapos">JCB_POS</option>
                <option value="jcbatm">JCB_ATM</option>
            </select>
            @error('terminal')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <!-- Order button -->
            <button class="white-text btn btn-indigo btn-rounded btn-block my-4 waves-effect z-depth-0" type="sumbit">Save Now</button>
            {{-- <footer id="viasFot"> Copyright © 2021 San Yu Aung. All Rights Reserved.</footer> --}}

        </form>
        <!-- Form -->

    </div>

</div>

@endsection
