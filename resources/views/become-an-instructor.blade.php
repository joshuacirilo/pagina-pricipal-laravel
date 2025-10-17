<?php $page = 'become-an-instructor'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Become an Instructor
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Become an Instructor
        @endslot
    @endcomponent

        <!-- share your knowledge -->
        <div class="share-your-knowledge">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pe-xl-5">
                    <div class="share-knowledge-content">
                        <div class="section-header">
                            <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Share Knowledge</span>
                            <h2>Share Your Knowledge. Inspire the Future.</h2>
                            <p>Share your knowledge, inspire learners worldwide, and earn while doing what you love. Join a community of experts transforming education through engaging and accessible content.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="bg-secondary-transparent d-flex justify-content-center align-items-center p-3 rounded-pill"><img src="./build/img/icons/instructor-icon1.svg" alt="img"></span>
                                            </div>    
                                            <div>
                                                <h6 class="mb-1">Flexible Work</h6>
                                                <p class="text-truncate line-clamb-1">Teach at your own pace.</p>
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="bg-secondary-transparent d-flex justify-content-center align-items-center p-3 rounded-pill"><img src="./build/img/icons/instructor-icon2.svg" alt="img"></span>
                                            </div>    
                                            <div>
                                                <h6 class="mb-1">Earning Potential</h6>
                                                <p class="text-truncate line-clamb-1">Monetize your expertise.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="bg-secondary-transparent d-flex justify-content-center align-items-center p-3 rounded-pill"><img src="./build/img/icons/instructor-icon3.svg" alt="img"></span>
                                            </div>    
                                            <div>
                                                <h6 class="mb-1">Impact</h6>
                                                <p class="text-truncate line-clamb-1">Reach and educate </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="bg-secondary-transparent d-flex justify-content-center align-items-center p-3 rounded-pill"><img src="./build/img/icons/instructor-icon4.svg" alt="img"></span>
                                            </div>    
                                            <div>
                                                <h6 class="mb-1">Support</h6>
                                                <p class="text-truncate line-clamb-1">Access to dedicated support</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="btn register-btn-1 d-inline-flex align-items-center">Register Now <i class="isax isax-arrow-right-3 ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="share-your-knowledge-img d-none d-lg-flex">
                        <img src="{{URL::asset('build/img/shapes/shape-4.png')}}" alt="img" class="img-fluid become-instructor-bg-02">
                        <img src="{{URL::asset('build/img/shapes/shape-5.png')}}" alt="img" class="img-fluid become-instructor-bg-01">
                        <img src="{{URL::asset('build/img/shapes/shape-3.png')}}" alt="img" class="img-fluid become-instructor-bg-03"> 
                        <img src="{{URL::asset('build/img/feature/feature-5.jpg')}}" alt="img" class="img-fluid rounded-4 become-instructor-bg-04"> 
                        <img src="{{URL::asset('build/img/feature/feature-6.jpg')}}" alt="img" class="img-fluid rounded-4 become-instructor-bg-05"> 
                        <img src="{{URL::asset('build/img/shapes/shape-7.svg')}}" alt="img" class="img-fluid become-instructor-bg-06"> 
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- share your knowledge -->

        <!-- how it works -->
        <div class="how-it-works-sec bg-light-900">
            <div class="container">
                <div class="section-header">
                    <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Our Workflow</span>
                    <h2>How It Works</h2>
                    <p>Turn Your Expertise into Impact in Just 3 Simple Steps!</p>
                </div>
                <div class="row row-gap-4">
                    <div class="col-lg-4">
                        <div class="share-knowledge-item-2">
                            <img src="./build/img/icons/how-it-works-1.svg" alt="img">
                            <h5 class="mt-3 mb-2">Apply & Get Approved</h5>
                            <p class="text-truncate line-clamb-2">Submit your application and get approved to access the platform</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="share-knowledge-item-2">
                            <img src="./build/img/icons/how-it-works-2.svg" alt="img">
                            <h5 class="mt-3 mb-2">Create & Upload Content</h5>
                            <p class="text-truncate line-clamb-2">Develop and upload your courses, including videos, lessons, quizzes, and assignments.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="share-knowledge-item-2">
                            <img src="./build/img/icons/how-it-works-3.svg" alt="img">
                            <h5 class="mt-3 mb-2">Teach & Earn</h5>
                            <p class="text-truncate line-clamb-2">Reach learners worldwide, teach, and start earning while making an impact.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- how it works -->

        <!-- counter -->
        <div class="counter-sec">
            <div class="container">
                <div class="row row-gap-4">
                    <div class="col-xl-3 col-md-6">
                        <div class="become-instructor-item-3 mb-0">
                            <div class="d-flex align-items-center">
                                <div class="counter-icon">
                                    <img src="./build/img/icons/counter-icon1.svg" alt="img">
                                </div>
                                <div class="count-content ps-1 pb-2">
                                    <h4 class="text-info"><span class="count-digit">10</span>K</h4>
                                    <p class="fw-medium text-truncate">Online Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="become-instructor-item-3 mb-0">
                            <div class="d-flex align-items-center">
                                <div class="counter-icon">
                                    <img src="./build/img/icons/counter-icon2.svg" alt="img">
                                </div>
                                <div class="count-content ps-1 pb-2">
                                    <h4 class="text-warning"><span class="count-digit">200</span>+</h4>
                                    <p class="fw-medium text-truncate">Expert Tutors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="become-instructor-item-3 mb-0">
                            <div class="d-flex align-items-center">
                                <div class="counter-icon">
                                    <img src="./build/img/icons/counter-icon3.svg" alt="img">
                                </div>
                                <div class="count-content ps-1 pb-2">
                                    <h4 class="text-skyblue"><span class="count-digit">6</span>K+</h4>
                                    <p class="fw-medium text-truncate">Certified Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="become-instructor-item-3 mb-0">
                            <div class="d-flex align-items-center">
                                <div class="counter-icon">
                                    <img src="./build/img/icons/counter-icon4.svg" alt="img">
                                </div>
                                <div class="count-content ps-1 pb-2">
                                    <h4 class="text-lightgreen"><span class="count-digit">60</span>K+</h4>
                                    <p class="fw-medium text-truncate">Online Students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter -->

        <!-- register -->
        <div class="register-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="rounded-4 pe-lg-5">
                            <img class="img-fluid rounded-5 d-none d-lg-flex" src="{{URL::asset('build/img/feature/feature-4.jpg')}}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="register-section p-4 p-sm-5 p-md-6">
                            <h5 class="mb-2">Register</h5>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label mb-1">Name<span class="ms-1 text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label mb-1">Email<span class="ms-1 text-danger">*</span></label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label mb-1">Phone Number<span class="ms-1 text-danger">*</span></label>
                                            <input type="tel" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3 position-relative">
                                            <label class="form-label mb-1">Password<span class="ms-1 text-danger">*</span></label>
                                            <div class="position-relative">
                                                <input type="password" class="pass-inputs form-control">
                                                <span class="isax toggle-passwords isax-eye-slash text-gray-7 fs-14"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <label class="form-label mb-1">Confirm Password<span class="ms-1 text-danger">*</span></label>
                                            <div class="position-relative">
                                                <input type="password" class="pass-input form-control">
                                                <span class="isax toggle-password isax-eye-slash text-gray-7 fs-14"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-secondary btn-lg w-100 justify-content-center">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="become-an-instructor rounded-2 bg-primary position-relative mt-5 p-5">
                    <img src="./build/img/shapes/instructor-bg-1.png" alt="img" class="instructor-bg-1">
                    <img src="./build/img/shapes/instructor-bg-2.png" alt="img" class="instructor-bg-2">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="text-white mb-2 mblg-3">Become an Instructor</h3>
                            <p class="text-light">Turn your expertise into impactful courses and inspire learners worldwide. Join our community of instructors and start your journey today!</p>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-lg-end justify-content-center">
                            <a href="#" class="btn btn-secondary btn-lg mt-3 mt-lg-0">Start Teaching Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- register -->

@endsection