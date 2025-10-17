<?php $page = 'student-quiz-questions'; ?>
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
                    <div class="col-lg-9 quiz-wizard">
                        <fieldset id="first-field">
                            <div class="page-title d-flex align-items-center justify-content-between">
                                <h5>My Quiz Attempts</h5>
                            </div>
                            <div class="quiz-attempt-card border-0">
                                <div class="quiz-attempt-body p-0">
                                    <div class="border p-3 mb-3 rounded-2">
                                    <div class="bg-light border p-3 mb-3 rounded-2 flex-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <div class="mb-2 mb-md-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                            <img class="img-fluid rounded-3" src="{{URL::asset('build/img/students/quiz.jpg')}}" alt="">
                                                        </div>
                                                        <h5 class="fs-18">Information About UI/UX Design Degree</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-md-end">
                                                    <p class="d-inline-flex align-items-center mb-0">
                                                        <i class="isax isax-clock me-1"></i>
                                                        00:02:21 
                                                        <span class="text-dark ms-1"> / 00:03:00</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <span class="fw-semibold text-gray-9">Quiz Progress</span>
                                            <span>Question 1 out of 5</span>
                                        </div>
                                        <div class="progress progress-xs  flex-grow-1 mb-1">
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <h6 class="mb-3">What does UI stand for?</h6>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-1" id="Radio-sm-1">
                                            <label class="form-check-label" for="Radio-sm-1">
                                                User Intention
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-1" id="Radio-sm-2">
                                            <label class="form-check-label" for="Radio-sm-2">
                                                User Interface
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-1" id="Radio-sm-3">
                                            <label class="form-check-label" for="Radio-sm-3">
                                                Universal Interaction
                                            </label>
                                        </div>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="qusetion-1" id="Radio-sm-4">
                                            <label class="form-check-label" for="Radio-sm-4">
                                                Usability Information
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="text-end">
                                        <button type="button" class="btn btn-secondary rounded-pill next_btn">Next<i class="isax isax-arrow-right-3 ms-1 fs-10"></i></button>
                                    </div>
                                </div>
                            </div>
                        
                        </fieldset>
                
                        <fieldset>
                            <div class="page-title d-flex align-items-center justify-content-between">
                                <h5>My Quiz Attempts</h5>
                            </div>
                            <div class="quiz-attempt-card border-0">								
                                <div class="quiz-attempt-body p-0">
                                    <div class="border p-3 mb-3 rounded-2">
                                        <div class="bg-light border p-3 mb-3 rounded-2 flex-wrap">
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <div class="mb-2 mb-md-0">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                                <img class="img-fluid rounded-3" src="{{URL::asset('build/img/students/quiz.jpg')}}" alt="">
                                                            </div>
                                                            <h5 class="fs-18">Information About UI/UX Design Degree</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="text-md-end">
                                                        <p class="d-inline-flex align-items-center mb-0">
                                                            <i class="isax isax-clock me-1"></i>
                                                            00:02:21 
                                                            <span class="text-dark ms-1"> / 00:03:00</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <span class="fw-semibold text-gray-9">Quiz Progress</span>
                                            <span>Question 2 out of 5</span>
                                        </div>
                                        <div class="progress progress-xs  flex-grow-1 mb-1">
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <h6 class="mb-3">Which of the following is a principle of UX design?</h6>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-2" id="Radio-sm-5">
                                            <label class="form-check-label" for="Radio-sm-5">
                                                Minimalistic Design
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-2" id="Radio-sm-6">
                                            <label class="form-check-label" for="Radio-sm-6">
                                                User-Centered Design
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-2" id="Radio-sm-7">
                                            <label class="form-check-label" for="Radio-sm-7">
                                                Gradient Usage
                                            </label>
                                        </div>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="qusetion-2" id="Radio-sm-8">
                                            <label class="form-check-label" for="Radio-sm-8">
                                                Typography Hierarchy
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="btn bg-gray-100 d-inline-flex rounded-pill align-items-center prev_btn me-1"><i class="isax isax-arrow-left-2 me-1 fs-10"></i>Previous</a>
                                        <button type="button" class="btn btn-secondary rounded-pill next_btn">Next<i class="isax isax-arrow-right-3 ms-1 fs-10"></i></button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="page-title d-flex align-items-center justify-content-between">
                                <h5>My Quiz Attempts</h5>
                            </div>
                            <div class="quiz-attempt-card border-0">						
                                <div class="quiz-attempt-body p-0">
                                    <div class="border p-3 mb-3 rounded-2">
                                        <div class="bg-light border p-3 mb-3 rounded-2 flex-wrap">
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <div class="mb-2 mb-md-0">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                                <img class="img-fluid rounded-3" src="{{URL::asset('build/img/students/quiz.jpg')}}" alt="">
                                                            </div>
                                                            <h5 class="fs-18">Information About UI/UX Design Degree</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="text-md-end">
                                                        <p class="d-inline-flex align-items-center mb-0">
                                                            <i class="isax isax-clock me-1"></i>
                                                            00:02:21 
                                                            <span class="text-dark ms-1"> / 00:03:00</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <span class="fw-semibold text-gray-9">Quiz Progress</span>
                                            <span>Question 3 out of 5</span>
                                        </div>
                                        <div class="progress progress-xs  flex-grow-1 mb-1">
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <h6 class="mb-3">Which tool is commonly used for wireframing?</h6>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-3" id="Radio-sm-9">
                                            <label class="form-check-label" for="Radio-sm-9">
                                                Adobe Photoshop
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-3" id="Radio-sm-10">
                                            <label class="form-check-label" for="Radio-sm-10">
                                                Figma
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-3" id="Radio-sm-11">
                                            <label class="form-check-label" for="Radio-sm-11">
                                                Visual Studio Code
                                            </label>
                                        </div>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="qusetion-3" id="Radio-sm-12">
                                            <label class="form-check-label" for="Radio-sm-12">
                                                GitHub
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="btn bg-gray-100 d-inline-flex rounded-pill align-items-center prev_btn me-1"><i class="isax isax-arrow-left-2 me-1 fs-10"></i>Previous</a>
                                        <button type="button" class="btn btn-secondary rounded-pill next_btn">Next<i class="isax isax-arrow-right-3 ms-1 fs-10"></i></button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="page-title d-flex align-items-center justify-content-between">
                                <h5>My Quiz Attempts</h5>
                            </div>
                            <div class="quiz-attempt-card border-0">
                                <div class="quiz-attempt-body p-0">
                                    <div class="border p-3 mb-3 rounded-2">
                                        <div class="bg-light border p-3 mb-3 rounded-2 flex-wrap">
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <div class="mb-2 mb-md-0">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                                <img class="img-fluid rounded-3" src="{{URL::asset('build/img/students/quiz.jpg')}}" alt="">
                                                            </div>
                                                            <h5 class="fs-18">Information About UI/UX Design Degree</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="text-md-end">
                                                        <p class="d-inline-flex align-items-center mb-0">
                                                            <i class="isax isax-clock me-1"></i>
                                                            00:02:21 
                                                            <span class="text-dark ms-1"> / 00:03:00</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <span class="fw-bold text-gray-9">Quiz Progress</span>
                                            <span>Question 4 out of 5</span>
                                        </div>
                                        <div class="progress progress-xs  flex-grow-1 mb-1">
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <h6 class="mb-3">What is a wireframe?</h6>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-4" id="Radio-sm-13">
                                            <label class="form-check-label" for="Radio-sm-13">
                                                A detailed, interactive prototype
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-4" id="Radio-sm-14">
                                            <label class="form-check-label" for="Radio-sm-14">
                                                A low-fidelity representation of a design
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-4" id="Radio-sm-15">
                                            <label class="form-check-label" for="Radio-sm-15">
                                                The codebase of a website
                                            </label>
                                        </div>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="qusetion-4" id="Radio-sm-16">
                                            <label class="form-check-label" for="Radio-sm-16">
                                                A high-fidelity design concept
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="btn btn-light d-inline-flex rounded-pill align-items-center prev_btn me-1"><i class="isax isax-arrow-left-2 me-1 fs-10"></i>Back</a>
                                        <button type="button" class="btn btn-secondary rounded-pill next_btn">Next<i class="isax isax-arrow-right-3 ms-1 fs-10"></i></button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="page-title d-flex align-items-center justify-content-between">
                                <h5>My Quiz Attempts</h5>
                            </div>
                            <div class="quiz-attempt-card border-0">								
                                <div class="quiz-attempt-body p-0">
                                    <div class="border p-3 mb-3 rounded-2">
                                        <div class="bg-light border p-3 mb-3 rounded-2 flex-wrap">
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <div class="mb-2 mb-md-0">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                                <img class="img-fluid rounded-3" src="{{URL::asset('build/img/students/quiz.jpg')}}" alt="">
                                                            </div>
                                                            <h5 class="fs-18">Information About UI/UX Design Degree</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="text-md-end">
                                                        <p class="d-inline-flex align-items-center mb-0">
                                                            <i class="isax isax-clock me-1"></i>
                                                            00:02:21 
                                                            <span class="text-dark ms-1"> / 00:03:00</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <span class="fw-bold text-gray-9">Quiz Progress</span>
                                            <span>Question 5 out of 5</span>
                                        </div>
                                        <div class="progress progress-xs  flex-grow-1 mb-1">
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <h6 class="mb-3">What is the primary goal of UX design?</h6>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-4" id="Radio-sm-17">
                                            <label class="form-check-label" for="Radio-sm-17">
                                                To create a visually appealing design
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-4" id="Radio-sm-18">
                                            <label class="form-check-label" for="Radio-sm-18">
                                                To enhance user satisfaction and usability
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="qusetion-4" id="Radio-sm-19">
                                            <label class="form-check-label" for="Radio-sm-19">
                                                To develop complex navigation flows
                                            </label>
                                        </div>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="qusetion-4" id="Radio-sm-20">
                                            <label class="form-check-label" for="Radio-sm-20">
                                                To optimize code performance
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="btn bg-gray-100 d-inline-flex rounded-pill align-items-center prev_btn me-1"><i class="isax isax-arrow-left-2 me-1 fs-10"></i>Back</a>
                                        <button type="button" class="btn btn-secondary rounded-pill next_btn">Finish</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="page-title d-flex align-items-center justify-content-between">
                                <h5>My Quiz Attempts</h5>
                            </div>
                            <div class="card">							
                                <div class="card-body">								
                                    <div class="quiz-circle-progress m-0 mb-3">
                                        <div class="circle-progress mb-2"  data-value='80'>
                                            <span class="progress-left">
                                                <span class="progress-bar border-success"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar border-success"></span>
                                            </span>
                                            <div class="progress-value text-success fw-bold fs-24">80%</div>
                                        </div>
                                        <p class="text-center fs-14">Pass Score : 80%</p>
                                    </div>
                                    <div class="text-center mb-3">
                                        <h6 class="mb-1">Congratulations! You Passed</h6>
                                        <p class="fs-14">You’ve successfully passed the quiz. Keep up the great work!</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{url('student-dashboard')}}" class="btn btn-secondary rounded-pill"><i class="isax isax-arrow-left-2 me-1 fs-10"></i>Back to Dashboard</a>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="page-title d-flex align-items-center justify-content-between">
                                <h5>My Quiz Attempts</h5>
                            </div>
                            <div class="quiz-attempt-card">					
                                <div class="quiz-attempt-body">							
                                    <div class="quiz-circle-progress m-0 mb-3">
                                        <div class="circle-progress mb-2"  data-value='20'>
                                            <span class="progress-left">
                                                <span class="progress-bar border-danger"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar border-danger"></span>
                                            </span>
                                            <div class="progress-value text-danger fw-bold fs-24">20%</div>
                                        </div>
                                        <p class="text-center fs-14">Pass Score : 20%</p>
                                    </div>
                                    <div class="text-center mb-3">
                                        <h6 class="mb-1">Sorry, You Didn't Pass This Time</h6>
                                        <p class="fs-14">Don't worry, learn from this attempt and come back stronger next time!</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{url('student-dashboard')}}" class="btn btn-secondary rounded-pill"><i class="isax isax-arrow-left-2 me-1 fs-10"></i>Back to Dashboard</a>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
@endsection    