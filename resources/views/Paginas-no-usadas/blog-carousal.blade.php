<?php $page = 'blog-carousal'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Blog Carousal
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Blog Carousal
        @endslot
    @endcomponent
   
        <!-- blog -->
        <div class="content">
            <div class="container">
                <div class="blog-slider lazy">
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
                                <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-8.jpg')}}" alt="img">
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
                                <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-9.jpg')}}" alt="img">
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
                                <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-11.jpg')}}" alt="img">
                            </a>
                        </div>
                        <div class="blog-item">
                            <span class="badge bg-success mb-2">Education</span>
                            <h5 class="mb-2"><a href="{{url('blog-details')}}">The Complete JavaScript Course for Beginners</a></h5>
                            <p class="text-truncate line-clamb-2">Dive into the world of JavaScript with our complete beginner-friendly course! Learn essential concepts...</p>
                            <div class="blog-info">
                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                    <div class="d-flex align-items-center user-profile">
                                        <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="{{URL::asset('./build/img/user/user-05.jpg')}}" alt="img"></a>
                                        <a href="{{url('instructor-details')}}" class="user-name">Richard Garza</a>
                                    </div>
                                    <ul class="d-flex align-items-center flex-wrap gap-2">
                                        <li>
                                            <img class="me-1" src="{{URL::asset('./build/img/icons/calendar.svg')}}" alt="img">
                                            <p>16 Mar 2024</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog -->
@endsection
