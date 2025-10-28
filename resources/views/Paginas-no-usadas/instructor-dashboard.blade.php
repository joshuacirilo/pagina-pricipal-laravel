<?php $page = 'instructor-dashboard'; ?>
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
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <span class="icon-box bg-primary-transparent me-2 me-xxl-3 flex-shrink-0">
                                                <img src="{{URL::asset('build/img/icon/graduation.svg')}}" alt="">
                                            </span>
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
                                            <span class="icon-box bg-secondary-transparent me-2 me-xxl-3 flex-shrink-0">
                                                <img src="{{URL::asset('build/img/icon/book.svg')}}" alt="">
                                            </span>
                                            <div>
                                                <span class="d-block">Active Courses</span>
                                                <h4 class="fs-24 mt-1">08</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <span class="icon-box bg-success-transparent me-2 me-xxl-3 flex-shrink-0">
                                                <img src="{{URL::asset('build/img/icon/bookmark.svg')}}" alt="">
                                            </span>
                                            <div>
                                                <span class="d-block">Completed Courses</span>
                                                <h4 class="fs-24 mt-1">06</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <span class="icon-box bg-info-transparent me-2 me-xxl-3 flex-shrink-0">
                                                <img src="{{URL::asset('build/img/icon/user-octagon.svg')}}" alt="">
                                            </span>
                                            <div>
                                                <span class="d-block">Total Students</span>
                                                <h4 class="fs-24 mt-1">17</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <span class="icon-box bg-blue-transparent me-2 me-xxl-3 flex-shrink-0">
                                                <img src="{{URL::asset('build/img/icon/book-2.svg')}}" alt="">
                                            </span>
                                            <div>
                                                <span class="d-block">Total Courses</span>
                                                <h4 class="fs-24 mt-1">11</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <span class="icon-box bg-purple-transparent me-2 me-xxl-3 flex-shrink-0">
                                                <img src="{{URL::asset('build/img/icon/money-add.svg')}}" alt="">
                                            </span>
                                            <div>
                                                <span class="d-block">Total Earnings</span>
                                                <h4 class="fs-24 mt-1">$486</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center flex-wrap gap-3 justify-content-between border-bottom mb-2 pb-3">
                                    <h5 class="fw-bold">Earnings by Year</h5> 
                                    <div class="input-icon position-relative input-range-picker">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-calendar"></i>
                                        </span>
                                        <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                    </div>
                                </div>
                                <div id="earnnings_chart"></div>
                            </div>
                        </div>
                        <h5 class="mb-3 fw-bold">Recently Created Courses</h5>
                        <div class="table-responsive custom-table">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Courses</th>
                                        <th>Enrolled</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="course-title d-flex align-items-center">
                                                <a href="{{url('course-details')}}" class="avatar avatar-xl flex-shrink-0 me-2"><img src="{{URL::asset('build/img/instructor/instructor-table-01.jpg')}}" alt="Img"></a>
                                                <div>
                                                    <p class="fw-medium"><a href="{{url('course-details')}}">Complete HTML, CSS and Javascript<br> Course</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0</td>
                                        <td>Published</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="course-title d-flex align-items-center">
                                                <a href="{{url('course-details')}}" class="avatar avatar-xl flex-shrink-0 me-2"><img src="{{URL::asset('build/img/instructor/instructor-table-02.jpg')}}" alt="Img"></a>
                                                <div>
                                                    <p class="fw-medium"><a href="{{url('course-details')}}">Complete Course on Fullstack Web<br> Developer</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>Published</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="course-title d-flex align-items-center">
                                                <a href="{{url('course-details')}}" class="avatar avatar-xl flex-shrink-0 me-2"><img src="{{URL::asset('build/img/instructor/instructor-table-03.jpg')}}" alt="Img"></a>
                                                <div>
                                                    <p class="fw-medium"><a href="{{url('course-details')}}">Data Science Fundamentals and<br> Advanced Bootcampr</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>Published</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="course-title d-flex align-items-center">
                                                <a href="{{url('course-details')}}" class="avatar avatar-xl flex-shrink-0 me-2"><img src="{{URL::asset('build/img/instructor/instructor-table-04.jpg')}}" alt="Img"></a>
                                                <div>
                                                    <p class="fw-medium"><a href="{{url('course-details')}}">Master Microservices with Spring Boot<br> and Spring Cloud</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>Published</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="course-title d-flex align-items-center">
                                                <a href="{{url('course-details')}}" class="avatar avatar-xl flex-shrink-0 me-2"><img src="{{URL::asset('build/img/instructor/instructor-table-05.jpg')}}" alt="Img"></a>
                                                <div>
                                                    <p class="fw-medium"><a href="{{url('course-details')}}">Information About UI/UX Design<br> Degree</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0</td>
                                        <td>Published</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
