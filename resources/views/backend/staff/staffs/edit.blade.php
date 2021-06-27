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
                    
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="account-tab"
                                data-bs-toggle="tab" href="#account" role="tab" aria-controls="account"
                                aria-selected="true" data-original-title="" title="">Account</a></li>
                    </ul>
                    
                       <form method="POST" action="{{ route('staffs.update',$staff->id) }}" class="needs-validation user-add" novalidate="" enctype="multipart/form-data">
                         @csrf
                         @method('PATCH')
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="account" role="tabpanel"
                                aria-labelledby="account-tab">
                                
                                    <h4>Account Details</h4>
                                    <div class="form-group row">
                                        <label for="validationCustom0"
                                            class="col-xl-3 col-md-4"><span>*</span> Name</label>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control" id="validationCustom0" type="text" name="name" value="{{ $staff->user->name }}" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="validationCustom2"
                                            class="col-xl-3 col-md-4"><span>*</span> Email</label>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control" id="validationCustom2" type="text" name="email" value="{{ $staff->user->email }}" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="validationCustom1"
                                            class="col-xl-3 col-md-4"><span>*</span> Phone</label>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control" id="validationCustom1" type="text" name="phone" value="{{ $staff->user->phone }}" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="validationCustom3"
                                            class="col-xl-3 col-md-4"><span>*</span> Password</label>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control" id="validationCustom3" type="password" name="password" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="validationCustom4"
                                            class="col-xl-3 col-md-4"><span>*</span> Role</label>
                                        <div class=" col-xl-8 col-md-7 form-group">
                                            <select name="role_id" class="custom-select form-control" required="">
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}" @php if($staff->role_id == $role->id) echo "selected"; @endphp >{{$role->name}}</option>
                                                @endforeach
                                            </select>
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