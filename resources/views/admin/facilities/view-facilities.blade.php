@extends('layouts.admin')

@section('title', 'Facilities List')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Facilities List</h5>
            <a href="{{ route('admin.facilities.create') }}" class="btn btn-primary mt-2">Add New Facility</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Facility Name</th>
                        <th>Time Slot</th>
                        <th>Charge Per Day</th>
                        <th>Cancel Days</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facilities as $index => $facility)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $facility->facility_name }}</td>
                        <td>{{ $facility->time_slot }}</td>
                        <td>{{ $facility->charge_per_day }}</td>
                        <td>{{ $facility->cancel_days }}</td>
                        <td>
                            <a href="{{ route('admin.facilities.edit', $facility->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ route('admin.facilities.destroy', $facility->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection