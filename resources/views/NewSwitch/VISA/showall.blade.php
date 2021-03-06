@extends('layouts/app')
@section('content')
    <link href="/css/visa.css" rel="stylesheet">
    <div class="btn2">
        <a href="{{ route('visa') }}" class="btn white-text btn-indigo btn-rounded-pill float-left" role="button"><span>Add
                New Transactions</span></a>
    </div>
    <div class="container-fluid d-flex flex-column-reverse">

        <div class="mt-2 table-container">
            <table id="table" class="scroll-table">
                <tr>
                    {{-- <th scope="col">No</th> --}}
                    <th scope="col">Settlement Date</th>
                    <th scope="col">Number of Transactions</th>
                    <th scope="col">USD Amount</th>
                    <th scope="col">MMK Amount</th>
                    <th scope="col">Exchange Rate</th>
                    <th scope="col">Net Settlement Amount</th>
                    <th scope="col">Settlement Amount (USD) at Nostro</th>
                    <th scope="col">Funding Date</th>
                    <th scope="col">Commissions Amount</th>
                    <th scope="col">Type of Transaction</th>
                    <th scope="col">Card Type</th>
                    <th scope="col">Authorization Currency</th>
                    <th scope="col">Update</th>
                </tr>
                @foreach ($tranxs as $tranx)
                    <tr>
                        {{-- <td>{{$$no->No}}</td> --}}
                        <td>{{ $tranx->settleDate }}</td>
                        <td>{{ $tranx->noTrans }}</td>
                        <td>{{ $tranx->usdAmt }}</td>
                        <td>{{ $tranx->mmkAmt }}</td>
                        <td>{{ $tranx->exRate }}</td>
                        <td>{{ $tranx->netAmt }}</td>
                        <td>{{ $tranx->settAmt_Nostro_USD }}</td>
                        <td>{{ $tranx->fundingDate }}</td>
                        <td>{{ $tranx->commAmt }}</td>
                        <td>{{ $tranx->typeOfTrans }}</td>
                        <td>{{ $tranx->cardType }}</td>
                        <td>{{ $tranx->currency }}</td>
                        <td><a class="btn btn-sm green white-text" href="{{ route('visaedit', $tranx->id) }}">Update</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="col-md-12">
                {{ $tranxs->links('vendor.pagination.custom') }}
            </div>
        </div>
    @endsection
