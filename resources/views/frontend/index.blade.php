@extends('layouts.frontend')

@section('content')
       {{-- Header Starts --}}
   @include('frontend.includes.nav')
   @include('frontend.includes.header')
   {{-- Header Ends --}}
{{-- <div class="featured-area featured-area-mt pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-6">
                <div class="featured-item">
                    <i class="flaticon-studying"></i>
                    <h3>Expedite learning</h3>
                    <p>Duis aute irure dolor in voluptate velit esse cillum labore .</p>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="featured-item">
                    <i class="flaticon-platform"></i>
                    <h3>Open-source platform</h3>
                    <p>Duis aute irure dolor in voluptate velit esse cillum labore .</p>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="featured-item">
                    <i class="flaticon-effective"></i>
                    <h3>Maximum efficiency</h3>
                    <p>Duis aute irure dolor in voluptate velit esse cillum labore .</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="categories-area pb-70">
    <div class="container">
        <div class="section-title mb-45">
            <h2>Explore top featured <b>categories</b></h2>
        </div>
        <div class="categories-slider owl-carousel owl-theme">
            <div class="categories-item">
                <a href="courses-details.html">
                    <img src="assets/images/categories/categories-img1.jpg" alt="Categories">
                </a>
                <div class="content">
                    <a href="courses-details.html">
                        <i class="flaticon-web-development"></i>
                        <h3>Development</h3>
                    </a>
                </div>
            </div>
            <div class="categories-item">
                <a href="courses-details.html">
                    <img src="assets/images/categories/categories-img2.jpg" alt="Categories">
                </a>
                <div class="content">
                    <a href="courses.html">
                        <i class="flaticon-design"></i>
                        <h3>Web designing</h3>
                    </a>
                </div>
            </div>
            <div class="categories-item">
                <a href="courses-details.html">
                    <img src="assets/images/categories/categories-img3.jpg" alt="Categories">
                </a>
                <div class="content">
                    <a href="courses.html">
                        <i class="flaticon-wellness"></i>
                        <h3>Art & design</h3>
                    </a>
                </div>
            </div>
            <div class="categories-item">
                <a href="courses-details.html">
                    <img src="assets/images/categories/categories-img4.jpg" alt="Categories">
                </a>
                <div class="content">
                    <a href="courses.html">
                        <i class="flaticon-heart-beat"></i>
                        <h3>Health & fitness</h3>
                    </a>
                </div>
            </div>
            <div class="categories-item">
                <a href="courses-details.html">
                    <img src="assets/images/categories/categories-img5.jpg" alt="Categories">
                </a>
                <div class="content">
                    <a href="courses.html">
                        <i class="flaticon-camera"></i>
                        <h3>Photography</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="enrolled-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="enrolled-img-two mb-30" data-speed="0.05" data-revert="true">
                    <img src="assets/images/enrolled/enrolled-img2.png" alt="Enrolled">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <h2>We have the most qualified instructors in your hometown.</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                            Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <ul class="enrolled-list">
                                <li><i class="flaticon-check"></i> Full lifetime access</li>
                                <li><i class="flaticon-check"></i> Certificate of completion</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-6">
                            <ul class="enrolled-list">
                                <li><i class="flaticon-check"></i> 20+ downloadable resources</li>
                                <li><i class="flaticon-check"></i> Free trial 7 days</li>
                            </ul>
                        </div>
                    </div>
                    <a href="courses.html" class="default-btn">Enrolled today</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="counter-area-two section-bg pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="counter-card">
                    <i class="flaticon-online-course"></i>
                    <h3><span class="odometer" data-count="15000">00000</span>+</h3>
                    <p>Courses & videos</p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="counter-card">
                    <i class="flaticon-student"></i>
                    <h3><span class="odometer" data-count="145000">000000</span>+</h3>
                    <p>Students enrolled</p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="counter-card">
                    <i class="flaticon-online-course-1"></i>
                    <h3><span class="odometer" data-count="10000">00000</span>+</h3>
                    <p>Courses instructors</p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="counter-card">
                    <i class="flaticon-customer-satisfaction"></i>
                    <h3><span class="odometer" data-count="100">000</span>%</h3>
                    <p>Satisfaction rate</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="courses-area courses-area-rs pt-100 pb-70">
    <div class="container">
        <div class="section-title mb-45">
            <h2>Find popular <b>courses</b></h2>
        </div>
        <div class="course-slider owl-carousel owl-theme">
            <div class="courses-item">
                <a href="courses-details.html">
                    <img src="assets/images/courses/courses-img7.jpg" alt="Courses" />
                </a>
                <div class="content">
                    <div class="course-instructors">
                        <img src="assets/images/courses/instructors1.jpg" alt="instructors" />
                    </div>
                    <a href="courses.html" class="tag-btn">Finance</a>
                    <h3><a href="courses-details.html">The complete business plan course includes 50 templates</a>
                    </h3>
                    <ul class="course-list">
                        <li><i class="ri-time-fill"></i> 10 hr 07 min</li>
                        <li><i class="ri-vidicon-fill"></i> 67 lectures</li>
                    </ul>
                    <div class="bottom-content">
                        <div class="rating2">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            5 (30+ rating)
                        </div>
                        <div class="bottom-price">$120</div>
                    </div>
                </div>
            </div>
            <div class="courses-item">
                <a href="courses-details.html">
                    <img src="assets/images/courses/courses-img8.jpg" alt="Courses" />
                </a>
                <div class="content">
                    <div class="course-instructors">
                        <img src="assets/images/courses/instructors2.jpg" alt="instructors" />
                    </div>
                    <a href="courses.html" class="tag-btn">Banking</a>
                    <h3><a href="courses-details.html">Full web designing course with 20 web template designing</a>
                    </h3>
                    <ul class="course-list">
                        <li><i class="ri-time-fill"></i> 03 hr 10 min</li>
                        <li><i class="ri-vidicon-fill"></i> 27 lectures</li>
                    </ul>
                    <div class="bottom-content">
                        <div class="rating2">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            5 (50+ rating)
                        </div>
                        <div class="bottom-price">$400</div>
                    </div>
                </div>
            </div>
            <div class="courses-item">
                <a href="courses-details.html">
                    <img src="assets/images/courses/courses-img9.jpg" alt="Courses" />
                </a>
                <div class="content">
                    <div class="course-instructors">
                        <img src="assets/images/courses/instructors3.jpg" alt="instructors" />
                    </div>
                    <a href="courses.html" class="tag-btn">Physics</a>
                    <h3><a href="courses-details.html">Visual effects for games in unity beginner to
                            intermediate</a></h3>
                    <ul class="course-list">
                        <li><i class="ri-time-fill"></i> 02 hr 00 min</li>
                        <li><i class="ri-vidicon-fill"></i> 17 lectures</li>
                    </ul>
                    <div class="bottom-content">
                        <div class="rating2">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            5 (10+ rating)
                        </div>
                        <div class="bottom-price">$100</div>
                    </div>
                </div>
            </div>
            <div class="courses-item">
                <a href="courses-details.html">
                    <img src="assets/images/courses/courses-img2.jpg" alt="Courses" />
                </a>
                <div class="content">
                    <div class="course-instructors">
                        <img src="assets/images/courses/instructors4.jpg" alt="instructors" />
                    </div>
                    <a href="courses.html" class="tag-btn">Accounting</a>
                    <h3><a href="courses-details.html">Basic knowledge about hibernal bharat in history</a></h3>
                    <ul class="course-list">
                        <li><i class="ri-time-fill"></i> 03 hr 30 min</li>
                        <li><i class="ri-vidicon-fill"></i> 37 lectures</li>
                    </ul>
                    <div class="bottom-content">
                        <div class="rating2">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            5 (30+ rating)
                        </div>
                        <div class="bottom-price">$160</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimonials-area section-bg ptb-100">
    <div class="container">
        <div class="section-title mb-45 text-center">
            <h2>What people say <b>about us</b></h2>
        </div>
        <div class="testimonials-slider owl-carousel owl-theme">
            <div class="testimonials-card">
                <div class="content">
                    <img src="assets/images/testimonials/testimonials-img1.jpg" alt="testimonials" />
                    <h3>Nikolas albart</h3>
                    <span>Student</span>
                </div>
                <div class="quote"> <i class="flaticon-quote"></i></div>
                <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel,
                    porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus.”</p>
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
            </div>
            <div class="testimonials-card">
                <div class="content">
                    <img src="assets/images/testimonials/testimonials-img2.jpg" alt="testimonials" />
                    <h3>Terry ambady</h3>
                    <span>Content strategist</span>
                </div>
                <div class="quote"> <i class="flaticon-quote"></i></div>
                <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel,
                    porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus.”</p>
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
            </div>
            <div class="testimonials-card">
                <div class="content">
                    <img src="assets/images/testimonials/testimonials-img3.jpg" alt="testimonials" />
                    <h3>Cory zamora</h3>
                    <span>Photographer</span>
                </div>
                <div class="quote"> <i class="flaticon-quote"></i></div>
                <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel,
                    porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus.”</p>
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
            </div>
            <div class="testimonials-card">
                <div class="content">
                    <img src="assets/images/testimonials/testimonials-img3.jpg" alt="testimonials" />
                    <h3>Jonquil von</h3>
                    <span>Photographer</span>
                </div>
                <div class="quote"> <i class="flaticon-quote"></i></div>
                <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel,
                    porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus.”</p>
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="instructors-area instructors-area-rs pt-100 pb-70">
    <div class="container">
        <div class="section-title mb-45">
            <h2>Meet our top <b>instructor</b> </h2>
        </div>
        <div class="instructors-slider owl-carousel owl-theme">
            <div class="instructors-card">
                <a href="instructors-details.html">
                    <img src="assets/images/instructors/instructors-img1.jpg" alt="Team Images">
                </a>
                <div class="content">
                    <ul class="instructors-social">
                        <li class="share-btn"><i class="ri-add-line"></i></li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-box-line"></i>
                            </a>
                        </li>
                    </ul>
                    <h3><a href="instructors-details.html">Sally welch</a></h3>
                    <span>Web designer</span>
                </div>
            </div>
            <div class="instructors-card">
                <a href="instructors-details.html">
                    <img src="assets/images/instructors/instructors-img2.jpg" alt="Team Images">
                </a>
                <div class="content">
                    <ul class="instructors-social">
                        <li class="share-btn"><i class="ri-add-line"></i></li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-box-line"></i>
                            </a>
                        </li>
                    </ul>
                    <h3><a href="instructors-details.html">Jesse joslin</a></h3>
                    <span>Content strategist</span>
                </div>
            </div>
            <div class="instructors-card">
                <a href="instructors-details.html">
                    <img src="assets/images/instructors/instructors-img3.jpg" alt="Team Images">
                </a>
                <div class="content">
                    <ul class="instructors-social">
                        <li class="share-btn"><i class="ri-add-line"></i></li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-box-line"></i>
                            </a>
                        </li>
                    </ul>
                    <h3><a href="instructors-details.html">Lance altman</a></h3>
                    <span>Photographer</span>
                </div>
            </div>
            <div class="instructors-card">
                <a href="instructors-details.html">
                    <img src="assets/images/instructors/instructors-img4.jpg" alt="Team Images">
                </a>
                <div class="content">
                    <ul class="instructors-social">
                        <li class="share-btn"><i class="ri-add-line"></i></li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-box-line"></i>
                            </a>
                        </li>
                    </ul>
                    <h3><a href="instructors-details.html">Jonquil von</a></h3>
                    <span>Art director</span>
                </div>
            </div>
            <div class="instructors-card">
                <a href="instructors-details.html">
                    <img src="assets/images/instructors/instructors-img5.jpg" alt="Team Images">
                </a>
                <div class="content">
                    <ul class="instructors-social">
                        <li class="share-btn"><i class="ri-add-line"></i></li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-box-line"></i>
                            </a>
                        </li>
                    </ul>
                    <h3><a href="instructors-details.html">Oliva welch</a></h3>
                    <span>Web designer</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="brand-area">
    <div class="container">
        <div class="brand-slider owl-carousel owl-theme pb-100">
            <div class="brand-item">
                <img src="assets/images/brand-logo/1.png" class="brand-item-logo1" alt="Images">
                <img src="assets/images/brand-logo/brand-logo1.png" class="brand-item-logo2" alt="Images">
            </div>
            <div class="brand-item">
                <img src="assets/images/brand-logo/2.png" class="brand-item-logo1" alt="Images">
                <img src="assets/images/brand-logo/brand-logo2.png" class="brand-item-logo2" alt="Images">
            </div>
            <div class="brand-item">
                <img src="assets/images/brand-logo/3.png" class="brand-item-logo1" alt="Images">
                <img src="assets/images/brand-logo/brand-logo3.png" class="brand-item-logo2" alt="Images">
            </div>
            <div class="brand-item">
                <img src="assets/images/brand-logo/4.png" class="brand-item-logo1" alt="Images">
                <img src="assets/images/brand-logo/brand-logo4.png" class="brand-item-logo2" alt="Images">
            </div>
            <div class="brand-item">
                <img src="assets/images/brand-logo/5.png" class="brand-item-logo1" alt="Images">
                <img src="assets/images/brand-logo/brand-logo5.png" class="brand-item-logo2" alt="Images">
            </div>
            <div class="brand-item">
                <img src="assets/images/brand-logo/6.png" class="brand-item-logo1" alt="Images">
                <img src="assets/images/brand-logo/brand-logo6.png" class="brand-item-logo2" alt="Images">
            </div>
        </div>
    </div>
</div>


<div class="blog-area section-bg pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center mb-45">
            <h2>Latest from our <b>blogs</b></h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <a href="single-blog-1.html">
                        <img src="assets/images/blog/blog-img4.jpg" alt="Blog">
                    </a>
                    <div class="content">
                        <ul>
                            <li><i class="ri-calendar-todo-fill"></i> Jan 12,2022 </li>
                            <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">Education</a></li>
                        </ul>
                        <h3><a href="single-blog-1.html">All that is wrong with codding in the field of
                                apprentices</a></h3>
                        <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                        <a href="single-blog-1.html" class="read-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <a href="single-blog-1.html">
                        <img src="assets/images/blog/blog-img2.jpg" alt="Blog">
                    </a>
                    <div class="content">
                        <ul>
                            <li><i class="ri-calendar-todo-fill"></i> Jan 13,2022 </li>
                            <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">learning</a></li>
                        </ul>
                        <h3><a href="single-blog-1.html">How to use technology to adapt your talent to the
                                world</a></h3>
                        <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                        <a href="single-blog-1.html" class="read-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <a href="single-blog-1.html">
                        <img src="assets/images/blog/blog-img5.jpg" alt="Blog">
                    </a>
                    <div class="content">
                        <ul>
                            <li><i class="ri-calendar-todo-fill"></i> Jan 15,2022 </li>
                            <li><i class="ri-price-tag-3-fill"></i> <a href="tags.html">Courses</a></li>
                        </ul>
                        <h3><a href="single-blog-1.html">Here are the things to look for when selecting an online
                                course</a></h3>
                        <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                        <a href="single-blog-1.html" class="read-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection