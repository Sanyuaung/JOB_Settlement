@extends('layouts/app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">

    <div class="container-fluid">
        <div class="scroll-table-container">
            <div class="btn1">
                <a href="{{ route('cohome') }}" role="button"><span>Back</span></a>
            </div>
            <div class="btn4">
                <a href="{{ route('codownload', $date) }}" onclick="return confirm('Are you sure you want to download?')"
                    role="button"><span>Download EXCEL</span></a>
            </div>
            <div><label class="float-right mr-3">Report Date : {{ $date }}</label></div>
            <br><br><br>
            {{-- <div class="scroll-table-container"> --}}
            <table id="table" class="scroll-table">
                <tr>
                    {{-- <th scope="col">NO</th> --}}
                    <th scope="col">CUST_ID</th>
                    <th scope="col">CUST_NAME</th>
                    <th scope="col">CONTACT_NAME</th>
                    <th scope="col">CONTACT_BIRTH_DATE</th>
                    <th scope="col">CONTACT_MOBILE</th>
                    <th scope="col">CONTACT_EMPLOYER_NAME</th>
                    <th scope="col">CONTACT_STAFF</th>
                    <th scope="col">CUST_BRANCH_ID</th>
                    <th scope="col">ACCOUNT_NO</th>
                    <th scope="col">STMT_MONTH</th>
                    <th scope="col">CURRENCY</th>
                    <th scope="col">OPEN_BALANCE</th>
                    <th scope="col">ACCGRPLMT_CREDIT_LMT</th>
                    <th scope="col">CLOSE_BALANCE</th>
                    <th scope="col">CURR_AGE_CODE</th>
                    <th scope="col">STATUS</th>
                </tr>
                @foreach ($co as $co)
                    <tr>
                        {{-- <td>{{ $co->NO }}</td> --}}
                        <td>{{ $co->CUST_ID }}</td>
                        <td>{{ $co->CUST_NAME }}</td>
                        <td>{{ $co->CONTACT_NAME }}</td>
                        <td>{{ $co->CONTACT_BIRTH_DATE }}</td>
                        <td>{{ $co->CONTACT_MOBILE }}</td>
                        <td>{{ $co->CONTACT_EMPLOYER_NAME }}</td>
                        <td>{{ $co->CONTACT_STAFF }}</td>
                        <td>{{ $co->CUST_BRANCH_ID }}</td>
                        <td>{{ $co->ACCOUNT_NO }}</td>
                        <td>{{ $co->STMT_MONTH }}</td>
                        <td>{{ $co->CURRENCY }}</td>
                        <td>{{ $co->OPEN_BALANCE }}</td>
                        <td>{{ $co->ACCGRPLMT_CREDIT_LMT }}</td>
                        <td>{{ $co->CLOSE_BALANCE }}</td>
                        <td>{{ $co->CURR_AGE_CODE }}</td>
                        <td>{{ $co->STATUS }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection
