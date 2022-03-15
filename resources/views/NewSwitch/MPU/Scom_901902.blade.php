@extends('layouts/app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">

    <div class="container-fluid">
        <div class="scroll-table-container">
            <div class="btn1">
                <a href="{{ route('MPUHome') }}" role="button"><span>Back</span></a>
            </div>
            <div class="btn4">
                <a href="{{ route('downloadincSCOM_901902') }}"
                    onclick="return confirm('Are you sure you want to download?')" role="button"><span>Download
                        EXCEL</span></a>
            </div>
            <div><label class="float-right">{{ $filename }}</label>
            </div><br><br><br>
            {{-- <div class="scroll-table-container"> --}}
            <table id="table" class="scroll-table">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">recordtype</th>
                    <th scope="col">member_institution</th>
                    <th scope="col">curr_code</th>
                    <th scope="col">statistics_txn_code</th>
                    <th scope="col">no_txn_summary</th>
                    <th scope="col">credit_amt</th>
                    <th scope="col">debit_amt</th>
                    <th scope="col">reserved</th>
                </tr>
                @foreach ($scom_901902 as $scom_901902)
                    <tr>
                        <td>{{ $scom_901902->NO }}</td>
                        <td>{{ $scom_901902->recordtype }}</td>
                        <td>{{ $scom_901902->member_institution }}</td>
                        <td>{{ $scom_901902->curr_code }}</td>
                        <td>{{ $scom_901902->statistics_txn_code }}</td>
                        <td>{{ $scom_901902->no_txn_summary }}</td>
                        <td>{{ $scom_901902->credit_amt }}</td>
                        <td>{{ $scom_901902->debit_amt }}</td>
                        <td>{{ $scom_901902->reserved }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
