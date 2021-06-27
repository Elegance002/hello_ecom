@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Staffs Role
                        <small>Helloo Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Staffs role</li>

                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5>Role</h5>
        </div>
        
        @include('flash-message')

        <div class="card-body">
            <div class="btn-popup pull-right">
                <a href="{{ route('roles.create') }}" class="btn btn-secondary">Add New Role</a>
            </div>
            <div id="" class="category-table user-list order-table jsgrid"
                style="position: relative; height: auto; width: 100%;">
                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <table class="jsgrid-table">
                        <tbody>
                            <tr class="jsgrid-header-row">

                                <th class="jsgrid-header-cell" style="width: 100px;">S.L</th>
                                <th class="jsgrid-header-cell" style="width: 100px;">Name</th>
                                <th class="jsgrid-header-cell" style="width: 100px;">Options</th>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="jsgrid-grid-body">
                    <table class="jsgrid-table">
                        <tbody>
                            @foreach ($roles as $key=>$role)
                                
                            <tr class="jsgrid-row">
                                <td class="jsgrid-cell" style="width: 100px;">{{ ++$key }}</td>
                                <td class="jsgrid-cell" style="width: 100px;">{{ $role->name }}</td>
                                <td class="jsgrid-cell" style="width: 100px;">
                    
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{ route('roles.edit',[$role->id]) }}"
                                        title="Edit">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    
                                    <a href="{{route('roles.destroy',['id'=>$role->id])}}"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                    {{-- <form method="POST" action="{{route('role-permission.destroy',[$role->id])}}">
                                    @csrf 
                                    @method('delete')
                                        <button class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-id={{$role->id}}  title="Delete"><i class="fa fa-trash"></i></button>
                                    </form> --}}

                                </td>
                            </tr>
                            @endforeach
    

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection