@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>All Staffs
                            <small>Helloo Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Staffs</li>

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
                
                @include('flash-message')
               
                <div class="btn-popup pull-right">
                    <a href="{{ route('staffs.create') }}" class="btn btn-secondary">Add New Stuff</a>
                </div>
                <div id="" class="category-table user-list order-table jsgrid"
                    style="position: relative; height: auto; width: 100%;">
                    <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                        <table class="jsgrid-table">
                            <tbody>
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell" style="width: 100px;">S.L</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">First Name</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;"> Phone</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">Email</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">Role</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">Options</th>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="jsgrid-grid-body">
                        <table class="jsgrid-table">
                            <tbody>
                                @foreach ($staffs as $key=>$staff)
                                @if ($staff->user != null)
                                    
                                <tr class="jsgrid-row">
                                    <td class="jsgrid-cell" style="width: 100px;">{{ ++$key }}</td>
                                    <td class="jsgrid-cell" style="width: 100px;">{{ $staff->user->name }}</td>
                                    <td class="jsgrid-cell" style="width: 100px;">{{ $staff->user->phone }}</td>
                                    <td class="jsgrid-cell" style="width: 100px;">{{ $staff->user->email }}</td>

                                    @if ($staff->role !=null)  
                                        <td class="jsgrid-cell" style="width: 100px;">{{ $staff->role->name }}</td>
                                    @endif
                                    <td class="jsgrid-cell" style="width: 100px;">
                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{ route('staffs.edit', encrypt($staff->id)) }}"
                                            title="Edit">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>
                                        <a href="{{ route('staffs.destroy',['id'=>$staff->id]) }}"
                                            class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                @endif  
                                @endforeach


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