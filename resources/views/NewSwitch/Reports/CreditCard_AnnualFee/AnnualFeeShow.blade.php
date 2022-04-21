@extends('layouts/app')
@section('content')
    <link href="/css/style.css" rel="stylesheet">
    <div class="btn1 ml-3">
        <a href="{{ route('annualfeehome') }}" role="button"><span>Back</span></a>
    </div>
    <div class="btn4">
        <a href="{{ route('AnnualFeedownload', ['month1' => $month1, 'date2' => $date2, 'date1' => $date1]) }}"
            onclick="return confirm('Are you sure you want to download?')" role="button"><span>Download EXCEL</span></a>
        <label class="float-right mr-3">Report Date : {{ $date1 }}</label>
    </div>
    <div class="container-fluid d-flex flex-column-reverse">
        <div class="mt-3 scroll-table-container">
            <table id="table" class="scroll-table">
                <tr>
                    <th scope="col">CARD_CUST_ID</th>
                    <th scope="col">CARD_EMBOSSED_NAME</th>
                    <th scope="col">CARD_TYPE</th>
                    <th scope="col">CARD_CRDACCT_NO</th>
                    <th scope="col">CARD_BS_IND</th>
                    <th scope="col">CARD_PLASTIC_CODE</th>
                    <th scope="col">CRDACCT_STATUS_ID</th>
                    <th scope="col">CRDACCT_AGE_CODE</th>
                    <th scope="col">CARD_PLASTIC_DATE</th>
                    <th scope="col">CARD_APP_DATE</th>
                    <th scope="col">CARD_EXPIRY_CCYYMM</th>
                </tr>
                @foreach ($annual as $annual)
                    <tr>
                        {{-- <td>{{ $annual->NO }}</td> --}}
                        <td>{{ $annual->CARD_CUST_ID }}</td>
                        <td>{{ $annual->CARD_EMBOSSED_NAME }}</td>
                        <td>{{ $annual->CARD_TYPE }}</td>
                        <td>{{ $annual->CARD_CRDACCT_NO }}</td>
                        <td>{{ $annual->CARD_BS_IND }}</td>
                        <td>{{ $annual->CARD_PLASTIC_CODE }}</td>
                        <td>{{ $annual->CRDACCT_STATUS_ID }}</td>
                        <td>{{ $annual->CRDACCT_AGE_CODE }}</td>
                        <td>{{ $annual->CARD_PLASTIC_DATE }}</td>
                        <td>{{ $annual->CARD_APP_DATE }}</td>
                        <td>{{ $annual->CARD_EXPIRY_CCYYMM }}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection
