@extends('layouts.admin')

@section('title', 'Add New Facility')

@section('content')
<div class="container">
    <!-- <div class="card" id="facility-card">
        <div class="d-flex justify-content-between align-items-center p-3">
            <h5 class="mb-0">Add New Facility</h5>
            <a href="" class="btn btn-primary mt-2">Add new Facilities </a>
        </div>
    </div> -->

    <!-- Display Facilities in a Table -->
    <div class="card mt-5">
        
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Facilities List</h5>
            <a href="{{ route('admin.facilities.create') }}" class="btn btn-primary mt-2">Add new Facilities</a>
       
    </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Facility Name</th>
                        <th>Charge Per Hour</th>
                        <th>Charge Per Day</th>
                        <th>Cancel Days</th>
                        <!-- <th>Actions</th> -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Static Row 1 -->
                    <tr>
                        <td>1</td>
                        <td>Swimming Pool</td>
                        <td>150</td>
                        <td>1200</td>
                        <td>2</td>
                        <!-- <td>
                            <a href="#" class="btn btn-sm btn-info">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td> -->
                    </tr>
                    <!-- Static Row 2 -->
                    <tr>
                        <td>2</td>
                        <td>Clubhouse</td>
                        <td>100</td>
                        <td>800</td>
                        <td>3</td>
                        <!-- <td>
                            <a href="#" class="btn btn-sm btn-info">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td> -->
                    </tr>
                    <!-- Static Row 3 -->
                    <tr>
                        <td>3</td>
                        <td>Gym</td>
                        <td>200</td>
                        <td>1600</td>
                        <td>1</td>
                        <!-- <td>
                            <a href="#" class="btn btn-sm btn-info">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td> -->
                    </tr>
                    <!-- Add more static rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
