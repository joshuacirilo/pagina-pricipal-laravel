<?php $page = 'about-us'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            About Us
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            About Us
        @endslot
    @endcomponent

    <!-- about -->
    <section class="about-section-two pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                <div class="p-3 p-sm-4 position-relative">
                    <div class="position-absolute top-0 start-0 z-n1">
                        <img src="{{URL::asset('build/img/shapes/shape-1.svg')}}" alt="img">
                    </div>
                    <div class="position-absolute bottom-0 end-0 z-n1">
                        <img src="{{URL::asset('build/img/shapes/shape-2.svg')}}" alt="img">
                    </div>
                    <div class="position-absolute bottom-0 start-0 mb-md-5 ms-md-n5">
                        <img src="{{URL::asset('build/img/icons/icon-1.svg')}}" alt="img">
                    </div>
                    <img class="img-fluid img-radius" src="./build/img/about/about-2.svg" alt="img">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-0 ps-lg-2 pt-4 pt-lg-0 ps-xl-5">
                        <div class="section-header">
                            <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">About</span>
                            <h2>Sistemas</h2>
                            <p>At DreamsLMS, we make education accessible to all with interactive courses and expert-led content. Learn anytime, anywhere, and achieve your goals seamlessly.</p>
                        </div>
                        <div class="d-flex align-items-center about-us-banner">
                            <div>
                                <span class="bg-primary-transparent rounded-3 p-2 about-icon d-flex justify-content-center align-items-center">
                                    <i class="isax isax-book-1 fs-24"></i>
                                </span>
                            </div>
                            <div class="ps-3">
                                <h6 class="mb-2">Learn from anywhere</h6>
                                <p>Learning from anywhere has become a transform aspect of modern education, allowing individuals.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center about-us-banner">
                            <div>
                                <span class="bg-secondary-transparent rounded-3 p-2 about-icon d-flex justify-content-center align-items-center">
                                    <i class="isax isax-bookmark5 fs-24"></i>
                                </span>
                            </div>
                            <div class="ps-3">
                                <h6 class="mb-2">Expert Mentors</h6>
                                <p>Expert mentors are invaluable assets in any field, providing seasoned guidance knowledge.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->

    <!-- benefits -->
    <section class="benefit-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Our Benefits</span>
                <h2>Master the Skills to Drive your Career</h2>
                <p>The right course, guided by an expert mentor, can provide invaluable insights, practical skills.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <div class="position-absolute top-0 end-0 mt-n3 me-n4">
                                <img src="./build/img/shapes/bg-1.png" alt="img">
                            </div>
                            <div class="p-4 rounded-pill bg-primary-transparent d-inline-flex">
                                <i class="isax isax-book-1 fs-24"></i>
                            </div>
                            <h5 class="mt-3 mb-1">Flexible Learning</h5>
                            <p>We believe that high-quality education should be accessible to everyone. Our pricing form in models are designed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <div class="position-absolute top-0 end-0 mt-n3 me-n4">
                                <img src="{{URL::asset('build/img/shapes/bg-2.png')}}" alt="img">
                            </div>
                            <div class="p-4 rounded-pill bg-secondary-transparent d-inline-flex">
                                <i class="isax isax-bookmark5 fs-24"></i>
                            </div>
                            <h5 class="mt-3 mb-1">Lifetime Access</h5>
                            <p>When you enroll in our courses, you’re not just signing up for a temporary learning to experience you’re making.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <div class="position-absolute top-0 end-0 mt-n3 me-n4">
                                <img src="{{URL::asset('build/img/shapes/bg-3.png')}}" alt="img">
                            </div>
                            <div class="p-4 rounded-pill bg-skyblue-transparent d-inline-flex">
                                <i class="isax isax-chart-26 fs-24"></i>
                            </div>
                            <h5 class="mt-3 mb-1">Expert Instruction</h5>
                            <p>Our instructors are seasoned professionals with years of experience in their respective fields & Experts advice</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefits -->

    <!-- institutions -->
    <section class="client-section">
        <div class="container">
        <h6 class="fw-medium text-center mb-4">Trusted by <span class="text-decoration-underline text-secondary">20+</span> Institutions Around the World</h6>
        <div class="institutions-slider lazy slider">
            <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/01.svg" alt="img">
            </div>
            <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/02.svg" alt="img">
            </div>
            <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/03.svg" alt="img">
            </div>
            <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/04.svg" alt="img">
            </div>
            <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/05.svg" alt="img">
            </div>
            <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/06.svg" alt="img">
            </div>
            <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/07.svg" alt="img">
            </div>
            <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/02.svg" alt="img">
            </div>
            <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/03.svg" alt="img">
            </div>
            <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/04.svg" alt="img">
            </div>
            <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/05.svg" alt="img">
            </div>
            <div class="institutions-items p-1">
                <img class="img-fluid" src="./build/img/client/06.svg" alt="img">
            </div>
        </div>
        </div>
    </section>
    <!-- institutions -->

    <!-- counter -->
    <section class="counter-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="counter-icon">
                                    <img src="./build/img/icons/counter-icon1.svg" alt="img">
                                </div>
                                <div class="count-content">
                                    <h4 class="text-info"><span class="count-digit">10</span>K</h4>
                                    <p>Online Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="counter-icon">
                                    <img src="./build/img/icons/counter-icon2.svg" alt="img">
                                </div>
                                <div class="count-content">
                                    <h4 class="text-warning"><span class="count-digit">200</span>+</h4>
                                    <p>Expert Tutors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="counter-icon">
                                    <img src="./build/img/icons/counter-icon3.svg" alt="img">
                                </div>
                                <div class="count-content">
                                    <h4 class="text-skyblue"><span class="count-digit">6</span>K+</h4>
                                    <p>Certified Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 mb-0">
                        <div class="card-body d-flex align-items-center">
                            <div class="counter-icon">
                            <img src="./build/img/icons/counter-icon4.svg" alt="img">
                            </div>
                            <div class="count-content">
                            <h4 class="text-lightgreen"><span class="count-digit">60</span>K+</h4>
                                <p>Online Students</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter -->

    <!-- testimonials -->
    <section class="testimonials-section text-center">
        <div class="container">
            <div class="section-header text-center">
                <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Featured Instructors</span>
                <h2>Top Class & Professional Instructors</h2>
                <p>Words from Those Who’ve Experienced Real Growth.</p>
            </div>
            <div class="testimonials-slider lazy mt-4">
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                                <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-41.jpg" alt="img"></a>
                            </div>
                            <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>
                        </div>
                        <h6 class="mb-1"><a href="{{url('instructor-details')}}">Brenda Slaton</a></h6>
                        <p class="fs-14 mb-3">Designer</p>
                        <p class="mb-3 text-truncate line-clamb-2">This mentor helped me understand concepts that I had been struggling with for weeks.</p>
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                                <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-42.jpg" alt="img"></a>
                            </div>
                            <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>
                        </div>
                        <h6 class="mb-1"><a href="{{url('instructor-details')}}">Adrian Dennis</a></h6>
                        <p class="fs-14 mb-3">Developer</p>
                        <p class="mb-3 text-truncate line-clamb-2">I’ve learned so much from my mentor’s personal experience.</p>
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                                <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-43.jpg" alt="img"></a>
                            </div>
                            <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>
                        </div>
                        <h6 class="mb-1"><a href="{{url('instructor-details')}}">Adrian Coztanza</a></h6>
                        <p class="fs-14 mb-3">Architect</p>
                        <p class="mb-3 text-truncate line-clamb-2">The advice was useful, but I wish my mentor had been more available for follow-up discussions.</p>
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonials-item rounded-3 bg-white">
                        <div class="position-relative d-inline-flex mb-2">
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                                <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-circle" src="./build/img/user/user-43.jpg" alt="img"></a>
                            </div>
                            <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>
                        </div>
                        <h6 class="mb-1"><a href="{{url('instructor-details')}}">Adrian Coztanza</a></h6>
                        <p class="fs-14 mb-3">Architect</p>
                        <p class="mb-3 text-truncate line-clamb-2">The advice was useful, but I wish my mentor had been more available for follow-up discussions.</p>
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials -->

    <!-- faq -->
    <section class="faq-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pe-md-5">
                    <div class="position-relative">
                        <img class="img-fluid rounded-4" src="{{URL::asset('build/img/about/about-1.jpg')}}" alt="img">
                        <div class="bg-warning text-center p-3 rounded-5 position-absolute top-0 end-0 z-index-1 d-none d-sm-block my-3 mx-3">
                            <i class="isax isax-message-question5 heading-color fs-46"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-header">
                        <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">FAQs</span>
                        <h2>Frequently Asked Questions</h2>
                        <p>Explore detailed answers to the most common questions about our platform.</p>
                    </div>
                    <div class="faq-content">
                    <div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1One">
                                <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1One" aria-expanded="true" aria-controls="collapsecustomicon1One">
                                 What’s DreamLMS want to give you? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                                </a>
                            </h2>
                            <div id="collapsecustomicon1One" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example">
                                <div class="accordion-body pt-0">
                                 <p>DreamLMS aims to provide you with a comprehensive and intuitive learning platform that enhances your educational experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1Two">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                Why choose us for your education? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Two" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Two" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>DreamLMS aims to provide you with a comprehensive and intuitive learning platform that enhances your educational experience.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1Three">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three" aria-expanded="false" aria-controls="collapsecustomicon1One">
                            How We Provide Service For you? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Three" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Three" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>DreamLMS aims to provide you with a comprehensive and intuitive learning platform that enhances your educational experience.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1Four">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Four" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                Do you have a monthly plan? <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Four" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Four" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>DreamLMS aims to provide you with a comprehensive and intuitive learning platform that enhances your educational experience.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingcustomicon1Five">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Five" aria-expanded="false" aria-controls="collapsecustomicon1One">
                            Are you Affordable For Your Course <i class="isax isax-add fs-20 fw-semibold ms-1"></i>
                            </a>
                            </h2>
                            <div id="collapsecustomicon1Five" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Five" data-bs-parent="#accordioncustomicon1Example">
                             <div class="accordion-body pt-0">
                                 <p>DreamLMS aims to provide you with a comprehensive and intuitive learning platform that enhances your educational experience.</p>
                            </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- faq -->
@endsection
