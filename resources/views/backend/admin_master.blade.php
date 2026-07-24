<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="adminHMD professional admin dashboard template">
    <title>Dashboard | Poolito</title>

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
</head>

<body>
    <div class="admin-shell">
        <div class="sidebar-backdrop" data-sidebar-close></div>

        <!-- sidebar  -->
        @include('backend.layouts.sidebar')
        <!-- sidebar end  -->

        <div class="admin-main">
            <!-- navbar  -->
            @include('backend.layouts.navbar')
            <!-- navbar  -->

            <!--********************************
			Start Main Content
    ********************************-->
            @yield('admin_content')

            <!--********************************
			End Main Content
	******************************** -->

            <!-- footer  -->
            @include('backend.layouts.footer')
            <!-- footer  -->

        </div>
    </div>

    @include('backend.layouts.script')
</body>

</html>