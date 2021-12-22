@extends('layouts/app')
@section('content')
<link href="/css/style.css" rel="stylesheet">

   <div class="container-fluid">
   {{-- <label class="font-weight-bold text-danger"><b>{{$filename}}</label> --}}
       <div class="text-center">
            {{-- <a href="{{route('download')}}" class="btn btn float-right" role="button">Download</a> --}}
            <a href="{{route('MPUHome')}}" class="btn btn-primary float-left rounded-pill" role="button">Back</a></div>
        <div>
          <a href="{{route('downlodIERR')}}" onclick="return confirm('Are you sure you want to download?')" class="ml-4 btn btn-primary float-left rounded-pill">Download EXCEL</a>
          <label class="float-right">{{$filename}}</label>
        </div>
            <br>
            <br>
      <div class="scroll-table-container">
        <table id="table" class="scroll-table">
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
            @foreach ($ierr as $ierr)
            <tr>
              <td>{{$ierr->NO}}</td>
              <td>{{$ierr->recordtype}}</td>
              <td>{{$ierr->CardNo}}</td>
              <td>{{$ierr->process_code}}</td>
              <td>{{$ierr->txn_amt}}</td>
              <td>{{$ierr->settle_amt}}</td>
              <td>{{$ierr->sett_rate}}</td>
              <td>{{$ierr->system_trace}}</td>
              <td>{{$ierr->txn_time}}</td>
              <td>{{$ierr->txn_date}}</td>
              <td>{{$ierr->settle_date}}</td>
              <td>{{$ierr->MCC}}</td>
              <td>{{$ierr->Acq_institution_code}}</td>
              <td>{{$ierr->Issuer_bank_code}}</td>
              <td>{{$ierr->beneficiary_bank_code}}</td>
              <td>{{$ierr->Forward_institution_code}}</td>
              <td>{{$ierr->auth_no}}</td>
              <td>{{$ierr->RRN}}</td>
              <td>{{$ierr->Card_Acceptor_Terminal}}</td>
              <td>{{$ierr->txn_curr_code}}</td>
              <td>{{$ierr->settle_curr_code}}</td>
              <td>{{$ierr->from_acc}}</td>
              <td>{{$ierr->to_acc}}</td>
              <td>{{$ierr->msg_type_identifier}}</td>
              <td>{{$ierr->reason_code}}</td>
              <td>{{$ierr->receivable_fee}}</td>
              <td>{{$ierr->payable_fee}}</td>
              <td>{{$ierr->interchange_fee}}</td>
              <td>{{$ierr->POS_mode}}</td>
              <td>{{$ierr->system_traceno}}</td>
              <td>{{$ierr->POS_condition}}</td>
              <td>{{$ierr->card_acceptor_code}}</td>
              <td>{{$ierr->accept_amt}}</td>
              <td>{{$ierr->cardholder_fee}}</td>
              <td>{{$ierr->txn_tramsmission}}</td>
            </tr>
            @endforeach
      </table>
   </div>
  </div>

@endsection
