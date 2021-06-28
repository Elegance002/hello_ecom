<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="{{ route('admin') }}"><img class="blur-up lazyloaded"
                    src="{{asset('backend/assets/images/dashboard/multikart-logo.png')}}" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="{{ route('admin') }}"><i
                        data-feather="home"></i><span>Dashboard</span></a></li>
            <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('products.create') }}"><i class="fa fa-circle"></i><span>Add New
                                Product</span></a>
                    </li>
                    <li>
                        <a href="{{ route('products.all') }}"><i class="fa fa-circle"></i><span>All
                                Products</span></a>
                    </li>
                    <li>
                        <a href="{{ route('products.admin') }}"><i class="fa fa-circle"></i><span>In House
                                Products</span></a>
                    </li>
                    <li>
                        <a href="{{ route('products.seller') }}"><i class="fa fa-circle"></i><span>Saller Products</span></a>
                    </li>
                    <li>
                        <a href="{{ route('digitalproducts.index') }}"><i class="fa fa-circle"></i><span>Digitral Products</span></a>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}"><i class="fa fa-circle"></i><span>Category</span></a>
                    </li>
                    <li>
                        <a href="{{ route('brands.index') }}"><i class="fa fa-circle"></i><span>Brand</span></a>
                    </li>
                    <li>
                        <a href="{{ route('attributes.index') }}"><i class="fa fa-circle"></i><span>Attribute</span></a>
                    </li>
                    <li>
                        <a href="{{ route('colors.index') }}"><i class="fa fa-circle"></i><span>Color</span></a>
                    </li>
                    <li>
                        <a href="{{ route('reviews.index') }}"><i class="fa fa-circle"></i><span>Product Reviews</span></a>
                    </li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="dollar-sign"></i><span>Sales</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('all_orders.index') }}"><i class="fa fa-circle"></i>All Orders</a></li>
                    <li><a href="{{ route('inhouse_orders.index') }}"><i class="fa fa-circle"></i>In House Orders</a></li>
                    <li><a href="{{ route('seller_orders.index') }}"><i class="fa fa-circle"></i>Seller Orders</a></li>
                    <li><a href="{{ route('pick_up_point.order_index') }}"><i class="fa fa-circle"></i>Pick-up Point Orders</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i
                        data-feather="chevrons-left"></i><span>Refunds</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="#"><i class="fa fa-circle"></i>Refund Request</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Approved Refunds</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Rejected Refunds</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Refund Configuration</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="sidebar-header" href="{{ route('customers.index') }}"><i
                        data-feather="user-plus"></i><span>Customer
                        list</span></a>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="users"></i><span>Sellers</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="list-vendor.html"><i class="fa fa-circle"></i>All Seller</a></li>
                    <li><a href="create-vendors.html"><i class="fa fa-circle"></i>Add New Seller</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Payouts</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Payout Requests</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Seller Commission</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Seller Packages</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Seller Verivication
                            Form</a></li>
                </ul>
            </li>
            <li>
                <a class="sidebar-header" href="media.html"><i data-feather="file-plus"></i><span>Uploaded
                        files</span></a>

            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="file-text"></i><span>Reports</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="invoice.html"><i class="fa fa-circle"></i>Invoice (Opt)</a></li>
                    <li><a href="reports.html"><i class="fa fa-circle"></i>Product Sum (Opt)</a></li>
                    <li><a href="{{ route('in_house_sale_report.index') }}"><i class="fa fa-circle"></i>Inhouse Product Sale</a></li>
                    <li><a href="{{ route('seller_sale_report.index') }}"><i class="fa fa-circle"></i>Seller Products Sale </a></li>
                    <li><a href="{{ route('stock_report.index') }}"><i class="fa fa-circle"></i>Products Stock </a></li>
                    <li><a href="{{ route('wish_report.index') }}"><i class="fa fa-circle"></i>Products Wishlist </a></li>
                    <li><a href="{{ route('user_search_report.index') }}"><i class="fa fa-circle"></i>User Searches</a></li>
                    <li><a href="{{ route('commission-log.index') }}"><i class="fa fa-circle"></i>Commission History</a></li>
                    <li><a href="{{ route('wallet-history.index') }}"><i class="fa fa-circle"></i>Wallet Recharge History</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="volume-1"></i><span>Blog System</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="#"><i class="fa fa-circle"></i>All Posts</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Categories</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="mic"></i><span>Marketing</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('flash_deals.index') }}"><i class="fa fa-circle"></i>Flash deals</a></li>
                    <li><a href="{{ route('newsletters.index') }}"><i class="fa fa-circle"></i>Newsletters </a></li>
                    <li><a href="{{ route('sms.index') }}"><i class="fa fa-circle"></i>Bulk SMS </a></li>
                    <li><a href="{{ route('subscribers.index') }}"><i class="fa fa-circle"></i>Subscribers </a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Coupon <i
                                class="fa fa-angle-right pull-right"></i> </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('coupon.index') }}"><i class="fa fa-circle"></i>List Coupons</a></li>
                            <li><a href="{{ route('coupon.create') }}"><i class="fa fa-circle"></i>Create Coupons </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="link"></i><span>Support</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="#"><i class="fa fa-circle"></i>Ticket</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Product Queries</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="phone"></i><span>OTP System</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('otp.configconfiguration') }}"><i class="fa fa-circle"></i>OTP Configurations</a></li>
                    <li><a href="{{ route('otp_credentials.index') }}"><i class="fa fa-circle"></i>Set OTP Credentials</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="layout"></i><span>Website Setup</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="#"><i class="fa fa-circle"></i>Header</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Menus<i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="menu-list.html"><i class="fa fa-circle"></i>Menu Lists</a></li>
                            <li><a href="create-menu.html"><i class="fa fa-circle"></i>Create Menu</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle"></i>Footer</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Pages<i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="pages-list.html"><i class="fa fa-circle"></i>List Page</a></li>
                            <li><a href="page-create.html"><i class="fa fa-circle"></i>Create Page</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle"></i>Appearance</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="settings"></i><span>Settings</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="#"><i class="fa fa-circle"></i>General Settings</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Features activation</a></li>
                    <li><a href="translations.html"><i class="fa fa-circle"></i>Languages</a></li>
                    <li><a href="currency-rates.html"><i class="fa fa-circle"></i>Currency</a></li>
                    <li><a href="taxes.html"><i class="fa fa-circle"></i>Vat & TAX</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Pickup point</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>SMTP Settings</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Payment Methods</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>File System Configuration</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Social media Logins</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Analytics Tools</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Facebook<i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#"><i class="fa fa-circle"></i>Facebook Chat</a></li>
                            <li><a href="#"><i class="fa fa-circle"></i>Facebook Comment</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle"></i>Google reCAPTCHA</a></li>
                    <li><a href="#"><i class="fa fa-circle"></i>Shipping<i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#"><i class="fa fa-circle"></i>Shipping Configuration</a></li>
                            <li><a href="#"><i class="fa fa-circle"></i>Shipping Countries</a></li>
                            <li><a href="#"><i class="fa fa-circle"></i>Shipping Cities</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="tag"></i><span>Staffs</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('staffs.index') }}"><i class="fa fa-circle"></i>All staffs</a></li>
                    <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle"></i>Staff permissions</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i
                        data-feather="log-in"></i><span>Login</span></a>
            </li>
        </ul>
    </div>
</div>