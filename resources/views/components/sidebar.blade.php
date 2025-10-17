
@if (Route::is(['instructor-announcements', 'instructor-assignment', 'instructor-certificate', 'instructor-change-password', 'instructor-course', 'instructor-course-grid', 'instructor-dashboard', 'instructor-earnings', 'instructor-integrations', 'instructor-linked-accounts', 'instructor-message', 'instructor-notifications', 'instructor-payout', 'instructor-plans', 'instructor-profile', 'instructor-quiz-questions', 'instructor-quiz', 'instructor-quiz-results', 'instructor-settings', 'instructor-social-profiles', 'instructor-statements', 'instructor-tickets', 'instructor-withdraw' ,'student-details', 'student-list', 'students']))
    <!-- Sidebar -->
    <div class="col-lg-3 theiaStickySidebar">
        <div class="settings-sidebar mb-lg-0">
            <div>
                <h6 class="mb-3">Main Menu</h6>
                <ul class="mb-3 pb-1">
                    <li>
                        <a href="{{url('instructor-dashboard')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-dashboard') ? 'active' : '' }}"><i class="isax isax-grid-35 me-2"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{url('instructor-profile')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-profile') ? 'active' : '' }}"><i class="fa-solid fa-user me-2"></i>My Profile</a>
                    </li>
                    <li>
                        <a href="{{url('instructor-course')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-course', 'instructor-course-grid') ? 'active' : '' }}"><i class="isax isax-teacher5 me-2"></i>Courses</a>
                    </li>
                    <li>
                        <a href="{{url('instructor-announcements')}}" class="d-inline-flex align-items-center  {{ Request::is('instructor-announcements') ? 'active' : '' }}"><i class="isax isax-volume-high5 me-2"></i>Announcements</a>
                    </li>
                    <li>
                        <a href="{{url('instructor-assignment')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-assignment') ? 'active' : '' }}"><i class="isax isax-clipboard-text5 me-2"></i>Assignments</a>
                    </li>
                    <li>
                        <a href="{{url('students')}}" class="d-inline-flex align-items-center {{ Request::is('students', 'student-grid', 'student-list', 'student-details') ? 'active' : '' }}"><i class="isax isax-profile-2user5 me-2"></i>Students</a>
                    </li>
                    <li>
                        <a href="{{url('instructor-quiz')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-quiz','instructor-quiz-questions') ? 'active' : '' }}"><i class="isax isax-award5 me-2"></i>Quiz</a>
                    </li>
                    <li>
                        <a href="{{url('instructor-quiz-results')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-quiz-results') ? 'active' : '' }}"><i class="isax isax-medal-star5 me-2"></i>Quiz Results</a>
                    </li>
                    <li>
                        <a href="{{url('instructor-certificate')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-certificate') ? 'active' : '' }}"><i class="isax isax-note-215 me-2"></i>Certificates</a>
                    </li>
                    <li>
                        <a href="{{url('instructor-earnings')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-earnings') ? 'active' : '' }}"><i class="isax isax-wallet-add5 me-2"></i>Earnings</a>
                    </li>
                    <li>
                        <a href="{{url('instructor-payout')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-payout') ? 'active' : '' }}"><i class="isax isax-coin-15 me-2"></i>Payout</a>
                    </li>
                    <li>
                        <a href="{{url('instructor-statements')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-statements') ? 'active' : '' }}"><i class="isax isax-shopping-cart5 me-2"></i>Statements</a>
                    </li>
                    <li>
                        <a href="{{url('instructor-message')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-message') ? 'active' : '' }}"><i class="isax isax-messages-35 me-2"></i>Messages</a>
                    </li>
                    <li>
                        <a href="{{url('instructor-tickets')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-tickets') ? 'active' : '' }}"><i class="isax isax-ticket5 me-2"></i>Support Tickets</a>
                    </li>
                </ul>
                <hr>
                <h6 class="mb-3">Account Settings</h6>
                <ul>
                    <li>
                        <a href="{{url('instructor-settings')}}" class="d-inline-flex align-items-center {{ Request::is('instructor-settings', 'instructor-change-password', 'instructor-plans', 'instructor-social-profiles', 'instructor-linked-accounts', 'instructor-notifications', 'instructor-integrations', 'instructor-withdraw') ? 'active' : '' }}"><i class="isax isax-setting-25 me-2"></i>Settings</a>
                    </li>
                    <li>
                        <a href="{{url('login')}}" class="d-inline-flex align-items-center {{ Request::is('login') ? 'active' : '' }}"><i class="isax isax-logout5 me-2"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
@endif

@if (Route::is(['student-billing-address', 'student-certificates' ,'student-change-password', 'student-courses', 'student-dashboard', 'student-linked-accounts', 'student-messages', 'student-notifications', 'student-profile', 'student-order-history', 'student-quiz','student-quiz-questions', 'student-referral', 'student-reviews', 'student-settings', 'student-social-profile', 'student-tickets', 'student-wishlist']))
    <!-- sidebar -->
    <div class="col-lg-3 theiaStickySidebar">
        <div class="settings-sidebar">
                <div>
                    <h6 class="mb-3">Main Menu</h6>
                    <ul class="mb-3 pb-1">
                        <li>
                            <a href="{{url('student-dashboard')}}" class="d-inline-flex align-items-center {{ Request::is('student-dashboard') ? 'active' : '' }}"><i class="isax isax-grid-35 me-2"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{url('student-profile')}}" class="d-inline-flex align-items-center {{ Request::is('student-profile') ? 'active' : '' }}"><i class="fa-solid fa-user me-2"></i>My Profile</a>
                        </li>
                        <li>
                            <a href="{{url('student-courses')}}" class="d-inline-flex align-items-center {{ Request::is('student-courses') ? 'active' : '' }}"><i class="isax isax-teacher5 me-2"></i>Enrolled Courses</a>
                        </li>
                        <li>
                            <a href="{{url('student-certificates')}}" class="d-inline-flex align-items-center {{ Request::is('student-certificates') ? 'active' : '' }}"><i class="isax isax-note-215 me-2"></i>My Certificates</a>
                        </li>
                        <li>
                            <a href="{{url('student-wishlist')}}" class="d-inline-flex align-items-center {{ Request::is('student-wishlist') ? 'active' : '' }}"><i class="isax isax-heart5 me-2"></i>Wishlist</a>
                        </li>
                        <li>
                            <a href="{{url('student-reviews')}}" class="d-inline-flex align-items-center {{ Request::is('student-reviews') ? 'active' : '' }}"><i class="isax isax-star5 me-2"></i>Reviews</a>
                        </li>
                        <li>
                            <a href="{{url('student-quiz')}}" class="d-inline-flex align-items-center {{ Request::is('student-quiz','student-quiz-questions') ? 'active' : '' }}"><i class="isax isax-award5 me-2"></i>My Quiz Attempts</a>
                        </li>
                        <li>
                            <a href="{{url('student-order-history')}}" class="d-inline-flex align-items-center {{ Request::is('student-order-history') ? 'active' : '' }}"><i class="isax isax-shopping-cart5 me-2"></i>Order History</a>
                        </li>
                        <li>
                            <a href="{{url('student-referral')}}" class="d-inline-flex align-items-center {{ Request::is('student-referral') ? 'active' : '' }}"><i class="isax isax-tag-user5 me-2"></i>Referrals</a>
                        </li>
                        <li>
                            <a href="{{url('student-messages')}}" class="d-inline-flex align-items-center {{ Request::is('student-messages') ? 'active' : '' }}"><i class="isax isax-messages-35 me-2"></i>Messages</a>
                        </li>
                        <li>
                            <a href="{{url('student-tickets')}}" class="d-inline-flex align-items-center {{ Request::is('student-tickets') ? 'active' : '' }}"><i class="isax isax-ticket5 me-2"></i>Support Tickets</a>
                        </li>
                    </ul>
                    <hr>
                    <h6 class="mb-3">Account Settings</h6>
                    <ul>
                        <li>
                            <a href="{{url('student-settings')}}" class="d-inline-flex align-items-center {{ Request::is('student-settings', 'student-change-password', 'student-social-profile', 'student-linked-accounts', 'student-notifications', 'student-billing-address') ? 'active' : '' }}"><i class="isax isax-setting-25 me-2"></i>Settings</a>
                        </li>
                        <li>
                            <a href="{{url('login')}}" class="d-inline-flex align-items-center {{ Request::is('login') ? 'active' : '' }}"><i class="isax isax-logout5 me-2"></i>Logout</a>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
    <!-- sidebar -->
@endif
