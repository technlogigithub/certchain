<!--====== Required meta tags ======-->
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!--====== Title ======-->
@if(Request::route()->getName() == 'home')
    <title> || Home || </title>
@elseif(Request::route()->getName() == 'blog')
    <title> || Blog || </title>
@elseif(Request::route()->getName() == 'blog-details')
    <title> || Blog Details || </title>
@elseif(Request::route()->getName() == 'about')
    <title> || About Us || </title>
@elseif(Request::route()->getName() == 'contact')
    <title> || Contact Us || </title>
@elseif(Request::route()->getName() == 'client')
    <title> || Client || </title>
@endif
<!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="{{ asset('assets/img/favicon.png')}}" type="img/png" />
<!--====== Animate Css ======-->
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
<!--====== Bootstrap css ======-->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
<!--====== Fontawesome css ======-->
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}" />
<!--====== Flaticon css ======-->
<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}" />
<!--====== Slick  css ======-->
<link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}" />
<!--====== Jquery ui ======-->
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css')}}" />
<!--====== Style css ======-->
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />