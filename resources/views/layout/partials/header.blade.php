
@if(Route::is(['index','index-2','index-5','index-rtl']))
    <!-- Header -->
    @if(Route::is(['index-2']))
     <!-- Header Topbar-->
     <div class="header-topbar text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                        <p class="d-flex align-items-center fw-medium fs-14 mb-2 me-3"><i class="isax isax-location5 me-2"></i>1442 Crosswind Drive Madisonville</p>
                        <p class="d-flex align-items-center fw-medium fs-14 mb-2"><i class="isax isax-call-calling5 me-2"></i>+1 45887 77874</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                        <div class="dropdown flag-dropdown mb-2 me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown mb-2 me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                USD
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                            </ul>
                        </div>
                        <ul class="social-icon d-flex align-items-center mb-2">
                            <li class="me-2">
                                <a href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li class="me-2">
                                <a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="me-2">
                                <a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a>
                            </li>
                            <li class="me-2">
                                <a href="javascript:void(0);"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    
    <!-- /Header Topbar-->
    @if(!Route::is(['index-2','index-5']))
    <header class="header-one">
    @endif
        @if(Route::is(['index-2']))
        <header class="header-two"> 
        @endif
        @if(Route::is(['index-5']))
        <header class="header-two header-five position-fixed">
        @endif
       
        <div class="container">
            <div class="header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                     
                        <span class="bar-icon">
                            <i class="isax isax-menu"></i>
                        </span>
                      
                       
                    </a>
                    <div class="navbar-logo">
                        @if(!Route::is(['index-2','index-5']))
                        <a class="logo-white header-logo" href="{{url('index-3')}}">
    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
</a>
<a class="logo-dark header-logo" href="{{url('index-3')}}">
    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
</a>

                        @endif
                        @if(Route::is(['index-2','index-5']))
                       <a class="logo-white header-logo" href="{{url('index-3')}}">
    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
</a>
<a class="logo-dark header-logo" href="{{url('index-3')}}">
    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
</a>

                        @endif
                    </div>
                </div>
                <div class="main-menu-wrapper">								
                    <div class="menu-header">
                        <a href="{{url('index')}}" class="menu-logo">
                            <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        
                        <li class="has-submenu {{ Request::is('course-grid','course-list','course-resume','course-watch','cart','checkout','add-course',
                        'course-category','course-category-2','course-category-3','course-details','course-details-2') ? 'active' : '' }}">
                            <a href="#">PENSUM CARRERA<i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu {{ Request::is('course-grid','course-list') ? 'active' : '' }}">
                                    <a href="javascript:void(0);">CARRERAS</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('course-grid') ? 'active' : '' }}"><a href="{{url('course-grid')}}">Course Grid</a></li>
                                        <li class="{{ Request::is('course-list') ? 'active' : '' }}"><a href="{{url('course-list')}}">INGENIERIA</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu {{ Request::is('course-category','course-category-2','course-category-3') ? 'active' : '' }}">
                                    <a href="javascript:void(0);">Course Category</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('course-category') ? 'active' : '' }}" ><a href="{{url('course-category')}}">Course Category</a></li>
                                        <li class="{{ Request::is('course-category-2') ? 'active' : '' }}"><a href="{{url('course-category-2')}}">Course Category 2</a></li>
                                        <li class="{{ Request::is('course-category-3') ? 'active' : '' }}"><a href="{{url('course-category-3')}}">Course Category 3</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu {{ Request::is('course-details','course-details-2') ? 'active' : '' }}">
                                    <a href="javascript:void(0);">Course Details</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('course-details') ? 'active' : '' }}"><a href="{{url('course-details')}}">Course Details</a></li>
                                        <li class="{{ Request::is('course-details-2') ? 'active' : '' }}"><a href="{{url('course-details-2')}}">Course Details 2</a></li>
                                    </ul>
                                </li>										
                                <li class="{{ Request::is('course-resume') ? 'active' : '' }}"><a href="{{url('course-resume')}}">Course Resume</a></li>
                                <li class="{{ Request::is('course-watch') ? 'active' : '' }}"><a href="{{url('course-watch')}}">Course Watch</a></li>
                                <li class="{{ Request::is('cart') ? 'active' : '' }}"><a href="{{url('cart')}}">Course Cart</a></li>
                                <li class="{{ Request::is('checkout') ? 'active' : '' }}"><a href="{{url('checkout')}}">Course Checkout</a></li>
                                <li class="{{ Request::is('add-course') ? 'active' : '' }}"><a href="{{url('add-course')}}">Add New Course</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu {{ Request::is('instructor-dashboard','instructor-dashboard','instructor-profile','instructor-course',
                        'instructor-announcements','instructor-assignment','students','student-list','student-details',
                        'instructor-quiz','instructor-quiz-results','instructor-certificate','instructor-earnings','instructor-payout','instructor-statements','instructor-tickets','instructor-settings') ? 'active' : '' }}" >
                            <a href="javascript:void(0);">Dashboard <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu {{ Request::is('instructor-dashboard','instructor-profile','instructor-course','instructor-announcements','instructor-assignment') ? 'active' : '' }}">
                                    <a href="javascript:void(0);">Instructor Dashboard</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('instructor-dashboard') ? 'active' : '' }}"><a href="{{url('instructor-dashboard')}}">Dashboard</a></li>
                                        <li class="{{ Request::is('instructor-profile') ? 'active' : '' }}"><a href="{{url('instructor-profile')}}">My Profile</a></li>
                                        <li class="{{ Request::is('instructor-course') ? 'active' : '' }}"><a href="{{url('instructor-course')}}">Course</a></li>
                                        <li class="{{ Request::is('instructor-announcements') ? 'active' : '' }}"><a href="{{url('instructor-announcements')}}">Announcements</a></li>
                                        <li class="{{ Request::is('instructor-assignment') ? 'active' : '' }}"><a href="{{url('instructor-assignment')}}">Assignments</a></li>
                                        <li class="has-submenu {{ Request::is('students','student-list','student-details') ? 'active' : '' }}">
                                            <a href="javascript:void(0);">Student</a>
                                            <ul class="submenu">
                                                <li class="{{ Request::is('students') ? 'active' : '' }}"><a href="{{url('students')}}">Student Grid</a></li>
                                                <li class="{{ Request::is('student-list') ? 'active' : '' }}"><a href="{{url('student-list')}}">Student List</a></li>
                                                <li class="{{ Request::is('student-details') ? 'active' : '' }}"><a href="{{url('student-details')}}">Student Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ Request::is('instructor-quiz') ? 'active' : '' }}"><a href="{{url('instructor-quiz')}}">Quiz</a></li>
                                        <li class="{{ Request::is('instructor-quiz-results') ? 'active' : '' }}"><a href="{{url('instructor-quiz-results')}}">Quiz Results</a></li>
                                        <li class="{{ Request::is('instructor-certificate') ? 'active' : '' }}"><a href="{{url('instructor-certificate')}}">Certificates</a></li>
                                        <li class="{{ Request::is('instructor-earnings') ? 'active' : '' }}"><a href="{{url('instructor-earnings')}}">Earning</a></li>
                                        <li class="{{ Request::is('instructor-payout') ? 'active' : '' }}"><a href="{{url('instructor-payout')}}">Payout</a></li>
                                        <li class="{{ Request::is('instructor-statements') ? 'active' : '' }}"><a href="{{url('instructor-statements')}}">Statement</a></li>
                                        <li class="{{ Request::is('instructor-tickets') ? 'active' : '' }}"><a href="{{url('instructor-tickets')}}">Support Tickets</a></li>
                                        <li class="{{ Request::is('instructor-settings') ? 'active' : '' }}"><a href="{{url('instructor-settings')}}">Settings</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu {{ Request::is('student-dashboard','student-profile','student-CARRERAS','student-certificates','student-wishlist','student-reviews','student-quiz','student-order-history','student-referral'
                                ,'student-messages','student-tickets','student-settings') ? 'active' : '' }}">
                                    <a href="javascript:void(0);">Student Dashboard</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('student-dashboard') ? 'active' : '' }}"><a href="{{url('student-dashboard')}}">Student Dashboard</a></li>
                                        <li class="{{ Request::is('student-profile') ? 'active' : '' }}"><a href="{{url('student-profile')}}">My Profile</a></li>
                                        <li class="{{ Request::is('student-CARRERAS') ? 'active' : '' }}"><a href="{{url('student-CARRERAS')}}">Enrolled CARRERAS</a></li>
                                        <li class="{{ Request::is('student-certificates') ? 'active' : '' }}"><a href="{{url('student-certificates')}}">My Certificates</a></li>
                                        <li class="{{ Request::is('student-wishlist') ? 'active' : '' }}"><a href="{{url('student-wishlist')}}">Wishlist</a></li>
                                        <li class="{{ Request::is('student-reviews') ? 'active' : '' }}"><a href="{{url('student-reviews')}}">Reviews</a></li>
                                        <li class="{{ Request::is('student-quiz') ? 'active' : '' }}"><a href="{{url('student-quiz')}}">My Quiz Attempts</a></li>
                                        <li class="{{ Request::is('student-order-history') ? 'active' : '' }}"><a href="{{url('student-order-history')}}">Order History</a></li>
                                        <li class="{{ Request::is('student-referral') ? 'active' : '' }}"><a href="{{url('student-referral')}}">Referrals</a></li>
                                        <li class="{{ Request::is('student-messages') ? 'active' : '' }}"><a href="{{url('student-messages')}}">Messages</a></li>
                                        <li class="{{ Request::is('student-tickets') ? 'active' : '' }}"><a href="{{url('student-tickets')}}">Support Ticket</a></li>
                                        <li class="{{ Request::is('student-settings') ? 'active' : '' }}"><a href="{{url('student-settings')}}">Settings</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu {{ Request::is('instructor-grid','instructor-list','instructor-details','about-us','contact-us','notifications',
                        'become-an-instructor','testimonials','about-us','contact-us','notifications','become-an-instructor','testimonials',
                        'login','register','forgot-password','reset-password','set-password','otp','lock-screen','error-404',
                        'error-500','pricing-plan','faq','coming-soon','under-construction','terms-and-conditions','privacy-policy','index-rtl') ? 'active' : '' }}">
                            <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu {{ Request::is('instructor-grid','instructor-list','instructor-details') ? 'active' : '' }}">
                                    <a href="#">Instructors</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('instructor-grid') ? 'active' : '' }}"><a href="{{url('instructor-grid')}}">Instructor Grid</a></li>
                                        <li class="{{ Request::is('instructor-list') ? 'active' : '' }}"><a href="{{url('instructor-list')}}">Instructor List</a></li>
                                        <li class="{{ Request::is('instructor-details') ? 'active' : '' }}"><a href="{{url('instructor-details')}}">Instructor Details</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a href="{{url('about-us')}}">About Us</a></li>
                                <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact us</a></li>
                                <li class="{{ Request::is('notifications') ? 'active' : '' }}"><a href="{{url('notifications')}}">Notifications</a></li>
                                <li class="{{ Request::is('become-an-instructor') ? 'active' : '' }}"><a href="{{url('become-an-instructor')}}">Become an Instructor</a></li>
                                <li class="{{ Request::is('testimonials') ? 'active' : '' }}"><a href="{{url('testimonials')}}">Testimonials</a></li>
                                <li class="has-submenu {{ Request::is('login','register','forgot-password','reset-password','set-password','otp','lock-screen') ? 'active' : '' }}">
                                    <a href="#">Authentication</a>
                                    <ul class="submenu {{ Request::is('login','register','forgot-password','reset-password','set-password','otp','lock-screen') ? 'active' : '' }}">
                                        <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{url('login')}}">Login</a></li>
                                        <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{url('register')}}">Register</a></li>
                                        <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                        <li class="{{ Request::is('reset-password') ? 'active' : '' }}"><a href="{{url('reset-password')}}">Reset Password</a></li>
                                        <li class="{{ Request::is('set-password') ? 'active' : '' }}"><a href="{{url('set-password')}}">Set Password</a></li>
                                        <li class="{{ Request::is('otp') ? 'active' : '' }}"><a href="{{url('otp')}}">OTP</a></li>
                                        <li class="{{ Request::is('lock-screen') ? 'active' : '' }}"><a href="{{url('lock-screen')}}">Lock Screen</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu {{ Request::is('error-404','error-500') ? 'active' : '' }}">
                                    <a href="#">Error</a>
                                    <ul class="submenu {{ Request::is('error-404','error-500') ? 'active' : '' }}">
                                        <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a href="{{url('error-404')}}">404 Error</a></li>
                                        <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a href="{{url('error-500')}}">500 Error</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('pricing-plan') ? 'active' : '' }}"><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                                <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="{{url('faq')}}">FAQ</a></li>
                                <li class="{{ Request::is('coming-soon') ? 'active' : '' }}"><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                                <li class="{{ Request::is('under-construction') ? 'active' : '' }}"><a href="{{url('under-construction')}}">Under Construction</a></li>
                                <li class="{{ Request::is('terms-and-conditions') ? 'active' : '' }}"><a href="{{url('terms-and-conditions')}}">Terms & Conditions</a></li>
                                <li class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                <li class="{{ Request::is('index-rtl') ? 'active' : '' }}"><a href="{{url('index-rtl')}}">RTL</a></li>
                            </ul> 
                        </li>	
                        <li class="has-submenu {{ Request::is('blog-grid','blog-2-grid','blog-3-grid','blog-carousal','blog-masonry','blog-left-sidebar','blog-right-sidebar','blog-details','blog-details-left-sidebar','blog-details-right-sidebar') ? 'active' : '' }}">
                            <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu  {{ Request::is('blog-grid','blog-2-grid','blog-3-grid','blog-carousal','blog-masonry','blog-left-sidebar','blog-right-sidebar') ? 'active' : '' }}">
                                    <a href="#">Blog Layouts</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('blog-grid') ? 'active' : '' }}"><a href="{{url('blog-grid')}}">Blog 1 Grid</a></li>
                                        <li class="{{ Request::is('blog-2-grid') ? 'active' : '' }}"><a href="{{url('blog-2-grid')}}">Blog 2 Grid</a></li>
                                        <li class="{{ Request::is('blog-3-grid') ? 'active' : '' }}"><a href="{{url('blog-3-grid')}}">Blog 3 Grid</a></li>
                                        <li class="{{ Request::is('blog-carousal') ? 'active' : '' }}"><a href="{{url('blog-carousal')}}">Blog Carousal</a></li>
                                        <li class="{{ Request::is('blog-masonry') ? 'active' : '' }}"><a href="{{url('blog-masonry')}}">Blog Mansory</a></li>
                                        <li class="{{ Request::is('blog-left-sidebar') ? 'active' : '' }}"><a href="{{url('blog-left-sidebar')}}">Blog Left Sidebar</a></li>
                                        <li class="{{ Request::is('blog-right-sidebar') ? 'active' : '' }}"><a href="{{url('blog-right-sidebar')}}">Blog Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu {{ Request::is('blog-details','blog-details-left-sidebar','blog-details-right-sidebar') ? 'active' : '' }}">
                                    <a href="#">Blog Details</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('blog-details') ? 'active' : '' }}"><a href="{{url('blog-details')}}">Blog Details</a></li>
                                        <li class="{{ Request::is('blog-details-left-sidebar') ? 'active' : '' }}"><a href="{{url('blog-details-left-sidebar')}}">Blog Details Left Sidebar</a></li>
                                        <li class="{{ Request::is('blog-details-right-sidebar') ? 'active' : '' }}"><a href="{{url('blog-details-right-sidebar')}}">Blog Details Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                   
                    <div class="menu-dropdown">
                        <div class="cart-item">
                            <h6>Cart & Wishlist</h6>                                
                            <div class="icon-btn">
                                <a href="{{url('cart')}}" class="position-relative">
                                    <i class="isax isax-shopping-cart5"></i>
                                    <span class="count-icon bg-success p-1 rounded-pill text-white fs-10 fw-bold">1</span>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown flag-dropdown mb-2">
                            <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown mb-2">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                USD
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                            </ul>
                        </div>
                        <div class="dropdown mb-2">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Light
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">Light</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">Dark</a></li>
                            </ul>
                        </div>
                    </div>
                 
                   
                    <div class="menu-login">
                        <a href="{{url('login')}}" class="btn btn-primary w-100 mb-2"><i class="isax isax-user me-2"></i>Sign In</a>
                        <a href="{{url('register')}}" class="btn btn-secondary w-100"><i class="isax isax-user-edit me-2"></i>Register</a>
                    </div>
                </div>
                <div class="header-btn d-flex align-items-center">							
                    <div class="dropdown flag-dropdown icon-btn">
                        <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" alt="flag">
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown icon-btn">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="isax isax-dollar-circle4"></i>
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                        </ul>
                    </div>
                    <div class="icon-btn">
                        <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle activate">
                            <i class="isax isax-sun-15"></i>
                        </a>
                        <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                            <i class="isax isax-moon"></i>
                        </a>
                    </div>
                    <div class="icon-btn">
                        <a href="{{url('cart')}}" class="position-relative">
                            <i class="isax isax-shopping-cart5"></i>
                            <span class="count-icon bg-success p-1 rounded-pill text-white fs-10 fw-bold">1</span>
                        </a>
                    </div>
                    @if(!Route::is(['index-2','index-5']))
                    <a href="{{url('login')}}" class="btn btn-primary d-inline-flex align-items-center me-2">
                        Sign In
                    </a>
                    <a href="{{url('register')}}" class="btn btn-secondary me-0">
                        Register
                    </a>
                    @endif
                  
                    @if(Route::is(['index-5']))
                    <a href="{{url('login')}}" class="btn btn-primary d-inline-flex align-items-center me-2">
                        <i class="isax isax-user me-2"></i>Sign In
                    </a>
                    @endif
                    @if(Route::is(['index-2']))
                    <a href="{{url('login')}}" class="btn btn-light d-inline-flex align-items-center me-2">
                        <i class="isax isax-lock-circle me-2"></i>Sign In
                    </a>
                    @endif
                    @if(Route::is(['index-2','index-5']))
                    <a href="{{url('register')}}" class="btn btn-secondary me-0">
                        <i class="isax isax-user-edit me-2"></i>Register
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->

@endif

@if(Route::is(['index-6']))

<div class="INICIO-six">
    <!-- Header -->
    <header class="header-three">
        <div class="container">
            <div class="header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <div class="navbar-logo">
                        <a class="logo-white header-logo" href="{{url('index-3')}}">
    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
</a>
<a class="logo-dark header-logo" href="{{url('index-3')}}">
    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
</a>

                    </div>
                </div>
                <div class="main-menu-wrapper">								
                    <div class="menu-header">
                        <a class="logo-white header-logo" href="{{url('index-3')}}">
    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
</a>
<a class="logo-dark header-logo" href="{{url('index-3')}}">
    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
</a>

                    </div>
                    <ul class="main-nav">
                        
                        <li class="has-submenu">
                            <a href="#">PENSUM CARRERA<i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">CARRERAS</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('course-grid')}}">Course Grid</a></li>
                                        <li><a href="{{url('course-list')}}">INGENIERIA</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Course Category</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('course-category')}}">Course Category</a></li>
                                        <li><a href="{{url('course-category-2')}}">Course Category 2</a></li>
                                        <li><a href="{{url('course-category-3')}}">Course Category 3</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Course Details</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('course-details')}}">Course Details</a></li>
                                        <li><a href="{{url('course-details-2')}}">Course Details 2</a></li>
                                    </ul>
                                </li>										
                                <li><a href="{{url('course-resume')}}">Course Resume</a></li>
                                <li><a href="{{url('course-watch')}}">Course Watch</a></li>
                                <li><a href="{{url('cart')}}">Course Cart</a></li>
                                <li><a href="{{url('checkout')}}">Course Checkout</a></li>
                                <li><a href="{{url('add-course')}}">Add New Course</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Dashboard <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Instructor Dashboard</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('instructor-dashboard')}}">Dashboard</a></li>
                                        <li><a href="{{url('instructor-profile')}}">My Profile</a></li>
                                        <li><a href="{{url('instructor-course')}}">Course</a></li>
                                        <li><a href="{{url('instructor-announcements')}}">Announcements</a></li>
                                        <li><a href="{{url('instructor-assignment')}}">Assignments</a></li>
                                        <li class="has-submenu">
                                            <a href="javascript:void(0);">Student</a>
                                            <ul class="submenu">
                                                <li><a href="{{url('students')}}">Student Grid</a></li>
                                                <li><a href="{{url('student-list')}}">Student List</a></li>
                                                <li><a href="{{url('student-details')}}">Student Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('instructor-quiz')}}">Quiz</a></li>
                                        <li><a href="{{url('instructor-quiz-results')}}">Quiz Results</a></li>
                                        <li><a href="{{url('instructor-certificate')}}">Certificates</a></li>
                                        <li><a href="{{url('instructor-earnings')}}">Earning</a></li>
                                        <li><a href="{{url('instructor-payout')}}">Payout</a></li>
                                        <li><a href="{{url('instructor-statements')}}">Statement</a></li>
                                        <li><a href="{{url('instructor-tickets')}}">Support Tickets</a></li>
                                        <li><a href="{{url('instructor-settings')}}">Settings</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Student Dashboard</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('student-dashboard')}}">Student Dashboard</a></li>
                                        <li><a href="{{url('student-profile')}}">My Profile</a></li>
                                        <li><a href="{{url('student-CARRERAS')}}">Enrolled CARRERAS</a></li>
                                        <li><a href="{{url('student-certificates')}}">My Certificates</a></li>
                                        <li><a href="{{url('student-wishlist')}}">Wishlist</a></li>
                                        <li><a href="{{url('student-reviews')}}">Reviews</a></li>
                                        <li><a href="{{url('student-quiz')}}">My Quiz Attempts</a></li>
                                        <li><a href="{{url('student-order-history')}}">Order History</a></li>
                                        <li><a href="{{url('student-referral')}}">Referrals</a></li>
                                        <li><a href="{{url('student-messages')}}">Messages</a></li>
                                        <li><a href="{{url('student-tickets')}}">Support Ticket</a></li>
                                        <li><a href="{{url('student-settings')}}">Settings</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">Instructors</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('instructor-grid')}}">Instructor Grid</a></li>
                                        <li><a href="{{url('instructor-list')}}">Instructor List</a></li>
                                        <li><a href="{{url('instructor-details')}}">Instructor Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('about-us')}}">About Us</a></li>
                                <li><a href="{{url('contact-us')}}">Contact us</a></li>
                                <li><a href="{{url('notifications')}}">Notifications</a></li>
                                <li><a href="{{url('become-an-instructor')}}">Become an Instructor</a></li>
                                <li><a href="{{url('testimonials')}}">Testimonials</a></li>
                                <li class="has-submenu">
                                    <a href="#">Authentication</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('login')}}">Login</a></li>
                                        <li><a href="{{url('register')}}">Register</a></li>
                                        <li><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                        <li><a href="{{url('reset-password')}}">Reset Password</a></li>
                                        <li><a href="{{url('set-password')}}">Set Password</a></li>
                                        <li><a href="{{url('otp')}}">OTP</a></li>
                                        <li><a href="{{url('lock-screen')}}">Lock Screen</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Error</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('error-404')}}">404 Error</a></li>
                                        <li><a href="{{url('error-500')}}">500 Error</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                                <li><a href="{{url('faq')}}">FAQ</a></li>
                                <li><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                                <li><a href="{{url('under-construction')}}">Under Construction</a></li>
                                <li><a href="{{url('terms-and-conditions')}}">Terms & Conditions</a></li>
                                <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                <li><a href="{{url('index-rtl')}}">RTL</a></li>
                            </ul>
                        </li>	
                        <li class="has-submenu">
                            <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">Blog Layouts</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('blog-grid')}}">Blog 1 Grid</a></li>
                                        <li><a href="{{url('blog-2-grid')}}">Blog 2 Grid</a></li>
                                        <li><a href="{{url('blog-3-grid')}}">Blog 3 Grid</a></li>
                                        <li><a href="{{url('blog-carousal')}}">Blog Carousal</a></li>
                                        <li><a href="{{url('blog-masonry')}}">Blog Mansory</a></li>
                                        <li><a href="{{url('blog-left-sidebar')}}">Blog Left Sidebar</a></li>
                                        <li><a href="{{url('blog-right-sidebar')}}">Blog Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Blog Details</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('blog-details')}}">Blog Details</a></li>
                                        <li><a href="{{url('blog-details-left-sidebar')}}">Blog Details Left Sidebar</a></li>
                                        <li><a href="{{url('blog-details-right-sidebar')}}">Blog Details Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    
                    <div class="menu-dropdown">
                        <div class="cart-item">
                            <h6>Cart & Wishlist</h6>                                
                            <div class="icon-btn">
                                <a href="{{url('cart')}}" class="position-relative">
                                    <i class="isax isax-shopping-cart5"></i>
                                    <span class="count-icon bg-success p-1 rounded-pill text-white fs-10 fw-bold">1</span>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown flag-dropdown mb-2">
                            <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                        <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown mb-2">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                USD
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                            </ul>
                        </div>
                        <div class="dropdown mb-2">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Light
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">Light</a></li>
                                <li><a class="dropdown-item rounded" href="javascript:void(0);">Dark</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-login">
                        <a href="{{url('login')}}" class="btn btn-primary w-100 mb-2"><i class="isax isax-user me-2"></i>Sign In</a>
                        <a href="{{url('register')}}" class="btn btn-secondary w-100"><i class="isax isax-user-edit me-2"></i>Register</a>
                    </div>
                </div>
                <div class="header-btn d-flex align-items-center">
                    <div class="icon-btn me-2">
                        <a href="#" class="bg-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img class="rounded-pill" src="{{URL::asset('build/img/flags/us-flag.svg')}}" alt="flag"></a>
                        <ul class="dropdown-menu p-2 mt-2" style="">
                            <li class="mb-2">
                                <a class="dropdown-item w-100 rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item w-100 rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item w-100 rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="icon-btn me-2">
                        <a href="#" class="bg-white text-primary"><i class="isax isax-dollar-circle4"></i></a>
                    </div>
                    <div class="icon-btn me-2">
                        <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle activate bg-white">
                            <i class="isax isax-sun-15"></i>
                        </a>
                        <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle bg-white">
                            <i class="isax isax-moon"></i>
                        </a>
                    </div>
                    <div class="icon-btn me-3">
                        <a href="#" class="bg-white text-primary position-relative"><i class="isax isax-shopping-cart5"></i>
                        <span class="count-icon bg-success p-2 rounded-pill text-white fs-10 fw-bold">1</span>
                        </a>
                    </div>
                    <div>
                        <a href="{{url('login')}}" class="btn btn-primary d-inline-flex align-items-center me-2 px-3">
                        Sign In</a>
                    </div>
                    <a href="{{url('register')}}" class="btn btn-secondary me-0 px-3">
                        Register</a>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- INICIOBanner -->
    <section class="INICIO-slide-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 col-12">
                    <div class="INICIO-slide-five-face" data-aos="fade-down">

                        <!-- Banner Text -->
                        <div class="INICIO-slide-five-text">
                            <span class="text-warning d-inline-flex fw-semibold text-uppercase mb-3">The Leader in Online Learning</span>
                            <h1 class="text-white mb-4">Engaging & Accessible Online PENSUM CARRERAFor All</h1>
                            <p class="text-white fs-lg text-center text-md-start pb-2 pb-md-3 mb-4">Trusted by over 15K Users worldwide since 2022</p>
                        </div>
                        <!-- /Banner Text -->

                        <!-- banner Seach Category -->
                        <div class="banner-content-five">
                            <form class="form"  action="{{url('course-list')}}">
                                <div class="form-inner-five">
                                    <div class="input-group">
                                        <!-- Slect Category -->
                                        <span class="drop-detail-five">
                                            <select class="form-select select">
                                                <option>Category</option>
                                                <option>Angular</option>
                                                <option>Node Js</option>
                                                <option>React</option>
                                                <option>Python</option>
                                            </select>
                                        </span>	
                                        <!-- Slect Category -->
                                        
                                        <!-- Search -->
                                        <input type="email" class="form-control" placeholder="Search for CARRERAS, Instructors">
                                        <!-- Search -->

                                        <!-- Submit Button -->
                                        <button class="btn btn-primary sub-btn" type="submit"><span><i class="fa-solid fa-magnifying-glass"></i></span></button>
                                        <!-- Submit Button -->
                                         
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /banner Seach Category -->

                        <!-- Review and Experience -->
                        <div class="review-five-group">
                            <div class="review-user-five  d-flex align-items-center">
                                <ul class="review-users-list">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 1"><img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 2"><img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="leader 3"><img src="{{URL::asset('build/img/user/user-03.jpg')}}" alt="img"></a>
                                    </li>
                                </ul>
                                <div class="review-rating-five">
                                    <div class="rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <p>4.9 / 200 Review</p>	
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Review and Experience -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-12">
                    <div class="banner-six-img">								
                        <div class="row">
                            <div class="col-lg-6 align-self-end">
                                <div class="ban-img-1" data-aos="fade-up">
                                    <img src="./build/img/hero/hero-7.png" alt="img">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ban-img-2" data-aos="fade-down">
                                    <img class="ban-shape2" data-aos="fade-down" data-aos-delay="250" src="./build/img/shapes/dot-group.png" alt="img">
                                    <img class="ban-shape3" data-aos="fade-down" data-aos-delay="300" src="./build/img/banner/ban-shape-2.svg" alt="img">
                                    <img class="ban-shape4" data-aos="fade-down" data-aos-delay="350" src="./build/img/banner/ban-shape-3.svg" alt="img">
                                    <img src="./build/img/hero/hero-8.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vector-shapes-five d-none d-lg-flex">
                <img src="{{URL::asset('build/img/bg/banner-vector.svg')}}" alt="Img">
            </div>
        </div>
    </section>
    <!-- /INICIOBanner -->
</div>
@endif

@if(Route::is(['index-3','index-4']))
@if(Route::is(['index-3']))
<header class="header-three position-fixed">
    @endif
    @if(Route::is(['index-4']))
    <header class="header-four">
    @endif
    <div class="container">
        <div class="header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <div class="navbar-logo">
                    <a class="logo-white header-logo" href="{{ route('index-3') }}">
    <img src="{{ URL::asset('build/img/logo-white.svg') }}" class="logo" alt="Logo">
</a>
<a class="logo-dark header-logo" href="{{ route('index-3') }}">
    <img src="{{ URL::asset('build/img/logo-white.svg') }}" class="logo" alt="Logo">
</a>

                </div>
            </div>
            <div class="main-menu-wrapper">								
                <div class="menu-header">
                    <a class="logo-white header-logo" href="{{ route('index-3') }}">
    <img src="{{ URL::asset('build/img/logo-white.svg') }}" class="logo" alt="Logo">
</a>
<a class="logo-dark header-logo" href="{{ route('index-3') }}">
    <img src="{{ URL::asset('build/img/logo-white.svg') }}" class="logo" alt="Logo">
</a>

                </div>
                <ul class="main-nav">
                    
                    <li class="has-submenu">
                        <a href="#">PENSUM CARRERA<i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="javascript:void(0);">CARRERAS</a>
                                <ul class="submenu">
                                    <li><a href="{{url('course-grid')}}">Course Grid</a></li>
                                    <li><a href="{{url('course-list')}}">INGENIERIA</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Course Category</a>
                                <ul class="submenu">
                                    <li><a href="{{url('course-category')}}">Course Category</a></li>
                                    <li><a href="{{url('course-category-2')}}">Course Category 2</a></li>
                                    <li><a href="{{url('course-category-3')}}">Course Category 3</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Course Details</a>
                                <ul class="submenu">
                                    <li><a href="{{url('course-details')}}">Course Details</a></li>
                                    <li><a href="{{url('course-details-2')}}">Course Details 2</a></li>
                                </ul>
                            </li>										
                            <li><a href="{{url('course-resume')}}">Course Resume</a></li>
                            <li><a href="{{url('course-watch')}}">Course Watch</a></li>
                            <li><a href="{{url('cart')}}">Course Cart</a></li>
                            <li><a href="{{url('checkout')}}">Course Checkout</a></li>
                            <li><a href="{{url('add-course')}}">Add New Course</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">Dashboard <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Instructor Dashboard</a>
                                <ul class="submenu">
                                    <li><a href="{{url('instructor-dashboard')}}">Dashboard</a></li>
                                    <li><a href="{{url('instructor-profile')}}">My Profile</a></li>
                                    <li><a href="{{url('instructor-course')}}">Course</a></li>
                                    <li><a href="{{url('instructor-announcements')}}">Announcements</a></li>
                                    <li><a href="{{url('instructor-assignment')}}">Assignments</a></li>
                                    <li class="has-submenu">
                                        <a href="javascript:void(0);">Student</a>
                                        <ul class="submenu">
                                            <li><a href="{{url('students')}}">Student Grid</a></li>
                                            <li><a href="{{url('student-list')}}">Student List</a></li>
                                            <li><a href="{{url('student-details')}}">Student Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('instructor-quiz')}}">Quiz</a></li>
                                    <li><a href="{{url('instructor-quiz-results')}}">Quiz Results</a></li>
                                    <li><a href="{{url('instructor-certificate')}}">Certificates</a></li>
                                    <li><a href="{{url('instructor-earnings')}}">Earning</a></li>
                                    <li><a href="{{url('instructor-payout')}}">Payout</a></li>
                                    <li><a href="{{url('instructor-statements')}}">Statement</a></li>
                                    <li><a href="{{url('instructor-tickets')}}">Support Tickets</a></li>
                                    <li><a href="{{url('instructor-settings')}}">Settings</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Student Dashboard</a>
                                <ul class="submenu">
                                    <li><a href="{{url('student-dashboard')}}">Student Dashboard</a></li>
                                    <li><a href="{{url('student-profile')}}">My Profile</a></li>
                                    <li><a href="{{url('student-CARRERAS')}}">Enrolled CARRERAS</a></li>
                                    <li><a href="{{url('student-certificates')}}">My Certificates</a></li>
                                    <li><a href="{{url('student-wishlist')}}">Wishlist</a></li>
                                    <li><a href="{{url('student-reviews')}}">Reviews</a></li>
                                    <li><a href="{{url('student-quiz')}}">My Quiz Attempts</a></li>
                                    <li><a href="{{url('student-order-history')}}">Order History</a></li>
                                    <li><a href="{{url('student-referral')}}">Referrals</a></li>
                                    <li><a href="{{url('student-messages')}}">Messages</a></li>
                                    <li><a href="{{url('student-tickets')}}">Support Ticket</a></li>
                                    <li><a href="{{url('student-settings')}}">Settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">Instructors</a>
                                <ul class="submenu">
                                    <li><a href="{{url('instructor-grid')}}">Instructor Grid</a></li>
                                    <li><a href="{{url('instructor-list')}}">Instructor List</a></li>
                                    <li><a href="{{url('instructor-details')}}">Instructor Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('about-us')}}">About Us</a></li>
                            <li><a href="{{url('contact-us')}}">Contact us</a></li>
                            <li><a href="{{url('notifications')}}">Notifications</a></li>
                            <li><a href="{{url('become-an-instructor')}}">Become an Instructor</a></li>
                            <li><a href="{{url('testimonials')}}">Testimonials</a></li>
                            <li class="has-submenu">
                                <a href="#">Authentication</a>
                                <ul class="submenu">
                                    <li><a href="{{url('login')}}">Login</a></li>
                                    <li><a href="{{url('register')}}">Register</a></li>
                                    <li><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                    <li><a href="{{url('reset-password')}}">Reset Password</a></li>
                                    <li><a href="{{url('set-password')}}">Set Password</a></li>
                                    <li><a href="{{url('otp')}}">OTP</a></li>
                                    <li><a href="{{url('lock-screen')}}">Lock Screen</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Error</a>
                                <ul class="submenu">
                                    <li><a href="{{url('error-404')}}">404 Error</a></li>
                                    <li><a href="{{url('error-500')}}">500 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                            <li><a href="{{url('faq')}}">FAQ</a></li>
                            <li><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                            <li><a href="{{url('under-construction')}}">Under Construction</a></li>
                            <li><a href="{{url('terms-and-conditions')}}">Terms & Conditions</a></li>
                            <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                            <li><a href="{{url('index-rtl')}}">RTL</a></li>
                        </ul>
                    </li>	
                    <li class="has-submenu">
                        <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">Blog Layouts</a>
                                <ul class="submenu">
                                    <li><a href="{{url('blog-grid')}}">Blog 1 Grid</a></li>
                                    <li><a href="{{url('blog-2-grid')}}">Blog 2 Grid</a></li>
                                    <li><a href="{{url('blog-3-grid')}}">Blog 3 Grid</a></li>
                                    <li><a href="{{url('blog-carousal')}}">Blog Carousal</a></li>
                                    <li><a href="{{url('blog-masonry')}}">Blog Mansory</a></li>
                                    <li><a href="{{url('blog-left-sidebar')}}">Blog Left Sidebar</a></li>
                                    <li><a href="{{url('blog-right-sidebar')}}">Blog Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Blog Details</a>
                                <ul class="submenu">
                                    <li><a href="{{url('blog-details')}}">Blog Details</a></li>
                                    <li><a href="{{url('blog-details-left-sidebar')}}">Blog Details Left Sidebar</a></li>
                                    <li><a href="{{url('blog-details-right-sidebar')}}">Blog Details Right Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                
                <div class="menu-dropdown">
                    <div class="cart-item">
                        <h6>Cart & Wishlist</h6>                                
                        <div class="icon-btn">
                            <a href="{{url('cart')}}" class="position-relative">
                                <i class="isax isax-shopping-cart5"></i>
                                <span class="count-icon bg-success p-1 rounded-pill text-white fs-10 fw-bold">1</span>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown flag-dropdown mb-2">
                        <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown mb-2">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            USD
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mb-2">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Light
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">Light</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">Dark</a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu-login">
                    <a href="{{url('login')}}" class="btn btn-primary w-100 mb-2"><i class="isax isax-user me-2"></i>Sign In</a>
                    <a href="{{url('register')}}" class="btn btn-secondary w-100"><i class="isax isax-user-edit me-2"></i>Register</a>
                </div>
            </div>
            <div class="header-btn d-flex align-items-center">
                <div class="icon-btn me-2">
                    <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle activate">
                        <i class="isax isax-sun-15"></i>
                    </a>
                    <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                        <i class="isax isax-moon"></i>
                    </a>
                </div>
                
                <div class="dropdown flag-dropdown me-3">
                    <a href="javascript:void(0);" class="dropdown-toggle d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                    </a>
                    <ul class="dropdown-menu p-2 mt-2">
                        <li>
                            <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown me-3">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        USD
                    </a>
                    <ul class="dropdown-menu p-2 mt-2" style="">
                        <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                        <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                        <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                    </ul>
                </div>
                @if(!Route::is(['index-4']))
                <a href="{{url('login')}}" class="btn btn-primary d-inline-flex align-items-center me-2">
                    Sign In
                </a>
                <a href="{{url('register')}}" class="btn btn-secondary me-0">
                    Register
                </a>
                @endif
                @if(Route::is(['index-4']))
                <a href="{{url('login')}}" class="btn btn-primary d-inline-flex align-items-center me-2">
                    <i class="fa-solid fa-user me-2"></i>Sign In
                </a>
                <a href="{{url('register')}}" class="btn btn-secondary me-0">
                    <i class="fa-solid fa-user me-2"></i>Register
                </a>
                @endif
            </div>
        </div>
    </div>
</header>

@endif


@if(!Route::is(['index','index-2','index-3','index-4','index-5','index-6','index-rtl']))
<!-- Header Topbar-->
<div class="header-topbar text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                    <p class="d-flex align-items-center fw-medium fs-14 mb-2 me-3"><i class="isax isax-location5 me-2"></i>1442 Crosswind Drive Madisonville</p>
                    <p class="d-flex align-items-center fw-medium fs-14 mb-2"><i class="isax isax-call-calling5 me-2"></i>+1 45887 77874</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                    <div class="dropdown flag-dropdown mb-2 me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown mb-2 me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            USD
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                        </ul>
                    </div>
                    <ul class="social-icon d-flex align-items-center mb-2">
                        <li class="me-2">
                            <a href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li class="me-2">
                            <a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="me-2">
                            <a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li class="me-2">
                            <a href="javascript:void(0);"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Header Topbar-->
@endif
@if(!Route::is(['instructor-announcements', 
'instructor-assignment', 
'instructor-certificate', 
'instructor-change-password', 
'instructor-course', 
'instructor-course-grid',
 'instructor-dashboard',
  'instructor-earnings',
   'instructor-integrations',
    'instructor-linked-accounts', 
    'instructor-message', 
    'instructor-notifications', 
    'student-change-password',
     'student-CARRERAS', 
     'student-dashboard',
      'student-details', 
      'student-linked-accounts',
       'student-list',
        'student-messages', 
        'student-notifications',
         'student-profile',
          'student-order-history',
           'student-quiz',
            'student-quiz-questions', 
            'student-referral',
             'student-reviews', 
             'students', 
             'student-settings', 
             'student-social-profile', 
             'student-tickets',
              'student-wishlist',
              'index',
              'index-2',
              'index-3',
              'index-4',
              'index-5',
              'index-6',
              'index-rtl',
              'instructor-payout',
              'instructor-plans',
              'instructor-profile',
              'instructor-quiz',
              'instructor-quiz-questions',
              'instructor-quiz-results',
              'instructor-settings',
              'instructor-social-profiles',
              'instructor-statements',
              'instructor-tickets',
              'instructor-withdraw',
              'student-billing-address',
              'student-certificates']))
<!-- Header -->
<header class="header-two">
    <div class="container">
        <div class="header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <div class="navbar-logo">
                    <a class="logo-white header-logo" href="{{url('index')}}">
                        <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                    </a>
                    <a class="logo-dark header-logo" href="{{url('index')}}">
                        <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="main-menu-wrapper">								
                <div class="menu-header">
                    <a href="{{url('index')}}" class="menu-logo">
                        <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    
                    <li class="has-submenu {{ Request::is('course-grid','course-list','course-resume','course-watch','cart','checkout','add-course',
                        'course-category','course-category-2','course-category-3','course-details','course-details-2') ? 'active' : '' }}">
                        <a href="#">PENSUM CARRERA<i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu {{ Request::is('course-grid','course-list') ? 'active' : '' }}">
                                <a href="javascript:void(0);">CARRERAS</a>
                                <ul class="submenu">
                                    <li class="{{ Request::is('course-grid') ? 'active' : '' }}"><a href="{{url('course-grid')}}">Course Grid</a></li>
                                    <li class="{{ Request::is('course-list') ? 'active' : '' }}"><a href="{{url('course-list')}}">INGENIERIA</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu {{ Request::is('course-category','course-category-2','course-category-3') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Course Category</a>
                                <ul class="submenu">
                                    <li class="{{ Request::is('course-category') ? 'active' : '' }}" ><a href="{{url('course-category')}}">Course Category</a></li>
                                    <li class="{{ Request::is('course-category-2') ? 'active' : '' }}"><a href="{{url('course-category-2')}}">Course Category 2</a></li>
                                    <li class="{{ Request::is('course-category-3') ? 'active' : '' }}"><a href="{{url('course-category-3')}}">Course Category 3</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu {{ Request::is('course-details','course-details-2') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Course Details</a>
                                <ul class="submenu">
                                    <li class="{{ Request::is('course-details') ? 'active' : '' }}"><a href="{{url('course-details')}}">Course Details</a></li>
                                    <li class="{{ Request::is('course-details-2') ? 'active' : '' }}"><a href="{{url('course-details-2')}}">Course Details 2</a></li>
                                </ul>
                            </li>										
                            <li class="{{ Request::is('course-resume') ? 'active' : '' }}"><a href="{{url('course-resume')}}">Course Resume</a></li>
                            <li class="{{ Request::is('course-watch') ? 'active' : '' }}"><a href="{{url('course-watch')}}">Course Watch</a></li>
                            <li class="{{ Request::is('cart') ? 'active' : '' }}"><a href="{{url('cart')}}">Course Cart</a></li>
                            <li class="{{ Request::is('checkout') ? 'active' : '' }}"><a href="{{url('checkout')}}">Course Checkout</a></li>
                            <li class="{{ Request::is('add-course') ? 'active' : '' }}"><a href="{{url('add-course')}}">Add New Course</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu {{ Request::is('instructor-dashboard','instructor-dashboard','instructor-profile','instructor-course',
                        'instructor-announcements','instructor-assignment','students','student-list','student-details',
                        'instructor-quiz','instructor-quiz-results','instructor-certificate','instructor-earnings','instructor-payout','instructor-statements','instructor-tickets','instructor-settings') ? 'active' : '' }}">
                        <a href="javascript:void(0);">Dashboard <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu {{ Request::is('instructor-dashboard','instructor-profile','instructor-course','instructor-announcements','instructor-assignment') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Instructor Dashboard</a>                                <ul class="submenu">
                                    <li class="{{ Request::is('instructor-dashboard') ? 'active' : '' }}"><a href="{{url('instructor-dashboard')}}">Dashboard</a></li>
                                    <li class="{{ Request::is('instructor-profile') ? 'active' : '' }}"><a href="{{url('instructor-profile')}}">My Profile</a></li>
                                    <li class="{{ Request::is('instructor-course') ? 'active' : '' }}"><a href="{{url('instructor-course')}}">Course</a></li>
                                    <li class="{{ Request::is('instructor-announcements') ? 'active' : '' }}"><a href="{{url('instructor-announcements')}}">Announcements</a></li>
                                    <li class="{{ Request::is('instructor-assignment') ? 'active' : '' }}"><a href="{{url('instructor-assignment')}}">Assignments</a></li>
                                    <li class="has-submenu {{ Request::is('students','student-list','student-details') ? 'active' : '' }}">
                                        <a href="javascript:void(0);">Student</a>
                                        <ul class="submenu">
                                            <li class="{{ Request::is('students') ? 'active' : '' }}"><a href="{{url('students')}}">Student Grid</a></li>
                                            <li class="{{ Request::is('student-list') ? 'active' : '' }}"><a href="{{url('student-list')}}">Student List</a></li>
                                            <li class="{{ Request::is('student-details') ? 'active' : '' }}"><a href="{{url('student-details')}}">Student Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('instructor-quiz') ? 'active' : '' }}"><a href="{{url('instructor-quiz')}}">Quiz</a></li>
                                        <li class="{{ Request::is('instructor-quiz-results') ? 'active' : '' }}"><a href="{{url('instructor-quiz-results')}}">Quiz Results</a></li>
                                        <li class="{{ Request::is('instructor-certificate') ? 'active' : '' }}"><a href="{{url('instructor-certificate')}}">Certificates</a></li>
                                        <li class="{{ Request::is('instructor-earnings') ? 'active' : '' }}"><a href="{{url('instructor-earnings')}}">Earning</a></li>
                                        <li class="{{ Request::is('instructor-payout') ? 'active' : '' }}"><a href="{{url('instructor-payout')}}">Payout</a></li>
                                        <li class="{{ Request::is('instructor-statements') ? 'active' : '' }}"><a href="{{url('instructor-statements')}}">Statement</a></li>
                                        <li class="{{ Request::is('instructor-tickets') ? 'active' : '' }}"><a href="{{url('instructor-tickets')}}">Support Tickets</a></li>
                                        <li class="{{ Request::is('instructor-settings') ? 'active' : '' }}"><a href="{{url('instructor-settings')}}">Settings</a></li>
                                    </ul>
                            </li>
                            <li class="has-submenu {{ Request::is('student-dashboard','student-profile','student-CARRERAS','student-certificates','student-wishlist','student-reviews','student-quiz','student-order-history','student-referral'
                                ,'student-messages','student-tickets','student-settings','student-notifications') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Student Dashboard</a>
                                <ul class="submenu">
                                    <li class="{{ Request::is('student-dashboard') ? 'active' : '' }}"><a href="{{url('student-dashboard')}}">Student Dashboard</a></li>
                                    <li class="{{ Request::is('student-profile') ? 'active' : '' }}"><a href="{{url('student-profile')}}">My Profile</a></li>
                                    <li class="{{ Request::is('student-CARRERAS') ? 'active' : '' }}"><a href="{{url('student-CARRERAS')}}">Enrolled CARRERAS</a></li>
                                    <li class="{{ Request::is('student-certificates') ? 'active' : '' }}"><a href="{{url('student-certificates')}}">My Certificates</a></li>
                                    <li class="{{ Request::is('student-wishlist') ? 'active' : '' }}"><a href="{{url('student-wishlist')}}">Wishlist</a></li>
                                    <li class="{{ Request::is('student-reviews') ? 'active' : '' }}"><a href="{{url('student-reviews')}}">Reviews</a></li>
                                    <li class="{{ Request::is('student-quiz') ? 'active' : '' }}"><a href="{{url('student-quiz')}}">My Quiz Attempts</a></li>
                                    <li class="{{ Request::is('student-order-history') ? 'active' : '' }}"><a href="{{url('student-order-history')}}">Order History</a></li>
                                    <li class="{{ Request::is('student-referral') ? 'active' : '' }}"><a href="{{url('student-referral')}}">Referrals</a></li>
                                    <li class="{{ Request::is('student-messages') ? 'active' : '' }}"><a href="{{url('student-messages')}}">Messages</a></li>
                                    <li class="{{ Request::is('student-tickets') ? 'active' : '' }}"><a href="{{url('student-tickets')}}">Support Ticket</a></li>
                                    <li class="{{ Request::is('student-settings','student-notifications') ? 'active' : '' }}"><a href="{{url('student-settings')}}">Settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{ Request::is('instructor-grid','instructor-list','instructor-details','about-us','contact-us','notifications',
                        'become-an-instructor','testimonials','about-us','contact-us','notifications','become-an-instructor','testimonials',
                        'login','register','forgot-password','reset-password','set-password','otp','lock-screen','error-404',
                        'error-500','pricing-plan','faq','coming-soon','under-construction','terms-and-conditions','privacy-policy','index-rtl') ? 'active' : '' }}">
                        <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu {{ Request::is('instructor-grid','instructor-list','instructor-details') ? 'active' : '' }}">
                                <a href="#">Instructors</a>
                                <ul class="submenu">
                                    <li class="{{ Request::is('instructor-grid') ? 'active' : '' }}"><a href="{{url('instructor-grid')}}">Instructor Grid</a></li>
                                    <li class="{{ Request::is('instructor-list') ? 'active' : '' }}"><a href="{{url('instructor-list')}}">Instructor List</a></li>
                                    <li class="{{ Request::is('instructor-details') ? 'active' : '' }}"><a href="{{url('instructor-details')}}">Instructor Details</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a href="{{url('about-us')}}">About Us</a></li>
                            <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact us</a></li>
                            <li class="{{ Request::is('notifications') ? 'active' : '' }}"><a href="{{url('notifications')}}">Notifications</a></li>
                            <li class="{{ Request::is('become-an-instructor') ? 'active' : '' }}"><a href="{{url('become-an-instructor')}}">Become an Instructor</a></li>
                            <li class="{{ Request::is('testimonials') ? 'active' : '' }}"><a href="{{url('testimonials')}}">Testimonials</a></li>
                            <li class="has-submenu {{ Request::is('login','register','forgot-password','reset-password','set-password','otp','lock-screen') ? 'active' : '' }}">
                                <a href="#">Authentication</a>
                                <ul class="submenu">
                                    <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{url('login')}}">Login</a></li>
                                    <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{url('register')}}">Register</a></li>
                                    <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                    <li class="{{ Request::is('reset-password') ? 'active' : '' }}"><a href="{{url('reset-password')}}">Reset Password</a></li>
                                    <li class="{{ Request::is('set-password') ? 'active' : '' }}"><a href="{{url('set-password')}}">Set Password</a></li>
                                    <li class="{{ Request::is('otp') ? 'active' : '' }}"><a href="{{url('otp')}}">OTP</a></li>
                                    <li class="{{ Request::is('lock-screen') ? 'active' : '' }}"><a href="{{url('lock-screen')}}">Lock Screen</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu  {{ Request::is('error-404','error-500') ? 'active' : '' }}">
                                <a href="#">Error</a>
                                <ul class="submenu">
                                    <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a href="{{url('error-404')}}">404 Error</a></li>
                                    <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a href="{{url('error-500')}}">500 Error</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('pricing-plan') ? 'active' : '' }}"><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                                <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="{{url('faq')}}">FAQ</a></li>
                                <li class="{{ Request::is('coming-soon') ? 'active' : '' }}"><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                                <li class="{{ Request::is('under-construction') ? 'active' : '' }}"><a href="{{url('under-construction')}}">Under Construction</a></li>
                                <li class="{{ Request::is('terms-and-conditions') ? 'active' : '' }}"><a href="{{url('terms-and-conditions')}}">Terms & Conditions</a></li>
                                <li class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                <li class="{{ Request::is('index-rtl') ? 'active' : '' }}"><a href="{{url('index-rtl')}}">RTL</a></li>
                            </ul>
                    </li>	
                    <li class="has-submenu {{ Request::is('blog-grid','blog-2-grid','blog-3-grid','blog-carousal','blog-masonry','blog-left-sidebar','blog-right-sidebar','blog-details','blog-details-left-sidebar','blog-details-right-sidebar') ? 'active' : '' }}">
                        <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu {{ Request::is('blog-grid','blog-2-grid','blog-3-grid','blog-carousal','blog-masonry','blog-left-sidebar','blog-right-sidebar') ? 'active' : '' }}">
                                <a href="#">Blog Layouts</a>
                                <ul class="submenu">
                                    <li class="{{ Request::is('blog-grid') ? 'active' : '' }}"><a href="{{url('blog-grid')}}">Blog 1 Grid</a></li>
                                    <li class="{{ Request::is('blog-2-grid') ? 'active' : '' }}"><a href="{{url('blog-2-grid')}}">Blog 2 Grid</a></li>
                                    <li class="{{ Request::is('blog-3-grid') ? 'active' : '' }}"><a href="{{url('blog-3-grid')}}">Blog 3 Grid</a></li>
                                    <li class="{{ Request::is('blog-carousal') ? 'active' : '' }}"><a href="{{url('blog-carousal')}}">Blog Carousal</a></li>
                                    <li class="{{ Request::is('blog-masonry') ? 'active' : '' }}"><a href="{{url('blog-masonry')}}">Blog Mansory</a></li>
                                    <li class="{{ Request::is('blog-left-sidebar') ? 'active' : '' }}"><a href="{{url('blog-left-sidebar')}}">Blog Left Sidebar</a></li>
                                    <li class="{{ Request::is('blog-right-sidebar') ? 'active' : '' }}"><a href="{{url('blog-right-sidebar')}}">Blog Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu {{ Request::is('blog-details','blog-details-left-sidebar','blog-details-right-sidebar') ? 'active' : '' }}">
                                <a href="#">Blog Details</a>
                                <ul class="submenu">
                                    <li class="{{ Request::is('blog-details') ? 'active' : '' }}"><a href="{{url('blog-details')}}">Blog Details</a></li>
                                    <li class="{{ Request::is('blog-details-left-sidebar') ? 'active' : '' }}"><a href="{{url('blog-details-left-sidebar')}}">Blog Details Left Sidebar</a></li>
                                    <li class="{{ Request::is('blog-details-right-sidebar') ? 'active' : '' }}"><a href="{{url('blog-details-right-sidebar')}}">Blog Details Right Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
               
                <div class="menu-dropdown">
                    <div class="cart-item">
                        <h6>Cart & Wishlist</h6>                                
                        <div class="icon-btn">
                            <a href="{{url('cart')}}" class="position-relative">
                                <i class="isax isax-shopping-cart5"></i>
                                <span class="count-icon bg-success p-1 rounded-pill text-white fs-10 fw-bold">1</span>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown flag-dropdown mb-2">
                        <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRE
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown mb-2">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            USD
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mb-2">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Light
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">Light</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">Dark</a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu-login">
                    <a href="{{url('login')}}" class="btn btn-primary w-100 mb-2"><i class="isax isax-user me-2"></i>Sign In</a>
                    <a href="{{url('register')}}" class="btn btn-secondary w-100"><i class="isax isax-user-edit me-2"></i>Register</a>
                </div>
                
            </div>
            <div class="header-btn d-flex align-items-center">
                <div class="icon-btn me-2">
                    <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle activate">
                        <i class="isax isax-sun-15"></i>
                    </a>
                    <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                        <i class="isax isax-moon"></i>
                    </a>
                </div>
                <div class="icon-btn me-3">
                    <a href="{{url('cart')}}" class="position-relative">
                        <i class="isax isax-shopping-cart5"></i>
                        <span class="count-icon bg-success p-1 rounded-pill text-white fs-10 fw-bold">1</span>
                    </a>
                </div>
              
                <a href="{{url('login')}}" class="btn btn-light d-inline-flex align-items-center me-2">
                    <i class="isax isax-lock-circle me-2"></i>Sign In
                </a>
                <a href="{{url('register')}}" class="btn btn-secondary me-0">
                    <i class="isax isax-user-edit me-2"></i>Register
                </a>
              
                
            </div>
        </div>
    </div>
</header>
<!-- /Header -->
@endif
@if (Route::is(['student-change-password',
 'student-CARRERAS', 
 'student-dashboard', 
 'student-linked-accounts',
  'student-messages',
   'student-notifications', 
   'student-profile',
    'student-order-history', 
    'student-quiz',
    'student-quiz-questions', 
    'student-referral', 
    'student-reviews', 
    'student-settings',
     'student-social-profile', 
     'student-tickets', 
     'student-wishlist',
     'students',
     'student-list',
     'student-details',
     'student-billing-address',
     'student-certificates',
     
     'instructor-announcements', 
'instructor-assignment', 
'instructor-certificate', 
'instructor-change-password', 
'instructor-course', 
'instructor-course-grid',
 'instructor-dashboard',
  'instructor-earnings',
   'instructor-integrations',
    'instructor-linked-accounts', 
    'instructor-message', 
    'instructor-notifications',
    'instructor-payout',
    'instructor-plans',
    'instructor-profile',
    'instructor-quiz',
    'instructor-quiz-questions',
    'instructor-quiz-results',
    'instructor-settings',
    'instructor-social-profiles',
    'instructor-statements',
    'instructor-tickets',
    'instructor-withdraw']))
	<!-- Header -->
    <header class="header-two">
        <div class="container">
            <div class="header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <div class="navbar-logo">
                        <a class="logo-white header-logo" href="{{url('index-3')}}">
    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
</a>
<a class="logo-dark header-logo" href="{{url('index-3')}}">
    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
</a>

                    </div>
                </div>
                <div class="main-menu-wrapper">								
                    <div class="menu-header">
                        <a class="logo-white header-logo" href="{{url('index-3')}}">
    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
</a>
<a class="logo-dark header-logo" href="{{url('index-3')}}">
    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="logo" alt="Logo">
</a>

                    </div>
                    <ul class="main-nav">
                       
                        <li class="has-submenu  {{ Request::is('course-grid','course-list','course-resume','course-watch','cart','checkout','add-course',
                        'course-category','course-category-2','course-category-3','course-details','course-details-2') ? 'active' : '' }}">
                            <a href="#">PENSUM CARRERA<i class="isax isax-add"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu {{ Request::is('course-grid','course-list') ? 'active' : '' }}">
                                    <a href="javascript:void(0);">CARRERAS</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('course-grid') ? 'active' : '' }}"><a href="{{url('course-grid')}}">Course Grid</a></li>
                                        <li class="{{ Request::is('course-list') ? 'active' : '' }}"><a href="{{url('course-list')}}">INGENIERIA</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu {{ Request::is('course-category','course-category-2','course-category-3') ? 'active' : '' }}">
                                    <a href="javascript:void(0);">Course Category</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('course-category') ? 'active' : '' }}" ><a href="{{url('course-category')}}">Course Category</a></li>
                                        <li class="{{ Request::is('course-category-2') ? 'active' : '' }}"><a href="{{url('course-category-2')}}">Course Category 2</a></li>
                                        <li class="{{ Request::is('course-category-3') ? 'active' : '' }}"><a href="{{url('course-category-3')}}">Course Category 3</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu {{ Request::is('course-details','course-details-2') ? 'active' : '' }}">
                                    <a href="javascript:void(0);">Course Details</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('course-details') ? 'active' : '' }}"><a href="{{url('course-details')}}">Course Details</a></li>
                                        <li class="{{ Request::is('course-details-2') ? 'active' : '' }}"><a href="{{url('course-details-2')}}">Course Details 2</a></li>
                                    </ul>
                                </li>										
                                <li class="{{ Request::is('course-resume') ? 'active' : '' }}"><a href="{{url('course-resume')}}">Course Resume</a></li>
                                <li class="{{ Request::is('course-watch') ? 'active' : '' }}"><a href="{{url('course-watch')}}">Course Watch</a></li>
                                <li class="{{ Request::is('cart') ? 'active' : '' }}"><a href="{{url('cart')}}">Course Cart</a></li>
                                <li class="{{ Request::is('checkout') ? 'active' : '' }}"><a href="{{url('checkout')}}">Course Checkout</a></li>
                                <li class="{{ Request::is('add-course') ? 'active' : '' }}"><a href="{{url('add-course')}}">Add New Course</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu {{ Request::is('instructor-dashboard','instructor-dashboard','instructor-profile','instructor-course',
                        'instructor-announcements','instructor-assignment','students','student-list','student-details',
                        'instructor-quiz','instructor-quiz-results','instructor-certificate','instructor-earnings','instructor-payout','instructor-statements','instructor-tickets'
                        ,'instructor-settings','student-notifications','student-order-history','student-profile','student-quiz-questions','student-quiz','student-referral','student-reviews','student-settings','student-social-profile',
                        'student-tickets','student-wishlist','student-change-password','student-CARRERAS','student-dashboard','student-linked-accounts','student-certificates','student-billing-address','instructor-message','student-messages') ? 'active' : '' }} ">
                            <a href="javascript:void(0);">Dashboard <i class="isax isax-add"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu {{ Request::is('instructor-dashboard','instructor-profile','instructor-course','instructor-announcements','instructor-assignment','students','student-list','student-details','instructor-statements','instructor-message','instructor-tickets') ? 'active' : '' }}">
                                    <a href="javascript:void(0);">Instructor Dashboard</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('instructor-dashboard') ? 'active' : '' }}"><a href="{{url('instructor-dashboard')}}">Dashboard</a></li>
                                        <li class="{{ Request::is('instructor-profile') ? 'active' : '' }}"><a href="{{url('instructor-profile')}}">My Profile</a></li>
                                        <li class="{{ Request::is('instructor-course') ? 'active' : '' }}"><a href="{{url('instructor-course')}}">Course</a></li>
                                        <li class="{{ Request::is('instructor-announcements') ? 'active' : '' }}"><a href="{{url('instructor-announcements')}}">Announcements</a></li>
                                        <li class="{{ Request::is('instructor-assignment') ? 'active' : '' }}"><a href="{{url('instructor-assignment')}}">Assignments</a></li>
                                        <li class="has-submenu {{ Request::is('students','student-list','student-details') ? 'active' : '' }}">
                                            <a href="javascript:void(0);">Student</a>
                                            <ul class="submenu">
                                                <li class="{{ Request::is('students') ? 'active' : '' }}"><a href="{{url('students')}}">Student Grid</a></li>
                                                <li class="{{ Request::is('student-list') ? 'active' : '' }}"><a href="{{url('student-list')}}">Student List</a></li>
                                                <li class="{{ Request::is('student-details') ? 'active' : '' }}"><a href="{{url('student-details')}}">Student Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ Request::is('instructor-quiz') ? 'active' : '' }}"><a href="{{url('instructor-quiz')}}">Quiz</a></li>
                                        <li class="{{ Request::is('instructor-quiz-results') ? 'active' : '' }}"><a href="{{url('instructor-quiz-results')}}">Quiz Results</a></li>
                                        <li class="{{ Request::is('instructor-certificate') ? 'active' : '' }}"><a href="{{url('instructor-certificate')}}">Certificates</a></li>
                                        <li class="{{ Request::is('instructor-earnings') ? 'active' : '' }}"><a href="{{url('instructor-earnings')}}">Earning</a></li>
                                        <li class="{{ Request::is('instructor-payout') ? 'active' : '' }}"><a href="{{url('instructor-payout')}}">Payout</a></li>
                                        <li class="{{ Request::is('instructor-statements') ? 'active' : '' }}"><a href="{{url('instructor-statements')}}">Statement</a></li>
                                        <li class="{{ Request::is('instructor-message') ? 'active' : '' }}"><a href="{{url('instructor-message')}}">Messages</a></li>
                                        <li class="{{ Request::is('instructor-tickets') ? 'active' : '' }}"><a href="{{url('instructor-tickets')}}">Support Tickets</a></li>
                                        <li class="{{ Request::is('instructor-settings') ? 'active' : '' }}"><a href="{{url('instructor-settings')}}">Settings</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu {{ Request::is('student-dashboard','student-profile','student-CARRERAS','student-certificates','student-wishlist','student-reviews','student-quiz','student-order-history','student-referral'
                                ,'student-messages','student-tickets','student-settings','student-notifications','student-order-history','student-quiz-questions','student-social-profile','student-change-password','student-CARRERAS','student-linked-accounts','student-billing-address') ? 'active' : '' }}">
                                    <a href="javascript:void(0);">Student Dashboard</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('student-dashboard') ? 'active' : '' }}"><a href="{{url('student-dashboard')}}">Student Dashboard</a></li>
                                        <li class="{{ Request::is('student-profile') ? 'active' : '' }}"><a href="{{url('student-profile')}}">My Profile</a></li>
                                        <li class="{{ Request::is('student-CARRERAS','student-CARRERAS') ? 'active' : '' }}"><a href="{{url('student-CARRERAS')}}">Enrolled CARRERAS</a></li>
                                        <li class="{{ Request::is('student-certificates') ? 'active' : '' }}"><a href="{{url('student-certificates')}}">My Certificates</a></li>
                                        <li class="{{ Request::is('student-wishlist') ? 'active' : '' }}"><a href="{{url('student-wishlist')}}">Wishlist</a></li>
                                        <li class="{{ Request::is('student-reviews') ? 'active' : '' }}"><a href="{{url('student-reviews')}}">Reviews</a></li>
                                        <li class="{{ Request::is('student-quiz','student-quiz-questions') ? 'active' : '' }}"><a href="{{url('student-quiz')}}">My Quiz Attempts</a></li>
                                        <li class="{{ Request::is('student-order-history') ? 'active' : '' }}"><a href="{{url('student-order-history')}}">Order History</a></li>
                                        <li class="{{ Request::is('student-referral') ? 'active' : '' }}"><a href="{{url('student-referral')}}">Referrals</a></li>
                                        <li class="{{ Request::is('student-messages') ? 'active' : '' }}"><a href="{{url('student-messages')}}">Messages</a></li>
                                        <li class="{{ Request::is('student-tickets') ? 'active' : '' }}"><a href="{{url('student-tickets')}}">Support Ticket</a></li>
                                        <li class="{{ Request::is('student-settings','student-notifications','student-social-profile','student-change-password','student-linked-accounts','student-billing-address') ? 'active' : '' }}"><a href="{{url('student-settings')}}">Settings</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>	
                        <li class="has-submenu {{ Request::is('instructor-grid','instructor-list','instructor-details','about-us','contact-us','notifications',
                        'become-an-instructor','testimonials','about-us','contact-us','notifications','become-an-instructor','testimonials',
                        'login','register','forgot-password','reset-password','set-password','otp','lock-screen','error-404',
                        'error-500','pricing-plan','faq','coming-soon','under-construction','terms-and-conditions','privacy-policy','index-rtl') ? 'active' : '' }}">
                            <a href="#">Pages <i class="isax isax-add"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu {{ Request::is('instructor-grid','instructor-list','instructor-details') ? 'active' : '' }}">
                                    <a href="#">Instructors</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('instructor-grid') ? 'active' : '' }}"><a href="{{url('instructor-grid')}}">Instructor Grid</a></li>
                                        <li class="{{ Request::is('instructor-list') ? 'active' : '' }}"><a href="{{url('instructor-list')}}">Instructor List</a></li>
                                        <li class="{{ Request::is('instructor-details') ? 'active' : '' }}"><a href="{{url('instructor-details')}}">Instructor Details</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a href="{{url('about-us')}}">About Us</a></li>
                                <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact us</a></li>
                                <li class="{{ Request::is('notifications') ? 'active' : '' }}"><a href="{{url('notifications')}}">Notifications</a></li>
                                <li class="{{ Request::is('become-an-instructor') ? 'active' : '' }}"><a href="{{url('become-an-instructor')}}">Become an Instructor</a></li>
                                <li class="{{ Request::is('testimonials') ? 'active' : '' }}"><a href="{{url('testimonials')}}">Testimonials</a></li>
                                <li class="has-submenu {{ Request::is('login','register','forgot-password','reset-password','set-password','otp','lock-screen') ? 'active' : '' }}">
                                    <a href="#">Authentication</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{url('login')}}">Login</a></li>
                                        <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{url('register')}}">Register</a></li>
                                        <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                        <li class="{{ Request::is('reset-password') ? 'active' : '' }}"><a href="{{url('reset-password')}}">Reset Password</a></li>
                                        <li class="{{ Request::is('set-password') ? 'active' : '' }}"><a href="{{url('set-password')}}">Set Password</a></li>
                                        <li class="{{ Request::is('otp') ? 'active' : '' }}"><a href="{{url('otp')}}">OTP</a></li>
                                        <li class="{{ Request::is('lock-screen') ? 'active' : '' }}"><a href="{{url('lock-screen')}}">Lock Screen</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu {{ Request::is('error-404','error-500') ? 'active' : '' }}">
                                    <a href="#">Error</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a href="{{url('error-404')}}">404 Error</a></li>
                                        <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a href="{{url('error-500')}}">500 Error</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('pricing-plan') ? 'active' : '' }}"><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                                <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="{{url('faq')}}">FAQ</a></li>
                                <li class="{{ Request::is('coming-soon') ? 'active' : '' }}"><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                                <li class="{{ Request::is('under-construction') ? 'active' : '' }}"><a href="{{url('under-construction')}}">Under Construction</a></li>
                                <li class="{{ Request::is('terms-and-conditions') ? 'active' : '' }}"><a href="{{url('terms-and-conditions')}}">Terms & Conditions</a></li>
                                <li class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                <li class="{{ Request::is('index-rtl') ? 'active' : '' }}"><a href="{{url('index-rtl')}}">RTL</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu {{ Request::is('blog-grid','blog-2-grid','blog-3-grid','blog-carousal','blog-masonry','blog-left-sidebar','blog-right-sidebar','blog-details','blog-details-left-sidebar','blog-details-right-sidebar') ? 'active' : '' }}">
                            <a href="#">Blog <i class="isax isax-add"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu {{ Request::is('blog-grid','blog-2-grid','blog-3-grid','blog-carousal','blog-masonry','blog-left-sidebar','blog-right-sidebar') ? 'active' : '' }}">
                                    <a href="#">Blog Layouts</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('blog-grid') ? 'active' : '' }}"><a href="{{url('blog-grid')}}">Blog 1 Grid</a></li>
                                        <li class="{{ Request::is('blog-2-grid') ? 'active' : '' }}"><a href="{{url('blog-2-grid')}}">Blog 2 Grid</a></li>
                                        <li class="{{ Request::is('blog-3-grid') ? 'active' : '' }}"><a href="{{url('blog-3-grid')}}">Blog 3 Grid</a></li>
                                        <li class="{{ Request::is('blog-carousal') ? 'active' : '' }}"><a href="{{url('blog-carousal')}}">Blog Carousal</a></li>
                                        <li class="{{ Request::is('blog-masonry') ? 'active' : '' }}"><a href="{{url('blog-masonry')}}">Blog Mansory</a></li>
                                        <li class="{{ Request::is('blog-left-sidebar') ? 'active' : '' }}"><a href="{{url('blog-left-sidebar')}}">Blog Left Sidebar</a></li>
                                        <li class="{{ Request::is('blog-right-sidebar') ? 'active' : '' }}"><a href="{{url('blog-right-sidebar')}}">Blog Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu {{ Request::is('blog-details','blog-details-left-sidebar','blog-details-right-sidebar') ? 'active' : '' }}">
                                    <a href="#">Blog Details</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('blog-details') ? 'active' : '' }}"><a href="{{url('blog-details')}}">Blog Details</a></li>
                                        <li class="{{ Request::is('blog-details-left-sidebar') ? 'active' : '' }}"><a href="{{url('blog-details-left-sidebar')}}">Blog Details Left Sidebar</a></li>
                                        <li class="{{ Request::is('blog-details-right-sidebar') ? 'active' : '' }}"><a href="{{url('blog-details-right-sidebar')}}">Blog Details Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header-btn d-flex align-items-center">
                    <div class="icon-btn me-2">
                        <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle activate">
                            <i class="isax isax-sun-15"></i>
                        </a>
                        <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                            <i class="isax isax-moon"></i>
                        </a>
                    </div>
                    <div class="icon-btn me-3">
                        <a href="{{url('cart')}}" class="position-relative">
                            <i class="isax isax-shopping-cart5"></i>
                            <span class="count-icon bg-success p-1 rounded-pill text-white fs-10 fw-bold">1</span>
                        </a>
                    </div>
                    <div class="dropdown profile-dropdown">
                        <a href="javascript:void(0);" class="d-flex align-items-center" data-bs-toggle="dropdown">
                            @if (Route::is(['student-change-password',
 'student-CARRERAS', 
 'student-dashboard', 
 'student-linked-accounts',
  'student-messages',
   'student-notifications', 
   'student-profile',
    'student-order-history', 
    'student-quiz',
    'student-quiz-questions', 
    'student-referral', 
    'student-reviews', 
    'student-settings',
     'student-social-profile', 
     'student-tickets', 
     'student-wishlist',
     'student-billing-address',
     'student-certificates'
     
     ]))
                            <span class="avatar">
                                <img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="Img" class="img-fluid rounded-circle">
                            </span>
                            @endif
                            @if (Route::is(['instructor-announcements', 
'instructor-assignment', 
'instructor-certificate', 
'instructor-change-password', 
'instructor-course', 
'instructor-course-grid',
 'instructor-dashboard',
  'instructor-earnings',
   'instructor-integrations',
    'instructor-linked-accounts', 
    'instructor-message', 
    'instructor-notifications',
    'instructor-payout',
    'instructor-plans',
    'instructor-profile',
    'instructor-quiz',
    'instructor-quiz-questions',
    'instructor-quiz-results',
    'instructor-settings',
    'instructor-social-profiles',
    'instructor-statements',
    'instructor-tickets',
    'instructor-withdraw',
    'students',
    'student-list',
    'student-details']))
                            <span class="avatar">
                                <img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="Img" class="img-fluid rounded-circle">
                            </span>
                            @endif

                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="profile-header d-flex align-items-center">
                                <div class="avatar">
                                    <img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="Img" class="img-fluid rounded-circle">
                                </div>
                                <div>
                                    <h6>Ronald Richard</h6>
                                    <p>studentdemo@example.com</p>
                                </div>
                            </div>
                            <ul class="profile-body">
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium" href="{{url('student-profile')}}"><i class="isax isax-security-user me-2"></i>My Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium" href="{{url('student-quiz')}}"><i class="isax isax-award me-2"></i>Quiz Attempts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium2" href="{{url('student-order-history')}}"><i class="isax isax-shopping-cart me-2"></i>Order History</a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium" href="{{url('student-messages')}}"><i class="isax isax-messages-3 me-2"></i>Messages<span class="message-count">2</span></a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium" href="{{url('student-settings')}}"><i class="isax isax-setting-2 me-2"></i>Settings</a>
                                </li>										
                            </ul>
                            <div class="profile-footer">
                                <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium" href="{{url('login')}}"><i class="isax isax-arrow-2 me-2"></i>Log in as Instructor</a>
                                <a href="{{url('index')}}" class="btn btn-secondary d-inline-flex align-items-center justify-content-center w-100"><i class="isax isax-logout me-2"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->
@endif


