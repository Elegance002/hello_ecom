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
            <h5>All Flash Deals</h5>
        </div>
        <div class="card-body vendor-table">
            <div class="btn-popup pull-right">
                <a href="{{ route('flash_deals.create') }}" class="btn btn-secondary">Create New Flash Deals</a>
            </div>
            <table class="display" id="basic-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Banner</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Featured</th>
                        <th>Page Link</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 20px;">1</td>
                        <td class="jsgrid-cell" style="width: 80px;">
                            <div class="d-flex vendor-list">
                                <span>Falsh sale</span>
                            </div>
                        </td>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 250px;"><img
                                src="../assets/images/dashboard/user5.jpg"
                                style="height: 50px; width: 50px;">
                        </td>
                        <td class="jsgrid-cell" style="width: 100px;">01-01-2021 00:00:00</td>
                        <td class="jsgrid-cell" style="width: 100px;">05-01-2021 00:00:00</td>
                        <td>
                            <div class="form-check form-switch " style="width: 50px;">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch" style="width: 50px;">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>https://demo.activeitzone.com/ecommerce/flash-deal/winter-sell-5rtnz</td>
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
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 20px;">1</td>
                        <td class="jsgrid-cell" style="width: 80px;">
                            <div class="d-flex vendor-list">
                                <span>Falsh sale</span>
                            </div>
                        </td>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 250px;"><img
                                src="../assets/images/dashboard/user5.jpg"
                                style="height: 50px; width: 50px;">
                        </td>
                        <td class="jsgrid-cell" style="width: 100px;">01-01-2021 00:00:00</td>
                        <td class="jsgrid-cell" style="width: 100px;">05-01-2021 00:00:00</td>
                        <td>
                            <div class="form-check form-switch " style="width: 50px;">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch" style="width: 50px;">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>https://demo.activeitzone.com/ecommerce/flash-deal/winter-sell-5rtnz</td>
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