@extends('layouts/app')
@section('content')

   <div class="container-fluid mt-4">
   <label class="font-weight-bold text-danger mr-5 mt-5"><b>{{$filename}}</label>
       <div class="text-center">
            {{-- <a href="{{route('download')}}" class="btn btn float-right" role="button">Download</a> --}}
            <a href="{{route('MPUHome')}}" class="btn btn-info float-left" role="button">Back</a></div>

        <div>
                <a href="{{route('downloadinc11s_901')}}" onclick="return confirm('Are you sure you want to download?')" class="ml-4 btn btn-info float-left" role="button">Download EXCEL</a>
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
            @foreach ($inc11s_901 as $inc11s_901)
            <tr>
              <td><b>{{$inc11s_901->NO}}</td>
              <td><b>{{$inc11s_901->recordtype}}</td>
              <td><b>{{$inc11s_901->member_institution}}</td>
              <td><b>{{$inc11s_901->curr_code}}</td>
              <td><b>{{$inc11s_901->statistics_txn_code}}</td>
              <td><b>{{$inc11s_901->no_txn_summary}}</td>
              <td><b>{{$inc11s_901->credit_amt}}</td>
              <td><b>{{$inc11s_901->debit_amt}}</td>
              <td><b>{{$inc11s_901->reserved}}</td>
            </tr>
            
            @endforeach
        </tbody>
      </table>
   </div>

@endsection
