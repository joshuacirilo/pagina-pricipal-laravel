<?php $page = 'instructor-withdraw'; ?>
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
                            <li><a href="{{url('instructor-integrations')}}">Integrations</a></li>
                            <li><a href="{{url('instructor-withdraw')}}" class="active">Withdraw</a></li>
                        </ul>
                        <form action="{{url('instructor-withdraw')}}">
                          <div class="withdraw-method">
                          <h5 class="fs-18 mb-3">Select a withdraw method</h5>
                          <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item mb-3" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Bank Transfer <span>Minimum withdraw $50</span></button>
                            </li>
                            <li class="nav-item mb-3" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Stripe<span>Minimum withdraw $50</span></button>
                            </li>
                            <li class="nav-item mb-3" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">PayPal<span>Minimum withdraw $50</span></button>
                            </li>
                         </ul>
                         
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Account Name<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Account Number<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Bank Name<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">IBAN<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">BIC / SWIFT<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-secondary" type="submit">Save Withdrawal Account</button>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="mb-3">
                                        <label class="form-label">Stripe Email Address<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control mb-1" value="test@example.com">
                                        <span class="fs-14">We will use this email address to send the money to your Stripe account</span>
                                    </div>
                                    <button class="btn btn-secondary" type="submit">Save Withdrawal Account</button>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="mb-3">
                                    <label class="form-label">PayPal Email Address<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control mb-1" value="test@example.com">
                                    <span class="fs-14">We will use this email address to send the money to your PayPal account</span>
                                </div>
                                <button class="btn btn-secondary" type="submit">Save Withdrawal Account</button>
                            </div>
                        </div>
                          </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
