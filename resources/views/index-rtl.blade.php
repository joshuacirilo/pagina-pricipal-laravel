<?php $page = 'index-rtl'; ?>
@extends('layout.mainlayout')
@section('content')

	<!-- banner -->
    <section class="banner-section">
        <img class="img-fluid d-none d-lg-flex banner-bg1" src="./build/img/bg/bg-15.png" alt="img">
        <img class="img-fluid d-none d-lg-flex banner-bg2" src="./build/img/bg/bg-16.png" alt="img">
        <img class="img-fluid d-none d-lg-flex banner-bg3" src="./build/img/bg/bg-17.png" alt="img">
        <img class="img-fluid d-none d-lg-flex banner-bg4" src="./build/img/bg/bg-18.png" alt="img">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-7">
                  <div class="banner-content pe-xxl-5">
                    <span class="hero-title">The Leader in Online Learning</span>
                    <h1 class="mb-4 text-white">Find the Best <span>Courses</span> from the Best <span>Mentors</span> Around the World</h1>
                    <p class="fs-lg text-center text-md-start pb-2 pb-md-3 mb-4">Our specialized online courses are designed to bring the classroom experience to you, no matter where you are.</p>
                    
                    <form class="banner-search" action="{{url('course-list')}}">
                        <div class="dropdown">
                            <a class="hero-dropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            Select Category <i class="isax isax-arrow-down5 fs-12"></i>
                            </a>                                      
                            <ul class="dropdown-menu p-1">
                                <li><a class="dropdown-item" href="#">Design</a></li>
                                <li><a class="dropdown-item" href="#">Programming</a></li>
                                <li><a class="dropdown-item" href="#">Marketing</a></li>
                            </ul>
                        </div>
                        <input type="text" name="search" class="border-0 form-control p-0" placeholder="Search for Courses, Instructors">
                        <button type="submit" class="btn btn-secondary ms-auto"><i class="isax isax-arrow-right-1"></i></button>
                    </form>
                    <div class="d-flex align-items-center gap-4 justify-content-lg-between justify-content-center flex-wrap">
                        <div class="counter-item">
                            <div class="counter-icon flex-shrink-0">
                                <img src="{{URL::asset('build/img/icons/icon-32.svg')}}" alt="img">
                           </div>
                           <div class="count-content">
                                <h5 class="text-purple"><span class="count-digit">10</span>K</h5>
                                <p>Online Courses</p>
                            </div>    
                        </div> 
                        <div class="counter-item">
                            <div class="counter-icon flex-shrink-0">
                                <img src="{{URL::asset('build/img/icons/icon-33.svg')}}" alt="img">
                           </div>
                           <div class="count-content">
                                <h5 class="text-skyblue"><span class="count-digit">6</span>K</h5>
                                <p>Certified Courses</p>
                            </div>    
                        </div> 
                        <div class="counter-item">
                            <div class="counter-icon flex-shrink-0">
                                <img src="{{URL::asset('build/img/icons/icon-34.svg')}}" alt="img">
                           </div>
                           <div class="count-content">
                                <h5 class="text-success"><span class="count-digit">2</span>K</h5>
                                <p>Experienced Tutors</p>
                            </div>    
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="banner-image">
                        <div class="swiper swiper-slider-banner">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="course-item-two course-item mb-0">
                                        <div class="course-img">
                                            <img src="{{URL::asset('build/img/course/course-22.jpg')}}" alt="img" class="img-fluid">
                                            <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                <a href="javascript:void(0);" class="fav-icon">
                                                    <i class="isax isax-heart"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="brand-icon ms-auto">
                                                    <img src="{{URL::asset('build/img/icons/course-01.svg')}}" alt="img" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="course-content">
                                            <div class="d-flex justify-content-between mb-2">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="avatar avatar-sm">
                                                        <img src="{{URL::asset('build/img/user/user-50.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                                    </a>
                                                    <div class="ms-2">
                                                        <a href="javascript:void(0);" class="link-default fs-14">David Benitz</a>
                                                    </div>
                                                </div>
                                                <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium">
                                                    Productivity
                                                </span>
                                            </div>
                                            <h6 class="mb-2"><a href="{{url('course-details')}}">The Complete Business and Management Course</a></h6>
                                            <p class="d-flex align-items-center mb-3"><i class="ti ti-star-filled text-warning me-2"></i>5.0 (210 Reviews)</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="text-secondary fs-16 fw-semi-bold mb-0">$168</h6>
                                                 <a href="{{url('cart')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Add to Cart<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="course-item course-item-two mb-0">
                                        <div class="course-img">
                                            <img src="{{URL::asset('build/img/course/course-25.jpg')}}" alt="img" class="img-fluid">
                                            <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                <a href="javascript:void(0);" class="fav-icon">
                                                    <i class="isax isax-heart"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="brand-icon ms-auto">
                                                    <img src="{{URL::asset('build/img/featured-courses/Clip-path-group.svg')}}" alt="img" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content-course">                                           
                                            <div class="d-flex justify-content-between mb-2">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="avatar avatar-sm">
                                                        <img src="{{URL::asset('build/img/user/user-20.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                                    </a>
                                                    <div class="ms-2">
                                                        <a href="javascript:void(0);" class="link-default fs-14">Edith Dorsey</a>
                                                    </div>
                                                </div>
                                                <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium">
                                                    Lifestyles
                                                </span>
                                            </div>
                                            <h6 class="mb-2"><a href="{{url('course-details')}}">Build Creative Arts & media Course Completed</a></h6>
                                            <p class="d-flex align-items-center mb-3"><i class="ti ti-star-filled text-warning me-2"></i>4.9 (178 Reviews)</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="text-secondary fs-16 fw-semi-bold mb-0">$190</h6>
                                                 <a href="{{url('cart')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Add to Cart<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>										
                                </div>
                                <div class="swiper-slide">
                                    <div class="course-item course-item-two mb-0">
                                        <div class="course-img">
                                            <img src="{{URL::asset('build/img/course/course-24.jpg')}}" alt="img" class="img-fluid">
                                            <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                <a href="javascript:void(0);" class="fav-icon">
                                                    <i class="isax isax-heart"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="brand-icon ms-auto">
                                                    <img src="{{URL::asset('build/img/featured-courses/react.svg')}}" alt="img" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content-course">                                                
                                            <div class="d-flex justify-content-between mb-2">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="avatar avatar-sm">
                                                        <img src="{{URL::asset('build/img/user/user-23.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                                    </a>
                                                    <div class="ms-2">
                                                        <a href="javascript:void(0);" class="link-default fs-14">Calvin Johnsen</a>
                                                    </div>
                                                </div>
                                                <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium">
                                                    Development
                                                </span>
                                            </div>
                                            <h6 class="mb-2"><a href="{{url('course-details')}}">Learn & Create ReactJS Tech Fundamentals Apps</a></h6>
                                            <p class="d-flex align-items-center mb-3"><i class="ti ti-star-filled text-warning me-2"></i>5.0 (154 Reviews)</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="text-secondary fs-16 fw-semi-bold mb-0">$147</h6>
                                                 <a href="{{url('cart')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Add to Cart<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>										
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner -->
    
    <!-- benefits -->
    <section class="benefit-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Our Benefits</span>
                <h2>Master the Skills to Drive your Career</h2>
                <p>The right course, guided by an expert mentor, can provide invaluable insights, practical skills.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <div class="position-absolute top-0 end-0 mt-n3 me-n4">
                                <img src="./build/img/shapes/bg-1.png" alt="img">
                            </div>
                            <div class="p-4 rounded-pill bg-primary-transparent d-inline-flex">
                                <i class="isax isax-book-1 fs-24"></i>
                            </div>
                            <h5 class="mt-3 mb-1">Flexible Learning</h5>
                            <p>We believe that high-quality education should be accessible to everyone. Our pricing form in models are designed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <div class="position-absolute top-0 end-0 mt-n3 me-n4">
                                <img src="{{URL::asset('build/img/shapes/bg-2.png')}}" alt="img">
                            </div>
                            <div class="p-4 rounded-pill bg-secondary-transparent d-inline-flex">
                                <i class="isax isax-bookmark5 fs-24"></i>
                            </div>
                            <h5 class="mt-3 mb-1">Lifetime Access</h5>
                            <p>When you enroll in our courses, you’re not just signing up for a temporary learning to experience you’re making.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <div class="position-absolute top-0 end-0 mt-n3 me-n4">
                                <img src="{{URL::asset('build/img/shapes/bg-3.png')}}" alt="img">
                            </div>
                            <div class="p-4 rounded-pill bg-skyblue-transparent d-inline-flex">
                                <i class="isax isax-chart-26 fs-24"></i>
                            </div>
                            <h5 class="mt-3 mb-1">Expert Instruction</h5>
                            <p>Our instructors are seasoned professionals with years of experience in their respective fields & Experts advice</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefits -->

    <!-- institutions -->
    <section class="client-section">
        <div class="container">
          <h6 class="fw-medium text-center mb-4">Trusted by <span class="text-decoration-underline text-secondary">20+</span> Institutions Around the World</h6>
          <div class="institutions-slider-rtl lazy slider">
             <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/01.svg" alt="img">
             </div>
             <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/02.svg" alt="img">
             </div>
             <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/03.svg" alt="img">
             </div>
             <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/04.svg" alt="img">
             </div>
             <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/05.svg" alt="img">
             </div>
             <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/06.svg" alt="img">
             </div>
             <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/07.svg" alt="img">
             </div>
             <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/02.svg" alt="img">
             </div>
             <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/03.svg" alt="img">
             </div>
             <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/04.svg" alt="img">
             </div>
             <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/05.svg" alt="img">
             </div>
             <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/06.svg" alt="img">
             </div>
          </div>
        </div>
    </section>
    <!-- institutions -->

    <!-- top courses -->
    <section class="top-courses-sec">
        <img class="top-courses-bg" src="./build/img/bg/bg-20.png" alt="img">
        <div class="container">
            <div class="section-header text-center">
                <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Our Categories</span>
                <h2>Top Courses & Categories</h2>
                <p>The right course, guided by an expert mentor, can provide invaluable insights, practical skills</p>
            </div>
            <div class="top-courses-slider-rtl lazy">
                <div>
                    <div class="categories-item categories-item-three mb-0">
                        <img class="mx-auto" src="{{URL::asset('build/img/category/icons/icon-6.svg')}}" alt="img">
                        <h6 class="title"><a href="{{url('course-category')}}">Frontend  Developer</a></h6>
                    </div>
                </div>
                <div>
                    <div class="categories-item categories-item-three mb-0">
                        <img class="mx-auto" src="{{URL::asset('build/img/category/icons/icon-7.svg')}}" alt="img">
                        <h6 class="title"><a href="{{url('course-category')}}">Jira Management</a></h6>
                    </div>
                </div>
                <div>
                    <div class="categories-item categories-item-three mb-0">
                        <img class="mx-auto" src="{{URL::asset('build/img/category/icons/icon-8.svg')}}" alt="img">
                        <h6 class="title"><a href="{{url('course-category')}}">Figma Developer</a></h6>
                    </div>
                </div>
                <div>
                    <div class="categories-item categories-item-three mb-0">
                        <img class="mx-auto" src="{{URL::asset('build/img/category/icons/icon-9.svg')}}" alt="img">
                        <h6 class="title"><a href="{{url('course-category')}}">Framer Developer</a></h6>
                    </div>
                </div>
                <div>
                    <div class="categories-item categories-item-three mb-0">
                        <img class="mx-auto" src="{{URL::asset('build/img/category/icons/icon-10.svg')}}" alt="img">
                        <h6 class="title"><a href="{{url('course-category')}}">Vue js Developer</a></h6>
                    </div>
                </div>
                <div>
                    <div class="categories-item categories-item-three mb-0">
                        <img class="mx-auto" src="{{URL::asset('build/img/category/icons/icon-11.svg')}}" alt="img">
                        <h6 class="title"><a href="{{url('course-category')}}">Shopify Developer</a></h6>
                    </div>
                </div>
                <div>
                    <div class="categories-item categories-item-three mb-0">
                        <img class="mx-auto" src="{{URL::asset('build/img/category/icons/icon-10.svg')}}" alt="img">
                        <h6 class="title"><a href="{{url('course-category')}}">Vue js Developer</a></h6>
                    </div>
                </div>
                <div>
                    <div class="categories-item categories-item-three mb-0">
                        <img class="mx-auto" src="{{URL::asset('build/img/category/icons/icon-11.svg')}}" alt="img">
                        <h6 class="title"><a href="{{url('course-category')}}">Shopify Developer</a></h6>
                    </div>
                </div>
            </div>
            <a href="{{url('course-category')}}" class="btn btn-primary btn-md">View All Categories</a>
        </div>
    </section>
     <!-- /top courses -->
      
     <!-- trust -->
    <section class="trust-sec">
        <div class="container">
            <div class="video-showcase">
                <img src="{{URL::asset('build/img/feature/feature-1.jpg')}}" class="img-fluid w-100 rounded-2" alt="banner">
                <div class="video-play">
                    <a href="https://www.youtube.com/embed/1trvO6dqQUI" data-fancybox=""><i class="isax isax-play5"></i></a>
                </div>
            </div>
             <div class="trust-content">
                <img src="./build/img/bg/bg-19.png" alt="img" class="w-100 trust-bg">
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <h4>Trusted by the 15,000+ happy students and online users since 2000</h4>
                        <div class="d-flex align-items-center flex-wrap mt-5 gap-2">
                            <a href="{{url('login')}}" class="btn btn-secondary">Enroll as Student</a>
                            <a href="{{url('become-an-instructor')}}" class="btn btn-dark">Apply as Tutor</a>
                        </div>
                    </div>
                    <div class="col-md-7">
                       <div class="row">
                            <div class="col-md-6">
                                <h4 class="text-white mb-2">9.8/10</h4>
                                <h5 class="text-white mb-2">Course Approval Score</h5>
                                <p class="text-white mb-5">Achieving a complete course approval score is a significant.</p>
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-white mb-2">13k</h4>
                                <h5 class="text-white mb-2">Satisfied Students Worldwide</h5>
                                <p class="text-white mb-5">Satisfied students worldwide share a common thread of happiness.</p>
                            </div>
                       </div>
                       <div class="d-flex align-items-center bg-white user-goal p-2">
                          <div class="avatar avatar-lg flex-shrink-0">
                            <img class="rounded-pill" src="./build/img/user/user-28.jpg" alt="img">
                          </div>
                          <p class="text-gray-9 mb-0">“All courses are incredibly help people to achieve their goals”</p>
                       </div>
                    </div>
                </div>
             </div>
        </div>
      </section>
      <!-- /trust -->

      <!-- featured course -->
       <section class="featured-courses-section">
            <div class="container">
                <div class="section-header text-center">
                    <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Featured Courses</span>
                    <h2>What’s New in DreamsLMS</h2>
                    <p>Discover our featured courses, specially curated to help you gain in-demand skills</p>
                </div>
                <div class="feature-course-slider-2-rtl">
                    <div>
                        <div class="course-item">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img src="{{URL::asset('build/img/course/course-36.jpg')}}" alt="img" class="img-fluid">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <span class="price-badge ms-auto">$500</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="badge badge-md badge-soft-info rounded-pill">UI/UX</span>
                                <a href="javascript:void(0);" class="fav-icon"><i class="isax isax-heart"></i></a>
                            </div>
                            <div class="pb-3 border-bottom mb-3">
                                <h5><a href="{{url('course-details')}}">Information About UI/UX Design Degree</a></h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="course-rating">
                                    <span class="course-user"><a href="javascript:void(0);"><img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="img" class="img-fluid"></a></span>
                                    <a href="javascript:void(0);">Brenda Slaton</a>
                                </div>
                                <div class="d-flex">
                                    <span class="d-flex align-items-center rating"><i class="fa-solid fa-star text-warning me-2"></i>5.0</span>
                                </div>
                            </div>
                            <a href="{{url('course-details')}}" class="btn buy-course-btn">Buy Course Now</a>
                        </div>
                    </div>
                    <div>
                        <div class="course-item">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img src="{{URL::asset('build/img/course/course-37.jpg')}}" alt="img" class="img-fluid">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <span class="price-badge ms-auto">$300</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="badge badge-soft-danger badge-md rounded-pill shadow-none">Productivity</span>
                                <a href="javascript:void(0);" class="fav-icon"><i class="isax isax-heart"></i></a>
                            </div>
                            <div class="pb-3 border-bottom mb-3">
                                <h5><a href="{{url('course-details')}}">Learn & Create ReactJS Tech Fundamentals Apps</a></h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="course-rating">
                                    <span class="course-user"><a href="javascript:void(0);"><img src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="img" class="img-fluid"></a></span>
                                    <a href="javascript:void(0);">David Benitez</a>
                                </div>
                                <div class="d-flex">
                                    <span class="d-flex align-items-center rating"><i class="fa-solid fa-star text-warning me-2"></i>5.0</span>
                                </div>
                            </div>
                            <a href="{{url('course-details')}}" class="btn buy-course-btn">Buy Course Now</a>
                        </div>
                    </div>
                    <div>
                        <div class="course-item">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img src="{{URL::asset('build/img/course/course-38.jpg')}}" alt="img" class="img-fluid">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <span class="price-badge ms-auto">$350</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="badge badge-soft-purple badge-md rounded-pill shadow-none">Management</span>
                                <a href="javascript:void(0);" class="fav-icon"><i class="isax isax-heart"></i></a>
                            </div>
                            <div class="pb-3 border-bottom mb-3">
                                <h5><a href="{{url('course-details')}}">The Complete Business and Management Course</a></h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="course-rating">
                                    <span class="course-user"><a href="javascript:void(0);"><img src="{{URL::asset('build/img/user/user-08.jpg')}}" alt="img" class="img-fluid"></a></span>
                                    <a href="javascript:void(0);">Calvin Johnsen</a>
                                </div>
                                <div class="d-flex">
                                    <span class="d-flex align-items-center rating"><i class="fa-solid fa-star text-warning me-2"></i>5.0</span>
                                </div>
                            </div>
                            <a href="{{url('course-details')}}" class="btn buy-course-btn">Buy Course Now</a>
                        </div>
                    </div>
                    <div>
                        <div class="course-item">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img src="{{URL::asset('build/img/course/course-39.jpg')}}" alt="img" class="img-fluid">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <span class="price-badge ms-auto">$500</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="badge badge-soft-success badge-md rounded-pill shadow-none">Art & Media</span>
                                <a href="javascript:void(0);" class="fav-icon"><i class="isax isax-heart5 text-danger"></i></a>
                            </div>
                            <div class="pb-3 border-bottom mb-3">
                                <h5><a href="{{url('course-details')}}">Build Creative Arts & media Course Completed</a></h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="course-rating">
                                    <span class="course-user"><a href="javascript:void(0);"><img src="{{URL::asset('build/img/user/user-09.jpg')}}" alt="img" class="img-fluid"></a></span>
                                    <a href="javascript:void(0);">David Benitez</a>
                                </div>
                                <div class="d-flex">
                                    <span class="d-flex align-items-center rating"><i class="fa-solid fa-star text-warning me-2"></i>5.0</span>
                                </div>
                            </div>
                            <a href="{{url('course-details')}}" class="btn buy-course-btn">Buy Course Now</a>
                        </div>
                    </div>
                    <div>
                        <div class="course-item">
                            <div class="course-img">
                                <a href="{{url('course-details-2')}}">
                                    <img src="{{URL::asset('build/img/course/course-37.jpg')}}" alt="img" class="img-fluid">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <span class="price-badge ms-auto">$300</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="badge badge-soft-danger badge-md rounded-pill shadow-none">Productivity</span>
                                <a href="javascript:void(0);" class="fav-icon"><i class="isax isax-heart"></i></a>
                            </div>
                            <div class="pb-3 border-bottom mb-3">
                                <h5><a href="{{url('course-details-2')}}">Learn & Create ReactJS Tech Fundamentals Apps</a></h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="course-rating">
                                    <span class="course-user"><a href="javascript:void(0);"><img src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="img" class="img-fluid"></a></span>
                                    <a href="javascript:void(0);">David Benitez</a>
                                </div>
                                <div class="d-flex">
                                    <span class="d-flex align-items-center rating"><i class="fa-solid fa-star text-warning me-2"></i>5.0</span>
                                </div>
                            </div>
                            <a href="{{url('course-details')}}" class="btn buy-course-btn">Buy Course Now</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="{{url('course-list')}}" class="btn btn-primary btn-md">View All Courses</a>
                </div>
            </div>
       </section>
      <!-- /featured course -->

      <!-- community-to-learn -->
       <section class="community-to-learn">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-header">
                            <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Advanced Learning</span>
                            <h2>Creating a community of learners.</h2>
                            <p>We're dedicated to transforming education by providing a diverse range of high-quality courses that cater to learners of all levels.</p>
                        </div>
                        <div class="community-item d-flex align-items-center">
                            <span class="community-icon-1">
                                <i class="isax isax-book-saved5"></i>
                            </span>
                            <div>
                                <h5 class="mb-2">Learn from anywhere</h5>
                                <p class="mb-0">Learning from anywhere has become a transform aspect of modern education, allowing individuals.</p>
                            </div>
                        </div>
                        <div class="community-item d-flex align-items-center">
                            <span class="community-icon-2">
                                <i class="isax isax-bookmark5"></i>
                            </span>
                            <div>
                                <h5 class="mb-2">Expert Mentors</h5>
                                <p class="mb-0">Learning from anywhere has become a transform aspect of modern education, allowing individuals.</p>
                            </div>
                        </div>
                        <div class="community-item d-flex align-items-center">
                            <span class="community-icon-3">
                                <i class="isax isax-chart-26"></i>
                            </span>
                            <div>
                                <h5 class="mb-2">Learn in demand skills</h5>
                                <p class="mb-0">In today's rapidly evolving job market, learning in demand skills is crucial for career advancement.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{url('login')}}" class="btn btn-secondary btn-md">Enroll as Student</a>
                            <a href="{{url('become-an-instructor')}}" class="btn btn-dark btn-md">Apply as Tutor</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="community-img d-none d-lg-flex">
                            <img src="{{URL::asset('build/img/shapes/shape-5.png')}}" alt="img" class="img-fluid community-img-01">
                            <img src="{{URL::asset('build/img/shapes/shape-6.png')}}" alt="img" class="img-fluid community-img-02">
                            <img src="{{URL::asset('build/img/feature/feature-2.jpg')}}" alt="img" class="img-fluid community-img-03"> 
                            <img src="{{URL::asset('build/img/feature/feature-3.jpg')}}" alt="img" class="img-fluid community-img-04"> 
                            <img src="{{URL::asset('build/img/shapes/shape-7.svg')}}" alt="img" class="img-fluid community-img-05"> 
                            <div class="community-count p-2">
                                <div class="enrolled-list">
                                    <div class="avatar-list-stacked mb-2">
                                        <span class="avatar avatar-rounded">
                                            <img class="border border-white" src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img class="border border-white" src="{{URL::asset('build/img/user/user-03.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img class="border border-white" src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img class="border border-white" src="{{URL::asset('build/img/user/user-08.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                    <p class="mb-0"><span class="text-secondary">35K+</span> Students Enrolled</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>
      <!-- /community-to-learn -->

      <!-- client -->
    <div class="cliets-section-one">
        <div class="brand-slide">
            <div>
                <img src="{{URL::asset('build/img/client/08.svg')}}" alt="img">
            </div>
            <div>
                <img src="{{URL::asset('build/img/client/09.svg')}}" alt="img">
            </div>
            <div>
                <img src="{{URL::asset('build/img/client/10.svg')}}" alt="img">
            </div>
            <div>
                <img src="{{URL::asset('build/img/client/11.svg')}}" alt="img">
            </div>
            <div>
                <img src="{{URL::asset('build/img/client/12.svg')}}" alt="img">
            </div>
            <div>
                <img src="{{URL::asset('build/img/client/13.svg')}}" alt="img">
            </div>
            <div>
                <img src="{{URL::asset('build/img/client/08.svg')}}" alt="img">
            </div>
            <div>
                <img src="{{URL::asset('build/img/client/09.svg')}}" alt="img">
            </div>
        </div>
    </div>
    <!-- /client -->

    <!-- how it works -->
    <div class="how-it-works-sec-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                   <div class="me-5" data-aos="fade-up">
                    <img src="{{URL::asset('build/img/feature/feature-27.jpg')}}" class="img-fluid rounded-5" alt="img">
                   </div>
                </div>
                <div class="col-lg-6">
                    <div class="how-it-works-content aos" data-aos="fade-up">
                    <div class="section-header">
                        <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">How it Works</span>
                        <h2 class="mb-1">Start your Learning Journey Today!</h2>
                        <p>Unlock Your Potential and Achieve Your Dreams with Our Comprehensive Learning Resources!</p>
                    </div>
                    <div class="d-flex align-items-center works-items">
                       <span class="count">01</span>
                       <div>
                        <h5 class="mb-1">Sign-Up or Register</h5>
                        <p>Once you're on the website's homepage, look for the Sign-Up, Register, or Create Account button.</p>
                       </div>
                    </div>
                    <div class="d-flex align-items-center works-items">
                        <span class="count">02</span>
                        <div>
                         <h5 class="mb-1">Complete Your Profile</h5>
                         <p>After verifying your email, you may be asked to complete additional profile information.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center works-items">
                        <span class="count">03</span>
                        <div>
                         <h5 class="mb-1">Choose Courses or Programs</h5>
                         <p>Depending on the website, after registration, you might be able to browse and choose courses or programs to enroll in.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center works-items mb-0 pb-0 border-0">
                        <span class="count">04</span>
                        <div>
                         <h5 class="mb-1">Access Your Account</h5>
                         <p>Should have access to the website’s features, such as enrolling in courses, materials, or tracking progress.</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- how it works -->

    <!-- featured instructor -->
    <div class="featured-instructor-sec">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="fw-medium text-light text-decoration-underline mb-2 d-inline-block">Featured Instructors</span>
                <h2 class="text-white">Top Class & Professional Instructors </h2>
                <p class="text-light">Empowering Change: Stories from Those Who Took the Leap</p>
            </div>
            <div class="featured-instructor-slider-rtl lazy">
                <div class="instructor-item instructor-item-three mb-0" data-aos="flip-left">
                    <div class="instructors-img ">
                        <a href="{{url('instructor-list')}}" tabindex="0">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-09.jpg')}}">
                        </a>
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <span class="verify">
                                <img src="{{URL::asset('build/img/icons/verify-icon.svg')}}" alt="img" class="img-fluid">
                            </span>
                            <a href="javascript:void(0);" class="favourite ms-auto">
                                <i class="isax isax-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="instructor-content">
                        <div>
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Joyce Pence</a>
                            </h3>
                            <span class="designation">Lead Designer</span>
                        </div>
                        <p class="rating">
                            <i class="fas fa-star me-1"></i>4.8
                        </p>
                    </div>
                </div>	
                <div class="instructor-item instructor-item-three mb-0" data-aos="flip-left">
                    <div class="instructors-img">
                        <a href="{{url('instructor-list')}}" tabindex="0">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-10.jpg')}}">
                        </a>
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <span class="verify">
                                <img src="{{URL::asset('build/img/icons/verify-icon.svg')}}" alt="img" class="img-fluid">
                            </span>
                            <a href="javascript:void(0);" class="favourite ms-auto">
                                <i class="isax isax-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="instructor-content">
                        <div>
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Edith Dorsey</a>
                            </h3>
                            <span class="designation">Accountant</span>
                        </div>
                        <p class="rating">
                            <i class="fas fa-star me-1"></i>5.0
                        </p>
                    </div>
                </div>						
                <div class="instructor-item instructor-item-three mb-0" data-aos="flip-left">
                    <div class="instructors-img ">
                        <a href="{{url('instructor-list')}}" tabindex="0">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-11.jpg')}}">
                        </a>
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <span class="verify">
                                <img src="{{URL::asset('build/img/icons/verify-icon.svg')}}" alt="img" class="img-fluid">
                            </span>
                            <a href="javascript:void(0);" class="favourite ms-auto">
                                <i class="isax isax-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="instructor-content">
                        <div>
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Ruben Holmes</a>
                            </h3>
                            <span class="designation">Architect</span>
                        </div>
                        <p class="rating">
                            <i class="fas fa-star me-1"></i>4.8
                        </p>
                    </div>
                </div>							
                <div class="instructor-item instructor-item-three mb-0" data-aos="flip-left">
                    <div class="instructors-img">
                        <a href="{{url('instructor-list')}}" tabindex="0">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-12.jpg')}}">
                        </a>
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <span class="verify">
                                <img src="{{URL::asset('build/img/icons/verify-icon.svg')}}" alt="img" class="img-fluid">
                            </span>
                            <a href="javascript:void(0);" class="favourite ms-auto">
                                <i class="isax isax-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="instructor-content">
                        <div>
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Carol Magner</a>
                            </h3>
                            <span class="designation">Lead Designer</span>
                        </div>
                        <p class="rating">
                            <i class="fas fa-star me-1"></i>4.5
                        </p>
                    </div>
                </div>	
                <div class="instructor-item instructor-item-three mb-0" data-aos="flip-left">
                    <div class="instructors-img">
                        <a href="{{url('instructor-list')}}" tabindex="0">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-10.jpg')}}">
                        </a>
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <span class="verify">
                                <img src="{{URL::asset('build/img/icons/verify-icon.svg')}}" alt="img" class="img-fluid">
                            </span>
                            <a href="javascript:void(0);" class="favourite ms-auto">
                                <i class="isax isax-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="instructor-content">
                        <div>
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Edith Dorsey</a>
                            </h3>
                            <span class="designation">Accountant</span>
                        </div>
                        <p class="rating">
                            <i class="fas fa-star me-1"></i>5.0
                        </p>
                    </div>
                </div>	
            </div>
        </div>
    </div>
    <!-- featured instructor -->

      <!-- testimonials -->
      <div class="testimonials-section testimonials-sec-one text-center">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Featured Instructors</span>
            <h2>Top Class & Professional Instructors</h2>
            <p>Words from Those Who’ve Experienced Real Growth</p>
        </div>
      <div class="testimonials-slider-rtl lazy mt-4">
        <div>
            <div class="testimonials-item rounded-3 bg-white" data-aos="flip-right">
                <div class="position-relative d-inline-flex">
                    <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                        <a href="{{url('student-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-41.jpg" alt="img"></a>
                    </div>
                    <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>
                </div>
                <h6 class="mb-1"><a href="{{url('student-details')}}">Brenda Slaton</a></h6>
                <p class="designation">Designer</p>
                <p class="mb-3 text-truncate line-clamb-2">This mentor helped me understand concepts that I had been struggling with for weeks.</p>
                <div>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
            </div>
       </div>
         <div>
        <div class="testimonials-item rounded-3 bg-white" data-aos="flip-right">
            <div class="position-relative d-inline-flex">
                <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                    <a href="{{url('student-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-42.jpg" alt="img"></a>
                </div>
                <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>
              </div>
            <h6 class="mb-1"><a href="{{url('student-details')}}">Adrian Dennis</a></h6>
            <p class="designation">Developer</p>
            <p class="mb-3 text-truncate line-clamb-2">I’ve learned so much from my mentor’s personal experience.</p>
          <div>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
          </div>
          </div>
        </div>
        <div>
          <div class="testimonials-item rounded-3 bg-white" data-aos="flip-right">
            <div class="position-relative d-inline-flex">
                <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                    <a href="{{url('student-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-43.jpg" alt="img"></a>
                </div>
                <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>
              </div>
            <h6 class="mb-1"><a href="{{url('student-details')}}">Adrian Coztanza</a></h6>
            <p class="designation">Architect</p>
            <p class="mb-3 text-truncate line-clamb-2">The advice was useful, but I wish my mentor had been more available for follow-up discussions.</p>
          <div>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
          </div>
          </div>  
        </div>  
           <div>
            <div class="testimonials-item rounded-3 bg-white">
              <div class="position-relative d-inline-flex">
                    <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                        <a href="{{url('student-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-43.jpg" alt="img"></a>
                    </div>
                    <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>
                </div>
              <h6 class="mb-1"><a href="{{url('student-details')}}">Adrian Coztanza</a></h6>
              <p class="designation">Architect</p>
              <p class="mb-3 text-truncate line-clamb-2">The advice was useful, but I wish my mentor had been more available for follow-up discussions.</p>
            <div>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
            </div>
            </div>  
          </div>  
      </div>
    </div>
    </div>
   <!-- testimonials -->

         <!-- faq -->
        <div class="faq-section faq-banner-bg">
            <img src="{{URL::asset('build/img/bg/bg-21.svg')}}" alt="img" class="d-lg-flex d-none faq-bg2">
            <img src="{{URL::asset('build/img/bg/bg-22.svg')}}" alt="img" class="d-lg-flex d-none faq-bg3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                    <div class="faq-img" data-aos="fade-up">
                      <img class="img-fluid rounded-5" src="{{URL::asset('build/img/feature/feature-4.jpg')}}" alt="img">
                      <span><i class="isax isax-message-question5"></i></span>
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="section-header" data-aos="fade-up">
                                <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Your Questions are Answered</span>
                                <h2 class="mb-1">Frequently Asked Questions</h2>
                                <p>Explore detailed answers to the most common questions about our platform.</p>
                            </div>
                            <div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
                                <div class="accordion-item" data-aos="fade-up">
                                    <h2 class="accordion-header" id="headingcustomicon1One">
                                        <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1One" aria-expanded="true" aria-controls="collapsecustomicon1One">
                                        How do I enroll in a course? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                                        </a>
                                    </h2>
                                    <div id="collapsecustomicon1One" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body pt-0">
                                            <p>Many websites offer a Certificate of Completion for paid courses. Free courses may or may not include a certificate, depending on the platform’s policies.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
                                    <h2 class="accordion-header" id="headingcustomicon1Two">
                                    <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                        How long do I have access to a course? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                                    </a>
                                    </h2>
                                    <div id="collapsecustomicon1Two" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Two" data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body pt-0">
                                            <p>Many websites offer a Certificate of Completion for paid courses. Free courses may or may not include a certificate, depending on the platform’s policies.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
                                    <h2 class="accordion-header" id="headingcustomicon1Three">
                                    <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                    What payment methods are accepted? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                                    </a>
                                    </h2>
                                    <div id="collapsecustomicon1Three" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Three" data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body pt-0">
                                            <p>Many websites offer a Certificate of Completion for paid courses. Free courses may or may not include a certificate, depending on the platform’s policies.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
                                    <h2 class="accordion-header" id="headingcustomicon1Four">
                                    <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Four" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                        Will I receive a certificate after completing a course? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                                    </a>
                                    </h2>
                                    <div id="collapsecustomicon1Four" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Four" data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body pt-0">
                                            <p>Many websites offer a Certificate of Completion for paid courses. Free courses may or may not include a certificate, depending on the platform’s policies.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
                                    <h2 class="accordion-header" id="headingcustomicon1Five">
                                    <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Five" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                    What is the purpose of this DreamLMS ? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                                    </a>
                                    </h2>
                                    <div id="collapsecustomicon1Five" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Five" data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body pt-0">
                                            <p>Many websites offer a Certificate of Completion for paid courses. Free courses may or may not include a certificate, depending on the platform’s policies.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
                                    <h2 class="accordion-header" id="headingcustomicon1Six">
                                    <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Six" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                        What can I do with my certificate? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                                    </a>
                                    </h2>
                                    <div id="collapsecustomicon1Six" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Six" data-bs-parent="#accordioncustomicon1Example">
                                     <div class="accordion-body pt-0">
                                        <p>Many websites offer a Certificate of Completion for paid courses. Free courses may or may not include a certificate, depending on the platform’s policies.</p>
                                    </div>
                                    </div>
                                </div>
                                                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- faq -->

    <!-- Latest Blog -->
    <section class="latest-blog-three latest-blog-five">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Articles & Updates</span>
                <h2>Our Recent Blog & Articles</h2>
                <p>Explore curated content to enlighten, entertain and engage global readers.</p>
            </div>
            <div class="latest-blog-main">
                <div class="row">
                    <div class="col-lg-4">								
                        <div class="event-blog-three blog-three-one" data-aos="fade-up">
                            <div class="blog-img-three">
                                <a href="{{url('blog-grid')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-35.jpg')}}">
                                </a>
                            </div>
                            <div class="latest-blog-content">
                                <div class="event-three-title">
                                    <div class="event-span-three d-flex align-items-center">
                                        <span class="category">Lifestyle</span>
                                        <div class="blog-date">
                                            <i class="fa-solid fa-calendar"></i><span>09 Aug 2025</span>
                                        </div>
                                    </div>
                                    <a href="{{url('blog-grid')}}">
                                        <h5>Why an LMS is Essential for Modern Education</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-user-top">
                                <a href="#"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="">David Benitez</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="event-blog-three blog-three-one" data-aos="fade-up">
                                    <div class="blog-img-three">
                                        <a href="{{url('blog-details')}}">
                                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-36.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three d-flex align-items-center">
                                                <span class="category">Productivity</span>
                                                <div class="blog-date">
                                                    <i class="fa-solid fa-calendar"></i> <span>09 Aug 2025</span>
                                                </div>
                                            </div>													
                                            <h5><a href="{{url('blog-grid')}}">The Impact of LMS on Academic Journey Education</a></h5>
                                        </div>
                                    </div>
                                    <div class="blog-user-top">
                                        <a href="#"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="">David Benitez</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event-blog-three blog-three-one" data-aos="fade-up">
                                    <div class="blog-img-three">
                                        <a href="{{url('blog-grid')}}">
                                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-38.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three d-flex align-items-center">
                                                <span class="category">Productivity</span>
                                                <div class="blog-date">
                                                    <i class="fa-solid fa-calendar"></i><span>09 Aug 2025</span>
                                                </div>
                                            </div>													
                                            <h5><a href="{{url('blog-grid')}}">Maximizing Academic Success with the Right LMS</a></h5>
                                        </div>
                                    </div>
                                    <div class="blog-user-top">
                                        <a href="#"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="">David Benitez</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event-blog-three blog-three-one" data-aos="fade-up">
                                    <div class="blog-img-three">
                                        <a href="{{url('blog-grid')}}">
                                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-37.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three d-flex align-items-center">
                                                <span class="category">UI /UX</span>
                                                <div class="blog-date">
                                                    <i class="fa-solid fa-calendar"></i><span>09 Aug 2025</span>
                                                </div>
                                            </div>													
                                            <h5><a href="{{url('blog-grid')}}">Promoting Health & Well being in Schools</a></h5>
                                        </div>
                                    </div>
                                    <div class="blog-user-top">
                                        <a href="#"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="">David Benitez</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event-blog-three blog-three-one" data-aos="fade-up">
                                    <div class="blog-img-three">
                                        <a href="{{url('blog-grid')}}">
                                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-39.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three d-flex align-items-center">
                                                <span class="category">Development</span>
                                                <div class="blog-date">
                                                    <i class="fa-solid fa-calendar"></i><span>09 Aug 2025</span>
                                                </div>
                                            </div>													
                                            <h5><a href="{{url('blog-grid')}}">How to Build and Run a Pilot Mentoring Program</a></h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-user-top">
                                        <a href="#"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="">David Benitez</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                </div>
            </div>
            <div class="text-center">
            <a class="btn btn-view-all" data-aos="fade-up" href="{{url('blog-grid')}}">View All Articles</a>
           </div>
        </div>
    </section>
    <!-- /Latest Blog -->			
	

@endsection