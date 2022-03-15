@extends('layouts/app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">

    <div class="container-fluid">
        <div class="scroll-table-container">
            <div class="btn1">
                <a href="{{ route('MPUHome') }}" role="button"><span>Back</span></a>
            </div>
            <div class="btn4">
                <a href="{{ route('downlodinc01c') }}" onclick="return confirm('Are you sure you want to download?')"
                    role="button"><span>Download EXCEL</span></a>
            </div>
            <div><label class="float-right">{{ $filename }}</label>
            </div><br><br><br>
            {{-- <div class="scroll-table-container"> --}}
            <table id="table" class="scroll-table">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Record_Type</th>
                    <th scope="col">PAN</th>
                    <th scope="col">Processing_Code</th>
                    <th scope="col">Amount_Transaction</th>
                    <th scope="col">Amount_Settlement</th>
                    <th scope="col">Sett_Conversion_Rate</th>
                    <th scope="col">Currency_Code_Transaction</th>
                    <th scope="col">Settlement_Currency_Code</th>
                    <th scope="col">Transmission_Date_and_Time</th>
                    <th scope="col">System_Trace_Audit_Number</th>
                    <th scope="col">Authorization_Identification_Response</th>
                    <th scope="col">Date_Authorization</th>
                    <th scope="col">RRN</th>
                    <th scope="col">Acquring_IIN</th>
                    <th scope="col">Forwarding_IIN</th>
                    <th scope="col">Merchant_Type</th>
                    <th scope="col">Card_Acceptor_Terminal_Identification</th>
                    <th scope="col">Card_Acceptor_Identification</th>
                    <th scope="col">Card_Acceptor_Name</th>
                    <th scope="col">Original_Transaction_Information</th>
                    <th scope="col">Message_Reason_Code</th>
                    <th scope="col">Receiving_IIN</th>
                    <th scope="col">Issuing_IIN</th>
                    <th scope="col">Identifer_of_Transaction_Feature</th>
                    <th scope="col">Point_of_Service_Condition_Code</th>
                    <th scope="col">Merchant_Country_Code</th>
                    <th scope="col">Authorization_Type</th>
                    <th scope="col">Service_Fee_Receivable</th>
                    <th scope="col">Service_Fee_Payable</th>
                    <th scope="col">Reserved</th>
                </tr>
                @foreach ($inc01c as $inc01c)
                    <tr>
                        <td>{{ $inc01c->NO }}</td>
                        <td>{{ $inc01c->Record_Type }}</td>
                        <td>{{ $inc01c->PAN }}</td>
                        <td>{{ $inc01c->Processing_Code }}</td>
                        <td>{{ $inc01c->Amount_Transaction }}</td>
                        <td>{{ $inc01c->Amount_Settlement }}</td>
                        <td>{{ $inc01c->Sett_Conversion_Rate }}</td>
                        <td>{{ $inc01c->Currency_Code_Transaction }}</td>
                        <td>{{ $inc01c->Settlement_Currency_Code }}</td>
                        <td>{{ $inc01c->Transmission_Date_and_Time }}</td>
                        <td>{{ $inc01c->System_Trace_Audit_Number }}</td>
                        <td>{{ $inc01c->Authorization_Identification_Response }}</td>
                        <td>{{ $inc01c->Date_Authorization }}</td>
                        <td>{{ $inc01c->RRN }}</td>
                        <td>{{ $inc01c->Acquring_IIN }}</td>
                        <td>{{ $inc01c->Forwarding_IIN }}</td>
                        <td>{{ $inc01c->Merchant_Type }}</td>
                        <td>{{ $inc01c->Card_Acceptor_Terminal_Identification }}</td>
                        <td>{{ $inc01c->Card_Acceptor_Identification }}</td>
                        <td>{{ $inc01c->Card_Acceptor_Name }}</td>
                        <td>{{ $inc01c->Original_Transaction_Information }}</td>
                        <td>{{ $inc01c->Message_Reason_Code }}</td>
                        <td>{{ $inc01c->Receiving_IIN }}</td>
                        <td>{{ $inc01c->Issuing_IIN }}</td>
                        <td>{{ $inc01c->Identifer_of_Transaction_Feature }}</td>
                        <td>{{ $inc01c->Point_of_Service_Condition_Code }}</td>
                        <td>{{ $inc01c->Merchant_Country_Code }}</td>
                        <td>{{ $inc01c->Authorization_Type }}</td>
                        <td>{{ $inc01c->Service_Fee_Receivable }}</td>
                        <td>{{ $inc01c->Service_Fee_Payable }}</td>
                        <td>{{ $inc01c->Reserved }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
