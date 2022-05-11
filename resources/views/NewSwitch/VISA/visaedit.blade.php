@extends('layouts/app')
@section('content')
    @include('sweetalert::alert')

    <link href="/css/visa.css" rel="stylesheet">

    <div class="container">
        <div>
            <h1 id="VISA" class="grey-text text-center">Welcome Visa Edit</h1>
            @if (Session('success'))
                <div class="alert alert-success">
                    {{ Session('success') }}
                </div>
            @endif

            <h5 style="line-height: 250%" class="mt-4 indigo white-text text-center">
                <i class="ml-2 mt-1 float-left fab fa-cc-visa fa-2x"></i><strong>Update Transactions</strong>
            </h5>
            <div class="card-body px-lg-5 pt-0">

                <form class="text-center" action="{{ route('visaupdate', $edittran->id) }}" method="post">
                    @csrf
                    <div class="md-form mt-4">
                        <input readonly type="number" step="0" id="materialRegisterFormEmail" class="form-control"
                            name="settledate" value="{{ $edittran->settleDate }}">
                        <label for="materialRegisterFormEmail">Settlement Date&nbsp;<span class="iconify"
                                data-icon="flat-color-icons:calendar" data-width="25"></span></label>
                        @error('num')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md-form mt-4">
                        <input readonly type="number" step="0" id="materialRegisterFormEmail" class="form-control"
                            name="num" value="{{ $edittran->noTrans }}">
                        <label for="materialRegisterFormEmail">Number of
                            Transactions</label>
                        @error('num')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md-form mt-4">
                        <input readonly type="number" step="0.01" id="materialRegisterFormEmail" class="form-control"
                            name="usd" value="{{ $edittran->usdAmt }}">
                        <label for="materialRegisterFormEmail">USD Amount</label>
                        @error('usd')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md-form mt-4">
                        <input readonly type="number" step="0.01" id="materialRegisterFormEmail" class="form-control"
                            name="mmk" value="{{ $edittran->mmkAmt }}">
                        <label for="materialRegisterFormEmail">MMK Amount</label>
                        @error('mmk')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md-form mt-4">
                        <input readonly type="number" step="0.01" id="materialRegisterFormEmail" class="form-control"
                            name="Net" value="{{ $edittran->netAmt }}">
                        <label for="materialRegisterFormEmail">Net Settlement Amount</label>
                        @error('Net')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md-form mt-4">
                        <input type="number" step="0.01" id="materialRegisterFormEmail" class="form-control"
                            name="settAmt_Nostro_USD" value="{{ $edittran->settAmt_Nostro_USD }}" placeholder="0.00">
                        <label for="materialRegisterFormEmail">Settlement Amount (USD) at Nostro</label>
                        @error('settAmt_Nostro_USD')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md-form mt-4">
                        <input name="fundingDate" id="materialRegisterFormEmail" class="form-control"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            type="number" maxlength="8" placeholder="YYYYMMDD">
                        <label for="materialRegisterFormEmail">Funding Date&nbsp;<span class="iconify"
                                data-icon="flat-color-icons:calendar" data-width="25"></span></label>
                        @error('fundingDate')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md-form mt-4">
                        <input readonly type="number" step="0.01" id="materialRegisterFormEmail" class="form-control"
                            name="rate" value="{{ $edittran->exRate }}">
                        <label for=" materialRegisterFormEmail">Exchange Rate</label>
                        @error('rate')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md-form mt-4">
                        <input readonly type="number" step="0.01" id="materialRegisterFormEmail" class="form-control"
                            name="commAmt" value="{{ $edittran->commAmt }}">
                        <label for="materialRegisterFormEmail">Commissions Amount</label>
                        @error('rate')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <label for="cardType">Select Card Type : </label>
                    <select name="cardType" id="terminal">
                        <option value="{{ $edittran->cardType }}">{{ $edittran->cardType }}</option>

                    </select>
                    @error('cardType')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <label for="terminal">Select Currency : </label>
                    <select name="currency" id="terminal">
                        <option selected value="{{ $edittran->currency }}">{{ $edittran->currency }}</option>
                    </select>
                    @error('currency')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <label for="terminal">Select Type of Transaction : </label>
                    <select name="typeOfTrans" id="terminal">
                        <option selected value="{{ $edittran->typeOfTrans }}">{{ $edittran->typeOfTrans }}
                        </option>

                    </select>
                    @error('typeOfTrans')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <button class="white-text btn btn-indigo btn-rounded btn-block my-4 waves-effect z-depth-0"
                        type="sumbit">
                        <h5><i class="mt-1 far fa-save fa-2x"></i><strong>&nbsp;&nbsp;UPDATE Now</strong></h5>
                    </button>
                </form>
                <!-- Form -->
            </div>

        </div>
    @endsection
