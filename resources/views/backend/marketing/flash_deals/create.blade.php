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
    <div class="row product-adding">
        <div class="col-xl-8 offset-2">
            <div class="card ">
                <div class="card-header">
                    <h5>Flash Deal Information</h5>
                </div>
                <div class="card-body">

                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Product
                                Name <span>*</span></label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" placeholder="Title"
                                    type="text" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Background Color (Hexa-code) <span>*</span></label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" placeholder="#FFFFFF"
                                    type="text" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">Text Color
                                <span>*</span></label>
                            <div class="col-xl-8 col-md-7">
                                <select class="custom-select form-control" required="">
                                    <option value="">Select One</option>
                                    <option value="1">White</option>
                                    <option value="2">Black</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Banner (1920x500)</label>
                            <div class="col-xl-8 col-md-7">
                                <div class="">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Date <span>*</span></label>
                            <div class="col-xl-8 col-md-7">
                                <div class='input-group date' id='datetimepicker'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        <span class="input-group-text" id="basic-addon2">CAL</span>
                                    </span>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">Products</label>
                            <div class="col-xl-8 col-md-7">
                                <select class="custom-select form-control" required="">
                                    <option value="">Nothing Selected</option>
                                    <option value="1">White</option>
                                    <option value="2">Black</option>

                                </select>
                            </div>
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
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection