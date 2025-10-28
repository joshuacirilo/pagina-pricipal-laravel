<?php $page = 'instructor-statements'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
        Statements
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
        Statements
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">
            <div class="instructor-profile">
                <div class="instructor-profile-bg">
                    <img src="{{URL::asset('build/img/bg/card-bg-01.png')}}" class="instructor-profile-bg-1" alt="">
                </div>
                <div class="row align-items-center row-gap-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <span class="avatar flex-shrink-0 avatar-xxl avatar-rounded me-3 border border-white border-3 position-relative">
                                    <img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="img">
                                    <span class="verify-tick"><i class="isax isax-verify5"></i></span>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-white d-inline-flex align-items-center"><a href="{{url('instructor-details')}}">Eugene Andre</a><a href="{{url('instructor-profile')}}" class="link-light fs-16 ms-2"><i class="isax isax-edit-2"></i></a></h5>
                                    <p class="text-light">Instructor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center flex-wrap gap-3 justify-content-md-end">
                                <a href="{{url('add-course')}}" class="btn btn-white rounded-pill">Add New Course</a>
                                <a href="{{url('student-dashboard')}}" class="btn btn-secondary rounded-pill">Student Dashboard</a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                @component('components.sidebar')
                @endcomponent
                <div class="col-lg-9">
                    <div class="statements">
                    <h5 class="page-title">Statements</h5>
                    <div class="table-top">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="d-flex align-items-center">
                                <div class="mb-3">
                                    <div class="dropdown me-3">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                            Payment Method
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Paypal</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Bank Transfer</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Stripe</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="dropdown me-3">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        Status
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Completed</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <i class="isax isax-search-normal-14"></i>
                                </span>
                                <input type="email" class="form-control form-control-md" placeholder="Search">
                            </div>
                        </div>
                    </div>
                   </div>
                   <div class="table-responsive custom-table">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Order ID</th>
                                <th>Course</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="order"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">#ORD01</a></td>
                                <td><a href="{{url('course-details')}}">Information About UI/UX Design<br> Degree</a></td>
                                <td>22 Aug 2025</td>
                                <td>$160</td>
                                <td>Paypal</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_invoice"><i class="isax isax-eye"></i></a>
                                        <a href="javascript:void(0);" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="order"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">#ORD009</a></td>
                                <td><a href="{{url('course-details')}}">Build Responsive Real World Websites<br> with Crash Course</a></td>
                                <td>10 Aug 2025</td>
                                <td>$180</td>
                                <td>Bank Transfer</td>
                                <td><span class="badge badge-sm bg-info d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_invoice"><i class="isax isax-eye"></i></a>
                                        <a href="javascript:void(0);" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="order"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">#ORD008</a></td>
                                <td><a href="{{url('course-details')}}">C# Developers Double Your Coding<br> with Visual Studio</a></td>
                                <td>26 Jul 2025</td>
                                <td>$200</td>
                                <td>Stripe</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_invoice"><i class="isax isax-eye"></i></a>
                                        <a href="javascript:void(0);" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="order"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">#ORD007</a></td>
                                <td><a href="{{url('course-details')}}">Wordpress for Beginners - Master<br> Wordpress Quickly</a></td>
                                <td>12 Jul 2025</td>
                                <td>$220</td>
                                <td>Paypal</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_invoice"><i class="isax isax-eye"></i></a>
                                        <a href="javascript:void(0);" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="order"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">#ORD006</a></td>
                                <td><a href="{{url('course-details')}}">Introduction to Python Programming</a></td>
                                <td>02 Jul 2025</td>
                                <td>$170</td>
                                <td>Stripe</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_invoice"><i class="isax isax-eye"></i></a>
                                        <a href="javascript:void(0);" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="order"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">#ORD005</a></td>
                                <td><a href="{{url('course-details')}}">Learn JavaScript and Express to<br> become a Expert</a></td>
                                <td>25 Jun 2025</td>
                                <td>$150</td>
                                <td>Bank Transfer</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_invoice"><i class="isax isax-eye"></i></a>
                                        <a href="javascript:void(0);" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    @component('components.modalpopup')
    @endcomponent
@endsection
