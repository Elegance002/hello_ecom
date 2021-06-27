@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Add Digital Products
                        <small>Helloo Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Digital Products</li>
                    <li class="breadcrumb-item active">Add Digital Product</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row product-adding">
        <div class="col-xl-7">
            <div class="card">
                <div class="card-header">
                    <h5>General</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group">
                            <label for="validationCustom01"
                                class="col-form-label pt-0"><span>*</span>Product Name</label>
                            <input class="form-control" id="validationCustom01" type="text" required="">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label"><span>*</span> Categories</label>
                            <select class="custom-select form-control" required="">
                                <option value="">--Select--</option>
                                <option value="1">eBooks</option>
                                <option value="2">Graphic Design</option>
                                <option value="3">3D Impact</option>
                                <option value="4">Application</option>
                                <option value="5">Websites</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="validationCustom01"
                                class="col-form-label pt-0"><span>*</span>Product File</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="form-group">
                            <label for="validationCustom01"
                                class="col-form-label pt-0"><span>*</span>Tag</label>
                            <input type="text" value=" " data-role="tagsinput">
                        </div>

                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header">
                    <h5>Product Images</h5>
                </div>
                <div class="card-body">

                    <div class="digital-add needs-validation">

                        <label class="col-form-label pt-0"> Gallery Images (600x600)</label>
                        <form class="dropzone digits" id="singleFileUpload"
                            action="http://themes.pixelstrap.com/upload.php">
                            <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                                <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                            </div>
                        </form>
                        <div class="form-group mt-5 row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Thumbnail Image (300x300)</label>
                            <div class="col-xl-8 col-md-7">
                                <div class="">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5>SEO Meta Tags</h5>
                </div>
                <div class="card-body">

                    <div class="digital-add needs-validation">
                        <div class="form-group">
                            <label for="validationCustom05" class="col-form-label pt-0"> Meta
                                Title</label>
                            <input class="form-control" id="validationCustom05" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Meta Description</label>
                            <textarea rows="4" cols="12"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Meta Image</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Price</h5>
                </div>
                <div class="card-body">

                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>
                                Unit price</label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" type="text"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>
                                Purchase price</label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" type="text"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>
                                Tax</label>
                            <div class="col-xl-5 col-md-5">
                                <input class="form-control" id="validationCustom0" type="text"
                                    required="">
                            </div>
                            <div class="col-xl-3 col-md-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1">Flat</option>
                                    <option value="2">Percent</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>
                                Discount</label>
                            <div class="col-xl-5 col-md-5">
                                <input class="form-control" id="validationCustom0" type="text"
                                    required="">
                            </div>
                            <div class="col-xl-3 col-md-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1">Flat</option>
                                    <option value="2">Percent</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
        <div class="col-xl-5">
            <div class="card">
                <div class="card-header">
                    <h5>Add Description</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group mb-0">
                            <div class="description-sm">
                                <textarea id="editor1" name="editor1" cols="10" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12">
            <div class="btn-toolbar float-end mb-3" role="toolbar"
                aria-label="Toolbar with button groups">
                <div class="btn-group m-2" role="group" aria-label="Second group">
                    <button type="submit" name="button" value="publish" class="btn btn-success">Save
                        Product</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection