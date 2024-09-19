<!-- resources/views/superadmin/superadminHome.blade.php -->



@section('content')
<div class="d-flex">
    <!-- Include Sidebar -->
    @include('superadmin.sidebar')
    @extends('layouts.app')

    <!-- Main Content Area -->
    <div class="col-md-5 profile-width">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h2>You are a SuperAdmin.</h2>

                <!-- Display user's name and email -->
                <p class="mt-4">
                    <strong>Name:</strong> {{ Auth::user()->name }}
                </p>
                <p>
                    <strong>Email:</strong> {{ Auth::user()->email }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
