<?php $page = 'course-list'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Course List
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Course List
        @endslot
    @endcomponent
			<!-- Course -->
			<section class="course-content course-list-content">
				<div class="container">
					<div class="row align-items-baseline">
						<div class="col-lg-3 theiaStickySidebar">
							<div class="filter-clear">
								<div class="clear-filter mb-4 pb-lg-2 d-flex align-items-center justify-content-between">
									<h5><i class="feather-filter me-2"></i>Filters</h5>
									<a href="javascript:void(0);" class="clear-text">
										Clear
									</a>
								</div>

								<div class="accordion accordion-customicon1 accordions-items-seperate">
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingcustomicon1One">
											<a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1One" aria-expanded="true" aria-controls="collapsecustomicon1One">
											Categories <i class="fa-solid fa-chevron-down"></i>
											</a>
										</h2>
										<div id="collapsecustomicon1One" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1One" data-bs-parent="#accordioncustomicon1Example">
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
											<a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two" aria-expanded="true" aria-controls="collapsecustomicon1Two">
											Instructors<i class="fa-solid fa-chevron-down"></i>
											</a>
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
											<a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three" aria-expanded="true" aria-controls="collapsecustomicon1Three">
											Price<i class="fa-solid fa-chevron-down"></i>
											</a>
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
											<a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Four" aria-expanded="true" aria-controls="collapsecustomicon1Four">
											Range<i class="fa-solid fa-chevron-down"></i>
											</a>
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
											<a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Five" aria-expanded="true" aria-controls="collapsecustomicon1Five">
											Level<i class="fa-solid fa-chevron-down"></i>
											</a>
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
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingcustomicon1Six">
											<a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Six" aria-expanded="true" aria-controls="collapsecustomicon1Six">
											Reviews <i class="fa-solid fa-chevron-down"></i>
											</a>
										</h2>
										<div id="collapsecustomicon1Six" class="accordion-collapse collapse show" aria-labelledby="headingcustomicon1Six" data-bs-parent="#accordioncustomicon1Example">
											<div class="accordion-body">
												<div>
													<label class="custom_check custom_one">
														<input type="checkbox" name="select_specialist" >
														<span class="checkmark"></span>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-warning"></i>
													</label>
												</div>
												<div>
													<label class="custom_check custom_one">
														<input type="checkbox" name="select_specialist" >
														<span class="checkmark"></span>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-light"></i>
	
													</label>
												</div>
												<div>
													<label class="custom_check custom_one">
														<input type="checkbox" name="select_specialist">
														<span class="checkmark"></span>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-light me-1"></i>
														<i class="fa-solid fa-star text-light"></i>
													</label>
												</div>
												<div>
													<label class="custom_check custom_one">
														<input type="checkbox" name="select_specialist">
														<span class="checkmark"></span>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-light me-1"></i>
														<i class="fa-solid fa-star text-light me-1"></i>
														<i class="fa-solid fa-star text-light"></i>
													</label>
												</div>
												<div>
													<label class="custom_check custom_one mb-0">
														<input type="checkbox" name="select_specialist">
														<span class="checkmark"></span>
														<i class="fa-solid fa-star text-warning me-1"></i>
														<i class="fa-solid fa-star text-light me-1"></i>
														<i class="fa-solid fa-star text-light me-1"></i>
														<i class="fa-solid fa-star text-light me-1"></i>
														<i class="fa-solid fa-star text-light"></i>
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
														<a href="{{url('course-grid')}}" class="grid-view"><i class="feather-grid"></i></a>
														<a href="{{url('course-list')}}" class="list-view active"><i class="isax isax-task"></i></a>
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
							
							<div class="row course-list-wrap">
								<div class="col-12">
									<div class="courses-list-item">				
										<div class="d-md-flex align-items-center">
											<div class="position-relative overflow-hidden rounded-3 card-image">
												<a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-01.jpg')}}" alt="img"></a>
												<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
													<a href="javascript:void(0);" class="like"><i class="isax isax-heart"></i></a>
												</div>
											</div>
											<div class="course-list-contents w-100 ps-0 ps-md-3 pt-4 pt-md-0">
												<div class="d-flex flex-wrap align-items-center justify-content-between">
													<div class="d-flex align-items-center">
														<div class="avatar avatar-sm rounded-circle">
															<a href="#"><img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/avatar/avatar1.jpg')}}" alt="img"></a>
														</div>
														<p class="ms-2"><a href="{{url('instructor-details')}}">David Benitez</a></p>
													</div>
													<span><a class="tag-btn" href="#">Design</a></span>
												</div>
												<h4 class="mt-3 mb-2"><a href="{{url('course-details')}}">Information About UI/UX Design Degree</a></h4>
												<div class="d-flex align-items-center">
													<p class="d-flex align-items-center mb-0"><i class="fa-solid fa-star text-warning me-2"></i> 4.9 (200 Reviews)</p>
													<span class="dot"></span>
													<p>Intermediate</p>
												</div>
												<div class="d-flex justify-content-between mt-3 align-items-center">
													<h5 class="text-secondary">$120</h5>
													<a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Get Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="courses-list-item">							
										<div class="d-md-flex align-items-center">
											<div class="position-relative overflow-hidden rounded-3 card-image">
												<a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-02.jpg')}}" alt="img"></a>
												<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
													<a href="javascript:void(0);" class="like"><i class="isax isax-heart"></i></a>
												</div>
											</div>
											<div class="course-list-contents w-100 ps-0 ps-md-3 pt-4 pt-md-0">
												<div class="d-flex flex-wrap align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<div class="avatar avatar-sm rounded-circle">
														<a href="#"><img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/avatar/avatar2.jpg')}}" alt="img"></a>
													</div>
													<p class="ms-2"><a href="{{url('instructor-details')}}">Ana Reyes</a></p>
												</div>
												<span><a href="#" class="tag-btn">Wordpress</a></span>
											</div>
											<h4 class="mt-3 mb-2"><a href="{{url('course-details')}}">Wordpress for Beginners - Master Wordpress Quickly</a></h4>
											<div class="d-flex align-items-center">
												<p class="d-flex align-items-center mb-0"><i class="fa-solid fa-star text-warning me-2"></i>4.4 (160 Reviews)</p>
												<span class="dot"></span>
												<p>Advanced</p>
											</div>
											 <div class="d-flex justify-content-between mt-3 align-items-center">
												<h5 class="text-secondary">$140</h5>
												<a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Get Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
											 </div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="courses-list-item">							
									<div class="d-md-flex align-items-center">
                                            <div class="position-relative overflow-hidden rounded-3 card-image">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-03.jpg')}}" alt="img"></a>
												<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
													<a href="javascript:void(0);" class="like"><i class="isax isax-heart"></i></a>
												</div>
                                              </div>
											  <div class="course-list-contents w-100 ps-0 ps-md-3 pt-4 pt-md-0">
											<div class="d-flex flex-wrap align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<div class="avatar avatar-sm rounded-circle">
													<a href="#"><img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/avatar/avatar3.jpg')}}" alt="img"></a>
												</div>
												<p class="ms-2"><a href="{{url('instructor-details')}}">Andrew Pirtle</a></p>
											</div>
											<span><a href="#" class="tag-btn">Design</a></span>
										</div>
										<h4 class="mt-3 mb-2"><a href="{{url('course-details')}}">Sketch from A to Z (2024): Become an app designer</a></h4>
										<div class="d-flex align-items-center">
											<p class="d-flex align-items-center mb-0"><i class="fa-solid fa-star text-warning me-2"></i>4.6 (170 Reviews)</p>
											<span class="dot"></span>
											<p>Basic</p>
										</div>
										 <div class="d-flex justify-content-between mt-3 align-items-center">
											<h5 class="text-secondary">$160</h5>
											<a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Get Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
										 </div>
										</div>
									</div>
									</div>
								</div>
								<div class="col-12">
									<div class="courses-list-item">							
									<div class="d-md-flex align-items-center">
                                            <div class="position-relative overflow-hidden rounded-3 card-image">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-04.jpg')}}" alt="img"></a>
												<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
													<a href="javascript:void(0);" class="like"><i class="isax isax-heart"></i></a>
												</div>
                                              </div>
											  <div class="course-list-contents w-100 ps-0 ps-md-3 pt-4 pt-md-0">
											<div class="d-flex flex-wrap align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<div class="avatar avatar-sm rounded-circle">
													<a href="#"><img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/avatar/avatar4.jpg')}}" alt="img"></a>
												</div>
												<p class="ms-2"><a href="{{url('instructor-details')}}">Christy Garner</a></p>
											</div>
											<span><a href="#" class="tag-btn">Programming</a></span>
										</div>
										<h4 class="mt-3 mb-2"><a href="{{url('course-details')}}">Build Responsive Real World Websites with Crash Course</a></h4>
										<div class="d-flex align-items-center">
											<p class="d-flex align-items-center mb-0"><i class="fa-solid fa-star text-warning me-2"></i>4.2 (220 Reviews)</p>
											<span class="dot"></span>
											<p>Advanced</p>
										</div>
										 <div class="d-flex justify-content-between mt-3 align-items-center">
											<h5 class="text-secondary">$200</h5>
											<a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Get Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
										 </div>
										</div>
									</div>
									</div>
								</div>
								<div class="col-12">
									<div class="courses-list-item">							
									<div class="d-md-flex align-items-center">
                                            <div class="position-relative overflow-hidden rounded-3 card-image">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-05.jpg')}}" alt="img"></a>
												<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
													<a href="javascript:void(0);" class="like"><i class="isax isax-heart"></i></a>
												</div>
                                              </div>
											  <div class="course-list-contents w-100 ps-0 ps-md-3 pt-4 pt-md-0">
											<div class="d-flex flex-wrap align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<div class="avatar avatar-sm rounded-circle">
													<a href="#"><img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/avatar/avatar5.jpg')}}" alt="img"></a>
												</div>
												<p class="ms-2"><a href="{{url('instructor-details')}}">Justin Gregory</a></p>
											</div>
											<span><a href="#" class="tag-btn">Programming</a></span>
										</div>
										<h4 class="mt-3 mb-2"><a href="{{url('course-details')}}">Learn JavaScript and Express to become a Expert</a></h4>
										<div class="d-flex align-items-center">
											<p class="d-flex align-items-center mb-0"><i class="fa-solid fa-star text-warning me-2"></i>4.4 (180 Reviews)</p>
											<span class="dot"></span>
											<p>Intermediate</p>
										</div>
										 <div class="d-flex justify-content-between mt-3 align-items-center">
											<h5 class="text-secondary">$130</h5>
											<a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Get Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
										 </div>
										</div>
									</div>
									</div>
								</div>
								<div class="col-12">
									<div class="courses-list-item">							
									<div class="d-md-flex align-items-center">
                                            <div class="position-relative overflow-hidden rounded-3 card-image">
                                                <a href="{{url('course-details')}}"><img class="img-fluid rounded-3" src="{{URL::asset('./build/img/course/course-06.jpg')}}" alt="img"></a>
												<div class="position-absolute start-0 top-0 d-flex align-items-start w-100 z-index-2 p-2">
													<a href="javascript:void(0);" class="like"><i class="isax isax-heart"></i></a>
												</div>
                                              </div>
											  <div class="course-list-contents w-100 ps-0 ps-md-3 pt-4 pt-md-0">
											<div class="d-flex flex-wrap align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<div class="avatar avatar-sm rounded-circle">
													<a href="#"><img class="img-fluid rounded-circle" src="{{URL::asset('./build/img/avatar/avatar6.jpg')}}" alt="img"></a>
												</div>
												<p class="ms-2"><a href="{{url('instructor-details')}}">Carolyn Hines</a></p>
											</div>
											<span><a href="#" class="tag-btn">Programming</a></span>
										</div>
										<h4 class="mt-3 mb-2"><a href="{{url('course-details')}}">Introduction to Python Programming</a></h4>
										<div class="d-flex align-items-center">
											<p class="d-flex align-items-center mb-0"><i class="fa-solid fa-star text-warning me-2"></i>4.7 (130 Reviews)</p>
											<span class="dot"></span>
											<p>Expert</p>
										</div>
										 <div class="d-flex justify-content-between mt-3 align-items-center">
											<h5 class="text-secondary">$150</h5>
											<a href="{{url('course-details')}}" class="btn btn-dark btn-sm d-inline-flex align-items-center">Get Course<i class="fs-8 fas fa-angle-right ms-2"></i></a>
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
			<!-- /Course -->
@endsection
