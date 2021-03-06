@extends('layouts/app')
@section('content')
    @include('sweetalert::alert')

    <link href="/css/visa.css" rel="stylesheet">

    <div class="container">
        <div class="btn1">
            <a href="{{ route('showall') }}" class="btn white-text btn-indigo btn-rounded-pill float-right"
                role="button"><span>SHOW ALL</span></a>
        </div>
        <div>
            <h1 id="VISA" class="grey-text text-center">Welcome Visa Transactions</h1>
            @if (Session('success'))
                <div class="alert alert-success">
                    {{ Session('success') }}
                </div>
            @endif

            <h5 style="line-height: 250%" class="mt-4 indigo white-text text-center">
                <i class="ml-2 mt-1 float-left fab fa-cc-visa fa-2x"></i><strong>Create Transactions</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" action="{{ route('insert') }}" method="post">
                    @csrf
                    <!-- User Name -->
                    <div class="md-form mt-4">
                        {{-- <input type="date" id="materialRegisterFormEmail" class="form-control" name="settledate"> --}}
                        <input type="date" id="materialRegisterFormEmail" class="form-control" name="settledate">
                        <label for="materialRegisterFormEmail">Settlement Date&nbsp;<span class="iconify"
                                data-icon="flat-color-icons:calendar" data-width="25"></span></label>
                        @error('settledate')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Pizza Name -->
                    <div class="md-form mt-4">
                        <input type="number" step="0" id="materialRegisterFormEmail" class="form-control" name="num">
                        <label for="materialRegisterFormEmail">Number of Transactions</label>
                        @error('num')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Toppings -->
                    <div class="md-form mt-4">
                        <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control" name="usd">
                        <label for="materialRegisterFormEmail">USD Amount</label>
                        @error('usd')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Sauce -->
                    <div class="md-form mt-4">
                        <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control" name="mmk">
                        <label for="materialRegisterFormEmail">MMK Amount</label>
                        @error('mmk')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md-form mt-4">
                        <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control" name="Net">
                        <label for="materialRegisterFormEmail">Net Settlement Amount</label>
                        @error('Net')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md-form mt-4">
                        <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control"
                            name="settAmt_Nostro_USD">
                        <label for="materialRegisterFormEmail">Settlement Amount (USD) at Nostro</label>
                        @error('settAmt_Nostro_USD')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md-form mt-4">
                        <input type="date" id="materialRegisterFormEmail" class="form-control" name="fundingDate">
                        <label for="materialRegisterFormEmail">Funding Date&nbsp;<span class="iconify"
                                data-icon="flat-color-icons:calendar" data-width="25"></span></label>
                        @error('fundingDate')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Price -->
                    <div class="md-form mt-4">
                        <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control" name="rate">
                        <label for="materialRegisterFormEmail">Exchange Rate</label>
                        @error('rate')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md-form mt-4">
                        <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control"
                            name="commAmt">
                        <label for="materialRegisterFormEmail">Commissions Amount</label>
                        @error('rate')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <label for="cardType">Select Card Type : </label>
                    <select name="cardType" id="terminal">
                        <option selected></option>
                        <option value="Debit">Debit</option>
                        <option value="Credit">Credit</option>
                        <option value="Prepaid">Prepaid</option>
                    </select>
                    @error('cardType')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    {{-- <br> --}}

                    <label for="terminal">Select Currency : </label>
                    <select name="currency" id="terminal">
                        <option selected></option>
                        <option value="mmk">MMK</option>
                        <option value="usd">USD</option>
                    </select>
                    @error('currency')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    {{-- <br> --}}

                    <label for="terminal">Select Type of Transaction : </label>
                    <select name="typeOfTrans" id="terminal">
                        <option selected></option>
                        <option value="visapos">VISA_POS</option>
                        <option value="visaatm">VISA_ATM</option>
                        <option value="masterpos">Master_POS</option>
                        <option value="masteratm">Master_ATM</option>
                        <option value="upipos">UPI_POS</option>
                        <option value="upiatm">UPI_ATM</option>
                        <option value="jcbpos">JCB_POS</option>
                        <option value="jcbatm">JCB_ATM</option>
                    </select>
                    @error('terminal')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <!-- Order button -->
                    <button class="white-text btn btn-indigo btn-rounded btn-block my-4 waves-effect z-depth-0"
                        type="sumbit">
                        <h5><i class="mt-1 far fa-save fa-2x"></i><strong>&nbsp;&nbsp;Save Now</strong></h5>
                    </button>
                </form>
                <!-- Form -->
            </div>

        </div>
    @endsection
