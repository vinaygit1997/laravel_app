@extends('layouts.admin')

@section('title', 'Staff')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Add Staff</h2>
                <a href="{{ route('admin.staff.view-staff') }}" class="btn btn-primary">Staff Details</a>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter staff name">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="category">Category</label>
                            <select id="category" class="form-control">
                                <option value="" disabled selected>Select Category</option>
                                <option value="Security">Security</option>
                                <option value="Gardener">Gardener</option>
                                <option value="Cleaner">Cleaner</option>
                                <option value="Maid">Maid</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="gender">Gender</label>
                            <select id="gender" class="form-control">
                                <option value="" disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="contact">Contact</label>
                            <input type="text" id="contact" class="form-control" placeholder="Enter contact number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email">Email Id</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter email address">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="languages">Known Languages</label>
                            <input type="text" id="languages" class="form-control" placeholder="Enter known languages">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="doj">Date of Joining (DOJ)</label>
                            <input type="date" id="doj" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="aadhar">Aadhar Number</label>
                            <input type="text" id="aadhar" class="form-control" placeholder="Enter Aadhar number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="status">Status</label>
                            <select id="status" class="form-control">
                                <option value="" disabled selected>Select Status</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                            <!-- <input type="text" id="status" class="form-control" placeholder="Enter status"> -->
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
