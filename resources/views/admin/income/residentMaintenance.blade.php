@extends('layouts.admin')

@section('content')
<div class="container-xl">
    <h1 class="page-title mt-4"></h1>

    <!-- Resident Accounts Table -->
    <div class="card mt-3">
        <div class="card-header">
            <h3 class="card-title">Resident Accounts</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
           <table class="table table-vcenter card-table">
    <thead>
        <tr>
            <th>Resident Name</th>
            <th>Block Name</th>
            <th>Floor</th>
            <th>Flat Number</th>
            <th>Flat Type</th>
            <th>Amount per SFT (₹)</th>
            <th>Square Feet</th>
            <th>Maintenance Fee (₹)</th>
            <th>Amount Type</th>
            <th>Date</th>
            <th>Status</th> <!-- New Status Column -->
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Example Resident Data with Status -->
        <tr>
            <td>Alekhya</td>
            <td>Block A</td>
            <td>1</td>
            <td>101</td>
            <td>1BHK</td>
            <td>₹3</td>
            <td>1200</td>
            <td>₹3,600</td>
            <td>Online</td>
            <td>01/08/2024</td>
            <td>Due</td> <!-- Status -->
            <td>
                <button class="btn btn-primary btn-sm payment-btn" data-resident="Alekhya" data-flat="101" data-fee="3600">Payment</button>
            </td>
        </tr>
        <tr>
            <td>Soujanya</td>
            <td>Block A</td>
            <td>1</td>
            <td>102</td>
            <td>1BHK</td>
            <td>₹3</td>
            <td>1200</td>
            <td>₹3,600</td>
            <td>Online</td>
            <td>01/08/2024</td>
            <td>Paid</td> <!-- Status -->
            <td>
                <button class="btn btn-primary btn-sm payment-btn" data-resident="Soujanya" data-flat="102" data-fee="3600" disabled>Paid</button>
            </td>
        </tr>
        <tr>
            <td>Hemanth</td>
            <td>Block A</td>
            <td>1</td>
            <td>103</td>
            <td>1BHK</td>
            <td>₹3</td>
            <td>1200</td>
            <td>₹3,600</td>
            <td>Offline</td>
            <td>01/08/2024</td>
            <td>Due</td> <!-- Status -->
            <td>
                <button class="btn btn-primary btn-sm payment-btn" data-resident="Hemanth" data-flat="103" data-fee="3600">Payment</button>
            </td>
        </tr>
        <tr>
            <td>Vinay</td>
            <td>Block A</td>
            <td>1</td>
            <td>104</td>
            <td>2BHK</td>
            <td>₹3</td>
            <td>1500</td>
            <td>₹4,500</td>
            <td>Online</td>
            <td>01/08/2024</td>
            <td>Due</td> <!-- Status -->
            <td>
                <button class="btn btn-primary btn-sm payment-btn" data-resident="Vinay" data-flat="104" data-fee="4500">Payment</button>
            </td>
        </tr>
        <tr>
            <td>Manju</td>
            <td>Block B</td>
            <td>1</td>
            <td>105</td>
            <td>2BHK</td>
            <td>₹3</td>
            <td>1500</td>
            <td>₹4,500</td>
            <td>Offline</td>
            <td>01/08/2024</td>
            <td>Paid</td> <!-- Status -->
            <td>
                <button class="btn btn-primary btn-sm payment-btn" data-resident="Manju" data-flat="105" data-fee="4500" disabled>Paid</button>
            </td>
        </tr>
    </tbody>
</table>

            </div>
        </div>
    </div>

    <!-- Total Summary Section -->
    <div class="card mt-3">
        <div class="card-header">
            <h3 class="card-title">Total Summary</h3>
        </div>
        <div class="card-body">
            <p>Total Maintenance Income: <strong>₹19,800</strong></p> <!-- Replace with dynamic total -->
            <p>Total Expenditures: <strong>₹13,000</strong></p> <!-- Replace with dynamic total -->
            <p>Total Salaries: <strong>₹70,000</strong></p> <!-- Replace with dynamic total -->
            <p>Net Balance: <strong>₹-63,200</strong></p> <!-- Replace with dynamic calculation -->
        </div>
    </div>
</div>

<!-- Payment Modal -->
<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Payment Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="paymentForm">
                    <div class="mb-3">
                        <label for="residentName" class="form-label">Resident Name:</label>
                        <input type="text" class="form-control" id="residentName" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="flatNumber" class="form-label">Flat Number:</label>
                        <input type="text" class="form-control" id="flatNumber" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="maintenanceFee" class="form-label">Maintenance Fee (₹):</label>
                        <input type="text" class="form-control" id="maintenanceFee" readonly>
                    </div>

                    <!-- New Row with Two Input Fields -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="amountPaid" class="form-label">Amount Paid (₹):</label>
                                <input type="number" class="form-control" id="amountPaid" placeholder="Enter amount">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="paymentType" class="form-label">Payment Type:</label>
                                <select class="form-select" id="paymentType">
                                    <option value="Online">Online</option>
                                    <option value="Offline">Offline</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="paymentDate" class="form-label">Date of Payment:</label>
                        <input type="date" class="form-control" id="paymentDate" value="{{ date('Y-m-d') }}">
                    </div>
                    <div class="mb-3">
                        <label for="attachedFile" class="form-label">Attach File:</label>
                        <input type="file" class="form-control" id="attachedFile">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit Payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentButtons = document.querySelectorAll('.payment-btn');

        paymentButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Get resident details from button data attributes
                const residentName = this.getAttribute('data-resident');
                const flatNumber = this.getAttribute('data-flat');
                const maintenanceFee = this.getAttribute('data-fee');

                // Populate modal fields with resident details
                document.getElementById('residentName').value = residentName;
                document.getElementById('flatNumber').value = flatNumber;
                document.getElementById('maintenanceFee').value = maintenanceFee;

                // Show the modal
                const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
                paymentModal.show();
            });
        });

        // Handle form submission
        document.getElementById('paymentForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Add logic to handle form submission, e.g., AJAX request to update payment status
            alert('Payment submitted successfully!');

            // Close the modal after submission
            const paymentModal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
            paymentModal.hide();
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
