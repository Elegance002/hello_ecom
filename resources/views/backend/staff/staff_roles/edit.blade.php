@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Create User
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Users </li>
                    <li class="breadcrumb-item active">Create User </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
                <div class="card-header">
                    <h5> Add User</h5>
                </div>

                @include('flash-message')
                
                <div class="card-body">
                    <form class="needs-validation user-add" novalidate="" action="{{ route('roles.update',$role->id) }}" method="POST">
                        @csrf 
                        @method('PATCH')
                    <div class="form-group row">
                        <label for="validationCustom0"
                            class="col-xl-3 col-md-4"><span>*</span>Name</label>
                        <div class="col-xl-8 col-md-7">
                            <input class="form-control" id="validationCustom0" 
                                type="text" name="name" value="{{ $role->name }}" required>
                        </div>
                    </div>
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="permission-tabs"
                                data-bs-toggle="tab" href="#permission" role="tab"
                                aria-controls="permission" aria-selected="false" data-original-title=""
                                title="">Permission</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade active show" id="permission" role="tabpanel"
                            aria-labelledby="permission-tabs">
                                @php
                                    $permission = json_decode($role->permission);
                                @endphp
                                <div class="permission-block">
                                    <div class="attribute-blocks">
                                        <h5 class="f-w-600 mb-3">Order Related permition </h5>
                                        <div class="row">
                                            <div class="col-xl-3 col-sm-4">
                                                <label>Edit Orders</label>
                                            </div>
                                            <div class="col-xl-9 col-sm-8">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" name="permission[]" value="1" @php if(in_array(1, $permission)) echo "checked"; @endphp>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-3 col-sm-4">
                                                <label>Update Orders</label>
                                            </div>
                                            <div class="col-xl-9 col-sm-8">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" name="permission[]" value="2" @php if(in_array(2, $permission)) echo "checked"; @endphp>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-3 col-sm-4">
                                                <label>Delete Orders</label>
                                            </div>
                                            <div class="col-xl-9 col-sm-8">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" name="permission[]" value="3" @php if(in_array(3, $permission)) echo "checked"; @endphp>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                          
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection