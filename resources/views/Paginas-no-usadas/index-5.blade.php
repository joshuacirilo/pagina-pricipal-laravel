<?php $page = 'index-5'; ?>
@extends('layout.mainlayout')
@section('content')
   
    <!-- Home Banner -->
    <section class="banner-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-md-12 d-flex col-12" data-aos="fade-down">
                    <div class="home-five-slide-face flex-fill">
                        <div class="home-five-slide-text">
                            <span class="text-white d-inline-block bg-secondary small rounded-pill px-3 py-2 mb-3 mb-sm-4"><span class="badge bg-white text-secondary rounded-pill me-1">New</span>The Leader in Online Learning</span>
                            <h1>Engaging <span>&</span>  Accessible Online Courses For All</h1>
                            <p>Our specialized online courses are designed to bring the classroom experience to you, no matter where you are.</p>
                        </div>
                        <div class="banner-three-content">
                            <form class="form" action="{{url('course-list')}}">
                                <div class="form-inner-three">
                                    <div class="input-group justify-content-between">
                                        <div class="d-flex flex-wrap gap-3">
                                            <div class="drop-detail-three">
                                                <select class="form-three-select select">
                                                    <option>Select category</option>
                                                    <option>Angular</option>
                                                    <option>Node Js</option>
                                                    <option>React</option>
                                                    <option>Python</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center banner-search5">
                                                <div class="search-icon5">
                                                    <i class="fa-regular fa-building"></i>
                                                </div>
                                                <input type="email" class="form-control" placeholder="Search for Courses, Instructors">
                                            </div>
                                        </div>
                                        
                                        <button class="btn btn-primary sub-btn" type="submit"><i class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5 col-12 text-center" data-aos="fade-up">
                    <div class="banner-slide-img flex-fill aos">
                        <img class="img-fluid ps-lg-5" src="{{URL::asset('build/img/hero/hero-6.png')}}" alt="Img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->
    
    <!--Online Courses -->
    <section class="section student-course student-course-five">
        <div class="container">
            <div class="course-widget-three">
                <div class="row row-gap-4">
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three course-count ms-0">
                                    <div class="course-img">
                                        <img class="img-fluid" src="{{URL::asset('build/img/icon/course-01.svg')}}" alt="Img">
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-info"><span class="counterUp">10</span>K</h4>
                                        <p>Online Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three course-count ms-0">
                                    <div class="course-img">
                                        <img class="img-fluid" src="{{URL::asset('build/img/icon/course-02.svg')}}" alt="Img">
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-warning"><span class="counterUp">200</span>+</h4>
                                        <p>Expert Tutors</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three course-count ms-0">
                                    <div class="course-img">
                                        <img class="img-fluid" src="{{URL::asset('build/img/icon/course-03.svg')}}" alt="Img">
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-skyblue"><span class="counterUp">6</span>K+</h4>
                                        <p>Ceritified Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>	
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three mb-0">
                            <div class="align-items-center">
                                <div class="course-count-three">
                                    <div class="course-img">
                                        <img class="img-fluid" src="{{URL::asset('build/img/icon/course-04.svg')}}" alt="Img">
                                    </div>
                                    <div class="course-content-three course-count">
                                        <h4 class="text-success"><span class="counterUp">60</span>K +</h4>
                                        <p>Online Students</p> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Online Courses -->
    
    <!-- Master skills Career -->
    <section class="master-skill-three">
        <div class="container">
            <div class="row align-items-center">		
                <div class="col-xl-5 col-lg-6 col-md-12" data-aos="fade-up">
                    <div class="master-three-images">
                        <div class="master-img"> 
                            <img class="img-fluid master-bg1" src="{{URL::asset('build/img/shapes/shape-10.svg')}}" alt="img">
                            <img class="img-fluid master-bg2" src="{{URL::asset('build/img/shapes/shape-7.svg')}}" alt="img">
                            <img class="img-fluid master-skill-image1" src="{{URL::asset('build/img/feature/feature-10.jpg')}}" alt="img">
                            <div class="text-end">
                            <img class="img-fluid master-skill-image2" src="{{URL::asset('build/img/feature/feature-11.jpg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>						
                <div class="col-xl-7 col-lg-6 col-md-12" data-aos="fade-up">
                    <div class="master-skill-content">
                    <div class="home-five-head" data-aos="fade-up">
                        <h2>Master the skills to drive your career</h2>
                    </div>
                    <div class="home-five-content" data-aos="fade-up">
                        <p>Get certified, master modern tech skills, and level up your career whether you’re starting out or a seasoned pro. 95% of eLearning learners report our hands-on content directly helped their careers.</p>
                    </div>
                    <div class="skils-group">
                        <div class="row row-gap-4">
                            <div class="col-lg-6 col-xs-12 col-sm-6" data-aos="fade-down">
                                <div class="skils-icon-item">
                                    <div class="skils-icon">
                                        <img class="img-fluid" src="{{URL::asset('build/img/icon/career-01.svg')}}" alt="certified">
                                    </div>
                                    <div class="skils-content">
                                        <h5 class="mb-2">Certified Courses</h5>
                                        <p class="mb-0">Get certified with 100+ certification courses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-6" data-aos="fade-up">
                                <div class="skils-icon-item">
                                    <div class="skils-icon">
                                        <img class="img-fluid" src="{{URL::asset('build/img/icon/career-02.svg')}}" alt="Build skills">
                                    </div>
                                    <div class="skils-content">
                                        <h5 class="mb-2">Skill Building</h5>
                                        <p class="mb-0">Build skills your way, from labs to courses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-6" data-aos="fade-up">
                                <div class="skils-icon-item">
                                    <div class="skils-icon">
                                        <img class="img-fluid" src="{{URL::asset('build/img/icon/career-03.svg')}}" alt="Stay Motivated">
                                    </div>
                                    <div class="skils-content">
                                        <h5 class="mb-2">Stay Inspired</h5>
                                        <p class="mb-0">Stay motivated with engaging instructors</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-6" data-aos="fade-up">
                                <div class="skils-icon-item">
                                    <div class="skils-icon">
                                        <img class="img-fluid" src="{{URL::asset('build/img/icon/career-04.svg')}}" alt="latest cloud">
                                    </div>
                                    <div class="skils-content">
                                        <h5 class="mb-2">Keep Upgrade</h5>
                                        <p class="mb-0">Keep up with the latest in cloud</p>
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
    <!-- /Master skills Career -->
    
    <!-- Favourite Course -->
    <section class="home-five-favourite">
        <div class="container">
            <div class="category-sec">
                <div class="row">
                    <div class="container">
                        <div class="home-five-head section-header-title" data-aos="fade-up">
                            <div class="row align-items-center d-flex justify-content-between row-gap-4">
                                <div class="col-md-8 col-sm-12">
                                    <h2>Choose favourite Course from top Category</h2>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="see-all text-end">											
                                        <a href="{{url('course-details')}}">View All<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="favourite-carousel">
                            <div class="categories-item categories-item-five" data-aos="fade-down">					
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{URL::asset('build/img/icon/favourite-01.svg')}}" alt="Angular Development">
                                </div>
                                <div class="category-info">
                                    <h3><a href="{{url('course-category')}}">Angular Development</a></h3>
                                </div>
                                <div class="instructors-info">
                                    <p class="me-4">Instructors</p>
                                    <ul class="instructors-list">
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 1"><img src="{{URL::asset('build/img/user/user-13.jpg')}}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 2"><img src="{{URL::asset('build/img/user/user-14.jpg')}}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 3"><img src="{{URL::asset('build/img/user/user-15.jpg')}}" alt="img"></a>
                                        </li>
                                        <li class="more-set">
                                            <a href="#">80+</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="categories-item categories-item-five" data-aos="fade-down">					
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{URL::asset('build/img/icon/favourite-02.svg')}}" alt="Angular Development">
                                </div>
                                <div class="category-info">
                                    <h3><a href="{{url('course-category')}}">Pyhton Developmentt</a></h3>
                                </div>
                                <div class="instructors-info">
                                    <p class="me-4">Instructors</p>
                                    <ul class="instructors-list">
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 1"><img src="{{URL::asset('build/img/user/user-10.jpg')}}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 2"><img src="{{URL::asset('build/img/user/user-11.jpg')}}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 3"><img src="{{URL::asset('build/img/user/user-12.jpg')}}" alt="img"></a>
                                        </li>
                                        <li class="more-set">
                                            <a href="#">80+</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="categories-item categories-item-five" data-aos="fade-down">							
                                <div class="favourite-item flex-fill">
                                    <div class="categories-icon">
                                        <img class="img-fluid" src="{{URL::asset('build/img/icon/favourite-03.svg')}}" alt="NODE JS Development">
                                    </div>
                                    <div class="category-info">
                                        <h3><a href="{{url('course-category')}}">NODE JS Development</a></h3>
                                    </div>
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 1"><img src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 2"><img src="{{URL::asset('build/img/user/user-08.jpg')}}" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 3"><img src="{{URL::asset('build/img/user/user-09.jpg')}}" alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="categories-item categories-item-five" data-aos="fade-down">							
                                <div class="favourite-item flex-fill">
                                    <div class="categories-icon">
                                        <img class="img-fluid" src="{{URL::asset('build/img/icon/favourite-04.svg')}}" alt="NODE JS Development">
                                    </div>
                                    <div class="category-info">
                                        <h3><a href="{{url('course-category')}}">Corephp Development</a></h3>
                                    </div>
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 1"><img src="{{URL::asset('build/img/user/user-04.jpg')}}" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 2"><img src="{{URL::asset('build/img/user/user-05.jpg')}}" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 3"><img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="categories-item categories-item-five" data-aos="fade-down">								
                                <div class="favourite-item flex-fill">
                                    <div class="categories-icon">
                                        <img class="img-fluid" src="{{URL::asset('build/img/icon/favourite-05.svg')}}" alt="Angular Development">
                                    </div>
                                    <div class="category-info">
                                        <h3><a href="{{url('course-category')}}">Laravel Development</a></h3>
                                    </div>
                                    <div class="instructors-info">
                                        <p class="me-4">Instructors</p>
                                        <ul class="instructors-list">
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 1"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 2"><img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 3"><img src="{{URL::asset('build/img/user/user-03.jpg')}}" alt="img"></a>
                                            </li>
                                            <li class="more-set">
                                                <a href="#">80+</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="categories-item categories-item-five" data-aos="fade-down">								
                                <div class="categories-icon">
                                    <img class="img-fluid" src="{{URL::asset('build/img/icon/favourite-01.svg')}}" alt="Angular Development">
                                </div>
                                <div class="category-info">
                                    <h3><a href="{{url('course-category')}}">Angular Development</a></h3>
                                </div>
                                <div class="instructors-info">
                                    <p class="me-4">Instructors</p>
                                    <ul class="instructors-list">
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 1"><img src="{{URL::asset('build/img/user/user-13.jpg')}}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 2"><img src="{{URL::asset('build/img/user/user-14.jpg')}}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 3"><img src="{{URL::asset('build/img/user/user-15.jpg')}}" alt="img"></a>
                                        </li>
                                        <li class="more-set">
                                            <a href="#">80+</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Favourite Course -->
        </div>
    </section>			
    <!-- Feature Course -->	
    
    <!-- Courses -->
    <section class="home-five-courses">
        <div class="container">
            <div class="favourite-course-sec">
                <div class="row">
                    <div class="home-five-head section-header-title" data-aos="fade-up"> 
                        <div class="row align-items-center d-flex justify-content-between row-gap-4">
                            <div class="col-md-6">
                                <h2>Featured Courses</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="see-all text-end">											
                                    <a href="{{url('course-grid')}}">View All<i class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="all-corses-main">
                        <div class="tab-content">
                            <div class="nav tablist-three" role="tablist">										
                                <a class="nav-tab active me-3" data-bs-toggle="tab" href="#alltab" role="tab">All</a>				
                                <a class="nav-tab me-3" data-bs-toggle="tab" href="#mostpopulartab" role="tab">Most popular</a>

                                <a class="nav-tab me-3" data-bs-toggle="tab" href="#businesstab" role="tab">Business</a>

                                <a class="nav-tab me-3" data-bs-toggle="tab" href="#designtab" role="tab">Design</a>

                                <a class="nav-tab me-3" data-bs-toggle="tab" href="#designtab" role="tab">Music</a>

                                <a class="nav-tab me-3" data-bs-toggle="tab" href="#programmingtab" role="tab">Programming</a>

                                <a class="nav-tab me-3" data-bs-toggle="tab" href="#databasetab" role="tab">Database</a>
                                
                            </div>
        
                            <div class="tab-content">

                                <!-- All -->
                                <div class="tab-pane fade active show" id="alltab" role="tabpanel">
                                    <div class="all-course">
                                        <div class="row">


                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-item course-item-five">
                                                    <div class="course-img">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/course/course-35.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="course-content">
                                                        <div class="course-user-img">
                                                            <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        </div>
                                                        <div class="course-three-text">
                                                            <p>Pyhton Development</p>
                                                            <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Web Developer PHP Course</a></h3>
                                                        </div>
                                                        <div class="student-counts-info d-flex align-items-center">
                                                            <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                            <p class="ms-2">500 Students</p>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="course-price">
                                                                <h3>$650 <span>$99.00</span></h3>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i class="fa-regular fa-clock me-2"></i>
                                                                <span>6hr 30min</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-item course-item-five">
                                                    <div class="course-img">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/course/course-34.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="course-content">
                                                        <div class="course-user-img">
                                                            <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        </div>
                                                        <div class="course-three-text">
                                                            <p>Web Design</p>
                                                            <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                        </div>
                                                        <div class="student-counts-info d-flex align-items-center">
                                                            <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                            <p class="ms-2">450 Students</p>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="course-price">
                                                                <h3>$650 <span>$99.00</span></h3>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i class="fa-regular fa-clock me-2"></i>
                                                                <span>6hr 30min</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-item course-item-five">
                                                    <div class="course-img">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/course/course-28.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="course-content">
                                                        <div class="course-user-img">
                                                            <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-03.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        </div>
                                                        <div class="course-three-text">
                                                            <p>Business Management</p>
                                                            <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Business Management Course</a></h3>
                                                        </div>
                                                        <div class="student-counts-info d-flex align-items-center">
                                                            <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                            <p class="ms-2">400 Students</p>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="course-price">
                                                                <h3>$300 <span> $99.00</span></h3>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i class="fa-regular fa-clock me-2"></i>
                                                                <span>6hr 30min</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-item course-item-five">
                                                    <div class="course-img">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/course/course-29.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="course-content">
                                                        <div class="course-user-img">
                                                            <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-04.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        </div>
                                                        <div class="course-three-text">
                                                            <p>Creative Arts & media</p>
                                                            <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Creative Arts & media Course Completed</a></h3>
                                                        </div>
                                                        <div class="student-counts-info d-flex align-items-center">
                                                            <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                            <p class="ms-2">250 Students</p>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="course-price">
                                                                <h3>$700 <span> $99.00</span></h3>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i class="fa-regular fa-clock me-2"></i>
                                                                <span>6hr 30min</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-item course-item-five">
                                                    <div class="course-img">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/course/course-30.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="course-content">
                                                        <div class="course-user-img">
                                                            <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-05.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        </div>
                                                        <div class="course-three-text">
                                                            <p>Personalized Learning</p>
                                                            <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                        </div>
                                                        <div class="student-counts-info d-flex align-items-center">
                                                            <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                            <p class="ms-2">400 Students</p>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="course-price">
                                                                <h3>$650 <span> $99.00</span></h3>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i class="fa-regular fa-clock me-2"></i>
                                                                <span>6hr 30min</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-item course-item-five">
                                                    <div class="course-img">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/course/course-31.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="course-content">
                                                        <div class="course-user-img">
                                                            <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        </div>
                                                        <div class="course-three-text">
                                                            <p>Pyhton Development</p>
                                                            <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Pyhton Development Course</a></h3>
                                                        </div>
                                                        <div class="student-counts-info d-flex align-items-center">
                                                            <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                            <p class="ms-2">400 Students</p>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="course-price">
                                                                <h3>$650 <span> $99.00</span></h3>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i class="fa-regular fa-clock me-2"></i>
                                                                <span>6hr 30min</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-item course-item-five">
                                                    <div class="course-img">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/course/course-32.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="course-content">
                                                        <div class="course-user-img">
                                                            <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        </div>
                                                        <div class="course-three-text">
                                                            <p>Business Management</p>
                                                            <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Websites with HTML5 CSS3 Javascript</a></h3>
                                                        </div>
                                                        <div class="student-counts-info d-flex align-items-center">
                                                            <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                            <p class="ms-2">400 Students</p>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="course-price">
                                                                <h3>$650 <span> $99.00</span></h3>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i class="fa-regular fa-clock me-2"></i>
                                                                <span>6hr 30min</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-item course-item-five">
                                                    <div class="course-img">
                                                        <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/course/course-33.jpg')}}" alt="Img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="course-content">
                                                        <div class="course-user-img">
                                                            <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-08.jpg')}}" alt="Img" class="img-fluid"></a>
                                                        </div>
                                                        <div class="course-three-text">
                                                            <p>Creative Arts & media</p>
                                                            <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                        </div>
                                                        <div class="student-counts-info d-flex align-items-center">
                                                            <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                            <p class="ms-2">300 Students</p>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="course-price">
                                                                <h3>$550 <span> $99.00</span></h3>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i class="fa-regular fa-clock me-2"></i>
                                                                <span>6hr 30min</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /All -->
        
                                <!-- Most popular -->
                                <div class="tab-pane fade" id="mostpopulartab" >
                                    <div class="all-course">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-34.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">																		
                                                                    <p>Web Design</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                            
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-35.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Pyhton Development</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Web Developer PHP Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-28.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-03.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Business Management Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-29.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-04.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Creative Arts & media Course Completed</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-30.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-05.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-31.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Pyhton Development</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Pyhton Development Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-32.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Websites with HTML5 CSS3 Javascript</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-33.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-08.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">																		
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Most popular -->
                                
                                <!-- Business -->
                                <div class="tab-pane fade" id="businesstab">
                                    <div class="all-course">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-34.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">																		
                                                                    <p>Web Design</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                            
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-35.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Pyhton Development</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Web Developer PHP Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-28.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-03.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Business Management Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-29.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-04.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Creative Arts & media Course Completed</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-30.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-05.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-31.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Pyhton Development</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Pyhton Development Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-32.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Websites with HTML5 CSS3 Javascript</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-33.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-08.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">																		
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Business -->

                                <!-- Design -->
                                <div class="tab-pane fade" id="designtab">
                                    <div class="all-course">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-34.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">																		
                                                                    <p>Web Design</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                            
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-35.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Pyhton Development</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Web Developer PHP Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-28.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-03.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Business Management Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-29.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-04.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Creative Arts & media Course Completed</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-30.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-05.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-31.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Pyhton Development</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Pyhton Development Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-32.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Websites with HTML5 CSS3 Javascript</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-33.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-08.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">																		
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Design -->
        
                                <!-- Music -->
                                <div class="tab-pane fade" id="musictab">
                                    <div class="all-course">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-34.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">																		
                                                                    <p>Web Design</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                            
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-35.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Pyhton Development</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Web Developer PHP Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-28.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-03.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Business Management Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-29.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-04.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Creative Arts & media Course Completed</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-30.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-05.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-31.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Pyhton Development</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Pyhton Development Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-32.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Websites with HTML5 CSS3 Javascript</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-33.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-08.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">																		
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Music -->
                                
                                <!-- Programmiing -->
                                <div class="tab-pane fade" id="programmingtab">
                                    <div class="all-course">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-34.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">																		
                                                                    <p>Web Design</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                            
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-35.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Pyhton Development</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Web Developer PHP Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-28.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-03.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Business Management Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-29.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-04.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Creative Arts & media Course Completed</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-30.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-05.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-31.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Pyhton Development</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Pyhton Development Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-32.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Websites with HTML5 CSS3 Javascript</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-33.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-08.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">																		
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Programmiing -->

                                <!-- Database -->
                                <div class="tab-pane fade" id="databasetab">
                                    <div class="all-course">
                                        <div class="row">

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-34.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">																		
                                                                    <p>Web Design</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                            
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>450 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-35.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Pyhton Development</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Web Developer PHP Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>500 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-28.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-03.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Business Management Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-29.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-04.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Creative Arts & media Course Completed</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>250 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$700 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-30.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-05.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Personalized Learning</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-31.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Pyhton Development</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Pyhton Development Course</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>Free </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-32.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">
                                                                    <p>Business Management</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Websites with HTML5 CSS3 Javascript</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$650 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                            <!-- Col -->
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                <div class="course-box-three">
                                                    <div class="course-three-item">
                                                        <div class="course-three-img">
                                                            <a href="{{url('course-details')}}">
                                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/course/course-33.jpg')}}">
                                                            </a>													
                                                            <div class="heart-three">
                                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="course-three-content">	
                                                            <div class="course-group-three">
                                                                <div class="group-three-img">
                                                                    <a href="{{url('instructor-profile')}}"><img src="{{URL::asset('build/img/user/user-08.jpg')}}" alt="Img" class="img-fluid"></a>
                                                                </div>
                                                            </div>

                                                            <div class="course-three-text">																		
                                                                    <p>Creative Arts & media</p>
                                                                    <h3 class="title instructor-text"><a href="{{url('course-details')}}">Build Responsive Websites with HTML</a></h3>
                                                                
                                                            </div>
                                                            
                                                            <div class="student-counts-info d-flex align-items-center">
                                                                <div class="students-three-counts d-flex align-items-center">
                                                                    <img src="{{URL::asset('build/img/icon/student.svg')}}" alt="Img">
                                                                    <p>400 Students</p>
                                                                </div>
                                                            </div>
                    
                                                            <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                <div class="price-three-view d-flex align-items-center">
                                                                    <div class="course-price-three">
                                                                        <h3>$300 <span>$99.00</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-time d-inline-flex align-items-center">
                                                                    <i class="fa-regular fa-clock me-2"></i>
                                                                    <span>6hr 30min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Col -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Database -->

                            </div>
                            <div class="text-center mt-3">
                                <a href="{{url('course-grid')}}" class="btn btn-secondary">View all Courses</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /Courses -->	
    
    <!-- Call to Action -->
    <section class="home-five-transform">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center row-gap-4">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="cta-content">
                        <h2>Transform Access To Education</h2>
                        <p>Create an account to receive our newsletter, course recommendations and promotions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="transform-button-three">
                        <a href="{{url('course-grid')}}" class="btn btn-secondary">View all Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action -->

    <!-- Acheive you Goals  -->
    <section class="home-five-goals">
        <div class="container">
            <div class="row align-items-center justify-content-center row-gap-4">

                <!-- Col -->
                <div class="col-xl-3 col-lg-12 col-md-12" data-aos="fade-down">
                    <div class="acheive-goals-main">
                        <h2>Acheive you Goals  with DreamsLMS</h2>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="acheive-goals">
                        <div class="acheive-elips-one">
                            <img src="{{URL::asset('build/img/icon/ellipse-1.svg')}}" alt="Img">
                        </div>
                        <div class="acheive-goals-content text-center course-count ms-0">
                            <h4><span class="counterUp">253,085</span></h4>
                            <p>Students Enrolled all over World</p>
                        </div>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="acheive-goals">
                        <div class="acheive-elips-two">
                            <img src="{{URL::asset('build/img/icon/ellipse-2.svg')}}" alt="Img">
                        </div>
                        <div class="acheive-goals-content text-center course-count ms-0">
                            <h4><span class="counterUp">1,205</span></h4>
                            <p>Total Courses on our Platform</p>
                        </div>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="acheive-goals">
                        <div class="acheive-elips-three">
                            <img src="{{URL::asset('build/img/icon/ellipse-3.svg')}}" alt="Img">
                        </div>
                        <div class="acheive-goals-content text-center course-count ms-0">
                            <h4><span class="counterUp">56</span></h4>
                            <p>Various Countries of	Students</p>
                        </div>
                    </div>
                </div>
                <!-- /Col -->

            </div>
        </div>
    </section>
    <!-- /Acheive you Goals  -->				

    <!-- Accelerate cloud -->
    <section class="accelerate-cloud-three">
        <div class="container">
            <div class="shapes-three-left">
                <img class="accelerate-three d-none d-lg-flex" src="{{URL::asset('build/img/shapes/shape-8.png')}}" alt="Img">
                <img class="accelerate-five" src="{{URL::asset('build/img/shapes/shape-9.png')}}" alt="Img">
            </div>
            <div class="section-header-title d-none" data-aos="fade-up">
                <div class="row align-items-center d-flex justify-content-between">
                    <div class="col-lg-5 col-md-12">
                        <div class="home-five-head mb-4">
                            <h2 class="text-white">Accelerate Cloud Success </h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <p class="text-white ms-lg-5 mb-4">96% of eLearning for Business customers see improved results within six months. Whether you’re a team of 10 or 10,000, faster cloud fluency starts here.</p>
                    </div>
                </div>
            </div>

            <!-- Award Winning -->
            <div class="award-one">
                <div class="row align-items-center">		
                    <div class="col-xl-5 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                        <div class="master-img"> 
                            <img class="img-fluid master-bg4" src="{{URL::asset('/./build/img/bg/shape-04.svg')}}" alt="img">
                            <img class="img-fluid master-bg5" src="{{URL::asset('/./build/img/bg/shape-05.svg')}}" alt="img">
                            <img class="img-fluid master-bg2" src="{{URL::asset('build/img/shapes/shape-7.svg')}}" alt="img">
                            <img class="img-fluid master-skill-image1" src="{{URL::asset('build/img/feature/feature-8.jpg')}}" alt="img">
                            <div class="text-end">
                                <img class="img-fluid master-skill-image2" src="{{URL::asset('build/img/feature/feature-9.jpg')}}" alt="img">
                            </div>
                        </div>
                    </div>							
                    <div class="col-xl-7 col-lg-6 col-md-6 col-12">
                        <div class="ms-lg-5 ps-lg-5">
                            <div class="mb-3">
                                <img src="{{URL::asset('build/img/icon/award.svg')}}" alt="certified">
                            </div>
                            <h2 class="text-warning my-4">Award Winning Course Management</h2>
                            <p class="text-white mb-4">An award-winning course management system (CMS) or program is typically recognized for its exceptional quality, innovation, and effectiveness in helping both instructors and students succeed.</p>
                            <!-- List -->
                            <ul class="list-unstyled text-white mb-5">
                                <li class="d-flex mb-3">
                                    <i class="isax isax-tick-circle5 text-warning fs-24 me-2"></i>Interactive Tools for Engagement
                                </li>
                                <li class="d-flex mb-3">
                                    <i class="isax isax-tick-circle5 text-warning fs-24 me-2"></i>Customizable Course Creation
                                </li>
                                <li class="d-flex mb-3" data-aos="fade-up">
                                    <i class="isax isax-tick-circle5 text-warning fs-24 me-2"></i>Robust Analytics and Reporting
                                </li>
                                <li class="d-flex mb-3" data-aos="fade-up">
                                    <i class="isax isax-tick-circle5 text-warning fs-24 me-2"></i>Collaborative and Peer-to-Peer Learning
                                </li>
                                <li class="d-flex mb-3" data-aos="fade-up">
                                    <i class="isax isax-tick-circle5 text-warning fs-24 me-2"></i>The Most World Class Instructors
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Award Winning -->		

            <!-- Learn Anything -->
            <div class="learn-anything">
                <div class="row align-items-center">
                    
                    <div class="col-xl-7 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                        <div class="me-5 pe-5">
                            <div class="mb-3">
                                <img src="{{URL::asset('build/img/icon/time.svg')}}" alt="certified">
                            </div>
                            <h2 class="text-skyblue my-4">Learn anything from anywhere anytime</h2>
                            <p class="text-white mb-4">In today’s fast-paced, digital world, the ability to learn anything, from anywhere, and at any time is more accessible than ever. Whether you are looking to expand your knowledge, gain new skills.</p>
                            <!-- List -->
                            <ul class="list-unstyled text-white mb-5">
                                <li class="d-flex mb-3">
                                    <i class="isax isax-tick-circle5 text-skyblue fs-24 me-2"></i>Interactive Tools for Engagement
                                </li>
                                <li class="d-flex mb-3">
                                    <i class="isax isax-tick-circle5 text-skyblue fs-24 me-2"></i>Customizable Course Creation
                                </li>
                                <li class="d-flex mb-3" data-aos="fade-up">
                                    <i class="isax isax-tick-circle5 text-skyblue fs-24 me-2"></i>Robust Analytics and Reporting
                                </li>
                                <li class="d-flex mb-3" data-aos="fade-up">
                                    <i class="isax isax-tick-circle5 text-skyblue fs-24 me-2"></i>Collaborative and Peer-to-Peer Learning
                                </li>
                                <li class="d-flex mb-3" data-aos="fade-up">
                                    <i class="isax isax-tick-circle5 text-skyblue fs-24 me-2"></i>The Most World Class Instructors
                                </li>
                            </ul>
                        </div>
                    </div>
                            
                    <div class="col-xl-5 col-lg-6 col-md-6 col-12"  data-aos="fade-up">
                        <div class="master-img mb-0"> 
                            <img class="img-fluid master-bg4" src="{{URL::asset('/./build/img/bg/shape-04.svg')}}" alt="img">
                            <img class="img-fluid master-bg5" src="{{URL::asset('/./build/img/bg/shape-05.svg')}}" alt="img">
                            <img class="img-fluid master-bg2" src="{{URL::asset('build/img/shapes/shape-7.svg')}}" alt="img">
                            <img class="img-fluid master-skill-image1" src="{{URL::asset('build/img/feature/feature-12.jpg')}}" alt="img">
                            <div class="text-end">
                                <img class="img-fluid master-skill-image2" src="{{URL::asset('build/img/feature/feature-13.jpg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Learn Anything -->
            
            <!-- development-carrer-->
            <div class="development-carrer">
                <div class="row align-items-center">		
                    <div class="col-xl-5 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                        <div class="master-img"> 
                            <img class="img-fluid master-bg4" src="{{URL::asset('/./build/img/bg/shape-04.svg')}}" alt="img">
                            <img class="img-fluid master-bg5" src="{{URL::asset('/./build/img/bg/shape-05.svg')}}" alt="img">
                            <img class="img-fluid master-bg2" src="{{URL::asset('build/img/shapes/shape-7.svg')}}" alt="img">
                            <img class="img-fluid master-skill-image1" src="{{URL::asset('build/img/feature/feature-5.jpg')}}" alt="img">
                            <div class="text-end">
                                <img class="img-fluid master-skill-image2" src="{{URL::asset('build/img/feature/feature-6.jpg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-7 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                        <div class="ms-lg-5 ps-lg-5">
                            <div class="mb-3">
                                <img src="{{URL::asset('build/img/icon/winning.svg')}}" alt="certified">
                            </div>
                            <h2 class="text-success my-4">Certification for solid development of your Career</h2>
                            <p class="text-white mb-4">Certifications are a powerful way to enhance your skills, build credibility, and boost your career growth. In today’s competitive job market, a professional certification.</p>
                            <!-- List -->
                            <ul class="list-unstyled text-white mb-5">
                                <li class="d-flex mb-3">
                                    <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Demonstrates Expertise
                                </li>
                                <li class="d-flex mb-3">
                                    <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Boosts Your Credibility
                                </li>
                                <li class="d-flex mb-3" data-aos="fade-up">
                                    <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Improves Job Security
                                </li>
                                <li class="d-flex mb-3" data-aos="fade-up">
                                    <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Facilitates Career Advancement
                                </li>
                                <li class="d-flex mb-3" data-aos="fade-up">
                                    <i class="isax isax-tick-circle5 text-success fs-24 me-2"></i>Fosters Personal Growth
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /development-carrer -->

        </div>
    </section>
    <!-- Accelerate cloud -->

    <!-- Trending Courses  Three -->
    <section class="home-five-trending">
        <div class="container">
            <div class="row">
                <div class="home-five-head section-header-title" data-aos="fade-up">
                    <div class="row align-items-center d-flex justify-content-between row-gap-4">
                        <div class="col-md-6">
                            <h2>Most Trending Courses</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="see-all text-end">											
                                <a href="{{url('course-grid')}}">View All<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-five-trending-course" data-aos="fade-up">

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-one">
                            <div class="course-title-one">
                                <a href="{{url('course-details')}}">SEO, Marketing</a>
                            </div>
                            <div class="trending-three-text">										
                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">Digital Marketing Strategies for Successfull Business Growth</a></h3>
                                <p>Navigating the Tech World: The Ultimate Guide to Finding an IT Mentor
                                    </p>
                            </div>
                            
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{URL::asset('build/img/icon/student-icon.svg')}}" alt="student-icon">
                                    <p>400 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>6hr 30min</span>
                                </div>
                            </div>										
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$300</h3>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('course-details')}}"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-two">
                            <div class="course-title-one">
                                <a href="{{url('course-details')}}">Personalised Learning</a>
                            </div>
                            <div class="trending-three-text">										
                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">Starting Your Own Business: From Idea to Launch</a></h3>
                                <p>Learn how mentorship can help guide your decision-making process</p>
                            </div>
                            
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{URL::asset('build/img/icon/student-icon.svg')}}" alt="Img">
                                    <p>900 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>9hr 30min</span>
                                </div>
                            </div>										
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$800</h3>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('course-details')}}"><img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-three">
                            <div class="course-title-one">
                                <a href="{{url('course-details')}}">Finance</a>
                            </div>
                            <div class="trending-three-text">									
                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">Financial Literacy: Managing Your Money for Long-Term Growth</a></h3>										
                                <p>The tech industry is vast and ever-changing, but a mentor can help
                                </p>
                            </div>
                            
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{URL::asset('build/img/icon/student-icon.svg')}}" alt="Img">
                                    <p>400 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>6hr 30min</span>
                                </div>
                            </div>										
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$300</h3>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('course-details')}}"><img src="{{URL::asset('build/img/user/user-03.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-four">
                            <div class="course-title-one">
                                <a href="{{url('course-details')}}">Business Management</a>
                            </div>
                            <div class="trending-three-text">			
                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">The Complete Web Developer PHP framework Course 2.0</a></h3>										
                                <p>Scaling a business requires more than just hard work—it requires</p>
                            </div>
                            
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{URL::asset('build/img/icon/student-icon.svg')}}" alt="Img">
                                    <p>900 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>4hr 30min</span>
                                </div>
                            </div>										
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$200</h3>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('course-details')}}"><img src="{{URL::asset('build/img/user/user-04.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-one">
                            <div class="course-title-one">
                                <a href="{{url('course-details')}}">SEO, Marketing</a>
                            </div>
                            <div class="trending-three-text">				
                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">Digital Marketing Strategies for Successfull Business Growth</a></h3>									
                                <p>The tech industry is vast and ever-changing, but a mentor can help
                                </p>
                            </div>
                            
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{URL::asset('build/img/icon/student-icon.svg')}}" alt="student-icon">
                                    <p>400 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>6hr 30min</span>
                                </div>
                            </div>										
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$300</h3>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('course-details')}}"><img src="{{URL::asset('build/img/user/user-05.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-two">
                            <div class="course-title-one">
                                <a href="{{url('course-details')}}">Personalised Learning</a>
                            </div>
                            <div class="trending-three-text">						
                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">Financial Literacy: Managing Your Money for Long-Term</a></h3>
                                <p>Learn how mentorship can help guide your decision-making process </p>
                            </div>									
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{URL::asset('build/img/icon/student-icon.svg')}}" alt="Img">
                                    <p>900 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>9hr 30min</span>
                                </div>
                            </div>										
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$800</h3>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('course-details')}}"><img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                    <!-- Carousel Item -->
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-three">
                            <div class="course-title-one">
                                <a href="{{url('course-details')}}">Finance</a>
                            </div>
                            <div class="trending-three-text">							
                                <h3 class="title instructor-text"><a href="{{url('course-details')}}">Financial Literacy: Managing Your Money for Long-Term</a></h3>
                                <p>The tech industry is vast and ever-changing, but a mentor can help</p>
                            </div>
                            
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{URL::asset('build/img/icon/student-icon.svg')}}" alt="Img">
                                    <p>400 Students</p>
                                </div>
                                <div class="price-three-time d-inline-flex align-items-center">
                                    <i class="fa-regular fa-clock me-2"></i>
                                    <span>6hr 30min</span>
                                </div>
                            </div>										
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$300</h3>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('course-details')}}"><img src="{{URL::asset('build/img/user/user-07.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item -->

                </div>
            </div>
            <!-- /Favourite Course -->
        </div>
    </section>			
    <!-- Feature Course -->

    <section class="gallery-three">
        <img class="gallery-bg d-none d-lg-flex" src="{{URL::asset('build/img/shapes/shape-11.svg')}}" alt="img">
        <div class="container">
            <div class="home-five-head section-header-title" data-aos="fade-up">
                <div class="row align-items-center d-flex justify-content-between row-gap-4">
                    <div class="col-lg-6 col-sm-12">
                        <h2>Courses Taught by Real Instructor</h2>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="see-all text-end">											
                            <a href="{{url('instructor-list')}}">View all<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="courses-gallery-three">
                <div class="row">
                    <!-- Col -->
                    <div class="col-lg-5 col-md-5">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 d-flex">
                                <div class="instructor-item instructor-item-five">
                                    <div class="instructors-img">
                                        <img src="{{URL::asset('build/img/instructor/instructor-13.jpg')}}" alt="Instructor">
                                    </div>
                                    <div class="instructor-overlay">
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="#" class="favourite"><i class="isax isax-heart"></i></a>
                                        </div>
                                        <div class="instructor-content">
                                            <div>
                                                <h6><a href="{{url('instructor-details')}}">David</a></h6>
                                                <p>Angular Js</p>
                                            </div>	
                                            <div>														
                                                <a href="{{url('instructor-details')}}" class="view-link">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 d-flex">
                                <div class="instructor-item instructor-item-five">
                                    <div class="instructors-img">
                                        <img src="{{URL::asset('build/img/instructor/instructor-14.jpg')}}" alt="Instructor">
                                    </div>
                                    <div class="instructor-overlay">
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="#" class="favourite"><i class="isax isax-heart"></i></a>
                                        </div>
                                        <div class="instructor-content">
                                            <div>
                                                <h6><a href="{{url('instructor-details')}}">Maria</a></h6>
                                                <p>Node Js</p>
                                            </div>	
                                            <div>														
                                                <a href="{{url('instructor-details')}}" class="view-link">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 d-flex">
                                <div class="instructor-item instructor-item-five">
                                    <div class="instructors-img">
                                        <img src="{{URL::asset('build/img/instructor/instructor-15.jpg')}}" alt="Instructor">
                                    </div>
                                    <div class="instructor-overlay">
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="#" class="favourite"><i class="isax isax-heart"></i></a>
                                        </div>
                                        <div class="instructor-content">
                                            <div>
                                                <h6><a href="{{url('instructor-details')}}">Richardson</a></h6>
                                                <p>React Js</p>
                                            </div>	
                                            <div>														
                                                <a href="{{url('instructor-details')}}" class="view-link">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 d-flex">
                                <div class="instructor-item instructor-item-five">
                                    <div class="instructors-img">
                                        <img src="{{URL::asset('build/img/instructor/instructor-16.jpg')}}" alt="Instructor">
                                    </div>
                                    <div class="instructor-overlay">
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="#" class="favourite"><i class="isax isax-heart"></i></a>
                                        </div>
                                        <div class="instructor-content">
                                            <div>
                                                <h6><a href="{{url('instructor-details')}}">Patricia</a></h6>
                                                <p>Vue Js</p>
                                            </div>	
                                            <div>														
                                                <a href="{{url('instructor-details')}}" class="view-link">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-lg-3 col-md-3 d-flex">
                        <div class="instructor-item instructor-item-five">
                            <div class="instructors-img">
                                <img src="{{URL::asset('build/img/gallery/gallery-5.jpg')}}" alt="Instructor">
                            </div>
                            <div class="instructor-overlay">
                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                    <a href="#" class="favourite"><i class="isax isax-heart"></i></a>
                                </div>
                                <div class="instructor-content">
                                    <div>
                                        <h6><a href="{{url('instructor-details')}}">Hendriques</a></h6>
                                        <p>Python Developer</p>
                                    </div>	
                                    <div>														
                                        <a href="{{url('instructor-details')}}" class="view-link">
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-lg-4 col-md-4 d-flex">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 d-flex">
                                <div class="instructor-item instructor-item-five">
                                    <div class="instructors-img">
                                        <img src="{{URL::asset('build/img/instructor/instructor-17.jpg')}}" alt="Instructor">
                                    </div>
                                    <div class="instructor-overlay">
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="#" class="favourite"><i class="isax isax-heart"></i></a>
                                        </div>
                                        <div class="instructor-content">
                                            <div>
                                                <h6><a href="{{url('instructor-details')}}">Laura</a></h6>
                                                <p>UI/UX Designer</p>
                                            </div>	
                                            <div>														
                                                <a href="{{url('instructor-details')}}" class="view-link">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="instructor-item instructor-item-five">
                                    <div class="instructors-img">
                                        <img src="{{URL::asset('build/img/instructor/instructor-18.jpg')}}" alt="Instructor">
                                    </div>
                                    <div class="instructor-overlay">
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="#" class="favourite"><i class="isax isax-heart"></i></a>
                                        </div>
                                        <div class="instructor-content">
                                            <div>
                                                <h6><a href="{{url('instructor-details')}}">Morgon</a></h6>
                                                <p>Node Js</p>
                                            </div>	
                                            <div>														
                                                <a href="{{url('instructor-details')}}" class="view-link">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="instructor-item instructor-item-five">
                                    <div class="instructors-img">
                                        <img src="{{URL::asset('build/img/instructor/instructor-19.jpg')}}" alt="Instructor">
                                    </div>
                                    <div class="instructor-overlay">
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="#" class="favourite"><i class="isax isax-heart"></i></a>
                                        </div>
                                        <div class="instructor-content">
                                            <div>
                                                <h6><a href="{{url('instructor-details')}}">Brook</a></h6>
                                                <p>PHP Developer</p>
                                            </div>	
                                            <div>														
                                                <a href="{{url('instructor-details')}}" class="view-link">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </div>
    </section>

    <!-- Become An Instructor -->
    <section class="home-five-become">
        <div class="container">
            <div class="row align-items-center row-gap-4">
                <div class="col-lg-8 col-md-8"  data-aos="fade-up">
                    <div class="become-content-three">
                        <h2>Become An Instructor</h2>
                        <p>Top instructors from around the world teach millions of students on DreamsLMS.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4"  data-aos="fade-up">
                    <div class="text-end">
                        <a href="{{url('register')}}" class="btn btn-white">Join Our Community</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Become An Instructor -->

    <!-- Leading Companies -->
    <section class="lead-companies-three">
        <div class="container">
            <div class="home-five-head section-header-title aos-init aos-animate">
                <div class="row align-items-center d-flex justify-content-between">
                    <div class="col-lg-12"  data-aos="fade-up">
                        <h2>500+ Leading Universities And Companies</h2>
                    </div>
                </div>
            </div>
            <div class="m-0 p-0 lead-group aos" data-aos="fade-up">
                <div class="lead-group-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-33.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-34.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-35.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-36.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-37.svg')}}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/client/client-38.svg')}}">
                        </div>
                    </div>							
                </div>
            </div>
        </div>
    </section>
    <!-- /Leading Companies -->

    <!-- Testimonial -->
    <section class="testimonial-three">
        <div class="container">
            <div class="testimonial-pattern">
                <img class="pattern-left img-fluid" alt="Img" src="{{URL::asset('build/img/bg/pattern-05.svg')}}">
            </div>
            <div class="testimonial-three-content">
                <div class="row align-items-center row-gap-4">
                    <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                        <div class="become-content">
                            <h2 class="aos-init aos-animate">They Trusted us</h2>
                            <h4 class="aos-init aos-animate">We are a very happy because we have a happy customer</h4>
                        </div>

                        <!-- View all Testimonail -->
                        <a href="#" class="btn btn-white aos-init aos-animate" data-aos="fade-up">Join Our Community</a>
                        <!-- View all Testimonail -->

                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                        <div class="swiper-testimonial-three">
                            <div class="swiper-wrapper">

                                <!-- Swiper Slide -->
                                <div class="swiper-slide">											
                                    <div class="testimonial-item-five">											
                                        <div class="testimonial-quote">
                                            <img class="quote img-fluid" alt="Img" src="{{URL::asset('build/img/bg/quote.svg')}}">
                                        </div>											
                                        <div class="testimonial-content">
                                            <p>I’ve become more organized, confident, and focused thanks to my life coach. They helped me set realistic goals and break them down into actionable steps. I’ve accomplished so much already!</p>
                                        </div>
                                        <div class="testimonial-ratings">
                                            <div class="rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <p class="d-inline-block">4.5<span>ratings</span></p>
                                            </div>
                                        </div>
                                        <div class="testimonial-users">
                                            <div class="imgbx">
                                                <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/user/user-01.jpg')}}">	
                                            </div>
                                            <div class="d-block">													
                                                <h6>Jeff J. Sparrow</h6>
                                                <p>Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Swiper Slide -->

                                <!-- Swiper Slide -->
                                <div class="swiper-slide">											
                                    <div class="testimonial-item-five">												
                                        <div class="testimonial-quote">
                                            <img class="quote img-fluid" alt="Img" src="{{URL::asset('build/img/bg/quote.svg')}}">
                                        </div>											
                                        <div class="testimonial-content">
                                            <p>As a writer, I’ve learned so much about structure and storytelling from my mentor. Their feedback helped me tighten up my writing and make my characters more compelling.</p>
                                        </div>
                                        <div class="testimonial-ratings">
                                            <div class="rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <p class="d-inline-block">4.5<span>ratings</span></p>
                                            </div>
                                        </div>
                                        <div class="testimonial-users">
                                            <div class="imgbx">
                                                <img class="" alt="Img" src="{{URL::asset('build/img/user/user-02.jpg')}}">	
                                            </div>
                                            <div class="d-block">													
                                                <h6>Martin Harn</h6>
                                                <p>Docker Development</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Swiper Slide -->

                                <!-- Swiper Slide -->
                                <div class="swiper-slide">											
                                    <div class="testimonial-item-five">												
                                        <div class="testimonial-quote">
                                            <img class="quote img-fluid" alt="Img" src="{{URL::asset('build/img/bg/quote.svg')}}">
                                        </div>											
                                        <div class="testimonial-content">
                                            <p>I often felt like the mentor’s answers were too detailed, which made it hard for me to keep up. Sometimes, a simpler explanation would have helped me understand things faster.</p>
                                        </div>
                                        <div class="testimonial-ratings">
                                            <div class="rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <p class="d-inline-block">4.8<span>ratings</span></p>
                                            </div>
                                        </div>
                                        <div class="testimonial-users">
                                            <div class="imgbx">
                                                <img class="" alt="Img" src="{{URL::asset('build/img/user/user-03.jpg')}}">	
                                            </div>
                                            <div class="d-block">													
                                                <h6>Noah Aarons</h6>
                                                <p>Business Man</p> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Swiper Slide -->
                                

                            </div>
                            <div class="testimonial-bottom-nav">										
                                <div class="slide-next-btn testimonial-next-pre"><i class="fas fa-arrow-left"></i></div>
                                <div class="slide-prev-btn testimonial-next-pre"><i class="fas fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Testimonial -->

    <!-- Latest Blog -->
    <section class="latest-blog-three">
        <div class="container">
            <div class="home-five-head section-header-title pb-0" data-aos="fade-up">
                <div class="row align-items-center d-flex justify-content-between row-gap-4">
                    <div class="col-lg-6 col-md-8">
                        <h2>Latest News & Events</h2>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="see-all text-end">											
                            <a href="{{url('blog-grid')}}">View All<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest-blog-main">
                <div class="row">
                    <div class="col-lg-4 d-flex">								
                        <div class="event-blog-three blog-three-one flex-fill" >
                            <div class="blog-img-three">
                                <a href="{{url('blog-grid')}}">
                                    <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-34.jpg')}}">
                                </a>
                            </div>
                            <div class="latest-blog-content">
                                <div class="event-three-title">
                                    <div class="event-span-three d-flex align-items-center">
                                        <span class="span-name-three badge-green">Lifestyle</span>
                                        <div class="blog-student-count">
                                            <i class="fa-solid fa-calendar"></i>
                                            <span>09 Aug 2025</span>
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
                                <div class="event-blog-three blog-three-one" >
                                    <div class="blog-img-three">
                                        <a href="{{url('blog-grid')}}">
                                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-36.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three d-flex align-items-center">
                                                <span class="span-name-three badge-green">Productivity</span>
                                                <div class="blog-student-count">
                                                    <i class="fa-solid fa-calendar"></i>
                                                    <span>09 Aug 2025</span>
                                                </div>
                                            </div>
                                            <a href="{{url('blog-grid')}}">
                                                <h5>The Impact of LMS on Academic Journey Education</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-user-top">
                                        <a href="#"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="">David Benitez</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event-blog-three blog-three-one" >
                                    <div class="blog-img-three">
                                        <a href="{{url('blog-grid')}}">
                                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-37.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three d-flex align-items-center">
                                                <span class="span-name-three badge-green">Productivity</span>
                                                <div class="blog-student-count">
                                                    <i class="fa-solid fa-calendar"></i>
                                                    <span>09 Aug 2025</span>
                                                </div>
                                            </div>
                                            <a href="{{url('blog-grid')}}">
                                                <h5>Maximizing Academic Success with the Right LMS</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-user-top">
                                        <a href="#"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="">David Benitez</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event-blog-three blog-three-one" >
                                    <div class="blog-img-three">
                                        <a href="{{url('blog-grid')}}">
                                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-38.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three d-flex align-items-center">
                                                <span class="span-name-three badge-green">UI /UX</span>
                                                <div class="blog-student-count">
                                                    <i class="fa-solid fa-calendar"></i>
                                                    <span>09 Aug 2025</span>
                                                </div>
                                            </div>
                                            <a href="{{url('blog-grid')}}">
                                                <h5>Promoting Health & Well being in Schools</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-user-top">
                                        <a href="#"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="">David Benitez</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event-blog-three blog-three-one" >
                                    <div class="blog-img-three">
                                        <a href="{{url('blog-grid')}}">
                                            <img class="img-fluid" alt="Img" src="{{URL::asset('build/img/blog/blog-39.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <div class="event-span-three d-flex align-items-center">
                                                <span class="span-name-three badge-green">Development</span>
                                                <div class="blog-student-count">
                                                    <i class="fa-solid fa-calendar"></i>
                                                    <span>09 Aug 2025</span>
                                                </div>
                                            </div>
                                            <a href="{{url('blog-grid')}}">
                                                <h5>How to Build and Run a Pilot Mentoring Program</h5>
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
        </div>
    </section>
    <!-- /Latest Blog -->
@endsection
