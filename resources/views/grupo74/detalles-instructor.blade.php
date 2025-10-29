<?php $page = 'instructor-assignment'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Instructor Details
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Instructor Details
        @endslot
    @endcomponent
        <!-- Instructor -->
        <div class="instructor-detail-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card bg-light mb-4">
                            <div class="card-body instructor-details">
                                <div class="instructor-img">
                                    <a href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/user/user-61.jpg')}}" alt="img" class="img-fluid">
                                    </a>
                                    <a href="javascript:void(0);" class="btn heart"><i class="isax isax-heart5 text-danger"></i></a>
                                </div>
                                <div class="flex-fill">
                                    <div class="pb-3 border-bottom mb-3">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h6 class="fw-bold"><a href="javascript:void(0);">Rolands Granger</a></h6>
                                        </div>
                                        <div class="d-flex align-items-center mb-1">
                                            <a href="javascript:void(0);" class="fs-14 me-2">Developer</a>
                                            <span class="me-2">
                                                <i class="fa-solid fa-star text-warning"></i>
                                            </span>
                                            <span class="fs-14">4.9 (200 Reviews)</span>
                                        </div>
                                        <div>
                                            <p>I am a web developer with a vast array of knowledge in many different front end and back end languages, responsive frameworks, databases, and best code practices.</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="d-flex align-items-center counts-details">
                                            <span class="d-flex align-items-center me-4">
                                                <span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i></span>
                                                12+ Lesson
                                            </span>
                                            <span class="d-flex align-items-center">
                                                <span class="d-flex align-items-center"><i class="isax isax-profile-2user5 fs-16 text-secondary me-2"></i></span>
                                                50 Students
                                            </span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span>
                                                <a href="javascript:void(0);" class="rounded-circle d-inline-flex align-items-center justify-content-center me-2">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="javascript:void(0);" class="rounded-circle d-inline-flex align-items-center justify-content-center me-2">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="javascript:void(0);" class="rounded-circle d-inline-flex align-items-center justify-content-center me-2">
                                                    <i class="fa-brands fa-x-twitter"></i>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="javascript:void(0);" class="rounded-circle d-inline-flex align-items-center justify-content-center me-2">
                                                    <i class="fa-brands fa-youtube"></i>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="javascript:void(0);" class="rounded-circle d-inline-flex align-items-center justify-content-center">
                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">About Me</h5>
                                <p class="mb-3">Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. Some quick example text to build on the card title and bulk the card's content Moltin gives you platform.</p>
                                <a href="javascript:void(0);" class="read-more-btn">Read More</a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Education</h5>
                                <div class="education-flow">
                                    <div class="ps-4 pb-4 timeline-flow">
                                        <div>
                                            <h6 class="mb-1">BCA - Bachelor of Computer Applications</h6>
                                            <p class="fs-14">International University - (2004 - 2010)</p>
                                        </div>
                                    </div>
                                    <div class="ps-4 pb-4 timeline-flow">
                                        <div>
                                            <h6 class="mb-1">MCA - Master of Computer Application</h6>
                                            <p class="fs-14">International University - (2010 - 2012)</p>
                                        </div>
                                    </div>
                                    <div class="ps-4 timeline-flow">
                                        <div>
                                            <h6 class="mb-1">Design Communication Visual</h6>
                                            <p class="fs-14">International University - (2012-2015)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Experience</h5>
                                <div class="d-flex align-items-center mb-4">
                                    <span class="bg-light border avatar avatar-lg text-gray-9 flex-shrink-0 me-3"><i class="isax isax-briefcase"></i></span>
                                    <div>
                                        <h6 class="mb-1">Web Design & Development Team Leader</h6>
                                        <p>Creative Agency - (2013 - 2016)</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="bg-light border avatar avatar-lg text-gray-9 flex-shrink-0 me-3"><i class="isax isax-briefcase"></i></span>
                                    <div>
                                        <h6 class="mb-1">Project Manager</h6>
                                        <p>CJobcy Technology Pvt.Ltd - (Present)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0">
                            <div class="card-body p-0">
                                    <h5 class="mb-3">Courses</h5>
                                <div class="course-carousal">
                                    <div>
                                        <div class="course-item course-item-three mx-2 mb-0">
                                            <div class="course-carousal-img position-relative overflow-hidden rounded-3 mb-3">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-02.jpg')}}" alt="img"></a>
                                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                    <a class="like" href="#"><i class="isax isax-heart color-active"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm rounded-circle">
                                                        <img class="img-fluid rounded-circle object-fit-cover" src="{{URL::asset('./build/img/avatar/avatar2.jpg')}}" alt="img">
                                                    </div>
                                                    <p class="ms-2"><a href="{{url('instructor-details')}}">Ana Reyes</a></p>
                                                </div>
                                                <span class="tag-btn">Wordpress</span>
                                            </div>
                                            <h5 class="mt-3 mb-2 text-truncate line-clamb-2"><a href="{{url('course-details')}}">Wordpress for Beginners - Master Wordpress Quickly</a></h5>
                                            <div class="d-flex align-items-center"><i class="ti ti-star-filled text-warning"></i><p class="ms-2">4.4 (160 Reviews)</p></div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <h6 class="fs-16 text-secondary">$140</h6>
                                                <a href="{{url('course-grid')}}" class="btn view-course-btn">View Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="course-item course-item-three mx-2 mb-0">
                                            <div class="course-carousal-img position-relative overflow-hidden rounded-3 mb-3">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-03.jpg')}}" alt="img"></a>
                                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                    <a class="like" href="#"><i class="isax isax-heart color-active"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm rounded-circle">
                                                        <img class="img-fluid rounded-circle object-fit-cover" src="{{URL::asset('./build/img/avatar/avatar3.jpg')}}" alt="img">
                                                    </div>
                                                    <p class="ms-2"><a href="{{url('instructor-details')}}">Andrew Pirtle</a></p>
                                                </div>
                                                <span class="tag-btn">Design</span>
                                            </div>
                                            <h5 class="mt-3 mb-2 text-truncate line-clamb-2"><a href="{{url('course-details')}}">Sketch from A to Z (2024): Become an app designer</a></h5>
                                            <div class="d-flex align-items-center"><i class="ti ti-star-filled text-warning"></i><p class="ms-2">4.6 (170 Reviews)</p></div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <h6 class="fs-16 text-secondary">$160</h6>
                                                <a href="{{url('course-grid')}}" class="btn view-course-btn">View Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="course-item course-item-three mx-2 mb-0">
                                            <div class="course-carousal-img position-relative overflow-hidden rounded-3 mb-3">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-04.jpg')}}" alt="img"></a>
                                                <div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
                                                    <a class="like" href="#"><i class="isax isax-heart color-active"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm rounded-circle">
                                                    <img class="img-fluid rounded-circle object-fit-cover" src="{{URL::asset('./build/img/avatar/avatar4.jpg')}}" alt="img">
                                                </div>
                                                <p class="ms-2"><a href="{{url('instructor-details')}}">Christy</a></p>
                                            </div>
                                            <span class="tag-btn">Programming</span>
                                            </div>
                                            <h5 class="mt-3 mb-2"><a href="{{url('course-details')}}" class=" text-truncate line-clamb-2">Build Responsive Real World Websites with Crash Course</a></h5>
                                            <div class="d-flex align-items-center"><i class="ti ti-star-filled text-warning"></i><p class="ms-2">4.2 (220 Reviews)</p></div>
                                            <div class="d-flex justify-content-between mt-3 align-items-center">
                                                <h6 class="fs-16 text-secondary">$200</h6>
                                                <a href="{{url('course-grid')}}" class="btn view-course-btn">View Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Certifications</h5>
                                <div class="d-flex align-items-center">
                                    <div class="certificate-img rounded-circle me-2">
                                        <img src="{{URL::asset('build/img/certificates/certificate-01.svg')}}" alt="img" class="img-fluid">
                                    </div>
                                    <div class="certificate-img rounded-circle me-2">
                                        <img src="{{URL::asset('build/img/certificates/certificate-02.svg')}}" alt="img" class="img-fluid">
                                    </div>
                                    <div class="certificate-img rounded-circle me-2">
                                        <img src="{{URL::asset('build/img/certificates/certificate-03.svg')}}" alt="img" class="img-fluid">
                                    </div>
                                    <div class="certificate-img rounded-circle">
                                        <img src="{{URL::asset('build/img/certificates/certificate-01.svg')}}" alt="img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Contact Details</h5>
                                <div class="d-flex align-items-center mb-4">
                                    <span class="contact-icon rounded-circle d-flex align-items-center justify-content-center me-3">
                                        <i class="fa-regular fa-envelope"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-0">Email</h6>
                                        <p class="mb-0">jennywilson@example.com</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-4">
                                    <span class="contact-icon rounded-circle d-flex align-items-center justify-content-center me-3">
                                        <i class="isax isax-location"></i>
                                    </span>
                                    <div>
                                        <h6 class="fs-16 fw-medium text-gray-9 mb-0">Address</h6>
                                        <p class="mb-0 text-truncate">877 Ferry Street, Huntsville, Alabama</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="contact-icon rounded-circle d-flex align-items-center justify-content-center me-3">
                                        <i class="isax isax-call"></i>
                                    </span>
                                    <div>
                                        <h6 class="fs-16 fw-medium text-gray-9 mb-0">Phone</h6>
                                        <p class="mb-0">+1(452) 125-6789</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Instructor -->
@endsection
