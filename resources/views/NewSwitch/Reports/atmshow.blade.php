@extends('layouts/app')
@section('content')
<link href="/css/style.css" rel="stylesheet">

   <div class="container-fluid">
   {{-- <label class="font-weight-bold text-danger"><b>{{$filename}}</label> --}}
       <div class="text-center">
            {{-- <a href="{{route('download')}}" class="btn btn float-right" role="button">Download</a> --}}
            <a href="{{route('MPUHome')}}"  class="btn white-text btn-indigo btn-rounded-pill float-left" role="button">Back</a></div>
        <div>
            <a href="{{route('downloadIND11c')}}" onclick="return confirm('Are you sure you want to download?')" class="btn white-text btn-indigo btn-rounded-pill" role="button">Download EXCEL</a>
            {{-- <label class="float-right">{{$filename}}</label> --}}
        </div>
    <div class="scroll-table-container">
      <table id="table" class="scroll-table">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">ATM ID</th>
            <th scope="col">ATM Location</th>
            <th scope="col">Downtime</th>
            <th scope="col">Downtime Percentage</th>
            <th scope="col">Available Percentage</th>
          </tr>
            @foreach ($atm as $atm)
            <tr>
              <td>{{$atm->NO}}</td>
              <td>{{$atm->ATM_ID}}</td>
              <td>{{$atm->minutes}}</td>
              <td>{{$atm->minutes}}</td>
              <td>{{$atm->minutes}}</td>
              <td>{{$atm->minutes}}</td>
              <td>{{$atm->minutes}}</td>
            </tr>
            @endforeach
      </table>
    </div>
   </div>

@endsection
