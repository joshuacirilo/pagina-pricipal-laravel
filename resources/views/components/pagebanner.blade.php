@if (!Route::is(['instructor-profile', 'student-profile', 'instructor-edit']))
    <!-- Breadcrumb -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    @if (!Route::is(['help-center']))
                        <h1 class="mb-0">{{ $title }}</h1>
                    @endif
                    @if (Route::is(['help-center']))
                        <h1>{{ $title }}</h1>
                        <p>{{ $li1 }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif
@if (Route::is(['instructor-profile', 'instructor-edit']))
    <!-- Breadcrumb -->
    <div class="page-banner instructor-bg-blk">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="profile-info-blk">
                        <a href="javascript:;" class="profile-info-img">
                            <img src="{{ URL::asset('/build/img/instructor/profile-avatar.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                        <h4><a href="javascript:;">{{ $title }}</a><span>Beginner</span></h4>
                        <p>{{ $li1 }}</p>
                        <ul class="list-unstyled inline-inline profile-info-social">
                            <li class="list-inline-item">
                                <a href="javascript:;">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:;">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:;">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:;">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif
@if (Route::is(['student-profile']))
    <!-- Breadcrumb -->
    <div class="page-banner student-bg-blk">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="profile-info-blk">
                        <a href="javascript:;" class="profile-info-img">
                            <img src="{{ URL::asset('/build/img/user/user11.jpg') }}" alt="Profile Avatar"
                                class="img-fluid">
                        </a>
                        <h4><a href="javascript:;">{{ $title }}</a><span>Beginner</span></h4>
                        <p>{{ $li1 }}</p>
                        <ul class="list-unstyled inline-inline profile-info-social">
                            <li class="list-inline-item">
                                <a href="javascript:;">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:;">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:;">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:;">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif
