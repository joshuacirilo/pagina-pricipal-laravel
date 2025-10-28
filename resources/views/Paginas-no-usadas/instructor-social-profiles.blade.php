<?php $page = 'instructor-social-profiles'; ?>
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
						<div class="mb-3">
							<h5>Settings</h5>
						</div>
						<ul class="settings-nav d-flex align-items-center flex-wrap border bg-light-900 rounded">
							<li><a href="{{url('instructor-settings')}}">Profile</a></li>
							<li><a href="{{url('instructor-change-password')}}">Security</a></li>
							<li><a href="{{url('instructor-plans')}}">Plans</a></li>
							<li><a href="{{url('instructor-social-profiles')}}" class="active">Social Profiles</a></li>
							<li><a href="{{url('instructor-linked-accounts')}}">Linked Accounts</a></li>
							<li><a href="{{url('instructor-notifications')}}">Notifications</a></li>
							<li><a href="{{url('instructor-integrations')}}">Integrations</a></li>
							<li><a href="{{url('instructor-withdraw')}}">Withdraw</a></li>
						</ul>
							<div class="card">
								<div class="card-body">
									<form action="{{url('student-social-profile')}}">
										<div class="mb-3">
											<label class="form-label">Twitter</label>
											<div class="position-relative input-icon-start">
												<input type="text" class="form-control" placeholder="https://www.twitter.com/">
												<span class="social-icon"><i class="fa-brands fa-x-twitter fs-14"></i></span>
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label">Facebook</label>
											<div class="position-relative input-icon-start">
												<input type="text" class="form-control" placeholder="https://www.facebook.com/">
												<span class="social-icon"><i class="fa-brands fa-square-facebook fs-14"></i></span>
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label">Instagram</label>
											<div class="position-relative input-icon-start">
												<input type="text" class="form-control" placeholder="https://www.instagram.com/">
												<span class="social-icon"><i class="fa-brands fa-instagram fs-14"></i></span>
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label">LinkedIn</label>
											<div class="position-relative input-icon-start">
												<input type="text" class="form-control" placeholder="https://www.linkedin.com/">
												<span class="social-icon"><i class="fa-brands fa-linkedin-in fs-14"></i></span>
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label">YouTube</label>
											<div class="position-relative input-icon-start">
												<input type="text" class="form-control" placeholder="https://www.youtube.com/">
												<span class="social-icon"><i class="fa-brands fa-youtube fs-14"></i></span>
											</div>
										</div>
										<div class="mt-4">
											<button class="btn btn-secondary" type="submit">Save Social Profile</button>
										</div>
									</form>
								</div>
							</div>
						
					</div>
				</div>
			</div>
		</div>
@endsection
