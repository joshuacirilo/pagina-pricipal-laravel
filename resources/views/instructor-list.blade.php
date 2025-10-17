<?php $page = 'instructor-list'; ?>
@extends('layout.mainlayout')
@section('content')
	@component('components.breadcrumb')
        @slot('title')
            Instructor List
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Instructor List
        @endslot
    @endcomponent
			
	<div class="main-wrapper">
		<!-- Course -->
		<div class="instructor-list">
			<div class="container">
				<div class="row align-items-baseline">
					<div class="col-lg-3">
						<div class="clear-filter mb-4 pb-lg-2 d-flex align-items-center justify-content-between">
							<h5><i class="feather-filter me-2"></i>Filters</h5>
							<a href="javascript:void(0);" class="clear-text">
								Clear
							</a>
						</div>
						<div class="filter-clear">
							<div class="accordion accordion-customicon1 accordions-items-seperate">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingcustomicon1One">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1One" aria-expanded="true" aria-controls="collapsecustomicon1One">
										Categories <i class="fa-solid fa-chevron-down"></i>
										</button>
									</h2>
									<div id="collapsecustomicon1One" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example" style="">
										<div class="accordion-body">
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_specialist" >
													<span class="checkmark"></span> Backend (3)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_specialist" >
													<span class="checkmark"></span>  CSS (2)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_specialist">
													<span class="checkmark"></span>  Frontend (2)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_specialist">
													<span class="checkmark"></span> General (2)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_specialist" checked>
													<span class="checkmark"></span> IT & Software (2)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_specialist">
													<span class="checkmark"></span> Photography (2)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_specialist">
													<span class="checkmark"></span>  Programming Language (3)
												</label>
											</div>
											<div>
												<label class="custom_check mb-0">
													<input type="checkbox" name="select_specialist">
													<span class="checkmark"></span>  Technology (2)
												</label>
											</div>
											<a href="javascript:void(0);" class="see-more-btn">See More</a>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingcustomicon1Two">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two" aria-expanded="true" aria-controls="collapsecustomicon1Two">
										Instructors<i class="fa-solid fa-chevron-down"></i>
										</button>
									</h2>
									<div id="collapsecustomicon1Two" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1Two" data-bs-parent="#accordioncustomicon1Example">
										<div class="accordion-body">
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_specialist" >
													<span class="checkmark"></span> Keny White (10)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_specialist" >
													<span class="checkmark"></span>  Hinata Hyuga (5)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_specialist">
													<span class="checkmark"></span>  John Doe (3)
												</label>
											</div>
											<div>
												<label class="custom_check mb-0">
													<input type="checkbox" name="select_specialist" checked>
													<span class="checkmark"></span> Nicole Brown
												</label>
											</div>
											<a href="javascript:void(0);" class="see-more-btn">See More</a>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingcustomicon1Three">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three" aria-expanded="true" aria-controls="collapsecustomicon1Three">
										Price<i class="fa-solid fa-chevron-down"></i>
										</button>
									</h2>
									<div id="collapsecustomicon1Three" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1Three" data-bs-parent="#accordioncustomicon1Example">
										<div class="accordion-body">
											<div>
												<label class="custom_check custom_one">
													<input type="checkbox" name="select_specialist" >
													<span class="checkmark"></span> All (10)

												</label>
											</div>
											<div>
												<label class="custom_check custom_one">
													<input type="checkbox" name="select_specialist" >
													<span class="checkmark"></span>  Free (5) 

												</label>
											</div>
											<div>
												<label class="custom_check custom_one mb-0">
													<input type="checkbox" name="select_specialist">
													<span class="checkmark"></span>  Paid (3)
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingcustomicon1Four">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Four" aria-expanded="true" aria-controls="collapsecustomicon1Four">
										Range<i class="fa-solid fa-chevron-down"></i>
										</button>
									</h2>
									<div id="collapsecustomicon1Four" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1Four" data-bs-parent="#accordioncustomicon1Example">
										<div class="accordion-body">
											<div class="filter-range">
												<input type="text"  class="input-range">
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingcustomicon1Five">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Five" aria-expanded="true" aria-controls="collapsecustomicon1Five">
										Level<i class="fa-solid fa-chevron-down"></i>
										</button>
									</h2>
									<div id="collapsecustomicon1Five" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1Five" data-bs-parent="#accordioncustomicon1Example">
										<div class="accordion-body">
											<div>
												<label class="custom_check custom_one">
													<input type="checkbox" name="select_specialist" >
													<span class="checkmark"></span>Beginner (10)
												</label>
											</div>
											<div>
												<label class="custom_check custom_one">
													<input type="checkbox" name="select_specialist" >
													<span class="checkmark"></span> Intermediate (5)

												</label>
											</div>
											<div>
												<label class="custom_check custom_one">
													<input type="checkbox" name="select_specialist">
													<span class="checkmark"></span>Advanced (21)
												</label>
											</div>
											<div>
												<label class="custom_check custom_one mb-0">
													<input type="checkbox" name="select_specialist">
													<span class="checkmark"></span>Expert  (3)
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-9">
					<!-- Filter -->
					<div class="showing-list mb-4">
						<div class="row align-items-center">
							<div class="col-lg-4">
								<div class="show-result text-center text-lg-start">
									<h6 class="fw-medium">Showing 1-9 of 50 results</h6>
								</div>
							</div>
							<div class="col-lg-8">	
								<div class="show-filter add-course-info">
									<form action="#">
										<div class="d-sm-flex justify-content-center justify-content-lg-end mb-1 mb-lg-0">
											<div class="view-icons mb-2 mb-sm-0">
												<a href="{{url('instructor-grid')}}" class="grid-view"><i class="feather-grid"></i></a>
												<a href="{{url('instructor-list')}}" class="list-view active"><i class="isax isax-task"></i></a>
											</div>
											<select class="form-select">
												<option>Newly Published </option>
												<option>Trending Courses</option>
												<option>Top Rated</option>
												<option>Free Courses</option>
											</select>
											<div class=" search-group">
												<i class="isax isax-search-normal-1"></i>
												<input type="text" class="form-control" placeholder="Search" >
											</div>
										</div>
									</form>
								</div>	
							</div>
						</div>
					</div>
					<!-- /Filter -->
						<div class="instructor-item instructor-item-seven">
							<div class="instructor-img">
								<a href="{{url('instructor-details')}}">
									<img src="{{URL::asset('build/img/user/user-61.jpg')}}" alt="img" class="img-fluid">
								</a>
								<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
									<a class="favourite" href="#"><i class="isax isax-heart color-active"></i></a>
								</div>
							</div>
							<div class="instructor-content flex-fill">
								<div class="pb-3 border-bottom mb-3">
									<div class="d-flex align-items-center justify-content-between flex-wrap gap-1 mb-1">
										<div>
											<h6 class="title"><a href="{{url('instructor-details')}}">Rolands Granger</a></h6>
											<span class="designation">Developer</span>
										</div>
										<div>
											<p class="rating">
												<i class="fas fa-star me-1"></i>4.9 (200 Reviews)
											</p>
										</div>
									</div>
									<p>I am a web developer with a vast array of knowledge in many different front end and back end languages, responsive frameworks, databases, and best code practices.</p>
								</div>
								<div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
									<div class="d-flex align-items-center flex-wrap gap-y-2 fs-14 counts-details">
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i></span>
											12+ Lesson
										</span>
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i></span>
											169hr 20min
										</span>
										<span class="d-flex align-items-center">
											<span class="d-flex align-items-center"><i class="isax isax-profile-2user5 fs-16 text-secondary me-2"></i></span>
											50 Students
										</span>
									</div>
									<div class="d-flex align-items-center flex-wrap gap-1">
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Web Design
										</div>
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Development
										</div>
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Re-Design
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="instructor-item instructor-item-seven">
							<div class="instructor-img">
								<a href="{{url('instructor-details')}}">
									<img src="{{URL::asset('build/img/user/user-62.jpg')}}" alt="img" class="img-fluid">
								</a>
							<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
								<a class="favourite selected" href="#"><i class="isax isax-heart color-active"></i></a>
							</div>
							</div>
							<div class="instructor-content flex-fill">
								<div class="pb-3 border-bottom mb-3">
									<div class="d-flex align-items-center justify-content-between flex-wrap gap-1 mb-1">
										<div>
											<h6 class="title"><a href="{{url('instructor-details')}}">Lisa Lopezr</a></h6>
											<span class="designation">Finance</span>
										</div>
										<div>
											<p class="rating">
												<i class="fas fa-star me-1"></i>4.4 (130 Reviews)
											</p>
										</div>
									</div>
									<p>I am a web developer with a vast array of knowledge in many different front end....</p>
								</div>
								<div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
									<div class="d-flex align-items-center flex-wrap gap-y-2 fs-14 counts-details">
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i></span>
											22+ Lesson
										</span>
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i></span>
											15hr 06min
										</span>
										<span class="d-flex align-items-center">
											<span class="d-flex align-items-center"><i class="isax isax-profile-2user5 fs-16 text-secondary me-2"></i></span>
											22 Students
										</span>
									</div>
									<div class="d-flex align-items-center flex-wrap gap-1">
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Accounting
										</div>
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Commerce
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="instructor-item instructor-item-seven">
							<div class="instructor-img">
								<a href="{{url('instructor-details')}}">
									<img src="{{URL::asset('build/img/user/user-63.jpg')}}" alt="img" class="img-fluid">
								</a>
							<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
								<a class="favourite selected" href="#"><i class="isax isax-heart color-active"></i></a>
							</div>
							</div>
							<div class="instructor-content flex-fill">
								<div class="pb-3 border-bottom mb-3">
									<div class="d-flex align-items-center justify-content-between flex-wrap gap-1 mb-1">
										<div>
											<h6 class="title"><a href="{{url('instructor-details')}}">Charles Ruizr</a></h6>
											<span class="designation">Cloud Engineer</span>
										</div>
										<div>
											<p class="rating">
												<i class="fas fa-star me-1"></i>4.4 (130 Reviews)
											</p>
										</div>
									</div>
									<p>I am a web developer with a vast array of knowledge in many different front end</p>
								</div>
								<div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
									<div class="d-flex align-items-center flex-wrap gap-y-2 fs-14 counts-details">
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i></span>
											16+ Lesson
										</span>
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i></span>
											2hr 25min
										</span>
										<span class="d-flex align-items-center">
											<span class="d-flex align-items-center"><i class="isax isax-profile-2user5 fs-16 text-secondary me-2"></i></span>
											10 Students
										</span>
									</div>
									<div class="d-flex align-items-center flex-wrap gap-1">
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											DevOps
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="instructor-item instructor-item-seven">
							<div class="instructor-img">
								<a href="{{url('instructor-details')}}">
									<img src="{{URL::asset('build/img/user/user-44.jpg')}}" alt="img" class="img-fluid">
								</a>
								<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
									<a class="favourite" href="#"><i class="isax isax-heart color-active"></i></a>
								</div>
							</div>
							<div class="instructor-content flex-fill">
								<div class="pb-3 border-bottom mb-3">
									<div class="d-flex align-items-center justify-content-between flex-wrap gap-1 mb-1">
										<div>
											<h6 class="title"><a href="{{url('instructor-details')}}">Rogerina Grogan</a></h6>
											<span class="designation">Vocational</span>
										</div>
										<div>
											<p class="rating">
												<i class="fas fa-star me-1"></i>4.6 (180 Reviews)
											</p>
										</div>
									</div>
									<p>I am a web developer with a vast array of knowledge in many different front end</p>
								</div>
								<div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
									<div class="d-flex align-items-center flex-wrap gap-y-2 fs-14 counts-details">
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i></span>
											06+ Lesson
										</span>
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i></span>
											19hr 30min
										</span>
										<span class="d-flex align-items-center">
											<span class="d-flex align-items-center"><i class="isax isax-profile-2user5 fs-16 text-secondary me-2"></i></span>
											50 Students
										</span>
									</div>
									<div class="d-flex align-items-center flex-wrap gap-1">
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Language
										</div>
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Voice
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="instructor-item instructor-item-seven">
							<div class="instructor-img">
								<a href="{{url('instructor-details')}}">
									<img src="{{URL::asset('build/img/user/user-45.jpg')}}" alt="img" class="img-fluid">
								</a>
								<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
									<a class="favourite" href="#"><i class="isax isax-heart color-active"></i></a>
								</div>
							</div>
							<div class="instructor-content flex-fill">
								<div class="pb-3 border-bottom mb-3">
									<div class="d-flex align-items-center justify-content-between flex-wrap gap-1 mb-1">
										<div>
											<h6 class="title"><a href="{{url('instructor-details')}}">Ivana Tow</a></h6>
											<span class="designation">Corporate Trainer</span>
										</div>
										<div>
											<p class="rating">
												<i class="fas fa-star me-1"></i>4.2 (210 Reviews)
											</p>
										</div>
									</div>
									<p>I am a web developer with a vast array of knowledge in many different front</p>
								</div>
								<div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
									<div class="d-flex align-items-center flex-wrap gap-y-2 fs-14 counts-details">
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i></span>
											25+ Lesson
										</span>
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i></span>
											4hr 20min
										</span>
										<span class="d-flex align-items-center">
											<span class="d-flex align-items-center"><i class="isax isax-profile-2user5 fs-16 text-secondary me-2"></i></span>
											50 Students
										</span>
									</div>
									<div class="d-flex align-items-center flex-wrap gap-1">
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Professional
										</div>
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Training
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="instructor-item instructor-item-seven">
							<div class="instructor-img">
								<a href="{{url('instructor-details')}}">
									<img src="{{URL::asset('build/img/user/user-46.jpg')}}" alt="img" class="img-fluid">
								</a>
								<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
									<a class="favourite selected" href="#"><i class="isax isax-heart color-active"></i></a>
								</div>
							</div>
							<div class="instructor-content flex-fill">
								<div class="pb-3 border-bottom mb-3">
									<div class="d-flex align-items-center justify-content-between flex-wrap gap-1 mb-1">
										<div>
											<h6 class="title"><a href="{{url('instructor-details')}}">Kevin Leonard</a></h6>
											<span class="designation">Developer</span>
										</div>
										<div>
											<p class="rating">
												<i class="fas fa-star me-1"></i>4.5 (140 Reviews)
											</p>
										</div>
									</div>
									<p>I am a web developer with a vast array of knowledge in many different front</p>
								</div>
								<div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
									<div class="d-flex align-items-center flex-wrap gap-y-2 fs-14 counts-details">
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i></span>
											11+ Lesson
										</span>
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i></span>
											7hr 10min
										</span>
										<span class="d-flex align-items-center">
											<span class="d-flex align-items-center"><i class="isax isax-profile-2user5 fs-16 text-secondary me-2"></i></span>
											21 Students
										</span>
									</div>
									<div class="d-flex align-items-center flex-wrap gap-1">
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Web Design
										</div>
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Functionality
										</div>
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Modules
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="instructor-item instructor-item-seven">
							<div class="instructor-img">
								<a href="{{url('instructor-details')}}">
									<img src="{{URL::asset('build/img/user/user-47.jpg')}}" alt="img" class="img-fluid">
								</a>
								<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
									<a class="favourite" href="#"><i class="isax isax-heart color-active"></i></a>
								</div>
							</div>
							<div class="instructor-content flex-fill">
								<div class="pb-3 border-bottom mb-3">
									<div class="d-flex align-items-center justify-content-between flex-wrap gap-1 mb-1">
										<div>
											<h6 class="title"><a href="{{url('instructor-details')}}">Jeanette Dulaneyr</a></h6>
											<span class="designation">Technical Traine</span>
										</div>
										<div>
											<p class="rating">
												<i class="fas fa-star me-1"></i>4.7 (220 Reviews)
											</p>
										</div>
									</div>
									<p>I am a web developer with a vast array of knowledge in many different front</p>
								</div>
								<div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
									<div class="d-flex align-items-center flex-wrap gap-y-2 fs-14 counts-details">
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i></span>
											12+ Lesson
										</span>
										<span class="d-flex align-items-center me-4">
											<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i></span>
											9hr 30min
										</span>
										</span>
										<span class="d-flex align-items-center">
											<span class="d-flex align-items-center"><i class="isax isax-profile-2user5 fs-16 text-secondary me-2"></i></span>
											32 Students
										</span>
									</div>				
									<div class="d-flex align-items-center flex-wrap gap-1">
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											IT
										</div>
										<div class="badge bg-gray-100 text-dark badge-md fs-10 fw-medium rounded">
											Development
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- /pagination -->
						<div class="row align-items-center mt-sm-4 mt-md-5 mt-3">
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
		<!-- /Course -->
	</div>

@endsection
