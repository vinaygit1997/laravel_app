@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Expenses</h1>

    <!-- Month Filter Form -->
    <!-- <div class="mb-3">
        <form action="{{ route('expenses.index') }}" method="GET" class="form-inline">
            <div class="form-group d-flex align-items-center">
    <label for="month" class="mr-2">Filter by Month:</label>
    <input type="month" id="month" name="month" class="form-control" value="{{ request('month') }}">
    <button type="submit" class="btn btn-primary ml-2">Filter</button>
</div>

            
        </form>
    </div> -->

    <!-- Button to Add New Expense -->
    <div class="mb-3">
        <a href="{{ route('expenses.create') }}" class="btn btn-primary">Add New Expense</a>
    </div>

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
