<?php $page = 'student-profile'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            My Profile
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            My Profile
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
                            <h5 class="fw-bold">My Profile</h5>
                            <a href="#" class="edit-profile-icon"><i class="isax isax-edit-2"></i></a>
                        </div>
                        <div class="card mb-0">
                            <div class="card-body">
                                <h6 class="fs-18 page-title fw-bold">Basic Information</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <h6>First Name</h6>
                                            <span>Ronald</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <h6>Last Name</h6>
                                            <span>Richard</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <h6>Registration Date</h6>
                                            <span>16 Jan 2024, 11:15 AM</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <h6>User Name</h6>
                                            <span>studentdemo</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <h6>Phone Number</h6>
                                            <span>90154-91036</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <h6>Email</h6>
                                            <span>studentdemo@example.com</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <h6>Gender</h6>
                                            <span>Male</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <h6>DOB</h6>
                                            <span>16 Jan 2020</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <h6>Age</h6>
                                            <span>24</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div>
                                            <h6>Bio</h6>
                                            <span>Hello! I'm Ronald Richard. I'm passionate about developing innovative software solutions, analyzing classic literature. I aspire to become a software developer, work as an editor. In my free time, I enjoy coding, reading, hiking etc.
                                            </span>
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
