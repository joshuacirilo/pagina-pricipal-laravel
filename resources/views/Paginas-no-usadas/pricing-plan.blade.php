<?php $page = 'pricing-plan'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Pricing Plan
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Pricing Plan
        @endslot
    @endcomponent
        <section class="pricing-plan-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="text-center">
                            <p class="fw-medium text-secondary mb-2">We keep it simple</p>
                            <h2 class="main-title mb-2">Choose The Right Plan</h2>
                            <p>Improve the way your work, discover a brand new tool and drop the hassle once and for all.</p>
                        <div class="text-end">
                            <img src="{{URL::asset('./build/img/icons/save-10.svg')}}" alt="img">
                        </div>
                        <div class="enable-item d-flex align-items-center justify-content-center text-gray-9">
                            <label class="mb-0 me-2">Monthly</label>
                            <div class="form-check form-switch check-on m-0">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                            </div>
                            <label class="mb-0 ms-2">Annualy</label>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row pricing-cover">
                    <div class="col-xl-3 col-md-6 px-2 d-flex">
                        <div class="pricing-item flex-fill">
                            <h5 class="mb-2">Basic</h5>
                            <h1 class="mb-2"><sup class="fs-24 me-1">$</sup>10</h1>
                            <p>Perfect for individuals or small teams taking their first step into online.</p>
                            <div class="border-top pt-3 mt-3">
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>10 active courses</p>
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Basic course creation tools</p>
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Student progress tracking</p>
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>1 GB storage</p>
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Email notifications</p>
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Community support</p>
                            <a href="{{url('checkout')}}" class="btn btn-start-free w-100">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 px-2 d-flex">
                        <div class="pricing-item flex-fill">
                                <h5 class="mb-2">Standard</h5>
                                <h1 class="mb-2"><sup class="fs-24 me-1">$</sup>50</h1>
                                <p>Ideal for growing institutions that need advanced tools and greater flexibility.</p>
                                <div class="border-top pt-3 mt-3">
                                <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Access to 20 courses</p>
                                <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Custom course certificates</p>
                                <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Basic analytics</p>
                                <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>10 GB storage</p>
                                <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Course scheduling</p>
                                <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Priority email and chat support</p>
                                <a href="{{url('checkout')}}" class="btn btn-start-free w-100">Buy Now</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 px-2 d-flex">
                        <div class="pricing-item flex-fill">
                                <h5 class="mb-2">Premium</h5>
                                <h1 class="mb-2"><sup class="fs-24 me-1">$</sup>100</h1>
                                <p>Designed for large-scale learning with robust features and custom branding.</p>
                                <div class="border-top pt-3 mt-3">
                                <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Unlimited courses</p>
                                <p class="d-flex align-items-center text-truncate mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Advanced course creation tools</p>
                                <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Detailed student analytics</p>
                                <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>100 GB storage</p>
                                <p class="d-flex align-items-center text-truncate mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Integration with third-party tools</p>
                                <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Completion certificates</p>
                                <a href="{{url('checkout')}}" class="btn btn-start-free w-100">Buy Now</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 px-2 d-flex">
                        <div class="pricing-item flex-fill">
                            <h5 class="fw-bold mb-2 pb-2">Benefits</h5>
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Access to slack community</p>
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Access to support team</p>
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Algorithmic bidding</p>
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Keyword and ASIN harvesting</p>
                            <h5 class="fw-bold mb-2 pb-2 mt-4">Features</h5>
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Search term isolation</p>
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Total Sales Analytics</p>  
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Best seller rank</p>
                            <p class="d-flex align-items-center mb-3"><i class="fa-solid fa-circle fs-5 me-2"></i>Placement optimization</p>  
                            <a href="{{url('checkout')}}" class="btn btn-start-free w-100">Start For Free</a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive mt-4">
                    <table class="table table-price">
                        <thead>
                            <tr>
                                <th class="bg-transparent"></th>
                                <th class="bg-primary-100 text-primary">Self-Employed & Freelance</th>
                                <th class="bg-primary-100 text-primary" colspan="2">Small businesses that need accounting, invoicing or payroll</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="basic">
                                <td class="border-0"></td>
                                <td class="text-center">Basic</td>
                                <td class="text-center">Team</td>
                                <td class="text-center">Pro</td>
                            </tr>
                            <tr>
                                <td>Separate business/personal</td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Track deductible mileage</td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Download online banking</td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Multi-device</td>
                                <td class="text-center"><i class="isax isax-close-circle5 fs-24 text-danger"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Create invoices & estimates</td>
                                <td class="text-center"><i class="isax isax-close-circle5 fs-24 text-danger"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Manage VAT</td>
                                <td class="text-center"><i class="isax isax-close-circle5 fs-24 text-danger"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Manage bills & payments</td>
                                <td class="text-center"><i class="isax isax-close-circle5 fs-24 text-danger"></i></td>
                                <td class="text-center"><i class="isax isax-close-circle5 fs-24 text-danger"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Multiple currencies</td>
                                <td class="text-center"><i class="isax isax-close-circle5 fs-24 text-danger"></i></td>
                                <td class="text-center"><i class="isax isax-close-circle5 fs-24 text-danger"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Create budgets</td>
                                <td class="text-center"><i class="isax isax-close-circle5 fs-24 text-danger"></i></td>
                                <td class="text-center"><i class="isax isax-close-circle5 fs-24 text-danger"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Track time</td>
                                <td class="text-center"><i class="isax isax-close-circle5 fs-24 text-danger"></i></td>
                                <td class="text-center"><i class="isax isax-close-circle5 fs-24 text-danger"></i></td>
                                <td class="text-center"><i class="isax isax-tick-circle5 fs-24 text-success"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
@endsection
