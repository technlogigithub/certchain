@extends('layouts.frontend.app')

@section('content')
    <!--====== Banner part start ======-->
    <section class="banner-section">
        <div class="inner-banner"> <!-- id="bannerSlider" -->
            <div class="inner-blog-bg" style="background: url(../../assets/img/contact-form-bg.jpg);">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-9 col-md-9 text-left">
                            <div class="inner-banner-content">
                               
                                <h1 data-animation="fadeInUp" data-delay="1s">
                                    Blog Detalis
                                </h1>
                                <div class="bredcumb">
                                    <ul>
                                        <li> <a href="{{ route("home") }}"> Home </a> </li>
                                        <li> - </li>
                                        <li> Blog Detalis </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>



            </div>

        </div>

    </section>
    <!--====== Banner part end ======-->

    <!--====== Feature Part start ======-->
    <section class="blog-section py-5 mt-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <img src="{{ asset('media/blog/'.$bolg_detail->image) }}">
                    <div class="blog-details-content mt-5">
                        <div class="blog-content">
                            {!! $bolg_detail->descrption !!}
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <!--====== Feature Part end ======-->
@endsection
