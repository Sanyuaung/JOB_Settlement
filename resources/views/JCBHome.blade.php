@extends('layouts.app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">

    <div class="container mt-3 p-4">
        <h1 id="JCB" class="text-center">Welcome JCB Post Files</h1>
        <form class=" border border-light p-5" action="{{ route('jcb') }}" method="post" enctype="multipart/form-data">
            @csrf

            @if (session('errors'))
                <div class="alert alert-danger">
                    {{ session('errors') }}
                </div>
            @endif
            <div class="input-group">
                <div class="btn1">
                    <button type="submit"><span>JCB Upload&nbsp;<i class="fas fa-upload"></i></span></button>
                </div>
                <input type="file" name="jcb" class="form-control mt-2">
            </div>

        </form>
    </div>
@endsection
