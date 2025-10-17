<?php $page = 'index-4'; ?>
@extends('layout.mainlayout')
@section('content')
   
	<!-- Home Banner -->
    <section class="banner-section-four d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12" data-aos="fade-up">
                    <div class="home-slide-face">
                        <div class="banner-content">
                            <h6>The Leader in Online Learning</h6>
                            <h1>Engaging &  Accessible Online Courses For All</h1>
                            <p>Our specialized online courses are designed to bring the classroom experience to you, no matter where you are.</p>
                        </div>
                        <div class="banner-form">
                            <form class="form" name="store" id="store" method="post" action="{{url('course-list')}}">
                                <div class="form-inner1">
                                    <div class="input-group">
                                        <span class="drop-detail">
                                            <select class="form-control select" name="storeID">
                                                <option value="0">Select Category</option>
                                                <option value="1">Development</option>
                                                <option value="1">Marketing</option>
                                            </select>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search for Courses, Instructors">
                                        <button class="btn btn-secondary sub-btn1" type="submit"><i class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="trust-user">
                            <p>Trusted by over 15K Users worldwide since 2024</p>
                            <div class="rating">							
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>									
                                <span>4.9 / 200 Review</span>	
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-image">
                        <div class="row position-relative">
                            <div class="logo-cover">
                                <img src="{{URL::asset('build/img/icons/icon-30.svg')}}" alt="img" class="img-fluid img-05 d-none d-xl-flex aos" data-aos="zoom-in">
                            </div>
                            <div class="col-md-6 d-flex">
                                <div class="flex-fill">
                                    <img src="{{URL::asset('build/img/hero/hero-3.jpg')}}" alt="img" class="img-fluid h-100 flex-fill img-01 aos" data-aos="fade-bottm">
                                </div>
                            </div>
                            <div class="col-md-6 d-flex flex-column">
                                <div class="flex-fill mb-3">
                                    <img src="{{URL::asset('build/img/hero/hero-4.jpg')}}" alt="img" class="img-fluid img-02 aos" data-aos="fade-down">
                                </div>
                                <div class="flex-fill">
                                    <img src="{{URL::asset('build/img/hero/hero-5.jpg')}}" alt="img" class="img-fluid img-03 aos" data-aos="fade-up">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shapes -->
            <div class="shapes">
                <img class="shapes-one" src="{{URL::asset('build/img/bg/bg-10.png')}}" alt="Img">
                <img class="shapes-two" src="{{URL::asset('build/img/bg/bg-11.png')}}" alt="Img">
                <img class="shapes-middle" src="{{URL::asset('build/img/bg/bg-12.png')}}" alt="Img">
            </div>
            <!-- /Shapes -->
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- Vision Section -->
    <div class="vision-section">
        <div class="container">
            <div class="row row-gap-4">
                <div class="col-xl-3 col-lg-6 d-flex">
                    <div class="vision-item flex-fill">
                        <span class="vision-icon border">
                            <img src="{{URL::asset('build/img/icons/vision-icon-01.svg')}}" alt="img">
                        </span>
                        <p>Get certified with 100+ certification courses</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex">
                    <div class="vision-item flex-fill">
                        <span class="vision-icon border">
                            <img src="{{URL::asset('build/img/icons/vision-icon-02.svg')}}" alt="img">
                        </span>
                        <p>Keep up with the latest in cloud</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex">
                    <div class="vision-item flex-fill">
                        <span class="vision-icon border">
                            <img src="{{URL::asset('build/img/icons/vision-icon-03.svg')}}" alt="img">
                        </span>
                        <p>Build skills your way, from labs to courses</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 d-flex">
                    <div class="vision-item flex-fill">
                        <span class="vision-icon border">
                            <img src="{{URL::asset('build/img/icons/vision-icon-04.svg')}}" alt="img">
                        </span>
                        <p>Stay motivated with engaging instructors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Vision Section -->

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center row-gap-4">
                <div class="col-lg-7 wow fadeInLeft order-lg-1 order-xs-2 order-sm-2" data-aos="fade-up">
                    <div class="section-header">
                        <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">Learn with DreamLMS</span>
                        <h2 class="mb-0">Get Trained By Experts & Professionals around the World</h2>
                    </div>
                    <div class="about-content">
                        <p>Mentor is essential for personal and professional growth. This blog discusses the key benefits of professional mentoring, including skill development, networking, and career advancement, while also offering strategies for finding the right mentor.</p>
                        <div class="about-img">
                            <div class="row row-gap-4">
                                <div class="col-md-4">
                                    <img src="{{URL::asset('build/img/about/about-3.jpg')}}" class="img-fluid" alt="img">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{URL::asset('build/img/about/about-4.jpg')}}" class="img-fluid" alt="img">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{URL::asset('build/img/about/about-5.jpg')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                        </div>
                        <a href="{{url('course-list')}}" class="btn btn-secondary btn-xl">Learn more</a>
                    </div>							
                </div>

                <div class="col-lg-5 order-lg-2 order-xs-1 order-sm-1">
                    <div class="stylist-gallery">
                        <div class="row row-gap-4">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-down">
                                <div class="about-image border count-one d-flex align-items-center justify-content-center flex-fill project-details">
                                    <div class="about-count">
                                        <div class="course-img">
                                            <img src="{{URL::asset('build/img/icons/count-one.svg')}}" alt="Img">
                                        </div>
                                        <div class="count-content-three course-count ms-0">
                                            <h4><span class="counterUp">10</span>K</h4>
                                            <p class="mb-0">Online Courses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-down">
                                <div class="about-image border count-two d-flex align-items-center justify-content-center flex-fill project-details">
                                    <div class="about-count">
                                        <div class="course-img">
                                            <img src="{{URL::asset('build/img/icons/count-two.svg')}}" alt="Img">
                                        </div>
                                        <div class="count-content-three course-count ms-0">
                                            <h4><span class="counterUp">215</span>+</h4>
                                            <p class="mb-0">Expert Tutors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12"  data-aos="fade-bottm" data-wow-delay="1.5">
                                <div class="about-image border count-three d-flex align-items-center justify-content-center flex-fill project-details">
                                    <div class="about-count">
                                        <div class="course-img">
                                            <img src="{{URL::asset('build/img/icons/count-three.svg')}}" alt="Img">
                                        </div>
                                        <div class="count-content-three course-count ms-0">
                                            <h4><span class="counterUp">10</span>K</h4>
                                            <p class="mb-0">Ceritified Courses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-top" data-wow-delay="0.5">
                                <div class="about-image border count-four d-flex align-items-center justify-content-center flex-fill project-details">
                                    <div class="about-count">
                                        <div class="course-img">
                                            <img src="{{URL::asset('build/img/icons/count-four.svg')}}" alt="Img">
                                        </div>
                                        <div class="count-content-three course-count ms-0">
                                            <h4><span class="counterUp">10</span>K</h4>
                                            <p class="mb-0">Online Students</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>									
                        <div class="about-bg">
                            <img src="{{URL::asset('build/img/bg/bg-8.png')}}" alt="img" class="about-02">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-bg">
            <img src="{{URL::asset('build/img/bg/bg-7.png')}}" alt="img" class="about-01">						
            <img src="{{URL::asset('build/img/bg/bg-9.png')}}" alt="img" class="about-03">
        </div>
    </section>
    <!-- /About us -->

    <!-- Top Categories -->
    <section class="topcategory-sec">
        <div class="container">
            <div class="section-header text-center">
                <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">Favourite Course</span>
                <h2>Top Category</h2>
                <p>Discover our featured courses, specially curated to help you gain in-demand skills</p>
            </div>
            <div class="row">
                    
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                    <div class="categories-item categories-item-four flex-fill">
                        <div class="categories-icon">
                            <img src="{{URL::asset('build/img/icons/category-1.svg')}}" alt="Angular Development">
                        </div>
                        <h5 class="title"><a href="{{url('course-category')}}">Angular Development</a></h5>
                        <p>220 Instructors</p>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                    <div class="categories-item categories-item-four flex-fill">
                        <div class="categories-icon">
                            <img src="{{URL::asset('build/img/icons/category-9.svg')}}" alt="Python Development">
                        </div>
                        <h5 class="title"><a href="{{url('course-category')}}">Nodeman Development</a></h5>
                        <p>124 Instructors</p>
                    </div>
                </div>						
                
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                    <div class="categories-item categories-item-four flex-fill">
                        <div class="categories-icon">
                            <img src="{{URL::asset('build/img/icons/category-icon10.svg')}}" alt="Node Js Development">
                        </div>
                        <h5 class="title"><a href="{{url('course-category')}}">Node Js Development</a></h5>
                        <p>120 Instructors</p>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                    <div class="categories-item categories-item-four flex-fill">
                        <div class="categories-icon">
                            <img src="{{URL::asset('build/img/icons/category-11.svg')}}" alt="PHP Development">
                        </div>
                        <h5 class="title"><a href="{{url('course-category')}}">AWS Development</a></h5>
                        <p>285 Instructors</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                    <div class="categories-item categories-item-four flex-fill">
                        <div class="categories-icon">
                            <img src="{{URL::asset('build/img/icons/category-5.svg')}}" alt="Docker Development">
                        </div>
                        <h5 class="title"><a href="{{url('course-category')}}">Strapi CMS</a></h5>
                        <p>99 Instructors</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                    <div class="categories-item categories-item-four flex-fill">
                        <div class="categories-icon">
                            <img src="{{URL::asset('build/img/icons/category-6.svg')}}" alt="Swift Development">
                        </div>
                        <h5 class="title"><a href="{{url('course-category')}}">Swift Development</a></h5>
                        <p>64 Instructors</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                    <div class="categories-item categories-item-four flex-fill">
                        <div class="categories-icon">
                            <img src="{{URL::asset('build/img/icons/category-7.svg')}}" alt="Photography">
                        </div>
                        <h5 class="title"><a href="{{url('course-category')}}">VUE JS Development</a></h5>
                        <p>32 Instructors</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex">
                    <div class="categories-item categories-item-four flex-fill" data-aos="fade-up">
                        <div class="categories-icon">
                            <img src="{{URL::asset('build/img/icons/category-8.svg')}}" alt="Business">
                        </div>
                        <h5 class="title"><a href="{{url('course-category')}}">ApostropheCMS</a></h5>
                        <p>21 Instructors</p>
                    </div>
                </div>	
            </div>				
            <!-- View all Category -->
            <div class="more-details text-center" data-aos="fade-down">
                <a href="{{url('course-category-3')}}" class="btn btn-secondary btn-xl">View all Category</a>
            </div>
            <!-- /View all Category -->
        </div>
    </section>	
    <!-- /Top Categories -->	

    <!-- Feature Course -->		
    <section class="featured-courses-sec">				
        <div class="patter-bg">
            <img class="patter-one" src="{{URL::asset('build/img/bg/bg-13.png')}}" alt="Img">
        </div>
        <div class="container">
            <div class="section-header text-center">
                <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">What’s New</span>
                <h2>Featured Courses</h2>
                <p>Get certified, master modern tech skills, and level up your career</p>
            </div>
            <div class="featured-courses-two">
                <div class="row">

                    <!-- Featured Courses -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="course-item course-item-four mx-0">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-10.jpg')}}">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <a href="javascript:void(0);" class="course-name">PHP</a>
                                </div>
                            </div>
                            <div class="course-content">	
                                <div class="rating">							
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="ms-2">203 reviews</span>
                                </div>												
                                <h3 class="title"><a href="{{url('course-details')}}">The Complete Web Developer PHP framework Course 2.0</a></h3>
                                <div class="user-info">
                                    <p class="user-name"><a href="{{url('instructor-details')}}" class="link-info">Emily Williams</a></p>
                                    <p class="course-level">Expert</p>
                                </div>
                                <div class="course-info">
                                    <p class="course-time"><i class="fa-regular fa-clock me-2"></i>6hr 30min</p>
                                    <h5 class="price">$400 <span>$99.00</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Featured Courses -->

                    <!-- Featured Courses -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="course-item course-item-four mx-0">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-11.jpg')}}">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <a href="javascript:void(0);" class="course-name">Self Improvements</a>
                                </div>
                            </div>
                            <div class="course-content">	
                                <div class="rating">							
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="ms-2">5.0 (22 Reviews)</span>
                                </div>												
                                <h3 class="title"><a href="{{url('course-details')}}">Building Your Personal Brand: Tips for Career Success</a></h3>
                                <div class="user-info">
                                    <p class="user-name"><a href="{{url('instructor-details')}}"  class="link-info">Brook Salaine</a></p>
                                    <p class="course-level text-warning">Intermediate</p>
                                </div>
                                <div class="course-info">
                                    <p class="course-time"><i class="fa-regular fa-clock me-2"></i>1hr 20min
                                    </p>
                                    <h5 class="price">$125</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Featured Courses -->

                    <!-- Featured Courses -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="course-item course-item-four mx-0">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-12.jpg')}}">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <a href="javascript:void(0);" class="course-name">Finance</a>
                                </div>
                            </div>
                            <div class="course-content">	
                                <div class="rating">							
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="ms-2">4.0 (15 Reviwes) </span>
                                </div>												
                                <h3 class="title"><a href="{{url('course-details')}}">Strength Training 101: Building a Solid Foundation</a></h3>
                                <div class="user-info">
                                    <p class="user-name"><a href="{{url('instructor-details')}}"  class="link-info">Mark Richardson</a></p>
                                    <p class="course-level text-purple">Basic</p>
                                </div>
                                <div class="course-info">
                                    <p class="course-time"><i class="fa-regular fa-clock me-2"></i>2hr 30min
                                    </p>
                                    <h5 class="price">$3560</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Featured Courses -->

                    <!-- Featured Courses -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="course-item course-item-four mx-0">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-13.jpg')}}">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <a href="javascript:void(0);" class="course-name">SEO</a>
                                </div>
                            </div>
                            <div class="course-content">	
                                <div class="rating">							
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="ms-2">203 reviews</span>
                                </div>												
                                <h3 class="title"><a href="{{url('course-details')}}">Digital Marketing Strategies for Business Growth</a></h3>
                                <div class="user-info">
                                    <p class="user-name"><a href="{{url('instructor-details')}}"  class="link-info">Laura Bennett</a></p>
                                    <p class="course-level text-purple">Basic</p>
                                </div>
                                <div class="course-info">
                                    <p class="course-time"><i class="fa-regular fa-clock me-2"></i>6hr 30min</p>
                                    <h5 class="price">$350 <span>$699.00</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Featured Courses -->

                    <!-- Featured Courses -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="course-item course-item-four mx-0">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-14.jpg')}}">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <a href="javascript:void(0);" class="course-name">Development</a>
                                </div>
                            </div>
                            <div class="course-content">	
                                <div class="rating">							
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="ms-2">5.0 (05 Reviews)</span>
                                </div>												
                                <h3 class="title"><a href="{{url('course-details')}}">Web Development for Beginners: HTML, CSS, and JavaScript</a></h3>
                                <div class="user-info">
                                    <p class="user-name"><a href="{{url('instructor-details')}}"  class="link-info">David Morgan</a></p>
                                    <p class="course-level">Expert</p>
                                </div>
                                <div class="course-info">
                                    <p class="course-time"><i class="fa-regular fa-clock me-2"></i>1hr 15min
                                    </p>
                                    <h5 class="price">$150</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Featured Courses -->

                    <!-- Featured Courses -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                        <div class="course-item course-item-four mx-0">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-15.jpg')}}">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <a href="javascript:void(0);" class="course-name">PHP</a>
                                </div>
                            </div>
                            <div class="course-content">	
                                <div class="rating">							
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="ms-2">203 reviews</span>
                                </div>												
                                <h3 class="title"><a href="{{url('course-details')}}">Photography Basics: Understanding Composition and Lighting</a></h3>
                                <div class="user-info">
                                    <p class="user-name"><a href="{{url('instructor-details')}}"  class="link-info">Maria Lopez</a></p>
                                    <p class="course-level text-pink">Advanced</p>
                                </div>
                                <div class="course-info">
                                    <p class="course-time"><i class="fa-regular fa-clock me-2"></i>2hr 40min
                                    </p>
                                    <h5 class="price">$250</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Featured Courses -->				

                </div>
            </div>
            <!-- View all  Courses -->
            <div class="col-lg-12" data-aos="fade-up">
                <div class="more-details text-center">
                    <a href="{{url('course-list')}}" class="btn btn-secondary btn-xl">View all  Courses </a>
                </div>
            </div>
            <!-- /View all  Courses -->
        </div>
    </section>	
    <!-- /Feature Course -->

    <!-- Master Skills -->
    <section class="master-skills-sec pt-0">
        <div class="container">	
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="section-header text-center">
                        <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">What’s New</span>
                        <h2>Master the skills to drive your career</h2>
                        <p>Get certified, master modern tech skills, and level up your career — whether you’re starting out or a seasoned pro. 95% of eLearning learners report.</p>
                    </div>
                </div>
            </div>
            <!-- Course Info-->
            <div class="course-info-two">
                <div class="skills-item">
                    <div class="skills-wrap">
                        <div class="row row-gap-4 align-items-center">

                            <!-- Master skills Content -->
                            <div class="col-xl-5 col-lg-6 col-md-12 order-lg-0 order-md-0 order-0" data-aos="fade-up">
                                <h3>Award Winning Course Management</h3>
                                <p>An award-winning course management system (CMS) or program is typically recognized for its exceptional quality, innovation, and effectiveness in helping both instructors and students succeed.</p>
                                
                                <ul class="list-unstyled heading-color mb-4">
                                    <li class="d-flex mb-3">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Interactive Tools for Engagement
                                    </li>
                                    <li class="d-flex mb-3">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Customizable Course Creation
                                    </li>
                                    <li class="d-flex mb-3 aos-init aos-animate">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Robust Analytics and Reporting
                                    </li>
                                    <li class="d-flex mb-3 aos-init aos-animate">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Collaborative and Peer to Peer Learning
                                    </li>
                                    <li class="d-flex mb-3 aos-init aos-animate">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>The Most World Class Instructors
                                    </li>
                                </ul>
                            </div>
                            <!-- /Master skills Content -->
                            
                            <!-- Master skills Image -->
                            <div class="col-xl-7 col-lg-6 col-md-12 order-lg-1 order-md-1 order-1" data-aos="fade-up">
                                <div class="join-mentor-img">
                                    <img src="{{URL::asset('build/img/feature/feature-18.jpg')}}" alt="Img" class="img-fluid rounded-4">								
                                    <div class="joing-icon-award bg-warning">
                                        <img src="{{URL::asset('build/img/icons/award-01.svg')}}" alt="Img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Master skills Image -->
                        </div>

                    </div>
                </div>

                <div class="skills-item">
                    <div class="skills-wrap skill-center">

                        <div class="row  row-gap-4 align-items-center">
                            <!-- Master skills Content -->
                            <div class="col-xl-7 col-lg-7 col-md-12 order-lg-2 order-md-3 order-3" data-aos="fade-up">
                                <div class="join-mentor-img">
                                    <img src="{{URL::asset('build/img/feature/feature-19.jpg')}}" alt="Img" class="img-fluid rounded-4">								
                                    <div class="joing-icon-award bg-success">
                                        <img src="{{URL::asset('build/img/icons/award-02.svg')}}" alt="Img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Master skills Content -->
                            
                            <!-- Master skills Image -->
                            <div class="col-xl-5 col-lg-5 col-md-12 order-lg-3 order-md-2 order-2" data-aos="fade-up"> 
                                <h3>Learn anything from anywhere anytime</h3>
                                <p>In today’s fast-paced, digital world, the ability to learn anything, from anywhere, and at any time is more accessible than ever. Whether you are looking to expand your knowledge, gain new skills.</p>
                                <ul class="list-unstyled heading-color mb-4">
                                    <li class="d-flex mb-3">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Access to a World of Knowledge
                                    </li>
                                    <li class="d-flex mb-3">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Diverse Learning Formats
                                    </li>
                                    <li class="d-flex mb-3 aos-init">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Learn at Your Own Pace
                                    </li>
                                    <li class="d-flex mb-3 aos-init">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Affordable and Flexible Pricing
                                    </li>
                                    <li class="d-flex mb-3 aos-init">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>The Most World Class Instructors
                                    </li>
                                </ul>
                            </div>
                            <!-- /Master skills Image -->
                        </div>
                    </div>
                </div>

                <div class="skills-item">
                    <div class="skills-wrap">

                        <div class="row row-gap-4 align-items-center">

                            <!-- Master skills Content -->
                            <div class="col-xl-5 col-lg-7 col-md-12 order-lg-4 order-md-4 order-4" data-aos="fade-up"> 
                                <h3>Certification for solid development of your Career</h3>
                                <p>Certifications are a powerful way to enhance your skills, build credibility, and boost your career growth. In today’s competitive job market, a professional certification</p>
                                <ul class="list-unstyled heading-color mb-4">
                                    <li class="d-flex mb-3">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Demonstrates Expertise
                                    </li>
                                    <li class="d-flex mb-3">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Boosts Your Credibility
                                    </li>
                                    <li class="d-flex mb-3 aos-init">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Improves Job Security
                                    </li>
                                    <li class="d-flex mb-3 aos-init">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Facilitates Career Advancement
                                    </li>
                                    <li class="d-flex mb-3 aos-init">
                                        <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Fosters Personal Growth
                                    </li>
                                </ul>
                            </div>
                            <!-- /Master skills Content -->
                            
                            <!-- Master skills Image -->
                            <div class="col-xl-7 col-lg-5 col-md-12 order-lg-5 order-md-5 order-5" data-aos="fade-up"> 
                                <div class="join-mentor-img">
                                    <img src="{{URL::asset('build/img/feature/feature-20.jpg')}}" alt="Img" class="img-fluid rounded-4">								
                                    <div class="joing-icon-award bg-secondary">
                                        <img src="{{URL::asset('build/img/icons/award-03.svg')}}" alt="Img" class="img-fluid">
                                    </div>
                                </div>
                            </div>								
                            <!-- /Master skills Image -->

                        </div>

                    </div>
                </div>
            </div>
            <!-- /Course Info -->
        </div>
    </section>
    <!-- /Master Skills -->

    <!-- Testimonial -->
    <section class="testimonial-sec">
        <div class="container">
            <div class="testimonial-two-img">
                <img src="{{URL::asset('build/img/bg/bg-14.png')}}" alt="Img" class="img-fluid">
            </div>
            <div class="testimonial-subhead-two">
                <div class="col-md-12" data-aos="fade-down">						
                    <div class="testimonial-inner">						
                        <div class="section-header text-center">
                            <h2 data-aos="fade-down">Join over 5 Million Students</h2>
                            <p>Get certified, master modern tech skills, and level up your career </p>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-4 col-sm-12" data-aos="fade-up">
                                <div class="course-count-two course-count border">
                                    <h4><span class="counterUp text-secondary">253,085</span></h4>
                                    <p>Students Enrolled</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12" data-aos="fade-up">
                                <div class="course-count-two  course-count border">
                                    <h4><span class="counterUp text-success">1,205</span></h4>
                                    <p>Total Courses</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12" data-aos="fade-up">
                                <div class="course-count-two  course-count border">
                                    <h4><span class="counterUp text-primary" >253,085</span></h4>
                                    <p>Students Worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonial -->

    <!-- Share your knowledge -->
    <div class="knowledge-sec">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 ps-0">
                    <div class="featured-img-1"></div>
                </div>
                <div class="col-lg-6 col-sm-12 p-0" data-aos="fade-up">
                    <div class="joing-group">
                        <div class="section-header">
                            <h2 class="mb-2">Want to share your knowledge? Join us a Mentor</h2>
                        </div>
                        <div class="joing-list">
                            <ul>
                                <li data-aos="fade-bottom">
                                    <div class="joing-header">
                                        <span class="joing-icon bg-primary">
                                            <img src="{{URL::asset('build/img/icons/joing-01.svg')}}" alt="Img" class="img-fluid">
                                        </span>
                                        <div class="joing-content">
                                            <h5 class="title">Project Management Professional</h5>														
                                            <p>A globally recognized certification for project managers, PMP validates your ability to lead projects efficiently from start to finish. </p>
                                        </div>
                                    </div>
                                </li>
                                <li data-aos="fade-bottom">
                                    <div class="joing-header">
                                        <span class="joing-icon bg-warning">
                                            <img src="{{URL::asset('build/img/icons/joing-02.svg')}}" alt="Img" class="img-fluid">
                                        </span>
                                        <div class="joing-content">
                                            <h5 class="title">Fosters Personal Growth</h5>
                                            <p>Pursuing certifications pushes you to learn new things and grow professionally, increasing your confidence and job satisfaction.</p>
                                        </div>
                                    </div>
                                </li>
                                <li data-aos="fade-bottom">
                                    <div class="joing-header">
                                        <span class="joing-icon bg-success">
                                            <img src="{{URL::asset('build/img/icons/joing-03.svg')}}" alt="Img" class="img-fluid">
                                        </span>
                                        <div class="joing-content aos">
                                            <h5 class="title">Build skills your way, from labs to courses</h5>
                                            <p>Courses come in various formats, including video tutorials, interactive assignments, quizzes, reading materials, and hands-on projects</p>
                                        </div>
                                    </div>
                                </li>
                                <li data-aos="fade-bottom" class="mb-0">
                                    <div class="joing-header">
                                        <span class="joing-icon bg-secondary">
                                            <img src="{{URL::asset('build/img/icons/joing-04.svg')}}" alt="Img" class="img-fluid">
                                        </span>
                                        <div class="joing-content aos">
                                            <h5 class="title">Get certified with 100+ certification courses</h5>
                                            <p>Employers often value certifications when it comes to promotions and internal career advancement opportunities.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Share your knowledge -->

    <!-- Feature Instructors -->
    <div class="feature-instructors-sec">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">New Courses</span>
                <h2>Featured Instructor</h2>
                <p>95% of eLearning learners report our hands-on content directly helped their careers.</p>
            </div>
            <!-- Featured Instructor -->
            <div class="featured-instructor-two">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="instructor-item instructor-item-four">
                            <div class="instructors-img ">
                                <a href="{{url('instructor-list')}}" tabindex="0">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-01.jpg')}}">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <div class="featured-img">
                                        <img src="{{URL::asset('build/img/icons/category-1.svg')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0);" class="favourite ms-auto">
                                        <i class="isax isax-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="instructor-content">
                                <h5 class="title">
                                    <a href="{{url('instructor-details')}}">Julian Adrose</a>
                                </h5>
                                <span class="designation">Angular Expert</span>
                                <div class="student-count">
                                    <i class="fa-solid fa-user-group me-2"></i><span>50 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="instructor-item instructor-item-four">
                            <div class="instructors-img ">
                                <a href="{{url('instructor-list')}}" tabindex="0">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-02.jpg')}}">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <div class="featured-img">
                                        <img src="{{URL::asset('build/img/icons/category-2.svg')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0);" class="favourite ms-auto">
                                        <i class="isax isax-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="instructor-content">
                                <h5 class="title">
                                    <a href="{{url('instructor-details')}}">Gallegos</a>
                                </h5>
                                <span class="designation">Angular Expert</span>
                                <div class="student-count">
                                    <i class="fa-solid fa-user-group me-2"></i><span>70 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="instructor-item instructor-item-four">
                            <div class="instructors-img ">
                                <a href="{{url('instructor-list')}}" tabindex="0">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-03.jpg')}}">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <div class="featured-img">
                                        <img src="{{URL::asset('build/img/icons/category-3.svg')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0);" class="favourite ms-auto">
                                        <i class="isax isax-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="instructor-content">
                                <h5 class="title">
                                    <a href="{{url('instructor-details')}}">Kristi</a>
                                </h5>
                                <span class="designation">Node Js</span>
                                <div class="student-count">
                                    <i class="fa-solid fa-user-group me-2"></i><span>60 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="instructor-item instructor-item-four">
                            <div class="instructors-img ">
                                <a href="{{url('instructor-list')}}" tabindex="0">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-04.jpg')}}">
                                </a>
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                    <div class="featured-img">
                                        <img src="{{URL::asset('build/img/icons/category-4.svg')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0);" class="favourite ms-auto">
                                        <i class="isax isax-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="instructor-content">
                                <h5 class="title">
                                    <a href="{{url('instructor-details')}}">Pinero</a>
                                </h5>
                                <span class="designation">Python</span>
                                <div class="student-count">
                                    <i class="fa-solid fa-user-group me-2"></i><span>40 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Featured Instructor -->
            
            <!-- View all Category -->
            <div class="col-lg-12">
                <div class="more-details text-center" data-aos="fade-up">
                    <a href="{{url('instructor-list')}}" class="btn btn-secondary btn-xl">View all Instructors</a>
                </div>
            </div>
            <!-- /View all Category -->
        </div>
    </div>
    <!-- /Feature Instructors -->	

    <!-- Leading Companies -->
    <section class="real-reviews-sec">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">Check out these real reviews</span>
                <h2>Users love us Don't take it from us</h2>
                <p>95% of eLearning learners report our hands-on content directly helped their careers.</p>
            </div>
            <div class="real-reviews-group">						
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12"  data-aos="fade-up">
                        <div class="reviews-img">
                            <img src="{{URL::asset('build/img/feature/feature-21.jpg')}}" alt="Img" class="img-fluid rounded-4">
                            <span class="review-icon">
                                <img src="{{URL::asset('build/img/icons/review.svg')}}" alt="img">
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-md-12"  data-aos="fade-up">
                        <div class="owl-carousel real-reviews owl-theme">
                            <div class="item">
                                <div class="real-reviews-grid">
                                    <div class="review-content">
                                        <h3>Helps us to improve our productivity</h3>
                                        <p>High-definition video is video of higher resolution and quality than standard-definition. While there is no standardized meaning for high-definition, generally any video.High-definition video is video of higher resolution and quality than standard-definition. While there is no standardized meaning for high-definition, generally any video.High-definition video is video of higher resolution and quality than standard-definition.</p>
                                    </div>
                                    <div class="review-top">
                                        <div class="review-info">
                                            <h5 data-aos="fade-up">William George</h5>
                                            <h6 data-aos="fade-up">CEO & Chairman</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="real-reviews-grid">
                                    <div class="review-content">
                                        <h3>Helps us to improve our productivity</h3>
                                        <p>High-definition video is video of higher resolution and quality than standard-definition. While there is no standardized meaning for high-definition, generally any video.High-definition video is video of higher resolution and quality than standard-definition. While there is no standardized meaning for high-definition, generally any video.</p>
                                    </div>
                                    <div class="review-top">
                                        <div class="review-info">
                                            <h5 data-aos="fade-up">Julian Adrose</h5>
                                            <h6 data-aos="fade-up">Manager</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="owl-nav slide-nav-8 nav-control"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="client-two-carousel">
                <div class="lead-group-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="img" src="{{URL::asset('build/img/client/16.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="img" src="{{URL::asset('build/img/client/17.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="img" src="{{URL::asset('build/img/client/18.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="img" src="{{URL::asset('build/img/client/19.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="img" src="{{URL::asset('build/img/client/20.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="img" src="{{URL::asset('build/img/client/21.svg')}}">
                        </div>
                    </div>							
                </div>
            </div>
        </div>
        <img src="{{URL::asset('build/img/bg/bg-9.png')}}" alt="img" class="review-bg">
    </section>
    <!-- /Leading Companies -->

    <!-- Latest Blog -->
    <section class="latest-blog-sec">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">News & Events</span>
                <h2>Our Latest Updates</h2>
                <p>Dont Miss Stay Updated with the Latest Articles and Insights</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-down">	
                    <div class="event-blog-main">
                        <div class="latest-blog-img">
                            <a href="{{url('blog-details')}}">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-31.jpg')}}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a href="{{url('blog-details')}}" class="category-name">LMS</a>
                            <h4 class="title"><a href="{{url('blog-details')}}">Promoting Health & Well being in Schools</a></h4>
                            <p class="blog-date"><i class="isax isax-calendar-1 me-1"></i>14 Sep 2022</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-down">	
                    <div class="event-blog-main">
                        <div class="latest-blog-img">
                            <a href="{{url('blog-details')}}">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-32.jpg')}}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a href="{{url('blog-details')}}" class="category-name">Sales</a>
                            <h4 class="title"><a href="{{url('blog-grid')}}">Why an LMS is Essential for Modern Education</a></h4>
                            <p class="blog-date"><i class="isax isax-calendar-1 me-1"></i>14 Sep 2022</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-down">	
                    <div class="event-blog-main">
                        <div class="latest-blog-img">
                            <a href="{{url('blog-details')}}">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-33.jpg')}}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a href="{{url('blog-details')}}" class="category-name">Website Design</a>
                            <h4 class="title"><a href="{{url('blog-details')}}">11 Tips to Help You Get New Clients with the design</a></h4>
                            <p class="blog-date"><i class="isax isax-calendar-1 me-1"></i>14 Sep 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- View all  Events -->
            <div class="col-lg-12">
                <div class="more-details text-center" data-aos="fade-down">
                    <a href="{{url('blog-grid')}}" class="btn btn-secondary btn-xl">View all Updates</a>
                </div>
            </div>
            <!-- /View all  Events -->
        </div>
        <img src="{{URL::asset('build/img/bg/blog-bg.png')}}" alt="img" class="blog-bg">
    </section>	
    <!-- /Latest Blog -->


@endsection
