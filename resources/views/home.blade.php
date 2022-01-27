@extends('layouts.app')
@section('content')
<link href="/css/style.css" rel="stylesheet">

<div class="container mt-3 p-5">
    <h1 id="MPU" class="text-center text-danger">MOB Bank Settlement</h1><br>
    <div class="text-center">
        {{-- <div class="col-12 p-5">
            <a id="btn" type="submit" href="{{route('JCBHome')}}" class="btn white-text btn-indigo btn-rounded-pill">JCB Post Files</a>
            <a  id="btn" type="submit" href="{{route('MPUHome')}}" class="btn white-text btn-indigo btn-rounded-pill ml -3">MPU / UPI / JCB New Switch</a>
            <a  id="btn" type="submit" href="{{route('visa')}}" class="btn white-text btn-indigo btn-rounded-pill ml -3">CBM REPORT</a>
        </div>
     </div>
     </div> --}}
  
        <button type="button" class="btn white-text btn-indigo dropdown-toggle" data-mdb-toggle="dropdown" aria-expanded="false">
          MOB Settlement
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><b><a id="btn" type="submit" href="{{route('JCBHome')}}" class="text-center indigo-text dropdown-item">JCB Post Files</a>
          <li><b><a id="btn" type="submit" href="{{route('MPUHome')}}" class="text-center indigo-text dropdown-item">MPU / UPI / JCB New Switch</a></li>
          <li><b><a id="btn" type="submit" href="{{route('visa')}}" class="text-center indigo-text dropdown-item">Visa Transactions Add</a></li>
          <li><b><a id="btn" type="submit" href="{{route('ccy')}}" class="text-center indigo-text dropdown-item">Daily Currency Rate</a></li>
        </ul>
      </div>
</div>
@endsection
