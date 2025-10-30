<?php $page = 'student-tickets'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Support Tickets
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Support Tickets
        @endslot
    @endcomponent
        <div class="content">
            <div class="container">
                <!-- profile box -->
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
                                        <h5 class="mb-1 text-white d-inline-flex align-items-center">Ronald Richard<a href="{{url('instructor-profile')}}" class="link-light fs-16 ms-2"><i class="isax isax-edit-2"></i></a></h5>
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
                <!-- profile box -->
                <div class="row">
                    @component('components.sidebar')
                    @endcomponent
                    <div class="col-lg-9">
                        <div class="tickets">
                            <div class="d-flex align-items-center justify-content-between flex-wrap page-title">
                            <h5>Support Tickets</h5>
                            <a href="#" class="btn btn-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#add_ticket"><i class="isax isax-add-circle me-2 fs-10"></i>Add Ticket</a>
                            </div> 
                            <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <span class="icon-box bg-primary-transparent me-3 flex-shrink-0">
                                                    <img src="{{URL::asset('build/img/icon/graduation.svg')}}" alt="">
                                                </span>
                                                <div>
                                                    <span class="d-block">Total Tickets</span>
                                                    <h4 class="fs-24 mt-1">50</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <span class="icon-box bg-secondary-transparent me-3 flex-shrink-0"><img src="{{URL::asset('build/img/icon/book.svg')}}" alt=""></span>
                                                <div>
                                                    <span class="d-block">Opened Tickets</span>
                                                    <h4 class="fs-24 mt-1">30</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <span class="icon-box bg-success-transparent me-3 flex-shrink-0"><img src="{{URL::asset('build/img/icon/bookmark.svg')}}" alt=""></span>
                                                <div>
                                                    <span class="d-block">Closed Tickets</span>
                                                    <h4 class="fs-24 mt-1">25</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="row align-items-center mb-2">
                                <div class="col-md-8">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="mb-3">
                                            <div class="dropdown me-3">
                                                <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Category
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Mailing Issues</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Language Issues</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Installation Error</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="dropdown me-3">
                                                <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Priority
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">High</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Low</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Medium</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Status
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Opened</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Inprogress</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Closed</a>
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
                            <div class="table-responsive custom-table">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Ticket ID</th>
                                            <th>Date</th>
                                            <th>Subject</th>
                                            <th>Priority</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#ticket_details">#TIC010</a></td>
                                            <td>22 Aug 2025</td>
                                            <td>Issue with Course Notification Emails</td>
                                            <td><span class="badge badge-sm bg-soft-danger d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>High</span></td>
                                            <td>Mailing Issues</td>
                                            <td><span class="badge badge-sm bg-purple d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Opened</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#ticket_details"><i class="isax isax-eye"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="isax isax-edit-2"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#ticket_details">#TIC009</a></td>
                                            <td>10 Aug 2025</td>
                                            <td>I have a problem</td>
                                            <td><span class="badge badge-sm bg-soft-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Low</span></td>
                                            <td>Language Issues</td>
                                            <td><span class="badge badge-sm bg-warning d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Inprogress</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#ticket_details"><i class="isax isax-eye"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="isax isax-edit-2"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#ticket_details">#TIC008</a></td>
                                            <td>26 Jul 2025</td>
                                            <td>Account Activation mail not received</td>
                                            <td><span class="badge badge-sm bg-soft-danger d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>High</span></td>
                                            <td>Mailing Issues</td>
                                            <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Closed</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#ticket_details"><i class="isax isax-eye"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="isax isax-edit-2"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#ticket_details">#TIC007</a></td>
                                            <td>12 Jul 2025</td>
                                            <td>&nbsp;Enabling SSH service</td>
                                            <td><span class="badge badge-sm bg-soft-skyblue d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>High</span></td>
                                            <td>Installation Error</td>
                                            <td><span class="badge badge-sm bg-purple d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Opened</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#ticket_details"><i class="isax isax-eye"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="isax isax-edit-2"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#ticket_details">#TIC006</a></td>
                                            <td>02 Jul 2025</td>
                                            <td>Payment Processed but not showed</td>
                                            <td><span class="badge badge-sm bg-soft-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Low</span></td>
                                            <td>Payment Issues</td>
                                            <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Closed</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#ticket_details"><i class="isax isax-eye"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="isax isax-edit-2"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#ticket_details">#TIC005</a></td>
                                            <td>25 Jun 2025</td>
                                            <td>&nbsp;when will start the order</td>
                                            <td><span class="badge badge-sm bg-soft-danger d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>High</span></td>
                                            <td>Demo Problem</td>
                                            <td><span class="badge badge-sm bg-warning d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Inprogress</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#ticket_details"><i class="isax isax-eye"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="isax isax-edit-2"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#ticket_details">#TIC004</a></td>
                                            <td>17 Jun 2025</td>
                                            <td>Slow speed while Course Download</td>
                                            <td><span class="badge badge-sm bg-soft-danger d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>High</span></td>
                                            <td>Server Issues</td>
                                            <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Closed</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#ticket_details"><i class="isax isax-eye"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="isax isax-edit-2"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#ticket_details">#TIC003</a></td>
                                            <td>04 Jun 2025</td>
                                            <td>Unable to access the course </td>
                                            <td><span class="badge badge-sm bg-soft-skyblue d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Medium</span></td>
                                            <td>Demo Problem</td>
                                            <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Closed</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#ticket_details"><i class="isax isax-eye"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="isax isax-edit-2"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#ticket_details">#TIC002</a></td>
                                            <td>20 May 2025</td>
                                            <td> Assignment Upload Error files</td>
                                            <td><span class="badge badge-sm bg-soft-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Low</span></td>
                                            <td>File Error</td>
                                            <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Closed</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#ticket_details"><i class="isax isax-eye"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="isax isax-edit-2"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#ticket_details">#TIC001</a></td>
                                            <td>15 May 2025</td>
                                            <td>Account Recovery Assistance Need</td>
                                            <td><span class="badge badge-sm bg-soft-danger d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>High</span></td>
                                            <td>Recovery Issues</td>
                                            <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Closed</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#ticket_details"><i class="isax isax-eye"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="isax isax-edit-2"></i></a>
                                                    <a href="#" class="d-inline-flex fs-14 action-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col-md-2">
                                    <p class="pagination-text">Page 1 of 2</p>
                                </div>
                                <div class="col-md-10">
                                    <ul class="pagination lms-page justify-content-center justify-content-md-end mt-2 mt-md-0">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
