@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Edit Resident') }}
                    <a href="{{ route('admin.view.residents') }}" class="btn btn-primary float-right">Back to List</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.resident.update', $resident->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="flat_holder_name">Flat Holder Name:</label>
                            <input type="text" id="flat_holder_name" name="flat_holder_name" class="form-control" value="{{ old('flat_holder_name', $resident->flat_holder_name) }}" required>
                            @error('flat_holder_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Resident Name:</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $resident->name) }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="text" id="mobile" name="mobile" class="form-control" value="{{ old('mobile', $resident->mobile) }}" required>
                            @error('mobile')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $resident->email) }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="flat_no">Flat No:</label>
                            <input type="text" id="flat_no" name="flat_no" class="form-control" value="{{ old('flat_no', $resident->flat_no) }}" required>
                            @error('flat_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="floor_no">Floor No:</label>
                            <input type="text" id="floor_no" name="floor_no" class="form-control" value="{{ old('floor_no', $resident->floor_no) }}" required>
                            @error('floor_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="block_no">Block No:</label>
                            <input type="text" id="block_no" name="block_no" class="form-control" value="{{ old('block_no', $resident->block_no) }}" required>
                            @error('block_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="aadhar_no">Aadhar No:</label>
                            <input type="text" id="aadhar_no" name="aadhar_no" class="form-control" value="{{ old('aadhar_no', $resident->aadhar_no) }}">
                            @error('aadhar_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="family_members">Family Members:</label>
                            <input type="number" id="family_members" name="family_members" class="form-control" value="{{ old('family_members', $resident->family_members) }}">
                            @error('family_members')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="vehicles">Vehicles:</label>
                            <input type="number" id="vehicles" name="vehicles" class="form-control" value="{{ old('vehicles', $resident->vehicles) }}">
                            @error('vehicles')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="area_sft">Area (SFT):</label>
                            <input type="number" id="area_sft" name="area_sft" class="form-control" value="{{ old('area_sft', $resident->area_sft) }}">
                            @error('area_sft')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update Resident</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
