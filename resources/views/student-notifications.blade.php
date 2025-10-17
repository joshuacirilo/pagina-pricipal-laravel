<?php $page = 'student-linked-accounts'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
        	Settings
        @endslot
        @slot('item1')
        	Home
        @endslot
        @slot('item2')
			Settings
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
							<div class="mb-3">
								<h5>Settings</h5>
							</div>							
								<ul class="settings-nav d-flex align-items-center flex-wrap border bg-light-900 rounded">
									<li><a href="{{url('student-settings')}}">Edit Profile</a></li>
									<li><a href="{{url('student-change-password')}}">Security</a></li>
									<li><a href="{{url('student-social-profile')}}">Social Profiles</a></li>
									<li><a href="{{url('student-linked-accounts')}}">Linked Accounts</a></li>
									<li><a href="{{url('student-notifications')}}" class="active">Notifications</a></li>
									<li><a href="{{url('student-billing-address')}}">Billing Address</a></li>
								</ul>			
							<form>
								<!-- Title -->
								<div class="d-flex justify-content-between align-items-center border-bottom pb-4 mb-4">
									<h5 class="fs-18 mb-0">General Notifications</h5>
									<button class="btn btn-sm btn-dark" type="button">Toggle all</button>
								</div>

								<!-- Item -->
								<div class="d-flex justify-content-between align-items-center mb-4">
									<!-- Content -->
									<div>
										<h6>Subscriptions</h6>
										<small>Notify me about activity from profile I’m subscribe to</small>
									</div>
									<!-- Switch -->
									<div class="form-check form-switch form-check-md mb-0 ms-3">
										<input class="form-check-input" type="checkbox" id="checkPrivacy1" checked="">
									</div>
								</div>

								<!-- Item -->
								<div class="d-flex justify-content-between align-items-center mb-4">
									<!-- Content -->
									<div>
										<h6>Recommended Courses</h6>
										<small>Notify me about courses that suits for me</small>
									</div>
									<!-- Switch -->
									<div class="form-check form-switch form-check-md mb-0 ms-3">
										<input class="form-check-input" type="checkbox" id="7" checked="">
									</div>
								</div>

								<!-- Item -->
								<div class="d-flex justify-content-between align-items-center mb-4">
									<!-- Content -->
									<div>
										<h6>Reply to my comments</h6>
										<small>Notify me about replies for my comments</small>
									</div>
									<!-- Switch -->
									<div class="form-check form-switch form-check-md mb-0 ms-3">
										<input class="form-check-input" type="checkbox" id="4">
									</div>
								</div>

								<!-- Item -->
								<div class="d-flex justify-content-between align-items-center mb-4">
									<!-- Content -->
									<div>
										<h6>Activity on my comments</h6>
										<small>Notify me about replies for my comments.</small>
									</div>
									<!-- Switch -->
									<div class="form-check form-switch form-check-md mb-0 ms-3">
										<input class="form-check-input" type="checkbox" id="5">
									</div>
								</div>
								
							</form>
							<div class="text-center my-5"></div>
							<form>
								<!-- Title -->
								<div class="d-flex justify-content-between align-items-center border-bottom pb-4 mb-4">
									<h5 class="fs-18 mb-0">Email Notifications</h5>
									<button class="btn btn-sm btn-dark" type="button">Toggle all</button>
								</div>

								<!-- Item -->
								<div class="d-flex justify-content-between align-items-center mb-4">
									<!-- Content -->
									<div>
										<h6>Courses Activity</h6>
										<small>Send me emails about my courses activity and updates I request</small>
									</div>
									<!-- Switch -->
									<div class="form-check form-switch form-check-md mb-0 ms-3">
										<input class="form-check-input" type="checkbox" id="checkPrivacy6" checked="">
									</div>
								</div>

								<!-- Item -->
								<div class="d-flex justify-content-between align-items-center mb-4">
									<!-- Content -->
									<div>
										<h6>Promotions & Recommendations</h6>
										<small>Send me emails about my courses promotions and recommendations</small>
									</div>
									<!-- Switch -->
									<div class="form-check form-switch form-check-md mb-0 ms-3">
										<input class="form-check-input" type="checkbox" id="checkPrivacy7" checked="">
									</div>
								</div>

								<!-- Item -->
								<div class="d-flex justify-content-between align-items-center mb-4">
									<!-- Content -->
									<div>
										<h6>Course Comments</h6>
										<small>Get notified about comments on your posts and replies to your comments.</small>
									</div>
									<!-- Switch -->
									<div class="form-check form-switch form-check-md mb-0 ms-3">
										<input class="form-check-input" type="checkbox" id="6">
									</div>
								</div>

								<!-- Item -->
								<div class="d-flex justify-content-between align-items-center mb-4">
									<!-- Content -->
									<div>
										<h6>Course Reminders</h6>
										<small>Receive booking assistance reminders to stay updated on your scheduled sessions.</small>
									</div>
									<!-- Switch -->
									<div class="form-check form-switch form-check-md mb-0 ms-3">
										<input class="form-check-input" type="checkbox" id="17">
									</div>
								</div>

								<!-- Item -->
								<div class="d-flex justify-content-between align-items-center mb-4">
									<!-- Content -->
									<div>
										<h6>System Updates</h6>
										<small>Send me emails about updates to the LMS platform </small>
									</div>
									<!-- Switch -->
									<div class="form-check form-switch form-check-md mb-0 ms-3">
										<input class="form-check-input" type="checkbox" id="8">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

    @endsection