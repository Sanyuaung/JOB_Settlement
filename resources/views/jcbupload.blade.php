@extends('layouts/app')
@section('content')
<link href="/css/style.css" rel="stylesheet">

   <div class="container-fluid">
        <div class="text-center">
            {{-- <a href="{{route('download')}}" class="btn btn float-right rounded-pill" role="button">Download</a> --}}
            <a href="{{route('JCBHome')}}" class="btn white-text btn-indigo btn-rounded-pill float-left" role="button">Back</a></div>
        <div>
            <a href="{{route('pdf')}}" class="btn white-text btn-indigo btn-rounded-pill float" onclick="return confirm('Are you sure you want to download?')" role="button">Download PDF</a>
        </div>
    <div class="scroll-table-container">
      <table id="table" class="scroll-table">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Institution Code</th>
            <th scope="col">Acquiriing Bank Name</th>
            <th scope="col">Account Number</th>
            <th scope="col">Settlement Date</th>
            <th scope="col">MPU Commission</th>
            <th scope="col">Acquiriing Settlement Amount</th>
            <th scope="col">Debit</th>
            <th scope="col">Credit</th>
          </tr>
            @foreach ($users as $user)
            <tr>
              <td>{{$user->NO}}</td>
              <td>{{$user->Institution_Code}}</td>
              <td>{{$user->Short_Name}}</td>
              <td>{{$user->Account_Number}}</td>
              <td>{{$user->date}}</td>
              <td>{{$user->MPU_Comm}}</td>
              <td>{{$user->Acq_Bank_Settle_Amt}}</td>
              <td>{{$user->Debit}}</td>
              <td>{{$user->Credit}}</td>
            </tr>
            @endforeach
                @foreach ($one as $one)
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">{{$one->one}}</th>
                @endforeach
                @foreach ($two as $two)
                    <th scope="col">{{$two->two}}</th>
                @endforeach
                @foreach ($three as $three)
                    <th scope="col">{{$three->three}}</th>
                @endforeach
                @foreach ($four as $four)
                    <th scope="col">{{$four->four}}</th>
                @endforeach
             </tr>
      </table>
   </div>
  </div>

@endsection
