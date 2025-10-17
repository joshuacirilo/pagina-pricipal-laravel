<!-- jQuery -->
<script src="{{ URL::asset('/build/js/jquery-3.7.1.min.js') }}"></script>


<!-- Bootstrap Core JS -->
<script src="{{ URL::asset('/build/js/bootstrap.bundle.min.js') }}"></script>

@if (Route::is(['index-2', 'index-3', 'index-4', 'index-5', 'index-6']))
    <!-- counterup JS -->
    <script src="{{ URL::asset('/build/js/jquery.waypoints.js') }}"></script>
    <script src="{{ URL::asset('/build/js/jquery.counterup.min.js') }}"></script>
@endif

@if (Route::is(['index','index-rtl']))
    <!-- Swiper Slider -->
    <script src="{{URL::asset('build/plugins/swiper/js/swiper-bundle.min.js')}}"></script>

    <!-- Fancybox JS -->
    <script src="{{URL::asset('build/plugins/fancybox/jquery.fancybox.min.js')}}"></script>	
@endif

<!-- Select2 JS -->
<script src="{{ URL::asset('/build/plugins/select2/js/select2.min.js') }}"></script>

@if (Route::is(['index-2', 'index-3', 'index-4', 'index-5']))
    <!-- Owl Carousel -->
    <script src="{{ URL::asset('/build/js/owl.carousel.min.js') }}"></script>
@endif

@if (Route::is(['about-us', 'blog-carousal', 'blog-details-left-sidebar', 'blog-details-right-sidebar', 'coming-soon', 'forgot-password', 'index-2', 'index-3', 'index-4', 'index-5', 'index-6', 'index-rtl', 'index', 'instructor-details', 'login', 'otp', 'register', 'set-password', 'student-details', 'reset-password']))
    <!-- Slick Slider -->
    <script src="{{ URL::asset('/build/plugins/slick/slick.js') }}"></script>
@endif

@if (Route::is(['index-2', 'index-3', 'index-4', 'index-5', 'index-6', 'index-rtl', 'index']))
    <!-- Aos -->
    <script src="{{ URL::asset('/build/plugins/aos/aos.js') }}"></script>
@endif

@if (Route::is(['about-us', 'become-an-instructor', 'index-rtl', 'index']))
    <!-- counterup JS -->
    <script src="{{URL::asset('/build/js/counter.js')}}"></script>
@endif

@if (Route::is(['add-course']))
    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('/build/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
@endif

@if (Route::is(['index-5']))
    <!-- Swiper Slider -->
    <script src="{{ URL::asset('/build/plugins/swiper/js/swiper.min.js') }}"></script>
@endif

@if (Route::is(['add-course', 'instructor-announcements', 'instructor-assignment', 'instructor-tickets', 'student-tickets']))
    <!-- Summernote JS -->
    <script src="{{ URL::asset('build/plugins/summernote/summernote-lite.min.js')}}"></script>
@endif

@if (Route::is(['student-messages']))
    <!-- Slimscroll JS -->
    <script src="{{URL::asset('build/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
@endif

@if (Route::is(['instructor-details']))
    <!-- Feather JS -->
    <script src="{{ URL::asset('/build/plugins/feather/feather.min.js') }}"></script>
@endif

<!-- Sticky Sidebar JS -->
<script src="{{ URL::asset('/build/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
<script src="{{ URL::asset('/build/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

@if (Route::is(['instructor-dashboard', 'instructor-earnings', 'instructor-integrations', 'instructor-linked-accounts', 'instructor-message', 'instructor-notifications', 'instructor-payout', 'instructor-plans', 'instructor-settings', 'instructor-social-profiles']))
    <!-- Chart JS -->
    <script src="{{ URL::asset('/build/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/build/plugins/apexchart/chart-data.js') }}"></script>
@endif

@if (Route::is(['course-category-3', 'course-category-2', 'course-category', 'course-details-2', 'course-details', 'course-grid', 'course-list', 'instructor-details', 'instructor-grid', 'instructor-list' ]))
    <!-- Rangeslider JS -->
    <script src="{{ URL::asset('/build/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{ URL::asset('/build/plugins/ion-rangeslider/js/custom-rangeslider.js')}}"></script>
@endif

@if (Route::is(['register', 'set-password', 'student-change-password', 'reset-password']))
    <!-- Validation-->
    <script src="{{ URL::asset('/build/js/validation.js') }}"></script>
@endif

@if (Route::is(['instructor-certificate', 'instructor-assignment', 'instructor-dashboard', 'instructor-earnings', 'instructor-integrations', 'instructor-linked-accounts', 'instructor-message', 'instructor-notifications', 'intstructor-payout', 'instructor-plans', 'instructor-quiz', 'instrcutor-quiz-results', 'instructor-settings', 'instrcutor-social-profiles', 'instructor-statements', 'instructor-tickets', 'instructor-withdraw', 'student-settings']))
    <!-- Moment JS -->
    <script src="{{ URL::asset('/build/js/moment.min.js') }}"></script>
@endif

@if (Route::is(['instructor-dashboard', 'instructor-earnings', 'instructor-integrations', 'instructor-linked-accounts', 'instructor-message', 'instructor-notifications', 'intstructor-payout', 'instructor-plans', 'instructor-settings', 'instrcutor-social-profiles', 'instructor-statements', 'instructor-tickets', 'instructor-withdraw']))
    <!-- Daterangepicker JS -->
    <script src="{{ URL::asset('/build/plugins/daterangepicker/daterangepicker.js') }}"></script>
@endif

@if (Route::is(['instructor-certificate', 'instructor-assignment', 'instructor-earnings', 'instructor-integrations', 'instructor-linked-accounts', 'instructor-message', 'instructor-notifications', 'intstructor-payout', 'instructor-plans', 'instructor-quiz', 'instrcutor-quiz-results', 'instructor-settings', 'instrcutor-social-profiles', 'instructor-statements', 'instructor-tickets', 'instructor-withdraw', 'student-settings','instructor-quiz-results']))
    <!-- Datepicker JS -->
    <script src="{{ URL::asset('/build/js/moment.min.js')}}"></script>
    <script src="{{ URL::asset('/build/js/bootstrap-datetimepicker.min.js') }}"></script>
@endif

<!-- Custom JS -->
<script src="{{ URL::asset('/build/js/script.js') }}"></script>
