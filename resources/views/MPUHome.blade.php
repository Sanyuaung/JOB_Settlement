@extends('layouts.app')
@section('content')
<link href="/css/style.css" rel="stylesheet">

<div class="container mt-3 p-4">
    <h1 id="MPU" class="text-center">Welcome MOB NewSwitch Settlement</h1>
    <form class=" border border-light p-5" action="{{route('mpu')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if (session('mpuerror'))
            <div class="alert alert-danger">
              {{session('mpuerror')}}
             </div>
        @endif

        @if (session('nodata'))
            <div class="alert alert-danger">
              {{session('nodata')}}
             </div>
        @endif

                <div class="input-group mb-5">
                    <div class="input-group-prepend">
                        <button id="btn" class="btn white-text btn-indigo btn-rounded-pill"  type="submit">MPU Upload</button>
                    </div>
                     <input type="file" name="mpu" class="form-control mt-1">
                </div>

    </form>
</div>
@endsection
