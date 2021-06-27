@extends('backend.admin.layouts.master')
@section('main-content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Add New Category
                        <small>Helloo Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">Add New Category</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row product-adding">
        <div class="col-xl-8 offset-2">
            <div class="card ">
                <div class="card-header">
                    <h5>Category Information</h5>
                </div>
                <form action="{{ route('categories.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
            
                <div class="card-body">

                    <div class="digital-add needs-validation">
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">Name <span>*</span></label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" type="text" name="name" value="{{ $category->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Slug</label>
                            <div class="col-xl-8 col-md-7">
                                <input type="text"  id="slug" name="slug" value="{{ $category->slug }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Parent Category <span>*</span></label>
                            <div class="col-xl-8 col-md-7">
                                <select class="custom-select form-control"  name="parent_id">
                                    <option value="0">No Parent</option>
                                    @foreach ($categories as $acategory)
                                        <option value="{{ $acategory->id }}">{{ $acategory->name }}</option>
                                        @foreach ($category->childrenCategories as $childCategory)
                                            @include('categories.child_category', ['child_category' => $childCategory])
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">Ordering Number</label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0"
                                    placeholder="Order Level" type="number" name="order_level" value="{{ $category->order_level }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Type <span>*</span></label>
                            <div class="col-xl-8 col-md-7">
                                <select class="custom-select form-control" name="digital" >
                                <option value="0" @if ($category->digital == '0') selected @endif>Physical</option>
                                <option value="1" @if ($category->digital == '1') selected @endif>Digital</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                               Banner</label>
                            <div class="col-xl-8 col-md-7">
                               <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                </span>
                            <input id="thumbnail" class="form-control" type="text" name="banner" value="{{ $category->banner }}">
                            </div>
                            <div id="holder" style="margin-top:15px;max-height:100px;">
                                @if($category->banner)
                                    @php 
                                    $banner=explode(',',$category->banner);
                                    // dd($photo);
                                    @endphp
                                    <img src="{{asset($banner[0])}}"  style="height: 50px; width: 50px;" alt="{{$category->banner}}">
                                @else
                                    <img src="{{asset('backend/img/thumbnail-default.jpg')}}"  style="height: 50px; width: 50px;" alt="avatar.png">
                                @endif
                            </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Meta Title</label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom05" type="text" name="meta_title" value="{{ $category->meta_title }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Meta Description</label>
                            <div class="col-xl-8 col-md-7">
                                <textarea rows="4" cols="12" name="meta_description" >{{ $category->meta_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4">
                                Commision Rate (%)</label>
                            <div class="col-xl-8 col-md-7">
                                <input class="form-control" id="validationCustom0" type="number"  min="0" step="0.01" name="commision_rate" 
                                value="{{ $category->commision_rate }}">
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-12">
                    <div class="btn-toolbar float-end m-3" role="toolbar"
                        aria-label="Toolbar with button groups">
                        <div class="btn-group m-2" role="group" aria-label="Second group">
                            <button type="submit" name="button" value="publish" class="btn btn-success">
                                Update</button>
                        </div>
                    </div>
                </div>

            </form>
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
    <script>
        $('#lfm').filemanager('image');

        $(document).ready(function() {
        $('#summary').summernote({
            placeholder: "Write short description.....",
            tabsize: 2,
            height: 120
        });
        });
    </script>
@endpush