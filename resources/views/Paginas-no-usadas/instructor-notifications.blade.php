<?php $page = 'instructor-notifications'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Settings
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Settings
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
                    <div class="mb-3">
                        <h5>Settings</h5>
                    </div>							
                    <ul class="settings-nav d-flex align-items-center flex-wrap border bg-light-900 rounded">
                        <li><a href="{{url('instructor-settings')}}">Profile</a></li>
                        <li><a href="{{url('instructor-change-password')}}">Security</a></li>
                        <li><a href="{{url('instructor-plans')}}">Plans</a></li>
                        <li><a href="{{url('instructor-social-profiles')}}">Social Profiles</a></li>
                        <li><a href="{{url('instructor-linked-accounts')}}">Linked Accounts</a></li>
                        <li><a href="{{url('instructor-notifications')}}" class="active">Notifications</a></li>
                        <li><a href="{{url('instructor-integrations')}}">Integrations</a></li>
                        <li><a href="{{url('instructor-withdraw')}}">Withdraw</a></li>
                    </ul>
                    
                    <form>
                        <!-- Title -->
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-4 mb-4">
                            <h5 class="fs-18 mb-0">General Notifications</h5>
                            <button class="btn btn-sm btn-dark" type="button">Toggle all</button>
                        </div>

                        <!-- Item -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <!-- Content -->
                            <div>
                                <h6>Student Questions</h6>
                                <small>Notify me when a student asks a question in the Q&A section</small>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0 ms-3">
                                <input class="form-check-input" type="checkbox" id="checkPrivacy1" checked="">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <!-- Content -->
                            <div>
                                <h6>Feedback Received</h6>
                                <small>Notify me when receive feedback from students</small>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0 ms-3">
                                <input class="form-check-input" type="checkbox" id="7" checked="">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <!-- Content -->
                            <div>
                                <h6>Quiz/Exam Results Submission</h6>
                                <small>Notify me when quiz or exam results are submitted</small>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0 ms-3">
                                <input class="form-check-input" type="checkbox" id="4">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <!-- Content -->
                            <div>
                                <h6>Forum Activity</h6>
                                <small>Notify me about new posts or replies in course discussion forums.</small>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0 ms-3">
                                <input class="form-check-input" type="checkbox" id="5">
                            </div>
                        </div>
                        
                    </form>
                    <div class="text-center my-5"></div>
                    <form>
                        <!-- Title -->
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-4 mb-4">
                            <h5 class="fs-18 mb-0">Email Notifications</h5>
                            <button class="btn btn-sm btn-dark" type="button">Toggle all</button>
                        </div>

                        <!-- Item -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <!-- Content -->
                            <div>
                                <h6>Course Enrolment</h6>
                                <small>Send me emails when a new student enrolls the course</small>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0 ms-3">
                                <input class="form-check-input" type="checkbox" id="checkPrivacy6" checked="">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <!-- Content -->
                            <div>
                                <h6>Assignment Submission</h6>
                                <small>Send me email whenever an assignment is submitted by a student</small>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0 ms-3">
                                <input class="form-check-input" type="checkbox" id="checkPrivacy7" checked="">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <!-- Content -->
                            <div>
                                <h6>Course Comments</h6>
                                <small>Get notified about comments on your posts and replies to your comments.</small>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0 ms-3">
                                <input class="form-check-input" type="checkbox" id="6">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <!-- Content -->
                            <div>
                                <h6>Course Reminders</h6>
                                <small>Receive booking assistance reminders to stay updated on your scheduled sessions.</small>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0 ms-3">
                                <input class="form-check-input" type="checkbox" id="6">
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <!-- Content -->
                            <div>
                                <h6>System Updates</h6>
                                <small>Send me emails about updates to the LMS platform </small>
                            </div>
                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md mb-0 ms-3">
                                <input class="form-check-input" type="checkbox" id="6">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
