<?php $page = 'student-quiz'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            My Quiz Attempts
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            My Quiz Attempts
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
                        <h5>My Quiz Attempts</h5>
                    </div>
                            <div class="d-flex align-items-center justify-content-between border p-3 mb-3 rounded-2">
                                <div>
                                    <h6 class="mb-1"><a href="{{url('student-quiz-questions')}}">Information About UI/UX Design Degree</a></h6>
                                    <p class="fs-14">Number of Questions : 05</p>
                                </div>
                                <div>
                                    <a href="{{url('student-quiz-questions')}}" class="arrow-next"><i class="isax isax-arrow-right-1"></i></a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between border p-3 pb-3 mb-3 rounded-2">
                                <div>
                                    <h6 class="mb-1"><a href="{{url('student-quiz-questions')}}">Learn JavaScript and Express to become a Expert</a></h6>
                                    <p class="fs-14">Number of Questions : 10</p>
                                </div>
                                <div>
                                    <a href="{{url('student-quiz-questions')}}" class="arrow-next"><i class="isax isax-arrow-right-1"></i></a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between border p-3 pb-3 mb-3 rounded-2">
                                <div>
                                    <h6 class="mb-1"><a href="{{url('student-quiz-questions')}}">Introduction to Python Programming</a></h6>
                                    <p class="fs-14">Number of Questions : 08</p>
                                </div>
                                <div>
                                    <a href="{{url('student-quiz-questions')}}" class="arrow-next"><i class="isax isax-arrow-right-1"></i></a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between border p-3 pb-3 mb-3 rounded-2">
                                <div>
                                    <h6 class="mb-1"><a href="{{url('student-quiz-questions')}}">Build Responsive Websites with HTML5 and CSS3</a></h6>
                                    <p class="fs-14">Number of Questions : 05</p>
                                </div>
                                <div>
                                    <a href="{{url('student-quiz-questions')}}" class="arrow-next"><i class="isax isax-arrow-right-1"></i></a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between border p-3 pb-3 mb-3 rounded-2">
                                <div>
                                    <h6 class="mb-1"><a href="{{url('student-quiz-questions')}}">Information About Photoshop Design Degree</a></h6>
                                    <p class="fs-14">Number of Questions : 10</p>
                                </div>
                                <div>
                                    <a href="{{url('student-quiz-questions')}}" class="arrow-next"><i class="isax isax-arrow-right-1"></i></a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between border p-3 rounded-2">
                                <div>
                                    <h6 class="mb-1"><a href="{{url('student-quiz-questions')}}">C# Developers Double Your Coding with Visual Studio</a></h6>
                                    <p class="fs-14">Number of Questions : 07</p>
                                </div>
                                <div>
                                    <a href="{{url('student-quiz-questions')}}" class="arrow-next"><i class="isax isax-arrow-right-1"></i></a>
                                </div>
                            </div>
                    <!-- /pagination -->
                    <div class="row align-items-center mt-3">
                        <div class="col-md-2">
                            <p class="pagination-text">Page 1 of 2</p>
                        </div>
                        <div class="col-md-10">
                            <ul class="pagination lms-page justify-content-center justify-content-md-end mt-2 mt-md-0">
                                <li class="page-item prev">
                                    <a class="page-link" href="javascript:void(0)" tabindex="-1"><i class="fas fa-angle-left"></i></a>
                                </li>
                                <li class="page-item first-page active">
                                    <a class="page-link" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">3</a>
                                </li>
                                <li class="page-item next">
                                    <a class="page-link" href="javascript:void(0)"><i class="fas fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /pagination -->
                </div>
            </div>
        </div>
    </div>
@endsection