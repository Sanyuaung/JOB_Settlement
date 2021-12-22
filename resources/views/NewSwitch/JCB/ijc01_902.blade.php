@extends('layouts/app')
@section('content')
<link href="/css/style.css" rel="stylesheet">

   <div class="container-fluid">
   {{-- <label class="font-weight-bold text-danger"><b>{{$filename}}</label> --}}
       <div class="text-center">
            {{-- <a href="{{route('download')}}" class="btn btn float-right" role="button">Download</a> --}}
            <a href="{{route('MPUHome')}}" class="btn btn-info float-left rounded-pill" role="button">Back</a></div>
        <div>
          <a href="{{route('downlodijc01_902')}}" onclick="return confirm('Are you sure you want to download?')" class="ml-4 btn btn-info float-left rounded-pill" role="button">Download EXCEL</a>
          <label class="float-right">{{$filename}}</label>
        </div>
            <br>
            <br>
    <div class="scroll-table-container">
      <table id="table" class="scroll-table">
        <thead>
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
          @foreach ($ijc01_902 as $ijc01_902)
            <tr>
              <td>{{$ijc01_902->NO}}</td>
              <td>{{$ijc01_902->recordtype}}</td>
              <td>{{$ijc01_902->member_institution}}</td>
              <td>{{$ijc01_902->curr_code}}</td>
              <td>{{$ijc01_902->statistics_txn_code}}</td>
              <td>{{$ijc01_902->no_txn_summary}}</td>
              <td>{{$ijc01_902->credit_amt}}</td>
              <td>{{$ijc01_902->debit_amt}}</td>
              <td>{{$ijc01_902->reserved}}</td>
            </tr>
            @endforeach
      </table>
   </div>
  </div>

@endsection
