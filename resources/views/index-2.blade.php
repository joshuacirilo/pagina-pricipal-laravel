<?php $page = 'index-2'; ?>
@extends('layout.mainlayout')
@section('content')
 
  <!-- Banner section -->
  <div class="banner-section-two">
    <div class="container position-relative">
        <img src="{{URL::asset('build/img/banner/star-01.png')}}" alt="img" class="img-fluid star-01">
        <img src="{{URL::asset('build/img/banner/star-02.png')}}" alt="img" class="img-fluid star-02">
        <img src="{{URL::asset('build/img/banner/star-03.png')}}" alt="img" class="img-fluid star-03">
        <img src="{{URL::asset('build/img/banner/star-04.png')}}" alt="img" class="img-fluid star-04">
        <img src="{{URL::asset('build/img/banner/star-05.png')}}" alt="img" class="img-fluid star-05">
        <img src="{{URL::asset('build/img/icons/banner-book.svg')}}" alt="img" class="img-fluid star-06 d-none d-xl-flex">
        <img src="{{URL::asset('build/img/icons/banner-icon-03.svg')}}" alt="img" class="img-fluid star-07 d-none d-xl-flex">
        <img src="{{URL::asset('build/img/icons/banner-icon-01.svg')}}" alt="img" class="img-fluid star-08 d-none d-xl-flex">
        <img src="{{URL::asset('build/img/icons/banner-icon-02.svg')}}" alt="img" class="img-fluid star-09 d-none d-xl-flex">
        <img src="{{URL::asset('build/img/icons/banner-icon-04.svg')}}" alt="img" class="img-fluid star-10 d-none d-xl-flex">
        <img src="{{URL::asset('build/img/banner/soft-star.png')}}" alt="img" class="img-fluid star-11 d-none d-xl-flex">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="d-flex align-items-center position-relative banner-content">
                    <div class="aos" data-aos="zoom-in">
                        <div class="banner-info">
                            <span class="d-inline-flex fw-semibold text-uppercase mb-3">The Leader in Online Learning</span>
                            <h1 class="mb-4">Engaging & Accessible <span class="position-relative banner-title">Online <img src="{{URL::asset('build/img/banner/banner-text-bg.png')}}" alt="img" class="img-fluid position-absolute title-bg"></span> Courses For All</h1>
                            <div class="banner-form">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="isax isax-book me-2"></i>
                                            Category
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center p-2" href="javascript:void(0);">
                                                    Design
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center p-2" href="javascript:void(0);">
                                                    Marketing
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center p-2" href="javascript:void(0);">
                                                    Framer Developer
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center p-2" href="javascript:void(0);">
                                                    Figma Developer
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span>
                                        <input type="text" placeholder="Search Courses, Instructors" class="form-control border-0">
                                    </span>
                                </div>
                                <button class="rounded-pill btn btn-primary btn-xl">Search</button>
                            </div>
                        </div>
                        <div class="d-sm-flex align-items-center">
        
                            <!-- Rating star and content -->
                            <div class="ms-sm-3 mt-2 mt-sm-0">
                                <!-- Star -->
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                                    <li class="list-inline-item heading-color fw-bold me-0">4.5 / 5.0</li>
                                </ul>
                                <small>From 500+ reviews</small>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-img-section">
                    <img src="{{URL::asset('build/img/banner/banner-bg-01.png')}}" alt="img" class="img-fluid banner-bg-01 d-none d-xl-flex aos" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                    <img src="{{URL::asset('build/img/banner/banner-bg-02.png')}}" alt="img" class="img-fluid banner-bg-02 d-none d-xl-flex aos" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                    <img src="{{URL::asset('build/img/hero/hero-1.png')}}" alt="img" class="img-fluid banner-bg-03 aos" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="900">
                    <div class="enrolled-list-cover aos" data-aos="fade-down">
                        <div class="enrolled-list">
                            <div class="avatar-list-stacked">
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
                    <div class="course-count d-inline-flex align-items-center aos" data-aos="fade-down">
                        <span class="counter-icon"><i class="ti ti-list-details"></i></span>
                        <div>
                            <h4 class="text-white">50+</h4>
                            <p class="text-light mb-0">Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
 <!-- /Banner section -->

 <!-- favorite  section -->
  <div class="favorite-course">
    <div class="container">
        <div class="section-header text-center aos" data-aos="fade-up">
            <span class="section-badge">
                Favourite Course
            </span>
            <h2>Top Category</h2>
            <p>The right course, guided by an expert mentor, can provide invaluable insights, practical skills</p>
        </div>
        <div class="owl-carousel owl-theme nav-bottom px-1 category-carousel">
            <div class="item aos" data-aos="flip-right">
                <div class="categories-item">
                    <span class="categories-img">
                        <i class="isax isax-archive5 fs-36 text-primary"></i>
                    </span>
                    <h5 class="fw-semi-bold mb-1"><a href="{{url('course-category')}}">Management</a></h5>
                    <p class="mb-0">156 Courses</p>
                </div>
            </div>
            <div class="item aos" data-aos="flip-right">
                <div class="categories-item">
                    <span class="categories-img">
                        <i class="isax isax-airpod5 fs-36 text-primary"></i>
                    </span>
                    <h5 class="fw-semi-bold mb-1"><a href="{{url('course-category')}}">IT & Softwares</a></h5>
                    <p class="mb-0">214 Courses</p>
                </div>
            </div>
            <div class="item aos" data-aos="flip-right">
                <div class="categories-item">
                    <span class="categories-img">
                        <i class="isax isax-bag-tick-25 fs-36 text-primary"></i>
                    </span>
                    <h5 class="fw-semi-bold mb-1"><a href="{{url('course-category')}}">Marketing</a></h5>
                    <p class="mb-0">174 Courses</p>
                </div>
            </div>
            <div class="item aos" data-aos="flip-right">
                <div class="categories-item">
                    <div class="card-body text-center">
                        <span class="categories-img">
                            <i class="isax isax-additem5 fs-36 text-primary"></i>
                        </span>
                        <h5 class="fw-semi-bold mb-1"><a href="{{url('course-category')}}">Productivity</a></h5>
                        <p class="mb-0">126 Courses</p>
                    </div>
                </div>
            </div>
            <div class="item aos" data-aos="flip-right">
                <div class="categories-item">
                    <div class="card-body text-center">
                        <span class="categories-img">
                            <i class="isax isax-dcube5 fs-36 text-primary"></i>
                        </span>
                        <h5 class="fw-semi-bold mb-1"><a href="{{url('course-category')}}">Lifestyles</a></h5>
                        <p class="mb-0">214 Courses</p>
                    </div>
                </div>
            </div>
            <div class="item aos" data-aos="flip-right">
                <div class="categories-item">
                    <div class="card-body text-center">
                        <span class="categories-img">
                            <i class="isax isax-bezier5 fs-36 text-primary"></i>
                        </span>
                        <h5 class="fw-semi-bold mb-1"><a href="{{url('course-category')}}">Design</a></h5>
                        <p class="mb-0">161 Courses</p>
                    </div>
                </div>
            </div>
            <div class="item aos" data-aos="flip-right">
                <div class="categories-item">
                    <div class="card-body text-center">
                        <span class="categories-img">
                            <i class="isax isax-bag-tick-25 fs-36 text-primary"></i>
                        </span>
                        <h5 class="fw-semi-bold mb-1"><a href="{{url('course-category')}}">Marketing</a></h5>
                        <p class="mb-0">174 Courses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{URL::asset('build/img/bg/category-bg-1.png')}}" alt="img" class="bg-01">
  </div>
 <!-- /favorite  section -->

 <!-- our benefits -->
  <div class="benefits-section">
    <div class="container">
        <div class="section-header text-center aos" data-aos="fade-up">
            <div class="section-badge text-white">
                Our Benefits
            </div>
            <h2 class="text-white">Master the skills to drive your career</h2>
            <p class="text-white">The right course, guided by an expert mentor, can provide invaluable insights, practical skills</p>
        </div>
        <div class="row justify-content-center row-gap-4 aos" data-aos="fade-up">
            <div class="col-md-6 col-lg-4">
                <div class="benefits-item">
                    <div class="benefits-img">
                        <img src="{{URL::asset('build/img/icons/benefit-icon-01.svg')}}" alt="img" class="img-fluid">
                    </div>
                    <h5 class="title">Stay motivated with instructors</h5>
                    <p class="text-light mb-0">Stay motivated with engaging instructors on our platform, guiding you through every course.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="benefits-item">
                    <div class="benefits-img">
                        <img src="{{URL::asset('build/img/icons/benefit-icon-02.svg')}}" alt="img" class="img-fluid">
                    </div>
                    <h5 class="title">Get certified on courses</h5>
                    <p class="text-light mb-0">Get certified, master modern tech skills, and level up your career whether you’re starting.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="benefits-item">
                    <div class="benefits-img">
                        <img src="{{URL::asset('build/img/icons/benefit-icon-03.svg')}}" alt="img" class="img-fluid">
                    </div>
                    <h5 class="title">Build skills on your way</h5>
                    <p class="text-light mb-0">Build skills your way with hands-on labs and immersive courses, tailored to fit.</p>
                </div>
            </div>
        </div>
    </div>
  </div>
 <!-- /our benefits -->

<!-- whats new -->
<div class="feature-section position-relative">
    <div class="container">
        <img src="{{URL::asset('build/img/bg/feature-bg-01.png')}}" alt="img" class="bg-star-01 img-fluid">
        <img src="{{URL::asset('build/img/bg/feature-bg-02.png')}}" alt="img" class="bg-star-02 img-fluid">
        <div class="section-header text-center aos" data-aos="fade-up">
            <span class="section-badge">
                What’s New
            </span>
            <h2>Featured Courses</h2>
            <p>Discover our featured courses, specially curated to help you gain in-demand skills</p>
        </div>
        <div class="course-slider-slick">
            <div class="item">
                <div class="course-item-two course-item">
                    <div class="course-img">
                        <a href="{{url('course-details')}}">
                            <img src="{{URL::asset('build/img/course/course-22.jpg')}}" alt="img" class="img-fluid">  
                        </a>
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <a href="javascript:void(0);" class="fav-icon"><i class="isax isax-heart"></i></a>
                            <a href="javascript:void(0);" class="brand-icon ms-auto">
                                <img src="{{URL::asset('build/img/icons/course-01.svg')}}" alt="img" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                    <img src="{{URL::asset('build/img/user/user-29.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                </a>
                                <div class="ms-2">
                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">Brenda Slaton</a>
                                </div>
                            </div>
                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                Design
                            </span>
                        </div>
                        <h6 class="title mb-2"><a href="{{url('course-details')}}">Information About UI/UX Design Degree Course</a></h6>
                        <p class="d-flex align-items-center mb-3"><i class="ti ti-star-filled text-warning me-2"></i>4.9 (200 Reviews)</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="text-secondary fs-16 fw-semi-bold mb-0">$120</h6>
                            <a href="{{url('cart')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Add to Cart<i class="isax isax-arrow-right-3 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="course-item-two course-item">
                    <div class="course-img">
                        <a href="{{url('course-details')}}">
                            <img src="{{URL::asset('build/img/course/course-23.jpg')}}" alt="img" class="img-fluid">                                       
                        </a>
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <a href="javascript:void(0);" class="fav-icon"><i class="isax isax-heart"></i></a>
                            <a href="javascript:void(0);" class="brand-icon ms-auto">
                                <img src="{{URL::asset('build/img/icons/course-01.svg')}}" alt="img" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                    <img src="{{URL::asset('build/img/user/user-50.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                </a>
                                <div class="ms-2">
                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">David Benitz</a>
                                </div>
                            </div>
                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                Productivity
                            </span>
                        </div>
                        <h6 class="title mb-2"><a href="{{url('course-details')}}">The Complete Business and Management Course</a></h6>
                        <p class="d-flex align-items-center mb-3"><i class="ti ti-star-filled text-warning me-2"></i>5.0 (210 Reviews)</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="text-secondary fs-16 fw-semi-bold mb-0">$168</h6>
                             <a href="{{url('cart')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Add to Cart<i class="isax isax-arrow-right-3 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="course-item-two course-item">
                    <div class="course-img">
                        <a href="{{url('course-details')}}">
                            <img src="{{URL::asset('build/img/course/course-24.jpg')}}" alt="img" class="img-fluid">
                        </a>
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <a href="javascript:void(0);" class="fav-icon"><i class="isax isax-heart"></i></a>
                            <a href="javascript:void(0);" class="brand-icon ms-auto">
                                <img src="{{URL::asset('build/img/featured-courses/react.svg')}}" alt="img" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="course-content">                                                
                        <div class="d-flex justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                    <img src="{{URL::asset('build/img/user/user-23.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                </a>
                                <div class="ms-2">
                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">Calvin Johnsen</a>
                                </div>
                            </div>
                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                Development
                            </span>
                        </div>
                        <h6 class="title mb-2"><a href="{{url('course-details')}}">Learn & Create ReactJS Tech Fundamentals Apps</a></h6>
                        <p class="d-flex align-items-center mb-3"><i class="ti ti-star-filled text-warning me-2"></i>5.0 (154 Reviews)</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="text-secondary fs-16 fw-semi-bold mb-0">$147</h6>
                             <a href="{{url('cart')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Add to Cart<i class="isax isax-arrow-right-3 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="course-item-two course-item">
                    <div class="course-img">
                        <a href="{{url('course-details')}}">
                            <img src="{{URL::asset('build/img/course/course-25.jpg')}}" alt="img" class="img-fluid"> 
                        </a>
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <a href="javascript:void(0);" class="fav-icon"><i class="isax isax-heart"></i></a>
                            <a href="javascript:void(0);" class="brand-icon ms-auto">
                                <img src="{{URL::asset('build/img/featured-courses/Clip-path-group.svg')}}" alt="img" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="course-content">                                           
                        <div class="d-flex justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                    <img src="{{URL::asset('build/img/user/user-20.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                </a>
                                <div class="ms-2">
                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">Edith Dorsey</a>
                                </div>
                            </div>
                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                Lifestyles
                            </span>
                        </div>
                        <h6 class="title mb-2"><a href="{{url('course-details')}}">Build Creative Arts & media Course Completed</a></h6>
                        <p class="d-flex align-items-center mb-3"><i class="ti ti-star-filled text-warning me-2"></i>4.9 (178 Reviews)</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="text-secondary fs-16 fw-semi-bold mb-0">$190</h6>
                             <a href="{{url('cart')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Add to Cart<i class="isax isax-arrow-right-3 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="course-item-two course-item">
                    <div class="course-img">                                
                        <a href="{{url('course-details')}}">
                            <img src="{{URL::asset('build/img/course/course-22.jpg')}}" alt="img" class="img-fluid">     
                        </a>
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <a href="javascript:void(0);" class="fav-icon"><i class="isax isax-heart"></i></a>
                            <a href="javascript:void(0);" class="brand-icon ms-auto">
                                <img src="{{URL::asset('build/img/icons/course-01.svg')}}" alt="img" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                    <img src="{{URL::asset('build/img/user/user-50.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                </a>
                                <div class="ms-2">
                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">David Benitz</a>
                                </div>
                            </div>
                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                Productivity
                            </span>
                        </div>
                        <h6 class="title mb-2"><a href="{{url('course-details')}}">The Complete Business and Management Course</a></h6>
                        <p class="d-flex align-items-center mb-3"><i class="ti ti-star-filled text-warning me-2"></i>5.0 (210 Reviews)</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="text-secondary fs-16 fw-semi-bold mb-0">$168</h6>
                             <a href="{{url('cart')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Add to Cart<i class="isax isax-arrow-right-3 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
  </div>
 <!-- /whats new -->

 <!-- counter trending section -->
<section class="counter-trending-cover">
    <div class="container">
        <div class="counter-section">
            <div class="section-header text-center aos" data-aos="fade-up">
                <h2 class="text-white">Acheive you Goals with DreamsLMS</h2>
                <p class="text-light">96% of eLearning for Business customers see improved results within six months.</p>
            </div>
            <div class="row row-gap-4">
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="counter-item text-center flex-fill" data-aos="fade-up">
                        <h2 class="text-white">253,085</h2>
                        <p class="text-white">Students Enrolled all over World</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="counter-item text-center flex-fill" data-aos="fade-up">
                        <h2 class="text-white">1,205</h2>
                        <p class="text-white">Total Courses on our Platform</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="counter-item aos text-center flex-fill" data-aos="fade-up">
                        <h2 class="text-white">56</h2>
                        <p class="text-white">Countries of Students</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="counter-item no-border aos text-center flex-fill" data-aos="fade-up">
                        <h2 class="text-white">968</h2>
                        <p class="text-white">Expert Tutors From Various Fields</p>
                    </div>
                </div>
            </div>
            <img src="{{URL::asset('build/img/bg/count-icon.png')}}" alt="img" class="img-fluid counter-bg-01 d-none d-lg-flex">
            <img src="{{URL::asset('build/img/icons/banner-icon-03.svg')}}" alt="img" class="img-fluid counter-bg-02 d-none d-lg-flex">
        </div>
    </div>
    <div class="container position-relative">
        <div class="trending-instruction">
            <div class="section-header text-center aos" data-aos="fade-up">
                <span class="section-badge">
                    Trending Instructors
                </span>
                <h2>Top Class & Professional Instructors </h2>
                <p> Empowering Change: Stories from Those Who Took the Leap</p>
            </div>                    
            <div class="owl-carousel instructor-carousel owl-theme nav-bottom">
                <div class="item aos" data-aos="flip-right">
                    <div class="instructor-item">
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <a href="javascript:void(0);" class="favourite ms-auto">
                                <i class="isax isax-heart"></i>
                            </a>
                        </div>
                        <div class="instructor-img">
                            <a href="{{url('instructor-details')}}">
                                <img src="{{URL::asset('build/img/instructor/instructor-05.jpg')}}" alt="img">
                                <span class="verify">
                                    <img src="{{URL::asset('build/img/icons/verify-icon.svg')}}" alt="img" class="img-fluid">
                                </span>
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Joyce Pence</a>
                            </h3>
                            <span class="designation">Lead Designer</span>
                            <p class="rating">
                                <i class="fas fa-star me-1"></i>4.8 (157 Reviews)
                            </p>
                            <div class="instructor-social">
                                <a href="javascript:void(0);">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-x-twitter"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item aos" data-aos="flip-right">
                    <div class="instructor-item">
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <a href="javascript:void(0);" class="favourite ms-auto">
                                <i class="isax isax-heart"></i>
                            </a>
                        </div>
                        <div class="instructor-img">
                            <a href="{{url('instructor-details')}}">
                                <img src="{{URL::asset('build/img/instructor/instructor-06.jpg')}}" alt="img">
                                <span class="verify">
                                    <img src="{{URL::asset('build/img/icons/verify-icon.svg')}}" alt="img" class="img-fluid">
                                </span>
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Edith Dorsey</a>
                            </h3>
                            <span class="designation">Accountant</span>
                            <p class="rating">
                                <i class="fas fa-star me-1"></i>4.9 (20 Reviews)
                            </p>
                            <div class="instructor-social">
                                <a href="javascript:void(0);">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-x-twitter"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item aos" data-aos="flip-right">
                    <div class="instructor-item">
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <a href="javascript:void(0);" class="favourite ms-auto">
                                <i class="isax isax-heart"></i>
                            </a>
                        </div>
                        <div class="instructor-img">
                            <a href="{{url('instructor-details')}}">
                                <img src="{{URL::asset('build/img/instructor/instructor-07.jpg')}}" alt="img">
                                <span class="verify">
                                    <img src="{{URL::asset('build/img/icons/verify-icon.svg')}}" alt="img" class="img-fluid">
                                </span>
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Ruben Holmesr</a>
                            </h3>
                            <span class="designation">Architect</span>
                            <p class="rating">
                                <i class="fas fa-star me-1"></i>4.8 (157 Reviews)
                            </p>
                            <div class="instructor-social">
                                <a href="javascript:void(0);">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-x-twitter"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item aos" data-aos="flip-right">
                    <div class="instructor-item">
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <a href="javascript:void(0);" class="favourite ms-auto">
                                <i class="isax isax-heart"></i>
                            </a>
                        </div>
                        <div class="instructor-img">
                            <a href="{{url('instructor-details')}}">
                                <img src="{{URL::asset('build/img/instructor/instructor-08.jpg')}}" alt="img">
                                <span class="verify">
                                    <img src="{{URL::asset('build/img/icons/verify-icon.svg')}}" alt="img" class="img-fluid">
                                </span>
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Carol Magner</a>
                            </h3>
                            <span class="designation">Lead Designer</span>
                            <p class="rating">
                                <i class="fas fa-star me-1"></i>5.0 (218 Reviews)
                            </p>
                            <div class="instructor-social">
                                <a href="javascript:void(0);">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-x-twitter"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item aos" data-aos="flip-right">
                    <div class="instructor-item">
                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                            <a href="javascript:void(0);" class="favourite ms-auto">
                                <i class="isax isax-heart"></i>
                            </a>
                        </div>
                        <div class="instructor-img">
                            <a href="{{url('instructor-details')}}">
                                <img src="{{URL::asset('build/img/instructor/instructor-06.jpg')}}" alt="img">
                                <span class="verify">
                                    <img src="{{URL::asset('build/img/icons/verify-icon.svg')}}" alt="img" class="img-fluid">
                                </span>
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Edith Dorsey</a>
                            </h3>
                            <span class="designation">Accountant</span>
                            <p class="rating">
                                <i class="fas fa-star me-1"></i>4.9 (20 Reviews)
                            </p>
                            <div class="instructor-social">
                                <a href="javascript:void(0);">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-x-twitter"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{URL::asset('build/img/bg/instructor-bg-1.png')}}" alt="img" class="instructor-bg">
</section>
 <!-- /counter trending section -->

 <!-- subscribe section -->
  <div class="subsribe-section">
    <div class="container position-relative">
        <img src="{{URL::asset('build/img/icons/banner-icon-03.svg')}}" alt="img" class="img-fluid bg-05  d-none d-lg-flex">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-section">
                    <div class="mb-4 aos" data-aos="fade-up">
                        <h2 class="text-white mb-1">Transform Access To Education</h2>
                        <p class="text-light fs-16">Create Account to Receive Our Newsletter, Course Recommend & Promotions.</p>
                    </div>
                    <form action="#" class="subcribe-form">
                        <span>
                            <i class="isax isax-message-text"></i>
                        </span>
                        <input type="email" placeholder="Email Address" class="form-control">
                        <button type="submit" class="btn btn-secondary btn-xl">Subcribe</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 position-relative">
                <img src="{{URL::asset('build/img/bg/subscribe-bg-01.png')}}" alt="img" class="img-fluid bg-01 d-none d-lg-flex aos" data-aos="fade-down">
                <img src="{{URL::asset('build/img/feature/feature-22.png')}}" alt="img" class="img-fluid bg-02 d-none d-lg-flex aos" data-aos="fade-down">
                <img src="{{URL::asset('build/img/icons/subscribe-icon-02.svg')}}" alt="img" class="img-fluid bg-03 d-none d-lg-flex">
                <img src="{{URL::asset('build/img/icons/subscribe-icon-01.svg')}}" alt="img" class="img-fluid bg-04 d-none d-lg-flex">
            </div>
        </div>
    </div>
  </div>
 <!-- /subscribe section -->

 <!-- master skill -->
  <div class="skill-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-xl-7">
                <div class="skill-image">
                    <div class="row position-relative">
                        <img src="{{URL::asset('build/img/bg/book-bg.png')}}" alt="img" class="img-fluid img-04 d-none d-xl-flex">
                        <img src="{{URL::asset('build/img/icons/icon-31.png')}}" alt="img" class="img-fluid img-05 d-none d-xl-flex">
                        <div class="col-md-6 d-flex">
                            <div class="flex-fill">
                                <img src="{{URL::asset('build/img/feature/feature-27.jpg')}}" alt="img" class="img-fluid flex-fill img-01 aos" data-aos="fade-right">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <img src="{{URL::asset('build/img/feature/feature-25.jpg')}}" alt="img" class="img-fluid img-02 aos" data-aos="fade-down">
                            </div>
                            <div>
                                <img src="{{URL::asset('build/img/feature/feature-26.jpg')}}" alt="img" class="img-fluid img-03 aos" data-aos="fade-up">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 aos" data-aos="fade-up">
                <div class="skill-content">
                    <h2>Master the Skills To Drive Your Career</h2>
                    <p>Get certified, master modern tech skills, and level up your career whether you’re starting out or a seasoned pro. 95% of eLearning learners report our hands-on content directly helped their careers.</p>
                    <div class="skill-list mb-4">
                        <p class="d-flex align-items-center"><i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Access Your Class anywhere</p>
                        <p class="d-flex align-items-center"><i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Flexible Course Plan</p>
                        <p class="d-flex align-items-center"><i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Quality Assurance</p>
                        <p class="d-flex align-items-center"><i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Cost-Effectiveness</p>
                        <p class="d-flex align-items-center"><i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>The Most World Class Instructors</p>
                        <p class="d-flex align-items-center"><i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Quality Assurance</p>
                    </div>
                    <a href="{{url('course-list')}}" class="btn btn-dark btn-xl rounded-pill d-inline-flex align-items-center">Get Started<i class="isax isax-arrow-right-3 ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
  </div>
 <!-- /master skill -->

 <!-- client -->
  <div class="cliets-section">
    <div>
        <div class="owl-carousel owl-theme brand-carousel">
            <div class="item">
               <img src="{{URL::asset('build/img/client/08.svg')}}" alt="img">
            </div>
            <div class="item">
                <img src="{{URL::asset('build/img/client/09.svg')}}" alt="img">
            </div>
            <div class="item">
                <img src="{{URL::asset('build/img/client/10.svg')}}" alt="img">
            </div>
            <div class="item">
                <img src="{{URL::asset('build/img/client/11.svg')}}" alt="img">
            </div>
            <div class="item">
                <img src="{{URL::asset('build/img/client/12.svg')}}" alt="img">
            </div>
            <div class="item">
                <img src="{{URL::asset('build/img/client/13.svg')}}" alt="img">
            </div>
            <div class="item">
                <img src="{{URL::asset('build/img/client/14.svg')}}" alt="img">
            </div>
            <div class="item">
                <img src="{{URL::asset('build/img/client/15.svg')}}" alt="img">
            </div>
        </div>
    </div>
  </div>
 <!-- /client -->

 <!-- about us -->
  <div class="about-us">
    <div class="container">
        <div class="about-us-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 aos" data-aos="fade-up">
                    <div class="about-us-head aos" data-aos="fade-up">
                        <h2>What People Say About Us ❤️</h2>
                        <p>Read what our satisfied clients have to say about their experiences with our platform.</p>
                    </div>
                    <div class="owl-carousel owl-theme nav-bottom" id="review-carousel">
                        <div class="item flex-fill">
                            <div class="review-item">
                                <div class="rating">
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                </div>
                                <h5 class="title">"Transformed My Career"</h5>
                                <p>As an employer, the platform exceeded my expectations. We swiftly found top-tier talent for our company.</p>
                                <div class="d-flex align-items-center review-user">
                                    <div class="me-2">
                                        <a href="{{url('student-details')}}">
                                            <img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="img" class="img-fluid">
                                        </a>
                                    </div>
                                    <div>
                                        <h6 class=" fw-medium"><a href="{{url('student-details')}}">Brenda Slaton</a></h6>
                                        <p class="mb-0">Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item flex-fill">
                            <div class="review-item">
                                <div class="rating">
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                </div>
                                <h5 class="title">"Enhanced My Study"</h5>
                                <p>The LMS made managing my coursework simple and engaging, with everything I need easily accessible and organized.</p>
                                <div class="d-flex align-items-center review-user">
                                    <div class="me-2">
                                        <a href="{{url('student-details')}}">
                                            <img src="{{URL::asset('build/img/user/user-12.jpg')}}" alt="img" class="img-fluid">
                                        </a>
                                    </div>
                                    <div>
                                        <h6 class=" fw-medium"><a href="{{url('student-details')}}">Adrian Dennis</a></h6>
                                        <p class="mb-0">Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item flex-fill">
                            <div class="review-item">
                                <div class="rating">
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                    <span><i class="ti ti-star-filled selected"></i></span>
                                </div>
                                <h5 class="title">"Transformed My Career"</h5>
                                <p>As an employer, the platform exceeded my expectations. We swiftly found top-tier talent for our company.</p>
                                <div class="d-flex align-items-center review-user">
                                    <div class="me-2">
                                        <a href="{{url('student-details')}}">
                                            <img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="img" class="img-fluid">
                                        </a>
                                    </div>
                                    <div>
                                        <h6 class=" fw-medium"><a href="{{url('student-details')}}">Brenda Slaton</a></h6>
                                        <p class="mb-0">Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="img-section">
                        <img src="{{URL::asset('build/img/feature/feature-23.jpg')}}" alt="img" class="img-fluid about-img aos" data-aos="zoom-in">
                        <div class="enrolled-list-cover d-none d-xl-flex aos" data-aos="fade-down">
                            <div class="enrolled-list">
                                <div class="avatar-list-stacked">
                                    <span class="avatar avatar-rounded">
                                        <img class="border border-white" src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-rounded">
                                        <img class="border border-white" src="{{URL::asset('build/img/user/user-35.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-rounded">
                                        <img class="border border-white" src="{{URL::asset('build/img/user/user-09.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-rounded">
                                        <img class="border border-white" src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-rounded">
                                        <img src="{{URL::asset('build/img/user/user-36.jpg')}}" alt="img">
                                    </span>
                                </div>
                                <p class="mb-0 text-light fw-bold text-center"><span class="text-secondary">200+ </span>Reviews</p>
                            </div>
                        </div>
                        <img src="{{URL::asset('build/img/bg/arrow.png')}}" alt="img" class="img-fluid arrow d-none d-xl-flex">
                    </div>
                </div>
            </div>
        </div>
        <div class="apply-role-section">
            <div class="row row-gap-4">
                <div class="col-md-6">
                    <div class="role-item aos" data-aos="fade-right">
                        <div class="row">
                            <div class="col-xl-6">
                                <h5 class="mb-2">Become an Instructor</h5>
                                <p class="mb-4">Top global instructors teach millions of students on Mentoring.</p>
                                <a href="{{url('become-an-instructor')}}" class="btn btn-primary rounded-pill d-inline-flex align-items-center">Apply Now<i class="isax isax-arrow-right-3 ms-2"></i></a>
                            </div>
                            <div>
                                <img src="{{URL::asset('build/img/instructor/instructor.png')}}" alt="img" class="img-fluid role-img d-none d-xl-flex">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="role-item student-bg aos" data-aos="fade-up">
                        <div class="row">
                            <div class="col-xl-6">
                                <h5 class="mb-2">Become a Student</h5>
                                <p class="mb-4">Start your educational journey with us and access a wealth of resources</p>
                                <a href="{{url('student-list')}}" class="btn btn-secondary rounded-pill d-inline-flex align-items-center">Enroll Now<i class="isax isax-arrow-right-3 ms-2"></i></a>
                            </div>
                            <div>
                                <img src="{{URL::asset('build/img/students/student.png')}}" alt="img" class="img-fluid role-img d-none d-xl-flex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
        <img src="{{URL::asset('build/img/bg/about-bg-01.png')}}" alt="img" class="img-fluid about-bg-01 d-none d-xl-flex">
        <img src="{{URL::asset('build/img/bg/about-bg-02.png')}}" alt="img" class="img-fluid about-bg-02 d-none d-xl-flex">
    </div>
  </div>
 <!-- /about us -->

    <!-- faq -->
    <section class="faq-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pe-md-5">
                    <div class="position-relative">
                        <img class="img-fluid rounded-4" src="{{URL::asset('build/img/about/about-1.jpg')}}" alt="img">
                        <div class="bg-warning text-center p-3 rounded-5 position-absolute top-0 end-0 z-index-1 d-none d-sm-block my-3 mx-3">
                            <i class="isax isax-message-question5 heading-color fs-46"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-header">
                        <span class="fw-medium text-secondary mb-2 d-inline-block section-badge">FAQs</span>
                        <h2>Frequently Asked Questions</h2>
                        <p>Explore detailed answers to the most common questions about our platform.</p>
                    </div>
                    <div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
                        <div class="accordion-item" data-aos="fade-up">
                            <h2 class="accordion-header" id="headingcustomicon1One">
                                <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1One" aria-expanded="true" aria-controls="collapsecustomicon1One">
                                 What’s DreamLMS want to give you? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                                </a>
                            </h2>
                            <div id="collapsecustomicon1One" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example">
                                <div class="accordion-body pt-0">
                                 <p>DreamLMS aims to provide you with a comprehensive and intuitive learning platform that enhances your educational experience.</p>                                     
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
                            <h2 class="accordion-header" id="headingcustomicon1Two">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                Why choose us for your education? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Two" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Two" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>DreamLMS aims to provide you with a comprehensive and intuitive learning platform that enhances your educational experience.</p>                                     
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
                            <h2 class="accordion-header" id="headingcustomicon1Three">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three" aria-expanded="false" aria-controls="collapsecustomicon1One">
                            How We Provide Service For you? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Three" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Three" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>DreamLMS aims to provide you with a comprehensive and intuitive learning platform that enhances your educational experience.</p>                                     
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
                            <h2 class="accordion-header" id="headingcustomicon1Four">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Four" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                Do you have a monthly plan? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Four" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Four" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>DreamLMS aims to provide you with a comprehensive and intuitive learning platform that enhances your educational experience.</p>                                     
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
                            <h2 class="accordion-header" id="headingcustomicon1Five">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Five" aria-expanded="false" aria-controls="collapsecustomicon1One">
                            Are you Affordable For Your Course <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Five" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Five" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>DreamLMS aims to provide you with a comprehensive and intuitive learning platform that enhances your educational experience.</p>                                     
                            </div>
                            </div>
                        </div>
                                                     
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- faq -->

 <!-- blog section -->
<div class="blog-section position-relative">
    <div class="container">
        <div class="section-header text-center aos" data-aos="fade-up">
            <span class="section-badge">
                Blog
            </span>
            <h2>Latest Articles & News</h2>
            <p>Explore curated content to enlighten, entertain and engage global readers.</p>
        </div>
        <div class="row row-gap-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
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
                                <p class="mb-0 d-flex align-items-center">by <a href="javascript:void(0);" class="fw-medium ms-1">Reni Sarow</a></p>
                            </div>
                            <p class="d-flex align-items-center"><i class="isax isax-calendar-1 text-gray-7"></i>09 Aug 2025</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
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
                                <p class="mb-0 d-flex align-items-center">by <a href="javascript:void(0);" class="fw-medium ms-1">Chris Daniel</a></p>
                            </div>
                            <p class="d-flex align-items-center"><i class="isax isax-calendar-1 text-gray-72"></i>15 Jul 2025</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
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
                                <p class="mb-0 d-flex align-items-center">by <a href="javascript:void(0);" class="fw-medium ms-1">Andrew</a></p>
                            </div>
                            <p class="d-flex align-items-center"><i class="isax isax-calendar-1 text-gray-7"></i>15 Jan 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>         
        <img src="{{URL::asset('build/img/bg/feature-bg-02.png')}}" alt="img" class="img-fluid blog-bg-01">
    </div>
  </div>
 <!-- /blog section -->

@endsection
