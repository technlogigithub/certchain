@extends('layouts.frontend.app')

@section('content')
    @php
        $banner = pageData('about', 'Banner');
    @endphp

    <!--====== Banner part start ======-->
    @if(!empty($banner))
        <section class="banner-section about-banner-section">
            <div class="inner-banner"> <!-- id="bannerSlider" -->
                <div class="single-banner" style="background: url({{ asset('media/home/Banner/' . $banner->media) }});">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-5">
                                <div class="banner-content inner-banner-content text-left">
                                    <h1 data-animation="fadeInUp" data-delay="1s">
                                       {{$banner->title}}
                                    </h1>
                                    <p>
                                        {!! $banner->description !!}
                                    </p>
                                   
                                </div>
                            </div>
                            <div class="col-lg-7">
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </section>
    @endif
    <!--====== Banner part end ======-->
    @php
        $section = pageData('about', 'Section');
    @endphp
    <!--====== dark Part start ======-->
    @if(!empty($section))
        <section class="dark-bg-section section-gap">
            <div class="container">
                <!-- Feature boxes -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 col-md-7 col-tiny-12 ps-lg-3 order-lg-2 wow fadeInLeft" data-wow-duration="1500ms"
                        data-wow-delay="400ms">
                        <div class="Workforce-box">
                            <img src="{{ asset('media/home/Section/' . $section->media) }}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="dark-box-content dark-box-content-right">
                            <h3>   {{$section->title}}</h3>
                            {!! $section->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--====== dark Part end ======-->
    @php
        $section2 = pageData('about', 'Section2');
    @endphp
    <!--====== dark Part start ======-->
    @if(!empty($section2))
        <section class="dark-bg-section section-gap overlay-bg"
            style="background:url(assets/img/full-bg-middle-about-us.webp);">
            <div class="container">
                <!-- Feature boxes -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 col-md-7 col-tiny-12 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="Workforce-box">
                            <img src="{{ asset('media/home/Section2/' . $section2->media) }}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5  wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="dark-box-content dark-box-content-dark">
                            <h3> {{$section2->title }} </h3>
                            {!! $section2->description !!}
                        </div>
                    </div>



                </div>
            </div>
        </section>
    @endif
    <!--====== dark Part end ======-->
    @php
        $section3 = pageData('about', 'Section3');
    @endphp
    <!--====== dark Part start ======-->
    @if(!empty($section3))
        <section class="dark-bg-section section-gap">
            <div class="container">
                <!-- Feature boxes -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 col-md-7 col-tiny-12 order-lg-2  wow fadeInLeft" data-wow-duration="1500ms"
                        data-wow-delay="400ms">
                        <div class="Workforce-box">
                            <img src="{{ asset('media/home/Section3/' . $section3->media) }}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="dark-box-content">
                            <h3>   {{$section3->title}} </h3>
                            <p>  {!! $section3->description !!} </p>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif
    <!--====== dark Part end ======-->
  
    <!--====== dark Part start ======-->

        <section class="dark-bg-section testimonials-section">
            <div class="container">
                <!-- Feature boxes -->
                <div class="row justify-content-center align-items-center dark-box-content">
                    <h3 class="dark-box-content"> Testimonials </h3>
                </div>
                <div class="row justify-content-center align-items-center">
                    @foreach($testimonial_data as $key => $value)
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="dark-box-content">
                            <p> {{$value->descrption}} </p>
                            <p class="name-designation"> {{$value->name}}, {{$value->post}}, {{$value->company_name}}” </p>

                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="col-lg-6 col-md-6 col-tiny-12 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="dark-box-content">

                            <p> “It is a game changer! For the first time we know that our workers and supply chain are always
                                compliant. </p>
                            <p class="name-designation"> Nick Elms, CIO Volker Wessels </p>
                        </div>
                    </div> --}}

                </div>
            </div>
        </section>

    <!--====== dark Part end ======-->

    @php
        $section4 = pageData('about', 'Section4');
    @endphp
    <!--====== Feature Part start ======-->
    @if(!empty($section4))
        <section class="generations-section section-gap" style="background:url({{ asset('media/home/Section4/' . $section4->media) }});">
            <div class="container">
                <!-- Feature boxes -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 py-lg-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="dark-box-content">
                            <h3>   {{$section4->title}} </h3>
                            {!! $section4->description !!}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-tiny-12 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="400ms">

                    </div>

                </div>
            </div>
        </section>
    @endif
    <!--====== Feature Part end ======-->
    @php
        $section5 = pageData('about', 'Section5');
    @endphp

    @if(!empty($section5))
        <section class="dark-bg-section revolution-section section-gap">
            <div class="container">

                <!-- Feature boxes -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10 col-md-10 wow fadeInUp text-center" data-wow-duration="1500ms" data-wow-delay="600ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="Instant-box-content revolution-content text-left">
                            <h3> {{$section5->title}} </h3>
                            <p>  {!! $section5->description !!} </p>
                            <a class="instant-btn" href="#"> Talk to us </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif
@endsection
