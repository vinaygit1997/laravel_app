@extends('layouts.admin')

@section('title', 'Vendors')

@section('content')

    <style>
        /* Unique namespace for Vendors For Expense */
        .vendors-expense-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .vendors-expense-dataTables_wrapper .dt-buttons {
            float: left;
            margin-bottom: 10px;
        }

        .vendors-expense-add-vendor-btn {
            float: left;
            margin-right: 15px;
        }

        table.vendors-expense-dataTable.no-footer {
            border-bottom: 1px solid #ddd;
        }

        table.vendors-expense-dataTable thead th {
            border-bottom: 1px solid #ddd;
        }

        table.vendors-expense-dataTable tbody td {
            vertical-align: middle;
        }

        .vendors-expense-table-light {
            background-color: #f9f9f9;
        }
    </style>

    <div class="vendors-expense-container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
    <!-- Align h2 to the left -->
    <h2>Vendors For Expense</h2>
    <!-- <p>Active Vendors for Expense Tracker</p> -->
    <!-- Align Add Staff Button to the right -->
    <a href="{{ route('admin.vendors.create') }}" class="btn btn-primary">Add Staff</a>
  </div> 

        <table id="vendorTable" class="table table-bordered table-striped vendors-expense-dataTable">
            <thead class="vendors-expense-table-light">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>TDS</th>
                    <th>GSTIN</th>
                    <th>IGST</th>
                    <th>CGST</th>
                    <th>SGST</th>
                    <th>Comments</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>A4 SECURITY SERVICE</td>
                    <td>Mr loknath</td>
                    <td>9844454146</td>
                    <td></td>
                    <td>0.00</td>
                    <td></td>
                    <td>0.00</td>
                    <td>9.00</td>
                    <td>9.00</td>
                    <td></td>
                    <td><button class="btn btn-primary btn-sm">Edit</button></td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Pro Gen Integrated Facility Management</td>
                    <td>Mr Isaac Kissinger</td>
                    <td>7899030071</td>
                    <td></td>
                    <td>0.00</td>
                    <td>0</td>
                    <td>0.00</td>
                    <td>9.00</td>
                    <td>9.00</td>
                    <td></td>
                    <td><button class="btn btn-primary btn-sm">Edit</button></td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>SRI SHARADA ENTERPRISES</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>0.00</td>
                    <td>29AETPJ1231R1ZT</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td></td>
                    <td><button class="btn btn-primary btn-sm">Edit</button></td>
                </tr>
                <!-- Add more vendor rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <script>
        $(document).ready(function() {
            $('#vendorTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('#addVendorBtn').on('click', function() {
                alert('Add Vendor button clicked');
                // Add your functionality for adding a vendor here.
            });
        });
    </script>
@endsection