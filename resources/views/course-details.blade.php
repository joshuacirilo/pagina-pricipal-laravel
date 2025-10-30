<?php $page = 'course-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Course Detail
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Course Detail
        @endslot
    @endcomponent
        <!-- Course detail -->
        <section class="course-details-two">
            <div class="container">
                    <div class="row">
                    <div class="col-12">
                        <div class="card bg-light">
                            <div class="card-body d-lg-flex align-items-center">
                                <div class="position-relative">
                                    <a href="https://www.youtube.com/embed/1trvO6dqQUI" id="openVideoBtn" target="_blank">
                                        <img class="img-fluid rounded-2" src="{{URL::asset('build/img/course/video-bg.jpg')}}" alt="img">
                                        <div class="play-icon">
                                            <i class="ti ti-player-play-filled fs-28"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="videoModal">
                                    <div class="modal-content1">
                                        <span class="close-btn" id="closeModal">&times;</span>
                                        <iframe id="youtubeIframe" allowfullscreen></iframe>
                                    </div>
                                    </div>
                                <div class="w-100 ps-lg-4">
                                    <h3 class="mb-2">The Complete Web Developer Course 2.0</h3>
                                    <p class="fs-14 mb-3">Learn Web Development by building 25 websites and mobile apps using HTML, CSS, Javascript, PHP, Python</p>
                                    <div class="d-flex align-items-center gap-2 gap-sm-3 gap-xl-4 flex-wrap my-3 my-sm-0">
                                        <p class="fw-medium d-flex align-items-center mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/book.svg')}}" alt="img">12+ Lesson</p>
                                        <p class="fw-medium d-flex align-items-center mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/timer-start.svg')}}" alt="img">9hr 30min</p>
                                        <p class="fw-medium d-flex align-items-center mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/people.svg')}}" alt="img">32 students enrolled</p>
                                        <span class="badge badge-sm rounded-pill bg-warning fs-12">Web Development</span>
                                    </div>
                                    <div class="d-sm-flex align-items-center justify-content-sm-between mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg">
                                                <img class="rounded-circle" src="{{URL::asset('./build/img/avatar/avatar10.jpg')}}" alt="img">
                                            </div>
                                            <div class="ms-2">
                                            <h5 class="fs-18 fw-semibold"><a href="{{url('instructor-details')}}">Nicole Brown</a></h5>
                                            <p class="fs-14">Instructor</p>
                                        </div>
                                        </div>
                                        <div class="d-flex mt-sm-0 mt-2 align-items-center">
                                            <i class="fa-solid fa-star text-warning me-1"></i>
                                            <i class="fa-solid fa-star text-warning me-1"></i>
                                            <i class="fa-solid fa-star text-warning me-1"></i>
                                            <i class="fa-solid fa-star text-warning me-1"></i>
                                            <i class="fa-solid fa-star text-gray-1 me-1"></i>
                                            <p class=" fs-14"><span class="text-gray-9">4.0</span> (15) </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <div>
                            <img src="{{URL::asset('build/img/course/course-details-two-2.jpg')}}" alt="img" class="img-fluid mb-4">
                        </div>
                        <div class="course-page-content pt-0">
                            <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="mb-3">Overview</h5>
                                <h6 class="mb-2">Course Description</h6>
                                <p>Embark on a transformative journey into AI with Mike Wheeler, your guide in this Udemy Best Seller course on ChatGPT and Prompt Engineering. As an experience instructor who has taught well over 300,000 students, Mike unveils the secrets of developing your own custom GPTs, ensuring your skills shine in the thriving digital marketplace. </p>
                                <p>This course will get your familiar with Generative AI and the effective use of ChatGPT and is perfect for the beginner. You will also learn advanced prompting techniques to take your Prompt Engineering skills to the next level!</p>
                                <h6 class="mb-2">What you'll learn</h6>
                                <ul class="custom-list mb-3">
                                    <li class="list-item">Become a UX designer</li>
                                    <li class="list-item">You will be able to add UX designer to your CV</li>
                                    <li class="list-item">Become a UI designer</li>
                                    <li class="list-item">Build & test a full website design.</li>
                                    <li class="list-item">Build & test a full mobile app.</li>
                                </ul>
                                <h6 class="mb-2">Requirements</h6>
                                <ul class="custom-list mb-0">
                                    <li class="list-item">You will need a copy of Adobe XD 2019 or above. A free trial can be downloaded from Adobe.</li>
                                    <li class="list-item">No previous design experience is needed.</li>
                                    <li class="list-item">No previous Adobe XD skills are needed.</li>
                                </ul>
                            </div>
                            </div>
                            <div class="card mb-4">
                            <div class="card-body">
                            <div class="d-flex justify-content-between flex-wrap">
                            <h5 class="subs-title mb-2 mb-sm-3">Course Content</h5>
                            <h6 class="fs-16 fw-medium text-gray-7 mb-3">92 Lectures <span class="text-secondary">10:56:11</span></h6>
                        </div>
                        <div class="accordion accordion-customicon1 accordions-items-seperate p-0" id="accordioncustomicon1Example">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon1One">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1One" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                    Getting Started <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                </h2>
                                <div id="collapsecustomicon1One" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example">
                                    <div class="accordion-body p-0">
                                        <ul>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.1 Introduction to the User Experience Course</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.2 Exercise: Your first design challenge</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.3 How to solve the previous exercise</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.4 Find out why smart objects are amazing</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.5 How to use text layers effectively</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon1Two">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two" aria-expanded="false" aria-controls="collapsecustomicon1Two">
                                    The Brief<i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                </h2>
                                <div id="collapsecustomicon1Two" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Two" data-bs-parent="#accordioncustomicon1Example">
                                    <div class="accordion-body p-0">
                                        <ul>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.1 Introduction to the User Experience Course</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.2 Exercise: Your first design challenge</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.3 How to solve the previous exercise</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.4 Find out why smart objects are amazing</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.5 How to use text layers effectively</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" >
                                <h2 class="accordion-header" id="headingcustomicon1Three">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three" aria-expanded="false" aria-controls="collapsecustomicon1Three">
                                    Wireframing Low Fidelity<i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                </h2>
                                <div id="collapsecustomicon1Three" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Three" data-bs-parent="#accordioncustomicon1Example">
                                    <div class="accordion-body p-0">
                                        <ul>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.1 Introduction to the User Experience Course</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.2 Exercise: Your first design challenge</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.3 How to solve the previous exercise</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.4 Find out why smart objects are amazing</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.5 How to use text layers effectively</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-0">
                                <h2 class="accordion-header" id="headingcustomicon1Four">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Four" aria-expanded="false" aria-controls="collapsecustomicon1Four">
                                    Type, Color & Icon Introduction<i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                </h2>
                                <div id="collapsecustomicon1Four" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Four" data-bs-parent="#accordioncustomicon1Example">
                                    <div class="accordion-body p-0">
                                        <ul>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.1 Introduction to the User Experience Course</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.2 Exercise: Your first design challenge</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.3 How to solve the previous exercise</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.4 Find out why smart objects are amazing</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                            <li class="p-4 px-3 pb-0 d-flex justify-content-between">
                                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">Lecture1.5 How to use text layers effectively</p>   
                                                <div class="d-flex gap-xl-5 gap-3">
                                                <a href="#" class="preview-link">Preview</a>
                                                <p class="mb-0">02:53</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                            
                        </div>
                        </div>
                            </div>
                            <div class="card mb-4">
                            <div class="card-body">
                            <h5 class="subs-title mb-4">About the instructor</h5>
                            <div class="d-flex align-items-center justify-content-between mt-4 gap-2 flex-wrap">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img class="rounded-circle" src="{{URL::asset('./build/img/avatar/avatar10.jpg')}}" alt="img">
                                    </div>
                                    <div class="ms-2">
                                    <a href="{{url('instructor-details')}}" class="name-link">Nicole Brown</a>
                                    <p class="mb-0 fs-14">UX/UI Designer</p>
                                </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                    <i class="fa-solid fa-star text-warning me-1"></i>
                                    <i class="fa-solid fa-star text-warning me-2"></i>
                                    <p class="mb-0 fs-14">4.5</p>
                                </div>
                            </div>
                            <div class="course-info align-items-center d-flex gap-2 gap-xl-3 mt-3 mb-3 flex-wrap">
                                <p class="fw-medium d-flex align-items-center fs-14 mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play2.svg')}}" alt="img">5 Courses</p>
                                <p class="fw-medium d-flex align-items-center fs-14 mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/book2.svg')}}" alt="img">12+ Lesson</p>
                                <p class="fw-medium d-flex align-items-center fs-14 mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/timer-start2.svg')}}" alt="img">9hr 30min</p>
                                <p class="fw-medium d-flex align-items-center fs-14 mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/people.svg')}}" alt="img">270,866 students enrolled</p>
                            </div>
                            <p>UI/UX Designer, with 7+ Years Experience. Guarantee of High Quality Work.</p>
                            <h6 class="fs-16 mb-2">Skills: </h6>
                            <p>Web Design, UI Design, UX/UI Design, Mobile Design, User Interface Design, Sketch, Photoshop, GUI, Html, Css, Grid Systems, Typography, Minimal, Template, English, Bootstrap, Responsive Web Design, Pixel Perfect, Graphic Design, Corporate, Creative, Flat, Luxury and much more.</p>
                            <h6 class="fs-16 mb-2">Available for:</h6>
                            <ol class="ordered-list">
                            <li class="list-items">Full Time Office Work</li>
                            <li class="list-items">Remote Work</li>
                            <li class="list-items">Freelance</li>
                            <li class="list-items">Contract</li>
                            <li class="list-items mb-0">Worldwide</li>
                            </ol>
                        </div>
                            </div>
                            <div class="card">
                            <div class="card-body">
                            <h5 class="subs-title mb-3">Post A comment</h5>
                            <form class="course-details-form">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control" type="email">
                                    </div>
                                    </div>
                                        <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Subject</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    </div>
                                    <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Comments</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn post-btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-sidebar-sec mt-0">
                            <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h2 class="text-success fs-30">FREE</h2>
                                    <p class="fs-14 mb-0"><span class="text-decoration-line-through me-2">$99.00</span>50% off</p>
                                </div>
                                <div class="d-flex justify-content-between gap-3 wishlist-btns">
                                    <a class="btn d-flex btn-wish" href="{{url('student-wishlist')}}"><i class="isax isax-heart me-1 fs-18"></i>Add to Wishlist</a>
                                    <a class="btn d-flex btn-wish" href="#"><i class="ti ti-share me-1 fs-18"></i>Share</a>
                                </div>
                                <a href="{{url('cart')}}" class="btn btn-primary w-100 mt-3 btn-enroll">Enroll Now</a>
                            </div>
                            </div>
                            <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="subs-title mb-4">Includes</h5>
                                <p class="mb-3"><img class="me-2" src="{{URL::asset('./build/img/icons/play.svg')}}" alt="img">11 hours on-demand video</p>
                                <p class="mb-3"><img class="me-2" src="{{URL::asset('./build/img/icons/import.svg')}}" alt="img">69 downloadable resources</p>
                                <p class="mb-3"><img class="me-2" src="{{URL::asset('./build/img/icons/key.svg')}}" alt="img">Full lifetime access</p>
                                <p class="mb-3"><img class="me-2" src="{{URL::asset('./build/img/icons/monitor-mobbile.svg')}}" alt="img">Access on mobile and TV</p>
                                <p class="mb-3"><img class="me-2" src="{{URL::asset('./build/img/icons/cloud-lightning.svg')}}" alt="img">Assignments</p>
                                <p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/teacher.svg')}}" alt="img">Certificate of Completion</p>
                            </div>
                            </div>
                            <div class="card">
                            <div class="card-body cou-features">
                                <h5 class="subs-title">Course Features</h5>
                                <ul>
                                    <li><p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/people2.svg')}}" alt="img">Enrolled: 32 students</p></li>
                                    <li><p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/timer-start3.svg')}}" alt="img">Duration: 20 hours</p></li>
                                    <li><p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/note.svg')}}" alt="img">Chapters: 15</p></li>
                                    <li><p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/play3.svg')}}" alt="img">Video: 12 hours</p></li>
                                    <li><p class="mb-0"><img class="me-2" src="{{URL::asset('./build/img/icons/chart.svg')}}" alt="img">Level: Beginner</p></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Course detail -->
@endsection
