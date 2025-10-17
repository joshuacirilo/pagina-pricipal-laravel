
<!-- Favicon -->
<link rel="shortcut icon" href="{{URL::asset('build/img/favicon.png')}}"> 
<link rel="apple-touch-icon" href="{{URL::asset('build/img/apple-icon.png')}}">
@if(!Route::is(['error-404','error-500','forgot-password','login','register','under-construction','set-password','otp','lock-screen','reset-password']))
    <!-- Theme Settings Js -->
    <script src="{{URL::asset('build/js/theme-script.js')}}"></script>
@endif
@if(!Route::is(['index-rtl']))
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('build/css/bootstrap.min.css')}}">
@endif
@if(Route::is(['index-rtl']))
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('build/css/bootstrap.rtl.min.css')}}">
@endif

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{url('build/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{url('build/plugins/fontawesome/css/all.min.css')}}">

<!-- Tabler Icon CSS -->
<link rel="stylesheet" href="{{url('build/plugins/tabler-icons/tabler-icons.css')}}">

<!-- Iconsax CSS -->
<link rel="stylesheet" href="{{url('build/css/iconsax.css')}}">

<!-- Feathericon CSS -->
<link rel="stylesheet" href="{{url('build/plugins/feather/feather.css')}}">

@if (Route::is(['index','index-rtl']))
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/swiper/css/swiper-bundle.min.css')}}">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{url('build/plugins/fancybox/jquery.fancybox.min.css')}}">
@endif

@if (Route::is(['add-course', 'instructor-announcements', 'instructor-assignment', 'instructor-tickets', 'student-tickets']))
    <!-- Summernote JS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/summernote/summernote-lite.min.css')}}">
@endif

@if (Route::is(['index-2', 'index-3', 'index-4', 'index-5']))
    <!-- owl carousel css file -->
    <link rel="stylesheet" href="{{URL::asset('build/css/owl.carousel.min.css')}}">
@endif

@if (Route::is(['index-3','index-4', 'index-5']))
    <link rel="stylesheet" href="{{URL::asset('build/css/owl.theme.default.min.css')}}">
@endif

@if (Route::is(['about-us', 'blog-carousal', 'blog-details-left-sidebar', 'blog-details-right-sidebar', 'coming-soon', 'forgot-password', 'index-2', 'index-3', 'index-4', 'index-5', 'index-6', 'index-rtl', 'index', 'instructor-details', 'login', 'otp', 'register', 'set-password', 'student-details', 'reset-password']))
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('build/plugins/slick/slick-theme.css')}}">
@endif

@if (Route::is(['index-2', 'index-3', 'index-4', 'index-5', 'index-6', 'index-rtl', 'index']))
    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/aos/aos.css')}}">
@endif

@if (Route::is(['add-course']))
    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
@endif

<!-- Select2 CSS -->
<link rel="stylesheet" href="{{url('build/plugins/select2/css/select2.min.css')}}">

@if (Route::is(['index-5']))
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/swiper/css/swiper.min.css')}}">
@endif

@if (Route::is(['course-category-3', 'course-category-2', 'course-category', 'course-details-2', 'course-details', 'course-grid', 'course-list', 'instructor-details', 'instructor-grid', 'instructor-list' ]))
    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{ URL::asset('/build/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}">
@endif

@if (Route::is(['instructor-dashboard', 'instructor-earnings', 'instructor-integrations', 'instructor-linked-accounts', 'instructor-message', 'instructor-notifications', 'intstructor-payout', 'instructor-plans', 'instructor-settings', 'instrcutor-social-profiles', 'instructor-statements', 'instructor-tickets', 'instructor-withdraw']))
    <!-- Daterangepicker CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/daterangepicker/daterangepicker.css')}}">
@endif

@if (Route::is(['instructor-certificate', 'instructor-assignment', 'instructor-earnings', 'instructor-integrations', 'instructor-linked-accounts', 'instructor-message', 'instructor-notifications', 'intstructor-payout', 'instructor-plans', 'instructor-quiz', 'instrcutor-quiz-results', 'instructor-settings', 'instrcutor-social-profiles', 'instructor-statements', 'instructor-tickets', 'instructor-withdraw', 'student-settings']))
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/css/bootstrap-datetimepicker.min.css')}}">
@endif

<!-- Main CSS -->
<link rel="stylesheet" href="{{url('build/css/style.css')}}">