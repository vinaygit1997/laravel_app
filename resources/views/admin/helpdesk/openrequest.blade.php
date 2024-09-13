@extends('layouts.admin')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .urgent {
            color: red;
        }
        .due-status-red {
            color: red;
        }
        .due-status-green {
            color: green;
        }
        .table-container {
            overflow-x: auto; /* Enable horizontal scroll */
            white-space: nowrap; /* Prevent text wrapping */
        }
    </style>

    <div class="container my-4">
        <h4 class="text-center">Open Requests</h4>
        <h6><Strong>Total Open Requests : 20 </Strong> |  02-04-2024 to 12-09-2024  </h6>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered text-center align-middle" >
                <thead class="">
                    <tr ">
                        <th>Request No.</th>
                        <th>Category</th>
                        <th>Request</th>
                        <th>Opened On</th>
                        <th>By</th>
                        <th>Preferred Service Date</th>
                        <th>Unit</th>
                        <th>Status</th>
                        <th>Last update</th>
                        <th>Updated On</th>
                        <th>Days</th>
                        <th>Due Status</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P152</td>
                        <td>Parking</td>
                        <td>Parking 113 is allotted</td>
                        <td>23-08-24</td>
                        <td>Narayanan Vinobha</td>
                        <td>25-08-24</td>
                        <td>A 0504</td>
                        <td>New</td>
                        <td>Parking 113 is allotted</td>
                        <td>23-08-24</td>
                        <td>20</td>
                        <td><span class="due-status-red">●</span></td>
                        <td><button class="btn btn-primary btn-sm">View</button></td>
                    </tr>
                    <tr>
                        <td class="urgent">P144 <span class="fw-bold">(Urgent)</span></td>
                        <td>Housekeeping</td>
                        <td>There’s a leakage in a pipe passing by...</td>
                        <td>01-03-24</td>
                        <td>Prasenjit Barman</td>
                        <td>01-03-24</td>
                        <td>E 0303</td>
                        <td>New</td>
                        <td>This leakage is worse now. Need immediate attention...</td>
                        <td>13-08-24</td>
                        <td>195</td>
                        <td><span class="due-status-green">●</span></td>
                        <td><button class="btn btn-primary btn-sm">View</button></td>
                    </tr>
                    <tr>
                        <td>P151</td>
                        <td>Parking</td>
                        <td>Add my parking details as well...</td>
                        <td>01-07-24</td>
                        <td>Vishal Gaur</td>
                        <td>01-07-24</td>
                        <td>C 0501</td>
                        <td>New</td>
                        <td>Add my parking details as well so I can add my car...</td>
                        <td>01-07-24</td>
                        <td>73</td>
                        <td><span class="due-status-green">●</span></td>
                        <td><button class="btn btn-primary btn-sm">View</button></td>
                    </tr>
                    <tr>
                        <td class="urgent">P150 <span class="fw-bold">(Urgent)</span></td>
                        <td>Parking</td>
                        <td>Why I am not able to add my car details...</td>
                        <td>01-07-24</td>
                        <td>Vishal Gaur</td>
                        <td>01-07-24</td>
                        <td>C 0501</td>
                        <td>New</td>
                        <td>Why I am not able to add my car details...</td>
                        <td>01-07-24</td>
                        <td>73</td>
                        <td><span class="due-status-green">●</span></td>
                        <td><button class="btn btn-primary btn-sm">View</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    @endsection
