<?php $page = 'instructor-payout'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
        Payouts
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
        Payouts
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
                    <div class="payouts">
                    <div class="alert alert-warning alert-dismissible d-flex fade show mb-4">
                        <i class="isax isax-information4 flex-shrink-0 me-2"></i>Your selected payout method was confirmed on Next Payout on 15 Jan, 2025 for "payout@example.com"
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="isax isax-close-circle5"></i></button>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-5">
                        <div class="earning-this-month border">
                            <img src="./build/img/shapes/withdraw-bg1.svg" class="earning-bg1" alt="img">
                            <img src="./build/img/shapes/withdraw-bg2.svg" class="earning-bg2" alt="img">
                            <div class="flex-shrink-0 earn-img">
                                <img class="img-fluid" src="./build/img/icons/icon-2.svg" alt="img">
                            </div>
                        <div class="ps-3">
                            <h6 class="mb-2">Earning this month</h6>
                            <h5>$8,420</h5>
                            <p>Update your payout in settings</p>
                        </div>
                        <a href="#" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#withdraw-req">Withdraw</a>
                        </div>
                        </div>
                        <div class="col-xl-7">
                            <h6 class="mb-3">Select Payment Gateway for Payout</h6> 
                            <div class="payment-method">
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <div>
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked="">
                                            <label class="btn bg-white btn-check-label w-100 d-flex justify-content-between align-items-center" for="btnradio1">
                                                <span class="d-flex align-items-center"><span class="check-outer me-2"><i></i></span><img src="{{URL::asset('build/img/icons/paypal.svg')}}" alt="img"></span>
                                                
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                            <label class="btn btn-check-label bg-white w-100 d-flex justify-content-between align-items-center" for="btnradio2">
                                                <span class="d-flex align-items-center fs-16 fw-medium"><span class="check-outer me-2"><i></i></span>Bank Transfer</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <h5 class="page-title">Payouts</h5>
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
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Paid</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Cancel</a>
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
                                <th>ID</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#" class="text-primary">#1010</a></td>
                                <td>22 Aug 2025</td>
                                <td>$160</td>
                                <td>Paypal</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">#1009</a></td>
                                <td>10 Aug 2025</td>
                                <td>$180</td>
                                <td>Bank Transfer</td>
                                <td><span class="badge badge-sm bg-info d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">#1008</a></td>
                                <td>26 Jul 2025</td>
                                <td>$200</td>
                                <td>Stripe</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">#1007</a></td>
                                <td>12 Jul 2025</td>
                                <td>$220</td>
                                <td>Paypal</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">#1006</a></td>
                                <td>02 Jul 2025</td>
                                <td>$170</td>
                                <td>Stripe</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">#1005</a></td>
                                <td>25 Jun 2025</td>
                                <td>$150</td>
                                <td>Bank Transfer</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">#1004</a></td>
                                <td>17 Jun 2025</td>
                                <td>$130</td>
                                <td>Paypal</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">#1003</a></td>
                                <td>04 Jun 2025</td>
                                <td>$190</td>
                                <td>Bank Transfer</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">#1002</a></td>
                                <td>20 May 2025</td>
                                <td>$140</td>
                                <td>Paypal</td>
                                <td><span class="badge badge-sm bg-danger d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">#1001</a></td>
                                <td>15 May 2025</td>
                                <td>$110</td>
                                <td>Stripe</td>
                                <td><span class="badge badge-sm bg-success d-inline-flex align-items-center"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                            <!-- /pagination -->
                    <div class="row align-items-center mt-3">
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
                    <!-- /pagination -->
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection
