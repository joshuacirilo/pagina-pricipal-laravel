<?php $page = 'course-category-2'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Course Category 2
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Course Category 2
        @endslot
    @endcomponent

        <div class="container">
            <section class="categories-top bg-light border"> 
                <img src="{{URL::asset('./build/img/course/course-bg-1.svg')}}" alt="img" class="d-none d-lg-flex course-bg">     
                <img src="{{URL::asset('./build/img/course/course-bg-2.png')}}" alt="img" class="d-none d-lg-flex course-bg2">  
                <div class="row align-items-center">
                    <div class="col-lg-7 col-12">
                        <div class="caetgory-form">
                            <h2 class="mb-2">Browse by Categories</h2>
                            <p>Take the first step towards achieving your goals with our comprehensive online courses.</p>
                            <form class="position-relative">
                                <input class="form-control" type="text" placeholder="Search School, Online educational centres, etc">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                    </div>
                </div>         
            </section>
        </div>
        <!-- Course -->
        <section class="course-category-two">
            <div class="container">
                <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="{{url('course-details-2')}}">
                    <div class="category-item-2">
                        <div class="cat-icon border border-white mx-auto d-flex justify-content-center align-items-center">
                            <img src="{{URL::asset('./build/img/icons/category-icon1.svg')}}" alt="img">
                        </div>
                        <h6 class="mb-1">Management</h6>
                        <p>156 Courses</p>
                    </div>
                </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="{{url('course-details-2')}}">
                    <div class="category-item-2">
                        <div class="cat-icon border border-white mx-auto d-flex justify-content-center align-items-center">
                            <img src="{{URL::asset('./build/img/icons/category-icon2.svg')}}" alt="img">
                        </div>
                        <h6 class="mb-1">IT & Softwares</h6>
                        <p>214 Courses</p>
                    </div>
                </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="{{url('course-details-2')}}">
                    <div class="category-item-2">
                        <div class="cat-icon border border-white mx-auto d-flex justify-content-center align-items-center">
                            <img src="{{URL::asset('./build/img/icons/category-icon3.svg')}}" alt="img">
                        </div>
                        <h6 class="mb-1">Marketing</h6>
                        <p>174 Courses</p>
                    </div>
                </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="javascript:void(0);">
                        <div class="category-item-2">
                            <div class="cat-icon border border-white mx-auto d-flex justify-content-center align-items-center">
                                <img src="{{URL::asset('./build/img/icons/category-icon4.svg')}}" alt="img">
                            </div>
                            <h6 class="mb-1">Finance</h6>
                            <p>62 Courses</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="{{url('course-details-2')}}">
                    <div class="category-item-2">
                        <div class="cat-icon border border-white mx-auto d-flex justify-content-center align-items-center">
                            <img src="{{URL::asset('./build/img/icons/category-icon5.svg')}}" alt="img">
                        </div>
                        <h6 class="mb-1">Productivity</h6>
                        <p>126 Courses</p>
                    </div>
                </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="{{url('course-details-2')}}">
                    <div class="category-item-2">
                        <div class="cat-icon border border-white mx-auto d-flex justify-content-center align-items-center">
                            <img src="{{URL::asset('./build/img/icons/category-icon6.svg')}}" alt="img">
                        </div>
                        <h6 class="mb-1">Lifestyles</h6>
                        <p>214 Courses</p>
                    </div>
                </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="{{url('course-details-2')}}">
                    <div class="category-item-2">
                        <div class="cat-icon border border-white mx-auto d-flex justify-content-center align-items-center">
                            <img src="{{URL::asset('./build/img/icons/category-icon7.svg')}}" alt="img">
                        </div>
                        <h6 class="mb-1">Design</h6>
                        <p>60Courses</p>
                    </div>
                </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="{{url('course-details-2')}}">
                    <div class="category-item-2">
                        <div class="cat-icon border border-white mx-auto d-flex justify-content-center align-items-center">
                            <img src="{{URL::asset('./build/img/icons/category-icon8.svg')}}" alt="img">
                        </div>
                        <h6 class="mb-1">Business</h6>
                        <p>21 Courses</p>
                    </div>
                </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="{{url('course-details-2')}}">
                    <div class="category-item-2">
                        <div class="cat-icon border border-white mx-auto d-flex justify-content-center align-items-center">
                            <img src="{{URL::asset('./build/img/icons/category-icon9.svg')}}" alt="img">
                        </div>
                        <h6 class="mb-1">Cyber Security</h6>
                        <p>15 Courses</p>
                    </div>
                </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="{{url('course-details-2')}}">
                    <div class="category-item-2">
                        <div class="cat-icon border border-white mx-auto d-flex justify-content-center align-items-center">
                            <img src="{{URL::asset('./build/img/icons/category-icon10.svg')}}" alt="img">
                        </div>
                        <h6 class="mb-1">Development</h6>
                        <p>21 Courses</p>
                    </div>
                </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="{{url('course-details-2')}}">
                    <div class="category-item-2">
                        <div class="cat-icon border border-white mx-auto d-flex justify-content-center align-items-center">
                            <img src="{{URL::asset('./build/img/icons/category-icon11.svg')}}" alt="img">
                        </div>
                        <h6 class="mb-1">Accounting</h6>
                        <p>33 Courses</p>
                    </div>
                </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <a href="{{url('course-details-2')}}">
                    <div class="category-item-2">
                        <div class="cat-icon border border-white mx-auto d-flex justify-content-center align-items-center">
                            <img src="{{URL::asset('./build/img/icons/category-icon12.svg')}}" alt="img">
                        </div>
                        <h6 class="mb-1">Engineering</h6>
                        <p>42 Courses</p>
                    </div>
                </a>
                </div>

                </div>
                <a href="#" target="_blank" class="btn btn-primary">Load More</a>
            </div>
        </section>
        <!-- /Course -->

@endsection