@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">

    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5>Product Reviews</h5>
        </div>
        <div class="card-body vendor-table">
            <table class="display" id="basic-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Product Owner</th>
                        <th>Customer</th>
                        <th>Rating</th>
                        <th>Comment</th>
                        <th>Published</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 40px;">1</td>
                        <td class="jsgrid-cell" style="width: 300px;">
                            <div class="d-flex vendor-list">
                                <span>Men's One and Only Textured Short Sleeve Button Up</span>
                            </div>
                        </td>
                        <td class="jsgrid-cell" style="width: 80px;">admin</td>
                        <td class="jsgrid-cell" style="width: 200px;">Mr. Customer
                            <br>(customer@example.com)
                        </td>
                        <td class="jsgrid-cell" style="width: 60px;">5</td>
                        <td class="jsgrid-cell" style="width: 500px;">Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s</td>

                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input ml-5" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection