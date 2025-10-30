<?php $page = 'student-details'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Students Details
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Students Details
        @endslot
    @endcomponent

            <div class="content instructor-detail-content">
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
					<a href="{{url('student-list')}}" class="d-flex align-items-center mb-3"><i class="isax isax-arrow-left me-1 fw-bold"></i>Back to List</a>
					<div class="row">
						<div class="col-lg-8">
							<div class="instructor-details-item1 mb-4">
									<div class="instructor-details">
										<div class="instructor-img">
											<a href="javascript:void(0);">
												<img src="{{URL::asset('build/img/students/student-01.jpg')}}" alt="img" class="img-fluid">
											</a>
										</div>
										<div class="flex-fill">
											<div class="pb-3 border-bottom mb-3">
												<div class="d-flex align-items-center justify-content-between mb-1">
													<h6 class="fs-18 fw-bold"><a href="javascript:void(0);">Thompson Hicks</a></h6>
												</div>
												<div class="d-flex align-items-center mb-1">
													<p>Joined on : 24 May 2024</p>
												</div>
												<div>
													<p>Hello! I'm Thompson Hicks. I'm passionate about developing innovative software solutions, analyzing classic literature. </p>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between flex-wrap">
												<div class="d-flex align-items-center counts-details mb-0">
													<div class="d-flex align-items-center me-4">
														<span class="d-flex align-items-center"><i class="isax isax-book5 text-primary me-1"></i>10 Courses</span>														
													</div>
												</div>
												<div class="d-flex align-items-center">
													<span>
														<a href="javascript:void(0);" class="rounded-circle d-inline-flex align-items-center justify-content-center p-1 me-2">
															<i class="fa-brands fa-facebook-f"></i>
														</a>
													</span>
													<span>
														<a href="javascript:void(0);" class="rounded-circle d-inline-flex align-items-center justify-content-center p-1 me-2">
															<i class="fa-brands fa-instagram"></i>
														</a>
													</span>
													<span>
														<a href="javascript:void(0);" class="rounded-circle d-inline-flex align-items-center justify-content-center p-1 me-2">
															<i class="fa-brands fa-x-twitter"></i>
														</a>
													</span>
													<span>
														<a href="javascript:void(0);" class="rounded-circle d-inline-flex align-items-center justify-content-center p-1 me-2">
															<i class="fa-brands fa-youtube"></i>
														</a>
													</span>
													<span>
														<a href="javascript:void(0);" class="rounded-circle d-inline-flex align-items-center justify-content-center">
															<i class="fa-brands fa-linkedin-in"></i>
														</a>
													</span>
												</div>
											</div>
										</div>
									</div>
							</div>

							<div class="about-me-card bg-white">
								<div class="about-me-body">
									<h6 class="page-title fs-18 fw-bold">About Me</h6>
									<p class="mb-2">Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. Some quick example text to build on the card title and bulk the card's content Moltin gives you platform.</p>
									<a href="javascript:void(0);" class="text-secondary text-decoration-underline fs-14">Read More</a>
								</div>
							</div>

							<div class="education-card">
								<div class="education-body">
									<h6 class="fs-18 fw-bold page-title">Education</h6>
									<div class="education-flow">
										<div class="ps-4 pb-3 timeline-flow">
											<div>
												<h6 class="fs-16 mb-1">BCA - Bachelor of Computer Applications</h6>
												<p>International University - (2004 - 2010)</p>
											</div>
										</div>
										<div class="ps-4 pb-3 timeline-flow">
											<div>
												<h6 class="fs-16 mb-1">MCA - Master of Computer Application</h6>
												<p>International University - (2010 - 2012)</p>
											</div>
										</div>
										<div class="ps-4 timeline-flow">
											<div>
												<h6 class="mb-1">Design Communication Visual</h6>
												<p>International University - (2012-2015)</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="enrolled-courses-card mb-4 mb-lg-0">
								<div class="enrolled-courses-body">
									<div class="page-title">
										<h6 class="mb-0 fs-18 fw-bold">Enrolled Courses</h6>
									</div>									
									<div class="course-carousal student-details-carousal">
										<div>
											<div class="course-item-two course-item mx-2">
												<div class="course-img">
													<a href="{{url('course-details')}}">
														<img src="{{URL::asset('build/img/course/course-01.jpg')}}" alt="img" class="img-fluid">  
													</a>
													<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
														<div class="badge text-bg-danger">15% off</div>
														<a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
													</div>
												</div>
												<div class="course-content">
													<div class="d-flex justify-content-between mb-2">
														<div class="d-flex align-items-center">
															<a href="{{url('instructor-details')}}" class="avatar avatar-sm">
																<img src="{{URL::asset('build/img/user/user-29.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
															</a>
															<div class="ms-2">
																<a href="{{url('instructor-details')}}" class="link-default fs-14">Brenda Slaton</a>
															</div>
														</div>
														<span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
															Design
														</span>
													</div>
													<h6 class="title mb-2"><a href="{{url('course-details')}}">Information About UI/UX Design Degree</a></h6>
													<p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.9 (200 Reviews)</p>
													<div class="d-flex align-items-center justify-content-between">
														<h5 class="text-secondary mb-0">$120</h5>
														<a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div>
											<div class="course-item-two course-item mx-2">
												<div class="course-img">
													<a href="{{url('course-details')}}">
														<img src="{{URL::asset('build/img/course/course-02.jpg')}}" alt="img" class="img-fluid">  
													</a>
													<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
														<a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
													</div>
												</div>
												<div class="course-content">
													<div class="d-flex justify-content-between mb-2">
														<div class="d-flex align-items-center">
															<a href="{{url('instructor-details')}}" class="avatar avatar-sm">
																<img src="{{URL::asset('build/img/user/user-30.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
															</a>
															<div class="ms-2">
																<a href="{{url('instructor-details')}}" class="link-default fs-14">Ana Reyes</a>
															</div>
														</div>
														<span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
															Wordpress
														</span>
													</div>
													<h6 class="title mb-2"><a href="{{url('course-details')}}">Wordpress for Beginners - Master Wordpress Quickly</a></h6>
													<p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.4 (160 Reviews)</p>
													<div class="d-flex align-items-center justify-content-between">
														<h5 class="text-secondary mb-0">$140</h5>
														<a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div>
											<div class="course-item-two course-item mx-2">
												<div class="course-img">
													<a href="{{url('course-details')}}">
														<img src="{{URL::asset('build/img/course/course-03.jpg')}}" alt="img" class="img-fluid">  
													</a>
													<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
														<a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
													</div>
												</div>
												<div class="course-content">
													<div class="d-flex justify-content-between mb-2">
														<div class="d-flex align-items-center">
															<a href="{{url('instructor-details')}}" class="avatar avatar-sm">
																<img src="{{URL::asset('build/img/user/user-31.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
															</a>
															<div class="ms-2">
																<a href="{{url('instructor-details')}}" class="link-default fs-14">Andrew Pirtle</a>
															</div>
														</div>
														<span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
															Design
														</span>
													</div>
													<h6 class="title mb-2"><a href="{{url('course-details')}}">Sketch from A to Z (2024): Become an app designer</a></h6>
													<p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.4 (160 Reviews)</p>
													<div class="d-flex align-items-center justify-content-between">
														<h5 class="text-secondary mb-0">$140</h5>
														<a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div>
											<div class="course-item-two course-item mx-2">
												<div class="course-img">
													<a href="{{url('course-details')}}">
														<img src="{{URL::asset('build/img/course/course-04.jpg')}}" alt="img" class="img-fluid">  
													</a>
													<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-3">
														<a href="javascript:void(0);" class="fav-icon ms-auto"><i class="isax isax-heart"></i></a>
													</div>
												</div>
												<div class="course-content">
													<div class="d-flex justify-content-between mb-2">
														<div class="d-flex align-items-center">
															<a href="{{url('instructor-details')}}" class="avatar avatar-sm">
																<img src="{{URL::asset('build/img/user/user-32.jpg')}}" alt="img" class="img-fluid avatar avatar-sm rounded-circle">
															</a>
															<div class="ms-2">
																<a href="{{url('instructor-details')}}" class="link-default fs-14">Christy Garner</a>
															</div>
														</div>
														<span class="badge badge-light rounded-pill bg-light d-inline-flex align-items-center fs-13 fw-medium mb-0">
															Programming
														</span>
													</div>
													<h6 class="title mb-2"><a href="{{url('course-details')}}">Build Responsive Real World Websites with Crash Course</a></h6>
													<p class="d-flex align-items-center mb-3"><i class="fa-solid fa-star text-warning me-2"></i>4.2 (220 Reviews)</p>
													<div class="d-flex align-items-center justify-content-between">
														<h5 class="text-secondary mb-0">$200</h5>
														<a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">View Course<i class="isax isax-arrow-right-3 ms-1"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4">
							<div class="certification-card">
								<div class="certification-body">
									<h5 class="mb-3 fw-bold">Certifications</h5>
									<div class="d-flex align-items-center">
										<div class="certificate-img rounded-circle me-2">
											<img src="{{URL::asset('build/img/certificates/certificate-01.svg')}}" alt="img" class="img-fluid">
										</div>
										<div class="certificate-img rounded-circle me-2">
											<img src="{{URL::asset('build/img/certificates/certificate-02.svg')}}" alt="img" class="img-fluid">
										</div>
										<div class="certificate-img rounded-circle me-2">
											<img src="{{URL::asset('build/img/certificates/certificate-03.svg')}}" alt="img" class="img-fluid">
										</div>
										<div class="certificate-img rounded-circle">
											<img src="{{URL::asset('build/img/certificates/certificate-01.svg')}}" alt="img" class="img-fluid">
										</div>
									</div>
								</div>
							</div>


							<div class="contact-card border-0 mb-0">
								<div class="contact-details-body">
									<h5 class="mb-3 fw-bold">Contact Details</h5>
									<div class="d-flex align-items-center mb-4">
										<span class="contact-icon flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center me-3">
											<i class="fa-regular fa-envelope"></i>
										</span>
										<div>
											<h6 class="mb-0">Email</h6>
											<p class="fs-14 mb-0">jennywilson@example.com</p>
										</div>
									</div>
									<div class="d-flex align-items-center mb-4">
										<span class="contact-icon flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center me-3">
											<i class="isax isax-location"></i>
										</span>
										<div>
											<h6 class="mb-0">Address</h6>
											<p class="fs-14 mb-0 text-truncate">877 Ferry Street, Huntsville, Alabama</p>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<span class="contact-icon flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center me-3">
											<i class="isax isax-call"></i>
										</span>
										<div>
											<h6 class="mb-0">Phone</h6>
											<p class="fs-14 mb-0">+1(452) 125-6789</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

@endsection