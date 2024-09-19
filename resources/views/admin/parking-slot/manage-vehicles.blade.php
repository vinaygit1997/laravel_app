@extends('layouts.admin')
@section('title', 'Parking')
@section('content')

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .table-header {
      background-color: #d7f0cc;
    }

    .block-links a {
      margin-right: 10px;
      color: red;
    }

    .top-right {
      position: absolute;
      top: 10px;
      right: 10px;
    }
  </style>

  <div class="container mt-4">
    <h3 class="mb-4">Vehicles</h3>

    <!-- Navigation Links -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('admin.parking-slot.vehicles-data') }}">All Vehicles</a>
      </li>
    </ul>

    <!-- Block Links -->
    <div class="block-links my-3">
      <a href="{{ route('admin.parking-slot.vehicles-data') }}">A</a>
      <a href="#">B</a>
      <a href="#">C</a>
      <a href="#">D</a>
      <a href="#">E</a>
      <a href="#">F</a>
      <a href="#">Office</a>
      <a href="#">All Blocks</a>
    </div>

    <!-- Export Buttons and Add Vehicle Button -->
    <div class="d-flex mb-3">
      <button class="btn btn-secondary me-2">PDF</button>
      <button class="btn btn-secondary me-2">Copy</button>
      <button class="btn btn-secondary me-2">Excel</button>
      <button class="btn btn-secondary me-2">CSV</button>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVehicleModal">
        Add Vehicle
      </button>
    </div>

    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="table-header">
          <tr>
            <th>Slot No</th>
            <th>Slot Name</th>
            <th>Slot Type</th>
            <th>Block</th>
            <th>Unit No</th>
            <th>Status</th>
            <th>Name</th>
            <th>Vehicle No</th>
            <th>Vehicle Type</th>
            <th>RFID No</th>
            <th>From Date</th>
            <th>To Date</th>
            <th>Additional Field</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Slot A1</td>
            <td>Compact</td>
            <td>A</td>
            <td>101</td>
            <td>Occupied</td>
            <td>John Doe</td>
            <td>AB123CD</td>
            <td>Car</td>
            <td>1234567890</td>
            <td>01-09-2024</td>
            <td>30-09-2024</td>
            <td>Additional Info 1</td>
          </tr>
          <!-- More rows can be added here -->
        </tbody>
      </table>
    </div>

    <!-- Add Vehicle Modal -->
    <div class="modal fade" id="addVehicleModal" tabindex="-1" aria-labelledby="addVehicleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addVehicleModalLabel">Add New Vehicle</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="slotNo" class="form-label">Slot No</label>
                <input type="text" class="form-control" id="slotNo" placeholder="Enter Slot No">
              </div>
              <div class="mb-3">
                <label for="slotName" class="form-label">Slot Name</label>
                <input type="text" class="form-control" id="slotName" placeholder="Enter Slot Name">
              </div>
              <div class="mb-3">
                <label for="slotType" class="form-label">Slot Type</label>
                <input type="text" class="form-control" id="slotType" placeholder="Enter Slot Type">
              </div>
              <div class="mb-3">
                <label for="block" class="form-label">Block</label>
                <input type="text" class="form-control" id="block" placeholder="Enter Block">
              </div>
              <div class="mb-3">
                <label for="unitNo" class="form-label">Unit No</label>
                <input type="text" class="form-control" id="unitNo" placeholder="Enter Unit No">
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" placeholder="Enter Status">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name">
              </div>
              <div class="mb-3">
                <label for="vehicleNo" class="form-label">Vehicle No</label>
                <input type="text" class="form-control" id="vehicleNo" placeholder="Enter Vehicle No">
              </div>
              <div class="mb-3">
                <label for="vehicleType" class="form-label">Vehicle Type</label>
                <input type="text" class="form-control" id="vehicleType" placeholder="Enter Vehicle Type">
              </div>
              <div class="mb-3">
                <label for="rfidNo" class="form-label">RFID No</label>
                <input type="text" class="form-control" id="rfidNo" placeholder="Enter RFID No">
              </div>
              <div class="mb-3">
                <label for="fromDate" class="form-label">From Date</label>
                <input type="date" class="form-control" id="fromDate">
              </div>
              <div class="mb-3">
                <label for="toDate" class="form-label">To Date</label>
                <input type="date" class="form-control" id="toDate">
              </div>
              <div class="mb-3">
                <label for="additionalField" class="form-label">Additional Field</label>
                <input type="text" class="form-control" id="additionalField" placeholder="Enter Additional Info">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save Vehicle</button>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection