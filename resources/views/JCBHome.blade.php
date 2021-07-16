@extends('layouts.app')
@section('content')
<div class="container mt-5 p-5">
    <h1 class="text-center">Welcome JCB Post Files</h1>
    <form class=" border border-light p-5" action="{{route('jcb')}}" method="post" enctype="multipart/form-data">
        @csrf

        @error('jcb')
            <p class="text-danger">{{$message="Please select the JCB file"}}</p>
        @enderror

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-info"  type="submit">JCB Upload</button>
                    </div>
                     <input type="file" name="jcb" class="form-control">
                </div>

    </form>
</div>
@endsection
