<?php $page = 'login'; ?>
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
                            <h1 class="fs-32 fw-bold topic">Sign into Your Account</h1>
                            <form action="{{url('instructor-dashboard')}}" class="mb-3 pb-3">
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Email<span class="text-danger ms-1">*</span></label>
                                    <div class="position-relative">
                                        <input type="email" class="form-control form-control-lg">
                                        <span><i class="isax isax-sms input-icon text-gray-7 fs-14"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Password <span class="text-danger ms-1">*</span></label>
                                    <div class="position-relative" id="passwordInput">
                                        <input type="password" class="pass-inputs form-control form-control-lg">
                                        <span class="isax toggle-passwords isax-eye-slash fs-14"></span>
                                    </div>	
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="remember-me d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label ms-2" for="flexCheckDefault">
                                            Remember Me
                                        </label>
                                    </div>
                                    <div class="">
                                        <a href="{{url('forgot-password')}}" class="link-2">
                                            Forgot Password ?
                                        </a>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-secondary btn-lg" type="submit">Login <i class="isax isax-arrow-right-3 ms-1"></i></button>
                                </div>
                            </form>

                            <div class="d-flex align-items-center justify-content-center or fs-14 mb-3">
                                Or
                            </div>

                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <a href="javascript:void(0);" class="btn btn-light me-2"><img src="{{URL::asset('build/img/icons/google.svg')}}" alt="img" class="me-2">Google</a>
                                <a href="javascript:void(0);" class="btn btn-light"><img src="{{URL::asset('build/img/icons/facebook.svg')}}" alt="img" class="me-2">Facebook</a>
                            </div>

                            <div class="fs-14 fw-normal d-flex align-items-center justify-content-center">
                                Don't you have an account?<a href="{{url('register')}}" class="link-2 ms-1"> Sign up</a>
                            </div>

                            <!-- /Login -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
