<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.frontend.header')
</head>

<body>

    <!--====== Header part start ======-->
    @include('layouts.frontend.navbar')
    <!--====== Header part end ======-->
    
    <!--====== Main part start ======-->
    @yield('content')
    <!--====== Main part end ======-->

    <!--====== Footer part start ======-->
    @include('layouts.frontend.footer')
    <!--====== Footer part end ======-->

</body>

</html>
