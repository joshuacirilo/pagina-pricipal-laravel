<?php $page = 'instructor-assignment'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Assignments
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Assignments
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
                                    <h5 class="mb-1 text-white d-inline-flex align-items-center">Eugene Andre<a href="{{url('instructor-profile')}}" class="link-light fs-16 ms-2"><i class="isax isax-edit-2"></i></a></h5>
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
                    <div class="page-title d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold">Assignments</h5>
                        <div>
                            <a href="javascript:void(0);" class="btn btn-secondary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_assignment">
                                <i class="isax isax-add-circle me-1"></i>Add Assignment
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        Status
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Published</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Draft</a>
                                        </li>
                                    </ul>
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
                    <div class="table-responsive custom-table">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Assignment Name</th>
                                    <th>Total Marks</th>
                                    <th>Total Submit</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            <h6 class="mb-1"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_assignment">Building Your First Landing Page</a></h6>
                                            <p>Course: Sketch from A to Z (2024): Become an app designer</p>
                                        </div>
                                    </td>
                                    <td>80</td>
                                    <td>2</td>
                                    <td><span class="badge badge-sm bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Published</span></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-edit-2" data-bs-toggle="modal" data-bs-target="#edit_assignment"></i></a>
                                            <a href="javascript:void(0);" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <h6 class="mb-1"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_assignment">Building a Basic Angular Application</a></h6>
                                            <p>Course: Learn Angular Fundamentals Beginners Guide</p>
                                        </div>
                                    </td>
                                    <td>60</td>
                                    <td>4</td>
                                    <td><span class="badge badge-sm bg-skyblue d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Draft</span></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-edit-2" data-bs-toggle="modal" data-bs-target="#edit_assignment"></i></a>
                                            <a href="javascript:void(0);" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <h6 class="mb-1"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_assignment">Basic Arithmetic Operations</a></h6>
                                            <p>Course: Learn JavaScript and Express to become a Expert</p>
                                        </div>
                                    </td>
                                    <td>30</td>
                                    <td>3</td>
                                    <td><span class="badge badge-sm bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Published</span></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-edit-2" data-bs-toggle="modal" data-bs-target="#edit_assignment"></i></a>
                                            <a href="javascript:void(0);" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <h6 class="mb-1 fw-medium"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_assignment">Basic Calculations</a></h6>
                                            <p>Course: Introduction to Programming - Python & Java</p>
                                        </div>
                                    </td>
                                    <td>50</td>
                                    <td>5</td>
                                    <td><span class="badge badge-sm bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Published</span></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-edit-2" data-bs-toggle="modal" data-bs-target="#edit_assignment"></i></a>
                                            <a href="javascript:void(0);" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
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
@endsection
