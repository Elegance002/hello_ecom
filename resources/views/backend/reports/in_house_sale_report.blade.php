@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h4>Inhouse Product sale report

                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-body vendor-table">
                <table class="display" id="basic-1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Num of Sale</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 40px;">1</td>
                            <td class="jsgrid-cell" style="width: 500px;">
                                <div class="d-flex vendor-list">
                                    <span>Adobe Photoshop Elements 2021 & Premiere Elements 2021</span>
                                </div>
                            </td>
                            <td class="jsgrid-cell" style="width: 80px;">5</td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection