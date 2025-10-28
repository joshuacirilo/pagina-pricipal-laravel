<?php $page = 'student-change-password'; ?>
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
                <!-- profile box -->
                <div class="profile-card overflow-hidden bg-blue-gradient2 mb-5 p-5">
                    <div class="profile-card-bg">
                        <img src="{{URL::asset('build/img/bg/card-bg-01.png')}}" class="profile-card-bg-1" alt="">
                    </div>
                        <div class="row align-items-center row-gap-3">
                                <div class="col-md-6">
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
                                <div class="col-md-6">
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
                        <div class="mb-3">
                            <h5>Settings</h5>
                        </div>				
                        
                            <ul class="settings-nav d-flex align-items-center flex-wrap border bg-light-900 rounded">
                                <li><a href="{{url('student-settings')}}">Edit Profile</a></li>
                                <li><a href="{{url('student-change-password')}}" class="active">Security</a></li>
                                <li><a href="{{url('student-social-profile')}}">Social Profiles</a></li>
                                <li><a href="{{url('student-linked-accounts')}}">Linked Accounts</a></li>
                                <li><a href="{{url('student-notifications')}}">Notifications</a></li>
                                <li><a href="{{url('student-billing-address')}}">Billing Address</a></li>
                            </ul>
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="border-bottom mb-4 pb-4">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <h5 class="mb-1 fs-18">Change Password</h5>
                                                    <p>Can't remember your current password? <a href="#" class="text-decoration-underline">Reset your password via email</a></p>
                                                </div>
                                                <form action="{{url('student-change-password')}}">
                                                    <div class="mb-3 position-relative">
                                                        <label class="form-label">Current Password <span class="text-danger"> *</span></label>
                                                        <div class="position-relative">
                                                            <input type="password" class="pass-input form-control">
                                                            <span class="isax toggle-password isax-eye-slash text-gray-7 fs-14"></span>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 position-relative">
                                                        <label class="form-label">New Password <span class="text-danger"> *</span></label>
                                                        <div class="position-relative" id="passwordInput">
                                                            <input type="password" class="pass-inputs form-control">
                                                            <span class="isax toggle-passwords isax-eye-slash text-gray-7 fs-14"></span>
                                                        </div>
                                                        <div class="password-strength" id="passwordStrength">
                                                            <span id="poor"></span>
                                                            <span id="weak"></span>
                                                            <span id="strong"></span>
                                                            <span id="heavy"></span>
                                                        </div>
                                                        <div class="mt-2 fs-14" id="passwordInfo">Use 8 or more characters with a mix of letters, numbers & symbols.</div>	
                                                    </div>
                                                    <div class="mb-3 position-relative">
                                                        <label class="form-label">Confirm Password <span class="text-danger"> *</span></label>
                                                        <div class="position-relative">
                                                            <input type="password" class="pass-inputa form-control">
                                                            <span class="isax toggle-passworda isax-eye-slash text-gray-7 fs-14"></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-secondary" type="submit">Change Password</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <h5 class="mb-1 fs-18">Change Email</h5>
                                                <p>Your current email address is <a href="#" class="fw-semibold">richard@example.com</a></p>
                                            </div>
                                            <form action="{{url('student-change-password')}}">
                                                <div class="mb-3">
                                                    <label class="form-label">New Email Address <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div>
                                                    <button class="btn btn-secondary" type="submit">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
@endsection