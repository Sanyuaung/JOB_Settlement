@extends('layouts.app')
@section('content')

<div class="container mt-5 p-5">
    <h1 class="text-center text-danger">MOB Bank Settlement</h1>
    <div class="form-row text-center">
        <div class="col-12 p-5">
            <a type="submit" href="{{route('JCBHome')}}" class="btn btn-primary rounded-pill">JCB Post Files</a>
            <a type="submit" href="{{route('MPUHome')}}" class="btn btn-primary rounded-pill ml-3">MPU/UPI/JCB New Switch</a>
        </div>
     </div>

</div>
@endsection
