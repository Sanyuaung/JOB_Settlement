@extends('layouts/app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">
    <div class="btn1 ml-3">
        <a href="{{ route('pssd04home') }}" role="button"><span>Back</span></a>
    </div>
    <div class="btn4">
        <a href="{{ route('pssd04download', $date) }}" onclick="return confirm('Are you sure you want to download?')"
            role="button"><span>Download
                EXCEL</span></a>
        <label class="float-right mr-3">Report Date : {{ $date }}</label>
    </div>
    <div class="container-fluid d-flex flex-column-reverse">
        <div class="mt-3 scroll-table-container">
            <table id="table" class="scroll-table">
                <tr>
                    <th scope="col">Report Date</th>
                    <th scope="col">Card Name </th>
                    <th scope="col">Category of Card</th>
                    <th scope="col">No of Used Card</th>
                    <th scope="col">Category of Transaction</th>
                    <th scope="col">CURRENCY CODE</th>
                    <th scope="col">Source</th>
                    <th scope="col">No of transactions</th>
                    <th scope="col">Transaction Amount</th>
                    <th scope="col">Transaction Amount MMK</th>
                    <th scope="col">Remark</th>
                </tr>
                @foreach ($pssd04 as $pssd04)
                    <tr>
                        {{-- <td>{{ $pssd04->NO }}</td> --}}
                        <td>{{ $pssd04->Report_Date }}</td>
                        <td>{{ $pssd04->Card_Name }}</td>
                        <td>{{ $pssd04->Category_of_Card }}</td>
                        <td>{{ $pssd04->No_of_Used_Card }}</td>
                        <td>{{ $pssd04->Category_of_Transaction }}</td>
                        <td>{{ $pssd04->CURRENCY_CODE }}</td>
                        <td>{{ $pssd04->Source }}</td>
                        <td>{{ $pssd04->No_of_transactions }}</td>
                        <td>{{ $pssd04->Transaction_Amount }}</td>
                        <td>{{ $pssd04->Txn_Amt_MMK }}</td>
                        <td>{{ $pssd04->Remark }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection
