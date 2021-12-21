@extends('layouts/app')
@section('content')
   <div class="container-fluid">
   <label class="font-weight-bold text-danger"><b>{{$filename}}</label>
       <div class="text-center">
            {{-- <a href="{{route('download')}}" class="btn btn float-right" role="button">Download</a> --}}
            <a href="{{route('MPUHome')}}" class="mt-2 btn btn-info float-left rounded-pill" role="button">Back</a></div>

        <div>
                <a href="{{route('downlodijc01_900')}}" onclick="return confirm('Are you sure you want to download?')" class="mt-2 ml-4 btn btn-info float-left rounded-pill" role="button">Download EXCEL</a>
        </div>
            <br>
            <br>
                <table class="mt-3 table table-hover text-center aqua-gradient black-text">
                    <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">recordtype</th>
                        <th scope="col">member_institution</th>
                        <th scope="col">Outgoing_amt_sign</th>
                        <th scope="col">Outgoing_amt</th>
                        <th scope="col">Outgoing_fee_sign</th>
                        <th scope="col">outgoing_fee</th>
                        <th scope="col">incoming_amt_sign</th>
                        <th scope="col">incoming_amt</th>
                        <th scope="col">incoming_fee_sign</th>
                        <th scope="col">incoming_fee</th>
                        <th scope="col">STF_amt_sign</th>
                        <th scope="col">STF_amt</th>
                        <th scope="col">STF_Fee_sign</th>
                        <th scope="col">STF_fee</th>
                        <th scope="col">outgoing_sum</th>
                        <th scope="col">incoming_summary</th>
                        <th scope="col">settlement_curr</th>
                        <th scope="col">reserved</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($ijc01_900s as $ijc01_900s)
                        <tr>
                        <td><b>{{$ijc01_900s->NO}}</td>
                        <td><b>{{$ijc01_900s->recordtype}}</td>
                        <td><b>{{$ijc01_900s->member_institution}}</td>
                        <td><b>{{$ijc01_900s->Outgoing_amt_sign}}</td>
                        <td><b>{{$ijc01_900s->Outgoing_amt}}</td>
                        <td><b>{{$ijc01_900s->Outgoing_fee_sign}}</td>
                        <td><b>{{$ijc01_900s->outgoing_fee}}</td>
                        <td><b>{{$ijc01_900s->incoming_amt_sign}}</td>
                        <td><b>{{$ijc01_900s->incoming_amt}}</td>
                        <td><b>{{$ijc01_900s->incoming_fee_sign}}</td>
                        <td><b>{{$ijc01_900s->incoming_fee}}</td>
                        <td><b>{{$ijc01_900s->STF_amt_sign}}</td>
                        <td><b>{{$ijc01_900s->STF_amt}}</td>
                        <td><b>{{$ijc01_900s->STF_Fee_sign}}</td>
                        <td><b>{{$ijc01_900s->STF_fee}}</td>
                        <td><b>{{$ijc01_900s->outgoing_summary}}</td>
                        <td><b>{{$ijc01_900s->incoming_summary}}</td>
                        <td><b>{{$ijc01_900s->settlement_curr}}</td>
                        <td><b>{{$ijc01_900s->reserved}}</td>
                        </tr>
                            

                        @endforeach
                    </tbody>
                </table>
   </div>

@endsection
