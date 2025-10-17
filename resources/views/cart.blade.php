<?php $page = 'cart'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Cart
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Cart
        @endslot
    @endcomponent
        <!-- Cart -->
        <div class="content">
            <div class="container">
                <div class="cart-cover">
                    <div class="cart-items">
                        <div>
                            <div class="cart-head border-bottom d-flex justify-content-between align-items-center pb-4">
                                <h5 class="mb-0">3 Courses</h5>
                                <button class="btn btn-sm btn-danger-ghost mb-0"><i class="isax isax-close-circle me-1"></i>Clear cart</button>
                            </div>
                            <div class="row row-gap-3 pb-3 mb-3 border-bottom">
                                <div class="col-md-12">
                                    <div class="cart-item mb-0">
                                        <div class="row align-items-center row-gap-3">
                                            <div class="col-md-3">
                                                <div class="cart-img">
                                                    <a href="{{url('course-details')}}"><img src="{{URL::asset('build/img/course/course-01.jpg')}}" alt="img" class="img-fluid w-100"></a>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-9">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <a href="{{url('instructor-profile')}}" class="avatar avatar-sm rounded-circle me-2">
                                                                <img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="img" class="img-fluid rounded-circle">
                                                            </a>
                                                            <p class="mb-0"><a href="{{url('instructor-profile')}}">David Benitez</a></p>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="fs-18 mb-0"><a href="{{url('course-details')}}">Information About UI/UX Design Degree</a></h6>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="star me-2"><i class="fa-solid fa-star"></i></span>
                                                            <p class="mb-0">4.9 (200 Reviews)</p>
                                                            <span class="mx-2 bg-secondary rounded-circle dot"></span>
                                                            <p class="mb-0">Intermediate</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">														
                                                        <div class="d-flex align-items-center justify-content-end gap-4 cart-trash">
                                                            <h5 class="text-secondary">$120</h5>
                                                            <a href="#" class="trash-btn"><i class="isax isax-trash4"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>								
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-item mb-0">
                                        <div class="row align-items-center row-gap-3">
                                            <div class="col-md-3">
                                                <div class="cart-img">
                                                    <a href="{{url('course-details')}}"><img src="{{URL::asset('build/img/course/course-03.jpg')}}" alt="img" class="img-fluid w-100"></a>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-9">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <a href="{{url('instructor-profile')}}" class="avatar avatar-sm rounded-circle me-2">
                                                                <img src="{{URL::asset('build/img/user/user-08.jpg')}}" alt="img" class="img-fluid rounded-circle">
                                                            </a>
                                                            <p class="mb-0"><a href="{{url('instructor-profile')}}">Andrew Pirtle</a></p>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="fs-18 mb-0"><a href="{{url('course-details')}}">Sketch from A to Z (2024): Become an app designer</a></h6>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="star me-2"><i class="fa-solid fa-star"></i></span>
                                                            <p class="mb-0">4.6 (170 Reviews)</p>
                                                            <span class="mx-2 bg-secondary rounded-circle dot"></span>
                                                            <p class="mb-0">Basic</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">														
                                                        <div class="d-flex align-items-center justify-content-end gap-4 cart-trash">
                                                            <h5 class="text-secondary">$160</h5>
                                                            <a href="#" class="trash-btn"><i class="isax isax-trash4"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light border rounded-2 p-3 mb-4">
                                <div class="row align-items-center justify-content-between row-gap-3">
                                    <div class="col-md-6">
                                        <h6 class="mb-1">Subtotal</h6>
                                        <p class="mb-0">All Courses have a <span class="text-gray-9 fw-medium mx-1">30-day</span>money-back guarantee</p>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <h5>$450</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-end flex-wrap">
                                <a href="{{url('course-grid')}}" class="btn continue-shopping-btn rounded-pill me-2">Continue Shopping</a>
                                <a href="{{url('checkout')}}" class="btn checkout-btn rounded-pill">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div >
        <!-- /Cart -->
@endsection
