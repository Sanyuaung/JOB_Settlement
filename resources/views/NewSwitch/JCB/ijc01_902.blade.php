@extends('layouts/app')
@section('content')
   <div class="container-fluid mt-4">
   <label class="font-weight-bold text-danger mr-5 mt-5"><b>{{$filename}}</label>
       <div class="text-center">
            {{-- <a href="{{route('download')}}" class="btn btn float-right" role="button">Download</a> --}}
            <a href="{{route('MPUHome')}}" class="btn btn-info float-left rounded-pill" role="button">Back</a></div>

        <div>
                <a href="{{route('downlodijc01_902')}}" onclick="return confirm('Are you sure you want to download?')" class="ml-4 btn btn-info float-left rounded-pill" role="button">Download EXCEL</a>
        </div>
            <br>
            <br>
    <table class="table table-hover text-center aqua-gradient black-text">
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
        </thead>
        <tbody>
            @foreach ($ijc01_902 as $ijc01_902)
            <tr>
              <td><b>{{$ijc01_902->NO}}</td>
              <td><b>{{$ijc01_902->recordtype}}</td>
              <td><b>{{$ijc01_902->member_institution}}</td>
              <td><b>{{$ijc01_902->curr_code}}</td>
              <td><b>{{$ijc01_902->statistics_txn_code}}</td>
              <td><b>{{$ijc01_902->no_txn_summary}}</td>
              <td><b>{{$ijc01_902->credit_amt}}</td>
              <td><b>{{$ijc01_902->debit_amt}}</td>
              <td><b>{{$ijc01_902->reserved}}</td>
            </tr>
            
            @endforeach
        </tbody>
      </table>
   </div>

@endsection
