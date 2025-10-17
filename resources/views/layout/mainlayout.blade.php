
<!DOCTYPE html>
@if(!Route::is(['index-rtl']))
<html lang="en">
@endif
@if(Route::is(['index-rtl']))
<html lang="en" dir="rtl">
@endif    
<head>
    <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Dreams LMS is a powerful Learning Management System template designed for educators, training institutions, and businesses. Manage courses, track student progress, conduct virtual classes, and enhance e-learning experiences with an intuitive and feature-rich platform.">
		<meta name="keywords" content="LMS template, Learning Management System, e-learning software, online course platform, student management, education portal, virtual classroom, training management system, course tracking, online education">
		<meta name="author" content="Dreams Technologies">
		<meta name="robots" content="index, follow">
		
		<title>Dreams LMS | Advanced Learning Management System Template</title>

    @include('layout.partials.head')
</head>

@if (!Route::is(['index-5','index-6']))
<body>
@endif
  
    @if (Route::is(['index-5','index-6']))

    <body class="home-five">
    @endif
    
    @if (Route::is(['error-404', 'error-500', 'under-construction']))

        <body class="error-page">
    @endif

    @if (Route::is(['coming-soon']))

        <body class="error-page comming-soon-pg">
    @endif

    @if (Route::is(['student-messages','instructor-chat']))
    <body class="chat-page main-chat-blk">
    @endif
    @if (Route::is(['student-messages','instructor-chat']))
    <div class="main-wrapper chat-wrapper">
        @endif
    <!-- Main Wrapper -->
    @if (!Route::is(['login', 'register','student-messages','instructor-chat','index-6']))
        <div class="main-wrapper">
    @endif
    @if (Route::is(['index-3']))
    <div class="home-3">
    @endif
    @if (Route::is(['index-4']))
    <div class="home-4">
    @endif
    @if (Route::is(['login', 'register']))
        <div class="main-wrapper log-wrap">
    @endif
    @if (Route::is(['index-6']))
    <div class="main-wrapper index-six">
    @endif
    @if (
        !Route::is([
            'coming-soon',
            'error-404',
            'error-500',
            'forgot-password',
            'login',
            'new-password',
            'register-step-five',
            'register-step-four',
            'register-step-one',
            'register-step-three',
            'register-step-two',
            'register',
            'under-construction',
            'verification-code',
            'view-invoice',
            'lock-screen',
            'otp',
            'reset-password',
            'set-password'
        ]))
        @include('layout.partials.header')
    @endif
    @yield('content')
    @if (
        !Route::is([
            'coming-soon',
            'error-404',
            'error-500',
            'forgot-password',
            'login',
            'new-password',
            'register-step-five',
            'register-step-four',
            'register-step-one',
            'register-step-three',
            'register-step-two',
            'register',
            'under-construction',
            'verification-code',
            'lock-screen',
            'otp',
            'set-password',
            'reset-password'
        ]))
        @include('layout.partials.footer')
    @endif
    @if (Route::is(['index-3','index-4']))
    </div>
    @endif
   </div>
    <!-- /Main Wrapper -->
    @component('components.modalpopup')
    @endcomponent

    @include('layout.partials.footer-scripts')

</body>

</html>