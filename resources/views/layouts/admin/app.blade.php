<!DOCTYPE html>

<html lang="en">

<head>
    @include('layouts.admin.header')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('layouts.admin.navbar')
        @include('layouts.admin.sidebar')

        @yield('content')

        <footer class="main-footer">
            <strong>Copyright &copy; 2024</strong> All rights reserved.
        </footer>
    </div>

    @include('layouts.admin.footer')
    @yield('footer_script')
</body>

</html>
