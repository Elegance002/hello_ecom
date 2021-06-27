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
            <h5>All Brand</h5>
        </div>
        @include('flash-message')
        <div class="card-body">
            <div class="btn-popup pull-right">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-original-title="test"  data-bs-target="#exampleModal">Add New Brand</button>

                {{-- Create Modal --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Add New Brand
                                </h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                    aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="mb-1">Name :</label>
                                            <input class="form-control" name="name" id="validationCustom01"
                                                type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPhoto" class="col-form-label">Logo</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                            <input id="thumbnail" class="form-control" type="text" name="logo">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                        </div>
                                        


                                        <div class="form-group mt-2">
                                            <label for="validationCustom01" class="mb-1">Meta Title:</label>
                                            <input class="form-control" name="meta_title" id="summary"
                                                type="text">
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label">Meta Description</label>
                                            <textarea rows="4" cols="63" name="meta_description"></textarea>
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-secondary" type="button"
                                    data-bs-dismiss="modal">Close</button>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
                {{-- End create modal --}}

            </div>

            <div id="" class="category-table user-list order-table jsgrid"
                style="position: relative; height: auto; width: 100%;">
                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <table class="jsgrid-table">
                        <tbody>
                            <tr class="jsgrid-header-row">

                                <th class="jsgrid-header-cell" style="width: 100px;">#</th>
                                <th class="jsgrid-header-cell" style="width: 100px;">Name</th>
                                <th class="jsgrid-header-cell" style="width: 100px;">Logo</th>
                                <th class="jsgrid-header-cell" style="width: 100px;">Options</th>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="jsgrid-grid-body">
                    <table class="jsgrid-table">
                        <tbody>
                            @foreach ($brands as $key=>$brand)
                                
                            <tr class="jsgrid-row">
                                <td class="jsgrid-cell" style="width: 100px;">{{ ++$key }}</td>
                                <td class="jsgrid-cell" style="width: 100px;">{{ $brand->name }}</td>
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">
                                    {{-- <img src="{{asset($brand->logo)}}" style="height: 50px; width: 50px;"> --}}

                                    @if($brand->logo)
                                        @php 
                                        $logo=explode(',',$brand->logo);
                                        // dd($photo);
                                        @endphp
                                        <img src="{{asset($logo[0])}}"  style="height: 50px; width: 50px;" alt="{{$brand->logo}}">
                                    @else
                                        <img src="{{asset('backend/img/thumbnail-default.jpg')}}"  style="height: 50px; width: 50px;" alt="avatar.png">
                                    @endif
                                </td>
                                <td class="jsgrid-cell" style="width: 100px;">
                                    <a  data-bs-toggle="modal"  class="btn btn-soft-primary btn-icon btn-circle btn-sm" 
                                    href="{{ route('brands.edit',$brand->id) }}" title="Edit" >
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a href="{{ route('brands.destroy',$brand->id) }}"
                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" title="Delete">
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

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">

@endpush

@push('scripts')
    <!-- ck editor start-->
    {{-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace( 'meta_title' );
    </script> --}}
    <!-- ck editor end-->
    
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
