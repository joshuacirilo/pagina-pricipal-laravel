<?php $page = 'student-wishlist'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Wishlist
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Wishlist
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
                                    <h5 class="mb-1 text-white d-inline-flex align-items-center">Ronald Richard<a href="{{url('instructor-profile')}}" class="link-light fs-16 ms-2"><i class="isax isax-edit-2"></i></a></h5>
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
                        <div class="page-title d-flex align-items-center justify-content-between">
                            <h5>Wishlist</h5>
                            <a href="javascript:void(0);" class="fs-14 text-danger d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                <i class="isax isax-trash me-1"></i>Remove All
                            </a>
                        </div>
                            <div class="row">
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-01.jpg')}}" alt="img"></a>
                                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                    <a class="fav-icon like selected" href="javascript:void(0);">
                                                        <i class="isax isax-heart not-filled"></i><i class="isax isax-heart5 filled-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm rounded-circle">
                                                            <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/avatar/avatar1.jpg')}}" alt="im"></a>
                                                        </div>
                                                        <p class="fs-14 ms-2"><a href="{{url('instructor-details')}}">David Benitez</a></p>
                                                    </div>
                                                    <span class="tag-btn">Design</span>
                                                </div>
                                                <h6 class="mt-3 mb-2"><a href="{{url('course-details')}}">Information About UI/UX Design Degree</a></h6>
                                                <div class="d-flex align-items-center"><i class="fa-solid fa-star text-warning fs-12"></i><p class="fs-14 ms-1">4.9 (200 Reviews)</p></div>
                                                <div class="d-flex justify-content-between mt-3 align-items-center">
                                                    <h5 class="text-secondary">$120</h5>
                                                    <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-02.jpg')}}" alt="img"></a>
                                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                    <a class="fav-icon like selected" href="javascript:void(0);">
                                                        <i class="isax isax-heart not-filled"></i><i class="isax isax-heart5 filled-heart"></i>
                                                    </a>
                                                </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm rounded-circle">
                                                        <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle object-fit-cover" src="{{URL::asset('./build/img/avatar/avatar2.jpg')}}" alt="im"></a>
                                                        </div>
                                                        <p class="fs-14 ms-2"><a href="{{url('instructor-details')}}">Ana Reyes</a></p>
                                                    </div>
                                                    <span class="tag-btn">Wordpress</span>
                                                </div>
                                                <h6 class="mt-3 mb-2"><a href="{{url('course-details')}}">Wordpress for Beginners - Master Wordpress Quickly</a></h6>
                                                <div class="d-flex align-items-center"><i class="fa-solid fa-star text-warning fs-12"></i><p class="fs-14 ms-1">4.4 (160 Reviews)</p></div>
                                                <div class="d-flex justify-content-between mt-3 align-items-center">
                                                    <h5 class="text-secondary">$140</h5>
                                                    <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-03.jpg')}}" alt="img"></a>
                                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                    <a class="fav-icon like selected" href="javascript:void(0);">
                                                        <i class="isax isax-heart not-filled"></i><i class="isax isax-heart5 filled-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm rounded-circle">
                                                        <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle object-fit-cover" src="{{URL::asset('./build/img/avatar/avatar3.jpg')}}" alt="im"></a>
                                                    </div>
                                                    <p class="fs-14 ms-2"><a href="{{url('instructor-details')}}">Andrew Pirtle</a></p>
                                                </div>
                                                <span class="tag-btn">Design</span>
                                            </div>
                                            <h6 class="mt-3 mb-2"><a href="{{url('course-details')}}">Sketch from A to Z (2024): Become an app designer</a></h6>
                                            <div class="d-flex align-items-center"><i class="fa-solid fa-star fs-12 text-warning"></i><p class="fs-14 ms-1">4.6 (170 Reviews)</p></div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <h5 class="text-secondary">$160</h5>
                                                <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-04.jpg')}}" alt="img"></a>
                                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                    <a class="fav-icon like selected" href="javascript:void(0);">
                                                        <i class="isax isax-heart not-filled"></i><i class="isax isax-heart5 filled-heart"></i>
                                                    </a>
                                                </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm rounded-circle">
                                                            <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle object-fit-cover" src="{{URL::asset('./build/img/avatar/avatar4.jpg')}}" alt="im"></a>
                                                        </div>
                                                        <p class="fs-14 ms-2"><a href="{{url('instructor-details')}}">Christy Garner</a></p>
                                                    </div>
                                                    <span class="tag-btn">Programming</span>
                                                </div>
                                                <h6 class="mt-3 mb-2"><a href="{{url('course-details')}}">Sketch from A to Z (2024): Become an app designer</a></h6>
                                                <div class="d-flex align-items-center"><i class="fa-solid fa-star fs-12 text-warning"></i><p class="fs-14 ms-1">4.2 (220 Reviews)</p></div>
                                                <div class="d-flex justify-content-between mt-3 align-items-center">
                                                    <h5 class="text-secondary">$200</h5>
                                                    <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-05.jpg')}}" alt="img"></a>
                                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                    <a class="fav-icon like selected" href="javascript:void(0);">
                                                        <i class="isax isax-heart not-filled"></i><i class="isax isax-heart5 filled-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm rounded-circle">
                                                        <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle object-fit-cover" src="{{URL::asset('./build/img/avatar/avatar5.jpg')}}" alt="im"></a>
                                                    </div>
                                                    <p class="fs-14 ms-2"><a href="{{url('instructor-details')}}">Justin Gregory</a></p>
                                                </div>
                                                <span class="tag-btn">Programming</span>
                                            </div>
                                            <h6 class="mt-3 mb-2"><a href="{{url('course-details')}}">Learn JavaScript and Express to become a Expert</a></h6>
                                            <div class="d-flex align-items-center"><i class="fa-solid fa-star fs-12 text-warning"></i><p class="fs-14 ms-1">4.4 (180 Reviews)</p></div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <h5 class="text-secondary">$130</h5>
                                                <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-06.jpg')}}" alt="img"></a>
                                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                    <a class="fav-icon like selected" href="javascript:void(0);">
                                                        <i class="isax isax-heart not-filled"></i><i class="isax isax-heart5 filled-heart"></i>
                                                    </a>
                                                </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm rounded-circle">
                                                            <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle object-fit-cover" src="{{URL::asset('./build/img/avatar/avatar6.jpg')}}" alt="im"></a>
                                                        </div>
                                                        <p class="fs-14 ms-2"><a href="{{url('instructor-details')}}">Carolyn Hines</a></p>
                                                    </div>
                                                    <span class="tag-btn">Programming</span>
                                                </div>
                                                <h6 class="mt-3 mb-2"><a href="{{url('course-details')}}">Introduction to Python Programming</a></h6>
                                                <div class="d-flex align-items-center"><i class="fa-solid fa-star fs-12 text-warning"></i><p class="fs-14 ms-1">4.7 (130 Reviews)</p></div>
                                                <div class="d-flex justify-content-between mt-3 align-items-center">
                                                    <h5 class="text-secondary">$150</h5>
                                                    <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-07.jpg')}}" alt="img"></a>
                                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                    <a class="fav-icon like selected" href="javascript:void(0);">
                                                        <i class="isax isax-heart not-filled"></i><i class="isax isax-heart5 filled-heart"></i>
                                                    </a>
                                                </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm rounded-circle">
                                                            <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle object-fit-cover" src="{{URL::asset('./build/img/avatar/avatar7.jpg')}}" alt="im"></a>
                                                        </div>
                                                        <p class="fs-14 ms-2"><a href="{{url('instructor-details')}}">Rafael Miller</a></p>
                                                    </div>
                                                    <span class="tag-btn">Programming</span>
                                                </div>
                                                <h6 class="mt-3 mb-2"><a href="{{url('course-details')}}">Build Responsive Websites with HTML5 and CSS3</a></h6>
                                                <div class="d-flex align-items-center"><i class="fa-solid fa-star fs-12 text-warning"></i><p class="fs-14 ms-1">4.1 (140 Reviews)</p></div>
                                                <div class="d-flex justify-content-between mt-3 align-items-center">
                                                    <h5 class="text-secondary">$170</h5>
                                                    <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-08.jpg')}}" alt="img"></a>
                                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                    <a class="fav-icon like selected" href="javascript:void(0);">
                                                        <i class="isax isax-heart not-filled"></i><i class="isax isax-heart5 filled-heart"></i>
                                                    </a>
                                                </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm rounded-circle">
                                                            <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle object-fit-cover" src="{{URL::asset('./build/img/avatar/avatar8.jpg')}}" alt="im"></a>
                                                        </div>
                                                        <p class="fs-14 ms-2"><a href="{{url('instructor-details')}}">Nancy Duarte</a></p>
                                                    </div>
                                                    <span class="tag-btn">Deign</span>
                                                </div>
                                                <h6 class="mt-3 mb-2"><a href="{{url('course-details')}}">Information About Photoshop Design Degree</a></h6>
                                                <div class="d-flex align-items-center"><i class="fa-solid fa-star fs-12 text-warning"></i><p class="fs-14 ms-1">4.3 (190 Reviews)</p></div>
                                                <div class="d-flex justify-content-between mt-3 align-items-center">
                                                    <h5 class="text-secondary">$110</h5>
                                                    <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="course-item course-item-three">
                                            <div class="position-relative overflow-hidden rounded-3 mb-3">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-09.jpg')}}" alt="img"></a>
                                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                    <a class="fav-icon like selected" href="javascript:void(0);">
                                                        <i class="isax isax-heart not-filled"></i><i class="isax isax-heart5 filled-heart"></i>
                                                    </a>
                                                </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm rounded-circle">
                                                            <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle object-fit-cover" src="{{URL::asset('./build/img/avatar/avatar9.jpg')}}" alt="im"></a>
                                                        </div>
                                                        <p class="fs-14 ms-2"><a href="{{url('instructor-details')}}">James Kagan</a></p>
                                                    </div>
                                                    <span class="tag-btn">Programming</span>
                                                </div>
                                                <h6 class="mt-3 mb-2"><a href="{{url('course-details')}}">C# Developers Double Your Coding with Visual Studio</a></h6>
                                                <div class="d-flex align-items-center"><i class="fa-solid fa-star fs-12 text-warning"></i><p class="fs-14 ms-1">4.8 (110 Reviews)</p></div>
                                                <div class="d-flex justify-content-between mt-3 align-items-center">
                                                    <h5 class="text-secondary">$180</h5>
                                                    <a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
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