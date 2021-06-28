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
        <div class="col-xl-10 offset-1">
            <div class="card ">
                <div class="card-header">
                    <h5>Send Newsletter</h5>
                </div>
                <div class="card-body">

                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"> Emails (Users)
                                <span>*</span></label>
                            <div class="col-xl-8 col-md-7">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="">Select</option>
                                    <option value="1">user@gmail.com</option>
                                    <option value="2">andmi@gmail.com</option>
                                    <option value="2">customer@gmail.com</option>
                                    <option value="2">user@gmail.com</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"> Emails
                                (Subscribers)
                            </label>
                            <div class="col-xl-8 col-md-7">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="">Select</option>
                                    <option value="1">user@gmail.com</option>
                                    <option value="2">andmi@gmail.com</option>
                                    <option value="2">customer@gmail.com</option>
                                    <option value="2">user@gmail.com</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Newsletter subject<span>*</span></label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" type="text"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Newsletter content<span>*</span></label>
                            <div class="col-xl-8 col-md-7">
                                <div class="description-sm">
                                    <textarea id="editor1" name="editor1" cols="10" rows="4"></textarea>
                                </div>
                            </div>
                        </div>








                    </div>
                </div>
                <div class="col-12">
                    <div class="btn-toolbar float-end m-3" role="toolbar"
                        aria-label="Toolbar with button groups">
                        <div class="btn-group m-2" role="group" aria-label="Second group">
                            <button type="submit" name="button" value="publish" class="btn btn-success">
                                Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection