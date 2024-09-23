@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Resident Details</h1>

        <form action="{{ route('admin.resident.update', $resident->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="flat_no">Flat No</label>
                <input type="text" name="flat_no" class="form-control" value="{{ old('flat_no', $resident->flat_no) }}" required>
            </div>

            <div class="form-group">
                <label for="floor_no">Floor No</label>
                <input type="text" name="floor_no" class="form-control" value="{{ old('floor_no', $resident->floor_no) }}" required>
            </div>

            <div class="form-group">
                <label for="block_no">Block No</label>
                <input type="text" name="block_no" class="form-control" value="{{ old('block_no', $resident->block_no) }}" required>
            </div>

            <div class="form-group">
                <label for="flat_holder_name">Flat Holder Name</label>
                <input type="text" name="flat_holder_name" class="form-control" value="{{ old('flat_holder_name', $resident->flat_holder_name) }}" required>
            </div>

            <div class="form-group">
                <label for="name">Resident Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $resident->name) }}" required>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" class="form-control" value="{{ old('mobile', $resident->mobile) }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $resident->email) }}" required>
            </div>

            <div class="form-group">
                <label for="area_sft">Area (SFT)</label>
                <input type="number" name="area_sft" class="form-control" value="{{ old('area_sft', $resident->area_sft) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
