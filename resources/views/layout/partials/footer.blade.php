    
    @if(!Route::is(['index','index-3','index-rtl']))
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-bg">
            <img src="{{URL::asset('build/img/bg/footer-bg-01.png')}}" class="footer-bg-1" alt="">
            <img src="{{URL::asset('build/img/bg/footer-bg-02.png')}}" class="footer-bg-2" alt="">
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row row-gap-4">
                    <div class="col-lg-4">
                        <div class="footer-about">
                            <div class="footer-logo">
                                <img src="{{URL::asset('build/img/logo.svg')}}" alt="">
                            </div>
                            <p>Platform designed to help organizations, educators, and learners manage, deliver, and track learning and training activities.</p>
                            <div class="d-flex align-items-center">
                                <a href="#" class="me-2"><img src="{{URL::asset('build/img/icon/appstore.svg')}}" alt=""></a>
                                <a href="#"><img src="{{URL::asset('build/img/icon/googleplay.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row row-gap-4">
                            <div class="col-lg-3">
                                <div class="footer-widget footer-menu">
                                    <h5 class="footer-title">For Instructor</h5>
                                    <ul>
                                        <li><a href="{{url('course-grid')}}">Search Mentors</a></li>
                                        <li><a href="{{url('login')}}">Login</a></li>
                                        <li><a href="{{url('register')}}">Register</a></li>
                                        <li><a href="{{url('course-list')}}">Booking</a></li>
                                        <li><a href="{{url('student-dashboard')}}">Students Dashboard</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="footer-widget footer-menu">
                                    <h5 class="footer-title">For Student</h5>
                                    <ul>
                                        <li><a href="javascript:void(0);">Appointments</a></li>
                                        <li><a href="{{url('instructor-message')}}">Chat</a></li>
                                        <li><a href="{{url('login')}}">Login</a></li>
                                        <li><a href="{{url('register')}}">Register</a></li>
                                        <li><a href="{{url('instructor-dashboard')}}">Instructor Dashboard</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="footer-widget footer-contact">
                                    <h5 class="footer-title">Newsletter</h5>
                                    <div class="subscribe-input">
                                        <form action="javascript:void(0);">
                                            <input type="email" class="form-control" placeholder="Enter your Email Address">
                                            <button type="submit" class="btn btn-primary btn-sm inline-flex align-items-center"><i class="isax isax-send-2 me-1"></i>Subscribe</button>
                                        </form>
                                    </div>
                                    <div class="footer-contact-info">
                                        <div class="footer-address d-flex align-items-center">
                                            <img src="{{URL::asset('build/img/icon/icon-20.svg')}}" alt="Img" class="img-fluid me-2">
                                            <p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
                                        </div>
                                        <div class="footer-address d-flex align-items-center">
                                            <img src="{{URL::asset('build/img/icon/icon-19.svg')}}" alt="Img" class="img-fluid me-2">
                                            <p>dreamslms@example.com</p>
                                        </div>
                                        <div class="footer-address d-flex align-items-center">
                                            <img src="{{URL::asset('build/img/icon/icon-21.svg')}}" alt="Img" class="img-fluid me-2">
                                            <p>+19 123-456-7890</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row row-gap-2">
                    <div class="col-md-6">
                        <div class="text-center text-md-start">
                            <p class="text-white">Copyright &copy; 2025 DreamsLMS. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <ul class="d-flex align-items-center justify-content-center justify-content-md-end footer-link">
                                <li><a href="{{url('terms-and-conditions')}}">Terms & Conditions</a></li>
                                <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
    @endif

    @if(Route::is(['index','index-rtl']))
    <!-- Footer -->
			<footer class="footer footer-one">
				<div class="footer-top">
					<div class="container">
						<div class="row row-gap-4">
							<div class="col-lg-4">
								<div class="footer-about">
									<div class="footer-logo">
										<img src="{{URL::asset('build/img/logo-white.svg')}}" alt="">
									</div>
									<p>Platform designed to help organizations, educators, and learners manage, deliver, and track learning and training activities.</p>
									<div class="d-flex align-items-center">
										<a href="#" class="me-2"><img src="{{URL::asset('build/img/icon/appstore.svg')}}" alt=""></a>
										<a href="#"><img src="{{URL::asset('build/img/icon/googleplay.svg')}}" alt=""></a>
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="row row-gap-4">
									<div class="col-lg-4 col-md-4">
										<div class="footer-widget footer-menu">
											<h5 class="footer-title">Support</h5>
											<ul>
												<li><a href="{{url('course-grid')}}">Education</a></li>
												<li><a href="{{url('add-course')}}">Enroll Course</a></li>
												<li><a href="javscript:void(0);">Orders</a></li>
												<li><a href="{{url('pricing-plan')}}">Payments</a></li>
												<li><a href="{{url('blog-grid')}}">Blogs</a></li>
											</ul>
										</div>
									</div>
									<div class="col-lg-4 col-md-4">
										<div class="footer-widget footer-menu">
											<h5 class="footer-title">About</h5>
											<ul>
												<li><a href="{{url('course-category')}}">Categories</a></li>
												<li><a href="{{url('course-list')}}">Courses</a></li>
												<li><a href="{{url('about-us')}}">About Us</a></li>
												<li><a href="{{url('faq')}}">Faq</a></li>
												<li><a href="{{url('contact-us')}}">Contacts</a></li>
											</ul>
										</div>
									</div>
									<div class="col-lg-4 col-md-4">
										<div class="footer-widget footer-menu">
											<h5 class="footer-title">Useful Links</h5>
											<ul>
												<li><a href="javascript:void(0);">Our values</a></li>
												<li><a href="javascript:void(0);">Our advisory board</a></li>
												<li><a href="javascript:void(0);">Our partners</a></li>
												<li><a href="javascript:void(0);">Become a partner</a></li>
												<li><a href="javascript:void(0);">Work at Future Learn</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>							
							<div class="col-lg-3">
								<div class="footer-widget footer-contact">
									<h5 class="footer-title">Subscribe Newsletter</h5>
									<div class="footer-newsletter">
										<p>Sign up to get updates & news.</p>							
										<form action="javascript:void(0);">
											<div class="subscribe-form">
												<span>
													<i class="isax isax-message-text"></i>
												</span>
												<input type="email" class="form-control" placeholder="Email Address">
											</div>
											<button type="submit" class="btn btn-secondary btn-xl w-100">Subscribe</button>		
										</form>	
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="row row-gap-2">
							<div class="col-lg-5">
								<div class="text-center text-lg-start">									
									<p>Copyright 2025 © <span class="text-secondary">DreamsLMS</span>. All right reserved.</p>
								</div>
							</div>
							<div class="col-lg-4">
								<ul class="d-flex align-items-center justify-content-center footer-link">
									<li><a href="{{url('terms-and-conditions')}}">Terms & Conditions</a></li>
									<li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
								</ul>
							</div>
							<div class="col-lg-3">
								<div class="social-icon">
									<a href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
									<a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
									<a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a>
									<a href="javascript:void(0);"><i class="fa-brands fa-youtube"></i></a>
									<a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
   @endif

   @if(Route::is(['index-3']))
<!-- Footer -->
<footer class="footer footer-three">
				
    <!-- Footer Top -->
    <div class="footer-top aos" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-between row-gap-4">
                <div class="col-lg-4 col-md-12">
                
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <img src="{{URL::asset('build/img/logo-white.svg')}}" alt="logo">
                        </div>
                        <div class="footer-about-content">
                            <p>UMG atiende, esencialmente, a la formación ética, científica, profesional y técnica de los estudiantes, mediante el ejercicio integrado de la docencia.</p>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                    
                </div>

                <div class="col-lg-8">
                    <div class="row row-gap-4">
                
                        <div class="col-lg-3 col-md-6">
                        
                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h6 class="footer-title">Support</h6>
                                <ul>
                                    <li><a href="{{url('course-grid')}}">Education</a></li>
                                    <li><a href="{{url('add-course')}}">Enroll a Course</a></li>
                                    <li><a href="{{url('register')}}">Orders</a></li>
                                    <li><a href="{{url('pricing-plan')}}">Payments</a></li>
                                    <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->
                            
                        </div>
                        
                        <div class="col-lg-3 col-md-6">
                        
                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h6 class="footer-title">About</h6>
                                <ul>
                                    <li><a href="{{url('course-category')}}">Categories</a></li>
                                    <li><a href="{{url('course-category')}}">Services</a></li>
                                    <li><a href="{{url('about-us')}}">About Us</a></li>
                                    <li><a href="{{url('faq')}}">FAQ</a></li>
                                    <li><a href="{{url('blog-3-grid')}}">Blog</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->
                            
                        </div>

                        <div class="col-lg-3 col-md-6">
                        
                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h6 class="footer-title">Useful Links</h6>
                                <ul>
                                    <li><a href="javascript:void(0);">Our values</a></li>
                                    <li><a href="javascript:void(0);">Advisory board</a></li>
                                    <li><a href="javascript:void(0);">Our partners</a></li>
                                    <li><a href="javascript:void(0);">Become a partner</a></li>
                                    <li><a href="javascript:void(0);">Future Learn</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->
                            
                        </div>
                
                        <div class="col-lg-3 col-md-6">
                        
                            <!-- Footer Widget -->
                            <div class="footer-widget footer-contact">
                                <h6 class="footer-title">Contact Info</h6>
                                <ul>
                                    <li>
                                        <div class="contact-infos">
                                            <span>Phone Number</span>
                                            <p>2411-1800</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-infos">
                                            <span>Mail Address</span>
                                            <p>info@umg.edu.gt</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-infos">
                                            <span>Address</span>
                                            <p> 3ave. 9-00 zona 2, Guatemala City, Guatemala, 01002 </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->
                            
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- /Footer Top -->
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
        
            <!-- Copyright -->
            <div class="row row-gap-3">
                <div class="col-md-4">
                    <div class="copyright-text">
                        <p>Copyright 2025 © <a href="javascript:void(0);">DreamsLMS</a>. All right reserved.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <a href="https://www.facebook.com/u.marianogalvez" target="_blank">
                            <img src="{{URL::asset('build/img/icons/fb.svg')}}" alt="facebook" class="img-fluid">
                        </a>
                        <a href="https://www.instagram.com/marianogalvez/" target="_blank">
                            <img src="{{URL::asset('build/img/icons/instagram.svg')}}" alt="facebook" class="img-fluid">
                        </a>
                        <a href="https://www.linkedin.com/school/universidad-mariano-g-lvez-de-guatemala/"
                            target="_blank">
                            <img src="{{URL::asset('build/img/icons/linkedin.svg')}}" alt="facebook" class="img-fluid">
                        </a>
                        <a href="https://x.com/marianogalvez" target="_blank">
                            <img src="{{URL::asset('build/img/icons/x.svg')}}" alt="facebook" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="privacy-link">
                        <a href="{{url('terms-and-conditions')}}" class="mb-0">Terms & Policy</a>
                        <a href="{{url('privacy-policy')}}">Privacy Policy</a>
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
            
        </div>
    </div>
    <!-- /Footer Bottom -->
    
</footer>
<!-- /Footer -->
   @endif