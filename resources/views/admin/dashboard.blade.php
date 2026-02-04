<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Dashboard</title>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('backend/dist/css/tabler.css') }}" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN CUSTOM FONT -->
    <style>
        @import url("https://rsms.me/inter/inter.css");
    </style>
    <!-- END CUSTOM FONT -->

</head>

<body>

    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="{{ asset('backend/dist/js/tabler-theme.min.js') }}"></script>
    <!-- END GLOBAL THEME SCRIPT -->

    <div class="page">

        <!--  BEGIN SIDEBAR  -->
        @include('admin.layouts.sidebar')
        <!--  END SIDEBAR  -->

        <!-- BEGIN NAVBAR  -->
        @include('admin.layouts.header')
        <!-- END NAVBAR  -->

        <div class="page-wrapper">

            <!-- BEGIN PAGE BODY -->
            @yield('admin_contents')
            <!-- END PAGE BODY -->

            <!--  BEGIN FOOTER  -->
            @include('admin.layouts.footer')
            <!--  END FOOTER  -->

        </div>

    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('backend/dist/js/tabler.min.js') }}" defer></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

</body>

</html>
