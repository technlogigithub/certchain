<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('assets/img/logo-white.webp') }}" alt="Admin" class="w-100 py-1">
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('media/user/' . auth()->user()->image) }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item ">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::route()->getName() === 'dashboard'  ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item {{ Request::route()->getName() === 'add-blog' || Request::route()->getName() === 'admin.blog' ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::route()->getName() === 'add-blog' || Request::route()->getName() === 'admin.blog' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Blog
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add-blog') }}" class="nav-link {{ Request::route()->getName() === 'add-blog' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.blog') }}" class="nav-link {{ Request::route()->getName() === 'admin.blog' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ Request::route()->getName() === 'add-gellery' || Request::route()->getName() === 'gellery' ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::route()->getName() === 'add-gellery' || Request::route()->getName() === 'gellery' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Gellery
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add-gellery') }}" class="nav-link {{ Request::route()->getName() === 'add-gellery' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Gellery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gellery') }}" class="nav-link {{ Request::route()->getName() === 'gellery' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gellery</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ Request::route()->getName() === 'page.add' || Request::route()->getName() === 'page.faq' ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::route()->getName() === 'page.add' || Request::route()->getName() === 'page.faq' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Faqs
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/add-faq') }}" class="nav-link {{ Request::route()->getName() === 'page.add' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Faqs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/faq') }}" class="nav-link {{ Request::route()->getName() === 'page.faq' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Faqs</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ Request::route()->getName() === 'page.home' || Request::route()->getName() === 'page.about' ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::route()->getName() === 'page.home' || Request::route()->getName() === 'page.about' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('page.home') }}" class="nav-link {{ Request::route()->getName() === 'page.home' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('page.about') }}" class="nav-link {{ Request::route()->getName() === 'page.about' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item {{ Request::route()->getName() === 'add-solution' || Request::route()->getName() === 'solution' ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::route()->getName() === 'add-solution' || Request::route()->getName() === 'solution' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Solution
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add-solution') }}" class="nav-link {{ Request::route()->getName() === 'add-solution' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Solution</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('solution') }}" class="nav-link {{ Request::route()->getName() === 'solution' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Solution</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ Request::route()->getName() === 'add-testimonial' || Request::route()->getName() === 'testimonial' ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::route()->getName() === 'add-testimonial' || Request::route()->getName() === 'testimonial' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Testimonial
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add-testimonial') }}" class="nav-link {{ Request::route()->getName() === 'add-testimonial' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Testimonial</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('testimonial') }}" class="nav-link {{ Request::route()->getName() === 'testimonial' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Testimonial</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('page.contact') }}" class="nav-link {{ Request::route()->getName() === 'page.contact' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Contact</p>
                    </a>
                </li>

                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </form>
                </li>

            </ul>
        </nav>

    </div>

</aside>
