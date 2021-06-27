@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h4>Wallet Transaction Report</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-body vendor-table">
                <table class="display" id="basic-1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Payment method</th>
                            <th>Approval</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">1</td>
                            <td class="jsgrid-cell">Mr. Customer</td>
                            <td class="jsgrid-cell">25-06-2021</td>
                            <td class="jsgrid-cell">$550.000</td>
                            <td class="jsgrid-cell">Stripe</td>
                            <td><span class="jsgrid-cell badge badge-success">Approved</span></td>
                        </tr>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">2</td>
                            <td class="jsgrid-cell">Mr. Customer</td>
                            <td class="jsgrid-cell">25-06-2021</td>
                            <td class="jsgrid-cell">$550.000</td>
                            <td class="jsgrid-cell">Stripe</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">3</td>
                            <td class="jsgrid-cell">Mr. Customer</td>
                            <td class="jsgrid-cell">25-06-2021</td>
                            <td class="jsgrid-cell">$550.000</td>
                            <td class="jsgrid-cell">Stripe</td>
                            <td><span class="jsgrid-cell badge badge-success">Approved</span></td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection