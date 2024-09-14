@extends('layouts.admin')

@section('title', 'Staff')

@section('content')

<div class="container mt-3">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <!-- Align h2 to the left -->
    <h2 class="mb-0">Staff Details</h2>
    <!-- Align Add Staff Button to the right -->
    <a href="{{ route('admin.staff.create') }}" class="btn btn-primary">Add Staff</a>
  </div>    
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Category</th>
        <th>Gender</th>
        <th>Contact</th>
        <th>Email ID</th>
        <th>Known Languages</th>
        <th>Doj</th>
        <th>Aadhar Number</th>
        <th>Status</th>
        <th>Actions</th> <!-- New column for Edit/Delete icons -->
      </tr>
    </thead>
    <tbody>
     <tr>
        <td>1</td>
        <td>Sumith</td>
        <td>Floor Manager</td>
        <td>Male</td>
        <td>8186886911</td>
        <td>sumith@gmail.com</td>
        <td>English, Hindi</td>
        <td>12/03/2024</td>
        
        <td>14785236958</td>
        <td>Active</td>
        <td>
          <a href="#" class="text-primary"><i class="bi bi-pencil-fill"></i></a>
          <a href="#" class="text-danger ms-3"><i class="bi bi-trash-fill"></i></a>
        </td>
     </tr>

     <tr>
        <td>2</td>
        <td>Harini</td>
        <td>Cleaner</td>
        <td>Female</td>
        <td>8099834232</td>
        <td>harini@gmail.com</td>
        <td>Telugu</td>
       
        <td>10/05/2024</td>
        <td>321456789258</td>
        <td>Active</td>
        <td>
          <a href="#" class="text-primary"><i class="bi bi-pencil-fill"></i></a>
          <a href="#" class="text-danger ms-3"><i class="bi bi-trash-fill"></i></a>
        </td>
     </tr>
      
     <tr>
        <td>3</td>
        <td>Akshitha</td>
        <td>Cleaner</td>
        <td>Female</td>
        <td>8099834242</td>
        <td>akhitha@gmail.com</td>
        <td>Telugu</td>
       
        <td>25/05/2024</td>
        <td>321456789258</td>
        <td>Active</td>
        <td>
          <a href="#" class="text-primary"><i class="bi bi-pencil-fill"></i></a>
          <a href="#" class="text-danger ms-3"><i class="bi bi-trash-fill"></i></a>
        </td>
     </tr>

     <tr>
        <td>4</td>
        <td>Priya</td>
        <td>Gardener</td>
        <td>Female</td>
        <td>987456123</td>
        <td>priya@gmail.com</td>
        <td>English</td>
        <td>18/08/2024</td>
        <td>85236974156</td>
        <td>Active</td>
        <td>
          <a href="#" class="text-primary"><i class="bi bi-pencil-fill"></i></a>
          <a href="#" class="text-danger ms-3"><i class="bi bi-trash-fill"></i></a>
        </td>
     </tr>

     <tr>
        <td>5</td>
        <td>Karan</td>
        <td>Security</td>
        <td>Male</td>
        <td>9354178963</td>
        <td>karan@gmail.com</td>
        <td>Hindi</td>
        
        <td>28/01/2024</td>
        <td>985231476985</td>
        <td>Active</td>
        <td>
          <a href="#" class="text-primary"><i class="bi bi-pencil-fill"></i></a>
          <a href="#" class="text-danger ms-3"><i class="bi bi-trash-fill"></i></a>
        </td>
     </tr>
    </tbody>
  </table>
</div>
@endsection