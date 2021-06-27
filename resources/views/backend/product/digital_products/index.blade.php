@extends('backend.admin.layouts.master')
@section('main-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>All Products
                        <small>Helloo Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">All Products</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5>All Product</h5>
            <a href="{{ route('digitalproducts.create') }}" class="btn btn-secondary pull-right">Add New Digital Product</a>
        </div>
        <div class="card-body vendor-table">
            <table class="display" id="basic-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Added By</th>
                        <th>Base Price</th>
                        <th>Todays Deal</th>
                        <th>Published</th>
                        <th>Featured</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 40px;">1</td>
                        <td class="jsgrid-cell" style="width: 300px;">
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/team/1.jpg" alt=""
                                    class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Analog Black Dial Men's Watch-32-BK-CK</span>
                            </div>
                        </td>
                        <td>admin</td>

                        <td>$ 4995</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div>

                                <i class="fa fa-edit me-2 font-success" title="Edit"></i>
                                <i class="fa fa-download me-2 font-success" title="download">

                                </i>
                                <i class="fa fa-trash font-danger" title="Delete"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 40px;">2</td>
                        <td class="jsgrid-cell" style="width: 300px;">
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/team/1.jpg" alt=""
                                    class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Analog Black Dial Men's Watch-32-BK-CK</span>
                            </div>
                        </td>
                        <td>admin</td>

                        <td>$ 4995</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div>

                                <i class="fa fa-edit me-2 font-success" title="Edit"></i>
                                <i class="fa fa-download me-2 font-success" title="download">

                                </i>
                                <i class="fa fa-trash font-danger" title="Delete"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 40px;">3</td>
                        <td class="jsgrid-cell" style="width: 300px;">
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/team/1.jpg" alt=""
                                    class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Analog Black Dial Men's Watch-32-BK-CK</span>
                            </div>
                        </td>
                        <td>admin</td>

                        <td>$ 4995</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div>

                                <i class="fa fa-edit me-2 font-success" title="Edit"></i>
                                <i class="fa fa-download me-2 font-success" title="download">

                                </i>
                                <i class="fa fa-trash font-danger" title="Delete"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 40px;">4</td>
                        <td class="jsgrid-cell" style="width: 300px;">
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/team/1.jpg" alt=""
                                    class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Analog Black Dial Men's Watch-32-BK-CK</span>
                            </div>
                        </td>
                        <td>admin</td>

                        <td>$ 4995</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div>

                                <i class="fa fa-edit me-2 font-success" title="Edit"></i>
                                <i class="fa fa-download me-2 font-success" title="download">

                                </i>
                                <i class="fa fa-trash font-danger" title="Delete"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 40px;">5</td>
                        <td class="jsgrid-cell" style="width: 300px;">
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/team/1.jpg" alt=""
                                    class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Analog Black Dial Men's Watch-32-BK-CK</span>
                            </div>
                        </td>
                        <td>admin</td>

                        <td>$ 4995</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div>

                                <i class="fa fa-edit me-2 font-success" title="Edit"></i>
                                <i class="fa fa-download me-2 font-success" title="download">

                                </i>
                                <i class="fa fa-trash font-danger" title="Delete"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 40px;">6</td>
                        <td class="jsgrid-cell" style="width: 300px;">
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/team/1.jpg" alt=""
                                    class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Analog Black Dial Men's Watch-32-BK-CK</span>
                            </div>
                        </td>
                        <td>admin</td>

                        <td>$ 4995</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div>

                                <i class="fa fa-edit me-2 font-success" title="Edit"></i>
                                <i class="fa fa-download me-2 font-success" title="download">

                                </i>
                                <i class="fa fa-trash font-danger" title="Delete"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 40px;">7</td>
                        <td class="jsgrid-cell" style="width: 300px;">
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/team/1.jpg" alt=""
                                    class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Analog Black Dial Men's Watch-32-BK-CK</span>
                            </div>
                        </td>
                        <td>admin</td>

                        <td>$ 4995</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div>

                                <i class="fa fa-edit me-2 font-success" title="Edit"></i>
                                <i class="fa fa-download me-2 font-success" title="download">

                                </i>
                                <i class="fa fa-trash font-danger" title="Delete"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 40px;">8</td>
                        <td class="jsgrid-cell" style="width: 300px;">
                            <div class="d-flex vendor-list">
                                <img src="../assets/images/team/1.jpg" alt=""
                                    class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                <span>Analog Black Dial Men's Watch-32-BK-CK</span>
                            </div>
                        </td>
                        <td>admin</td>

                        <td>$ 4995</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="3">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                        <td>
                            <div>

                                <i class="fa fa-edit me-2 font-success" title="Edit"></i>
                                <i class="fa fa-download me-2 font-success" title="download">

                                </i>
                                <i class="fa fa-trash font-danger" title="Delete"></i>
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