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
                                <li><a href="{{url('student-linked-accounts')}}" class="active">Linked Accounts</a></li>
                                <li><a href="{{url('student-notifications')}}">Notifications</a></li>
                                <li><a href="{{url('student-billing-address')}}">Billing Address</a></li>
                            </ul>
								<div class="card mb-0">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="d-flex align-items-center border-bottom mb-4 pb-4">
													<div class="flex-shrink-0 me-3">
														<img src="{{URL::asset('build/img/icon/fb-icon.svg')}}" alt="Img">
													</div>
													<div class="d-sm-flex align-items-center justify-content-between w-100">
													<div class="mb-2 mb-sm-0">
														<h6 class="mb-1">Facebook</h6>
														<p class="mb-0">Facebook is a social platform for connecting, sharing, and building communities globally.</p>
														
													</div>
													<a href="#" class="btn btn-dark flex-shrink-0"  data-bs-toggle="modal" data-bs-target="#delete_modal">Remove</a>
												</div>
												</div>
												<div class="d-flex align-items-center border-bottom mb-4 pb-4">
													<div class="flex-shrink-0 me-3">
														<img src="{{URL::asset('build/img/icon/google-icon.svg')}}" alt="Img">
													</div>
													<div class="d-sm-flex align-items-center justify-content-between w-100">
														<div class="mb-2 mb-sm-0">
                                                            <h6 class="mb-1">Google</h6>
                                                            <p class="mb-0">Google is widely used for search, maps, email, and other services.</p>
													    </div>
														<a href="#" class="btn btn-light flex-shrink-0">Link Account</a>
													</div>
												</div>
												<div class="d-flex align-items-center border-bottom mb-4 pb-4">
													<div class="flex-shrink-0 me-3">
														<img src="{{URL::asset('build/img/icon/github-icon.svg')}}" alt="Img">
													</div>
													<div class="d-sm-flex align-items-center justify-content-between w-100">
													<div class="mb-2 mb-sm-0">
														<h6 class="mb-1">Github</h6>
														<p class="mb-0">GitHub is a version control and collaboration platform for hosting, managing, and sharing code.</p>
												
													</div>
													<a href="#" class="btn btn-light flex-shrink-0">Link Account</a>
												</div>
												</div>
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 me-3">
														<img src="{{URL::asset('build/img/icon/twitter-x-icon.svg')}}" alt="Img">
													</div>
													<div class="d-sm-flex align-items-center justify-content-between w-100">
													<div class="mb-2 mb-sm-0">
														<h6 class="mb-1">Twitter</h6>
														<p class="mb-0">Twitter is a platform for sharing news, updates, and global conversations.</p>
														
													</div>
													<a href="#" class="btn btn-light flex-shrink-0">Link Account</a>
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
