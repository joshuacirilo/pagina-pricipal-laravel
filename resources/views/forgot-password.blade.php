<?php $page = 'forgot-password'; ?>
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
                                <h1 class="fs-32 fw-bold mb-3">Forgot Password</h1>
                                <p class="fs-14 fw-normal mb-0">Enter your email to reset your password.</p>
                            </div>
                            <form action="{{url('set-password')}}" class="mb-3 pb-3"> 
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Email<span class="text-danger ms-1">*</span></label>
                                    <div class="position-relative">
                                        <input type="email" class="form-control form-control-lg">
                                        <span><i class="isax isax-sms input-icon text-gray-7 fs-14"></i></span>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-secondary btn-lg" type="submit">Submit<i class="isax isax-arrow-right-3 ms-1"></i></button>
                                </div>
                            </form>

                            <p class="fs-14 fw-normal d-flex align-items-center justify-content-center">
                                Remember Password?<a href="{{url('login')}}" class="link-2 ms-1"> Sign In</a>
                            </p>

                            <!-- /Login -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
