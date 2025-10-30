<?php $page = 'privacy-policy'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Privacy Policy
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Privacy Policy
        @endslot
    @endcomponent
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <p class="mb-4">At DreamsLMS, we are committed to protecting your privacy. This policy outlines how we handle your information:</p>
                    <div class="mb-4">
                        <h6 class="mb-2">Information We Collect</h6>
                        <p class="mb-1 d-flex">Data, such as your name, email address, and payment details, collected during registration or purchases.</p>
                        <p class="mb-0 d-flex align-items-center">Non-personal data, including device information, browser type, and usage patterns, to improve user experience.</p>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-2">How We Use Your Information</h6>
                        <p class="mb-1 d-flex">To provide access to courses and services.</p>
                        <p class="mb-1 d-flex">To process payments securely.</p>
                        <p class="mb-1 d-flex">To deliver personalized content and updates.</p>
                        <p class="mb-0 d-flex align-items-center">For research, analytics, and marketing (with your consent when required).</p>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-2">Data Protection</h6>
                        <p class="mb-1 d-flex">We implement technical and organizational measures to safeguard your data.</p>
                        <p class="mb-0 d-flex align-items-center">Your information is not sold or shared with third parties except for essential service providers (e.g., payment processors) or legal obligations.</p>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-2">Third-Party Links</h6>
                        <p class="mb-1 d-flex">Our platform may include links to external websites.</p>
                        <p class="mb-0 d-flex align-items-center">We are not responsible for their privacy practices, and you should review their policies.</p>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-2">Your Rights</h6>
                        <p class="mb-0">Access, update, or delete your personal information by contacting us at [Insert Contact Information].</p>
                    </div>
                    <div class="mb-0">
                        <h6 class="mb-2">Policy Updates</h6>
                        <p class="mb-1">We may update this policy and notify you of significant changes through our platform or email.</p>
                        <p class="mb-0">For any questions or concerns about this Privacy Policy, contact us at <a href="javascript:void(0);" target="_blank">dreamslms@example.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
