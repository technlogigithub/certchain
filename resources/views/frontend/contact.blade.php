@extends('layouts.frontend.app')

@section('content')
    <section class="banner-section">
        <div class="inner-banner">
            <div class="single-banner contact-banner" style="background: url(assets/img/contact-form-bg.jpg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="banner-content contact-content inner-banner-content text-left me-3">
                                <h1 data-animation="fadeInUp" data-delay="1s">
                                    Write to us by filling in the contact form below
                                </h1>

                                <p> Alternatively you can email us on <a href="mailto:contact@certchain.ai">
                                        contact@certchain.ai </a> </p>

                                <form action="{{url('/contact-us-store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col px-0">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col px-0">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col px-0">
                                            <input type="text" class="form-control" name="Subject" placeholder="Subject">
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col px-0">
                                            <textarea class="form-control" placeholder="Message" name="message" rows="3"></textarea>
                                        </div>

                                    </div>
                                    <div class="row mt-2">
                                        <div class="col px-0">
                                            <button type="submit" class="btn btn-primary">SEND </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="col-lg-6">
                        </div>

                    </div>
                </div>

            </div>

        </div>


    </section>
    <!--====== Banner part end ======-->
@endsection
