@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Orders
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Sales</li>
                    <li class="breadcrumb-item active">Orders</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Manage Order</h5>
                </div>
                <div class="card-body order-datatable">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Product</th>
                                <th>Customer</th>
                                <th>Payment Status</th>
                                <th>Amount</th>
                                <th>Order Status</th>
                                <th>Refund</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-primary">Shipped</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-warning">Processing</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-primary">Shipped</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-primary">Shipped</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-warning">Processing</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-warning">Processing</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-warning">Processing</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-primary">Unpaid</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-danger">Cancelled</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-primary">Shipped</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>#51240</td>
                                <td>3</td>
                                <td>MD Rakibul</td>
                                <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                <td>$54671</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                                <td>No Refund</td>
                                <td class="text-right footable-last-visible"
                                    style="display: table-cell;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Download Invoice">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>

                            </tr>



                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->   
@endsection