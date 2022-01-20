@extends('layouts/app')
@section('content')
<link href="/css/style.css" rel="stylesheet">

   <div class="container-fluid">
   {{-- <label class="font-weight-bold text-danger5"><b>{{$filename}}</label> --}}
       <div class="text-center">
            {{-- <a href="{{route('download')}}" class="btn btn float-right rounded-pill" role="button">Download</a> --}}
            <a href="{{route('MPUHome')}}" class="btn white-text btn-indigo btn-rounded-pill float-left" role="button">Back</a></div>
        <div>
          <a href="{{route('downloadinc11s_901')}}" onclick="return confirm('Are you sure you want to download?')" class="btn white-text btn-indigo btn-rounded-pill" role="button">Download EXCEL</a>
          <label class="float-right">{{$filename}}</label>
        </div>
    <div class="scroll-table-container">
      <table id="table" class="scroll-table">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">recordtype</th>
            <th scope="col">member_institution</th>
            <th scope="col">curr_code</th>
            <th scope="col">statistics_txn_code</th>
            <th scope="col">no_txn_summary</th>
            <th scope="col">credit_amt</th>
            <th scope="col">debit_amt</th>
            <th scope="col">reserved</th>
          </tr>
            @foreach ($inc11s_901 as $inc11s_901)
            <tr>
              <td>{{$inc11s_901->NO}}</td>
              <td>{{$inc11s_901->recordtype}}</td>
              <td>{{$inc11s_901->member_institution}}</td>
              <td>{{$inc11s_901->curr_code}}</td>
              <td>{{$inc11s_901->statistics_txn_code}}</td>
              <td>{{$inc11s_901->no_txn_summary}}</td>
              <td>{{$inc11s_901->credit_amt}}</td>
              <td>{{$inc11s_901->debit_amt}}</td>
              <td>{{$inc11s_901->reserved}}</td>
            </tr>
            @endforeach
      </table>
   </div>
  </div>

@endsection
