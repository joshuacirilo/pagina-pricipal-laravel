<?php $page = 'index-6'; ?>
@extends('layout.mainlayout')
@section('content')
   
    <!-- Leading Companies -->
    <section class="leading-section-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-down">
                    <div class="leading-five-content course-count">
                        <h3 class="mb-2">Trusted By <span class="counterUp">500</span>+</h3>
                        <p>Leading Universities And Companies</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6" data-aos="fade-down">
                    <div class="lead-group-five">
                        <div class="leading-slider-five">
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-28.svg')}}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-29.svg')}}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-30.svg')}}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-31.svg')}}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-32.svg')}}">
                                </div>
                            </div>	
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-30.svg')}}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lead-img">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-31.svg')}}">
                                </div>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Leading Companies -->

    <!-- Course Categories Five -->
    <section class="course-section-five">
        <div class="container">
            <div class="header-five-title text-center" data-aos="fade-down">						
                <h2>Course Categories</h2>
                <p>Explore our top categories to find the perfect courses for your learning journey</p>
            </div>
            <div class="home-five-course aos">

                <!-- Carousel Item -->
                <div class="categories-item categories-item-six" data-aos="fade-down">
                    <div class="categories-icon">
                        <div class="icon-bg">
                            <a href="{{url('course-category')}}">
                                <img src="{{URL::asset('build/img/icon/framework-01.svg')}}" alt="Img">
                            </a>
                        </div>
                    </div>
                    <h3 class="title"><a href="{{url('course-category')}}">Angular</a></h3>
                    <p>50 Instructors</p>
                    <a href="{{url('course-category')}}" class="view-icon"><i class="fas fa-chevron-right"></i></a>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="categories-item categories-item-six" data-aos="fade-down">
                    <div class="categories-icon">
                        <div class="icon-bg">
                            <a href="{{url('course-category')}}">
                                <img src="{{URL::asset('build/img/icon/framework-02.svg')}}" alt="Img">
                            </a>
                        </div>
                    </div>
                    <h3 class="title"><a href="{{url('course-category')}}">React JS</a></h3>
                    <p>50 Instructors</p>
                    <a href="{{url('course-category')}}" class="view-icon"><i class="fas fa-chevron-right"></i></a>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="categories-item categories-item-six" data-aos="fade-down">
                    <div class="categories-icon">
                        <div class="icon-bg">
                            <a href="{{url('course-category')}}">
                                <img src="{{URL::asset('build/img/icon/framework-03.svg')}}" alt="Img">
                            </a>
                        </div>
                    </div>
                    <h3 class="title"><a href="{{url('course-category')}}">Node JS</a></h3>
                    <p>30 Instructors</p>
                    <a href="{{url('course-category')}}" class="view-icon"><i class="fas fa-chevron-right"></i></a>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="categories-item categories-item-six" data-aos="fade-down">
                    <div class="categories-icon">
                        <div class="icon-bg">
                            <a href="{{url('course-category')}}">
                                <img src="{{URL::asset('build/img/icon/framework-04.svg')}}" alt="Img">
                            </a>
                        </div>
                    </div>
                    <h3 class="title"><a href="{{url('course-category')}}">Docker</a></h3>
                    <p>60 Instructors</p>
                    <a href="{{url('course-category')}}" class="view-icon"><i class="fas fa-chevron-right"></i></a>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="categories-item categories-item-six" data-aos="fade-down">
                    <div class="categories-icon">
                        <div class="icon-bg">
                            <a href="{{url('course-category')}}">
                                <img src="{{URL::asset('build/img/icon/framework-01.svg')}}" alt="Img">
                            </a>
                        </div>
                    </div>
                    <h3 class="title"><a href="{{url('course-category')}}">Angular</a></h3>
                    <p>40 Instructors</p>
                    <a href="{{url('course-category')}}" class="view-icon"><i class="fas fa-chevron-right"></i></a>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item  -->
                <div class="categories-item categories-item-six" data-aos="fade-down">
                    <div class="categories-icon">
                        <div class="icon-bg">
                            <a href="{{url('course-category')}}">
                                <img src="{{URL::asset('build/img/icon/framework-02.svg')}}" alt="Img">
                            </a>
                        </div>
                    </div>
                    <h3 class="title"><a href="{{url('course-category')}}">React JS</a></h3>
                    <p>50 Instructors</p>
                    <a href="{{url('course-category')}}" class="view-icon"><i class="fas fa-chevron-right"></i></a>
                </div>
                <!-- /Carousel Item  -->

            </div>
        </div>
    </section>
    <!-- /Course Categories Five-->

    <!-- Counter Five-->
    <section class="counter-section-five">
        <div class="container">
            <div class="row align-items-center text-center justify-content-between">
                <!-- col -->
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="fade-down">
                    <div class="count-five">
                        <div class="count-content-five course-count ms-0">
                            <h4><span class="counterUp">145</span></h4>
                            <p class="mb-0">Expert Tutors</p>
                        </div>
                    </div>
                </div>
                <!--/ col -->

                <!-- col -->
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="fade-down">
                    <div class="count-five">
                        <div class="count-content-five course-count ms-0">
                            <h4><span class="counterUp">2,3495</span></h4>
                            <p class="mb-0">Cetified Courses</p>
                        </div>
                    </div>
                </div>
                <!--/ col -->

                <!-- col -->
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="fade-down">
                    <div class="count-five">
                        <div class="count-content-five course-count ms-0">
                            <h4><span class="counterUp">20</span>+</h4>
                            <p class="mb-0">Online students</p>
                        </div>
                    </div>
                </div>
                <!--/ col -->

                <!-- col -->
                <div class="col-lg-3 col-md-3 col-sm-12" data-aos="fade-down">
                    <div class="count-five count-five-last count-five-0">
                        <div class="count-content-five course-count ms-0">
                            <h4><span class="counterUp">58,370</span></h4>
                            <p class="mb-0">Online Courses</p>
                        </div>
                    </div>
                </div>
                <!--/ col -->
            </div>
        </div>
    </section>
    <!-- /Counter Five-->

    <!-- Featured Courses Five-->
    <section class="featured-section-five">
        <div class="container">
            <div class="section-header section-header-six text-center" data-aos="fade-down">						
                <h2>Popular Courses</h2>
                <p>Discover our featured courses, specially curated to help you gain in-demand skills</p>
            </div>
            <div class="row">
                <div class="featured-courses-five-tab">
                    <div class="tab-content">
                        <div class="ux-design-five">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                                        <div class="course-img">
                                            <a href="{{url('course-details')}}">
                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-40.jpg')}}">
                                            </a>
                                            <div class="price">
                                                <h3>$200 <span>$990.00</span></h3>
                                            </div>
                                        </div>
                                        <div class="course-content">
                                            <div class="course-user">
                                                <div class="course-user-img">
                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-21.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="{{url('instructor-profile')}}">Nicole Brown</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="fav-icon"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <h3 class="title"><a href="{{url('course-details')}}">Information About UI/UX Design Degree</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="course-lesson d-flex align-items-center">
                                                    <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-time d-flex align-items-center">
                                                    <img src="{{URL::asset('build/img/icons/icon-4.svg')}}" alt="Img">
                                                    <p>9hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="rating m-0">							
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                                </div>
                                                <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center flex-shrink-0"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                                        <div class="course-img">
                                            <a href="{{url('course-details')}}">
                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-02.jpg')}}">
                                            </a>
                                            <div class="price">
                                                <h3>$156</h3>
                                            </div>
                                        </div>
                                        <div class="course-content">
                                            <div class="course-user">
                                                <div class="course-user-img">
                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-22.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="{{url('instructor-profile')}}">Jenis R.</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="fav-icon"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <h3 class="title"><a href="{{url('course-details')}}">Wordpress for Beginners - Master Wordpress Quickly</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="course-lesson d-flex align-items-center">
                                                    <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img">
                                                    <p>11+ Lesson</p>
                                                </div>
                                                <div class="course-time d-flex align-items-center">
                                                    <img src="{{URL::asset('build/img/icons/icon-4.svg')}}" alt="Img">
                                                    <p>6hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="rating m-0">							
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating"><span>4.3</span> (15)</span>
                                                </div>
                                                <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center flex-shrink-0"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                                        <div class="course-img">
                                            <a href="{{url('course-details')}}">
                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-03.jpg')}}">
                                            </a>
                                            <div class="price combo">
                                                <h3>FREE</h3>
                                            </div>
                                        </div>
                                        <div class="course-content">
                                            <div class="course-user">
                                                <div class="course-user-img">
                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-25.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="{{url('instructor-profile')}}">Jesse Stevens</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="fav-icon"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <h3 class="title"><a href="{{url('course-details')}}">Sketch from A to Z (2022): Become an app designer</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="course-lesson d-flex align-items-center">
                                                    <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img">
                                                    <p>16+ Lesson</p>
                                                </div>
                                                <div class="course-time d-flex align-items-center">
                                                    <img src="{{URL::asset('build/img/icons/icon-4.svg')}}" alt="Img">
                                                    <p>12hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="rating m-0">							
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating"><span>4.5</span> (15)</span>
                                                </div>
                                                <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center flex-shrink-0"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                                        <div class="course-img">
                                            <a href="{{url('course-details')}}">
                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-04.jpg')}}">
                                            </a>
                                            <div class="price">
                                                <h3>$145</h3>
                                            </div>
                                        </div>
                                        <div class="course-content">
                                            <div class="course-user">
                                                <div class="course-user-img">
                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-24.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="{{url('instructor-profile')}}">Nicole Brown</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <div class="course-share d-flex align-items-center justify-content-center">
                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="{{url('course-details')}}">Learn Angular Fundamentals From beginning to advance lavel</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="course-lesson d-flex align-items-center">
                                                    <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img">
                                                    <p>10+ Lesson</p>
                                                </div>
                                                <div class="course-time d-flex align-items-center">
                                                    <img src="{{URL::asset('build/img/icons/icon-4.svg')}}" alt="Img">
                                                    <p>8hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="rating m-0">							
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating"><span>4.2</span> (15)</span>
                                                </div>
                                                <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center flex-shrink-0"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                                        <div class="course-img">
                                            <a href="{{url('course-details')}}">
                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-13.jpg')}}">
                                            </a>
                                            <div class="price combo">
                                                <h3>Free</h3>
                                            </div>
                                        </div>
                                        <div class="course-content">
                                            <div class="course-user">
                                                <div class="course-user-img">
                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-23.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="{{url('instructor-profile')}}">John Smith</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="fav-icon"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <h3 class="title"><a href="{{url('course-details')}}">Build Responsive Real World Websites with HTML5 and CSS3</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="course-lesson d-flex align-items-center">
                                                    <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img">
                                                    <p>13+ Lesson</p>
                                                </div>
                                                <div class="course-time d-flex align-items-center">
                                                    <img src="{{URL::asset('build/img/icons/icon-4.svg')}}" alt="Img">
                                                    <p>10hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="rating m-0">							
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                                </div>
                                                <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center flex-shrink-0"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                                        <div class="course-img">
                                            <a href="{{url('course-details')}}">
                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-44.jpg')}}">
                                            </a>
                                            <div class="price combo">
                                                <h3>$200 <span>$990.00</span></h3>
                                            </div>
                                        </div>
                                        <div class="course-content">
                                            <div class="course-user">
                                                <div class="course-user-img">
                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-26.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="{{url('instructor-profile')}}">Stella Johnson</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="fav-icon"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <h3 class="title"><a href="{{url('course-details')}}">C# Developers Double Your Coding Speed with Visual Studio</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="course-lesson d-flex align-items-center">
                                                    <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img">
                                                    <p>7+ Lesson</p>
                                                </div>
                                                <div class="course-time d-flex align-items-center">
                                                    <img src="{{URL::asset('build/img/icons/icon-4.svg')}}" alt="Img">
                                                    <p>7hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="rating m-0">							
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating"><span>4.6</span> (15)</span>
                                                </div>
                                                <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center flex-shrink-0"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
            <a href="{{url('course-grid')}}" class="btn btn-xl btn-primary mt-2" data-aos="fade-up">See More Courses</a>
            </div>
        </div>
    </section>
    <!-- /Featured Courses Five-->

    <!-- Master the skills Five -->
    <section class="master-section-five">
        <div class="container">	
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12" data-aos="fade-down">
                    <div class="section-five-sub">
                        <div class="header-five-title mb-4">						
                            <h2>Master the skills to drive your career</h2>
                        </div>
                        <div class="career-five-content">
                            <p data-aos="fade-down">Get certified, master modern tech skills, and level up your career — whether you’re starting out or a seasoned pro. 95% of eLearning learners report our hands-on earning learners report our hands-on </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="{{url('course-list')}}" class="btn btn-primary me-2">Join Course</a>
                            <a href="{{url('course-list')}}" class="btn btn-secondary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6" data-aos="fade-down">
                            <div class="skill-five-item">
                                <div class="skill-five-icon bg-success">
                                    <img src="{{URL::asset('build/img/icon/skill-01.svg')}}" alt="Stay motivated">
                                </div>
                                <div class="skill-five-content">
                                    <h3>Stay motivated with engaging instructors</h3>
                                    <p>eLearning learners report our hands-on content directly helped their careers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6" data-aos="fade-down">
                            <div class="skill-five-item">
                                <div class="skill-five-icon bg-skyblue">
                                    <img src="{{URL::asset('build/img/icon/skill-02.svg')}}" alt="Stay motivated">
                                </div>
                                <div class="skill-five-content">
                                    <h3>Keep up with in the latest in cloud</h3>
                                    <p>eLearning learners report our hands-on content directly helped their careers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6" data-aos="fade-down">
                            <div class="skill-five-item">
                                <div class="skill-five-icon bg-danger">
                                    <img src="{{URL::asset('build/img/icon/skill-03.svg')}}" alt="Stay motivated">
                                </div>
                                <div class="skill-five-content">
                                    <h3>Get certified with 100+ certification courses</h3>
                                    <p>eLearning learners report our hands-on content directly helped their careers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6" data-aos="fade-down">
                            <div class="skill-five-item">
                                <div class="skill-five-icon bg-info">
                                    <img src="{{URL::asset('build/img/icon/skill-04.svg')}}" alt="Stay motivated">
                                </div>
                                <div class="skill-five-content">
                                    <h3>Build skills your way, from labs to courses</h3>
                                    <p>eLearning learners report our hands-on content directly helped their careers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Master the skills Five -->

    <!-- Experienced Course Five -->
    <section class="experienced-course-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-down">
                    <div class="experienced-five-group">
                        <div class="instructor-vector-left">
                            <img src="{{URL::asset('build/img/bg/instructor-vector-left.svg')}}" alt="Img">
                        </div>
                        <div class="developer-five-list">
                            <ul>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-03.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-04.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-05.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-08.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-09.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-10.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-11.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-12.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-13.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-14.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-15.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                                <li class="column-img">
                                    <div class="developer-profile-five">											
                                        <div class="developer-image">
                                            <img src="{{URL::asset('build/img/user/user-16.jpg')}}" alt="Course Instructor">
                                        </div>
                                        <div class="profile-five-ovelay">													
                                            <h5>Daziy Millar</h5>
                                            <p>PHP Expert</p>
                                        </div>
                                    </div>										
                                </li>
                            </ul>
                        </div>
                        <div class="instructor-vector-right">
                            <img src="{{URL::asset('build/img/bg/instructor-vector-right.svg')}}" alt="Img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-down">
                    <div class="experienced-five-sub">
                        <div class="header-five-title header-five-title-inner">						
                            <h2 class="ex-five-title">Experienced Course Instructor</h2>
                        </div>
                        <div class="career-five-content">
                            <p class="ex-five-content">An award-winning course management system (CMS) or program is typically recognized for its exceptional quality, innovation, and effectiveness in helping both instructors and students succeed. Here's a breakdown of what makes a course management program stand out, along with examples of course topics and instructors that could be part of such a system.</p>
                        </div>
                        <a href="{{url('instructor-list')}}" class="btn btn-secondary btn-md">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experienced Course Five -->

    <!-- Share your knowledge -->
    <section class="share-knowledge-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12" data-aos="fade-down">
                    <div class="section-five-sub">
                        <div class="header-five-title mb-0">						
                            <h2>Want to share your knowledge? Join us a Mentor</h2>
                        </div>
                        <div class="career-five-content">
                            <p>High-definition video is video of higher resolution and quality than standard-definition. </p>
                        </div>
                        <ul class="list-unstyled heading-color mb-4">
                            <li class="d-flex mb-3">
                                <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Access Your Class anywhere
                            </li>
                            <li class="d-flex mb-3">
                                <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Flexible Course Plan
                            </li>
                            <li class="d-flex mb-3 aos-init aos-animate">
                                <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Quality Assurance
                            </li>
                            <li class="d-flex mb-3 aos-init aos-animate">
                                <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Cost Effectiveness
                            </li>
                            <li class="d-flex mb-3 aos-init aos-animate">
                                <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>The Most World Class Instructors
                            </li>
                        </ul>
                        
                        <a href="{{url('course-list')}}" class="btn btn-primary">Start Teaching Today</a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12" data-aos="fade-down">
                    <div class="joing-count-five text-center">
                        <div class="joing-count-image">
                            <img src="{{URL::asset('build/img/feature/feature-7.png')}}" alt="Img">
                            <img src="./build/img/shapes/dot-2.svg" alt="img" class="joing-count-img1">
                            <img src="./build/img/shapes/half-circle.svg" alt="img" class="joing-count-img2">								
                        </div>
                        <div class="joing-count-five-one course-count">
                            <h3 class="joing-count-number"><span class="counterUp">5,5</span>K<span>+</span></h3>
                            <p class="joing-count-text">Courses</p>
                        </div>
                        <div class="joing-count-five-two course-count">
                            <h3 class="joing-count-number"><span class="counterUp">50</span>K</h3>
                            <p class="joing-count-text">Appreciations</p>
                        </div>
                        <div class="joing-count-five-three course-count">
                            <h3 class="joing-count-number"><span class="counterUp">100</span></h3>
                            <p class="joing-count-text">Countries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Share your knowledge -->

    <!-- Testimonials -->
    <section class="testimonial-section-five">
        <img src="./build/img/shapes/quote.png" class="d-none d-lg-flex testimonials-quote">
        <div class="container">
            <div class="header-five-title text-center" data-aos="fade-down">						
                <h2 class="text-light">Testimonials</h2>
                <p class="text-white">We are a very happy because we have a happy customer </p>
            </div>
            <div class="testimonial-slider-five">
                <div class="testimonial-five lazy slider">
                    <div class="testimonial-carousel">
                        <div class="testimonial-item-six">
                            <div class="testimonial-content-five">
                                <div class="testimonial-text">
                                    <h5 class="mb-3">Exactly what I was looking for. You will not regret it. It really saves me time and effort. Skill is what our business lacked."</h5>
                                    <p class="mb-3">Thank you very much for your help. This is exactly what I was looking for. You will not regret it. It really saves me time and effort. Skill is what our business lacked. Thank you very much for your help. This is exactly what I was look.</p>
                                </div>
                                <div class="testimonial-users-group d-flex align-items-center justify-content-between">													
                                    <div class="testimonial-users">
                                        <h5 class="mb-1">Hawkins</h5>
                                        <p>UI-UX Designer</p>
                                    </div>
                                    <div class="testimonial-ratings-five d-inline-flex align-items-center">
                                        <div class="rating">							
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-image">
                                <img src="{{URL::asset('build/img/testimonial/testimonials-1.png')}}" alt="Img">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-carousel">
                        <div class="testimonial-item-six">
                            <div class="testimonial-content-five">
                                <div class="testimonial-text">
                                    <p class="mb-3">"Thank you very much for your help. This is exactly what I was looking for. You will not regret it. It really saves me time and effort. Skill is what our business lacked. Thank you very much for your help. This is exactly what I was looking for. You will not regret it. It really saves me time and effort. Skill is what our business lacked."</p>
                                </div>
                                <div class="testimonial-users-group d-flex align-items-center justify-content-between">													
                                    <div class="testimonial-users">
                                        <h5 class="mb-1">Nikolas Brooten</h5>
                                        <p>Sales Manager</p>
                                    </div>
                                    <div class="testimonial-ratings-five d-inline-flex align-items-center">
                                        <div class="rating">							
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-image">
                                <img src="{{URL::asset('build/img/testimonial/testimonial-02.png')}}" alt="Img">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-carousel">
                        <div class="testimonial-item-six">
                            <div class="testimonial-content-five">
                                <div class="testimonial-text">
                                    <p class="mb-3">"Thank you very much for your help. This is exactly what I was looking for. You will not regret it. It really saves me time and effort. Skill is what our business lacked. Thank you very much for your help. This is exactly what I was looking for. You will not regret it. It really saves me time and effort. Skill is what our business lacked."</p>
                                </div>
                                <div class="testimonial-users-group d-flex align-items-center justify-content-between">													
                                    <div class="testimonial-users">
                                        <h5 class="mb-1">Nikolas Brooten</h5>
                                        <p>Sales Manager</p>
                                    </div>
                                    <div class="testimonial-ratings-five d-inline-flex align-items-center">
                                        <div class="rating">							
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-image">
                                <img src="{{URL::asset('build/img/testimonial/testimonial-03.png')}}" alt="Img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonials -->

    <!-- Latest Blogs -->
    <section class="blogs-section-five">
        <div class="container">
            <div class="section-header section-header-six text-center" data-aos="fade-down">						
                <h2>Latest Blogs</h2>
                <p>Follow the latest and most useful articles on that student's blog</p>
            </div>
            <div class="home-five-blog">
                <div class="row">
                <div class="col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="{{url('blog-details')}}"><img src="{{URL::asset('build/img/blog/blog-22.jpg')}}" alt="img" class="img-fluid"></a>
                        </div>
                        <div class="blog-content">                                   
                            <h5><a href="{{url('blog-details')}}">Mastering Programming with a Technical Mentor</a></h5>
                            <p>Learning to code can be overwhelming, but a mentor can make the journey smoother....</p>
                            <div class="blog-user d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2">
                                        <img src="{{URL::asset('build/img/user/user-42.jpg')}}" alt="img" class="img-fluid">
                                    </a>
                                    <p class="mb-0 d-flex align-items-center">by <a href="javascript:void(0);" class="link-info text-decoration-underline ms-1">Reni Sarow</a></p>
                                </div>
                                <p class="d-flex align-items-center"><i class="isax isax-calendar-1 text-gray-7 me-2"></i>09 Aug 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="{{url('blog-details')}}"><img src="{{URL::asset('build/img/blog/blog-23.jpg')}}" alt="img" class="img-fluid"></a>
                        </div>
                        <div class="blog-content">                                   
                            <h5><a href="{{url('blog-details')}}">How to Level Up Your Coding Skills with the Help of a Mentor</a></h5>
                            <p>Whether you're a beginner or an advanced coder, this blog will explore how....</p>
                            <div class="blog-user d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2">
                                        <img src="{{URL::asset('build/img/user/user-36.jpg')}}" alt="img" class="img-fluid">
                                    </a>
                                    <p class="mb-0 d-flex align-items-center">by <a href="javascript:void(0);" class="link-info text-decoration-underline ms-1">Chris Daniel</a></p>
                                </div>
                                <p class="d-flex align-items-center"><i class="isax isax-calendar-1 text-gray-7 me-2"></i>15 Jul 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="{{url('blog-details')}}"><img src="{{URL::asset('build/img/blog/blog-24.jpg')}}" alt="img" class="img-fluid"></a>
                        </div>
                        <div class="blog-content">                                   
                            <h5><a href="{{url('blog-details')}}">Navigating the Tech World: The Ultimate Guide</a></h5>
                            <p> The tech industry is vast and ever-changing, but a mentor can help you stay ahead.....</p>
                            <div class="blog-user d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2">
                                        <img src="{{URL::asset('build/img/user/user-53.jpg')}}" alt="img" class="img-fluid">
                                    </a>
                                    <p class="mb-0 d-flex align-items-center">by <a href="javascript:void(0);" class="link-info text-decoration-underline ms-1">Andrew</a></p>
                                </div>
                                <p class="d-flex align-items-center"><i class="isax isax-calendar-1 text-gray-7 me-2"></i>15 Jan 2025</p>
                            </div>
                        </div>
                    </div>
                </div>	
                </div>
                <div class="text-center">
                    <a href="{{url('blog-2-grid')}}" class="btn btn-xl btn-primary mt-3">See More Blogs</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blogs -->

@endsection
