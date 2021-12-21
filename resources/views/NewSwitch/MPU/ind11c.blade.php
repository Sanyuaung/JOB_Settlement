@extends('layouts/app')
@section('content')
   <div class="container-fluid mt-4">
   <label class="font-weight-bold text-danger mr-5 mt-5"><b>{{$filename}}</label>
       <div class="text-center">
            {{-- <a href="{{route('download')}}" class="btn btn float-right" role="button">Download</a> --}}
            <a href="{{route('MPUHome')}}"  class="btn btn-primary float-left rounded-pill" role="button">Back</a></div>

        <div>
                <a href="{{route('downloadIND11c')}}" onclick="return confirm('Are you sure you want to download?')" class="ml-4 btn btn-primary float-left rounded-pill" role="button">Download EXCEL</a>
        </div>
            <br>
            <br>
    <table class="table table-hover text-center aqua-gradient black-text">
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
            @foreach ($ind11c as $ind11c)
            <tr>
              <td><b>{{$ind11c->NO}}</td>
              <td><b>{{$ind11c->Record_Type}}</td>
              <td><b>{{$ind11c->PAN}}</td>
              <td><b>{{$ind11c->Processing_Code}}</td>
              <td><b>{{$ind11c->Amount_Transaction}}</td>
              <td><b>{{$ind11c->Amount_Settlement}}</td>
              <td><b>{{$ind11c->Sett_Conversion_Rate}}</td>
              <td><b>{{$ind11c->Currency_Code_Transaction}}</td>
              <td><b>{{$ind11c->Settlement_Currency_Code}}</td>
              <td><b>{{$ind11c->Transmission_Date_and_Time}}</td>
              <td><b>{{$ind11c->System_Trace_Audit_Number}}</td>
              <td><b>{{$ind11c->Authorization_Identification_Response}}</td>
              <td><b>{{$ind11c->Date_Authorization}}</td>
              <td><b>{{$ind11c->RRN}}</td>
              <td><b>{{$ind11c->Acquring_IIN}}</td>
              <td><b>{{$ind11c->Forwarding_IIN}}</td>
              <td><b>{{$ind11c->Merchant_Type}}</td>
              <td><b>{{$ind11c->Card_Acceptor_Terminal_Identification}}</td>
              <td><b>{{$ind11c->Card_Acceptor_Identification}}</td>
              <td><b>{{$ind11c->Card_Acceptor_Name}}</td>
              <td><b>{{$ind11c->Original_Transaction_Information}}</td>
              <td><b>{{$ind11c->Message_Reason_Code}}</td>
              <td><b>{{$ind11c->Receiving_IIN}}</td>
              <td><b>{{$ind11c->Issuing_IIN}}</td>
              <td><b>{{$ind11c->Identifer_of_Transaction_Feature}}</td>
              <td><b>{{$ind11c->Point_of_Service_Condition_Code}}</td>
              <td><b>{{$ind11c->Merchant_Country_Code}}</td>
              <td><b>{{$ind11c->Authorization_Type}}</td>
              <td><b>{{$ind11c->Service_Fee_Receivable}}</td>
              <td><b>{{$ind11c->Service_Fee_Payable}}</td>
              <td><b>{{$ind11c->Reserved}}</td>
            </tr>
          

            @endforeach
        </tbody>
      </table>
   </div>

@endsection
