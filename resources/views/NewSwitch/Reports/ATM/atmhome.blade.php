@extends('layouts/app')
@section('content')
    <link href="/css/visa.css" rel="stylesheet">
    <div class="container">
        <div class="h">
            <h1 id="VISA" class="grey-text text-center">Welcome ATM Performance Reports</h1>
            <h5 class="mt-4 card-header  white-text text-center py-4"><strong>Select Report Date</strong></h5>
        </div>
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0 datepicker ">

            <!-- Form -->
            <form class="text-center" action="{{ route('print') }}" method="post">
                @csrf
                <div class="md-form mt-4">
                    <input type="date" class="form-control" name="start">
                    <label for="materialRegisterFormEmail">Start Date&nbsp;<span class="iconify"
                            data-icon="flat-color-icons:calendar" data-width="25"></span></label>
                    @error('start')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="md-form mt-4">
                    {{-- <input type="date" id="materialRegisterFormEmail" class="form-control" name="settledate"> --}}
                    <input type="date" id="materialRegisterFormEmail" class="form-control" name="end">
                    <label for="materialRegisterFormEmail">End Date&nbsp;<span class="iconify"
                            data-icon="flat-color-icons:calendar" data-width="25"></span></label>
                    @error('end')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="h">
                    <button class="white-text btn btn-rounded btn-block my-4 waves-effect z-depth-0"
                        type="sumbit">Search</button>
                </div>
            </form>
            <!-- Form -->

        </div>

    </div>
@endsection
