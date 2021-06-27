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
    <div class="row product-adding">
        <div class="col-xl-8">
            <div class="card ">
                <div class="card-header">
                    <h5>Attribute Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('attributes.update',$attribute->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="digital-add needs-validation">
                            <div class="form-group row">
                                <label for="validationCustom0" class="col-xl-3 col-md-4">
                                    Name</label>
                                <div class="col-xl-8 col-md-7">
                                    <input class="form-control" id="validationCustom0" value="{{ $attribute->name }}"
                                        type="text" name="name" >
                                </div>
                            </div>
                    
                            <div class="form-group row">
                                <label for="validationCustom0" class="col-xl-3 col-md-4">Value</label>
                                <div class="col-xl-8 col-md-7">
                                    <input class="form-control" type="text" name="value" value={{ $attribute->value }}  data-role="tagsinput" >
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="btn-toolbar float-end m-3" role="toolbar"
                                aria-label="Toolbar with button groups">
                                <div class="btn-group m-2" role="group" aria-label="Second group">
                                    <button type="submit" name="button" value="publish" class="btn btn-success">
                                        Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection