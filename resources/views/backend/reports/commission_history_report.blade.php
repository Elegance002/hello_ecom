@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h4>Commission History report</h4>
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
                            <th>Order Code</th>
                            <th>Admin Commission</th>
                            <th>Seller Earning</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">1</td>
                            <td class="jsgrid-cell" style="width: 80px;">3UITS85</td>
                            <td class="jsgrid-cell" style="width: 80px;">$6.5</td>
                            <td class="jsgrid-cell" style="width: 80px;">#660</td>
                            <td class="jsgrid-cell" style="width: 80px;">25-06-2021</td>
                        </tr>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">1</td>
                            <td class="jsgrid-cell" style="width: 80px;">5UDFS8</td>
                            <td class="jsgrid-cell" style="width: 80px;">$3.5</td>
                            <td class="jsgrid-cell" style="width: 80px;">#130</td>
                            <td class="jsgrid-cell" style="width: 80px;">25-06-2021</td>
                        </tr>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">1</td>
                            <td class="jsgrid-cell" style="width: 80px;">6UPLS8</td>
                            <td class="jsgrid-cell" style="width: 80px;">$5.5</td>
                            <td class="jsgrid-cell" style="width: 80px;">#650</td>
                            <td class="jsgrid-cell" style="width: 80px;">25-06-2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection