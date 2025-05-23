<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Dashboard</title>

    @include('backend.includes.style')

</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        @include('backend.includes.navbar')
        @include('backend.includes.sidebar')
        <!--begin::App Main-->
        <main class="app-main">

            @yield('contant')

        </main>
        <!--end::App Main-->


        @include('backend.includes.footer')
    </div>
    <!--end::App Wrapper-->

    @include('backend.includes.script')

</body>
<!--end::Body-->

</html>
