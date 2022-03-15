@extends('layouts/app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">

    <div class="container-fluid">
        <div class="scroll-table-container">
            <div class="btn1">
                <a href="{{ route('MPUHome') }}" role="button"><span>Back</span></a>
            </div>
            <div class="btn4">
                <a href="{{ route('downlodijc01_900') }}" onclick="return confirm('Are you sure you want to download?')"
                    role="button"><span>Download EXCEL</span></a>
            </div>
            <div><label class="float-right">{{ $filename }}</label>
            </div><br><br><br>
            {{-- <div class="scroll-table-container"> --}}
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
                @foreach ($ijc01_900s as $ijc01_900s)
                    <tr>
                        <td>{{ $ijc01_900s->NO }}</td>
                        <td>{{ $ijc01_900s->recordtype }}</td>
                        <td>{{ $ijc01_900s->member_institution }}</td>
                        <td>{{ $ijc01_900s->Outgoing_amt_sign }}</td>
                        <td>{{ $ijc01_900s->Outgoing_amt }}</td>
                        <td>{{ $ijc01_900s->Outgoing_fee_sign }}</td>
                        <td>{{ $ijc01_900s->outgoing_fee }}</td>
                        <td>{{ $ijc01_900s->incoming_amt_sign }}</td>
                        <td>{{ $ijc01_900s->incoming_amt }}</td>
                        <td>{{ $ijc01_900s->incoming_fee_sign }}</td>
                        <td>{{ $ijc01_900s->incoming_fee }}</td>
                        <td>{{ $ijc01_900s->STF_amt_sign }}</td>
                        <td>{{ $ijc01_900s->STF_amt }}</td>
                        <td>{{ $ijc01_900s->STF_Fee_sign }}</td>
                        <td>{{ $ijc01_900s->STF_fee }}</td>
                        <td>{{ $ijc01_900s->outgoing_summary }}</td>
                        <td>{{ $ijc01_900s->incoming_summary }}</td>
                        <td>{{ $ijc01_900s->settlement_curr }}</td>
                        <td>{{ $ijc01_900s->reserved }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
