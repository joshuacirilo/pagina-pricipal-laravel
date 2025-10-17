<?php $page = 'testimonials'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Testimonials
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Testimonials
        @endslot
    @endcomponent
        <div class="testimonials-sec-two mb-0 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="testimonial-item flex-fill">
                            <div class="d-flex justify-content-between mb-1">
                                <h6>Flexible Learning</h6>
                                <i class="isax isax-quote-up5 fs-24 text-primary text-opacity-50"></i>
                            </div>
                            <p class="mb-3">Working with this team has been a game-changer for my business. Their professionalism and attention to helped me streamline operations and expand my reach.</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="{{url('student-details')}}" class="avatar avatar-lg rounded-circle">
                                        <img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/user/user-04.jpg')}}" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <a href="{{url('student-details')}}">Johnathan Smith</a>
                                        <p class="fs-12">Entrepreneur</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="testimonial-item flex-fill">
                            <div class="d-flex justify-content-between mb-1">
                                <h6>Design Concept</h6>
                                <i class="isax isax-quote-up5 fs-24 text-primary text-opacity-50"></i>
                            </div>
                            <p class="mb-3">I was blown away by the results! The strategies they implemented helped my brand gain significant visibility. The team is knowledgeable, friendly, and dedicated.</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="{{url('student-details')}}" class="avatar avatar-lg rounded-circle">
                                        <img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/user/user-53.jpg')}}" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <a href="{{url('student-details')}}">Emily Jackson</a>
                                        <p class="fs-12">Marketing Specialist</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="testimonial-item flex-fill">
                            <div class="d-flex justify-content-between mb-1">
                                <h6>AI Learning</h6>
                                <i class="isax isax-quote-up5 fs-24 text-primary text-opacity-50"></i>
                            </div>
                            <p class="mb-3">I’ve worked with many agencies, but the team’s ability to understand the unique needs of educators was outstanding.</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="{{url('student-details')}}" class="avatar avatar-lg rounded-circle">
                                        <img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/user/user-54.jpg')}}" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <a href="{{url('student-details')}}">Adriana Hrit</a>
                                        <p class="fs-12">Digital Marketing User</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="testimonial-item flex-fill">
                            <div class="d-flex justify-content-between mb-1">
                                <h6>Certification</h6>
                                <i class="isax isax-quote-up5 fs-24 text-primary text-opacity-50"></i>
                            </div>
                            <p class="mb-3">This team offered innovative solutions that made my course materials more accessible and interactive. I saw an immediate increase in student engagement.</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="{{url('student-details')}}" class="avatar avatar-lg rounded-circle">
                                        <img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/user/user-55.jpg')}}" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <a href="{{url('student-details')}}">Michael Andrews</a>
                                        <p class="fs-12">Software Engineering</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="testimonial-item flex-fill">
                            <div class="d-flex justify-content-between mb-1">
                                <h6>New Onboarding </h6>
                                <i class="isax isax-quote-up5 fs-24 text-primary text-opacity-50"></i>
                            </div>
                            <p class="mb-3">They offered insights and strategies that helped me refine my curriculum, making it more relevant and impactful for my diverse group of students.</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="{{url('student-details')}}" class="avatar avatar-lg rounded-circle">
                                        <img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/user/user-56.jpg')}}" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <a href="{{url('student-details')}}">Sarah Wilson</a>
                                        <p class="fs-12">Global Business Leadership</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="testimonial-item flex-fill">
                            <div class="d-flex justify-content-between mb-1">
                                <h6>Flexible Time to Read</h6>
                                <i class="isax isax-quote-up5 fs-24 text-primary text-opacity-50"></i>
                            </div>
                            <p class="mb-3">I’m now able to offer more engaging, informative, and valuable content to my students, thanks to their expert support.</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="{{url('student-details')}}" class="avatar avatar-lg rounded-circle">
                                        <img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/user/user-50.jpg')}}" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <a href="{{url('student-details')}}">David Lee</a>
                                        <p class="fs-12">Personal Finance Education</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="testimonial-item flex-fill">
                            <div class="d-flex justify-content-between mb-1">
                                <h6>Change of Course</h6>
                                <i class="isax isax-quote-up5 fs-24 text-primary text-opacity-50"></i>
                            </div>
                            <p class="mb-3">I’ve seen a real improvement in how engaged my students are, and I am grateful for their innovative approach to teaching.</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="{{url('student-details')}}" class="avatar avatar-lg rounded-circle">
                                        <img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/user/user-57.jpg')}}" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <a href="{{url('student-details')}}">Anna Roberts</a>
                                        <p class="fs-12">Visual Arts Program</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="testimonial-item flex-fill">
                            <div class="d-flex justify-content-between mb-1">
                                <h6>Appreciation</h6>
                                <i class="isax isax-quote-up5 fs-24 text-primary text-opacity-50"></i>
                            </div>
                            <p class="mb-3">The team helped me streamline the development of my medical training courses, making them both more comprehensive and easier for students to understand.</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="{{url('student-details')}}" class="avatar avatar-lg rounded-circle">
                                        <img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/user/user-51.jpg')}}" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <a href="{{url('student-details')}}">Chris Turner</a>
                                        <p class="fs-12">Medical Training Academy</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                </div>
                            </div>		
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="testimonial-item flex-fill">
                            <div class="d-flex justify-content-between mb-1">
                                <h6>Useful Course</h6>
                                <i class="isax isax-quote-up5 fs-24 text-primary text-opacity-50"></i>
                            </div>
                            <p class="mb-3">Our employees can now access training materials from anywhere, on any device. The LMS has given our team the flexibility to learn at their own pace.</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <a href="{{url('student-details')}}" class="avatar avatar-lg rounded-circle">
                                        <img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/user/user-52.jpg')}}" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <a href="{{url('student-details')}}">Jerome Marshall</a>
                                        <p class="fs-12">CEO, Tech Solutions Inc.</p>
                                    </div>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                    <i class="fa-solid fa-star text-warning fs-12"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection    