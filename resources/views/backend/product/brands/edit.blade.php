@extends('backend.admin.layouts.master')
@section('main-content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">


        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="col-md-8 offset-2">
        <div class="card">
            <h5 class="card-header">Edit brand</h5>
            <div class="card-body">
                <form method="post" action="{{ route('brands.update',$brand->id) }}">
                    @csrf 
                    @method('PATCH')
    
                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">Name <span class="text-danger">*</span></label>
                        <input id="inputTitle" type="text" name="name" value="{{$brand->name}}" class="form-control">
                    </div>
    
                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">Slug <span class="text-danger">*</span></label>
                        <input id="inputTitle" type="text" name="slug" value="{{$brand->slug}}" class="form-control">
                    </div>
    
                    <div class="form-group">
                        <label for="inputPhoto" class="col-form-label">Logo <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                        <input id="thumbnail" class="form-control" type="text" name="logo" value="{{$brand->logo}}">
                        </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
    
                    </div>
    
                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
                        <input id="inputTitle" type="text" name="meta_title" value="{{$brand->meta_title}}" class="form-control">
                    </div>
    
                    <div class="form-group">
                    <label for="inputDesc" class="col-form-label">Description</label>
                    <textarea class="form-control" id="description" name="meta_description">{{$brand->meta_description}}</textarea>
            
                    </div>
            
    
                    <div class="form-group mb-3">
                    <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endpush