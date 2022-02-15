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
                    <div class="btn1">
                        <button type="submit"><span>MPU Upload</span></button>
                    </div>
                     <input type="file" name="mpu" class="form-control mt-2">
                </div>

    </form>
</div>
@endsection
