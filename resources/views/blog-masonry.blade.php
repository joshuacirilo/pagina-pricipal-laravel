<?php $page = 'blog-masonry'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Blog Masonry
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Blog Masonry
        @endslot
    @endcomponent
            <!-- blog -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="blog">
                                <div class="blog-image">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-7.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="blog-item">
                                    <span class="badge bg-success mb-2">Education</span>
                                    <h5 class="mb-2"><a href="{{url('blog-details')}}">Learn Web App Development from Experts in 2024</a></h5>
                                    <p class="text-truncate line-clamb-2">Master the art of web application development with expert-led courses that cover the latest tools, fram...</p>
                                    <div class="blog-info">
                                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                                            <div class="d-flex align-items-center user-profile">
                                                <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="{{URL::asset('./build/img/user/user-52.jpg')}}" alt="img"></a>
                                                <a href="{{url('instructor-details')}}" class="user-name">John Miller</a>
                                            </div>
                                            <ul class="d-flex align-items-center flex-wrap gap-2">
                                                <li>
                                                    <img class="me-1" src="{{URL::asset('./build/img/icons/calendar.svg')}}" alt="img">
                                                    <p>23 Apr 2024</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                            </div>
                            <div class="blog">
                                <div class="blog-image">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-11.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="blog-item">
                                    <span class="badge bg-success mb-2">Guides</span>
                                    <h5 class="mb-2"><a href="{{url('blog-details')}}">Programming Content Guideline For Beginners</a></h5>
                                    <p class="text-truncate line-clamb-2">Kickstart your programming journey with beginner-friendly guidelines designed to simplify coding ...</p>
                                    <div class="blog-info">
                                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                                            <div class="d-flex align-items-center user-profile">
                                                <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="{{URL::asset('./build/img/user/user-06.jpg')}}" alt="img"></a>
                                                <a href="{{url('instructor-details')}}" class="user-name">Lewis Devine</a>
                                            </div>
                                            <ul class="d-flex align-items-center flex-wrap gap-2">
                                                <li>
                                                    <img class="me-1" src="{{URL::asset('./build/img/icons/calendar.svg')}}" alt="img">
                                                    <p>10 Mar 2024</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog">
                                <div class="blog-image">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-26.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="blog-item">
                                    <span class="badge bg-success mb-2">Education</span>
                                    <h5 class="mb-2"><a href="{{url('blog-details')}}">Revolutionize Learning with a Modern LMS</a></h5>
                                    <p class="text-truncate line-clamb-2">An LMS streamlines training and development with centralized resources, progress tracking, and flexible..</p>
                                    <div class="blog-info">
                                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                                            <div class="d-flex align-items-center user-profile">
                                                <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="{{URL::asset('./build/img/user/user-08.jpg')}}" alt="img"></a>
                                                <a href="{{url('instructor-details')}}" class="user-name">Francis Bishop</a>
                                            </div>
                                            <ul class="d-flex align-items-center flex-wrap gap-2">
                                                <li>
                                                    <img class="me-1" src="{{URL::asset('./build/img/icons/calendar.svg')}}" alt="img">
                                                    <p>20 Feb 2024</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        <div class="col-lg-4">
                            <div class="blog">
                                <div class="blog-image">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-27.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="blog-item">
                                    <span class="badge bg-success mb-2">Guides</span>
                                    <h5 class="mb-2"><a href="{{url('blog-details')}}">Expand Your Career Opportunities With Python</a></h5>
                                    <p class="text-truncate line-clamb-2">Unlock limitless career opportunities by mastering Python, one of the most versatile and in-demand ...</p>
                                    <div class="blog-info">
                                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                                            <div class="d-flex align-items-center user-profile">
                                                <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="{{URL::asset('./build/img/user/user-01.jpg')}}" alt="img"></a>
                                                <a href="{{url('instructor-details')}}" class="user-name">Cedric Glenn</a>
                                            </div>
                                            <ul class="d-flex align-items-center flex-wrap gap-2">
                                                <li>
                                                    <img class="me-1" src="{{URL::asset('./build/img/icons/calendar.svg')}}" alt="img">
                                                    <p>20 Apr 2024</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                            </div>
                            <div class="blog">
                                <div class="blog-image">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-10.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="blog-item">
                                    <span class="badge bg-success mb-2">Technical</span>
                                    <h5 class="mb-2"><a href="{{url('blog-details')}}">Learn Mobile Applications Development from Experts</a></h5>
                                    <p class="text-truncate line-clamb-2">Elevate your skills with expert-led training in mobile application development! Learn to design, develop ...</p>
                                    <div class="blog-info">
                                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                                            <div class="d-flex align-items-center user-profile">
                                                <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="{{URL::asset('./build/img/user/user-02.jpg')}}" alt="img"></a>
                                                <a href="{{url('instructor-details')}}" class="user-name">John Reyes</a>
                                            </div>
                                            <ul class="d-flex align-items-center flex-wrap gap-2">
                                                <li>
                                                    <img class="me-1" src="{{URL::asset('./build/img/icons/calendar.svg')}}" alt="img">
                                                    <p>04 Apr 2024</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog">
                                <div class="blog-image">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-14.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="blog-item">
                                    <span class="badge bg-success mb-2">Guides</span>
                                    <h5 class="mb-2"><a href="{{url('blog-details')}}">Complete PHP Programming Career Guideline</a></h5>
                                    <p class="text-truncate line-clamb-2">Master PHP programming with our comprehensive career guideline! Learn the fundamentals, explore ...</p>
                                    <div class="blog-info">
                                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                                            <div class="d-flex align-items-center user-profile">
                                                <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="{{URL::asset('./build/img/user/user-03.jpg')}}" alt="img"></a>
                                                <a href="{{url('instructor-details')}}" class="user-name">Donald Vesely</a>
                                            </div>
                                            <ul class="d-flex align-items-center flex-wrap gap-2">
                                                <li>
                                                    <img class="me-1" src="{{URL::asset('./build/img/icons/calendar.svg')}}" alt="img">
                                                    <p>24 Mar 2024</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog">
                                <div class="blog-image">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-10.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="blog-item">
                                    <span class="badge bg-success mb-2">Guides</span>
                                    <h5 class="mb-2"><a href="{{url('blog-details')}}">Complete PHP Programming Career Guideline</a></h5>
                                    <p class="text-truncate line-clamb-2">Master PHP programming with our comprehensive career guideline! Learn the fundamentals, explore ...</p>
                                    <div class="blog-info">
                                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                                            <div class="d-flex align-items-center user-profile">
                                                <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="{{URL::asset('./build/img/user/user-09.jpg')}}" alt="img"></a>
                                                <a href="{{url('instructor-details')}}" class="user-name">Donald Vesely</a>
                                            </div>
                                            <ul class="d-flex align-items-center flex-wrap gap-2">
                                                <li>
                                                    <img class="me-1" src="{{URL::asset('./build/img/icons/calendar.svg')}}" alt="img">
                                                    <p>24 Mar 2024</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog">
                                <div class="blog-image">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-28.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="blog-item">
                                    <span class="badge bg-success mb-2">Guides</span>
                                    <h5 class="mb-2"><a href="{{url('blog-details')}}">Complete PHP Programming Career Guideline</a></h5>
                                    <p class="text-truncate line-clamb-2">Master PHP programming with our comprehensive career guideline! Learn the fundamentals, explore ...</p>
                                    <div class="blog-info">
                                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                                            <div class="d-flex align-items-center user-profile">
                                                <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="{{URL::asset('./build/img/user/user-03.jpg')}}" alt="img"></a>
                                                <a href="{{url('instructor-details')}}" class="user-name">Donald Vesely</a>
                                            </div>
                                            <ul class="d-flex align-items-center flex-wrap gap-2">
                                                <li>
                                                    <img class="me-1" src="{{URL::asset('./build/img/icons/calendar.svg')}}" alt="img">
                                                    <p>24 Mar 2024</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog">
                                <div class="blog-image">
                                    <a href="{{url('blog-details')}}">
                                        <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-12.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="blog-item">
                                    <span class="badge bg-success mb-2">Guides</span>
                                    <h5 class="mb-2"><a href="{{url('blog-details')}}">Complete PHP Programming Career Guideline</a></h5>
                                    <p class="text-truncate line-clamb-2">Master PHP programming with our comprehensive career guideline! Learn the fundamentals, explore ...</p>
                                    <div class="blog-info">
                                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                                            <div class="d-flex align-items-center user-profile">
                                                <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="{{URL::asset('./build/img/user/user-03.jpg')}}" alt="img"></a>
                                                <a href="{{url('instructor-details')}}" class="user-name">Donald Vesely</a>
                                            </div>
                                            <ul class="d-flex align-items-center flex-wrap gap-2">
                                                <li>
                                                    <img class="me-1" src="{{URL::asset('./build/img/icons/calendar.svg')}}" alt="img">
                                                    <p>24 Mar 2024</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /pagination -->
                <div class="row align-items-center mt-2">
                    <div class="col-md-12">
                        <ul class="pagination justify-content-center">
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
            <!-- blog -->
@endsection
