@extends('layouts.admin')

@section('title', 'Projects&Meetings')

@section('content')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project-1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f8f8;
    }
    .container {
      margin-top: 30px;
    }
    .form-control, .form-select {
      margin-bottom: 15px;
    }
    .form-label {
      font-weight: bold;
    }
    .save-btn {
      margin-top: 15px;
    }
    .note-box {
      margin-top: 20px;
    }
  </style>

  <div class="container">
    <h2 class="text-center">Project-1</h2>

    <form>
      <div class="row">
        <div class="col-md-6">
          <label for="category" class="form-label">Category*</label>
          <input type="text" id="category" class="form-control" placeholder="Enter Category">
        </div>
        <div class="col-md-6">
          <label for="topic" class="form-label">Topic*</label>
          <input type="text" id="topic" class="form-control" placeholder="Enter Topic">
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <label for="status" class="form-label">Status</label>
          <select id="status" class="form-select">
            <option>Open</option>
            <option>Closed</option>
            <option>In Progress</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="priority" class="form-label">Priority</label>
          <div class="d-flex align-items-center">
            <div class="form-check me-3">
              <input class="form-check-input" type="radio" name="priority" id="low" value="low" checked>
              <label class="form-check-label" for="low">Low</label>
            </div>
            <div class="form-check me-3">
              <input class="form-check-input" type="radio" name="priority" id="medium" value="medium">
              <label class="form-check-label" for="medium">Medium</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="priority" id="high" value="high">
              <label class="form-check-label" for="high">High</label>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <label for="drivenBy" class="form-label">Driven By</label>
          <select id="drivenBy" class="form-select">
            <option>UnAssigned</option>
            <option>Assigned</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Watchers</label>
          <div class="form-text">0 watching <a href="#">0 watching</a></div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <label for="targetDate" class="form-label">Target Date:</label>
          <input type="date" id="targetDate" class="form-control">
        </div>
        <div class="col-md-6">
          <label for="uploadFile" class="form-label">Attach document or image</label>
          <!-- File Upload Input -->
          <input type="file" id="uploadFile" class="form-control">
        </div>
      </div>

      <div class="row note-box">
        <div class="col-md-12">
          <label for="note" class="form-label">Add a Note.</label>
          <textarea id="note" rows="4" class="form-control"></textarea>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center save-btn">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection