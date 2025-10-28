<?php $page = 'course-watch'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
        Course watch
        @endslot
        @slot('item1')
           Home
        @endslot
        @slot('item2')
        Course watch
        @endslot
    @endcomponent

    <!-- Course watch -->
    <div class="content pt-0">
        <div class="container-fluid">
            <div class="course-watch-section">
                <div class="row">
                    <div class="col-lg-4  border-end">
                        <div class="progress-overview-section">
                            <div class="mb-4">
                                <a href="javascript:void(0);" class="back-to-course"><i class="isax isax-arrow-left me-1"></i>Back to Course</a>
                            </div>
                            <h3>
                                Learn Responsive Web Design Essentials
                            </h3>
                            <div class="mb-4">
                                <p class="mb-1">46% Complete</p>
                                <div class="progress progress-xs mb-2" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 70%"></div>
                                </div>
                                <span class="fw-medium">Last activity on April 20, 2025</span>
                            </div>

                            <div class="accordions-items-seperate" id="accordionSpacingExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingSpacingOne3">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#SpacingOne" aria-expanded="false" aria-controls="SpacingOne">
                                            <div>
                                                <span class="d-block mb-1">Section 1</span>
                                                <h6 class="mb-0">Html Introduction</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="SpacingOne" class="accordion-collapse collapse show" aria-labelledby="headingSpacingOne3" data-bs-parent="#accordionSpacingExample">
                                        <div class="accordion-body">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="d-flex"><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                    <p class="accordian-content mb-0">Introduction</p>
                                                </div>
                                                <span>
                                                    2m 10s
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="d-flex"><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                    <p class="accordian-content mb-0">What is HTML</p>
                                                </div>
                                                <span>
                                                    2m 10s
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="d-flex"><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                    <p class="accordian-content mb-0">What is a Web page?</p>
                                                </div>
                                                <span>
                                                    2m 10s
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingSpacingTwo">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#SpacingTwo" aria-expanded="false" aria-controls="SpacingTwo">
                                            <div>
                                                <span class="d-block mb-1">Section 2</span>
                                                <h6 class="mb-0">Your First webpage</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="SpacingTwo" class="accordion-collapse collapse" aria-labelledby="headingSpacingTwo" data-bs-parent="#accordionSpacingExample">
                                        <div class="accordion-body">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="d-flex"><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                    <p class="accordian-content mb-0">Introduction</p>
                                                </div>
                                                <span>
                                                    2m 10s
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="d-flex"><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                    <p class="accordian-content mb-0">What is HTML</p>
                                                </div>
                                                <span>
                                                    2m 10s
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="d-flex"><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                    <p class="accordian-content mb-0">What is a Web page?</p>
                                                </div>
                                                <span>
                                                    2m 10s
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingSpacingThree">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#SpacingThree" aria-expanded="false" aria-controls="SpacingThree">
                                            <div>
                                                <span class="d-block mb-1">Section 3</span>
                                                <h6 class="mb-0">Your First webpage</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="SpacingThree" class="accordion-collapse collapse" aria-labelledby="headingSpacingThree" data-bs-parent="#accordionSpacingExample">
                                        <div class="accordion-body">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="d-flex"><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                    <p class="accordian-content mb-0">Introduction</p>
                                                </div>
                                                <span>
                                                    2m 10s
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="d-flex"><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                    <p class="accordian-content mb-0">What is HTML</p>
                                                </div>
                                                <span>
                                                    2m 10s
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="d-flex"><i class="isax isax-play-circle5 text-success fs-24 me-1"></i></span>
                                                    <p class="accordian-content mb-0">What is a Web page?</p>
                                                </div>
                                                <span>
                                                    2m 10s
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="course-watch-content">
                            <div class="position-relative video-btn">
                                <a href="https://www.youtube.com/embed/1trvO6dqQUI" id="openVideoBtn" target="_blank">
                                    <img class="img-fluid" src="{{URL::asset('build/img/course/course-27.jpg')}}" alt="img">
                                    <div class="play-icon">
                                        <i class="fa-solid fa-play fs-28"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="videoModal">
                                <div class="modal-content1">
                                <span class="close-btn" id="closeModal">&times;</span>
                                <iframe id="youtubeIframe" allowfullscreen></iframe>
                                </div>
                            </div>
                            <ul class="nav-tabs mb-4 nav-justified border-0 nav-style-1 d-sm-flex d-block" role="tablist">
                                <li class="nav-item active">
                                <a class="btn nav-link active" data-bs-toggle="tab" role="tab" href="#overview"
                                    aria-selected="false">Overview</a>
                                </li>
                                <li class="nav-item">
                                <a class="btn nav-link" data-bs-toggle="tab" role="tab" href="#notes"
                                    aria-selected="false">Notes</a>
                                </li>
                                <li class="nav-item">
                                <a class="btn nav-link" data-bs-toggle="tab" role="tab"
                                    href="#faq" aria-selected="true">FAQ</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active show" id="overview" role="tabpanel">
                                <div class="mb-4">
                                    <h6 class="fs-18 fw-semibold mb-1">About this course</h6>
                                    <p>Learn Web Development Without Writing Much Code</p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="fs-18 fw-semibold mb-2">Description</h6>
                                    <p>Embark on a transformative journey into AI with Mike Wheeler, your guide in this Udemy Best Seller course on ChatGPT and Prompt Engineering. As an experience instructor who has taught well over 300,000 students, Mike unveils the secrets of developing your own custom GPTs, ensuring your skills shine in the thriving digital marketplace.</p>
                                    <p class="mb-1">This course will get your familiar with Generative AI and the effective use of ChatGPT and is perfect for the beginner. You will also learn advanced prompting techniques to take your Prompt Engineering skills to the next level!</p>
                                    <a href="javascript:void(0);" class="readmore-btn">Readmore</a>
                                </div>
                                <div class="mb-4">
                                    <h6 class="fs-18 fw-semibold mb-2">What You’ll Learn</h6>
                                    <ul class="list-unstyled what-you-learn ms-4" style="list-style-type: disc;">
                                        <li class="mb-2">Setting up the environment</li>
                                        <li class="mb-2">Advanced HTML Practices</li>
                                        <li class="mb-2">Build a portfolio website</li>
                                        <li class="mb-2">Responsive Designs</li>
                                        <li class="mb-2">Understand HTML Programming</li>
                                        <li class="mb-2">Code HTML</li>
                                        <li class="mb-0">Start building beautiful websites</li>
                                    </ul>
                                </div>
                                <div class="mb-0">
                                    <h6 class="fs-18 fw-semibold mb-2">Requirements</h6>
                                    <ul class="list-unstyled what-you-learn ms-4" style="list-style-type: disc;">
                                        <li class="mb-2">Any computer will work: Windows, macOS or Linux</li>
                                        <li class="mb-2">Basic programming HTML and CSS.</li>
                                        <li class="mb-0">Basic/Minimal understanding of JavaScript</li>
                                    </ul>
                                </div>
                                </div>
                                <div class="tab-pane" id="notes" role="tabpanel">
                                    <div class="mb-0">
                                        <h6 class="fs-18 fw-semibold mb-1">Notes</h6>
                                        <p>Embark on a transformative journey into AI with Mike Wheeler, your guide in this Udemy Best Seller course on ChatGPT and Prompt Engineering. As an experience instructor who has taught well over 300,000 students, Mike unveils the secrets of developing your own custom GPTs, ensuring your skills shine in the thriving digital marketplace.</p>
                                        <p class="mb-0">This course will get your familiar with Generative AI and the effective use of ChatGPT and is perfect for the beginner. You will also learn advanced prompting techniques to take your Prompt Engineering skills to the next level!</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="faq" role="tabpanel">
                                    <div class="faq-accordion">
                                        <div class="accordions-items-seperate" id="accordionSpacingExample2">
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingSpacingOne2">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="false" aria-controls="accordionOne">
                                                        How do I enroll in a course?
                                                    </button>
                                                </div>
                                                <div id="accordionOne" class="accordion-collapse collapse" aria-labelledby="headingSpacingOne2" data-bs-parent="#accordionSpacingExample2">
                                                    <div class="accordion-body">
                                                        <p class="mb-0">Many websites offer a Certificate of Completion for paid courses. Free courses may or may not include a certificate, depending on the platform’s policies.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSpacingTwo2">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                                        How long do I have access to a course?
                                                    </button>
                                                </h2>
                                                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingSpacingTwo2" data-bs-parent="#accordionSpacingExample2">
                                                    <div class="accordion-body">
                                                        <p class="mb-0">Many websites offer a Certificate of Completion for paid courses. Free courses may or may not include a certificate, depending on the platform’s policies.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSpacingTwo3">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                                                        What payment methods are accepted?
                                                    </button>
                                                </h2>
                                                <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingSpacingTwo3" data-bs-parent="#accordionSpacingExample2">
                                                    <div class="accordion-body">
                                                        <p class="mb-0">Many websites offer a Certificate of Completion for paid courses. Free courses may or may not include a certificate, depending on the platform’s policies.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSpacingTwo4">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                                                        Will I receive a certificate after completing a course?
                                                    </button>
                                                </h2>
                                                <div id="accordionFour" class="accordion-collapse collapse show" aria-labelledby="headingSpacingTwo4" data-bs-parent="#accordionSpacingExample2">
                                                    <div class="accordion-body">
                                                        <p class="mb-0">
                                                            Many websites offer a Certificate of Completion for paid courses. Free courses may or may not include a certificate, depending on the platform’s policies.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSpacingTwo5">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                                                        What is the purpose of this DreamLMS ?
                                                    </button>
                                                </h2>
                                                <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingSpacingTwo5" data-bs-parent="#accordionSpacingExample2">
                                                    <div class="accordion-body">
                                                        <p class="mb-0">
                                                            Many websites offer a Certificate of Completion for paid courses. Free courses may or may not include a certificate, depending on the platform’s policies.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSpacingTwo6">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionSix" aria-expanded="false" aria-controls="accordionSix">
                                                        What can I do with my certificate?
                                                    </button>
                                                </h2>
                                                <div id="accordionSix" class="accordion-collapse collapse" aria-labelledby="headingSpacingTwo6" data-bs-parent="#accordionSpacingExample2">
                                                    <div class="accordion-body">
                                                        <p class="mb-0">
                                                            Many websites offer a Certificate of Completion for paid courses. Free courses may or may not include a certificate, depending on the platform’s policies.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div >
    <!-- /Course watch -->
@endsection