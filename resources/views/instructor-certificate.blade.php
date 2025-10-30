<?php $page = 'instructor-certificate'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Certificates
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Certificates
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
                    <div class="certificate">
                        <div class="page-title d-flex align-items-center justify-content-between">
                            <h5>Certificates</h5>
                            <div>
                                <a href="#" class="btn btn-secondary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_certificate">
                                    <i class="isax isax-add-circle me-1"></i>Add Certificate
                                </a>
                            </div>
                        </div>
                        <div class="p-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#view_certificate"><img class="img-fluid rounded" src="{{URL::asset('./build/img/instructor/certificate-1.jpg')}}" alt="img"></a>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap justify-content-between gap-2">
                                            <h6>Certificate 01</h6>
                                            <ul class="edit-delete-icon d-flex align-items-center">
                                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#view_certificate"><i class="isax isax-eye"></i></a></li>
                                                <li><a href="#"><i class="isax isax-edit-2"></i></a></li>
                                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a></li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#view_certificate"><img class="img-fluid rounded" src="{{URL::asset('./build/img/instructor/certificate-2.jpg')}}" alt="img"></a>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap justify-content-between gap-2">
                                            <h6>Certificate 02</h6>
                                            <ul class="edit-delete-icon d-flex align-items-center">
                                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#view_certificate"><i class="isax isax-eye"></i></a></li>
                                                <li><a href="#"><i class="isax isax-edit-2"></i></a></li>
                                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a></li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#view_certificate"><img class="img-fluid rounded" src="{{URL::asset('./build/img/instructor/certificate-3.jpg')}}" alt="img"></a>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap justify-content-between gap-2">
                                            <h6>Certificate 03</h6>
                                            <ul class="edit-delete-icon d-flex align-items-center">
                                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#view_certificate"><i class="isax isax-eye"></i></a></li>
                                                <li><a href="#"><i class="isax isax-edit-2"></i></a></li>
                                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a></li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#view_certificate"><img class="img-fluid rounded" src="{{URL::asset('./build/img/instructor/certificate-4.jpg')}}" alt="img"></a>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap justify-content-between gap-2">
                                            <h6>Certificate 04</h6>
                                            <ul class="edit-delete-icon d-flex align-items-center">
                                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#view_certificate"><i class="isax isax-eye"></i></a></li>
                                                <li><a href="#"><i class="isax isax-edit-2"></i></a></li>
                                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a></li>
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
        </div>
    </div>

@endsection
