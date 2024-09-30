@extends('layouts.frontend.app')

@section('content')
    <!--====== Banner part start ======-->
    <section class="banner-section">
        <div class="inner-banner"> <!-- id="bannerSlider" -->
            <div class="inner-blog-bg" style="background: url(assets/img/contact-form-bg.jpg);">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-9 col-md-9 text-left">
                            <div class="inner-banner-content">
                             
                                <h1 data-animation="fadeInUp" data-delay="1s">
                                    Blogs
                                </h1>
                                <div class="bredcumb">
                                    <ul>
                                        <li> <a href="{{ route("home") }}"> Home </a> </li>
                                        <li> - </li>
                                        <li> Blog </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 text-right">

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--====== Banner part end ======-->

    <!--====== Feature Part start ======-->
    <section class="blog-section py-5">
        <div class="container">

            <div class="row justify-content-center">
            @foreach($result as $key => $value)
                
                <div class="col-lg-4">
                    <div class="blog-box">
                        <div class="blog-img"> <a href="{{ url('blog-details/'.$value->id)}}"> <img src="{{ asset('media/blog/'.$value->image) }}"> </a>
                        </div>
                        <div class="blog-content">
                            <p> {{$value->name}}</p>
                            <a class="blog-btn" href="{{ url('blog-details/'.$value->id)}}"> Read More </a>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
    </section>
    <!--====== Feature Part end ======-->
@endsection
