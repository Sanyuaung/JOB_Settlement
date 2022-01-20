@extends('layouts.app')
@section('content')
<link href="/css/style.css" rel="stylesheet">

<div class="container mt-3 p-5">
    <h1 id="MPU" class="text-center text-danger">MOB Bank Settlement</h1>
    <div class="form-row text-center">
        <div class="col-12 p-5">
            <a id="btn" type="submit" href="{{route('JCBHome')}}" class="btn white-text btn-indigo btn-rounded-pill">JCB Post Files</a>
            <a  id="btn" type="submit" href="{{route('MPUHome')}}" class="btn white-text btn-indigo btn-rounded-pill ml -3">MPU/UPI/JCB New Switch</a>
            <a  id="btn" type="submit" href="{{route('visa')}}" class="btn white-text btn-indigo btn-rounded-pill ml -3">CBM REPORT</a>
        </div>
     </div>

</div>
@endsection
