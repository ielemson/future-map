<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('frontend/images/logos/logo-small.png')}}" class="logo-one" alt="logo">
                        <img src="{{asset('frontend/images/logos/logo-small-white.png')}}" class="logo-two" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav nav-area">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('frontend/images/logos/logo.png')}}" class="logo-one" alt="Logo" style="width: 100%; height:4vw">
                    <img src="{{asset('frontend/images/logos/logo.png')}}" class="logo-two" alt="Logo">
                </a>
                <div class="nav-widget-form">
                    <form class="search-form search-form-bg2">
                        <input type="search" class="form-control" placeholder="Search courses">
                        <button type="submit">
                            <i class="ri-search-line"></i>
                        </button>
                    </form>
                </div>
                <div class="navbar-category">
                    <div class="dropdown category-list-dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButtoncategory"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='flaticon-list'></i>
                            Categories
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtoncategory">
                            <a href="#" class="nav-link-item">
                                <i class="flaticon-web-development"></i>
                                Development
                            </a>
                            <a href="#">
                                <i class="flaticon-design"></i>
                                Web designing
                            </a>
                            <a href="#">
                                <i class="flaticon-wellness"></i>
                                Lifestyle
                            </a>
                            <a href="#">
                                <i class="flaticon-heart-beat"></i>
                                Health & fitness
                            </a>
                            <a href="#">
                                <i class="flaticon-folder"></i>
                                Data science
                            </a>
                            <a href="#">
                                <i class="flaticon-user"></i>
                                Accounting
                            </a>
                            <a href="#">
                                <i class="flaticon-camera"></i>
                                Photography
                            </a>
                            <a href="#">
                                <i class="flaticon-corporate"></i>
                                Marketing
                            </a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            
                            <a href="{{url('/')}}" class="nav-link active">
                                Home
                            </a>
                           
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonials.html" class="nav-link">
                                        Testimonials
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="cart.html" class="nav-link">
                                        Cart
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="checkout.html" class="nav-link">
                                        Checkout
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Instructors
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="instructors.html" class="nav-link">
                                                Instructors
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="instructors-details.html" class="nav-link">
                                                Instructors Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">
                                        Pricing Plan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        User
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="signin.html" class="nav-link">
                                                Sign in
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="signup.html" class="nav-link">
                                                Sign Up
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forgot-password.html" class="nav-link">
                                                Forgot Password
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-condition.html" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="404.html" class="nav-link">
                                        404 Page
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">
                                        Coming Soon
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Courses
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Courses
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Courses List
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Courses Sidebar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Courses Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Event
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Event</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Event Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Blog 
                            </a>
                           
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Contact Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                User
                            </a>
                            <ul class="dropdown-menu">
                               @auth
                               <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('logout')}}" class="nav-link">Logout</a>
                            </li>

                            @else
                            <li class="nav-item">
                                <a href="{{route('login')}}" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('register')}}" class="nav-link">Register</a>
                            </li>
                            @endauth
                            </ul>
                        </li>
                    </ul>
                   {{-- @auth
                  
                       @else
                       <div class="others-options d-flex align-items-center">
                        <div class="optional-item">
                            <a href="{{route('register')}}" class="default-btn two border-radius-5">Sign Up</a>
                        </div>
                    </div>
                   @endauth --}}
                </div>
            </nav>
        </div>
    </div>
    {{-- <div class="side-nav-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-item">
                            <form class="search-form">
                                <input type="search" class="form-control" placeholder="Search courses">
                                <button type="submit">
                                    <i class="ri-search-line"></i>
                                </button>
                            </form>
                        </div>
                        <div class="side-item">
                            <a href="signup.html" class="default-btn two">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
