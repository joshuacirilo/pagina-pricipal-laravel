<?php $page = 'checkout'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Checkout
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Checkout
        @endslot
    @endcomponent
        <!-- Checkout -->
        <div class="content">
            <div class="container">
                <div class="checkout-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="checkout-item-1">
                                <div class="border-bottom pb-3 mb-3">
                                    <h5>Billing Address</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block">
                                            <label class="form-label">First Name<span class="text-danger ms-1">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block">
                                            <label class="form-label">Last Name<span class="text-danger ms-1">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-block">
                                            <label class="form-label">Phone Number (Optional)</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-block">
                                            <label class="form-label">Address Line 1<span class="text-danger ms-1">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-block">
                                            <label class="form-label">Address Line 2 (Optional)</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block">
                                            <label class="form-label">Country<span class="text-danger ms-1">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block">
                                            <label class="form-label">State<span class="text-danger ms-1">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block">
                                            <label class="form-label">City<span class="text-danger ms-1">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="form-check d-flex">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                                <label class="form-check-label" for="flexCheckDefault1">
                                                    Shipping address is the same as my billing address
                                                </label>
                                                </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check d-flex">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Save this information for next time
                                                </label>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-item-1">
                                    <div class="border-bottom pb-3 mb-3">
                                        <h5>Payment Method </h5>
                                    </div>
                                    <ul class="nav-tabs mb-3 nav-justified border-0 nav-style-1 d-sm-flex d-block" role="tablist">
                                        <li class="nav-item active">
                                        <a class="btn nav-link p-3 active" data-bs-toggle="tab" role="tab" href="#overview" aria-selected="false">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <img src="{{URL::asset('build/img/icons/card.svg')}}" alt="card" class="img-fluid me-2">
                                                <p class="fw-medium">Card</p>
                                            </div>
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="btn nav-link p-3" data-bs-toggle="tab" role="tab" href="#notes" aria-selected="false">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <img src="{{URL::asset('build/img/icons/paypal-2.svg')}}" alt="card" class="img-fluid me-2">
                                                <p class="fw-medium">Paypal</p>
                                            </div>
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="btn nav-link p-3" data-bs-toggle="tab" role="tab" href="#faq" aria-selected="true">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <img src="{{URL::asset('build/img/icons/stripe.svg')}}" alt="card" class="img-fluid me-2">
                                                <p class="fw-medium">Stripe</p>
                                            </div>
                                        </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="overview" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Card Number<span class="text-danger ms-1">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Name on Card<span class="text-danger ms-1">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Expiry Date<span class="text-danger ms-1">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Security Number<span class="text-danger ms-1">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <a href="#" class="btn btn-secondary rounded-pill">Pay $200.25</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="notes" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Email Address<span class="text-danger ms-1">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Password<span class="text-danger ms-1">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <a href="#" class="btn btn-secondary rounded-pill">Pay $200.25</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="faq" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Email Address<span class="text-danger ms-1">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Password<span class="text-danger ms-1">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <a href="#" class="btn btn-secondary rounded-pill">Pay $200.25</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="checkout-item-2">
                                    <div class="pb-3 border-bottom mb-3">
                                        <h5 class="mb-0">Order Details</h5>
                                    </div>
                                    <div class="checkout-item-3 bg-light p-3 rounded-3 border mb-3">
                                        <div class="row row-gap-2 mb-3">
                                            <div class="col-md-12 d-flex align-items-center">
                                                <div class="order-img flex-shrink-0 me-3">
                                                    <img src="{{URL::asset('build/img/course/course-01.jpg')}}" alt="img" class="img-fluid h-100 w-100">
                                                    <a href="javascript:void(0);" class="btn p-1 rounded-circle"><i class="isax isax-trash"></i></a>
                                                </div>
                                                <div>
                                                    <h6 class="mb-2"><a href="{{url('course-details')}}">Information About UI/UX Design Degree</a></h6>
                                                    <h6 class="text-secondary">$120</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-gap-2">
                                            <div class="col-md-12 d-flex align-items-center">
                                                <div class="order-img flex-shrink-0 me-3">
                                                    <img src="{{URL::asset('build/img/course/course-03.jpg')}}" alt="img" class="img-fluid h-100 w-100">
                                                    <a href="javascript:void(0);" class="btn p-1 rounded-circle"><i class="isax isax-trash"></i></a>
                                                </div>
                                                <div>
                                                    <h6 class="mb-2"><a href="{{url('course-details')}}">Sketch from A to Z (2024): Become an app designer</a></h6>
                                                    <h6 class="text-secondary">$160</h6>
                                                </div>
                                            </div>											
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="mb-0">Sub Total</p>
                                        <p class="text-gray-9 fw-medium mb-0">$200.20</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                        <p class="mb-0">Tax (VAT)</p>
                                        <p class="text-gray-9 fw-medium mb-0">$25</p>
                                    </div>
                                    <div class="total d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0">Total</h6>
                                        <h4 class="mb-0">$225.20</h4>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div >
        <!-- /Checkout -->
@endsection
