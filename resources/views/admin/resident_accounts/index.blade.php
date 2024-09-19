<!-- Add Font Awesome CDN link in your layout file (e.g., resources/views/layouts/admin.blade.php) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<style>
    .edit-icon {
    color: green;
}

.delete-icon {
    color: red;
}
</style>

@extends('layouts.admin')

@section('content')
<div class="container-xl">
    <h1 class="page-title mt-4">Resident Accounts</h1>

    <!-- Resident Accounts Table -->
    <div class="card mt-3">
        <div class="card-header">
            <h3 class="card-title">Resident Accounts</h3>
<a href="{{ route('admin.resident_accounts.create') }}" class="btn btn-success">Add Resident Account</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
            <tr>
                <th>S.No</th>
                <th>Flat No</th>
                <th>Floor No</th>
                <th>Block No</th>
                <!-- <th>Flat Holder Name</th> -->
                <th>Resident Name</th>
                <!-- <th>Aadhar No</th> -->
                <th>Mobile</th>
                <th>Email</th>
                <!-- <th>Family Members</th> -->
                <!-- <th>Vehicles</th> -->
                <th>Area (SFT)</th>
                <th>Maintenance Fee (₹)</th>
                            <th>Amount Type</th>
                            <th>Date</th>
                            <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($residentAccounts as $account)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $account->flat_no }}</td>
                <td>{{ $account->floor_no }}</td>
                <td>{{ $account->block_no }}</td>
                <!-- <td>{{ $account->flat_holder_name }}</td> -->
                <td>{{ $account->name }}</td>
                <!-- <td>{{ $account->aadhar_no }}</td> -->
                <td>{{ $account->mobile }}</td>
                <td>{{ $account->email }}</td>
                <!-- <td>{{ $account->family_members }}</td>
                <td>{{ $account->vehicles }}</td> -->
                <td>{{ $account->area_sft }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                

                            <td>
                                    
                                    <a href="{{ route('admin.resident_accounts.edit', $account->id) }}" class="btn btn-sm icon-btn">
    <i class="fas fa-edit edit-icon"></i>
</a>
<form method="POST" action="{{ route('admin.resident_accounts.destroy', $account->id) }}" onsubmit="return confirm('Are you sure you want to delete this Record?')" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm icon-btn">
        <i class="fas fa-trash delete-icon"></i>
    </button>
</form>

                                </td>
            </tr>
            @endforeach
        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection