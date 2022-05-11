@extends('layouts.app')
@section('content')
    @include('sweetalert::alert')

    <link href="/css/style.css" rel="stylesheet">
    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
    <section>
        <div class="icon">
            <h1 id="HOME">Myanmar Oriental Bank</h1>
        </div>
    </section>
    <div class="home text-center dropdown">
        @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card' || auth()->user()->department == 'Settlement')
            <button type="button" data-mdb-toggle="dropdown" aria-expanded="false"><span>Settlement</span></button>
        @endif
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @if (auth()->user()->department == 'Settlement' || auth()->user()->department == 'Admin')
                <li>
                    <a id="home" type="submit" href="{{ route('JCBHome') }}"
                        class="text-center white-text dropdown-item"><span class="iconify" data-icon="logos:jcb"
                            data-width="20"></span>&nbsp; JCB Post Files</a>
                </li>
            @endif
            @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Settlement')
                <li>
                    <a id="home" type="submit" href="{{ route('UPIHome') }}"
                        class="text-center white-text dropdown-item">UPI Settlement File</a>
                </li>
            @endif
            @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
                <li>
                    <a id="home" type="submit" href="{{ route('MPUHome') }}"
                        class="text-center white-text dropdown-item">MPU / JCB New Switch</a>
                </li>
            @endif
            @if (auth()->user()->department == 'Settlement' || auth()->user()->department == 'Admin')
                <li>
                    <a id="home" type="submit" href="{{ route('visa') }}"
                        class="text-center white-text dropdown-item"><span class="iconify" data-icon="logos:visa"
                            data-width="25"></span>&nbsp; Visa Transactions Add</a>
                </li>
            @endif
            @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
                <li>
                    <a id="home" type="submit" href="{{ route('ccy') }}"
                        class="text-center white-text dropdown-item"><span class="iconify"
                            data-icon="flat-color-icons:currency-exchange" data-width="25"></span>&nbsp; Daily Currency
                        Rate</a>
                </li>
            @endif
        </ul>
    </div>
    @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
        <div class="home2 text-center dropdown">
            <button type="button" data-mdb-toggle="dropdown" aria-expanded="false"><span>Reports</span></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
                    <li>
                        <a id="home" class="text-center white-text dropdown-item" href="#">
                            Monthly Reports&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-submenu">
                            <li>
                                <a class="text-center dropdown-item" href="{{ route('atmhome') }}"><span
                                        class="iconify" data-icon="emojione:atm-sign" data-width="20"></span>&nbsp;
                                    ATM Performance</a>
                            </li>
                            <li>
                                <a class="text-center dropdown-item" href="{{ route('cohome') }}">Customer Outstanding</a>
                            </li>
                            <li>
                                <a class="text-center dropdown-item" href="{{ route('annualfeehome') }}">Credit_Card
                                    AnnualFee</a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
                    <li>
                        <a id="home" class="text-center white-text dropdown-item" href="#"><span class="iconify"
                                data-icon="noto:bank" data-width="20"></span>
                            CBM Reports&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-submenu">
                            <li>
                                <a class="text-center dropdown-item" href="{{ route('pssd01home') }}">PSSD_01</a>
                            </li>
                            <li>
                                <a class="text-center dropdown-item" href="{{ route('pssd02home') }}">PSSD_02</a>
                            </li>
                            <li>
                                <a class="text-center dropdown-item" href="{{ route('pssd04home') }}">PSSD_04</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    @endif
@endsection
