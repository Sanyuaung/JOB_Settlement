@extends('layouts/app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">

    <div class="container-fluid">
        <div class="scroll-table-container">
            <div class="btn1">
                <a href="{{ route('pssd02home') }}" role="button"><span>Back</span></a>
            </div>
            <div class="btn4">
                <a href="{{ route('pssd02download', $date) }}"
                    onclick="return confirm('Are you sure you want to download?')" role="button"><span>Download
                        EXCEL</span></a>
            </div>
            <div><label class="float-right mr-3">Report Date : {{ $date }}</label></div>
            <br><br><br>
            {{-- <div class="scroll-table-container"> --}}
            <table id="table" class="scroll-table">
                <tr>
                    {{-- <th scope="col">NO</th> --}}
                    <th scope="col">Report_Date</th>
                    <th scope="col">Card_Name</th>  
                    <th scope="col">Transaction_Date</th>
                    <th scope="col">Category_of_Card</th>
                    <th scope="col">CURRENCY</th>
                    <th scope="col">Source</th>
                    <th scope="col">Used_Location</th>
                    <th scope="col">Number_of_Acquire_Transction</th>
                    <th scope="col">Acquire_Transaction_Amount</th>
                    <th scope="col">Acquire_Transaction_Amount_MMK</th>
                    <th scope="col">Number_of_Used_Transaction</th>
                    <th scope="col">Used_Transaction_Amount</th>
                    <th scope="col">Used_Transaction_Amount_MMK</th>
                    <th scope="col">Sold_Transaction_Count</th>
                    <th scope="col">Sold_Transaction_Amount</th>
                    <th scope="col">Sold_Transaction_Amount_MMK</th>
                    <th scope="col">Commision_Amount</th>
                    <th scope="col">Commision_Amount_MMK</th>
                    <th scope="col">Remark</th>
                </tr>
                @foreach ($pssd02 as $pssd02)
                    <tr>
                        <td>{{ $pssd02->Report_Date }}</td>
                        <td>{{ $pssd02->Card_Name }}</td>
                        <td>{{ $pssd02->Transaction_Date }}</td>
                        <td>{{ $pssd02->Category_of_Card }}</td>
                        <td>{{ $pssd02->CURRENCY }}</td>
                        <td>{{ $pssd02->Source }}</td>
                        <td>{{ $pssd02->Used_Location }}</td>
                        <td>{{ $pssd02->Number_of_Acquire_Transction }}</td>
                        <td>{{ $pssd02->Acquire_Transaction_Amount }}</td>
                        <td>{{ $pssd02->Acquire_Transaction_Amount_MMK }}</td>
                        <td>{{ $pssd02->Number_of_Used_Transaction }}</td>
                        <td>{{ $pssd02->Used_Transaction_Amount }}</td>
                        <td>{{ $pssd02->Used_Transaction_Amount_MMK }}</td>
                        <td>{{ $pssd02->Sold_Transaction_Count }}</td>
                        <td>{{ $pssd02->Sold_Transaction_Amount }}</td>
                        <td>{{ $pssd02->Sold_Transaction_Amount_MMK }}</td>
                        <td>{{ $pssd02->Commision_Amount }}</td>
                        <td>{{ $pssd02->Commision_Amount_MMK }}</td>
                        <td>{{ $pssd02->Remark }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection
