<?php $page = 'student-certificates'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            My Certificates
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            My Certificates
        @endslot
    @endcomponent
        <div class="content">
            <div class="container">
            
                <!-- Profile -->
                <div class="profile-card overflow-hidden bg-blue-gradient2 mb-5 p-5">
                    <div class="profile-card-bg">
                        <img src="{{URL::asset('build/img/bg/card-bg-01.png')}}" class="profile-card-bg-1" alt="">
                    </div>
                    <div class="row align-items-center row-gap-3">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-xxl avatar-rounded me-3 border border-white border-2 position-relative">
                                    <img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="">
                                    <span class="verify-tick"><i class="isax isax-verify5"></i></span>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-white d-inline-flex align-items-center">Ronald Richard<a href="{{url('student-profile')}}" class="link-light fs-16 ms-2"><i class="isax isax-edit-2"></i></a></h5>
                                    <p class="text-light">Student</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center justify-content-lg-end flex-wrap gap-2">
                                <a href="{{url('become-an-instructor')}}" class="btn btn-white rounded-pill me-3">Become an Instructor</a>
                                <a href="{{url('instructor-dashboard')}}" class="btn btn-secondary rounded-pill">Instructor Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Profile -->
            
                <div class="row">
                
                    @component('components.sidebar')
                    @endcomponent
                    <div class="col-lg-9">
                        <div class="page-title d-flex align-items-center justify-content-between">
                            <h5>My Certificates</h5>
                        </div>
                        <div class="table-responsive custom-table">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Certificate Name</th>
                                        <th>Date</th>
                                        <th>Marks</th>
                                        <th>Out of</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td><a href="#" class="fw-semibold">UI/UX Design Certificate</a></td>
                                        <td>22 Aug 2025</td>
                                        <td>20</td>
                                        <td>20</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_certificate"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td><a href="#" class="fw-semibold">Wordpress Certificate</a></td>
                                        <td>10 Aug 2025</td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_certificate"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td><a href="#" class="fw-semibold">HTML CSS Certificate</a></td>
                                        <td>26 Jul 2025</td>
                                        <td>25</td>
                                        <td>30</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_certificate"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td><a href="#" class="fw-semibold">JavaScript Certificate</a></td>
                                        <td>14 Jul 2025</td>
                                        <td>15</td>
                                        <td>20</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_certificate"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td><a href="#" class="fw-semibold">Photoshop Certificate</a></td>
                                        <td>19 Jun 2025</td>
                                        <td>20</td>
                                        <td>30</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_certificate"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td><a href="#" class="fw-semibold">Python Certificate</a></td>
                                        <td>12 Jun 2025</td>
                                        <td>20</td>
                                        <td>20</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_certificate"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
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