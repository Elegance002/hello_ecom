@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>All categories
                        <small>Helloo Admin panel</small>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5>All categories</h5>
        </div>
        @include('flash-message')
        <div class="card-body vendor-table">
            <div class="btn-popup pull-right">
                <a href="{{route('categories.create')}}" class="btn btn-secondary">Add New Category</a>
            </div>
            <table class="display" id="basic-1">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Parent Category</th>
                        <th>Category Level</th>
                        <th>Level</th>
                        <th>Banner</th>
                        <th>Featured</th>
                        <th>Commission</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $key => $category)
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 40px;">{{ ++$key }}</td>
                        <td class="jsgrid-cell" style="width: 200px;">
                            <div class="d-flex vendor-list">
                                <span>{{ $category->name }}</span>
                            </div>
                        </td>
                        <td class="jsgrid-cell" style="width: 300px;">
                            @php
                                $parent = \App\Models\Category::where('id', $category->parent_id)->first();
                            @endphp
                            @if ($parent != null)
                                {{ $parent->name }}
                            @else
                                —
                            @endif
                        </td>

                        <td>{{ $category->order_level }}</td>
                        <td>{{ $category->level }}</td>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">
                            @if($category->banner)
                                @php 
                                $banner=explode(',',$category->banner);
                                // dd($photo);
                                @endphp
                                <img src="{{asset($banner[0])}}"  style="height: 50px; width: 50px;" alt="{{$category->banner}}">
                            @else
                                <img src="{{asset('backend/img/thumbnail-default.jpg')}}"  style="height: 50px; width: 50px;" alt="avatar.png">
                            @endif
                        </td>

                        <td>
                            <?php if($category->featured == '1'){ ?>
                                <a href="{{ route('categories.featured',$category->id) }}" class="btn btn-xs btn-info " style="font-size: 7px;">Active</a>
                            <?php }else{ ?>
                                <a href="{{ route('categories.featured',$category->id) }}" class="btn btn-xs btn-warning " style="font-size: 7px;">InActive</a>
                            <?php } ?>
                        </td>

                        <td>{{ $category->commision_rate }} %</td>
                        <td>
                            <div>
                                <a  class="btn btn-soft-primary btn-icon btn-circle btn-sm" 
                                href="{{route('categories.edit',$category->id)}}" title="Edit" >
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                                <a href="{{ route('categories.destroy',$category->id) }}"
                                    class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection
