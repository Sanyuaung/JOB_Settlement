@extends('layouts/app')
@section('content')
   <div class="container-fluid">
   <label class="font-weight-bold text-danger"><b>{{$filename}}</label>
       <div class="text-center">
            {{-- <a href="{{route('download')}}" class="btn btn float-right" role="button">Download</a> --}}
            <a href="{{route('MPUHome')}}"  class="mt-2 btn btn-info float-left rounded-pill" role="button">Back</a></div>

        <div>
                <a href="{{route('downlod01C')}}" onclick="return confirm('Are you sure you want to download?')" class="mt-2 ml-4 btn btn-info float-left rounded-pill" role="button">Download EXCEL</a>
        </div>
            <br>
            <br>
    <table class="mt-3 table table-hover text-center aqua-gradient black-text">
        <thead>
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
        </thead>
        <tbody>
            @foreach ($ijc01c as $ijc01c)
            <tr>
              <td><b>{{$ijc01c->NO}}</td>
              <td><b>{{$ijc01c->Record_Type}}</td>
              <td><b>{{$ijc01c->PAN}}</td>
              <td><b>{{$ijc01c->Processing_Code}}</td>
              <td><b>{{$ijc01c->Amount_Transaction}}</td>
              <td><b>{{$ijc01c->Amount_Settlement}}</td>
              <td><b>{{$ijc01c->Sett_Conversion_Rate}}</td>
              <td><b>{{$ijc01c->Currency_Code_Transaction}}</td>
              <td><b>{{$ijc01c->Settlement_Currency_Code}}</td>
              <td><b>{{$ijc01c->Transmission_Date_and_Time}}</td>
              <td><b>{{$ijc01c->System_Trace_Audit_Number}}</td>
              <td><b>{{$ijc01c->Authorization_Identification_Response}}</td>
              <td><b>{{$ijc01c->Date_Authorization}}</td>
              <td><b>{{$ijc01c->RRN}}</td>
              <td><b>{{$ijc01c->Acquring_IIN}}</td>
              <td><b>{{$ijc01c->Forwarding_IIN}}</td>
              <td><b>{{$ijc01c->Merchant_Type}}</td>
              <td><b>{{$ijc01c->Card_Acceptor_Terminal_Identification}}</td>
              <td><b>{{$ijc01c->Card_Acceptor_Identification}}</td>
              <td><b>{{$ijc01c->Card_Acceptor_Name}}</td>
              <td><b>{{$ijc01c->Original_Transaction_Information}}</td>
              <td><b>{{$ijc01c->Message_Reason_Code}}</td>
              <td><b>{{$ijc01c->Receiving_IIN}}</td>
              <td><b>{{$ijc01c->Issuing_IIN}}</td>
              <td><b>{{$ijc01c->Identifer_of_Transaction_Feature}}</td>
              <td><b>{{$ijc01c->Point_of_Service_Condition_Code}}</td>
              <td><b>{{$ijc01c->Merchant_Country_Code}}</td>
              <td><b>{{$ijc01c->Authorization_Type}}</td>
              <td><b>{{$ijc01c->Service_Fee_Receivable}}</td>
              <td><b>{{$ijc01c->Service_Fee_Payable}}</td>
              <td><b>{{$ijc01c->Reserved}}</td>
            </tr>
          

            @endforeach
        </tbody>
      </table>
   </div>

@endsection
