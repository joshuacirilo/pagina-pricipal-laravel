<?php $page = 'instructor-quiz'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
        Quiz
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
        Quiz
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
                    <div class="page-title d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold">Quiz</h5>
                        <div>
                            <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add_quiz">Add Quiz</a>
                        </div>
                    </div>
                    <div class="border rounded-2 p-3 mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div>
                                    <h6 class="mb-2"><a href="{{url('instructor-quiz-questions')}}">Information About UI/UX Design Degree</a></h6>
                                    <div class="question-info d-flex align-items-center">
                                        <p class="d-flex align-items-center fs-14 me-2 pe-2 border-end mb-0"><i class="isax isax-message-question5 text-primary-soft me-2"></i>25 Questions</p>
                                        <p class="d-flex align-items-center fs-14 mb-0"><i class="isax isax-clock5 text-secondary-soft me-2"></i>30 Minutes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-end mt-2 mt-md-0">
                                    <a href="{{url('instructor-quiz-results')}}" class="text-info text-decoration-underline fs-12 fw-medium me-3">View Results</a>
                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_quiz"><i class="isax isax-edit-2"></i></a>
                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded-2 p-3 mb-3">
                        <div class="row align-items-center gy-3">
                            <div class="col-md-8">
                                <div>
                                    <h6 class="mb-2"><a href="{{url('instructor-quiz-questions')}}">Learn JavaScript and Express to become a Expert</a></h6>
                                    <div class="question-info d-flex align-items-center">
                                        <p class="d-flex align-items-center fs-14 me-2 pe-2 border-end mb-0"><i class="isax isax-message-question5 text-primary-soft me-2"></i>15 Questions</p>
                                        <p class="d-flex align-items-center fs-14 mb-0"><i class="isax isax-clock5 text-secondary-soft me-2"></i>25 Minutes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-end mt-2 mt-md-0">
                                    <a href="{{url('instructor-quiz-results')}}" class="text-info text-decoration-underline fs-12 fw-medium me-3">View Results</a>
                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_quiz"><i class="isax isax-edit-2"></i></a>
                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded-2 p-3 mb-3">
                        <div class="row align-items-center gy-3">
                            <div class="col-md-8">
                                <div>
                                    <h6 class="mb-2"><a href="{{url('instructor-quiz-questions')}}">Introduction to Python Programming</a></h6>
                                    <div class="question-info d-flex align-items-center">
                                        <p class="d-flex align-items-center fs-14 me-2 pe-2 border-end mb-0"><i class="isax isax-message-question5 text-primary-soft me-2"></i>22 Questions</p>
                                        <p class="d-flex align-items-center fs-14 mb-0"><i class="isax isax-clock5 text-secondary-soft me-2"></i>15 Minutes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-end mt-2 mt-md-0">
                                    <a href="{{url('instructor-quiz-results')}}" class="text-info text-decoration-underline fs-12 fw-medium me-3">View Results</a>
                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_quiz"><i class="isax isax-edit-2"></i></a>
                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded-2 p-3 mb-3">
                        <div class="row align-items-center gy-3">
                            <div class="col-md-8">
                                <div>
                                    <h6 class="mb-2"><a href="{{url('instructor-quiz-questions')}}">Build Responsive Websites with HTML5 and CSS3</a></h6>
                                    <div class="question-info d-flex align-items-center">
                                        <p class="d-flex align-items-center fs-14 me-2 pe-2 border-end mb-0"><i class="isax isax-message-question5 text-primary-soft me-2"></i>30 Questions</p>
                                        <p class="d-flex align-items-center fs-14 mb-0"><i class="isax isax-clock5 text-secondary-soft me-2"></i>50 Minutes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-end mt-2 mt-md-0">
                                    <a href="{{url('instructor-quiz-results')}}" class="text-info text-decoration-underline fs-12 fw-medium me-3">View Results</a>
                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-edit-2"></i></a>
                                    <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded-2 p-3 mb-3 mb-0">
                        <div class="row align-items-center gy-3">
                            <div class="col-md-8">
                                <div>
                                    <h6 class="mb-2"><a href="{{url('instructor-quiz-questions')}}">Information About Photoshop Design Degree</a></h6>
                                    <div class="question-info d-flex align-items-center">
                                        <p class="d-flex align-items-center fs-14 me-2 pe-2 border-end mb-0"><i class="isax isax-message-question5 text-primary-soft me-2"></i>20 Questions</p>
                                        <p class="d-flex align-items-center fs-14 mb-0"><i class="isax isax-clock5 text-secondary-soft me-2"></i>20 Minutes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-end mt-2 mt-md-0">
                                    <a href="{{url('instructor-quiz-results')}}" class="text-info text-decoration-underline fs-12 fw-medium me-3">View Results</a>
                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_quiz"><i class="isax isax-edit-2"></i></a>
                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
   
@endsection
