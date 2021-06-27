@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h4>Seller Based Selling Report

                    </h4>
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
                            <th>Seller Name</th>
                            <th>Shop Name</th>
                            <th>Number of Product Sale</th>
                            <th>Order Amount</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">1</td>
                            <td class="jsgrid-cell" style="width: 80px;">adidas</td>
                            <td class="jsgrid-cell" style="width: 80px;">Adidas</td>
                            <td class="jsgrid-cell" style="width: 80px;">5</td>
                            <td class="jsgrid-cell" style="width: 80px;">$500</td>
                        </tr>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">2</td>
                            <td class="jsgrid-cell" style="width: 80px;">adidas</td>
                            <td class="jsgrid-cell" style="width: 80px;">Adidas</td>
                            <td class="jsgrid-cell" style="width: 80px;">5</td>
                            <td class="jsgrid-cell" style="width: 80px;">$500</td>
                        </tr>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">3</td>
                            <td class="jsgrid-cell" style="width: 80px;">adidas</td>
                            <td class="jsgrid-cell" style="width: 80px;">Adidas</td>
                            <td class="jsgrid-cell" style="width: 80px;">5</td>
                            <td class="jsgrid-cell" style="width: 80px;">$500</td>
                        </tr>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">4</td>
                            <td class="jsgrid-cell" style="width: 80px;">adidas</td>
                            <td class="jsgrid-cell" style="width: 80px;">Adidas</td>
                            <td class="jsgrid-cell" style="width: 80px;">5</td>
                            <td class="jsgrid-cell" style="width: 80px;">$500</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection