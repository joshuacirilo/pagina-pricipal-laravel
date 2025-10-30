<?php $page = 'instructor-course-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Courses
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Courses
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">
            <div class="instructor-profile">
                <div class="instructor-profile-bg">
                    <img src="{{URL::asset('build/img/bg/card-bg-01.png')}}" class="instructor-profile-bg-1" alt="">
                </div>
                <div class="row align-items-center row-gap-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <span class="avatar flex-shrink-0 avatar-xxl avatar-rounded me-3 border border-white border-3 position-relative">
                                    <img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="img">
                                    <span class="verify-tick"><i class="isax isax-verify5"></i></span>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-white d-inline-flex align-items-center">Eugene Andre<a href="{{url('instructor-profile')}}" class="link-light fs-16 ms-2"><i class="isax isax-edit-2"></i></a></h5>
                                    <p class="text-light">Instructor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center flex-wrap gap-3 justify-content-md-end">
                                <a href="{{url('add-course')}}" class="btn btn-white rounded-pill">Add New Course</a>
                                <a href="{{url('student-dashboard')}}" class="btn btn-secondary rounded-pill">Student Dashboard</a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                @component('components.sidebar')
                @endcomponent
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-xxl col-lg-4 col-md-6">
                            <div class="card bg-success">
                                <div class="card-body">
                                    <h6 class="fw-medium mb-1 text-white">Active Courses</h6>
                                    <h4 class="text-white fw-bold">45</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl col-lg-4 col-md-6">
                            <div class="card bg-secondary">
                                <div class="card-body">
                                    <h6 class="fw-medium mb-1 text-white">Pending Courses</h6>
                                    <h4 class="text-white fw-bold">21</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl col-lg-4 col-md-6">
                            <div class="card bg-info">
                                <div class="card-body">
                                    <h6 class="fw-medium mb-1 text-white">Draft Courses</h6>
                                    <h4 class="text-white fw-bold">15</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl col-lg-4 col-md-6">
                            <div class="card bg-skyblue">
                                <div class="card-body">
                                    <h6 class="fw-medium mb-1 text-white">Free Courses</h6>
                                    <h4 class="text-white fw-bold">16</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl col-lg-4 col-md-6">
                            <div class="card bg-purple">
                                <div class="card-body">
                                    <h6 class="fw-medium mb-1 text-white">Paid Courses</h6>
                                    <h4 class="fw-bold text-white">21</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-title d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold">Courses</h5>
                        <div class="d-flex align-items-center list-icons">
                            <a href="{{url('instructor-course')}}" class="me-2"><i class="isax isax-task"></i></a>
                            <a href="{{url('instructor-course-grid')}}" class="active "><i class="isax isax-element-3"></i></a>
                        </div>
                    </div>
                    <div class="tab-list course-tab">
                        <ul class="nav mb-2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="javascript:void(0);" class="active" data-bs-toggle="tab" data-bs-target="#enroll-courses" aria-selected="true" role="tab">Publish (45)</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#active-courses" aria-selected="false" role="tab" tabindex="-1">Pending (2)</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#complete-courses" aria-selected="false" role="tab" tabindex="-1">Draft (1)</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#inactive-course" aria-selected="false" role="tab" tabindex="-1">Inactive (3)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="enroll-courses" role="tabpanel">
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                        <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                            <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-16.jpg')}}" alt="img"></a>
                                            <span class="fs-20 price-top d-inline-flex align-items-center">$200 <del class="fs-14 ms-2">$990.00</del></span>
                                        </div>
                                        <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h6>
                                        <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                            <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                            <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3 align-items-center">
                                            <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                            <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-17.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$156</span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Wordpress for Beginners - Master Wordpress Quickly</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-18.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex text-success align-items-center">Free</span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Sketch from A to Z (2022): Become an app designer</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-19.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$145</span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Learn Angular Fundamental From beginning to adv</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-20.jpg')}}" alt="img"></a>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">C# Developers Double Your Coding Speed</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-21.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$200 <del class="fs-14 ms-2">$990.00</del></span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Build Responsive Real World Websites</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="active-courses" role="tabpanel">
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-16.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$200 <del class="fs-14 ms-2">$990.00</del></span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-17.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$156</span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Wordpress for Beginners - Master Wordpress Quickly</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-18.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex text-success align-items-center">Free</span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Sketch from A to Z (2022): Become an app designer</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-19.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$145</span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Learn Angular Fundamental From beginning to adv</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-20.jpg')}}" alt="img"></a>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">C# Developers Double Your Coding Speed</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-21.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$200 <del class="fs-14 ms-2">$990.00</del></span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Build Responsive Real World Websites</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="complete-courses" role="tabpanel">
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-16.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$200 <del class="fs-14 ms-2">$990.00</del></span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-17.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$156</span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Wordpress for Beginners - Master Wordpress Quickly</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-18.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex text-success align-items-center">Free</span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Sketch from A to Z (2022): Become an app designer</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-19.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$145</span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Learn Angular Fundamental From beginning to adv</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-20.jpg')}}" alt="img"></a>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">C# Developers Double Your Coding Speed</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-21.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$200 <del class="fs-14 ms-2">$990.00</del></span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Build Responsive Real World Websites</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="inactive-course" role="tabpanel">
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-16.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$200 <del class="fs-14 ms-2">$990.00</del></span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Information About UI/UX Design Degree</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-17.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$156</span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Wordpress for Beginners - Master Wordpress Quickly</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-18.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex text-success align-items-center">Free</span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Sketch from A to Z (2022): Become an app designer</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-19.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$145</span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Learn Angular Fundamental From beginning to adv</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-20.jpg')}}" alt="img"></a>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">C# Developers Double Your Coding Speed</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3 course-image">
                                                <a href="javascript:void(0);"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-21.jpg')}}" alt="img"></a>
                                                <span class="fs-20 price-top d-inline-flex align-items-center">$200 <del class="fs-14 ms-2">$990.00</del></span>
                                            </div>
                                            <h6 class="mt-3 mb-3 fs-18 fw-bold text-truncate line-clamb-2"><a href="javascript:void(0);">Build Responsive Real World Websites</a></h6>
                                            <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/book-3.svg')}}" class="me-1" alt="">12+ Lesson</span>
                                                <span class="d-inline-flex align-items-center text-gray-5"><img src="{{URL::asset('build/img/icon/timer-start.svg')}}" class="me-1" alt="">9hr 30min</span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                <a href="#" class="d-inline-flex align-items-center fs-14 text-gray-5"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            </div>
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
    </div>
@endsection
