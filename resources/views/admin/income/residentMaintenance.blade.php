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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dummy Data for Residents -->
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
                                <td>
                                    <button class="btn btn-success btn-sm">Paid</button>
                                    <button class="btn btn-danger btn-sm">Due</button>
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
                                <td>
                                    <button class="btn btn-success btn-sm">Paid</button>
                                    <button class="btn btn-danger btn-sm">Due</button>
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
                                <td>
                                    <button class="btn btn-success btn-sm">Paid</button>
                                    <button class="btn btn-danger btn-sm">Due</button>
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
                                <td>
                                    <button class="btn btn-success btn-sm">Paid</button>
                                    <button class="btn btn-danger btn-sm">Due</button>
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
                                <td>
                                    <button class="btn btn-success btn-sm">Paid</button>
                                    <button class="btn btn-danger btn-sm">Due</button>
                                </td>
                            </tr>
                            <!-- Repeat for other residents -->
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

    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/js/tabler.min.js"></script>
    @endsection