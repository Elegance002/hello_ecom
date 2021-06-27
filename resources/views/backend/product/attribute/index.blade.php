@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">


        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5>All Attributes</h5>
        </div>
        <div class="card-body">
            <div class="btn-popup pull-right">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-original-title="test" data-bs-target="#exampleModal">Add New Attribute</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Add New Attribute
                                </h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                    aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" action="{{ route('attributes.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Name :</label>
                                            <input class="form-control" id="validationCustom01" name="name"
                                                type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="validationCustom0" class="">Value</label>
                                                <input type="text" name="value" data-role="tagsinput">
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button"
                                        data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>

                            </form>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id="" class="category-table user-list order-table jsgrid"
                style="position: relative; height: auto; width: 100%;">
                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <table class="jsgrid-table">
                        <tbody>
                            <tr class="jsgrid-header-row">

                                <th class="jsgrid-header-cell" style="width: 100px;">SL.</th>
                                <th class="jsgrid-header-cell" style="width: 100px;">Name</th>
                                <th class="jsgrid-header-cell" style="width: 100px;">Options</th>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="jsgrid-grid-body">
                    <table class="jsgrid-table">
                        <tbody>

                            @foreach ($attributes as $key=>$attribute)
                                
                            <tr class="jsgrid-row">
                                <td class="jsgrid-cell" style="width: 100px;">{{ ++$key }}</td>
                                <td class="jsgrid-cell" style="width: 100px;">{{ $attribute->name }}</td>

                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{ route('attributes.edit',$attribute->id) }}"
                                        title="Edit">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a href="{{ route('attributes.destroy',$attribute->id) }}"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
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