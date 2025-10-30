<?php $page = 'students'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Students Grid
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Students Grid
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
                        <div class="page-title d-flex align-items-center justify-content-between">
                            <h5 class="fw-bold">Students</h5>
                            <div class="d-flex align-items-center list-icons">
                                <a href="{{url('student-list')}}" class="me-2"><i class="isax isax-task"></i></a>
                                <a href="{{url('students')}}" class="active"><i class="isax isax-element-3"></i></a>
                                
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-4">
                                <div class="input-icon mb-3">
                                    <span class="input-icon-addon">
                                        <i class="isax isax-search-normal-14"></i>
                                    </span>
                                    <input type="email" class="form-control form-control-md" placeholder="Search">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <a href="{{url('student-details')}}"><img src="{{URL::asset('build/img/students/student-01.jpg')}}" class="rounded-3" alt=""></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                            <div>
                                                <h5 class="mb-2 fw-bold"><a href="{{url('student-details')}}">Ronald Richard</a></h5>
                                                <span class="text-info d-inline-flex align-items-center"><i class="isax isax-location me-1"></i><a href="#" class="text-info text-decoration-underline stu-loc">Newyork</a></span>
                                            </div>
                                            <a href="#" class="avatar avatar-md avatar-rounded border"><i class="isax isax-messages text-gray-9 fs-14"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between fs-14">
                                            <span class="d-inline-flex align-items-center"><i class="isax isax-calendar-add5 text-primary me-1"></i>22 Aug 2025</span>
                                            <span class="d-inline-flex align-items-center"><i class="isax isax-teacher5 text-secondary me-1"></i>10 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <a href="{{url('student-details')}}"><img src="{{URL::asset('build/img/students/student-02.jpg')}}" class="rounded-3" alt=""></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                            <div>
                                                <h5 class="mb-2 fw-bold"><a href="{{url('student-details')}}">Mona Nancy</a></h5>
                                                <span class="text-info d-inline-flex align-items-center"><i class="isax isax-location me-1"></i><a href="#" class="text-info text-decoration-underline stu-loc">Los Angels</a></span>
                                            </div>
                                            <a href="#" class="avatar avatar-md avatar-rounded border"><i class="isax isax-messages text-gray-9 fs-14"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between fs-14">
                                            <span class="d-inline-flex align-items-center"><i class="isax isax-calendar-add5 text-primary me-1"></i>15 Jul 2025</span>
                                            <span class="d-inline-flex align-items-center"><i class="isax isax-teacher5 text-secondary me-1"></i>08 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <a href="{{url('student-details')}}"><img src="{{URL::asset('build/img/students/student-03.jpg')}}" class="rounded-3" alt=""></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                            <div>
                                                <h5 class="mb-2 fw-bold"><a href="{{url('student-details')}}">Patrick Alleman</a></h5>
                                                <span class="text-info d-inline-flex align-items-center"><i class="isax isax-location me-1"></i><a href="#" class="text-info text-decoration-underline stu-loc">Alabama</a></span>
                                            </div>
                                            <a href="#" class="avatar avatar-md avatar-rounded border"><i class="isax isax-messages text-gray-9 fs-14"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between fs-14">
                                            <span class="d-inline-flex align-items-center"><i class="isax isax-calendar-add5 text-primary me-1"></i>18 Jun 2025</span>
                                            <span class="d-inline-flex align-items-center"><i class="isax isax-teacher5 text-secondary me-1"></i>12 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <a href="{{url('student-details')}}"><img src="{{URL::asset('build/img/students/student-04.jpg')}}" class="rounded-3" alt=""></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                            <div>
                                                <h5 class="mb-2 fw-bold"><a href="{{url('student-details')}}">Olive Paxson</a></h5>
                                                <span class="text-info d-inline-flex align-items-center"><i class="isax isax-location me-1"></i><a href="#" class="text-info text-decoration-underline stu-loc">Brisbane</a></span>
                                            </div>
                                            <a href="#" class="avatar avatar-md avatar-rounded border"><i class="isax isax-messages text-gray-9 fs-14"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between fs-14">
                                            <span class="d-inline-flex align-items-center"><i class="isax isax-calendar-add5 text-primary me-1"></i>03 May 2025</span>
                                            <span class="d-inline-flex align-items-center"><i class="isax isax-teacher5 text-secondary me-1"></i>07 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <a href="{{url('student-details')}}"><img src="{{URL::asset('build/img/students/student-05.jpg')}}" class="rounded-3" alt=""></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                            <div>
                                                <h5 class="mb-2 fw-bold"><a href="{{url('student-details')}}">Chris Thomas</a></h5>
                                                <span class="text-info d-inline-flex align-items-center"><i class="isax isax-location me-1"></i><a href="#" class="text-info text-decoration-underline stu-loc">Newyork</a></span>
                                            </div>
                                            <a href="#" class="avatar avatar-md avatar-rounded border"><i class="isax isax-messages text-gray-9 fs-14"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between fs-14">
                                            <span class="d-inline-flex align-items-center"><i class="isax isax-calendar-add5 text-primary me-1"></i>14 Apr 2025</span>
                                            <span class="d-inline-flex align-items-center"><i class="isax isax-teacher5 text-secondary me-1"></i>04 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <a href="{{url('student-details')}}"><img src="{{URL::asset('build/img/students/student-06.jpg')}}" class="rounded-3" alt=""></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                            <div>
                                                <h5 class="mb-2 fw-bold"><a href="{{url('student-details')}}">Joyce Perron</a></h5>
                                                <span class="text-info d-inline-flex align-items-center"><i class="isax isax-location me-1"></i><a href="#" class="text-info text-decoration-underline stu-loc">Ontoro</a></span>
                                            </div>
                                            <a href="#" class="avatar avatar-md avatar-rounded border"><i class="isax isax-messages text-gray-9 fs-14"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between fs-14">
                                            <span class="d-inline-flex align-items-center"><i class="isax isax-calendar-add5 text-primary me-1"></i>17 Mar 2025</span>
                                            <span class="d-inline-flex align-items-center"><i class="isax isax-teacher5 text-secondary me-1"></i>06 Courses</span>
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