@extends('layouts/app')
@section('content')
<link href="/css/style.css" rel="stylesheet">

   <div class="container-fluid">
   {{-- <label class="font-weight-bold text-danger"><b>{{$filename}}</label> --}}
      <div class="btn1">
        <a href="{{route('MPUHome')}}"  class="btn white-text btn-indigo btn-rounded-pill float-left" role="button"><span>Back</span></a>
      </div>
      <div>
            <a href="{{route('downloadIND11c')}}" onclick="return confirm('Are you sure you want to download?')" class="btn white-text btn-indigo btn-rounded-pill" role="button">Download EXCEL</a>
            <label class="float-right">{{$filename}}</label>
        </div>
    <div class="scroll-table-container">
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
            @foreach ($ind11c as $ind11c)
            <tr>
              <td>{{$ind11c->NO}}</td>
              <td>{{$ind11c->Record_Type}}</td>
              <td>{{$ind11c->PAN}}</td>
              <td>{{$ind11c->Processing_Code}}</td>
              <td>{{$ind11c->Amount_Transaction}}</td>
              <td>{{$ind11c->Amount_Settlement}}</td>
              <td>{{$ind11c->Sett_Conversion_Rate}}</td>
              <td>{{$ind11c->Currency_Code_Transaction}}</td>
              <td>{{$ind11c->Settlement_Currency_Code}}</td>
              <td>{{$ind11c->Transmission_Date_and_Time}}</td>
              <td>{{$ind11c->System_Trace_Audit_Number}}</td>
              <td>{{$ind11c->Authorization_Identification_Response}}</td>
              <td>{{$ind11c->Date_Authorization}}</td>
              <td>{{$ind11c->RRN}}</td>
              <td>{{$ind11c->Acquring_IIN}}</td>
              <td>{{$ind11c->Forwarding_IIN}}</td>
              <td>{{$ind11c->Merchant_Type}}</td>
              <td>{{$ind11c->Card_Acceptor_Terminal_Identification}}</td>
              <td>{{$ind11c->Card_Acceptor_Identification}}</td>
              <td>{{$ind11c->Card_Acceptor_Name}}</td>
              <td>{{$ind11c->Original_Transaction_Information}}</td>
              <td>{{$ind11c->Message_Reason_Code}}</td>
              <td>{{$ind11c->Receiving_IIN}}</td>
              <td>{{$ind11c->Issuing_IIN}}</td>
              <td>{{$ind11c->Identifer_of_Transaction_Feature}}</td>
              <td>{{$ind11c->Point_of_Service_Condition_Code}}</td>
              <td>{{$ind11c->Merchant_Country_Code}}</td>
              <td>{{$ind11c->Authorization_Type}}</td>
              <td>{{$ind11c->Service_Fee_Receivable}}</td>
              <td>{{$ind11c->Service_Fee_Payable}}</td>
              <td>{{$ind11c->Reserved}}</td>
            </tr>
            @endforeach
      </table>
    </div>
   </div>

@endsection
