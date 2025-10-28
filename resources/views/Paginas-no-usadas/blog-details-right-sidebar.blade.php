<?php $page = 'blog-details-right-sidebar'; ?>
@extends('layout.mainlayout')
@section('content')

        @component('components.breadcrumb')
            @slot('title')
                Blog Details Right Sidebar
            @endslot
            @slot('item1')
                Home
            @endslot
            @slot('item2')
                Blog Details Right Sidebar
            @endslot
        @endcomponent

        <!-- blog -->
        <div class="blog-sec blog-details">
            <div class="container">
              <div class="row justify-content-center">      
                <div class="col-lg-8">
					<img class="img-fluid rounded-2" src="{{URL::asset('./build/img/blog/blog-detail-image.jpg')}}" alt="img">
					<div class="blog-info my-3">
					   <ul class="d-flex align-items-center flex-wrap gap-2">
						   <li>
							   <div class="avatar avatar-sm rounded-pill me-2 flex-shrink-0">
								   <span>
								   <a href="{{url('instructor-details')}}"><img class="rounded-pill w-auto" src="{{URL::asset('./build/img/user/user-52.jpg')}}" alt="img"></a>
								  </span>
							   </div>
							   <p><a href="{{url('instructor-details')}}">John Miller</a></p>
						   </li>
						   <li>
						   <img class="me-1" src="{{URL::asset('./build/img/icons/calendar.svg')}}" alt="img">
						   <p>20 Apr 2024</p>
						   </li>
						   <li>
						   <img class="me-1" src="{{URL::asset('./build/img/icons/tag.svg')}}" alt="img">
						   <p>Programming, Web Design</p>
						   </li>
					   </ul>
					</div>
					<h5 class="mb-3">Learn Web App Development from Experts in 2024</h5>
					<p>Web app development continues to be one of the most sought-after skills in the tech industry, and 2024 is the perfect year to start your journey. With businesses across the globe increasingly relying on web applications for their operations, the demand for skilled developers is at an all-time high. From lucrative job opportunities to the chance to work on cutting-edge technologies, learning web app development opens doors to a wide array of possibilities. Emerging trends like Progressive Web Apps (PWAs), serverless architectures, and AI integration are transforming the field, making it an exciting time to dive in.</p>
					<div class="p-3 my-4 bg-light-900 blog-blockquote">
					 <p class="text-gray-9">To succeed in web app development, it’s crucial to master a range of skills. On the frontend, knowledge of HTML5, CSS3, and JavaScript is foundational, along with frameworks like React or Vue.js. For backend development, expertise in Node.js, Python (Django or Flask), or PHP is essential. Familiarity with databases, including SQL and NoSQL options like MongoDB and PostgreSQL, is equally important. Tools like Git for version control and Jest or Selenium for testing round out the technical skill set. </p>
					</div>
					<div class="row">
					   <div class="col-lg-6">
						   <div class="mb-3">
							   <img class="img-fluid rounded-2" src="{{URL::asset('./build/img/blog/blog-29.jpg')}}" alt="img">
						   </div>
					   </div>
					   <div class="col-lg-6">
						   <div class="mb-3">
							   <img class="img-fluid rounded-2" src="{{URL::asset('./build/img/blog/blog-30.jpg')}}" alt="img">
						   </div>
					   </div>
					</div>
					<p>One of the key advantages of starting in 2024 is the availability of advanced tools, frameworks, and learning resources. Frameworks like React, Angular, and Vue.js have matured, making development more efficient and user-friendly. Additionally, the rise of online platforms and boot camps provides access to high-quality training, whether you're a beginner or an experienced programmer. The developer community is also thriving, with frequent conferences, virtual meetups, and forums that offer networking and collaborative opportunities.</p>
					<p>If you’re ready to embark on this exciting journey, now is the time to invest in your future. With expert mentorship, practical experience, and a commitment to continuous learning, you can unlock a world of opportunities in web app development in 2024 and beyond.</p>
					<div class="p-3 text-center text-md-start p-lg-4 my-4 bg-light-900 rounded-2 d-md-flex align-items-center">
					   <div class="avatar flex-shrink-0 blog-avatar">
						   <a href="{{url('instructor-details')}}"><img class="img-fluid rounded-pill" src="{{URL::asset('./build/img/user/user-52.jpg')}}" alt="img"></a>
					   </div>
					   <div class="ps-md-3 mt-2 mt-md-0">
					   <span class="text-secondary mb-1">Author</span>
					   <h5 class="mb-1 fs-18"><a href="{{url('instructor-details')}}">Robert Hollenbeck</a></h5>
					   <p>I am experienced project manager and consultant with a rich background in digital project execution and freelance talent acquisition. With over 10 years in the industry, I have mastered the art of identifying and collaborating with top-tier freelance talent across various fields including technology, marketing, and creative services.</p>
					  </div>
				   </div>
				   <div class="d-flex align-items-center justify-content-between mb-3">
					   <div class="previous-post d-flex flex-column">
						   <a href="#" class="fs-14 fw-medium mb-1"><i class="isax isax-arrow-left me-1"></i> Previous Post</a>
						   <span class="fs-14 d-none d-md-flex">Transform Education with the Power of an LMS</span>
					   </div>	
					   <div class="next-post d-flex flex-column text-end">
						   <a href="#" class="fs-14 fw-medium mb-1">Previous Post<i class="isax isax-arrow-right-1 ms-1"></i></a>
						   <span class="fs-14 d-none d-md-flex">Revolutionize Learning with a Modern LMS</span>
					   </div>						
				   </div>
				   <div class="blog-widget">
					   <h5 class="fs-18 mb-3">Latest Tags</h5>
					   <div class="latest-tags">
						   <ul class="tags d-flex flex-wrap">
							   <li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">HTML</a></li>
							   <li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Web Design</a></li>
							   <li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Programming</a></li>
						   </ul>
					   </div>
				   </div>

				   <div class="blog-reviews mb-3">
						   <h5 class="mb-3 fs-18">Reviews</h5>
						   <div class="review-item shadow-none mb-3">
								   <div class="review-info">
									   <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
										   <div class="d-flex align-items-center mb-2">
											   <span class="avatar avatar-lg me-2 flex-shrink-0">
												   <a href="{{url('student-details')}}"><img src="{{URL::asset('build/img/user/user-05.jpg')}}" class="rounded-circle" alt="img"></a>
											   </span>
											   <div>
												<h5 class="fs-16 fw-medium"><a href="{{url('student-details')}}">Adrian Hendriques</a></h5>
												   <div class="d-flex align-items-center flex-wrap date-info">
													   <span class="mb-0 fs-14">2 days ago</span>
												   </div>
											   </div>
										   </div>
										   <a href="javascript:void(0);" class="btn btn-md d-inline-flex align-items-center me-2 mb-2 text-gray-5"><i class="isax isax-repeat me-1"></i>Reply</a>
									   </div>
									   <p class="mb-2 mt-1">I highly recommend to anyone looking to learn . Their passion for the subject and dedication to students make them an outstanding instructor. I would definitely take another course with them in the future.</p>
									   <div class="d-inline-flex align-items-center">
										   <a href="javascript:void(0);" class="text-gray-5 d-inline-flex align-items-center me-3 fs-14"><i class="isax isax-like-15 me-1"></i>21</a>
										   <a href="javascript:void(0);" class="text-gray-5 d-inline-flex align-items-center me-3 fs-14"><i class="isax isax-dislike5 me-1"></i>50</a>
										   <a href="javascript:void(0);" class="text-gray-5 d-inline-flex align-items-center me-3 fs-14"><i class="isax isax-heart5 text-danger me-1"></i>45</a>
									   </div>
								   </div>
						   </div>
						   <div class="review-item shadow-none mb-0">
								   <div class="review-info">
									   <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
										   <div class="d-flex align-items-center mb-2">
											   <span class="avatar avatar-lg me-2 flex-shrink-0">
												   <a href="{{url('student-details')}}"><img src="{{URL::asset('build/img/user/user-26.jpg')}}" class="rounded-circle" alt="img"></a>
											   </span>
											   <div>
												   <h5 class="fs-16 fw-medium"><a href="{{url('student-details')}}">Adrian Hendriques</a></h5>
												   <div class="d-flex align-items-center flex-wrap date-info">
													   <span class="mb-0 fs-14">2 days ago</span>
												   </div>
											   </div>
										   </div>
										   <a href="javascript:void(0);" class="btn btn-md d-inline-flex align-items-center mb-2 text-gray-5"><i class="isax isax-repeat me-1"></i>Reply</a>	
									   </div>
									   <p class="mb-2 mt-1">While I learned a lot from this course, I feel like I could have used more practical examples or exercises that apply the theory. The course focused a lot on lecture-based content and could have incorporated more real-world scenarios.</p>
									   <div class="d-inline-flex align-items-center">
										   <a href="javascript:void(0);" class="text-gray-5 d-inline-flex align-items-center me-3 fs-14"><i class="isax isax-like-15 me-1"></i>21</a>
										   <a href="javascript:void(0);" class="text-gray-5 d-inline-flex align-items-center me-3 fs-14"><i class="isax isax-dislike5 me-1"></i>50</a>
										   <a href="javascript:void(0);" class="text-gray-5 d-inline-flex align-items-center me-3 fs-14"><i class="isax isax-heart5 text-danger me-1"></i>45</a>
									   </div>
								   <div class="review-info border-0 bg-light-900 reply mt-4 p-3 rounded-2">
									   <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
										   <div class="d-flex align-items-center mb-2">
											   <span class="avatar avatar-lg me-2 flex-shrink-0">
												   <a href="{{url('instructor-details')}}"><img src="{{URL::asset('build/img/user/user-25.jpg')}}" class="rounded-circle" alt="img"></a>
											   </span>
											   <div>
												   <h6 class="fs-16 fw-medium"><a href="{{url('instructor-details')}}">Rolands Granger</a></h6>
												   <div class="d-flex align-items-center flex-wrap date-info">
													   <span class="mb-0 fs-14">2 days ago</span>
												   </div>
											   </div>
										   </div>
										   <a href="javascript:void(0);" class="btn btn-md d-inline-flex align-items-center me-2 mb-2 text-gray-5"><i class="isax isax-repeat me-1"></i>Reply</a>
									   </div>
									   <p class="mb-2">Thanks! Best luck for Future</p>
									   <div class="d-inline-flex align-items-center">
										   <a href="javascript:void(0);" class="text-gray-5 d-inline-flex align-items-center me-3 fs-14"><i class="isax isax-like-15 me-1"></i>21</a>
										   <a href="javascript:void(0);" class="text-gray-5 d-inline-flex align-items-center me-3 fs-14"><i class="isax isax-dislike5 me-1"></i>50</a>
										   <a href="javascript:void(0);" class="text-gray-5 d-inline-flex align-items-center me-3 fs-14"><i class="isax isax-heart5 text-danger me-1"></i>45</a>
									   </div>
								   </div>
							   </div>
						   </div>
				   </div>

				   <div class="comment">
				   <h5 class="fs-18 mb-3">Leave a Comment</h5>
				   <form>
					   <div class="row">
						   <div class="col-lg-6">
							   <div class="mb-3">
								   <label class="form-label mb-1">Name</label>
								   <input type="text" class="form-control">
							   </div>
						   </div>
						   <div class="col-lg-6">
							   <div class="mb-3">
								   <label class="form-label mb-1">Email</label>
								   <input type="email" class="form-control">
							   </div>
						   </div>
						   <div class="col-lg-12">
							   <div class="mb-3">
							   <label class="form-label mb-1">Comment</label>
							   <textarea class="form-control"></textarea>
						   </div>
						   </div>
						   <div class="col-lg-12">
							   <div class="mb-3">
								   <label class="custom_check">
									   <input type="checkbox" name="select_specialist">
									   <span class="checkmark"></span>Save my name & email in this browser for the next time I comment
								   </label>
							   </div>
						   </div>
						   <div class="col-lg-12">
							   <button class="btn btn-secondary">Submit</button>
						   </div>
					   </div>
				   </form>
				   </div>

			   </div>
            	<!-- Blog Sidebar -->
						<div class="col-lg-4 sidebar-left mt-4 mt-lg-0 theiaStickySidebar">

							<!-- Search -->
							<div class="search-widget blog-search blog-widget">
								<div>
									<h5 class="mb-3 fs-18">Search</h5>
									<form class="search-form">
										<div class="position-relative">
											<input type="text" placeholder="Search..." class="form-control">
											<button type="submit" class="search-btn"><i class="isax isax-search-normal-1"></i></button>
										</div>
									</form>
								</div>
							</div>
							<!-- /Search -->

							<!-- Categories -->
							<div class="blog-widget">
								<h5 class="fs-18 mb-3">Categories</h5>
								<div class="categories-list">
									<h6><a href="javascript:void(0);"><i class="isax isax-arrow-right-3 fs-14 text-secondary fw-bold"></i> Business<span class="float-end">04</span> </a></h6>
									<h6><a href="javascript:void(0);"><i class="isax isax-arrow-right-3 fs-14 text-secondary fw-bold"></i> Education<span class="float-end">03</span> </a></h6>
									<h6><a href="javascript:void(0);"><i class="isax isax-arrow-right-3 fs-14 text-secondary fw-bold"></i> Graphics Design<span class="float-end">14</span> </a></h6>
									<h6><a href="javascript:void(0);"><i class="isax isax-arrow-right-3 fs-14 text-secondary fw-bold"></i> Programming<span class="float-end">12</span> </a></h6>
									<h6><a href="javascript:void(0);"><i class="isax isax-arrow-right-3 fs-14 text-secondary fw-bold"></i> Web Design<span class="float-end">15</span></a></h6>
								</div>
							</div>
							<!-- /Categories -->

							<!-- Latest Posts -->
							<div class="blog-widget">
								<h5 class="fs-18 mb-3">Recent Blogs</h5>
								<ul class="recent-blog-list">
									<li>
										<div class="post-thumb">
											<a href="{{url('blog-details')}}">
												<img class="img-fluid" src="{{URL::asset('build/img/blog/recent-blog-1.jpg')}}" alt="Img">
											</a>
										</div>
										<div class="post-info">
											<h6 class="text-truncate line-clamb-2">
												<a href="{{url('blog-details')}}">Learn Webs Applications Development from Experts</a>
											</h6>
											<p><img class="img-fluid me-1" src="{{URL::asset('build/img/icons/calendar2.svg')}}" alt="Img">20 Apr 2024</p>
										</div>
									</li>
									<li>
										<div class="post-thumb">
											<a href="{{url('blog-details')}}">
												<img class="img-fluid" src="{{URL::asset('build/img/blog/recent-blog-2.jpg')}}" alt="Img">
											</a>
										</div>
										<div class="post-info">
											<h6 class="text-truncate line-clamb-2">
												<a href="{{url('blog-details')}}">Expand Your Career Opportunities With Python</a>
											</h6>
											<p><img class="img-fluid me-1" src="{{URL::asset('build/img/icons/calendar2.svg')}}" alt="Img">16 Apr 2024</p>
										</div>
									</li>
									<li class="mb-0">
										<div class="post-thumb">
											<a href="{{url('blog-details')}}">
												<img class="img-fluid" src="{{URL::asset('build/img/blog/recent-blog-3.jpg')}}" alt="Img">
											</a>
										</div>
										<div class="post-info">
											<h6 class="text-truncate line-clamb-2">
												<a href="{{url('blog-details')}}">Learn Webs Applications Development from Experts</a>
											</h6>
											<p><img class="img-fluid me-1" src="{{URL::asset('build/img/icons/calendar2.svg')}}" alt="Img">12 Apr 2024</p>
										</div>
									</li>
								</ul>
							</div>
							<!-- /Latest Posts -->


							<!-- Tags -->
							<div class="blog-widget mb-0">
								<h5 class="fs-18 mb-3">Latest Tags</h5>
								<div class="card-body">
									<ul class="latest-tags">
										<li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">HTML</a></li>
										<li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Javascript</a></li>
										<li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Benefits</a></li>
										<li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Web Design</a></li>
										<li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Programming</a></li>
										<li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Career Growth</a></li>
										<li><a href="javascript:void(0);" class="tag rounded-1 p-2 fs-10 fw-medium d-flex">Guidelines</a></li>
									</ul>
								</div>
							</div>
							<!-- /Tags -->
							
						</div>
						<!-- /Blog Sidebar -->
              </div>
            </div>
        </div>
        <!-- blog -->

@endsection            