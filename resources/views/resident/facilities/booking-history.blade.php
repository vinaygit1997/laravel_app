@extends('layouts.resident')

@section('title', 'Booking History')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-end">
            <a href="{{ route('resident.facilities.index') }}" class="btn btn-primary booking-history-btn">Back to Booking</a>
        </div>
        <h5>Booking History</h5>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Facility</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Booked For</th>
                    <th>Community Purpose</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Amphitheatre</td>
                    <td>11-Sep-2024</td>
                    <td>10:00 AM - 12:00 PM</td>
                    <td>John Doe</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Amphitheatre</td>
                    <td>11-Sep-2024</td>
                    <td>11:00 AM - 12:00 PM</td>
                    <td>Ravi</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Amphitheatre</td>
                    <td>13-Sep-2024</td>
                    <td>12:00 AM - 4:00 PM</td>
                    <td>Mohan Leo</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Amphitheatre</td>
                    <td>15-Sep-2024</td>
                    <td>11:45 AM - 07:00 PM</td>
                    <td>Paul</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Amphitheatre</td>
                    <td>17-Sep-2024</td>
                    <td>12:45 PM - 07:00 PM</td>
                    <td>Paul</td>
                    <td>Yes</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
@endsection

@push('styles')
    <style>
        body {
            background-color: #ffffff; /* Set background color to white */
        }
        .container {
            padding: 20px;
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff; /* Ensure container background is white */
        }
        h5 {
            color: #007bff;
        }
        .table thead th {
            background-color: #007bff;
            color: #ffffff;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        /* Media query for mobile and iPad devices */
        @media (max-width: 1024px) {
            .container {
                padding: 15px;
            }
            .table {
                font-size: 0.9rem;
            }
            .btn-primary {
                width: 100%;
            }
        }
    </style>
@endpush

@push('scripts')
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
