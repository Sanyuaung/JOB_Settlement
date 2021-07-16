@extends('layouts.app')
@section('content')

<div class="container mt-5 p-5">
    <h1 class="text-center">MOB Bank Settlement</h1>
    <div class="form-row text-center">
        <div class="col-12 p-5">
            <a type="submit" href="{{route('JCBHome')}}" class="btn btn-primary">JCB Post Files</a>
            <a type="submit" href="{{route('MPUHome')}}" class="btn btn-primary ml-3">MPU/UPI/JCB New Switch</a>
        </div>
     </div>

</div>
@endsection
