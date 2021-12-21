@extends('layouts/app')
@section('content')
   <div class="container-fluid">
   <label class="font-weight-bold text-danger"><b>{{$filename}}</label>
       <div class="text-center">

            {{-- <a href="{{route('download')}}" class="btn btn float-right" role="button">Download</a> --}}
            <a href="{{route('MPUHome')}}" class="mt-2 btn btn-primary float-left rounded-pill" role="button">Back</a></div>

        <div>
                <a href="{{route('downloadAerr')}}" onclick="return confirm('Are you sure you want to download?')" class="mt-2 ml-4 btn btn-primary float-left rounded-pill">Download EXCEL</a>
        </div>
            <br>
            <br>
    <table class="mt-3 table table-hover text-center aqua-gradient black-text">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Record_Type</th>
            <th scope="col">CardNo</th>
            <th scope="col">Processing_Code</th>
            <th scope="col">txn_amt</th>
            <th scope="col">settle_amt</th>
            <th scope="col">sett_rate</th>
            <th scope="col">system_trace</th>
            <th scope="col">txn_time</th>
            <th scope="col">txn_date</th>
            <th scope="col">settle_date</th>
            <th scope="col">MCC</th>
            <th scope="col">Acq_institution_code</th>
            <th scope="col">Issuer_bank_code</th>
            <th scope="col">beneficiary_bank_code</th>
            <th scope="col">Forward_institution_code</th>
            <th scope="col">auth_no</th>
            <th scope="col">RRN</th>
            <th scope="col">Card_Acceptor_Terminal</th>
            <th scope="col">txn_curr_code</th>
            <th scope="col">settle_curr_code</th>
            <th scope="col">from_acc</th>
            <th scope="col">to_acc</th>
            <th scope="col">msg_type_identifier</th>
            <th scope="col">res_code</th>
            <th scope="col">receivable_fee</th>
            <th scope="col">payable_fee</th>
            <th scope="col">interchange_fee</th>
            <th scope="col">POS_mode</th>
            <th scope="col">system_traceno</th>
            <th scope="col">POS_condition</th>
            <th scope="col">card_acceptor_code</th>
            <th scope="col">accept_amt</th>
            <th scope="col">cardholder_fee</th>
            <th scope="col">txn_tramsmission</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($aerr as $aerr)
            <tr>
              <td><b>{{$aerr->NO}}</td>
              <td><b>{{$aerr->recordtype}}</td>
              <td><b>{{$aerr->CardNo}}</td>
              <td><b>{{$aerr->process_code}}</td>
              <td><b>{{$aerr->txn_amt}}</td>
              <td><b>{{$aerr->settle_amt}}</td>
              <td><b>{{$aerr->sett_rate}}</td>
              <td><b>{{$aerr->system_trace}}</td>
              <td><b>{{$aerr->txn_time}}</td>
              <td><b>{{$aerr->txn_date}}</td>
              <td><b>{{$aerr->settle_date}}</td>
              <td><b>{{$aerr->MCC}}</td>
              <td><b>{{$aerr->Acq_institution_code}}</td>
              <td><b>{{$aerr->Issuer_bank_code}}</td>
              <td><b>{{$aerr->beneficiary_bank_code}}</td>
              <td><b>{{$aerr->Forward_institution_code}}</td>
              <td><b>{{$aerr->auth_no}}</td>
              <td><b>{{$aerr->RRN}}</td>
              <td><b>{{$aerr->Card_Acceptor_Terminal}}</td>
              <td><b>{{$aerr->txn_curr_code}}</td>
              <td><b>{{$aerr->settle_curr_code}}</td>
              <td><b>{{$aerr->from_acc}}</td>
              <td><b>{{$aerr->to_acc}}</td>
              <td><b>{{$aerr->msg_type_identifier}}</td>
              <td><b>{{$aerr->reason_code}}</td>
              <td><b>{{$aerr->receivable_fee}}</td>
              <td><b>{{$aerr->payable_fee}}</td>
              <td><b>{{$aerr->interchange_fee}}</td>
              <td><b>{{$aerr->POS_mode}}</td>
              <td><b>{{$aerr->system_traceno}}</td>
              <td><b>{{$aerr->POS_condition}}</td>
              <td><b>{{$aerr->card_acceptor_code}}</td>
              <td><b>{{$aerr->accept_amt}}</td>
              <td><b>{{$aerr->cardholder_fee}}</td>
              <td><b>{{$aerr->txn_tramsmission}}</td>
            </tr>
            

            @endforeach
        </tbody>
      </table>
   </div>

@endsection
