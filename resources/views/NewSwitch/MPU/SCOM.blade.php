@extends('layouts/app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">
    <div class="btn1 ml-3">
        <a href="{{ route('MPUHome') }}" role="button"><span>Back</span></a>
    </div>
    <div class="btn4">
        <a href="{{ route('downloadincSCOM') }}" onclick="return confirm('Are you sure you want to download?')"
            role="button"><span>Download EXCEL</span></a>
        <label class="float-right">{{ $filename }}</label>
    </div>
    <div class="container-fluid d-flex flex-column-reverse">
        <div class="mt-3 scroll-table-container">
            <table id="table" class="scroll-table">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">recordtype</th>
                    <th scope="col">member_institution</th>
                    <th scope="col">Outgoing_amt_sign</th>
                    <th scope="col">Outgoing_amt</th>
                    <th scope="col">Outgoing_fee_sign</th>
                    <th scope="col">outgoing_fee</th>
                    <th scope="col">incoming_amt_sign</th>
                    <th scope="col">incoming_amt</th>
                    <th scope="col">incoming_fee_sign</th>
                    <th scope="col">incoming_fee</th>
                    <th scope="col">STF_amt_sign</th>
                    <th scope="col">STF_amt</th>
                    <th scope="col">STF_Fee_sign</th>
                    <th scope="col">STF_fee</th>
                    <th scope="col">outgoing_sum</th>
                    <th scope="col">incoming_summary</th>
                    <th scope="col">settlement_curr</th>
                    <th scope="col">reserved</th>
                </tr>
                @foreach ($scom as $scom)
                    <tr>
                        <td>{{ $scom->NO }}</td>
                        <td>{{ $scom->recordtype }}</td>
                        <td>{{ $scom->member_institution }}</td>
                        <td>{{ $scom->Outgoing_amt_sign }}</td>
                        <td>{{ $scom->Outgoing_amt }}</td>
                        <td>{{ $scom->Outgoing_fee_sign }}</td>
                        <td>{{ $scom->outgoing_fee }}</td>
                        <td>{{ $scom->incoming_amt_sign }}</td>
                        <td>{{ $scom->incoming_amt }}</td>
                        <td>{{ $scom->incoming_fee_sign }}</td>
                        <td>{{ $scom->incoming_fee }}</td>
                        <td>{{ $scom->STF_amt_sign }}</td>
                        <td>{{ $scom->STF_amt }}</td>
                        <td>{{ $scom->STF_Fee_sign }}</td>
                        <td>{{ $scom->STF_fee }}</td>
                        <td>{{ $scom->outgoing_summary }}</td>
                        <td>{{ $scom->incoming_summary }}</td>
                        <td>{{ $scom->settlement_curr }}</td>
                        <td>{{ $scom->reserved }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
