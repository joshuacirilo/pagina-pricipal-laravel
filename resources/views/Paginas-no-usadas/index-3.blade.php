<?php $page = 'index-3'; ?>
@extends('layout.mainlayout')
@section('content')

    <!-- Home Banner -->
    <section class="banner-section-three d-flex align-items-center">
        <img src="{{URL::asset('build/img/bg/bg-3.png')}}" alt="img" class="img-fluid banner-bg-01">
        <img src="{{URL::asset('build/img/bg/bg-4.png')}}" alt="img" class="img-fluid banner-bg-02">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="home-slide-face aos" data-aos="fade-up">
                        <div class="home-slide-text ">
                            <span class="fw-bold text-uppercase">The Leader in Online Learning</span>
                            <h1 class="mt-4">Engaging &  Accessible <span class="text-secondary">Online Courses</span> For All</h1>
                            <p class="mt-4">Our specialized online courses are designed to bring the classroom experience to you, no matter where you are.</p>
                        </div>
                        <div class="banner-content">
                            <form class="form"  action="{{url('course-list')}}">            
                                <div class="form-inner">
                                    <div class="input-group">
                                        <i class="fa-solid fa-magnifying-glass search-icon"></i>
                                        <input type="email" class="form-control" placeholder="Search School, Online eductional centers, etc">
                                        <span class="drop-detail">
                                            <select class="form-select select">
                                                <option>Category</option>
                                                <option>Angular</option>
                                                <option>Node Js</option>
                                                <option>React</option>
                                                <option>Python</option>
                                            </select>
                                        </span>
                                        <button class="btn sub-btn" type="submit"><i class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="trust-user">
                            <h5>Trusted by over 15K Users worldwide since 2022</h5>
                            <div class="trust-rating d-flex align-items-center">
                                <div class="rate-head">
                                    <h2><span>1000</span>+</h2>
                                </div>
                                <div class="rating d-flex align-items-center">	
                                    <h2 class="d-inline-block average-rating">4.4</h2>	
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="banner-image aos" data-aos="fade-up">
                        <img src="{{URL::asset('build/img/hero/hero-2.png')}}" alt="Img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <div class="section student-course">
        <div class="container">
            <div class="course-widget">
                <div class="row row-gap-4">
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="expert-item flex-fill aos" data-aos="fade-up">
                            <div class="expert-img">
                                <img src="{{URL::asset('build/img/icons/icon-24.svg')}}" alt="Img">
                            </div>
                            <div class="expert-content">
                                <h4><span class="counterup">10</span>K</h4>
                                <p>Online Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="expert-item flex-fill aos" data-aos="fade-up">
                            <div class="expert-img">
                                <img src="{{URL::asset('build/img/icons/icon-25.svg')}}" alt="Img">
                            </div>
                            <div class="expert-content">
                                <h4><span class="counterup">200</span>K</h4>
                                <p>Expert Tutors</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="expert-item flex-fill aos" data-aos="fade-up">
                            <div class="expert-img">
                                <img src="{{URL::asset('build/img/icons/icon-26.svg')}}" alt="Img">
                            </div>
                            <div class="expert-content">
                                <h4><span class="counterup">6</span>K</h4>
                                <p>Ceritified Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="expert-item flex-fill aos" data-aos="fade-up">
                            <div class="expert-img">
                                <img src="{{URL::asset('build/img/icons/icon-27.svg')}}" alt="Img">
                            </div>
                            <div class="expert-content">
                                <h4><span class="counterup">60</span>K</h4>
                                <p>Online Students</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Banner -->

    <!-- Top Categories -->
    <div class="section how-it-works">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 aos" data-aos="fade-up">
                <div class="section-header">
                    <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">Favourite Course</span>
                    <h2 class="mb-0">Top Category</h2>
                </div>
                <div>
                    <a href="{{url('course-category-2')}}" class="btn btn-secondary btn-xl">View all Categories</a>
                </div>
            </div>
            <div class="mentoring-course aos" data-aos="fade-up">
                <div class="categories-item categories-item-two">			
                    <span class="categories-icon">
                        <img src="{{URL::asset('build/img/category/icons/icon-1.svg')}}" alt="Img">
                    </span>		
                    <h5><a href="{{url('course-category')}}">Angular Development</a></h5>
                    <p>40 Instructors</p>
                </div>
                <div class="categories-item categories-item-two">			
                    <span class="categories-icon">
                        <img src="{{URL::asset('build/img/category/icons/icon-2.svg')}}" alt="Img">
                    </span>		
                    <h5><a href="{{url('course-category')}}">Docker Development</a></h5>
                    <p>45 Instructors</p>
                </div>
                <div class="categories-item categories-item-two">			
                    <span class="categories-icon">
                        <img src="{{URL::asset('build/img/category/icons/icon-3.svg')}}" alt="Img">
                    </span>		
                    <h5><a href="{{url('course-category')}}">Node JS Frontend</a></h5>
                    <p>40 Instructors</p>
                </div>
                <div class="categories-item categories-item-two">			
                    <span class="categories-icon">
                        <img src="{{URL::asset('build/img/category/icons/icon-4.svg')}}" alt="Img">
                    </span>		
                    <h5><a href="{{url('course-category')}}">Swift Development</a></h5>
                    <p>23 Instructors</p>
                </div>
                <div class="categories-item categories-item-two">			
                    <span class="categories-icon">
                        <img src="{{URL::asset('build/img/category/icons/icon-5.png')}}" alt="Img">
                    </span>		
                    <h5><a href="{{url('course-category')}}">React Native</a></h5>
                    <p>80 Instructors</p>
                </div>
            </div>
        </div>
    </div>	
    <!-- /Top Categories -->	

    <!-- Feature Course -->		
    <div class="section new-course">
        <div class="home-three-sec-bg">
            <img src="{{URL::asset('build/img/bg/bg-3.png')}}" alt="img" class="img-fluid sec-bg-01">
            <img src="{{URL::asset('build/img/bg/bg-4.png')}}" alt="img" class="img-fluid sec-bg-02">
        </div>
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 aos" data-aos="fade-up">
                <div class="section-header">
                    <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">What’s New</span>
                    <h2 class="mb-0">Featured Courses</h2>
                </div>
                <div>
                    <a href="{{url('course-list')}}" class="btn btn-secondary btn-xl">View all Categories</a>
                </div>
            </div>
            <div class="course-feature">
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
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-41.jpg')}}">
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
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-42.jpg')}}">
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
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-43.jpg')}}">
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
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-45.jpg')}}">
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
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
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
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
    <!-- /Feature Course -->	

    <!-- Master Skill -->	
    <div class="section master-skill">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-12">
                    <div class="section-header aos" data-aos="fade-up">
                        <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">What’s New</span>
                        <h2>Master the skills to drive your career</h2>
                        <p>Get certified, master modern tech skills, and level up your career — whether you’re starting out or a seasoned pro. 95% of eLearning learners report our hands-on content directly helped their careers.</p>
                    </div>
                    <div class="career-group aos" data-aos="fade-up">
                        <div class="row row-gap-4">
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-item d-flex align-items-center flex-fill">
                                    <div class="certified-img ">
                                        <img src="{{URL::asset('build/img/icons/icon-22.svg')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <p>Stay motivated with engaging instructors</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-item d-flex align-items-center flex-fill">
                                    <div class="certified-img ">
                                        <img src="{{URL::asset('build/img/icons/icon-17.svg')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <p>Keep up with in the latest in cloud</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-item d-flex align-items-center flex-fill">
                                    <div class="certified-img "><img src="{{URL::asset('build/img/icons/icon-23.svg')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <p>Get certified with 100+ certification courses</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-item d-flex align-items-center flex-fill">
                                    <div class="certified-img ">
                                        <img src="{{URL::asset('build/img/icons/icon-16.svg')}}" alt="Img" class="img-fluid">
                                    </div>
                                    <p>Build skills your way, from labs to courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="career-img aos" data-aos="fade-up">
                        <img src="{{URL::asset('build/img/bg/bg-2.png')}}" alt="Img" class="img-fluid master-bg">
                        <img src="{{URL::asset('build/img/feature/feature-16.png')}}" alt="Img" class="img-fluid girl-img">
                        <img src="{{URL::asset('build/img/icons/icon-18.svg')}}" alt="Img" class="img-fluid float-img-01">
                        <img src="{{URL::asset('build/img/icons/icon-19.svg')}}" alt="Img" class="img-fluid float-img-02">
                        <img src="{{URL::asset('build/img/icons/icon-20.svg')}}" alt="Img" class="img-fluid float-img-03">
                        <img src="{{URL::asset('build/img/icons/icon-21.svg')}}" alt="Img" class="img-fluid float-img-04">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Master Skill -->			

    <!-- Trending Course -->
    <div class="section trend-course">
        <div class="home-three-sec-bg">
            <img src="{{URL::asset('build/img/bg/bg-3.png')}}" alt="img" class="img-fluid sec-bg-01">
            <img src="{{URL::asset('build/img/bg/bg-4.png')}}" alt="img" class="img-fluid sec-bg-02">
        </div>
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 aos" data-aos="fade-up">
                <div class="section-header">
                    <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">What’s New</span>
                    <h2 class="mb-0">Trending Courses</h2>
                </div>
                <div>
                    <a href="{{url('course-list')}}" class="btn btn-secondary btn-xl">View all Courses</a>
                </div>
            </div>
            <div class="trending-course owl-theme aos" data-aos="fade-up">
                <div>
                    <div class="course-box trend-box">
                        <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-40.jpg')}}">
                                </a>
                                <div class="price">
                                    <h3>$200 <span>$99.00</span></h3>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="course-user">
                                    <div class="course-user-img">
                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-27.jpg')}}" alt="Img" class="img-fluid"></a>
                                        <div class="course-name">
                                            <h4><a href="{{url('instructor-profile')}}">John Michael</a></h4>
                                            <p>Instructor</p>
                                        </div>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title"><a href="{{url('course-details')}}">Learn JavaScript and Express to become a professional JavaScript</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="course-lesson d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img" class="img-fluid">
                                        <p>13+ Lesson</p>
                                    </div>
                                    <div class="course-time d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-4.svg')}}" alt="Img" class="img-fluid">
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
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="course-box trend-box">
                        <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-41.jpg')}}">
                                </a>
                                <div class="price">
                                    <h3>$300 <span>$99.00</span></h3>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="course-user">
                                    <div class="course-user-img">
                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-22.jpg')}}" alt="Img" class="img-fluid"></a>
                                        <div class="course-name">
                                            <h4><a href="{{url('instructor-profile')}}">John Smith</a></h4>
                                            <p>Instructor</p>
                                        </div>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title"><a href="{{url('course-details')}}">Responsive Web Design Essentials HTML5 CSS3 and Bootstrap</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="course-lesson d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img" class="img-fluid">
                                        <p>10+ Lesson</p>
                                    </div>
                                    <div class="course-time d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-4.svg')}}" alt="Img" class="img-fluid">
                                        <p>11hr 30min</p>
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
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="course-box trend-box">
                        <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-44.jpg')}}">
                                </a>
                                <div class="price">
                                    <h3>$100 <span>$99.00</span></h3>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="course-user">
                                    <div class="course-user-img">
                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-23.jpg')}}" alt="Img" class="img-fluid"></a>
                                        <div class="course-name">
                                            <h4><a href="{{url('instructor-profile')}}">Lavern M.</a></h4>
                                            <p>Instructor</p>
                                        </div>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title"><a href="{{url('course-details')}}">The Complete App Design Course - UX, UI and Design Thinking</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="course-lesson d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img" class="img-fluid">
                                        <p>8+ Lesson</p>
                                    </div>
                                    <div class="course-time d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-4.svg')}}" alt="Img" class="img-fluid">
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
                                        <span class="d-inline-block average-rating"><span>4.3</span> (15)</span>
                                    </div>
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="course-box d-flex aos">
                        <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-42.jpg')}}">
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
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title"><a href="{{url('course-details')}}">Build Responsive Real World Websites with HTML5 and CSS3</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating-img d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img">
                                        <p>13+ Lesson</p>
                                    </div>
                                    <div class="course-view d-flex align-items-center">
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
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="course-box trend-box">
                        <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-44.jpg')}}">
                                </a>
                                <div class="price">
                                    <h3>$300 <span>$99.00</span></h3>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="course-user">
                                    <div class="course-user-img">
                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-22.jpg')}}" alt="Img" class="img-fluid"></a>
                                        <div class="course-name">
                                            <h4><a href="{{url('instructor-profile')}}">John Smith</a></h4>
                                            <p>Instructor</p>
                                        </div>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title"><a href="{{url('course-details')}}">Responsive Web Design Essentials HTML5 CSS3 and Bootstrap</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="course-lesson d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img" class="img-fluid">
                                        <p>10+ Lesson</p>
                                    </div>
                                    <div class="course-time d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-4.svg')}}" alt="Img" class="img-fluid">
                                        <p>11hr 30min</p>
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
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="course-box trend-box">
                        <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-45.jpg')}}">
                                </a>
                                <div class="price">
                                    <h3>$100 <span>$99.00</span></h3>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="course-user">
                                    <div class="course-user-img">
                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-24.jpg')}}" alt="Img" class="img-fluid"></a>
                                        <div class="course-name">
                                            <h4><a href="{{url('instructor-profile')}}">Lavern M.</a></h4>
                                            <p>Instructor</p>
                                        </div>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title"><a href="{{url('course-details')}}">The Complete App Design Course - UX, UI and Design Thinking</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="course-lesson d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img" class="img-fluid">
                                        <p>8+ Lesson</p>
                                    </div>
                                    <div class="course-time d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-4.svg')}}" alt="Img" class="img-fluid">
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
                                        <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                    </div>
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="course-box trend-box">
                        <div class="course-item course-item-three mx-0 flex-fill aos" data-aos="fade-up">
                            <div class="course-img">
                                <a href="{{url('course-details')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-44.jpg')}}">
                                </a>
                                <div class="price">
                                    <h3>$200 <span>$99.00</span></h3>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="course-user">
                                    <div class="course-user-img">
                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-21.jpg')}}" alt="Img" class="img-fluid"></a>
                                        <div class="course-name">
                                            <h4><a href="{{url('instructor-profile')}}">John Michael</a></h4>
                                            <p>Instructor</p>
                                        </div>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title"><a href="{{url('course-details')}}">Learn JavaScript and Express to become a professional JavaScript</a></h3>
                                <div class="course-info d-flex align-items-center">
                                    <div class="course-lesson d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-3.svg')}}" alt="Img" class="img-fluid">
                                        <p>13+ Lesson</p>
                                    </div>
                                    <div class="course-time d-flex align-items-center">
                                        <img src="{{URL::asset('build/img/icons/icon-4.svg')}}" alt="Img" class="img-fluid">
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
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-xl d-inline-flex align-items-center"><i class="isax isax-shopping-cart5 me-2"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Feature Instructors -->
            <div class="feature-instructors">
                <div class="section-header text-center aos" data-aos="fade-up">
                    <h2>Featured Instructor</h2>
                    <p class="mb-0"> Our team combines cutting-edge design with robust development</p>
                </div>
                <div class="instructors-course aos" data-aos="fade-up">
                    <div class="instructor-item instructor-item-two">
                        <div class="instructors-img">
                            <a href="{{url('instructor-list')}}" tabindex="0">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-09.jpg')}}">
                            </a>
                            <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                <span class="verify">
                                    <i class="isax isax-verify5"></i>
                                </span>
                                <a href="{{url('course-list')}}" class="course-count ms-auto">20 Courses</a>
                            </div>
                            <div class="position-absolute end-0 bottom-0 d-flex align-items-start w-100 z-index-2 p-3">
                                <a href="javascript:void(0);" class="favourite selected ms-auto">
                                    <i class="isax isax-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="instructor-content">
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">David Lee</a>
                            </h3>
                            <span class="designation">Web Developer</span>
                            <div class="student-count">
                                <i class="isax isax-profile-2user5 text-secondary me-2"></i><span>50 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructor-item instructor-item-two">
                        <div class="instructors-img">
                            <a href="{{url('instructor-list')}}" tabindex="0">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-10.jpg')}}">
                            </a>
                            <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                <a href="{{url('course-list')}}" class="course-count ms-auto">15 Courses</a>
                            </div>
                            <div class="position-absolute end-0 bottom-0 d-flex align-items-start w-100 z-index-2 p-3">
                                <a href="javascript:void(0);" class="favourite ms-auto">
                                    <i class="isax isax-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="instructor-content">
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Daziy Millar</a>
                            </h3>
                            <span class="designation">PHP Expert</span>
                            <div class="student-count">
                                <i class="isax isax-profile-2user5 text-warning me-2"></i><span>60 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructor-item instructor-item-two">
                        <div class="instructors-img">
                            <a href="{{url('instructor-list')}}" tabindex="0">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-11.jpg')}}">
                            </a>
                            <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                <span class="verify">
                                    <i class="isax isax-verify5"></i>
                                </span>
                                <a href="{{url('course-list')}}" class="course-count ms-auto">22 Courses</a>
                            </div>
                            <div class="position-absolute end-0 bottom-0 d-flex align-items-start w-100 z-index-2 p-3">
                                <a href="javascript:void(0);" class="favourite ms-auto">
                                    <i class="isax isax-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="instructor-content">
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Patricia Mendoza</a>
                            </h3>
                            <span class="designation">Web Developer</span>
                            <div class="student-count">
                                <i class="isax isax-profile-2user5 text-primary me-2"></i><span>40 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructor-item instructor-item-two">
                        <div class="instructors-img">
                            <a href="{{url('instructor-list')}}" tabindex="0">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-12.jpg')}}">
                            </a>
                            <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                <span class="verify">
                                    <i class="isax isax-verify5"></i>
                                </span>
                                <a href="{{url('course-list')}}" class="course-count ms-auto">20 Courses</a>
                            </div>
                            <div class="position-absolute end-0 bottom-0 d-flex align-items-start w-100 z-index-2 p-3">
                                <a href="javascript:void(0);" class="favourite ms-auto">
                                    <i class="isax isax-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="instructor-content">
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Skyler Whites</a>
                            </h3>
                            <span class="designation">UI Designer</span>
                            <div class="student-count">
                                <i class="isax isax-profile-2user5 text-danger me-2"></i><span>50 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructor-item instructor-item-two">
                        <div class="instructors-img">
                            <a href="{{url('instructor-details')}}" tabindex="0">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/instructor/instructor-10.jpg')}}">
                            </a>
                            <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                <a href="{{url('course-list')}}" class="course-count ms-auto">15 Courses</a>
                            </div>
                            <div class="position-absolute end-0 bottom-0 d-flex align-items-start w-100 z-index-2 p-3">
                                <a href="javascript:void(0);" class="favourite ms-auto">
                                    <i class="isax isax-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="instructor-content">
                            <h3 class="title">
                                <a href="{{url('instructor-details')}}">Patricia Mendoza</a>
                            </h3>
                            <span class="designation">Web Developer</span>
                            <div class="student-count">
                                <i class="isax isax-profile-2user5 text-pink me-2"></i><span>50 Students</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Feature Instructors -->
            
        </div>
    </div>
    <!-- /Trending Course -->

    <!-- Leading Companies -->
    <div class="section lead-companies">
        <div class="container">
            <div class="section-header text-center aos" data-aos="fade-up">
                <span class="fw-medium text-secondary fs-18 fw-bold mb-2 d-inline-block">Trusted By</span>
                <h2 class="mb-0">500+ Leading Universities And Companies</h2>
            </div>
            <div class="lead-group aos" data-aos="fade-up">
                <div class="lead-group-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/22.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/23.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/24.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/25.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/26.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/27.svg')}}">
                        </div>
                    </div>							
                </div>
            </div>
        </div>
    </div>
    <!-- /Leading Companies -->

    <!-- Share Knowledge -->
    <div class="section share-knowledge">
        <div class="home-three-sec-bg">
            <img src="{{URL::asset('build/img/bg/bg-3.png')}}" alt="img" class="img-fluid sec-bg-01">
            <img src="{{URL::asset('build/img/bg/bg-4.png')}}" alt="img" class="img-fluid sec-bg-02">
        </div>
        <div class="container">
            <div class="row align-items-center row-gap-4">
                <div class="col-md-6">
                    <div class="knowledge-img aos" data-aos="fade-up">
                        <img src="{{URL::asset('build/img/feature/feature-17.svg')}}" alt="Img" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center"> 
                    <div class="join-mentor aos" data-aos="fade-up">
                        <h2>Want to share your knowledge? Join us a Mentor</h2>
                        <p>High-definition video is video of higher resolution and quality than standard-definition. While there is no standardized meaning for high-definition, generally any video.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="d-flex mb-3">
                                <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Access Your Class anywhere
                            </li>
                            <li class="d-flex mb-3">
                                <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Flexible Course Plan
                            </li>
                            <li class="d-flex mb-3">
                                <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Quality Assurance
                            </li>
                            <li class="d-flex mb-3">
                                <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Cost Effectiveness
                            </li>
                            <li class="d-flex mb-3">
                                <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>The Most World Class Instructors
                            </li>
                        </ul>
                        <div>
                            <a href="{{url('instructor-list')}}" class="btn btn-secondary btn-xl">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Share Knowledge -->

    <!-- Say testimonial Four -->
    <div class="testimonial-four">
        <div class="review">
            <div class="container">
                <div class="section-header text-center aos" data-aos="fade-up">
                    <span class="fw-medium text-white fs-18 fw-bold mb-2 d-inline-block">Check out these real reviews</span>
                    <h2 class="text-white mb-0">Users-love-us Don't take it from us.</h2>
                </div>
                <div class="mentor-testimonial lazy slider aos" data-aos="fade-up" data-sizes="50vw ">
                    <div class="d-flex justify-content-center">
                        <div class="testimonial-all">
                            <div class="testimonial-quotes">
                                <img src="{{URL::asset('build/img/icons/icon-28.png')}}" alt="Img" >
                            </div>
                            <div class="testimonial-content text-center align-items-center d-flex">
                                <div class="testimonial-info ">
                                    <div class="testimonial-icon">
                                        <img src="{{URL::asset('build/img/icons/icon-29.png')}}" alt="Img">
                                    </div>
                                    <p>I really appreciated my mentor’s insight, but sometimes I felt overwhelmed by the amount of information they provided. It would have been helpful to focus on one or two areas at a time rather than trying to cover everything.</p>
                                    <div class="testimonial-user">
                                        <div class="user-img">
                                            <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-21.jpg')}}" alt="Img" class="img-fluid"></a>
                                        </div>
                                        <h6><a href="{{url('instructor-profile')}}">Daziy Millar</a></h6>
                                        <span>Founder of Awesomeux Technology</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="testimonial-all">
                            <div class="testimonial-quotes">
                                <img src="{{URL::asset('build/img/icons/icon-28.png')}}" alt="Img" >
                            </div>
                            <div class="testimonial-content text-center align-items-center d-flex">
                                <div class="testimonial-info ">
                                    <div class="testimonial-icon">
                                        <img src="{{URL::asset('build/img/icons/icon-29.png')}}" alt="Img">
                                    </div>
                                    <p>I really appreciated my mentor’s insight, but sometimes I felt overwhelmed by the amount of information they provided. It would have been helpful to focus on one or two areas at a time rather than trying to cover everything.</p>
                                    <div class="testimonial-user">
                                        <div class="user-img">
                                            <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-23.jpg')}}" alt="Img" class="img-fluid"></a>
                                        </div>
                                        <h6><a href="{{url('instructor-profile')}}">john smith</a></h6>
                                        <span>Founder of Awesomeux Technology</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="testimonial-all">
                            <div class="testimonial-quotes">
                                <img src="{{URL::asset('build/img/icons/icon-28.png')}}" alt="Img" >
                            </div>
                            <div class="testimonial-content text-center align-items-center d-flex">
                                <div class="testimonial-info ">
                                    <div class="testimonial-icon">
                                        <img src="{{URL::asset('build/img/icons/icon-29.png')}}" alt="Img">
                                    </div>
                                    <p>I really appreciated my mentor’s insight, but sometimes I felt overwhelmed by the amount of information they provided. It would have been helpful to focus on one or two areas at a time rather than trying to cover everything.</p>
                                    <div class="testimonial-user">
                                        <div class="user-img">
                                            <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/avatar/avatar-22.jpg')}}" alt="Img" class="img-fluid"></a>
                                        </div>
                                        <h6><a href="{{url('instructor-profile')}}">David Lee</a></h6>
                                        <span>Founder of Awesomeux Technology</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Say testimonial Four -->

    <!-- Become An Instructor -->
    <div class="section become-instructors aos" data-aos="fade-up">
        <img src="{{URL::asset('build/img/bg/bg-5.png')}}" alt="" class="img-fluid become-instructors-bg1">
        <img src="{{URL::asset('build/img/bg/bg-6.png')}}" alt="" class="img-fluid become-instructors-bg2">
        <div class="container">
            <div class="row row-gap-3">
                <div class="col-md-6 d-flex">
                    <div class="student-mentor d-flex flex-fill">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-12">
                                <div class="top-instructors">
                                    <h4>Become An Instructor</h4>
                                    <p>Top instructors from around the world teach millions of students on Mentoring.</p>
                                    <a href="{{url('become-an-instructor')}}" class="btn btn-secondary btn-xl">Register as Instructor</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="mentor-img">
                                    <img class="img-fluid d-none d-lg-flex" alt="Img" src="{{URL::asset('build/img/feature/feature-15.svg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="student-mentor bg-dark d-flex flex-fill">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-12">
                                <div class="top-instructors">
                                    <h4>Transform Access To Education</h4>
                                    <p>Create an account to receive our newsletter course promotions.</p>
                                    <a href="{{url('become-an-instructor')}}" class="btn btn-secondary btn-xl">Register as Instructor</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="mentor-img d-none d-lg-flex">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/feature/feature-14.svg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Become An Instructor -->

    <!-- Latest Blog -->
    <div class="section latest-blog">
        <div class="home-three-sec-bg">
            <img src="{{URL::asset('build/img/bg/bg-3.png')}}" alt="img" class="img-fluid sec-bg-01">
            <img src="{{URL::asset('build/img/bg/bg-4.png')}}" alt="img" class="img-fluid sec-bg-02">
        </div>
        <div class="container">
            <div class="section-header text-center aos" data-aos="fade-up">
                <h2>Latest Blogs</h2>
                <p class="mb-0">Dont Miss Stay Updated with the Latest Articles and Insights</p>
            </div>
            <div class="row row-gap-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-wrap shadow-sm mb-0">
                        <div class="blog-img">
                            <a href="{{url('blog-grid')}}">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-40.jpg')}}">
                            </a>
                        </div>
                        <div class="blog-content"> 
                            <div class="blog-info mb-3">
                                <a href="javascript:void(0);" class="blog-category">Marketing</a>
                                <p class="blog-date"><i class="isax isax-calendar-1"></i>May 15, 2020</p>
                            </div>
                            <h5><a href="{{url('blog-grid')}}">How to Find the Perfect Mentor for Your Academic Journey</a></h5>
                        </div>	
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-wrap shadow-sm mb-0">
                        <div class="blog-img">
                            <a href="{{url('blog-grid')}}">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-41.jpg')}}">
                            </a>
                        </div>
                        <div class="blog-content"> 
                            <div class="blog-info mb-3">
                                <a href="javascript:void(0);" class="blog-category">Statistics</a>
                                <p class="blog-date"><i class="isax isax-calendar-1"></i>May 15, 2020</p>
                            </div>
                            <h5><a href="{{url('blog-grid')}}">Unlocking Your Potential in School and Beyond</a></h5>
                        </div>	
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-wrap shadow-sm mb-0">
                        <div class="blog-img">
                            <a href="{{url('blog-grid')}}">
                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-42.jpg')}}">
                            </a>
                        </div>
                        <div class="blog-content"> 
                            <div class="blog-info mb-3">
                                <a href="javascript:void(0);" class="blog-category">Learning</a>
                                <p class="blog-date"><i class="isax isax-calendar-1"></i>May 15, 2020</p>
                            </div>
                            <h5><a href="{{url('blog-grid')}}">11 Tips to Help You Get New Clients with the design knowledge</a></h5>
                        </div>	
                    </div>
                </div>
            </div>
            <div class="enroll-group aos" data-aos="fade-up">
                <div class="row row-gap-3 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="enroll-course d-flex align-items-center">
                            <div class="enroll-img">
                                <img src="{{URL::asset('build/img/icons/icon-5.svg')}}" alt="Img" class="img-fluid">
                            </div>
                            <div class="course-count">
                                <h3><span class="counterUp">3,490</span></h3>
                                <p>Students Enrolled</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="enroll-course d-flex align-items-center">
                            <div class="enroll-img ">
                                <img src="{{URL::asset('build/img/icons/icon-6.svg')}}" alt="Img" class="img-fluid">
                            </div>
                            <div class="course-count">
                                <h3><span class="counterUp" >255</span></h3>
                                <p>Total Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="enroll-course d-flex align-items-center">
                            <div class="enroll-img ">
                                <img src="{{URL::asset('build/img/icons/icon-7.svg')}}" alt="Img" class="img-fluid">
                            </div>
                            <div class="course-count">
                                <h3><span class="counterUp" >15</span></h3>
                                <p>Countries</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lab-course">
                <div class="client-slider aos" data-aos="fade-up">
                    <div>
                        <img src="{{URL::asset('build/img/icons/icon-8.svg')}}" alt="Img" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{URL::asset('build/img/icons/icon-9.svg')}}" alt="Img" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{URL::asset('build/img/icons/icon-10.svg')}}" alt="Img" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{URL::asset('build/img/icons/icon-11.svg')}}" alt="Img" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{URL::asset('build/img/icons/icon-12.svg')}}" alt="Img" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{URL::asset('build/img/icons/icon-13.svg')}}" alt="Img" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{URL::asset('build/img/icons/icon-14.svg')}}" alt="Img" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{URL::asset('build/img/icons/icon-15.svg')}}" alt="Img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>	
    <!-- /Latest Blog -->

@endsection
