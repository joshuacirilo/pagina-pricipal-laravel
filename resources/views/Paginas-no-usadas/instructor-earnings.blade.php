<?php $page = 'instructor-earnings'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Earnings
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Earnings
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
                            <h5>Earnings</h5>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <span class="earnings-icon bg-success">
                                                <i class="isax isax-dollar-circle4"></i>
                                            </span>
                                            <div class="ms-3">
                                            <h6 class="mb-1">Revenue</h6>
                                                <h5 class="fw-bold text-success mb-1">$8420</h5>
                                                <p>Earning this month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <span class="earnings-icon bg-secondary">
                                                <i class="isax isax-star5"></i>
                                            </span>
                                            <div class="ms-3">
                                                <h6 class="mb-1">Courses Ratings</h6>
                                                <h5 class="fw-bold text-secondary mb-1">4.8</h5>
                                                <p>Rating this month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <span class="earnings-icon bg-info">
                                                <i class="isax isax-profile-tick5"></i>
                                            </span>
                                            <div class="ms-3">
                                            <h6 class="mb-1">Students Enrolled</h6>
                                            <h5 class="fw-bold text-info mb-1">12000</h5>
                                            <p>New this month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                        <h5>Earnings by Year</h5>
                                        <div class="icon-form mb-0">
                                            <span class="form-icon"><i class="isax isax-calendar-1 fs-16"></i></span>
                                            <input type="text" class="form-control yearpicker" placeholder="2025">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="earnigs_chart"></div>
                                    </div>
                                </div>										
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                <h5>Earnings</h5>
                                <div class="icon-form mb-0">
                                    <span class="form-icon"><i class="isax isax-calendar-1 fs-16"></i></span>
                                    <input type="text" class="form-control bookingrange" placeholder="01 Jan 2025 - 31 Jan 2025">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive custom-table">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Date</th>
                                                <th>Course</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="order"><a href="#">ORD010</a></td>
                                                <td>28 Jan 2025</td>
                                                <td><a href="{{url('course-details')}}">Information about UI/UX Design Degree</a></td>
                                                <td>$160</td>												
                                            </tr>
                                            <tr>
                                                <td class="order"><a href="#">ORD009</td>
                                                <td>22 Jan 2025</td>
                                                <td><a href="{{url('course-details')}}">Wordpress for Beginners - Master Wordpress Quickly</a></td>
                                                <td>$140</td>												
                                            </tr>	
                                            <tr>
                                                <td class="order"><a href="#">ORD008</td>
                                                <td>17 Jan 2025</td>
                                                <td><a href="{{url('course-details')}}">Sketch from A to Z (2022): Become an app designer</a></td>
                                                <td>$200</td>												
                                            </tr>
                                            <tr>
                                                <td class="order"><a href="#">ORD007</a></td>
                                                <td>08 Jan 2025</td>
                                                <td><a href="{{url('course-details')}}">Learn Angular Fundamental From beginning to advance</a></td>
                                                <td>$170</td>												
                                            </tr>	
                                            <tr>
                                                <td class="order"><a href="#">ORD006</a></td>
                                                <td>03 Jan 2025</td>
                                                <td><a href="{{url('course-details')}}">C# Developers Double Your Coding Speed</a></td>
                                                <td>$120</td>												
                                            </tr>								
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
