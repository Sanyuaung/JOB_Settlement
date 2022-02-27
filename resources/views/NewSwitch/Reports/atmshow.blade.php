@extends('layouts/app')
@section('content')
<link href="/css/style.css" rel="stylesheet">

   <div class="container-fluid">
    <div class="scroll-table-container">
      <div class="btn1">
        <a  href="{{route('atmhome')}}" role="button"><span>Back</span></a>
    </div>
    {{-- <div class="btn4">
      <a href="{{route('downloadinc11s_901')}}" onclick="return confirm('Are you sure you want to download?')" role="button"><span>Download EXCEL</span></a>
  </div> --}}
  <div><label class="float-right mr-3">From {{$startdate}} to {{$enddate}}</label></div>
  <br><br><br>
    {{-- <div class="scroll-table-container"> --}}
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
            <td>{{$atm->ATM_LOCATION}}</td>
            <td>{{$atm->DOWNTIME}}</td>
            <td>{{$atm->DOWNTIME_PERCENT}}</td>
            <td>{{$atm->AVALIABLE_PERCENT}}</td>
          </tr>
          @endforeach
    </table>
   </div>
  </div>
</div>

@endsection
