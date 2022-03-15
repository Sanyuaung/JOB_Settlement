@extends('layouts.app')
@section('content')
<link href="/css/style.css" rel="stylesheet">
@if (session('message'))
<div class="alert alert-danger">
  {{session('message')}}
 </div>
@endif
  <section>
    <div class="icon">
      <h1 id="HOME">Myanmar Oriental Bank</h1>
  </section>
    <div class="home">
      {{-- @if (auth()->user()->status=="1") --}}
      <button type="button" data-mdb-toggle="dropdown" aria-expanded="false"><span>Settlement</span></button>
        <ul class="dropdown-menu dropdown-menu-end">
        @if (auth()->user()->department=="Settlement" || auth()->user()->department=="Admin")
          <li><b><a id="home" type="submit" href="{{route('JCBHome')}}" class="text-center white-text dropdown-item">JCB Post Files</a>
        @endif
        @if (auth()->user()->department=="Admin" || auth()->user()->department=="Card")
          <li><b><a id="home" type="submit" href="{{route('MPUHome')}}" class="text-center white-text dropdown-item">MPU / UPI / JCB New Switch</a></li>
        @endif
        @if (auth()->user()->department=="Settlement" || auth()->user()->department=="Admin")
          <li><b><a id="home" type="submit" href="{{route('visa')}}" class="text-center white-text dropdown-item">Visa Transactions Add</a></li>
        @endif
        @if (auth()->user()->department=="Admin" || auth()->user()->department=="Card")
          <li><b><a id="home" type="submit" href="{{route('ccy')}}" class="text-center white-text dropdown-item">Daily Currency Rate</a></li>
        @endif
        </ul>
      </div>
      {{-- @endif --}}
      @if (auth()->user()->department=="Admin" || auth()->user()->department=="Card")
      <div class="home2 text-center">
        <button type="button" data-mdb-toggle="dropdown" aria-expanded="false"><span>Reports</span></button>
          <ul class="dropdown-menu dropdown-menu-end">
          @if (auth()->user()->department=="Admin" || auth()->user()->department=="Card")
            <li><b><a id="home" type="submit" href="{{route('atmhome')}}" class="text-center white-text dropdown-item">ATM Performance</a>
          @endif
          @if (auth()->user()->department=="Admin" || auth()->user()->department=="Card")
            <li><b><a id="home" type="submit" href="{{route('cohome')}}" class="text-center white-text dropdown-item">Customer Outstanding</a></li>
          @endif
            {{-- <li><b><a id="home" type="submit" href="{{route('visa')}}" class="text-center white-text dropdown-item">Visa Transactions Add</a></li>
            <li><b><a id="home" type="submit" href="{{route('ccy')}}" class="text-center white-text dropdown-item">Daily Currency Rate</a></li> --}}
          </ul>
        </div>
        @endif
@endsection
