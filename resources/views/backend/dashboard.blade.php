@extends('backend.admin.layouts.master')  
@section('main-content')
<!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Dashboard
                            <small>Helloo Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-warning card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="navigation"
                                        class="font-warning"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Earnings</span>
                                <h3 class="mb-0">$ <span class="counter">6659</span><small> This
                                        Month</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden  widget-cards">
                    <div class="bg-secondary card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="box"
                                        class="font-secondary"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Products</span>
                                <h3 class="mb-0">$ <span class="counter">9856</span><small> This
                                        Month</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-primary card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="message-square"
                                        class="font-primary"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">New Customers</span>
                                <h3 class="mb-0"> <span class="counter">893</span><small> This
                                        Month</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-danger card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="users"
                                        class="font-danger"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">New Vendors</span>
                                <h3 class="mb-0"> <span class="counter">631</span><small> This
                                        Month</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card order-graph sales-carousel">
                    <div class="card-header">
                        <h6>Total Sales</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-chartjs">
                                    <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="value-graph">
                                    <h3>42% <span><i class="fa fa-angle-up font-primary"></i></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <span>Sales Last Month</span>
                                <h2 class="mb-0">9054</h2>
                                <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                                <h5 class="f-w-600">Gross sales of August</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                            </div>
                            <div class="bg-primary b-r-8">
                                <div class="small-box">
                                    <i data-feather="briefcase"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card order-graph sales-carousel">
                    <div class="card-header">
                        <h6>Total purchase</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-chartjs">
                                    <div class="flot-chart-placeholder" id="simple-line-chart-sparkline">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="value-graph">
                                    <h3>20% <span><i class="fa fa-angle-up font-secondary"></i></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <span>Monthly purchase</span>
                                <h2 class="mb-0">2154</h2>
                                <p>0.13% <span><i class="fa fa-angle-up"></i></span></p>
                                <h5 class="f-w-600">Avg Gross purchase</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                            </div>
                            <div class="bg-secondary b-r-8">
                                <div class="small-box">
                                    <i data-feather="credit-card"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card order-graph sales-carousel">
                    <div class="card-header">
                        <h6>Total cash transaction</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-chartjs">
                                    <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="value-graph">
                                    <h3>28% <span><i class="fa fa-angle-up font-warning"></i></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <span>Cash on hand</span>
                                <h2 class="mb-0">4672</h2>
                                <p>0.8% <span><i class="fa fa-angle-up"></i></span></p>
                                <h5 class="f-w-600">Details about cash</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                            </div>
                            <div class="bg-warning b-r-8">
                                <div class="small-box">
                                    <i data-feather="shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card order-graph sales-carousel">
                    <div class="card-header">
                        <h6>Daily Deposits</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-chartjs">
                                    <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="value-graph">
                                    <h3>75% <span><i class="fa fa-angle-up font-danger"></i></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <span>Security Deposits</span>
                                <h2 class="mb-0">0782</h2>
                                <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                                <h5 class="f-w-600">Gross sales of June</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                            </div>
                            <div class="bg-danger b-r-8">
                                <div class="small-box">
                                    <i data-feather="calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 xl-100">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Goods return</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icofont icofont-simple-left"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-status table-responsive products-table">
                            <table class="table table-bordernone mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Details</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Simply dummy text of the printing</td>
                                        <td class="digits">1</td>
                                        <td class="font-primary">Pending</td>
                                        <td class="digits">$6523</td>
                                    </tr>
                                    <tr>
                                        <td>Long established</td>
                                        <td class="digits">5</td>
                                        <td class="font-secondary">Cancle</td>
                                        <td class="digits">$6523</td>
                                    </tr>
                                    <tr>
                                        <td>sometimes by accident</td>
                                        <td class="digits">10</td>
                                        <td class="font-secondary">Cancle</td>
                                        <td class="digits">$6523</td>
                                    </tr>
                                    <tr>
                                        <td>Classical Latin literature</td>
                                        <td class="digits">9</td>
                                        <td class="font-primary">Return</td>
                                        <td class="digits">$6523</td>
                                    </tr>
                                    <tr>
                                        <td>keep the site on the Internet</td>
                                        <td class="digits">8</td>
                                        <td class="font-primary">Pending</td>
                                        <td class="digits">$6523</td>
                                    </tr>
                                    <tr>
                                        <td>Molestiae consequatur</td>
                                        <td class="digits">3</td>
                                        <td class="font-secondary">Cancle</td>
                                        <td class="digits">$6523</td>
                                    </tr>
                                    <tr>
                                        <td>Pain can procure</td>
                                        <td class="digits">8</td>
                                        <td class="font-primary">Return</td>
                                        <td class="digits">$6523</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-xl-6 xl-100">
                <div class="card">
                    <div class="card-header">
                        <h5>Latest Orders</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icofont icofont-simple-left"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-status table-responsive latest-order-table">
                            <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Order Total</th>
                                        <th scope="col">Payment Method</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="digits">$120.00</td>
                                        <td class="font-danger">Bank Transfers</td>
                                        <td class="digits">On Way</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="digits">$90.00</td>
                                        <td class="font-secondary">Ewallets</td>
                                        <td class="digits">Delivered</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="digits">$240.00</td>
                                        <td class="font-warning">Cash</td>
                                        <td class="digits">Delivered</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="digits">$120.00</td>
                                        <td class="font-primary">Direct Deposit</td>
                                        <td class="digits">$6523</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td class="digits">$50.00</td>
                                        <td class="font-primary">Bank Transfers</td>
                                        <td class="digits">Delivered</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td class="digits">$40.00</td>
                                        <td class="font-primary">Bank Transfers</td>
                                        <td class="digits">Delivered</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="order.html" class="btn btn-primary">View All Orders</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<!-- Container-fluid Ends-->
@endsection