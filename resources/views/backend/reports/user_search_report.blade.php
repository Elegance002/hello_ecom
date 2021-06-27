@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h4>User Search Report</h4>
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
                            <th>Search By</th>
                            <th>Number searches</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">1</td>
                            <td class="jsgrid-cell" style="width: 450px;">gtav</td>
                            <td class="jsgrid-cell" style="width: 80px;">0</td>
                        </tr>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">2</td>
                            <td class="jsgrid-cell" style="width: 450px;">mobile</td>
                            <td class="jsgrid-cell" style="width: 80px;">1</td>
                        </tr>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">3</td>
                            <td class="jsgrid-cell" style="width: 450px;"> software</td>
                            <td class="jsgrid-cell" style="width: 80px;">3</td>
                        </tr>
                        <tr>
                            <td class="jsgrid-cell jsgrid-align-center" style="width:30px;">4</td>
                            <td class="jsgrid-cell" style="width: 450px;">bike</td>
                            <td class="jsgrid-cell" style="width: 80px;">0</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection