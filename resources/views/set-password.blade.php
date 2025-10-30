<?php $page = 'set-password'; ?>
@extends('layout.mainlayout')
@section('content')

<div class="login-content">
    <div class="row">
        <!-- Login Banner -->
        <div class="col-lg-6 login-bg d-none d-lg-flex">
            <div class="login-carousel">
                <div>
                    <div class="login-carousel-section mb-3">
                        <div class="login-banner">
                            <img src="{{URL::asset('build/img/auth/auth-1.svg')}}" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h3 class="mb-2">Welcome to <br>Dreams<span class="text-secondary">LMS</span> Courses.</h3>
                            <p>Platform designed to help organizations, educators, and learners manage, deliver, and track learning and training activities.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="login-carousel-section mb-3">
                        <div class="login-banner">
                            <img src="{{URL::asset('build/img/auth/auth-1.svg')}}" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h3 class="mb-2">Welcome to <br>Dreams<span class="text-secondary">LMS</span> Courses.</h3>
                            <p>Platform designed to help organizations, educators, and learners manage, deliver, and track learning and training activities.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="login-carousel-section mb-3">
                        <div class="login-banner">
                            <img src="{{URL::asset('build/img/auth/auth-1.svg')}}" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h3 class="mb-2">Welcome to <br>Dreams<span class="text-secondary">LMS</span> Courses.</h3>
                            <p>Platform designed to help organizations, educators, and learners manage, deliver, and track learning and training activities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Login Banner -->

        <div class="col-lg-6 login-wrap-bg">
            <!-- Login -->
            <div class="login-wrapper">
                <div class="loginbox">
                    <div class="w-100">
                        <div class="d-flex align-items-center justify-content-between login-header">
                            <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="Logo">
                            <a href="{{url('index')}}" class="link-1">Back to Home</a>
                        </div>
                        <div class="topic">
                            <h1 class="fs-32 fw-bold ">Set Password</h1>
                            <p class="fw-normal fs-14 mb-0">Your new password must be different from previous password</p>
                        </div>
                        <form action="{{url('instructor-dashboard')}}" class="mb-3 pb-3">
                            <div class="mb-3 position-relative">
                                <label class="form-label">New Password <span class="text-danger"> *</span></label>
                                <div class="position-relative" id="passwordInput">
                                    <input type="password" class="pass-inputs form-control form-control-lg">
                                    <span class="isax toggle-passwords isax-eye-slash text-gray-7 fs-14"></span>
                                </div>
                                <div class="password-strength" id="passwordStrength">
                                    <span id="poor"></span>
                                    <span id="weak"></span>
                                    <span id="strong"></span>
                                    <span id="heavy"></span>
                                </div>
                                <div class="mt-2" id="passwordInfo"></div>	
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-label">Confirm Password <span class="text-danger"> *</span></label>
                                <div class="position-relative">
                                    <input type="password" class="pass-inputa form-control">
                                    <span class="isax toggle-passworda isax-eye-slash text-gray-7 fs-14"></span>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-secondary btn-lg" type="submit">Reset Password <i class="isax isax-arrow-right-3 ms-1"></i></button>
                            </div>
                        </form>
                        <!-- /Login -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection