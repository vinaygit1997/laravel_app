@extends('layouts.resident')

@section('title', 'HelpDesk Dashboard')

@section('content')

<!-- Include Bootstrap CSS and Popper.js for Bootstrap functionality -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    
    .nav-tabs {
            border-bottom: none;
        }

        .nav-link.active {
            background-color: #ffffff !important;
            border: none !important;
            border-bottom: 3px solid #007bff !important;
        }

        .tab-content {
            margin-top: 20px;
        }

        .card {
            background-color: #fff;
            border: none;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .card-header .badge {
            background-color: red;
            color: white;
            font-size: 0.8rem;
        }

        .card-body {
            padding: 10px;
        }

        .card-footer {
            font-size: 0.8rem;
            color: gray;
        }

        .search-bar {
            margin-bottom: 20px;
        }
</style>


<div class="container mt-4">
    <!-- Tabs for Open and Resolved Requests -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="open-requests-tab" data-toggle="tab" href="#open-requests" role="tab" aria-controls="open-requests" aria-selected="true">Open Requests</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="resolved-requests-tab" data-toggle="tab" href="#resolved-requests" role="tab" aria-controls="resolved-requests" aria-selected="false">Resolved Requests</a>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="myTabContent">
        <!-- Open Requests Content -->
        <div class="tab-pane fade show active" id="open-requests" role="tabpanel" aria-labelledby="open-requests-tab">
            <div class="search-bar d-flex justify-content-between align-items-center">
                <input type="text" id="searchOpenRequests" class="form-control w-50" placeholder="Search">
                <div class="d-flex">
                    <!-- Dropdown button -->
                    <div class="dropdown mx-2">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="filterOpenDropdown" data-toggle="dropdown" aria-expanded="false">
                            Filter by: Personal Request
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="filterOpenDropdown">
                            <li><a class="dropdown-item" href="#">Personal</a></li>
                            <li><a class="dropdown-item" href="#">Community</a></li>
                        </ul>
                    </div>
                    <!-- Sort button with dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortOpenDropdown" data-toggle="dropdown" aria-expanded="false">
                            Sort by
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="sortOpenDropdown">
                            <li><a class="dropdown-item sort-option" href="#" data-sort="1">Request No</a></li>
                            <li><a class="dropdown-item sort-option" href="#" data-sort="2">No of Days Open</a></li>
                            <li><a class="dropdown-item sort-option" href="#" data-sort="3">Category</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Open Requests Cards -->
            <div id="openRequestsContainer">
                @foreach ($openRequests as $request)
                <div class="card" data-request-date="{{ $request->created_at }}">
                    <div class="card-header">
                        <div>
                            <span class="badge badge-light">{{ $request->id }}</span> {{ strtoupper($request->title) }}
                        </div>
                        <span class="badge badge-warning" style="background-color: #ffc107; color: black;">OPEN</span>
                    </div>
                    <div class="card-body">
                        <p>by {{ $request->user_name }} | {{ $request->apartment }}</p>
                        <p>{{ $request->description }}</p>
                    </div>
                    <div class="card-footer">
                        <span>{{ $request->days_open }} days ago</span> | Opened on: {{ $request->created_at->format('d-M-Y') }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Resolved Requests Content -->
        <div class="tab-pane fade" id="resolved-requests" role="tabpanel" aria-labelledby="resolved-requests-tab">
            <div class="search-bar d-flex justify-content-between align-items-center">
                <input type="text" id="searchResolvedRequests" class="form-control w-50" placeholder="Search">
                <div class="d-flex">
                    <!-- Filter button with dropdown -->
                    <div class="dropdown mx-2">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="filterResolvedDropdown" data-toggle="dropdown" aria-expanded="false">
                            Filter by: Community Requests
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="filterResolvedDropdown">
                            <li><a class="dropdown-item" href="#">Personal</a></li>
                            <li><a class="dropdown-item" href="#">Community</a></li>
                        </ul>
                    </div>
                    <!-- Sort button with dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortResolvedDropdown" data-toggle="dropdown" aria-expanded="false">
                            Sort by
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="sortResolvedDropdown">
                            <li><a class="dropdown-item sort-option" href="#" data-sort="1">Request No</a></li>
                            <li><a class="dropdown-item sort-option" href="#" data-sort="2">No of Days Open</a></li>
                            <li><a class="dropdown-item sort-option" href="#" data-sort="3">Category</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Resolved Requests Cards -->
            <div id="resolvedRequestsContainer">
                @foreach ($resolvedRequests as $request)
                <div class="card" data-request-date="{{ $request->resolved_at }}">
                    <div class="card-header">
                        <div>
                            <span class="badge badge-light">{{ $request->id }}</span> {{ strtoupper($request->title) }}
                        </div>
                        <span class="badge badge-success" style="background-color: #28a745; color: white;">CLOSED</span>
                    </div>
                    <div class="card-body">
                        <p>by {{ $request->user_name }} | {{ $request->apartment }}</p>
                        <p>{{ $request->description }}</p>
                    </div>
                    <div class="card-footer">
                        <span>{{ $request->resolved_days_ago }} days ago</span> | Opened on: {{ $request->created_at->format('d-M-Y') }} | Resolved on: {{ $request->resolved_at->format('d-M-Y') }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

@push('head-scripts')
<!-- Include necessary scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> <!-- Popper.js 1.x -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
