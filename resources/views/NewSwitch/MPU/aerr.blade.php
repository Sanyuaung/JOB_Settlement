@extends('layouts/app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">

    <div class="container-fluid">
        <div class="scroll-table-container">
            <div class="btn1">
                <a href="{{ route('MPUHome') }}" role="button"><span>Back</span></a>
            </div>
            <div class="btn4">
                <a href="{{ route('downloadAerr') }}" onclick="return confirm('Are you sure you want to download?')"
                    role="button"><span>Download EXCEL</span></a>
            </div>
            <div><label class="float-right">{{ $filename }}</label>
            </div><br><br><br>
            {{-- <div class="scroll-table-container"> --}}
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
                @foreach ($aerr as $aerr)
                    <tr>
                        <td>{{ $aerr->NO }}</td>
                        <td>{{ $aerr->recordtype }}</td>
                        <td>{{ $aerr->CardNo }}</td>
                        <td>{{ $aerr->process_code }}</td>
                        <td>{{ $aerr->txn_amt }}</td>
                        <td>{{ $aerr->settle_amt }}</td>
                        <td>{{ $aerr->sett_rate }}</td>
                        <td>{{ $aerr->system_trace }}</td>
                        <td>{{ $aerr->txn_time }}</td>
                        <td>{{ $aerr->txn_date }}</td>
                        <td>{{ $aerr->settle_date }}</td>
                        <td>{{ $aerr->MCC }}</td>
                        <td>{{ $aerr->Acq_institution_code }}</td>
                        <td>{{ $aerr->Issuer_bank_code }}</td>
                        <td>{{ $aerr->beneficiary_bank_code }}</td>
                        <td>{{ $aerr->Forward_institution_code }}</td>
                        <td>{{ $aerr->auth_no }}</td>
                        <td>{{ $aerr->RRN }}</td>
                        <td>{{ $aerr->Card_Acceptor_Terminal }}</td>
                        <td>{{ $aerr->txn_curr_code }}</td>
                        <td>{{ $aerr->settle_curr_code }}</td>
                        <td>{{ $aerr->from_acc }}</td>
                        <td>{{ $aerr->to_acc }}</td>
                        <td>{{ $aerr->msg_type_identifier }}</td>
                        <td>{{ $aerr->reason_code }}</td>
                        <td>{{ $aerr->receivable_fee }}</td>
                        <td>{{ $aerr->payable_fee }}</td>
                        <td>{{ $aerr->interchange_fee }}</td>
                        <td>{{ $aerr->POS_mode }}</td>
                        <td>{{ $aerr->system_traceno }}</td>
                        <td>{{ $aerr->POS_condition }}</td>
                        <td>{{ $aerr->card_acceptor_code }}</td>
                        <td>{{ $aerr->accept_amt }}</td>
                        <td>{{ $aerr->cardholder_fee }}</td>
                        <td>{{ $aerr->txn_tramsmission }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
