<!-- resources/views/facilities/index.blade.php -->

    <style>
        body {
            background-color: #ffffff; /* Set background color to white */
        }
        .container {
            padding: 20px;
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative; /* Added for positioning the button */
            background-color: #ffffff; /* Ensure container background is white */
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .btn-check-availability {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-check-availability:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        /* Media query for mobile and iPad devices */
        @media (max-width: 1024px) {
            .container {
                padding: 15px;
            }
            .form-group {
                margin-bottom: 15px;
            }
            .btn-check-availability {
                width: 100%;
            }
        }
    </style>

@extends('layouts.resident')

@section('title', 'Book a Facility')

@section('content')
<div class="container mt-5">
    <div class="header-container">
        <h5>Book a Facility</h5>
        <a href="{{ route('resident.facilities.booking-history') }}" class="btn btn-primary">Booking History</a>
    </div>
    <form action="{{ route('resident.facilities.check-availability') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="facility">Facility</label>
            <input type="text" class="form-control" id="facility" placeholder="Enter facility" name="facility">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" class="form-control" id="date" placeholder="Select date" name="date">
        </div>
        <div class="form-group">
            <label for="time">Time</label>
            <input type="text" class="form-control" id="time" placeholder="Select time" name="time">
        </div>
        <div class="form-group">
            <label for="bookedFor">Booked For</label>
            <select class="form-control" id="bookedFor" name="bookedFor">
                <option value="">Select Office</option>
                <option value="A-0201">A-0201</option>
                <option value="A-0202">A-0202</option>
                <option value="A-0304">A-0304</option>
                <option value="A-0401">A-0401</option>
                <option value="A-0504">A-0504</option>
                <option value="A-0601">A-0601</option>
                <option value="A-0602">A-0602</option>
                <option value="A-0603">A-0603</option>
                <option value="A-0701">A-0701</option>
                <option value="A-0702">A-0702</option>
            </select>
        </div>
        <div class="form-group">
            <label for="communityPurpose">Community Purpose</label>
            <select class="form-control" id="communityPurpose" name="communityPurpose">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-check-availability">Check Availability</button>
    </form>
</div>
@endsection

@push('scripts')
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#date').datepicker();
            $('#time').timepicker();
        });
    </script>
@endpush
