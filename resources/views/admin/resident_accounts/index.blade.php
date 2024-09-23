@extends('layouts.admin')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h1>Resident Details</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Flat No</th>
                    <th>Floor No</th>
                    <th>Block No</th>
                    <th>Resident Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Area (SFT)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($residents as $resident)
                    <tr>
                        <td>{{ $resident->flat_no }}</td>
                        <td>{{ $resident->floor_no }}</td>
                        <td>{{ $resident->block_no }}</td>
                        <td>{{ $resident->name }}</td>
                        <td>{{ $resident->mobile }}</td>
                        <td>{{ $resident->email }}</td>
                        <td>{{ $resident->area_sft }}</td>
                        <td>
                            <a href="{{ route('admin.resident.edit', $resident->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('admin.resident.destroy', $resident->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this resident?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
