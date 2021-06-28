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
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>All Subscribers</h5>
                </div>
                <div class="card-body">
                    <div class="product-list jsgrid"
                        style="position: relative; height: auto; width: 100%;">
                        <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                            <table class="jsgrid-table">
                                <tbody>
                                    <tr class="jsgrid-header-row">
                                        <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                            style="width: 50px;">No</th>
                                        <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                            style="width: 100px;">Email</th>
                                        <th class="jsgrid-header-cell jsgrid-header-sortable"
                                            style="width: 100px;">Date</th>
                                        <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                            style="width: 100px;">Options</th>
                                    </tr>
                                    <tr>
                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">
                                            1</td>
                                        <td class="jsgrid-cell jsgrid-align-right"
                                            style="width: 100px;">user@gmail.com</td>
                                        <td class="jsgrid-cell" style="width: 100px;">21/6/2018</td>
                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center"
                                            style="width: 100px;">
                                            <input class="jsgrid-button jsgrid-delete-button"
                                                type="button" title="Delete">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">
                                            1</td>
                                        <td class="jsgrid-cell jsgrid-align-right"
                                            style="width: 100px;">user@gmail.com</td>
                                        <td class="jsgrid-cell" style="width: 100px;">21/6/2018</td>
                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center"
                                            style="width: 100px;">

                                            <input class="jsgrid-button jsgrid-delete-button"
                                                type="button" title="Delete">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">
                                            1</td>
                                        <td class="jsgrid-cell jsgrid-align-right"
                                            style="width: 100px;">user@gmail.com</td>
                                        <td class="jsgrid-cell" style="width: 100px;">21/6/2018</td>
                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center"
                                            style="width: 100px;">
                                            <input class="jsgrid-button jsgrid-delete-button"
                                                type="button" title="Delete">
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="jsgrid-pager-container" style="display: block;">
                            <div class="jsgrid-pager">Pages: <span
                                    class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                        href="javascript:void(0);">First</a></span> <span
                                    class="jsgrid-pager-page jsgrid-pager-current-page">1</span>
                                <span class="jsgrid-pager-nav-button"><a
                                        href="javascript:void(0);">Last</a></span>
                            </div>
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
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection