@extends('layouts/app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">
    <div class="btn1 ml-3">
        <a href="{{ route('pssd01home') }}" role="button"><span>Back</span></a>
    </div>
    <div class="btn4">
        <a href="{{ route('pssd01download', $date) }}" onclick="return confirm('Are you sure you want to download?')"
            role="button"><span>Download
                EXCEL</span></a>
        <label class="float-right mr-3">Report Date : {{ $date }}</label>
    </div>
    <div class="container-fluid d-flex flex-column-reverse">
        <div class="mt-3 scroll-table-container">
            <table id="table" class="scroll-table">
                <tr>
                    <th scope="col">Report Date</th>
                    <th scope="col">Card Name</th>
                    <th scope="col">Category of Card</th>
                    <th scope="col">Currency</th>
                    <th scope="col">Used Location</th>
                    <th scope="col">Used Card Quantity</th>
                    <th scope="col">Transaction Count</th>
                    <th scope="col">Used Card Transaction Amount</th>
                    <th scope="col">Used Card Transaction Amount_MMK</th>
                    <th scope="col">Remark</th>
                </tr>
                @foreach ($pssd01 as $pssd01)
                    <tr>
                        {{-- <td>{{ $pssd01->NO }}</td> --}}
                        <td>{{ $pssd01->Report_Date }}</td>
                        <td>{{ $pssd01->Card_Name }}</td>
                        <td>{{ $pssd01->Category_of_Card }}</td>
                        <td>{{ $pssd01->Currency }}</td>
                        <td>{{ $pssd01->Used_Location }}</td>
                        <td>{{ $pssd01->Used_Card_Quantity }}</td>
                        <td>{{ $pssd01->Transaction_Count }}</td>
                        <td>{{ $pssd01->Used_Card_Transaction_Amount }}</td>
                        <td>{{ $pssd01->Used_Card_Transaction_Amount_MMK }}</td>
                        <td>{{ $pssd01->Remark }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection
