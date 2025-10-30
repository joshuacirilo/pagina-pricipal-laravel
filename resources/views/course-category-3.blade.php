<?php $page = 'course-category-3'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Course Category 3
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Course Category 3
        @endslot
    @endcomponent
            <div class="container">
                <section class="categories-top bg-light border"> 
                    <img src="{{URL::asset('./build/img/course/course-bg-3.svg')}}" alt="img" class="d-none d-lg-flex course-bg3">     
                    <img src="{{URL::asset('./build/img/course/course-bg-2.png')}}" alt="img" class="d-none d-lg-flex course-bg2">     
                        <div class="row align-items-center">
                        <div class="col-lg-7 col-12">
                            <div class="caetgory-form">
                                <h2 class="mb-2">Browse by Categories</h2>
                                <p>Take the first step towards achieving your goals with our comprehensive.</p>
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
			<section class="course-category-three">
				<div class="container">
                  <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{url('course-details')}}">
                        <div class="category-item-3">
                            <div class="category-item-3-image">
                                <img src="{{URL::asset('./build/img/category/category-19.jpg')}}" class="img-fluid" alt="img">
                            </div>
                            <div class="course-category-3-card-body">
                                <h6 class="mb-2">Graphic Design</h6>
                                <p>45 Lessons</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{url('course-details')}}">
                        <div class="category-item-3">
                            <div class="category-item-3-image">
                                <img src="{{URL::asset('./build/img/category/category-20.jpg')}}" class="img-fluid" alt="img">
                            </div>
                            <div class="course-category-3-card-body">
                                <h6 class="mb-2">Photography</h6>
                                <p>13 Lessons</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{url('course-details')}}">
                        <div class="category-item-3">
                            <div class="category-item-3-image">
                                <img src="{{URL::asset('./build/img/category/category-21.jpg')}}" class="img-fluid" alt="img">
                            </div>
                            <div class="course-category-3-card-body">
                                <h6 class="mb-2">Medical Terminology</h6>
                                <p>21 Lessons</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{url('course-details')}}">
                        <div class="category-item-3">
                            <div class="category-item-3-image">
                                <img src="{{URL::asset('./build/img/category/category-22.jpg')}}" class="img-fluid" alt="img">
                            </div>
                            <div class="course-category-3-card-body">
                                <h6 class="mb-2">UX/UI Design</h6>
                                <p>14 Lessons</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{url('course-details')}}">
                        <div class="category-item-3">
                            <div class="category-item-3-image">
                                <img src="{{URL::asset('./build/img/category/category-23.jpg')}}" class="img-fluid" alt="img">
                            </div>
                            <div class="course-category-3-card-body">
                                <h6 class="mb-2">Personal Finance</h6>
                                <p>06 Lessons</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{url('course-details')}}">
                        <div class="category-item-3">
                            <div class="category-item-3-image">
                                <img src="{{URL::asset('./build/img/category/category-24.jpg')}}" class="img-fluid" alt="img">
                            </div>
                            <div class="course-category-3-card-body">
                                <h6 class="mb-2">Health and Wellness</h6>
                                <p>12 Lessons</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{url('course-details')}}">
                        <div class="category-item-3">
                            <div class="category-item-3-image">
                                <img src="{{URL::asset('./build/img/category/category-25.jpg')}}" class="img-fluid" alt="img">
                            </div>
                            <div class="course-category-3-card-body">
                                <h6 class="mb-2">Software Training</h6>
                                <p>15 Lessons</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{url('course-details')}}">
                        <div class="category-item-3">
                            <div class="category-item-3-image">
                                <img src="{{URL::asset('./build/img/category/category-26.jpg')}}" class="img-fluid" alt="img">
                            </div>
                            <div class="course-category-3-card-body">
                                <h6 class="mb-2">Engineering</h6>
                                <p>22 Lessons</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{url('course-details')}}">
                        <div class="category-item-3">
                            <div class="category-item-3-image">
                                <img src="{{URL::asset('./build/img/category/category-27.jpg')}}" class="img-fluid" alt="img">
                            </div>
                            <div class="course-category-3-card-body">
                                <h6 class="mb-2">Leadership</h6>
                                <p>19 Lessons</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{url('course-details')}}">
                        <div class="category-item-3">
                            <div class="category-item-3-image">
                                <img src="{{URL::asset('./build/img/category/category-28.jpg')}}" class="img-fluid" alt="img">
                            </div>
                            <div class="course-category-3-card-body">
                                <h6 class="mb-2">Communication</h6>
                                <p>35 Lessons</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{url('course-details')}}">
                        <div class="category-item-3">
                            <div class="category-item-3-image">
                                <img src="{{URL::asset('./build/img/category/category-29.jpg')}}" class="img-fluid" alt="img">
                            </div>
                            <div class="course-category-3-card-body">
                                <h6 class="mb-2">Emotional Intelligence</h6>
                                <p>22 Lessons</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{url('course-details')}}">
                        <div class="category-item-3">
                            <div class="category-item-3-image">
                                <img src="{{URL::asset('./build/img/category/category-30.jpg')}}" class="img-fluid" alt="img">
                            </div>
                            <div class="course-category-3-card-body">
                                <h6 class="mb-2">Sales and Marketing</h6>
                                <p>15 Lessons</p>
                            </div>
                        </div>
                    </a>
                    </div>

                  </div>
                 <a href="#" target="_blank" class="btn btn-primary">Load More</a>
				</div>
			</section>
			<!-- /Course -->

@endsection