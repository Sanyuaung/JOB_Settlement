@extends('layouts/app')
@section('content')

   <div class="container-fluid mt-4">
   <label class="font-weight-bold text-danger mr-5 mt-5"><b>{{$filename}}</label>
       <div class="text-center">
          {{-- <a href="{{route('download')}}" class="btn btn float-right" role="button">Download</a> --}}
          <a href="{{route('MPUHome')}}" class="btn btn-primary float-left rounded-pill" role="button">Back</a></div>
        <div>
          <a href="{{route('downloadACOM')}}" onclick="return confirm('Are you sure you want to download?')" class="ml-4 btn btn-primary float-left rounded-pill">Download EXCEL</a>
        </div>
            <br>
            <br>
    <table class="table table-hover text-center aqua-gradient black-text">
    
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
            @foreach ($acom as $acom)
            <tr>
              <td><b>{{$acom->NO}}</td>
              <td><b>{{$acom->recordtype}}</td>
              <td><b>{{$acom->CardNo}}</td>
              <td><b>{{$acom->process_code}}</td>
              <td><b>{{$acom->txn_amt}}</td>
              <td><b>{{$acom->settle_amt}}</td>
              <td><b>{{$acom->sett_rate}}</td>
              <td><b>{{$acom->system_trace}}</td>
              <td><b>{{$acom->txn_time}}</td>
              <td><b>{{$acom->txn_date}}</td>
              <td><b>{{$acom->settle_date}}</td>
              <td><b>{{$acom->MCC}}</td>
              <td><b>{{$acom->Acq_institution_code}}</td>
              <td><b>{{$acom->Issuer_bank_code}}</td>
              <td><b>{{$acom->beneficiary_bank_code}}</td>
              <td><b>{{$acom->Forward_institution_code}}</td>
              <td><b>{{$acom->auth_no}}</td>
              <td><b>{{$acom->RRN}}</td>
              <td><b>{{$acom->Card_Acceptor_Terminal}}</td>
              <td><b>{{$acom->txn_curr_code}}</td>
              <td><b>{{$acom->settle_curr_code}}</td>
              <td><b>{{$acom->from_acc}}</td>
              <td><b>{{$acom->to_acc}}</td>
              <td><b>{{$acom->msg_type_identifier}}</td>
              <td><b>{{$acom->res_code}}</td>
              <td><b>{{$acom->receivable_fee}}</td>
              <td><b>{{$acom->payable_fee}}</td>
              <td><b>{{$acom->interchange_fee}}</td>
              <td><b>{{$acom->POS_mode}}</td>
              <td><b>{{$acom->system_traceno}}</td>
              <td><b>{{$acom->POS_condition}}</td>
              <td><b>{{$acom->card_acceptor_code}}</td>
              <td><b>{{$acom->accept_amt}}</td>
              <td><b>{{$acom->cardholder_fee}}</td>
              <td><b>{{$acom->txn_tramsmission}}</td>
            </tr>

            @endforeach
        </tbody>
      </table>
   </div>

@endsection
