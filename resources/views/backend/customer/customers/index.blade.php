@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Customer List
                        <small>Helloo Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Customers</li>

                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">

        <div class="card-body">
    
            <div id="" class="category-table user-list order-table jsgrid"
                style="position: relative; height: auto; width: 100%;">
                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <table class="jsgrid-table">
                        <tbody>
                            <tr class="jsgrid-header-row">
                          
                                <th class="jsgrid-header-cell jsgrid-align-center" style="width: 50px;">
                                    Avatar</th>
                                <th class="jsgrid-header-cell" style="width: 100px;">First Name</th>
                                <th class="jsgrid-header-cell" style="width: 100px;"> Phone</th>
                                <th class="jsgrid-header-cell" style="width: 100px;">Email</th>
                                <th class="jsgrid-header-cell" style="width: 100px;">Last Login</th>
                                <th class="jsgrid-header-cell" style="width: 100px;">Package</th>
                                <th class="jsgrid-header-cell" style="width: 100px;">Options</th>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="jsgrid-grid-body">
                    <table class="jsgrid-table">
                        <tbody>
                            <tr class="jsgrid-row">
                                
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img
                                        src="{{asset('backend/assets/images/dashboard/user5.jpg')}}"
                                        style="height: 50px; width: 50px;"></td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan</td>
                                <td class="jsgrid-cell" style="width: 100px;">01774286074</td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan.torres@gmail.com
                                </td>
                                <td class="jsgrid-cell" style="width: 100px;">6 Days ago</td>
                                <td class="jsgrid-cell" style="width: 100px;">Package Name</td>
                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Log in as this Customer">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Ban this Customer">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="jsgrid-row">
                               
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img
                                        src="{{asset('backend/assets/images/dashboard/user5.jpg')}}"
                                        style="height: 50px; width: 50px;"></td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan</td>
                                <td class="jsgrid-cell" style="width: 100px;">01774286074</td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan.torres@gmail.com
                                </td>
                                <td class="jsgrid-cell" style="width: 100px;">6 Days ago</td>
                                <td class="jsgrid-cell" style="width: 100px;">Package Name</td>
                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Log in as this Customer">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Ban this Customer">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="jsgrid-row">
                                
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img
                                        src="{{asset('backend/assets/images/dashboard/user5.jpg')}}"
                                        style="height: 50px; width: 50px;"></td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan</td>
                                <td class="jsgrid-cell" style="width: 100px;">01774286074</td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan.torres@gmail.com
                                </td>
                                <td class="jsgrid-cell" style="width: 100px;">6 Days ago</td>
                                <td class="jsgrid-cell" style="width: 100px;">Package Name</td>
                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Log in as this Customer">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Ban this Customer">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="jsgrid-row">
                                
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img
                                        src="{{asset('backend/assets/images/dashboard/user5.jpg')}}"
                                        style="height: 50px; width: 50px;"></td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan</td>
                                <td class="jsgrid-cell" style="width: 100px;">01774286074</td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan.torres@gmail.com
                                </td>
                                <td class="jsgrid-cell" style="width: 100px;">6 Days ago</td>
                                <td class="jsgrid-cell" style="width: 100px;">Package Name</td>
                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Log in as this Customer">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Ban this Customer">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="jsgrid-row">
                              
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img
                                        src="{{asset('backend/assets/images/dashboard/user5.jpg')}}"
                                        style="height: 50px; width: 50px;"></td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan</td>
                                <td class="jsgrid-cell" style="width: 100px;">01774286074</td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan.torres@gmail.com
                                </td>
                                <td class="jsgrid-cell" style="width: 100px;">6 Days ago</td>
                                <td class="jsgrid-cell" style="width: 100px;">Package Name</td>
                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Log in as this Customer">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Ban this Customer">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="jsgrid-row">
                                
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img
                                        src="{{asset('backend/assets/images/dashboard/user5.jpg')}}"
                                        style="height: 50px; width: 50px;"></td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan</td>
                                <td class="jsgrid-cell" style="width: 100px;">01774286074</td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan.torres@gmail.com
                                </td>
                                <td class="jsgrid-cell" style="width: 100px;">6 Days ago</td>
                                <td class="jsgrid-cell" style="width: 100px;">Package Name</td>
                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Log in as this Customer">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Ban this Customer">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="jsgrid-row">
                                
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img
                                        src="{{asset('backend/assets/images/dashboard/user5.jpg')}}"
                                        style="height: 50px; width: 50px;"></td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan</td>
                                <td class="jsgrid-cell" style="width: 100px;">01774286074</td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan.torres@gmail.com
                                </td>
                                <td class="jsgrid-cell" style="width: 100px;">6 Days ago</td>
                                <td class="jsgrid-cell" style="width: 100px;">Package Name</td>
                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Log in as this Customer">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Ban this Customer">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="jsgrid-row">
                               
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img
                                        src="{{asset('backend/assets/images/dashboard/user5.jpg')}}"
                                        style="height: 50px; width: 50px;"></td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan</td>
                                <td class="jsgrid-cell" style="width: 100px;">01774286074</td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan.torres@gmail.com
                                </td>
                                <td class="jsgrid-cell" style="width: 100px;">6 Days ago</td>
                                <td class="jsgrid-cell" style="width: 100px;">Package Name</td>
                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Log in as this Customer">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Ban this Customer">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="jsgrid-row">
                               
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img
                                        src="{{asset('backend/assets/images/dashboard/user5.jpg')}}"
                                        style="height: 50px; width: 50px;"></td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan</td>
                                <td class="jsgrid-cell" style="width: 100px;">01774286074</td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan.torres@gmail.com
                                </td>
                                <td class="jsgrid-cell" style="width: 100px;">6 Days ago</td>
                                <td class="jsgrid-cell" style="width: 100px;">Package Name</td>
                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Log in as this Customer">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Ban this Customer">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="jsgrid-row">
                             
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img
                                        src="{{asset('backend/assets/images/dashboard/user5.jpg')}}"
                                        style="height: 50px; width: 50px;"></td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan</td>
                                <td class="jsgrid-cell" style="width: 100px;">01774286074</td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan.torres@gmail.com
                                </td>
                                <td class="jsgrid-cell" style="width: 100px;">6 Days ago</td>
                                <td class="jsgrid-cell" style="width: 100px;">Package Name</td>
                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Log in as this Customer">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Ban this Customer">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="#" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="jsgrid-row">
                              
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img
                                        src="{{asset('backend/assets/images/dashboard/user5.jpg')}}"
                                        style="height: 50px; width: 50px;"></td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan</td>
                                <td class="jsgrid-cell" style="width: 100px;">01774286074</td>
                                <td class="jsgrid-cell" style="width: 100px;">Rowan.torres@gmail.com
                                </td>
                                <td class="jsgrid-cell" style="width: 100px;">6 Days ago</td>
                                <td class="jsgrid-cell" style="width: 100px;">Package Name</td>
                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Log in as this Customer">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="#"
                                        title="Ban this Customer">
                                        <i class="fa fa-ban"></i>
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
                <div class="jsgrid-pager-container" style="display: block;">
                    <div class="jsgrid-pager">Pages: <span
                            class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                href="javascript:void(0);">First</a></span> <span
                            class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                href="javascript:void(0);">Prev</a></span> <span
                            class="jsgrid-pager-page jsgrid-pager-current-page">1</span><span
                            class="jsgrid-pager-page"><a href="javascript:void(0);">2</a></span> <span
                            class="jsgrid-pager-nav-button"><a
                                href="javascript:void(0);">Next</a></span> <span
                            class="jsgrid-pager-nav-button"><a
                                href="javascript:void(0);">Last</a></span> &nbsp;&nbsp; 1 of 2 </div>
                </div>
                <div class="jsgrid-load-shader"
                    style="display: none; position: absolute; inset: 0px; z-index: 1000;"></div>
                <div class="jsgrid-load-panel"
                    style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">
                    Please, wait...</div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection