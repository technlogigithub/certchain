   <!--====== Footer Part Start ======-->
   <footer>
        @if(Request::route()->getName() == 'home')
        @php
            $section7 = pageData('home', 'Section7');
        @endphp
            <div class="footer-top" style="
            background: #000 url({{ asset('media/home/Section7/' . $section7->media) }});
            position: relative;
            padding-top: 150px;
            z-index: 1;
            background-size: contain !important;
            background-position: 0px 0px;
            background-repeat: no-repeat;
            padding-bottom: 150px;
            ">
                <div class="container">
                    <div class="footer-widget">
                        <div class="row">
                            <div class="col-lg-7 col-md-4 col-sm-4 text-center">
                            </div>
                            <div class="col-lg-5 col-md-8 col-sm-8 pl-lg-5 text-center">
                                <div class="widget site-info-widget">
                                    <h3> {{ $section7->title }} </h3>
                                    {!! $section7->description  !!}
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
       @endif

       <div class="footer-copyright">
           <div class="container">
               <div class="row justify-content-center align-items-center">
                   <div class="col-lg-12 col-md-12 col-sm-12 d-lg-flex justify-content-center align-items-center">
                       <p class="copyright-text">
                           © 2024 Certchain Ltd. All rights reserved |
                       </p>
                       <ul>
                           <li> <a href="#"> Privacy Policy </a> </li>
                           <li> <a href="#"> | Terms &amp; Conditions </a> </li>
                           <li> <a href="#"> | News </a> </li>
                           <li> <a href="#"> | Contact </a> </li>

                       </ul>

                   </div>
               </div>
           </div>
       </div>
   </footer>
   <!--====== Footer Part end ======-->

   <!--====== jquery js ======-->
   <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
   <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
   <!--====== Bootstrap js ======-->
   <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
   <!--====== Slick js ======-->
   <script src="{{ asset('assets/js/slick.min.js')}}"></script>
   <!--====== Jquery Ui ======-->
   <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
   <!--====== Wow JS ======-->
   <!-- <script src="{{ asset('assets/js/wow.min.js')}}"></script> -->
   <!--====== Main js ======-->
   <script src="{{ asset('assets/js/main.js')}}"></script>
