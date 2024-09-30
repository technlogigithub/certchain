<header class="sticky-header">
    <!-- Header Menu  -->
    <div class="header-nav">
        <div class="container">
            <div class="nav-container pt-xl-2">
                <!-- Site Logo -->
                <div class="site-logo">
                    <a href="{{ route('home')}}"><img src="{{ asset('assets/img/logo-white.webp')}}" alt="Logo"></a>
                </div>

                <!-- Main Menu -->
                <div class="nav-menu d-lg-flex align-items-right">

                    <!-- Navbar Close Icon -->
                    <div class="navbar-close">
                        <div class="cross-wrap"><span></span><span></span></div>
                    </div>

                    <!-- Mneu Items -->
                    <div class="menu-items">
                        <ul>
                            <li class="has-submemu me-xl-3">
                       <a href="#">SOLUTIONS</a>
                       <ul class="submenu">
                           <li><a href="#">Overview</a></li>
                            @foreach (solutionData() as $key => $value)
                                <li><a href="{{ url('solution/'.$value->slug)}}">{{$value->name}}</a> </li>
                            @endforeach
{{--                          
                           <li><a href="{{ route('client')}}">Main Contractors</a></li>
                           <li><a href="{{ route('client')}}">Subcontractors</a></li>
                           <li><a href="{{ route('client')}}">Operators</a></li> --}}
                       </ul>
                   </li>
                            <li><a href="{{ route('about-us')}}">ABOUT</a></li>
                            <li><a href="{{ route('blog')}}">BLOG</a></li>
                            <li><a href="{{ route('contact-us')}}"> CONTACT </a></li>
                        </ul>

                    </div>
                    <!-- Pushed Item -->
                    <div class="nav-pushed-item"></div>
                </div>

                <!-- Navbar Extra  -->
                <div class="navbar-extra d-lg-block d-flex align-items-center">
                    
                    <div class="navbar-toggler">
                        <span></span><span></span><span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>