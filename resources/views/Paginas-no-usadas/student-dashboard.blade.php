<?php $page = 'student-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Dashboard
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Dashboard
        @endslot
    @endcomponent

        <div class="content">
            <div class="container">
            <!-- profile box -->
            <div class="profile-card overflow-hidden bg-blue-gradient2 mb-5 p-5">
                <div class="profile-card-bg">
                    <img src="{{URL::asset('build/img/bg/card-bg-01.png')}}" class="profile-card-bg-1" alt="">
                </div>
                    <div class="row align-items-center row-gap-3">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-xxl avatar-rounded me-3 border border-white border-2 position-relative">
                                    <img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="">
                                    <span class="verify-tick"><i class="isax isax-verify5"></i></span>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-white d-inline-flex align-items-center"><a href="{{url('student-details')}}">Ronald Richard</a><a href="{{url('instructor-profile')}}" class="link-light fs-16 ms-2"><i class="isax isax-edit-2"></i></a></h5>
                                    <p class="text-light">Student</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center justify-content-lg-end flex-wrap gap-2">
                                <a href="{{url('become-an-instructor')}}" class="btn btn-white rounded-pill me-3">Become an Instructor</a>
                                <a href="{{url('instructor-dashboard')}}" class="btn btn-secondary rounded-pill">Instructor Dashboard</a>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- profile box -->
                <div class="row">
                    @component('components.sidebar')
                    @endcomponent
                    <div class="col-lg-9">
                        <div class="card bg-light quiz-ans-card">
                            <img src="{{URL::asset('./build/img/shapes/withdraw-bg1.svg')}}" class="quiz-ans-bg1" alt="img">
                            <img src="{{URL::asset('./build/img/shapes/withdraw-bg2.svg')}}" class="quiz-ans-bg2" alt="img">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div>
                                            <h6 class="mb-1">Quiz : Build Responsive Real World </h6>
                                            <p>Answered : 15/22</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-end">
                                            <a href="{{url('student-quiz')}}" class="btn btn-primary rounded-pill">Continue Quiz</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <span class="icon-box bg-primary-transparent me-2 me-xxl-3 flex-shrink-0"><img src="{{URL::asset('build/img/icon/graduation.svg')}}" alt=""></span>
                                            <div>
                                                <span class="d-block">Enrolled Courses</span>
                                                <h4 class="fs-24 mt-1">12</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <span class="icon-box bg-secondary-transparent me-2 me-xxl-3 flex-shrink-0"><img src="{{URL::asset('build/img/icon/book.svg')}}" alt=""></span>
                                            <div>
                                                <span class="d-block">Active Courses</span>
                                                <h4 class="fs-24 mt-1">03</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <span class="icon-box bg-success-transparent me-2 me-xxl-3 flex-shrink-0"><img src="{{URL::asset('build/img/icon/bookmark.svg')}}" alt=""></span>
                                            <div>
                                                <span class="d-block">Completed Courses</span>
                                                <h4 class="fs-24 mt-1">10</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="mb-3 fs-18">Recently Enrolled Courses</h5>
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
                        </div>
                        <div>

                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-3 border-bottom pb-3 fs-18">Recent Invoices</h5>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-3">
                                                <div>
                                                    <h6 class="mb-1">Build Responsive Real World Websites..</h6>
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-sm bg-light border d-inline-flex me-3">#INV001</span>
                                                        <p class="small">Amount : <span class="heading-color fw-semibold">$200</span></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge fw-normal bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    <a href="#" class="action-icon"><i class="isax isax-document-download"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-3">
                                                <div>
                                                    <h6 class="mb-1">Wordpress for Beginners</h6>
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-sm bg-light border d-inline-flex me-3">#INV002</span>
                                                        <p class="small">Amount : <span class="heading-color fw-semibold">$310</span></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge fw-normal bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    <a href="#" class="action-icon"><i class="isax isax-document-download"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-3">
                                                <div>
                                                    <h6 class="mb-1">Information About UI/UX Design Degree</h6>
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-sm bg-light border d-inline-flex me-3">#INV003</span>
                                                        <p class="small">Amount : <span class="heading-color fw-semibold">$270</span></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge fw-normal bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    <a href="#" class="action-icon"><i class="isax isax-document-download"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-3">
                                                <div>
                                                    <h6 class="mb-1">Sketch from A to Z (2024)</h6>
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-sm bg-light border d-inline-flex me-3">#INV004</span>
                                                        <p class="small">Amount : <span class="heading-color fw-semibold">$180</span></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge fw-normal bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    <a href="#" class="action-icon"><i class="isax isax-document-download"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                                <div>
                                                    <h6 class="mb-1">Become an app designer</h6>
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-sm bg-light border d-inline-flex me-3">#INV005</span>
                                                        <p class="small">Amount : <span class="heading-color fw-semibold">$220</span></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge fw-normal bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                    <a href="#" class="action-icon"><i class="isax isax-document-download"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <h5 class="mb-3 fs-18 border-bottom pb-3">Latest Quizes</h5>
                                            <div class="d-flex align-items-center flex-wrap flex-md-nowrap justify-content-between row-gap-2 mb-3">
                                                <div>
                                                    <h6 class="mb-1">Sketch from A to Z (2024)</h6>
                                                    <div class="d-flex align-items-center">
                                                        <p>Correct Answer : 15/22</p>
                                                    </div>
                                                </div>
                                                <div class="circle-progress flex-shrink-0"  data-value='95'>
                                                    <span class="progress-left">
                                                        <span class="progress-bar border-success"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar border-success"></span>
                                                    </span>
                                                    <div class="progress-value">95%</div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap flex-md-nowrap justify-content-between row-gap-2 mb-3">
                                                <div>
                                                    <h6 class="mb-1">Build Responsive Real World </h6>
                                                    <div class="d-flex align-items-center">
                                                        <p>Correct Answer : 18/22</p>
                                                    </div>
                                                </div>
                                                <div class="circle-progress flex-shrink-0"  data-value='100'>
                                                    <span class="progress-left">
                                                        <span class="progress-bar border-success"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar border-success"></span>
                                                    </span>
                                                    <div class="progress-value">100%</div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap flex-md-nowrap justify-content-between row-gap-2 mb-3">
                                                <div>
                                                    <h6 class="mb-1">UI/UX Design Degree</h6>
                                                    <div class="d-flex align-items-center">
                                                        <p>Correct Answer : 25/30</p>
                                                    </div>
                                                </div>
                                                <div class="circle-progress flex-shrink-0"  data-value='80'>
                                                    <span class="progress-left">
                                                        <span class="progress-bar border-success"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar border-success"></span>
                                                    </span>
                                                    <div class="progress-value">80%</div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap flex-md-nowrap justify-content-between row-gap-2 mb-3">
                                                <div>
                                                    <h6 class="mb-1">Build Responsive Real World </h6>
                                                    <div class="d-flex align-items-center">
                                                        <p>Correct Answer : 15/20</p>
                                                    </div>
                                                </div>
                                                <div class="circle-progress flex-shrink-0"  data-value='85'>
                                                    <span class="progress-left">
                                                        <span class="progress-bar border-success"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar border-success"></span>
                                                    </span>
                                                    <div class="progress-value">85%</div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap flex-md-nowrap justify-content-between row-gap-2">
                                                <div>
                                                    <h6 class="mb-1">Become an app designer</h6>
                                                    <div class="d-flex align-items-center">
                                                        <p>Correct Answer : 12/20</p>
                                                    </div>
                                                </div>
                                                <div class="circle-progress flex-shrink-0"  data-value='20'>
                                                    <span class="progress-left">
                                                        <span class="progress-bar border-danger"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar border-danger"></span>
                                                    </span>
                                                    <div class="progress-value">20%</div>
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
        </div>
@endsection