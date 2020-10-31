<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - My Blog</title>

    {{-- plugin:css --}}
    <link rel="stylesheet" href="{{ asset('royalui/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('royalui/vendors/base/vendor.bundle.base.css') }}">
    {{-- endinject --}}

    {{-- page plugin:css --}}
    {{-- endinject --}}

    {{-- inject:css --}}
    <link rel="stylesheet" href="{{ asset('royalui/css/style.css') }}">
    {{-- endinject --}}
    @yield('head', '')
</head>

<body>
    <div class="container-scroller">

        @include('dashboard.layouts.navbar')

        <div class="container-fluid page-body-wrapper">
            @include('dashboard.layouts.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020
                            <a href="https://www.bootstrapdash.com/" target="_blank">Anup Shrestha</a>. All rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with
                            <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
            </div>
        </div>

    </div>






    <!-- plugins:js -->
    <script src="{{ asset('royalui/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('royalui/js/off-canvas.js') }}"></script>
    <script src="{{ asset('royalui/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('royalui/js/template.js') }}"></script>
    <script src="{{ asset('royalui/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    {{-- <script src="{{ asset('royalui/js/dashboard.js') }}"></script> --}}
    <!-- End custom js for this page-->

    @yield('scripts',"")
</body>

</html>