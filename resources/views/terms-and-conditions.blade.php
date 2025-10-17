<?php $page = 'terms-and-conditions'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Terms and Conditions
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Terms and Conditions
        @endslot
    @endcomponent

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 mx-auto">
                        <div class="mb-3">
                            <h5 class="mb-3">Introduction</h5>
                            <p class="mb-0">Welcome to DreamsLMS. By accessing or using our platform, you agree to comply with and be bound by the following terms and conditions (“Terms”). Please read them carefully before using our services.</p>
                        </div>
                        <div class="mb-3">
                            <h5 class="mb-3">Acceptance of Terms</h5>
                            <p class="mb-2 d-flex align-items-center">By accessing or using our LMS, you confirm that you have read, understood, and agreed to these Terms.</p>
                            <p class="mb-0 d-flex align-items-center">If you do not agree to these Terms, you may not use the Website or its services.</p>
                        </div>
                        <div class="mb-3">
                            <h5 class="mb-3">Eligibility</h5>
                            <p class="mb-2 d-flex align-items-center">Users must be at least 18 years old or have parental/guardian consent to use the platform</p>
                            <p class="mb-0 d-flex align-items-center">Organizations must ensure that their members comply with these Terms</p>
                        </div>
                        <div class="mb-3">
                            <h5 class="mb-3">Account Registration</h5>
                            <p class="mb-2 d-flex align-items-center">Users are required to register an account to access courses and other features.</p>
                            <p class="mb-2 d-flex align-items-center">You agree to provide accurate and complete information during registration.</p>
                            <p class="mb-0 d-flex align-items-center">You are responsible for maintaining the confidentiality of your login credentials.</p>
                        </div>
                        <div class="mb-3">
                            <h5 class="mb-3">Payments and Subscriptions</h5>
                            <p class="mb-2 d-flex align-items-center">Certain courses or features may require payment or a subscription.</p>
                            <p class="mb-0 d-flex align-items-center">You are responsible for any taxes applicable to your purchase.</p>
                        </div>
                        <div class="mb-0">
                            <h5 class="mb-3">Changes to Terms & Conditions</h5>
                            <p class="mb-0">DreamsLMS may update these Terms & Conditions periodically. Any changes will be communicated through the website or via email.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection