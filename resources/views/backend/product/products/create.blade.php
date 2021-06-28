@extends('backend.admin.layouts.master')
@section('main-content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Add New Products
                        <small>Helloo Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">Add Product</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row product-adding">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h5>Product Information</h5>
                </div>
                <div class="card-body">

                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>
                                Product
                                Name</label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" type="text"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>
                                Category</label>
                            <div class="col-xl-8 col-md-7">
                                <select class="custom-select form-control" required="">
                                    <option value="">--Select--</option>
                                    <option value="1">eBooks</option>
                                    <option value="2">Graphic Design</option>
                                    <option value="3">3D Impact</option>
                                    <option value="4">Application</option>
                                    <option value="5">Websites</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Brand</label>
                            <div class="col-xl-8 col-md-7">
                                <select class="custom-select form-control" required="">
                                    <option value="">--Select--</option>
                                    <option value="1">eBooks</option>
                                    <option value="2">Graphic Design</option>
                                    <option value="3">3D Impact</option>
                                    <option value="4">Application</option>
                                    <option value="5">Websites</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Unit</label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" type="text"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>
                                Minimum Qty</label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" type="text"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>
                                Tags</label>
                            <div class="col-xl-8 col-md-7">
                                <input type="text" value=" " data-role="tagsinput">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Barcode</label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" type="text"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Refundable</label>
                            <div class="col-xl-8 col-md-7">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="3">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckDefault"></label>
                                </div>
                            </div>
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
                        <div class="form-group mt-5 row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Thumbnail Image (300x300)</label>
                            <div class="col-xl-8 col-md-7">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="banner">
                                </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5>Product Videos</h5>
                </div>
                <div class="card-body">

                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Video Provider</label>
                            <div class="col-xl-8 col-md-7">
                                <select class="custom-select form-control" required="">
                                    <option value="">--Select--</option>
                                    <option value="1">Youtube</option>
                                    <option value="2">Vimeo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Video Link</label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" type="text"
                                    placeholder="Video URL" required="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Product Variation</h5>
                </div>
                <div class="card-body">

                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Color</label>
                            <div class="col-xl-8 col-md-7">
                                <select class="custom-select form-control" required="">
                                    <option value="">--Select--</option>
                                    <option value="1">Blue</option>
                                    <option value="2">White</option>
                                    <option value="3">Black</option>
                                    <option value="4">Red</option>
                                    <option value="5">Green</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Attributes</label>
                            <div class="col-xl-8 col-md-7">
                                <select class="custom-select form-control" required="">
                                    <option value="">--Select--</option>
                                    <option value="1">Size</option>
                                    <option value="2">Fabric</option>
                                    <option value="3">Liter</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Product price + stock</h5>
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
                                Discount</label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" type="text"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>
                                Quantity </label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" type="text"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>
                                SKU</label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" placeholder="SKU"
                                    type="text" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Shipping</label>
                            <div class="col-xl-8 col-md-7">
                                <select class="custom-select form-control" required="">
                                    <option value="">--Select--</option>
                                    <option value="1">Flat</option>
                                    <option value="2">Percent</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Product Description</h5>
                </div>
                <div class="card-body">
                        <div class="row">
                            <label class="col-form-label col-xl-3 col-md-4">Meta Description</label>
                            <div class="col-xl-8 col-md-7">
                                <div class="form-group">
                                    <textarea  id="summary" name="summary"></textarea>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>PDF Specification</h5>
                </div>
                <div class="card-body">

                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                PDF Specification</label>
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
                        <div class="row">
                            <label for="validationCustom05" class="col-xl-3 col-md-4 col-form-label pt-0"> Meta Title</label>
                            <div class="col-xl-8 col-md-7">
                                <div class="form-group">
                                    <input class="form-control" id="validationCustom05" type="text" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-form-label col-xl-3 col-md-4">Meta Description</label>
                            <div class="col-xl-8 col-md-7">
                                <div class="form-group">
                                    <textarea  id="description" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-5 row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">Meta Image</label>
                            <div class="col-xl-8 col-md-7">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lf" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="banner">
                                </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h5>Shipping Configuration</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-md-6">
                                Free Shipping</label>
                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="3">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckDefault"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-md-6">
                                Flat Rate</label>
                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="3">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckDefault"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-md-6">
                                Product Wise Shipping</label>
                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="3">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckDefault"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-md-6">
                                Is Product Quantity Mulitiply</label>
                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="3">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckDefault"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Low Stock Quantity Warning</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group">
                            <label for="validationCustom05" class="col-form-label pt-0">
                                Quantity</label>
                            <input class="form-control" id="validationCustom05" type="text" required="">
                        </div>


                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Stock Visibility State</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-md-6">
                                Show Stock Quantity</label>
                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="3">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckDefault"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-md-6">
                                Show Stock With Text Only</label>
                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="3">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckDefault"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-md-6">
                                Hide Stock</label>
                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="3">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckDefault"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Cash on Delivery</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-md-6">
                                Status</label>
                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="3">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckDefault"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Featured</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-md-6">
                                Status</label>
                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="3">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckDefault"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Todays Deal</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-md-6">
                                Status</label>
                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="3">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckDefault"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Flash Deal</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group">
                            <label for="validationCustom05" class="col-form-label pt-0">
                                Add To Flash</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Choose Flash Title </option>
                                <option value="1">Winter Sale</option>
                                <option value="2">Flash Sale</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="validationCustom05" class="col-form-label pt-0">
                                Discount</label>
                            <input class="form-control" id="validationCustom05" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label for="validationCustom05" class="col-form-label pt-0">
                                Discount Type</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected value="1">Flat</option>
                                <option value="2">Percent</option>

                            </select>
                        </div>


                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Estimate Shipping Time</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group">
                            <label for="validationCustom05" class="col-form-label pt-0">
                                Shipping Days</label>
                            <input class="form-control" id="validationCustom05" type="text"
                                placeholder="Days" required="">
                        </div>


                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Vat & TAX</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group">
                            <label for="validationCustom05" class="col-form-label pt-0">
                                Tax</label>
                            <input class="form-control" id="validationCustom05" type="text"
                                placeholder="Days" required="">
                        </div>
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">Flat</option>
                                <option value="2">Percent</option>
                            </select>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="btn-toolbar float-end mb-3" role="toolbar"
                aria-label="Toolbar with button groups">
                <div class="btn-group m-2" role="group" aria-label="First group">
                    <button type="submit" name="button" value="draft" class="btn btn-warning">Save As
                        Draft</button>
                </div>
                <div class="btn-group m-2" role="group" aria-label="Third group">
                    <button type="submit" name="button" value="unpublish" class="btn btn-primary">Save
                        &amp; Unpublish</button>
                </div>
                <div class="btn-group m-2" role="group" aria-label="Second group">
                    <button type="submit" name="button" value="publish" class="btn btn-success">Save
                        &amp; Publish</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
<script>
    $('#lf').filemanager('image');
</script>
<script>
    CKEDITOR.replace( 'summary' );
</script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endpush