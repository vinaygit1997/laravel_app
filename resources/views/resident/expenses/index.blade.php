@extends('layouts.resident')

@section('content')
<div class="container">
    <h1>Apartment Expenditures</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Paid Date</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
            @foreach($expenses as $expense)
            <tr>
                <td>{{ $expense->id }}</td>
                <td>{{ $expense->category }}</td>
                <td>{{ $expense->description }}</td>
                <td>{{ $expense->amount }}</td>
                <td>{{ $expense->paid_date }}</td>
                <td>
                    @if($expense->file_path)
                        <a href="{{ Storage::url($expense->file_path) }}" target="_blank">View File</a>
                    @else
                        No file uploaded
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
