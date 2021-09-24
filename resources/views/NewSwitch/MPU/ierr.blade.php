@extends('layouts/app')
@section('content')
   <div class="container-fluid mt-4">
   <label class="font-weight-bold text-danger mr-5 mt-5"><b>{{$filename}}</label>
       <div class="text-center">

            {{-- <a href="{{route('download')}}" class="btn btn float-right" role="button">Download</a> --}}
            <a href="{{route('MPUHome')}}" class="btn btn-info float-left rounded-pill" role="button">Back</a></div>

        <div>
                <a href="{{route('downlodIERR')}}" onclick="return confirm('Are you sure you want to download?')" class="ml-4 btn btn-info float-left rounded-pill">Download EXCEL</a>
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
            @foreach ($ierr as $ierr)
            <tr>
              <td><b>{{$ierr->NO}}</td>
              <td><b>{{$ierr->recordtype}}</td>
              <td><b>{{$ierr->CardNo}}</td>
              <td><b>{{$ierr->process_code}}</td>
              <td><b>{{$ierr->txn_amt}}</td>
              <td><b>{{$ierr->settle_amt}}</td>
              <td><b>{{$ierr->sett_rate}}</td>
              <td><b>{{$ierr->system_trace}}</td>
              <td><b>{{$ierr->txn_time}}</td>
              <td><b>{{$ierr->txn_date}}</td>
              <td><b>{{$ierr->settle_date}}</td>
              <td><b>{{$ierr->MCC}}</td>
              <td><b>{{$ierr->Acq_institution_code}}</td>
              <td><b>{{$ierr->Issuer_bank_code}}</td>
              <td><b>{{$ierr->beneficiary_bank_code}}</td>
              <td><b>{{$ierr->Forward_institution_code}}</td>
              <td><b>{{$ierr->auth_no}}</td>
              <td><b>{{$ierr->RRN}}</td>
              <td><b>{{$ierr->Card_Acceptor_Terminal}}</td>
              <td><b>{{$ierr->txn_curr_code}}</td>
              <td><b>{{$ierr->settle_curr_code}}</td>
              <td><b>{{$ierr->from_acc}}</td>
              <td><b>{{$ierr->to_acc}}</td>
              <td><b>{{$ierr->msg_type_identifier}}</td>
              <td><b>{{$ierr->reason_code}}</td>
              <td><b>{{$ierr->receivable_fee}}</td>
              <td><b>{{$ierr->payable_fee}}</td>
              <td><b>{{$ierr->interchange_fee}}</td>
              <td><b>{{$ierr->POS_mode}}</td>
              <td><b>{{$ierr->system_traceno}}</td>
              <td><b>{{$ierr->POS_condition}}</td>
              <td><b>{{$ierr->card_acceptor_code}}</td>
              <td><b>{{$ierr->accept_amt}}</td>
              <td><b>{{$ierr->cardholder_fee}}</td>
              <td><b>{{$ierr->txn_tramsmission}}</td>
            </tr>
            

            @endforeach
        </tbody>
      </table>
   </div>

@endsection
