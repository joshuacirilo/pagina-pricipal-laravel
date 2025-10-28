<?php $page = 'instructor-integrations'; ?>
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
                            <li><a href="{{url('instructor-notifications')}}">Notifications</a></li>
                            <li><a href="{{url('instructor-integrations')}}" class="active">Integrations</a></li>
                            <li><a href="{{url('instructor-withdraw')}}">Withdraw</a></li>
                        </ul>
                            <div class="card">
                            <div class="card-body">
                        <form action="{{url('instructor-settings')}}">
                            <div class="d-flex align-items-center justify-content-between border mb-3 p-3 rounded-3">
                                <div class="meet-icon me-3 flex-shrink-0">
                                    <img src="{{URL::asset('./build/img/icons/meet-icon-1.svg')}}" alt="img">
                                </div>
                                <div class="d-flex align-items-center justify-content-between w-100">
                                <div>
                                    <h6 class="mb-1">Zoom Meeting</h6>
                                    <p class="small">A virtual platform for real-time video, audio, and screen-sharing collaboration.</p>
                                </div>
                                <div class="form-check form-switch form-check-md mb-0">
                                    <input class="form-check-input" type="checkbox" id="checkZoom" checked="">
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Client ID <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Client Secret Key <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4 mt-1">
                            <div class="d-flex align-items-center justify-content-between border mb-3 p-3 rounded-3">
                                <div class="meet-icon me-3 flex-shrink-0">
                                    <img src="{{URL::asset('./build/img/icons/meet-icon-2.svg')}}" alt="img">
                                </div>
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <div>
                                        <h6 class="mb-1">Google Meet</h6>
                                        <p class="small">A video conferencing platform for seamless virtual meetings, collaboration, and screen sharing.</p>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-0">
                                        <input class="form-check-input" type="checkbox" id="checkGoogle" checked="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Client ID <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Client Secret Key <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-secondary">Save Changes</a>
                        </form>
                            </div>
                            </div>
                </div>
            </div>
        </div>
    </div>

@endsection    