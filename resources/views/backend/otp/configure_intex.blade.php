@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Activate OTP</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row product-adding">
        <div class="col-xl-4">
            <div class="card ">
                <div class="card-header">
                    <h5>SSL Wireless OTP</h5>
                </div>
                <div class="card-body">

                    <div class="digital-add needs-validation text-center">
                        <a href="#" class="btn btn-xs btn-info " style="font-size: 12px;">Active</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-4">
            <div class="card ">
                <div class="card-header">
                    <h5>Fast2SMS OTP</h5>
                </div>
                <div class="card-body">

                    <div class="digital-add needs-validation text-center">
                        <a href="#" class="btn btn-xs btn-warning "
                            style="font-size: 12px;">InActive</a>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-xl-4">
            <div class="card ">
                <div class="card-header">
                    <h5>Nexmo OTP</h5>
                </div>
                <div class="card-body">

                    <div class="digital-add needs-validation text-center">
                        <a href="#" class="btn btn-xs btn-info " style="font-size: 12px;">Active</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection