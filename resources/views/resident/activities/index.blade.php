<style>
    #pass-card{
    margin-left:50px;
    }

    .card-body{
        font-size:14px;
    }

    #from_date, #to_date{
        font-size:14px;
    }
    .form-select{
        font-size:14px;
    }
</style>


@extends('layouts.resident')

@section('title', 'Document')

@section('content')
<div class="container">
<div class="card" id="pass-card">
       <div class="d-flex justify-content-between align-items-center p-3">
    <h5 class="mb-0">Activity</h5>
    <a href="{{ route('resident.activities.booking-history') }}" class="btn btn-primary mt-2">Booking History</a>
</div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card-body">
            <form>
            <div class="form-group">
                <label for="facility">Facility</label>
                <input type="text" class="form-control" id="facility" placeholder="Enter facility">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" class="form-control" id="date" placeholder="Select date">
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="text" class="form-control" id="time" placeholder="Select time">
            </div>
            <div class="form-group">
                <label for="bookedFor">Booked For</label>
                <select class="form-control" id="bookedFor">
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
                <select class="form-control" id="communityPurpose">
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-check-availability">Check Availability</button>
        </form>
        </div>
    </div>
</div>
@endsection

