@extends('layouts/app')
@section('content')
<link href="/css/visa.css" rel="stylesheet">

<div class="container-fluid">
  <div class="text-left">
    <a href="{{route('visa')}}" class="btn white-text btn-indigo btn-rounded-pill" role="button">Add New Transactions</a>
  </div>  
  <div class="table-container">
    <table id="table" class="scroll-table">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Settlement Date</th>
        <th scope="col">Number of Transactions</th>
        <th scope="col">USD Amount</th>
        <th scope="col">MMK Amount</th>
        <th scope="col">Exchange Rate</th>
        <th scope="col">Commissions Amount</th>
        <th scope="col">Type of Transaction</th>
      </tr>
      @foreach ($tranxs as $tranx)
        <tr>
          <td>{{$tranx->id}}</td>
          <td>{{$tranx->settleDate}}</td>
          <td>{{$tranx->noTrans}}</td>
          <td>{{$tranx->usdAmt}}</td>
          <td>{{$tranx->mmkAmt}}</td>
          <td>{{$tranx->exRate}}</td>
          <td>{{$tranx->commAmt}}</td>
          <td>{{$tranx->typeOfTrans}}</td>
        </tr>
      @endforeach
    </table>
    <div class="col-md-12">
      {{$tranxs->links('vendor.pagination.custom')}}
    </div>
</div>

@endsection

