@extends('layouts.app')
@section('content')
<div class="container mt-5 p-5">
    <h1 class="text-center">Welcome MOB NewSwitch Settlement</h1>
    <form class=" border border-light p-5" action="{{route('mpu')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if (session('error'))
            <div class="alert alert-danger">
              {{session('error')}}
             </div>
        @endif

        @if (session('nodata'))
            <div class="alert alert-danger">
              {{session('nodata')}}
             </div>
        @endif

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-info"  type="submit">MPU Upload</button>
                    </div>
                     <input type="file" name="mpu" class="form-control">
                </div>

    </form>
</div>
@endsection
