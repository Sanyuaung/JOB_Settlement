@extends('layouts/app')
@section('content')
    @include('sweetalert::alert')

    <link href="/css/style.css" rel="stylesheet">
    <div class="btn1 ml-3">
        <a href="{{ route('JCBHome') }}" role="button"><span>Back</span></a>
    </div>
    <div class="btn2">
        <a href="{{ route('pdf') }}" onclick="return confirm('Are you sure you want to download?')"
            role="button"><span>Download PDF</span></a>
    </div>
    <div class="container-fluid d-flex flex-column-reverse">
        <div class="mt-3 scroll-table-container">
            <table id="table" class="scroll-table">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Institution Code</th>
                    <th scope="col">Acquiriing Bank Name</th>
                    <th scope="col">Account Number</th>
                    <th scope="col">Settlement Date</th>
                    <th scope="col">MPU Commission</th>
                    <th scope="col">Acquiriing Settlement Amount</th>
                    <th scope="col">Debit</th>
                    <th scope="col">Credit</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->NO }}</td>
                        <td>{{ $user->Institution_Code }}</td>
                        <td>{{ $user->Short_Name }}</td>
                        <td>{{ $user->Account_Number }}</td>
                        <td>{{ $user->date }}</td>
                        <td>{{ $user->MPU_Comm }}</td>
                        <td>{{ $user->Acq_Bank_Settle_Amt }}</td>
                        <td>{{ $user->Debit }}</td>
                        <td>{{ $user->Credit }}</td>
                    </tr>
                @endforeach
                @foreach ($one as $one)
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">{{ $one->one }}</th>
                @endforeach
                @foreach ($two as $two)
                    <th scope="col">{{ $two->two }}</th>
                @endforeach
                @foreach ($three as $three)
                    <th scope="col">{{ $three->three }}</th>
                @endforeach
                @foreach ($four as $four)
                    <th scope="col">{{ $four->four }}</th>
                @endforeach
                </tr>
            </table>
        </div>
    </div>
@endsection
