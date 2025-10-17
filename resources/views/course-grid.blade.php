<?php $page = 'course-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Course Grid
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Course Grid
        @endslot
    @endcomponent
        <!-- Course -->
        <section class="course-content">
            <div class="container">
                <div class="row align-items-baseline">
                    <div class="col-lg-3 theiaStickySidebar">
                        <div class="filter-clear">
                            <div class="clear-filter mb-4 pb-lg-2 d-flex align-items-center justify-content-between">
                                <h5><i class="feather-filter me-2"></i>Filters</h5>
                                <a href="javascript:void(0);" class="clear-text">
                                    Clear
                                </a>
                            </div>

                            <div class="accordion accordion-customicon1 accordions-items-seperate">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1One">
                                        <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1One" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                        Categories <i class="fa-solid fa-chevron-down"></i>
                                        </a>
                                    </h2>
                                    <div id="collapsecustomicon1One" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example" style="">
                                        <div class="accordion-body">
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_specialist" >
                                                    <span class="checkmark"></span> Backend (3)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_specialist" >
                                                    <span class="checkmark"></span>  CSS (2)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span>  Frontend (2)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span> General (2)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_specialist" checked>
                                                    <span class="checkmark"></span> IT & Software (2)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span> Photography (2)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span>  Programming Language (3)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check mb-0">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span>  Technology (2)
                                                </label>
                                            </div>
                                            <a href="javascript:void(0);" class="see-more-btn">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Two">
                                        <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two" aria-expanded="false" aria-controls="collapsecustomicon1Two">
                                        Instructors<i class="fa-solid fa-chevron-down"></i>
                                        </a>
                                    </h2>
                                    <div id="collapsecustomicon1Two" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1Two" data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body">
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_specialist" >
                                                    <span class="checkmark"></span> Keny White (10)

                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_specialist" >
                                                    <span class="checkmark"></span>  Hinata Hyuga (5)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span>  John Doe (3)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check mb-0">
                                                    <input type="checkbox" name="select_specialist" checked>
                                                    <span class="checkmark"></span> Nicole Brown
                                                </label>
                                            </div>
                                            <a href="javascript:void(0);" class="see-more-btn">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Three">
                                        <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three" aria-expanded="false" aria-controls="collapsecustomicon1Three">
                                        Price<i class="fa-solid fa-chevron-down"></i>
                                        </a>
                                    </h2>
                                    <div id="collapsecustomicon1Three" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1Three" data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body">
                                            <div>
                                                <label class="custom_check custom_one">
                                                    <input type="checkbox" name="select_specialist" >
                                                    <span class="checkmark"></span> All (10)

                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check custom_one">
                                                    <input type="checkbox" name="select_specialist" >
                                                    <span class="checkmark"></span>  Free (5) 

                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check custom_one mb-0">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span>  Paid (3)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Four">
                                        <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Four" aria-expanded="false" aria-controls="collapsecustomicon1Four">
                                        Range<i class="fa-solid fa-chevron-down"></i>
                                        </a>
                                    </h2>
                                    <div id="collapsecustomicon1Four" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1Four" data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body">
                                            <div class="filter-range">
                                                <input type="text"  class="input-range">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Five">
                                        <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Five" aria-expanded="false" aria-controls="collapsecustomicon1Five">
                                        Level<i class="fa-solid fa-chevron-down"></i>
                                        </a>
                                    </h2>
                                    <div id="collapsecustomicon1Five" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1Five" data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body">
                                            <div>
                                                <label class="custom_check custom_one">
                                                    <input type="checkbox" name="select_specialist" >
                                                    <span class="checkmark"></span>Beginner (10)

                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check custom_one">
                                                    <input type="checkbox" name="select_specialist" >
                                                    <span class="checkmark"></span> Intermediate (5)

                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check custom_one">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span>Advanced (21)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check custom_one mb-0">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span>Expert  (3)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Six">
                                        <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Six" aria-expanded="false" aria-controls="collapsecustomicon1Six">
                                        Reviews <i class="fa-solid fa-chevron-down"></i>
                                        </a>
                                    </h2>
                                    <div id="collapsecustomicon1Six" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1Six" data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body">
                                            <div>
                                                <label class="custom_check custom_one">
                                                    <input type="checkbox" name="select_specialist" >
                                                    <span class="checkmark"></span>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-warning"></i>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check custom_one">
                                                    <input type="checkbox" name="select_specialist" >
                                                    <span class="checkmark"></span>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-light"></i>

                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check custom_one">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-light me-1"></i>
                                                    <i class="fa-solid fa-star text-light"></i>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check custom_one">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-light me-1"></i>
                                                    <i class="fa-solid fa-star text-light me-1"></i>
                                                    <i class="fa-solid fa-star text-light"></i>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check custom_one mb-0">
                                                    <input type="checkbox" name="select_specialist">
                                                    <span class="checkmark"></span>
                                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                                    <i class="fa-solid fa-star text-light me-1"></i>
                                                    <i class="fa-solid fa-star text-light me-1"></i>
                                                    <i class="fa-solid fa-star text-light me-1"></i>
                                                    <i class="fa-solid fa-star text-light"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-9">
                    
                        <!-- Filter -->
                        <div class="showing-list mb-4">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                        <div class="show-result text-center text-lg-start">
                                            <h6 class="fw-medium">Showing 1-9 of 50 results</h6>
                                        </div>
                                </div>
                                <div class="col-lg-8">	
                                    <div class="show-filter add-course-info">
                                        <form action="#">
                                            <div class="d-sm-flex justify-content-center justify-content-lg-end mb-1 mb-lg-0">
                                                <div class="view-icons mb-2 mb-sm-0">
                                                    <a href="{{url('course-grid')}}" class="grid-view active"><i class="feather-grid"></i></a>
                                                    <a href="{{url('course-list')}}" class="list-view"><i class="isax isax-task"></i></a>
                                                </div>
                                                <select class="form-select">
                                                    <option>Newly Published </option>
                                                    <option>Trending Courses</option>
                                                    <option>Top Rated</option>
                                                    <option>Free Courses</option>
                                                </select>
                                                <div class=" search-group">
                                                    <i class="isax isax-search-normal-1"></i>
                                                    <input type="text" class="form-control" placeholder="Search" >
                                                </div>
                                            </div>
                                        </form>
                                    </div>	
                                </div>
                            </div>
                        </div>
                        <!-- /Filter -->
                        
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="course-item-two course-item mx-0">
                                    <div class="course-img">
                                        <a href="{{url('course-details')}}">
                                            <img src="{{URL::asset('build/img/course/course-01.jpg')}}" alt="img" class="img-fluid">  
                                        </a>
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <div class="badge text-bg-danger">15% off</div>
                                            <a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
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
                                        <h6 class="title mb-2"><a href="{{url('course-details')}}">Information About UI/UX Design Degree</a></h6>
                                        <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.9 (200 Reviews)</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-secondary mb-0">$120</h5>
                                            <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="course-item-two course-item mx-0">
                                    <div class="course-img">
                                        <a href="{{url('course-details')}}">
                                            <img src="{{URL::asset('build/img/course/course-02.jpg')}}" alt="img" class="img-fluid">  
                                        </a>
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                                    <img src="{{URL::asset('build/img/user/user-30.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                                </a>
                                                <div class="ms-2">
                                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">Ana Reyes</a>
                                                </div>
                                            </div>
                                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                                Wordpress
                                            </span>
                                        </div>
                                        <h6 class="title mb-2"><a href="{{url('course-details')}}">Wordpress for Beginners - Master Wordpress Quickly</a></h6>
                                        <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.4 (160 Reviews)</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-secondary mb-0">$140</h5>
                                            <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="course-item-two course-item mx-0">
                                    <div class="course-img">
                                        <a href="{{url('course-details')}}">
                                            <img src="{{URL::asset('build/img/course/course-03.jpg')}}" alt="img" class="img-fluid">  
                                        </a>
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                                    <img src="{{URL::asset('build/img/user/user-31.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                                </a>
                                                <div class="ms-2">
                                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">Andrew Pirtle</a>
                                                </div>
                                            </div>
                                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                                Design
                                            </span>
                                        </div>
                                        <h6 class="title mb-2"><a href="{{url('course-details')}}">Sketch from A to Z (2024): Become an app designer</a></h6>
                                        <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.4 (160 Reviews)</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-secondary mb-0">$140</h5>
                                            <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="course-item-two course-item mx-0">
                                    <div class="course-img">
                                        <a href="{{url('course-details')}}">
                                            <img src="{{URL::asset('build/img/course/course-04.jpg')}}" alt="img" class="img-fluid">  
                                        </a>
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                                    <img src="{{URL::asset('build/img/user/user-32.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                                </a>
                                                <div class="ms-2">
                                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">Christy Garner</a>
                                                </div>
                                            </div>
                                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                                Programming
                                            </span>
                                        </div>
                                        <h6 class="title mb-2"><a href="{{url('course-details')}}">Build Responsive Real World Websites with Crash Course</a></h6>
                                        <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.2 (220 Reviews)</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-secondary mb-0">$200</h5>
                                            <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="course-item-two course-item mx-0">
                                    <div class="course-img">
                                        <a href="{{url('course-details')}}">
                                            <img src="{{URL::asset('build/img/course/course-05.jpg')}}" alt="img" class="img-fluid">  
                                        </a>
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                                    <img src="{{URL::asset('build/img/user/user-32.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                                </a>
                                                <div class="ms-2">
                                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">Justin Gregory</a>
                                                </div>
                                            </div>
                                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                                Programming
                                            </span>
                                        </div>
                                        <h6 class="title mb-2"><a href="{{url('course-details')}}">Learn JavaScript and Express to become a Expert</a></h6>
                                        <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.4 (180 Reviews)</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-secondary mb-0">$130</h5>
                                            <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="course-item-two course-item mx-0">
                                    <div class="course-img">
                                        <a href="{{url('course-details')}}">
                                            <img src="{{URL::asset('build/img/course/course-06.jpg')}}" alt="img" class="img-fluid">  
                                        </a>
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                                    <img src="{{URL::asset('build/img/user/user-33.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                                </a>
                                                <div class="ms-2">
                                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">Carolyn Hines</a>
                                                </div>
                                            </div>
                                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                                Programming
                                            </span>
                                        </div>
                                        <h6 class="title mb-2"><a href="{{url('course-details')}}">Introduction to Python Programming</a></h6>
                                        <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.4 (180 Reviews)</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-secondary mb-0">$130</h5>
                                            <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="course-item-two course-item mx-0">
                                    <div class="course-img">
                                        <a href="{{url('course-details')}}">
                                            <img src="{{URL::asset('build/img/course/course-07.jpg')}}" alt="img" class="img-fluid">  
                                        </a>
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                                    <img src="{{URL::asset('build/img/user/user-34.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                                </a>
                                                <div class="ms-2">
                                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">Rafael Miller</a>
                                                </div>
                                            </div>
                                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                                Programming
                                            </span>
                                        </div>
                                        <h6 class="title mb-2"><a href="{{url('course-details')}}">Build Responsive Websites with HTML5 and CSS3</a></h6>
                                        <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.4 (180 Reviews)</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-secondary mb-0">$170</h5>
                                            <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="course-item-two course-item mx-0">
                                    <div class="course-img">
                                        <a href="{{url('course-details')}}">
                                            <img src="{{URL::asset('build/img/course/course-08.jpg')}}" alt="img" class="img-fluid">  
                                        </a>
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                                    <img src="{{URL::asset('build/img/user/user-35.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                                </a>
                                                <div class="ms-2">
                                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">Nancy Duarte</a>
                                                </div>
                                            </div>
                                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                                Design
                                            </span>
                                        </div>
                                        <h6 class="title mb-2"><a href="{{url('course-details')}}">Information About Photoshop Design Degree</a></h6>
                                        <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.4 (180 Reviews)</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-secondary mb-0">$170</h5>
                                            <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="course-item-two course-item mx-0">
                                    <div class="course-img">
                                        <a href="{{url('course-details')}}">
                                            <img src="{{URL::asset('build/img/course/course-09.jpg')}}" alt="img" class="img-fluid">  
                                        </a>
                                        <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
                                            <a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('instructor-details')}}" class="avatar avatar-sm">
                                                    <img src="{{URL::asset('build/img/user/user-36.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
                                                </a>
                                                <div class="ms-2">
                                                    <a href="{{url('instructor-details')}}" class="link-default fs-14">James Kagan</a>
                                                </div>
                                            </div>
                                            <span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
                                                Design
                                            </span>
                                        </div>
                                        <h6 class="title mb-2"><a href="{{url('course-details')}}">C# Developers Double Your Coding with Visual Studio</a></h6>
                                        <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.4 (180 Reviews)</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-secondary mb-0">$180</h5>
                                            <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- /pagination -->
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <p class="pagination-text">Page 1 of 2</p>
                            </div>
                            <div class="col-md-10">
                                <ul class="pagination lms-page justify-content-center justify-content-md-end mt-2 mt-md-0">
                                    <li class="page-item prev">
                                        <a class="page-link" href="javascript:void(0)" tabindex="-1"><i class="fas fa-angle-left"></i></a>
                                    </li>
                                    <li class="page-item first-page active">
                                        <a class="page-link" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">3</a>
                                    </li>
                                    <li class="page-item next">
                                        <a class="page-link" href="javascript:void(0)"><i class="fas fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /pagination -->
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- /Course -->
@endsection
