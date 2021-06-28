@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">

    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5>Coupon Information</h5>
        </div>
        <div class="card-body vendor-table">
            <div class="btn-popup pull-right">
                <a href="{{ route('coupon.create') }}" class="btn btn-secondary">Add New Coupon</a>
            </div>
            <table class="display" id="basic-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Code</th>
                        <th>Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 20px;">1</td>
                        <td class="jsgrid-cell">
                            <div class="d-flex vendor-list">
                                <span>EID15</span>
                            </div>
                        </td>
                        <td class="jsgrid-cell">Product Base</td>
                        <td class="jsgrid-cell">01-01-2021</td>
                        <td class="jsgrid-cell">05-01-2021</td>


                        <td class="jsgrid-cell" style="width: 100px;">
                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                title="Edit">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            <a href="#"
                                class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                data-href="#" title="Delete">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection