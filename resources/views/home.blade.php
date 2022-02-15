@extends('layouts.app')
@section('content')
<link href="/css/style.css" rel="stylesheet">
  <section>
    <div class="icon">
      <h1 id="HOME">MOB Bank Settlement</h1>
  </section>
    <div class="text-center icon">
      <button type="button" 
        data-mdb-toggle="dropdown" aria-expanded="false"><span>Settlement</span></button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><b><a id="btn1" type="submit" href="{{route('JCBHome')}}" class="text-center indigo-text dropdown-item">JCB Post Files</a>
          <li><b><a id="btn1" type="submit" href="{{route('MPUHome')}}" class="text-center indigo-text dropdown-item">MPU / UPI / JCB New Switch</a></li>
          <li><b><a id="btn1" type="submit" href="{{route('visa')}}" class="text-center indigo-text dropdown-item">Visa Transactions Add</a></li>
          <li><b><a id="btn1" type="submit" href="{{route('ccy')}}" class="text-center indigo-text dropdown-item">Daily Currency Rate</a></li>
        </ul>
      </div>
    </div>
@endsection
