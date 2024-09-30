@extends('layouts.frontend.app')

@section('content')
    @php
        $banner = pageData($result->name, 'Banner');
    @endphp
    <!--====== Banner part start ======-->
    @if(!empty($banner))
        <section class="banner-section">
            <div class="inner-banner"> <!-- id="bannerSlider" -->
                <div class="client-single-banner single-banner"
                    style="background: url({{ asset('media/home/Banner/' . $banner->media) }});">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-6">
                                <div class="banner-content client-banner-content text-left">
                                    <h4> CERTCHAIN AI </h4>
                                    <h1 data-animation="fadeInUp" data-delay="1s">
                                       {{$banner->title}}
                                    </h1>

                                    <p> {!! $banner->description !!}</p>
                                    <ul class="btn-wrap">
                                        <li data-animation="fadeInRight" data-delay="1.4s">
                                            <a class="main-btn main-btn-2" href="#"> Try for free </a>
                                        </li>
                                        <li data-animation="fadeInLeft" data-delay="1.2s">
                                            <a class="main-btn main-btn-3" href="#"> See plans and pricing </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            </div>

                        </div>
                    </div>

                </div>

            </div>


        </section>
    @endif
    <!--====== Banner part end ======-->
    @php
        $section = pageData($result->name, 'Section');
    @endphp
    <!--====== Feature Part start ======-->
    <section class="appointments-section" style="background:url({{ asset('media/home/Section/' . $section->media) }});">
        <div class="container">
            <!-- Feature boxes -->
            <div class="row justify-content-end align-items-end">
                <div class="col-lg-7 col-md-7 col-tiny-12 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="400ms">

                </div>
                <div class="col-lg-5 col-md-5 ps-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                    <div class="dark-box-content regulatory-resilience-box-content">
                        <h3> {{ $section->title }} </h3>
                            {!! $section->description !!}
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--====== Feature Part end ======-->
    @php
        $section2 = pageData($result->name, 'Section2');
        $section3 = pageData($result->name, 'Section3');
        $section4 = pageData($result->name, 'Section4');
    @endphp
    @if(!empty($section2) || !empty($section3) || !empty($section4))
        <section class="dark-bg-section section-icon section-gap">
            <div class="container">

                <!-- Feature boxes -->
                <div class="row justify-content-center align-items-center">
                    @if(!empty($section2))
                        <div class="col-lg-4 col-md-4 wow fadeInUp text-center" data-wow-duration="1500ms" data-wow-delay="400ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                            <div class="client-icon-box client-icon-box-right">
                                <span class="icon"> <i class="far fa-rocket"></i> </span>
                                <h3> {{ $section2->title }} </h3>
                                <p> {!! $section2->description !!} </p>
                            </div>
                        </div>
                    @endif
                    @if(!empty($section3))
                        <div class="col-lg-4 col-md-4 wow fadeInUp text-center" data-wow-duration="1500ms" data-wow-delay="600ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                            <div class="client-icon-box client-icon-box-right">
                                <span class="icon"> <i class="far fa-user-shield"></i> </span>
                                <h3> {{ $section3->title }} </h3>
                                <p> {!! $section3->description !!} </p>
                            </div>
                        </div>
                    @endif
                    @if(!empty($section4))
                        <div class="col-lg-4 col-md-4 wow fadeInUp text-center" data-wow-duration="1500ms" data-wow-delay="800ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                            <div class="client-icon-box">
                                <span class="icon"> <i class="far fa-trophy"></i> </span>
                                <h3> {{ $section4->title }} </h3>
                                <p> {!! $section4->description !!} </p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif
    <!--====== Feature Part start ======-->
    <section class="tab-section section-gap">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 col-md-12 wow fadeInUp text-center mb-3" data-wow-duration="1500ms"
                    data-wow-delay="400ms">
                    <h3> How it works </h3>
                </div>
            </div>
            <!-- Feature boxes -->

            <div class="row justify-content-center align-items-center">

                <div class="col-lg-10 col-md-10 wow fadeInUp text-center" data-wow-duration="1500ms" data-wow-delay="600ms">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="tab-content-img"> <img src="{{ asset('assets/img/assign.webp')}}"> </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="tab-content-img"> <img src="{{ asset('assets/img/Verify.png')}}"> </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="tab-content-img"> <img src="{{ asset('assets/img/Monitor.webp')}}"> </div>
                        </div>
                    </div>

                    <ul class="nav nav-tabs nav-tabs-bottom" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">
                                <h5> Assign </h5>
                                <p> Assign workers to projects, link your subcontractors and clients for full visibility of
                                    compliance activities </p>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <h5> Verify </h5>
                                <p> Verify your workforce and supply chain against over 150 digital competency standards,
                                    and custom policies </p>

                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">
                                <h5> Monitor </h5>
                                <p> AI continuously monitors, forecasts, alerts, and deals with emerging risks and issues
                                    across all your projects in real-time </p>
                            </button>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!--====== Feature Part end ======-->

    <!--====== dark Part start ======-->
    @php
        $section5 = pageData($result->name, 'Section5');
        $section6 = pageData($result->name, 'Section6');
        $section7 = pageData($result->name, 'Section7');
    @endphp
    @if(!empty($section5) || !empty($section6) || !empty($section7))
        <section class="dark-bg-section client-image-with-text section-gap overlay-bg"
            style="background:url({{ asset('assets/img/bg-scaled-client.webp')}});">
            <div class="container">
                <!-- Feature boxes -->
                @if(!empty($section5))
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-6 col-tiny-12 wow fadeInLeft order-lg-2" data-wow-duration="1500ms"
                            data-wow-delay="400ms">
                            <div class="">
                                <img src="{{ asset('media/home/Section5/' . $section5->media) }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="dark-box-content me-lg-5">
                                <h3> {{ $section5->title }} </h3>
                                <p> {!! $section5->description !!} </p>

                                <a class="instant-btn mt-4" href="#"> Learn More </a>
                            </div>
                        </div>



                    </div>
                @endif
                @if(!empty($section6))
                    <div class="row justify-content-start align-items-center section-gap ">
                        <div class="col-lg-6 col-md-6 col-tiny-12 wow fadeInLeft" data-wow-duration="1500ms"
                            data-wow-delay="400ms">
                            <div class=" Competence-Passport">
                                <img src="{{ asset('media/home/Section6/' . $section6->media) }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="dark-box-content Competence-Passport-content ps-lg-0 me-lg-5">
                                <h3> {{ $section6->title }} </h3>
                                <p> {!! $section6->description !!} </p>

                                <a class="instant-btn mt-4" href="#"> Learn More </a>
                            </div>
                        </div>



                    </div>
                @endif
                @if(!empty($section7))
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-6 col-tiny-12 wow fadeInLeft order-lg-2" data-wow-duration="1500ms"
                            data-wow-delay="400ms">
                            <div class="">
                                <img src="{{ asset('media/home/Section7/' . $section7->media) }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="dark-box-content me-lg-5">
                                <h3> {{ $section7->title }} </h3>
                                {!! $section7->description !!}

                                <a class="instant-btn mt-4" href="#"> Learn More </a>
                            </div>
                        </div>



                    </div>
                @endif

            </div>
        </section>
    @endif
    <!--====== dark Part end ======-->
    @php
        $section8 = pageData($result->name, 'Section8');
    @endphp
    <!--====== Feature Part start ======-->
    @if(!empty($section8))
        <section class="regulatory-resilience" style="background:url({{ asset('media/home/Section8/' . $section8->media) }});">
            <div class="container">
                <!-- Feature boxes -->
                <div class="row justify-content-end align-items-end">
                    <div class="col-lg-7 col-md-7 col-tiny-12 wow fadeInLeft" data-wow-duration="1500ms"
                        data-wow-delay="400ms">

                    </div>
                    <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="dark-box-content regulatory-resilience-box-content">
                            <h3> {{ $section8->title }} </h3>
                            <p> {!! $section8->description !!} </p>

                        </div>
                    </div>


                </div>
            </div>
        </section>
    @endif
    <!--====== Feature Part end ======-->
@endsection
