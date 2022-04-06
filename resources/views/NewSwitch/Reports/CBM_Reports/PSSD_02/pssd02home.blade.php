@extends('layouts/app')
@section('content')
    <link href="/css/visa.css" rel="stylesheet">
    <div class="container">
        <div class="h">
            <h1 id="VISA" class="grey-text text-center">Welcome CBM Reports (PSSD_02)</h1>
            <h5 class="mt-4 card-header  white-text text-center py-4"><strong>Select Report Date</strong></h5>
        </div>
        <div class="card-body px-lg-5 pt-0 datepicker ">

            <form class="text-center" action="{{ route('pssd02print') }}" method="post">
                @csrf
                <div class="md-form mt-4">
                    <input type="date" class="form-control" name="date">
                    <label for="materialRegisterFormEmail">Date&nbsp;<span class="iconify"
                            data-icon="flat-color-icons:calendar" data-width="25"></span></label>
                    @error('date')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="h">
                    <button class="white-text btn btn-rounded btn-block my-4 waves-effect z-depth-0"
                        type="sumbit">Search</button>
                </div>
            </form>
        </div>

    </div>
@endsection
