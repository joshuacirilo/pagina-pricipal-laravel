<?php $page = 'course-resume'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Course Resume
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Course Resume
        @endslot
    @endcomponent

        <!-- Course detail -->
        <div class="course-resume">
            <div class="container">
                <!--  -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="course-resume-details-1 d-lg-flex align-items-center mb-3">
                            <div class="position-relative cou-resume-image">
                                <img class="img-fluid" src="{{URL::asset('build/img/course/course-26.jpg')}}" alt="img">
                            </div>
                            <div class="cou-resume-content w-100 ps-lg-4">
                                <h3 class="mb-2">The Complete Web Developer Course 2.0</h3>
                                <p class="mb-3 fs-14">Learn Web Development by building 25 websites and mobile apps using HTML, CSS, Javascript, PHP, Python</p>
                                <div class="d-flex align-items-center cou-lesson">
                                    <p class="d-flex align-items-center"><img class="img-fluid" src="{{URL::asset('./build/img/icons/book3.svg')}}" alt="img">12+ Lesson</p>
                                    <p class="d-flex align-items-center"><img class="img-fluid" src="{{URL::asset('./build/img/icons/timer-start.svg')}}" alt="img">9hr 30min</p>
                                    <p class="d-flex align-items-center"><img class="img-fluid" src="{{URL::asset('./build/img/icons/people3.svg')}}" alt="img">32 students enrolled</p>
                                    <span class="badge badge-sm fs-12 rounded-pill bg-warning">Web Development</span>
                                </div>
                                <a href="#" class="btn btn-secondary d-inline-flex align-items-center"><i class="isax isax-pause-circle5 me-1"></i> Resume Course</a>
                            </div>
                        </div>
                        <div class="course-resume-details-2">
                            <h5>Course Curriculum</h5>
                            <div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1One">
                                        <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1One" aria-expanded="true" aria-controls="collapsecustomicon1One">
                                            <span>Introduction of Digital Marketing <small class="d-flex fs-14 text-gray-7 fw-normal mt-1">No of Lecturers : 3</small></span> <i class="isax isax-arrow-circle-up4"></i>
                                        </a>
                                    </h2>
                                    <div id="collapsecustomicon1One" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body pb-0">
                                            <p class="mb-2 fs-16">1/3 Completed <span class="float-end text-gray-9 fw-medium">50%</span></p>
                                            <div class="progress mb-1 progress-xs progress-animate border-radius-0" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-secondary" style="width: 50%">
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <h6 class="d-flex align-items-center"><i class="isax isax-play-circle5 fs-24 text-success me-1"></i> Introduction <span class="text-gray-7 fw-normal ms-auto flex-shrink-0">2m 10s</span></h6>
                                                <div class="d-flex mt-3">
                                                    <a href="#" class="btn note-btn px-3 me-2"><i class="isax isax-note-2 me-2 fs-10"></i>Note</a>
                                                    <a href="#" class="btn play-again-btn px-3 me-2"><i class="isax isax-note-favorite5 me-2 fs-10"></i>Play Again</a>
                                                </div>
                                                <div class="d-flex border rounded-2 bg-white p-2 p-sm-3 mt-3 align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-primary d-inline-flex align-items-center badge-md p-1"><i class="fa-solid fa-circle mx-1 fs-5"></i>5.20</span>
                                                        <p class="fw-medium mx-2">Describe SEO Engine</p>
                                                    </div>
                                                    <div class="d-flex float-end">
                                                        <a href="#" class="resume-play-btn"><i class="isax isax-play-circle5"></i></a>
                                                        <a href="#" class="delete-btn"><i class="isax isax-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div class="d-flex border rounded-2 bg-white p-2 p-sm-3 mt-2 align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-primary d-inline-flex align-items-center badge-md p-1"><i class="fa-solid fa-circle mx-1 fs-5"></i>5.20</span>
                                                        <p class="fw-medium mx-2">Know about all marketing</p>
                                                    </div>
                                                    <div class="d-flex float-end">
                                                        <a href="#" class="resume-play-btn"><i class="isax isax-play-circle5"></i></a>
                                                        <a href="#" class="delete-btn"><i class="isax isax-trash"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <h6 class="d-flex align-items-center"><i class="isax isax-play-circle5 fs-24 text-success me-1"></i> What is Digital Marketing What is Digital Marketing <span class="text-gray-7 fw-normal ms-auto flex-shrink-0">2m 10s</span></h6>
                                                <div class="d-flex mt-3">
                                                    <a href="#" class="btn note-btn px-3 me-2"><i class="isax isax-note-2 me-2 fs-10"></i>Note</a>
                                                    <a href="#" class="btn play-again-btn px-3 me-2"><i class="isax isax-note-favorite5 me-2 fs-10"></i>Play Again</a>
                                                </div>                                         
                                            </li>
                                            <li>
                                                <h6 class="d-flex align-items-center"><i class="isax isax-play-circle5 fs-24 text-info me-1"></i>Type of Digital Marketing <span class="text-gray-7 fw-normal ms-auto flex-shrink-0">18m 10s</span></h6>                                        
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Two">
                                    <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two" aria-expanded="false" aria-controls="collapsecustomicon1One">
                                    <span>Introduction of Digital Marketing <small class="d-flex fs-14 text-gray-7 fw-normal mt-1">No of Lecturers : 3</small></span> <i class="isax isax-arrow-circle-up4"></i>
                                    </a>
                                    </h2>
                                    <div id="collapsecustomicon1Two" class="accordion-collapse collapse" aria-labelledby="headingcustomicon1Two" data-bs-parent="#accordioncustomicon1Example">
                                        <div class="accordion-body pb-0">
                                            <p class="mb-1 fs-16">1/3 Completed <span class="float-end text-gray-9 fw-medium">50%</span></p>
                                            <div class="progress mb-1 progress-xs progress-animate border-radius-0" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-secondary" style="width: 50%">
                                                </div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <h6 class="d-flex align-items-center"><i class="isax isax-play-circle5 fs-24 text-success me-1"></i> Introduction <span class="text-gray-7 fw-normal ms-auto flex-shrink-0">2m 10s</span></h6>
                                                    <div class="d-flex mt-3">
                                                        <a href="#" class="btn note-btn px-3 me-2"><i class="isax isax-note-2 me-2 fs-10"></i>Note</a>
                                                        <a href="#" class="btn play-again-btn px-3 me-2"><i class="isax isax-note-favorite5 me-2 fs-10"></i>Play Again</a>
                                                    </div>
                                                    <div class="d-flex border rounded-2 bg-white p-2 p-sm-3 mt-3 align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                        <span class="badge badge-primary d-inline-flex align-items-center badge-md p-1"><i class="fa-solid fa-circle mx-1 fs-5"></i>5.20</span>
                                                            <p class="fw-medium mx-2">Describe SEO Engine</p>
                                                        </div>
                                                        <div class="d-flex float-end">
                                                            <a href="#" class="resume-play-btn"><i class="isax isax-play-circle5"></i></a>
                                                            <a href="#" class="delete-btn"><i class="isax isax-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex border rounded-2 bg-white p-2 p-sm-3 mt-2 align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                        <span class="badge badge-primary d-inline-flex align-items-center badge-md p-1"><i class="fa-solid fa-circle mx-1 fs-5"></i>5.20</span>
                                                            <p class="fw-medium mx-2">Know about all marketing</p>
                                                        </div>
                                                        <div class="d-flex float-end">
                                                            <a href="#" class="resume-play-btn"><i class="isax isax-play-circle5"></i></a>
                                                            <a href="#" class="delete-btn"><i class="isax isax-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="d-flex align-items-center"><i class="isax isax-play-circle5 fs-24 text-success me-1"></i> What is Digital Marketing What is Digital Marketing <span class="text-gray-7 fw-normal ms-auto flex-shrink-0">2m 10s</span></h6>
                                                    <div class="d-flex mt-3">
                                                        <a href="#" class="btn note-btn px-3 me-2"><i class="isax isax-note-2 me-2 fs-10"></i>Note</a>
                                                        <a href="#" class="btn play-again-btn px-3 me-2"><i class="isax isax-note-favorite5 me-2 fs-10"></i>Play Again</a>
                                                    </div>                                         
                                                </li>
                                                <li>
                                                    <h6 class="d-flex align-items-center"><i class="isax isax-play-circle5 fs-24 text-success me-1"></i>Type of Digital Marketing <span class="text-gray-7 fw-normal ms-auto flex-shrink-0">18m 10s</span></h6>                                        
                                                </li>
                                            </ul>
                                            </div>
                                    </div>
                                </div>                                                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="card">
                    <div class="card-body">
                        <div class="course-resume-details-1 d-lg-flex align-items-center mb-3">
                            <div class="position-relative cou-resume-image">
                                <img class="img-fluid" src="{{URL::asset('build/img/course/course-03.jpg')}}" alt="img">
                            </div>
                            <div class="cou-resume-content w-100 ps-lg-4">
                                <h3 class="mb-2">Sketch from A to Z (2024): Become an app designer</h3>
                                <p class="mb-2 fs-14">Learn Web Development by building 25 websites and mobile apps using HTML, CSS, Javascript, PHP, Python</p>
                                <div class="d-flex align-items-center cou-lesson">
                                    <p class="d-flex align-items-center"><img class="img-fluid" src="{{URL::asset('./build/img/icons/book3.svg')}}" alt="img">12+ Lesson</p>
                                    <p class="d-flex align-items-center"><img class="img-fluid" src="{{URL::asset('./build/img/icons/timer-start.svg')}}" alt="img">9hr 30min</p>
                                    <p class="d-flex align-items-center"><img class="img-fluid" src="{{URL::asset('./build/img/icons/people3.svg')}}" alt="img">32 students enrolled</p>
                                    <span class="badge badge-sm fs-12 rounded-pill bg-warning">Web Development</span>
                                </div>
                                <a href="#" class="btn btn-secondary"><i class="isax isax-pause-circle5 me-1"></i> Resume Course</a>
                            </div>
                        </div>
                        <div class="course-resume-details-2">
                            <h5>Course Curriculum</h5>
                            <div class="accordion accordion-customicon2 accordions-items-seperate" id="accordioncustomicon2Example">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon2One">
                                        <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2One" aria-expanded="true" aria-controls="collapsecustomicon2One">
                                        <span>Introduction of Digital Marketing <small class="d-flex fs-14 text-gray-7 fw-normal mt-1">No of Lecturers : 3</small></span> <i class="isax isax-arrow-circle-up4"></i>
                                        </a>
                                    </h2>
                                    <div id="collapsecustomicon2One" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon2One" data-bs-parent="#accordioncustomicon2Example">
                                        <div class="accordion-body pb-0">
                                            <p class="mb-1 fs-16">1/3 Completed <span class="float-end text-gray-9 fw-medium">50%</span></p>
                                            <div class="progress mb-1 progress-xs progress-animate border-radius-0" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-secondary" style="width: 50%">
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <h6 class="d-flex align-items-center"><i class="isax isax-play-circle5 fs-24 text-success me-1"></i> Introduction <span class="text-gray-7 fw-normal ms-auto flex-shrink-0">2m 10s</span></h6>
                                                <div class="d-flex mt-3">
                                                    <a href="#" class="btn note-btn px-3 me-2"><i class="isax isax-note-2 me-2 fs-10"></i>Note</a>
                                                    <a href="#" class="btn play-again-btn px-3 me-2"><i class="isax isax-note-favorite5 me-2 fs-10"></i>Play Again</a>
                                                </div>
                                                <div class="d-flex border rounded-2 bg-white p-2 p-sm-3 mt-3 align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-primary d-inline-flex align-items-center badge-md p-1"><i class="fa-solid fa-circle mx-1 fs-5"></i>5.20</span>
                                                        <p class="fw-medium mx-2">Describe SEO Engine</p>
                                                    </div>
                                                    <div class="d-flex float-end">
                                                        <a href="#" class="resume-play-btn"><i class="isax isax-play-circle5"></i></a>
                                                        <a href="#" class="delete-btn"><i class="isax isax-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div class="d-flex border rounded-2 bg-white p-2 p-sm-3 mt-2 align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-primary d-inline-flex align-items-center badge-md p-1"><i class="fa-solid fa-circle mx-1 fs-5"></i>5.20</span>
                                                        <p class="fw-medium mx-2">Know about all marketing</p>
                                                    </div>
                                                    <div class="d-flex float-end">
                                                        <a href="#" class="resume-play-btn"><i class="isax isax-play-circle5"></i></a>
                                                        <a href="#" class="delete-btn"><i class="isax isax-trash"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <h6 class="d-flex align-items-center"><i class="isax isax-play-circle5 fs-24 text-success me-1"></i> What is Digital Marketing What is Digital Marketing <span class="text-gray-7 fw-normal ms-auto flex-shrink-0">2m 10s</span></h6>
                                                <div class="d-flex mt-3">
                                                    <a href="#" class="btn note-btn px-3 me-2"><i class="isax isax-note-2 me-2 fs-10"></i>Note</a>
                                                    <a href="#" class="btn play-again-btn px-3 me-2"><i class="isax isax-note-favorite5 me-2 fs-10"></i>Play Again</a>
                                                </div>                                         
                                            </li>
                                            <li>
                                                <h6 class="d-flex align-items-center"><i class="isax isax-play-circle5 fs-24 text-success me-1"></i>Type of Digital Marketing <span class="text-gray-7 fw-normal ms-auto flex-shrink-0">18m 10s</span></h6>                                        
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon2Two">
                                    <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Two" aria-expanded="false" aria-controls="collapsecustomicon2One">
                                    <span>Introduction of Digital Marketing <small class="d-flex fs-14 text-gray-7 fw-normal mt-1">No of Lecturers : 3</small></span> <i class="isax isax-arrow-circle-up4"></i>
                                    </a>
                                    </h2>
                                    <div id="collapsecustomicon2Two" class="accordion-collapse collapse" aria-labelledby="headingcustomicon2Two" data-bs-parent="#accordioncustomicon2Example">
                                        <div class="accordion-body pb-0">
                                            <p class="mb-1 fs-16">1/3 Completed <span class="float-end text-gray-9 fw-medium">50%</span></p>
                                            <div class="progress mb-1 progress-xs progress-animate border-radius-0" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-secondary" style="width: 50%">
                                                </div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <h6 class="d-flex align-items-center"><i class="isax isax-play-circle5 fs-24 text-success me-1"></i> Introduction <span class="text-gray-7 fw-normal ms-auto flex-shrink-0">2m 10s</span></h6>
                                                    <div class="d-flex mt-3">
                                                        <a href="#" class="btn note-btn px-3 me-2"><i class="isax isax-note-2 me-2 fs-10"></i>Note</a>
                                                        <a href="#" class="btn play-again-btn px-3 me-2"><i class="isax isax-note-favorite5 me-2 fs-10"></i>Play Again</a>
                                                    </div>
                                                    <div class="d-flex border rounded-2 bg-white p-2 p-sm-3 mt-3 align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                        <span class="badge badge-primary d-inline-flex align-items-center badge-md p-1"><i class="fa-solid fa-circle mx-1 fs-5"></i>5.20</span>
                                                            <p class="fw-medium mx-2">Describe SEO Engine</p>
                                                        </div>
                                                        <div class="d-flex float-end">
                                                            <a href="#" class="resume-play-btn"><i class="isax isax-play-circle5"></i></a>
                                                            <a href="#" class="delete-btn"><i class="isax isax-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex border rounded-2 bg-white p-2 p-sm-3 mt-2 align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                        <span class="badge badge-primary d-inline-flex align-items-center badge-md p-1"><i class="fa-solid fa-circle mx-1 fs-5"></i>5.20</span>
                                                            <p class="fw-medium mx-2">Know about all marketing</p>
                                                        </div>
                                                        <div class="d-flex float-end">
                                                            <a href="#" class="resume-play-btn"><i class="isax isax-play-circle5"></i></a>
                                                            <a href="#" class="delete-btn"><i class="isax isax-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="d-flex align-items-center"><i class="isax isax-play-circle5 fs-24 text-success me-1"></i> What is Digital Marketing What is Digital Marketing <span class="text-gray-7 fw-normal ms-auto flex-shrink-0">2m 10s</span></h6>
                                                    <div class="d-flex mt-3">
                                                        <a href="#" class="btn note-btn px-3 me-2"><i class="isax isax-note-2 me-2 fs-10"></i>Note</a>
                                                        <a href="#" class="btn play-again-btn px-3 me-2"><i class="isax isax-note-favorite5 me-2 fs-10"></i>Play Again</a>
                                                    </div>                                         
                                                </li>
                                                <li>
                                                    <h6 class="d-flex align-items-center"><i class="isax isax-play-circle5 fs-24 text-success me-1"></i>Type of Digital Marketing <span class="text-gray-7 fw-normal ms-auto flex-shrink-0">18m 10s</span></h6>                                        
                                                </li>
                                            </ul>
                                            </div>
                                    </div>
                                </div>
                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Course detail -->

@endsection