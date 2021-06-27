<!DOCTYPE html>
<html lang="en">

    <!-- Font Awesome-->
    @include('backend.admin.layouts.head')


<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        @include('backend.admin.layouts.header')
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            @include('backend.admin.layouts.sidebar')
            <!-- Page Sidebar Ends-->



            <div class="page-body">

                @yield('main-content')

            </div>

            @include('backend.admin.layouts.footer')

</body>


</html>