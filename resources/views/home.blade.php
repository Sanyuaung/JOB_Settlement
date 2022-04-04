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
    </section>
    <div class="home">
        {{-- @if (auth()->user()->status == '1') --}}
        <button type="button" data-mdb-toggle="dropdown" aria-expanded="false"><span>Settlement</span></button>
        <ul class="dropdown-menu dropdown-menu-end">
            @if (auth()->user()->department == 'Settlement' || auth()->user()->department == 'Admin')
                <!-- <i class="fab fa-cc-jcb fa-2x"></i> -->
                <li><b><a id="home" type="submit" href="{{ route('JCBHome') }}"
                            class="text-center white-text dropdown-item"><span class="iconify" data-icon="logos:jcb"
                                data-width="20"></span>&nbsp; JCB Post Files</a>
            @endif
            @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
                <li><b><a id="home" type="submit" href="{{ route('MPUHome') }}"
                            class="text-center white-text dropdown-item">MPU / UPI / JCB New Switch</a></li>
            @endif
            @if (auth()->user()->department == 'Settlement' || auth()->user()->department == 'Admin')
                <!-- <i class="  fab fa-cc-visa fa-2x"></i> -->
                <li><b><a id="home" type="submit" href="{{ route('visa') }}"
                            class="text-center white-text dropdown-item"><span class="iconify" data-icon="logos:visa"
                                data-width="25"></span>&nbsp; Visa Transactions Add</a></li>
            @endif
            @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
                <li><b><a id="home" type="submit" href="{{ route('ccy') }}"
                            class="text-center white-text dropdown-item"><span class="iconify"
                                data-icon="flat-color-icons:currency-exchange" data-width="25"></span>&nbsp; Daily Currency
                            Rate</a></li>
            @endif
        </ul>
    </div>
    {{-- @endif --}}
    @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
        <div class="home2 text-center dropdown">
            <button type="button" data-mdb-toggle="dropdown" aria-expanded="false"><span>Reports</span></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
                    <li><a id="home" class="text-center white-text dropdown-item" href="{{ route('atmhome') }}"><span
                                class="iconify" data-icon="emojione:atm-sign" data-width="20"></span>&nbsp; ATM
                            Performance</a></li>
                @endif
                @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
                    <li><a id="home" class="text-center white-text dropdown-item" href="{{ route('cohome') }}">Customer
                            Outstanding</a></li>
                @endif
                @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
                    <li><a id="home" class="text-center white-text dropdown-item" href="{{ route('annualfeehome') }}">Credit_Card AnnualFee</a></li>
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
                                <a class="text-center dropdown-item" href="{{ route('pssd04home') }}">PSSD_04</a>
                            </li>
                            {{-- <li>
                                <a class="text-center white-text dropdown-item" href="#">Submenu item 3 &raquo; </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li>
                                        <a class="dropdown-item" href="#">Multi level 1</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Multi level 2</a>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li>
                                <a class="dropdown-item" href="#">Submenu item 4</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Submenu item 5</a>
                            </li> --}}
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        {{-- <div class="home2 text-center">
            <button type="button" data-mdb-toggle="dropdown" aria-expanded="false"><span>Reports</span></button>
            <ul class="dropdown-menu dropdown-menu-end">
                @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
                    <li><b><a id="home" type="submit" href="{{ route('atmhome') }}"
                                class="text-center white-text dropdown-item"><span class="iconify"
                                    data-icon="emojione:atm-sign" data-width="20"></span>&nbsp; ATM Performance</a>
                @endif
                @if (auth()->user()->department == 'Admin' || auth()->user()->department == 'Card')
                    <li><b><a id="home" type="submit" href="{{ route('cohome') }}"
                                class="text-center white-text dropdown-item">Customer Outstanding</a></li>
                @endif
            </ul>
        </div> --}}
    @endif
@endsection
