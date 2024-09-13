<style>
    .container h3 {
        margin-top: -40px;
    }

    .container {
        font-size: 14px;
    }

    .container table {
        font-size: 14px;
        width: 100%;
    }

    /* Ensure the table is scrollable on smaller screens */
    .table-responsive {
        overflow-x: auto;
    }

    /* Adjust button size and margin for smaller screens */
    @media (max-width: 768px) {
        #create-button {
            margin-top: 10px;
            width: 100%;
        }

        .container h3 {
            margin-top: 0;
            font-size: 20px;
        }

        .container {
            font-size: 12px;
        }

        table thead th {
            font-size: 12px;
        }

        table tbody td {
            font-size: 12px;
        }
    }

    @media (max-width: 576px) {
        .container h3 {
            font-size: 18px;
        }

        .container {
            font-size: 11px;
        }

        table thead th {
            font-size: 11px;
        }

        table tbody td {
            font-size: 11px;
        }
    }
</style>

<!-- resources/views/visitors/index.blade.php -->
@extends('layouts.resident')

@section('title', 'Visitors')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h5>Booking History</h5>
<a href="{{ route('resident.activities.index') }}" class="btn btn-primary booking-history-btn btn-primary-ipad btn-primary-mobile">Back to Booking</a></div><br>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container mt-5 container-ipad container-mobile">
            <table class="table table-bordered table-ipad table-mobile">
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



<script>
$(document).ready(function() {
    $('#visitorTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copy',
                title: 'Visitor Details'
            },
            {
                extend: 'csv',
                title: 'Visitor Details'
            },
            {
                extend: 'excel',
                title: 'Visitor Details'
            },
            {
                extend: 'pdf',
                title: 'Visitor Details',
                customize: function(doc) {
                    doc.styles.title = {
                        fontSize: '18',
                        alignment: 'center'
                    };
                }
            },
            {
                extend: 'print',
                title: 'Visitor Details'
            }
        ],
        order: [[0, 'asc']], // You can customize the default ordering if needed
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records"
        }
    });
});
</script>

@endsection


<!-- Include DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

<!-- Include jQuery and DataTables JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
