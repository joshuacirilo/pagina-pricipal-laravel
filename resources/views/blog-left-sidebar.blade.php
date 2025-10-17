<?php $page = 'blog-left-sidebar'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Blog Left Sidebar
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Blog Left Sidebar
        @endslot
    @endcomponent

        <!-- blog -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <!-- Blog Sidebar -->
                    <div class="col-lg-4 sidebar-left mt-4 mt-lg-0 theiaStickySidebar">

                        <!-- Search -->
                        <div class="search-widget blog-search blog-widget">
                            <div>
                                <h5 class="mb-3 fs-18">Search</h5>
                                <form class="search-form">
                                    <div class="position-relative">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <button type="submit" class="search-btn"><i class="isax isax-search-normal-1"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Search -->

                        <!-- Categories -->
                        <div class="blog-widget">
                            <h5 class="fs-18 mb-3">Categories</h5>
                            <div class="categories-list">
                                <h6><a href="javascript:void(0);"><i class="isax isax-arrow-right-3 fs-14 text-secondary fw-bold"></i> Business<span class="float-end">04</span> </a></h6>
                                <h6><a href="javascript:void(0);"><i class="isax isax-arrow-right-3 fs-14 text-secondary fw-bold"></i> Education<span class="float-end">03</span> </a></h6>
                                <h6><a href="javascript:void(0);"><i class="isax isax-arrow-right-3 fs-14 text-secondary fw-bold"></i> Graphics Design<span class="float-end">14</span> </a></h6>
                                <h6><a href="javascript:void(0);"><i class="isax isax-arrow-right-3 fs-14 text-secondary fw-bold"></i> Programming<span class="float-end">12</span> </a></h6>
                                <h6><a href="javascript:void(0);"><i class="isax isax-arrow-right-3 fs-14 text-secondary fw-bold"></i> Web Design<span class="float-end">15</span></a></h6>
                            </div>
                        </div>
                        <!-- /Categories -->

                        <!-- Latest Posts -->
                        <div class="blog-widget">
                            <h5 class="fs-18 mb-3">Recent Blogs</h5>
                            <ul class="recent-blog-list">
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{url('blog-details')}}">
                                            <img class="img-fluid" src="{{URL::asset('build/img/blog/recent-blog-1.jpg')}}" alt="Img">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <h6 class="text-truncate line-clamb-2">
                                            <a href="{{url('blog-details')}}">Learn Webs Applications Development from Experts</a>
                                        </h6>
                                        <p class="d-flex align-items-center"><img class="img-fluid me-1" src="{{URL::asset('build/img/icons/calendar2.svg')}}" alt="Img">20 Apr 2024</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{url('blog-details')}}">
                                            <img class="img-fluid" src="{{URL::asset('build/img/blog/recent-blog-2.jpg')}}" alt="Img">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <h6 class="text-truncate line-clamb-2">
                                            <a href="{{url('blog-details')}}">Expand Your Career Opportunities With Python</a>
                                        </h6>
                                        <p class="d-flex align-items-center"><img class="img-fluid me-1" src="{{URL::asset('build/img/icons/calendar2.svg')}}" alt="Img">16 Apr 2024</p>
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <div class="post-thumb">
                                        <a href="{{url('blog-details')}}">
                                            <img class="img-fluid" src="{{URL::asset('build/img/blog/recent-blog-3.jpg')}}" alt="Img">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <h6 class="text-truncate line-clamb-2">
                                            <a href="{{url('blog-details')}}">Learn Webs Applications Development from Experts</a>
                                        </h6>
                                        <p class="d-flex align-items-center"><img class="img-fluid me-1" src="{{URL::asset('build/img/icons/calendar2.svg')}}" alt="Img">12 Apr 2024</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /Latest Posts -->


                        <!-- Tags -->
                        <div class="blog-widget">
                            <h5 class="fs-18 mb-3">Latest Tags</h5>
                            <div class="card-body">
                                <ul class="latest-tags">
                                    <li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">HTML</a></li>
                                    <li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Javascript</a></li>
                                    <li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Benefits</a></li>
                                    <li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Web Design</a></li>
                                    <li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Programming</a></li>
                                    <li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Career Growth</a></li>
                                    <li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Guidelines</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Tags -->
                        
                    </div>
                    <!-- /Blog Sidebar -->
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
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
                            </div>
                            <div class="col-md-6">
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
                            </div>
                            <div class="col-md-6">
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
                            </div>
                            <div class="col-md-6">
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
                            </div>
                            <div class="col-md-6">
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
                            <div class="col-md-6">
                                <div class="blog">
                                    <div class="blog-image">
                                        <a href="{{url('blog-details')}}">
                                            <img class="img-fluid" src="{{URL::asset('./build/img/blog/blog-12.jpg')}}" alt="img">
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
            </div>
        </div>
        <!-- blog -->

@endsection    