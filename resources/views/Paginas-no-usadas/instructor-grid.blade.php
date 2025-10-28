<?php $page = 'instructor-grid'; ?>
@extends('layout.mainlayout')
@section('content')
	@component('components.breadcrumb')
        @slot('title')
            Instructor Grid
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Instructor Grid
        @endslot
    @endcomponent
			
		<!-- Instructor -->
		<section class="course-content">
			<div class="container">
				<div class="row align-items-baseline">
					<div class="col-lg-3 theiaStickySidebar">
						<div class="filter-clear">
							<div class="clear-filter d-flex align-items-center justify-content-between mb-4 pb-lg-2">
								<h5><i class="feather-filter me-2"></i>Filters</h5>
								<div class="clear-text">
									<a href="javascript:void(0);" class="clear-text">Clear</a>
								</div>
							</div>
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
													<a href="{{url('instructor-grid')}}" class="grid-view active"><i class="feather-grid"></i></a>
													<a href="{{url('instructor-list')}}" class="list-view"><i class="isax isax-task"></i></a>
												</div>
												<select class="form-select">
													<option>Newly Published</option>
													<option>Trending Courses</option>
													<option>Top Rated</option>
													<option>Free Courses</option>
												</select>
												<div class=" search-group">
													<i class="feather-search"></i>
													<input type="text" class="form-control" placeholder="Search" >
												</div>
											</div>
										</form>
									</div>	
								</div>
							</div>
						</div>
						<!-- /Filter -->
						<div class="row course-list-cover">
							<div class="col-xl-4 col-md-6 d-flex">
								<div class="instructor-item instructor-item-six flex-fill">
									<div class="instructors-img ">
										<a href="{{url('instructor-details')}}" tabindex="0">
											<img class="img-fluid" src="{{URL::asset('build/img/user/user-61.jpg')}}" alt="img">
										</a>
										<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
											<span class="verify">
												<img src="{{URL::asset('build/img/icons/verify-icon.svg')}}" alt="img" class="img-fluid">
											</span>
											<a href="javascript:void(0);" class="favourite ms-auto" tabindex="0">
												<i class="isax isax-heart"></i>
											</a>
										</div>
									</div>
									<div class="instructor-content">
										<div>
											<p class="rating mb-2">
												<i class="fas fa-star me-1"></i>4.9 (200 Reviews)
											</p>
											<h3 class="title mb-2">
												<a href="{{url('instructor-details')}}">Rolands Granger</a>
											</h3>
											<span class="designation">Developer</span>
										</div>
										<div class="d-flex justify-content-between align-items-center instructor-bottom">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i>12+ Lesson</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i>169hr 20min</span>
											</div>
										</div>
									</div>											
								</div>
							</div>
							<div class="col-xl-4 col-md-6 d-flex">
								<div class="instructor-item instructor-item-six flex-fill">
									<div class="instructors-img ">
										<a href="{{url('instructor-details')}}" tabindex="0">
											<img class="img-fluid" src="{{URL::asset('build/img/user/user-62.jpg')}}" alt="img">
										</a>
										<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
											<a href="javascript:void(0);" class="favourite ms-auto" tabindex="0">
												<i class="isax isax-heart"></i>
											</a>
										</div>
									</div>
									<div class="instructor-content">
										<div>
											<p class="rating mb-2">
												<i class="fas fa-star me-1"></i>4.4 (130 Reviews)
											</p>
											<h3 class="title mb-2">
												<a href="{{url('instructor-details')}}">Lisa Lopez</a>
											</h3>
											<span class="designation">Finance</span>
										</div>
										<div class="d-flex justify-content-between align-items-center instructor-bottom">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-book-saved5  me-2 fs-16 text-secondary"></i>22+ Lesson</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-timer-start5 me-2  fs-16 text-primary"></i>15hr 06min</span>
											</div>
										</div>
									</div>											
								</div>
							</div>
							<div class="col-xl-4 col-md-6 d-flex">
								<div class="instructor-item instructor-item-six flex-fill">
									<div class="instructors-img ">
										<a href="{{url('instructor-details')}}" tabindex="0">
											<img class="img-fluid" src="{{URL::asset('build/img/user/user-63.jpg')}}" alt="img">
										</a>
										<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
											<a href="javascript:void(0);" class="favourite ms-auto" tabindex="0">
												<i class="isax isax-heart"></i>
											</a>
										</div>
									</div>
									<div class="instructor-content">
										<div>
											<p class="rating mb-2">
												<i class="fas fa-star me-1"></i>4.5 (120 Reviews)
											</p>
											<h3 class="title mb-2">
												<a href="{{url('instructor-details')}}">Charles Ruiz</a>
											</h3>
											<span class="designation">Cloud Engineer</span>
										</div>
										<div class="d-flex justify-content-between align-items-center instructor-bottom">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i>16+ Lesson</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i>2hr 25min</span>
											</div>
										</div>
									</div>											
								</div>
							</div>
							<div class="col-xl-4 col-md-6 d-flex">
								<div class="instructor-item instructor-item-six flex-fill">
									<div class="instructors-img ">
										<a href="{{url('instructor-details')}}" tabindex="0">
											<img class="img-fluid" src="{{URL::asset('build/img/user/user-44.jpg')}}" alt="img">
										</a>
										<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
											<a href="javascript:void(0);" class="favourite ms-auto" tabindex="0">
												<i class="isax isax-heart"></i>
											</a>
										</div>
									</div>
									<div class="instructor-content">
										<div>
											<p class="rating mb-2">
												<i class="fas fa-star me-1"></i>4.6 (180 Reviews)
											</p>
											<h3 class="title mb-2">
												<a href="{{url('instructor-details')}}">Rogerina Grogan</a>
											</h3>
											<span class="designation">Vocational</span>
										</div>
										<div class="d-flex justify-content-between align-items-center instructor-bottom">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i>06+ Lesson</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i>19hr 30min</span>
											</div>
										</div>
									</div>											
								</div>
							</div>
							<div class="col-xl-4 col-md-6 d-flex">
								<div class="instructor-item instructor-item-six flex-fill">
									<div class="instructors-img ">
										<a href="{{url('instructor-details')}}" tabindex="0">
											<img class="img-fluid" src="{{URL::asset('build/img/user/user-45.jpg')}}" alt="img">
										</a>
										<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
											<a href="javascript:void(0);" class="favourite ms-auto" tabindex="0">
												<i class="isax isax-heart"></i>
											</a>
										</div>
									</div>
									<div class="instructor-content">
										<div>
											<p class="rating mb-2">
												<i class="fas fa-star me-1"></i>4.2 (210 Reviews)
											</p>
											<h3 class="title mb-2">
												<a href="{{url('instructor-details')}}">Ivana Tow</a>
											</h3>
											<span class="designation">Corporate Trainer</span>
										</div>
										<div class="d-flex justify-content-between align-items-center instructor-bottom">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i>25+ Lesson</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i>4hr 20min</span>
											</div>
										</div>
									</div>											
								</div>
							</div>
							<div class="col-xl-4 col-md-6 d-flex">
								<div class="instructor-item instructor-item-six flex-fill">
									<div class="instructors-img ">
										<a href="{{url('instructor-details')}}" tabindex="0">
											<img class="img-fluid" src="{{URL::asset('build/img/user/user-46.jpg')}}" alt="img">
										</a>
										<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
											<a href="javascript:void(0);" class="favourite ms-auto" tabindex="0">
												<i class="isax isax-heart"></i>
											</a>
										</div>
									</div>
									<div class="instructor-content">
										<div>
											<p class="rating mb-2">
												<i class="fas fa-star me-1"></i>4.5 (140 Reviews)
											</p>
											<h3 class="title mb-2">
												<a href="{{url('instructor-details')}}">Kevin Leonard</a>
											</h3>
											<span class="designation">Developer</span>
										</div>
										<div class="d-flex justify-content-between align-items-center instructor-bottom">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i>11+ Lesson</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i>7hr 10min</span>
											</div>
										</div>
									</div>											
								</div>
							</div>
							<div class="col-xl-4 col-md-6 d-flex">
								<div class="instructor-item instructor-item-six flex-fill">
									<div class="instructors-img ">
										<a href="{{url('instructor-details')}}" tabindex="0">
											<img class="img-fluid" src="{{URL::asset('build/img/user/user-47.jpg')}}" alt="img">
										</a>
										<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
											<a href="javascript:void(0);" class="favourite ms-auto" tabindex="0">
												<i class="isax isax-heart"></i>
											</a>
										</div>
									</div>
									<div class="instructor-content">
										<div>
											<p class="rating mb-2">
												<i class="fas fa-star me-1"></i>4.3 (190 Reviews)
											</p>
											<h3 class="title mb-2">
												<a href="{{url('instructor-details')}}">David Roccoz</a>
											</h3>
											<span class="designation">Sports Coach</span>
										</div>
										<div class="d-flex justify-content-between align-items-center instructor-bottom">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i>04+ Lesson</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i>1hr 30min</span>
											</div>
										</div>
									</div>											
								</div>
							</div>
							<div class="col-xl-4 col-md-6 d-flex">
								<div class="instructor-item instructor-item-six flex-fill">
									<div class="instructors-img ">
										<a href="{{url('instructor-details')}}" tabindex="0">
											<img class="img-fluid" src="{{URL::asset('build/img/user/user-48.jpg')}}" alt="img">
										</a>
										<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
											<a href="javascript:void(0);" class="favourite ms-auto" tabindex="0">
												<i class="isax isax-heart"></i>
											</a>
										</div>
									</div>
									<div class="instructor-content">
										<div>
											<p class="rating mb-2">
												<i class="fas fa-star me-1"></i>4.3 (190 Reviews)
											</p>
											<h3 class="title mb-2">
												<a href="{{url('instructor-details')}}">Jeanette Dulaney</a>
											</h3>
											<span class="designation">Technical Traine</span>
										</div>
										<div class="d-flex justify-content-between align-items-center instructor-bottom">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i>08+ Lesson</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i>4hr 35min</span>
											</div>
										</div>
									</div>											
								</div>
							</div>
							<div class="col-xl-4 col-md-6 d-flex">
								<div class="instructor-item instructor-item-six flex-fill">
									<div class="instructors-img ">
										<a href="{{url('instructor-details')}}" tabindex="0">
											<img class="img-fluid" src="{{URL::asset('build/img/user/user-49.jpg')}}" alt="img">
										</a>
										<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
											<a href="javascript:void(0);" class="favourite ms-auto" tabindex="0">
												<i class="isax isax-heart"></i>
											</a>
										</div>
									</div>
									<div class="instructor-content">
										<div>
											<p class="rating mb-2">
												<i class="fas fa-star me-1"></i>4.3 (190 Reviews)
											</p>
											<h3 class="title mb-2">
												<a href="{{url('instructor-details')}}">Debran Andrew</a>
											</h3>
											<span class="designation">Health and Wellness</span>
										</div>
										<div class="d-flex justify-content-between align-items-center instructor-bottom">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-book-saved5 fs-16 text-secondary me-2"></i>08+ Lesson</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center"><i class="isax isax-timer-start5 fs-16 text-primary me-2"></i>4hr 35min</span>
											</div>
										</div>
									</div>											
								</div>
							</div>
						</div>
						
						<!-- /pagination -->
						<div class="row align-items-center">
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
		</section>
		<!-- /Instructor -->
@endsection
