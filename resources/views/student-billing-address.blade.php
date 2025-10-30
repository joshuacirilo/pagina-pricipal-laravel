<?php $page = 'student-billing-address'; ?>
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
            
                <!-- Profile -->
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
                <!-- /Profile -->
                
                <div class="row">
                
                    @component('components.sidebar')
                    @endcomponent
                        
                    <div class="col-lg-9">
                        <div class="mb-3">
                            <h5>Settings</h5>
                        </div>													
                        <ul class="settings-nav d-flex align-items-center flex-wrap border bg-light-900 rounded">
                            <li><a href="{{url('student-settings')}}">Edit Profile</a></li>
                            <li><a href="{{url('student-change-password')}}">Security</a></li>
                            <li><a href="{{url('student-social-profile')}}">Social Profiles</a></li>
                            <li><a href="{{url('student-linked-accounts')}}">Linked Accounts</a></li>
                            <li><a href="{{url('student-notifications')}}">Notifications</a></li>
                            <li><a href="{{url('student-billing-address')}}" class="active">Billing Address</a></li>
                        </ul>
                        <div class="card mb-0">
                            <div class="card-body">
                                <form action="{{url('student-change-password')}}">
                                    <div class="d-sm-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                        <div class="d-flex align-items-center mb-2 mb-sm-0">
                                            <div>
                                                <h6 class="mb-1">Home <span class="badge bg-soft-success ms-1 fs-12 fw-normal">Default</span></h6>
                                                <p>16 Lake Floyd Circle, Newark, DE 19714</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="btn btn-light btn-sm border me-2" data-bs-toggle="modal" data-bs-target="#edit_billing"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            <a href="#" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-1"></i>Delete</a>
                                        </div>
                                    </div>
                                    <div class="d-sm-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
                                        <div class="d-flex align-items-center mb-2 mb-sm-0">
                                            <div>
                                                <h6 class="mb-1">Work</h6>
                                                <p>33 Hart Country Lane, West Point, GA 31833</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="btn btn-light btn-sm border me-2" data-bs-toggle="modal" data-bs-target="#edit_billing"><i class="isax isax-edit-2 me-2"></i>Edit</a>
                                            <a href="#" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-1"></i>Delete</a>
                                        </div>
                                    </div>
                                </form>	
                                <div class="mt-4">
                                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add_billing">Add New Address</a>
                                </div>
                            </div>
                        </div>						
                    </div>
                </div>
            </div>
        </div>    
@endsection