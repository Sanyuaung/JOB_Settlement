@extends('layouts/app')
@section('content')
<link href="/css/style.css" rel="stylesheet">

   <div class="container-fluid">
   {{-- <label class="font-weight-bold text-danger"><b>{{$filename}}</label> --}}
       <div class="text-center">
            {{-- <a href="{{route('download')}}" class="btn btn float-right" role="button">Download</a> --}}
            <a href="{{route('MPUHome')}}"  class="btn btn-info float-left rounded-pill" role="button">Back</a></div>
        <div>
          <a href="{{route('downlod01C')}}" onclick="return confirm('Are you sure you want to download?')" class="ml-4 btn btn-info float-left rounded-pill" role="button">Download EXCEL</a>
          <label class="float-right">{{$filename}}</label>
        </div>
            <br>
            <br>
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
            @foreach ($ijc01c as $ijc01c)
            <tr>
              <td>{{$ijc01c->NO}}</td>
              <td>{{$ijc01c->Record_Type}}</td>
              <td>{{$ijc01c->PAN}}</td>
              <td>{{$ijc01c->Processing_Code}}</td>
              <td>{{$ijc01c->Amount_Transaction}}</td>
              <td>{{$ijc01c->Amount_Settlement}}</td>
              <td>{{$ijc01c->Sett_Conversion_Rate}}</td>
              <td>{{$ijc01c->Currency_Code_Transaction}}</td>
              <td>{{$ijc01c->Settlement_Currency_Code}}</td>
              <td>{{$ijc01c->Transmission_Date_and_Time}}</td>
              <td>{{$ijc01c->System_Trace_Audit_Number}}</td>
              <td>{{$ijc01c->Authorization_Identification_Response}}</td>
              <td>{{$ijc01c->Date_Authorization}}</td>
              <td>{{$ijc01c->RRN}}</td>
              <td>{{$ijc01c->Acquring_IIN}}</td>
              <td>{{$ijc01c->Forwarding_IIN}}</td>
              <td>{{$ijc01c->Merchant_Type}}</td>
              <td>{{$ijc01c->Card_Acceptor_Terminal_Identification}}</td>
              <td>{{$ijc01c->Card_Acceptor_Identification}}</td>
              <td>{{$ijc01c->Card_Acceptor_Name}}</td>
              <td>{{$ijc01c->Original_Transaction_Information}}</td>
              <td>{{$ijc01c->Message_Reason_Code}}</td>
              <td>{{$ijc01c->Receiving_IIN}}</td>
              <td>{{$ijc01c->Issuing_IIN}}</td>
              <td>{{$ijc01c->Identifer_of_Transaction_Feature}}</td>
              <td>{{$ijc01c->Point_of_Service_Condition_Code}}</td>
              <td>{{$ijc01c->Merchant_Country_Code}}</td>
              <td>{{$ijc01c->Authorization_Type}}</td>
              <td>{{$ijc01c->Service_Fee_Receivable}}</td>
              <td>{{$ijc01c->Service_Fee_Payable}}</td>
              <td>{{$ijc01c->Reserved}}</td>
            </tr>     
            @endforeach
      </table>
    </div>
  </div>

@endsection
