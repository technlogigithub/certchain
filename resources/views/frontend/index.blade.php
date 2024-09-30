@extends('layouts.frontend.app')

@section('content')
    <!--====== Banner part start ======-->
    @php
        $banner = pageData('home', 'Banner');
    @endphp
    @if (!empty($banner))
        <section class="banner-section">
            <div class="banner-slider"> <!-- id="bannerSlider" -->
                <div class="video-banner">
                    <video loop="true" autoplay="autoplay" muted width="100%">
                        <source src="{{ asset('media/home/Banner/' . $banner->media) }}" type="video/mp4">
                    </video>
                </div>
                <div class="single-banner">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-12">
                                <div class="banner-content text-center">
                                    <span class="promo-text" data-animation="fadeInDown" data-delay="0.8s">
                                        {{ $banner->title }}
                                    </span>
                                    <h1 data-animation="fadeInUp" data-delay="1s">
                                        {!! $banner->description !!}
                                    </h1>

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


                        </div>
                    </div>

                </div>

            </div>


        </section>
    @endif
    <!--====== Banner part end ======-->

    <!--====== Feature Part start ======-->
    @php
        $section = pageData('home', 'Section');
    @endphp

    @if (!empty($section))
        <section class="Workforce-section section-gap image-with-text">
            <div class="container">
                <!-- Feature boxes -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 col-md-7 col-tiny-12 wow fadeInLeft" data-wow-duration="1500ms"
                        data-wow-delay="400ms">
                        <div class="Workforce-box text-center">
                            <img src="{{ asset('media/home/Section/' . $section->media) }}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="Workforce-box-content">
                            <h3> {{ $section->title }} </h3>
                            {!! $section->description !!}
                        </div>
                    </div>


                </div>
            </div>
        </section>
    @endif
    <!--====== Feature Part end ======-->
    @php
        $section2 = pageData('home', 'Section2');
    @endphp
    <!--====== Simplified Part start ======-->
    @if (!empty($section2))
        <section class="Simplified-section section-gap" 
        style="background: url({{ asset('media/home/Section2/' . $section2->media) }});
            background-size: cover;
            background-position: top center;
            background-repeat: no-repeat;
            padding-bottom: 700px;
            padding-top: 80px !important;"
        >
            <div class="container">
                <!-- Feature boxes -->
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-6 col-md-7 p-lg-4 text-center wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="600ms">
                        <div class="Workforce-box-content">
                            <h3> {{$section2->title}} </h3>
                            {!! $section2->description !!}

                        </div>
                    </div>


                </div>
            </div>
        </section>
    @endif
    <!--====== Simplified Part end ======-->
    @php
        $section3 = pageData('home', 'Section3');
    @endphp
    <!--====== Feature Part start ======-->
    @if(!empty($section3))
        <section class="Workforce-section section-gap image-with-text">
            <div class="container">
                <!-- Feature boxes -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-4 col-md-5 pe-lg-4  wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="Workforce-box-content">
                            <h3> {{$section3->title}} </h3>
                            {!! $section3->description !!}
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-tiny-12 px-lg-4 wow fadeInLeft" data-wow-duration="1500ms"
                        data-wow-delay="400ms">
                        <div class="Visibility-box">
                    
                            <video loop="true" controls autoplay="autoplay" muted width="100%">
                                <source src="{{ asset('media/home/Section3/' . $section3->media) }}" type="video/mp4">
                            </video>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif
    <!--====== Feature Part end ======-->
    @php
        $section4 = pageData('home', 'Section4');
    @endphp
    <!--====== Feature Part start ======-->
    @if(!empty($section4))
        <section class="workforce-section section-bottom-gap">
            <div class="container">
                <!-- Feature boxes -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-7 col-md-8 p-lg-0 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="Workforce-box-img">
                            <img src="{{ asset('media/home/Section4/' . $section4->media) }}">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mt-lg-5 pt-lg-4 gap-xl-5">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="verify-box-content">
                            <h3> {{$section4->title}} </h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp text-center" data-wow-duration="1500ms"
                        data-wow-delay="600ms">
                        <div class="verify-box-content-right">
                            {!! $section4->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--====== Feature Part end ======-->

    <!--====== Feature Part start ======-->
    @php
        $section5 = pageData('home', 'Section5');
    @endphp
    @if(!empty($section5))
    <section class="Instant-section">
        <div class="container">

            <!-- Feature boxes -->
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 col-md-6 ps-xl-5 wow fadeInUp text-left" data-wow-duration="1500ms"
                    data-wow-delay="600ms">
                    <div class="Instant-box-content text-left">
                        <h3> {{$section5->title}} </h3>
                        {!! $section5->description !!}
                        <a class="instant-btn" href="#"> Order now </a>
                        <a class="instant-btn instant-btn-2" href="#"> Talk to sales </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8 col-md-6 wow fadeInUp text-center" data-wow-duration="1500ms"
                    data-wow-delay="600ms">
                    <div class="instant-img"> <img src="{{ asset('media/home/Section5/' . $section5->media) }}"> </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--====== Feature Part end ======-->
    @php
        $section6 = pageData('home', 'Section6');
    @endphp
    <!--====== Feature Part start ======-->
    @if(!empty($section6))
        <section class="tab-section section-gap">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 col-md-12 wow fadeInUp text-center mb-3" data-wow-duration="1500ms"
                        data-wow-delay="400ms">
                        <h3> {{ $section6->title }} </h3>
                    </div>
                </div>
                <!-- Feature boxes -->

                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-10 col-md-10 wow fadeInUp text-center" data-wow-duration="1500ms"
                        data-wow-delay="600ms">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="tab-content-img"> <img src="assets/img/assign.webp"> </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="tab-content-img"> <img src="assets/img/Verify.png"> </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="tab-content-img"> <img src="assets/img/Monitor.webp"> </div>
                            </div>
                        </div>

                        <ul class="nav nav-tabs nav-tabs-bottom" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                    <h5> Assign </h5>
                                    <p> Assign workers to projects, link your subcontractors and clients for full visibility
                                        of compliance activities </p>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                    <h5> Verify </h5>
                                    <p> Verify your workforce and supply chain against over 150 digital competency
                                        standards, and custom policies </p>

                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    <h5> Monitor </h5>
                                    <p> AI continuously monitors, forecasts, alerts, and deals with emerging risks and
                                        issues across all your projects in real-time </p>
                                </button>
                            </li>
                        </ul>
                                                    

                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--====== Feature Part end ======-->

    <!--====== Gallery Section Start ======-->
    <section class="gallery_sec section-gap">
        <div class="container-fluid">
            <div class="row">

                @foreach ($gellery as $key=>$value)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-lg-2">
                        <a href="{{ asset("media/gellery/".$value->image)}}" data-fancybox="gallery">
                            <img src="{{ asset("media/gellery/".$value->image)}}" />
                            <h4> {{$value->title}} </h4>
                        </a>
                    </div>
                @endforeach
              

               
            </div>
        </div>
    </section>
    <!--====== Gallery Part end ======-->

    <!--====== FAQ Section Start ======-->
    <section class="faq-section section-gap with-illustration with-shape">
        <div class="container">

            <div class="row justify-content-center align-items-center">


                <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="700ms">
                    <div class="faq-content">
                        <div class="section-title pb-5 ps-3">
                            <h3 class="title"> FAQ´s </h3>
                        </div>
                        <!-- FAQ LOOP -->

                        <div class="accordion" id="accordionExample">
                            @foreach ($faq as $key => $value)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                                       {{$value->question}}
                                    </button>
                                </h2>
                                <div id="collapse{{$key}}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{$value->answer}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                           
                           
                        </div>

                        <!-- End Faq LOOP -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FAQ Section End ======-->
@endsection
