@extends('layouts.admin')

@section('content')
<div class="container-xl">
    <h1 class="page-title mt-4">Edit Resident Account</h1>

    <div class="card mt-3">
        <div class="card-body">
            <form action="{{ route('admin.resident_accounts.update', $account->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="flat_no" class="form-label">Flat No</label>
                    <input type="text" name="flat_no" class="form-control" value="{{ $account->flat_no }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="floor_no" class="form-label">Floor No</label>
                    <input type="text" name="floor_no" class="form-control" value="{{ $account->floor_no }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="block_no" class="form-label">Block No</label>
                    <input type="text" name="block_no" class="form-control" value="{{ $account->block_no }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="name" class="form-label">Resident Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $account->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="text" name="mobile" class="form-control" value="{{ $account->mobile }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $account->email }}" required>
                </div>

                <div class="mb-3">
                    <label for="area_sft" class="form-label">Area (SFT)</label>
                    <input type="text" name="area_sft" class="form-control" value="{{ $account->area_sft }}" required>
                </div>
                
                <button type="submit" class="btn btn-success">Update Account</button>
            </form>
        </div>
    </div>
</div>
@endsection
