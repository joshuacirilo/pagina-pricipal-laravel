<?php $page = 'blog-2-grid'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Blog 2 Grid
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Blog 2 Grid
        @endslot
    @endcomponent

    <!-- blog -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog">
                        <div class="blog-image">
                            <a href="{{url('blog-details')}}">
                                <img class="img-fluid" src="./build/img/blog/blog-1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="blog-item">
                            <h5 class="mb-2"><a href="{{url('blog-details')}}">Learn Web App Development from Experts in 2024</a></h5>
                            <p class="text-truncate line-clamb-2">Master the art of web application development with expert-led courses that cover the latest tools, fram...</p>
                            <div class="blog-info">
                                <div class="d-flex align-items-center flex-wrap justify-content-between gap-2">
                                    <div class="d-flex align-items-center user-profile">
                                        <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="./build/img/user/user-52.jpg" alt="img"></a>
                                        <a href="{{url('instructor-details')}}" class="user-name">John Miller</a>
                                    </div>
                                    <ul class="d-flex align-items-center flex-wrap gap-2">
                                        <li>
                                            <img class="me-1" src="./build/img/icons/calendar.svg" alt="img">
                                            <p>20 Apr 2024</p>
                                        </li>
                                        <li>
                                            <img class="me-1" src="./build/img/icons/tag.svg" alt="img">
                                            <p>Programming, Web Design</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog">
                        <div class="blog-image">
                            <a href="{{url('blog-details')}}">
                                <img class="img-fluid" src="./build/img/blog/blog-2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="blog-item">
                            <h5 class="mb-2"><a href="{{url('blog-details')}}">Learn Web App Development from Experts in 2024</a></h5>
                            <p class="text-truncate line-clamb-2">Master the art of web application development with expert-led courses that cover the latest tools, fram...</p>
                            <div class="blog-info">
                                <div class="d-flex align-items-center flex-wrap justify-content-between gap-2">
                                    <div class="d-flex align-items-center user-profile">
                                        <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="./build/img/user/user-52.jpg" alt="img"></a>
                                        <a href="{{url('instructor-details')}}" class="user-name">John Miller</a>
                                    </div>
                                    <ul class="d-flex align-items-center flex-wrap gap-2">
                                        <li>
                                            <img class="me-1" src="./build/img/icons/calendar.svg" alt="img">
                                            <p>20 Apr 2024</p>
                                        </li>
                                        <li>
                                            <img class="me-1" src="./build/img/icons/tag.svg" alt="img">
                                            <p>Programming, Web Design</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog">
                        <div class="blog-image">
                            <a href="{{url('blog-details')}}">
                                <img class="img-fluid" src="./build/img/blog/blog-3.jpg" alt="img">
                            </a>
                        </div>
                        <div class="blog-item">
                            <h5 class="mb-2"><a href="{{url('blog-details')}}">Learn Web App Development from Experts in 2024</a></h5>
                            <p class="text-truncate line-clamb-2">Master the art of web application development with expert-led courses that cover the latest tools, fram...</p>
                            <div class="blog-info">
                                <div class="d-flex align-items-center flex-wrap justify-content-between gap-2">
                                    <div class="d-flex align-items-center user-profile">
                                        <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="./build/img/user/user-52.jpg" alt="img"></a>
                                        <a href="{{url('instructor-details')}}" class="user-name">John Miller</a>
                                    </div>
                                    <ul class="d-flex align-items-center flex-wrap gap-2">
                                        <li>
                                            <img class="me-1" src="./build/img/icons/calendar.svg" alt="img">
                                            <p>20 Apr 2024</p>
                                        </li>
                                        <li>
                                            <img class="me-1" src="./build/img/icons/tag.svg" alt="img">
                                            <p>Programming, Web Design</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog">
                        <div class="blog-image">
                            <a href="{{url('blog-details')}}">
                                <img class="img-fluid" src="./build/img/blog/blog-4.jpg" alt="img">
                            </a>
                        </div>
                        <div class="blog-item">
                            <h5 class="mb-2"><a href="{{url('blog-details')}}">Learn Web App Development from Experts in 2024</a></h5>
                            <p class="text-truncate line-clamb-2">Master the art of web application development with expert-led courses that cover the latest tools, fram...</p>
                            <div class="blog-info">
                                <div class="d-flex align-items-center flex-wrap justify-content-between gap-2">
                                    <div class="d-flex align-items-center user-profile">
                                        <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="./build/img/user/user-52.jpg" alt="img"></a>
                                        <a href="{{url('instructor-details')}}" class="user-name">John Miller</a>
                                    </div>
                                    <ul class="d-flex align-items-center flex-wrap gap-2">
                                        <li>
                                            <img class="me-1" src="./build/img/icons/calendar.svg" alt="img">
                                            <p>20 Apr 2024</p>
                                        </li>
                                        <li>
                                            <img class="me-1" src="./build/img/icons/tag.svg" alt="img">
                                            <p>Programming, Web Design</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            <div class="col-lg-6">
                    <div class="blog">
                        <div class="blog-image">
                            <a href="{{url('blog-details')}}">
                                <img class="img-fluid" src="./build/img/blog/blog-5.jpg" alt="img">
                            </a>
                        </div>
                        <div class="blog-item">
                            <h5 class="mb-2"><a href="{{url('blog-details')}}">Learn Web App Development from Experts in 2024</a></h5>
                            <p class="text-truncate line-clamb-2">Master the art of web application development with expert-led courses that cover the latest tools, fram...</p>
                            <div class="blog-info">
                                <div class="d-flex align-items-center flex-wrap justify-content-between gap-2">
                                    <div class="d-flex align-items-center user-profile">
                                        <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="./build/img/user/user-52.jpg" alt="img"></a>
                                        <a href="{{url('instructor-details')}}" class="user-name">John Miller</a>
                                    </div>
                                    <ul class="d-flex align-items-center flex-wrap gap-2">
                                        <li>
                                            <img class="me-1" src="./build/img/icons/calendar.svg" alt="img">
                                            <p>20 Apr 2024</p>
                                        </li>
                                        <li>
                                            <img class="me-1" src="./build/img/icons/tag.svg" alt="img">
                                            <p>Programming, Web Design</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="blog">
                    <div class="blog-image">
                        <a href="{{url('blog-details')}}">
                            <img class="img-fluid" src="./build/img/blog/blog-6.jpg" alt="img">
                        </a>
                    </div>
                    <div class="blog-item">
                        <h5 class="mb-2"><a href="{{url('blog-details')}}">Learn Web App Development from Experts in 2024</a></h5>
                        <p class="text-truncate line-clamb-2">Master the art of web application development with expert-led courses that cover the latest tools, fram...</p>
                        <div class="blog-info">
                            <div class="d-flex align-items-center flex-wrap justify-content-between gap-2">
                                <div class="d-flex align-items-center user-profile">
                                    <a href="{{url('instructor-details')}}" class="user-img"><img class="rounded-pill w-auto" src="./build/img/user/user-52.jpg" alt="img"></a>
                                    <a href="{{url('instructor-details')}}" class="user-name">John Miller</a>
                                </div>
                                <ul class="d-flex align-items-center flex-wrap gap-2">
                                    <li>
                                        <img class="me-1" src="./build/img/icons/calendar.svg" alt="img">
                                        <p>20 Apr 2024</p>
                                    </li>
                                    <li>
                                        <img class="me-1" src="./build/img/icons/tag.svg" alt="img">
                                        <p>Programming, Web Design</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
                </div>
            </div>                 

            </div>
        <!-- /pagination -->
        <div class="row align-items-center">
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