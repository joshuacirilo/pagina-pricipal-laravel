<?php $page = 'instructor-message'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Messages
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Messages
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">
            <div class="instructor-profile">
                <div class="instructor-profile-bg">
                    <img src="{{URL::asset('build/img/bg/card-bg-01.png')}}" class="instructor-profile-bg-1" alt="">
                </div>
                <div class="row align-items-center row-gap-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <span class="avatar flex-shrink-0 avatar-xxl avatar-rounded me-3 border border-white border-3 position-relative">
                                    <img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="img">
                                    <span class="verify-tick"><i class="isax isax-verify5"></i></span>
                                </span>
                                <div>
                                    <h5 class="mb-1 text-white d-inline-flex align-items-center"><a href="{{url('instructor-details')}}">Eugene Andre</a><a href="{{url('instructor-profile')}}" class="link-light fs-16 ms-2"><i class="isax isax-edit-2"></i></a></h5>
                                    <p class="text-light">Instructor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center flex-wrap gap-3 justify-content-md-end">
                                <a href="{{url('add-course')}}" class="btn btn-white rounded-pill">Add New Course</a>
                                <a href="{{url('student-dashboard')}}" class="btn btn-secondary rounded-pill">Student Dashboard</a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                @component('components.sidebar')
                @endcomponent
                <div class="col-lg-9">
                    <div class="instructor-message">
                    <h5 class="page-title">Messages</h5>
                    <div class="row">

                        <!-- Chat User List -->
                        <div class="col-lg-5">
                        <div class="chat-cont-left">
                            <div class="chat-card  mb-0 flex-fill">
                                <div class="chat-header">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-search-normal-1 fs-14"></i>
                                        </span>
                                        <input type="email" class="form-control form-control-md" placeholder="Search">
                                    </div>
                                </div>
                                <div class="chat-body chat-users-list chat-scroll">
                                    <a href="javascript:void(0);" class="d-flex justify-content-between align-items-center chat-member">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg online avatar-rounded flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/user/user-29.jpg')}}" alt="User Image">
                                            </div>
                                            <div>
                                                <h6 class="fs-16 fw-medium mb-1 d-flex align-items-center">Andrea Jermian <span class="msg-count badge badge-secondary d-flex align-items-center justify-content-center rounded-circle ms-2">3</span></h6>
                                                <p>Just Now</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="text-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="d-flex align-items-center justify-content-between chat-member">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg avatar-rounded flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/user/user-31.jpg')}}" alt="User Image">
                                            </div>
                                            <div>
                                                <h6 class="fs-16 fw-medium mb-1">Samuel James</h6>
                                                <p class="fs-14 text-gray-6 text-truncate">12:30 PM</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="text-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <i class="fa-solid fa-check-double text-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="d-flex justify-content-between align-items-center chat-member">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg online avatar-rounded flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/user/user-32.jpg')}}" alt="User Image">
                                            </div>
                                            <div>
                                                <h6 class="fs-16 fw-medium mb-1 d-flex align-items-center">Adrian Marshall <span class="msg-count badge badge-secondary d-flex align-items-center justify-content-center rounded-circle ms-2">3</span></h6>
                                                <p>Just Now</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="text-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="d-flex align-items-center justify-content-between chat-member">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg avatar-rounded flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/user/user-33.jpg')}}" alt="User Image">
                                            </div>
                                            <div>
                                                <h6 class="fs-16 fw-medium mb-1">Peter Anderson</h6>
                                                <p class="fs-14 text-gray-6 text-truncate">23/03/24</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="text-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <i class="fa-solid fa-check-double text-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="d-flex align-items-center justify-content-between chat-member">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg avatar-rounded flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/user/user-34.jpg')}}" alt="User Image">
                                            </div>
                                            <div>
                                                <h6 class="fs-16 fw-medium mb-1">Anderson</h6>
                                                <p class="fs-14 text-gray-6 text-truncate">23/03/24</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="text-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <i class="fa-solid fa-check-double text-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="d-flex align-items-center justify-content-between chat-member">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg avatar-rounded flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/user/user-35.jpg')}}" alt="User Image">
                                            </div>
                                            <div>
                                                <h6 class="fs-16 fw-medium mb-1">Andrea</h6>
                                                <p class="fs-14 text-gray-6 text-truncate">23/03/24</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="text-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <i class="fa-solid fa-check-double text-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                        
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Chat User List -->
    
                        <!-- Chat Content -->
                        <div class="col-lg-7 chat-cont-right chat-window-long">
    
                            <!-- Chat History -->
                            <div class="chat-two-card chat-window mb-0 shadow-none flex-fill">
                                <div class="border-0 p-0 position-relative">
                                    <div class="msg_head">
                                        <div class="d-flex bd-highlight align-items-center">
                                            <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                                <i class="fas fa-chevron-left"></i>
                                            </a>
                                            <div class="avatar avatar-lg avatar-rounded flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="User">
                                            </div>
                                            <div>
                                                <h6 class="fs-16 mb-1">Ronald Richard</h6>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center send-action">
                                            <a href="javascript:void(0);" class="btn chat-search-btn send-action-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Search" data-bs-original-title="Search">
                                                <i class="isax isax-search-normal-14"></i>
                                            </a>
                                            <a class="btn no-bg send-action-btn rounded-circle" href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a href="{{url('index')}}" class="dropdown-item"><i class="isax isax-close-circle me-2"></i>Close Chat</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i class="fa-solid fa-volume-xmark me-2"></i>Mute Notification</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-clock me-2"></i>Disappearing Message</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-refresh me-2"></i>Clear Message</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-trash me-2"></i>Delete Chat</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i class="fa-regular fa-thumbs-down me-2"></i>Report</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i class="fa-solid fa-ban me-2"></i>Block</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Chat Search -->
                                    <div class="chat-search search-wrap contact-search">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search Contacts">
                                                <span class="input-group-text"><i class="isax isax-search-normal-14"></i></span>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /Chat Search -->
                                </div>
                                <div class="msg_card_body chat-scroll">
    
                                    <ul class="list-unstyled p-0">
                                        <li class="sent-message-group">
                                            <ul>
                                                <li class="media sent d-flex align-items-end">
                                                    <div class="media-body flex-grow-1">
                                                        <div class="msg-box">
                                                            <div class="d-flex align-items-end justify-content-end mb-1">
                                                                <div class="avatar avatar-md avatar-rounded flex-shrink-0 ms-2">
                                                                    <img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="User Image ">
                                                                </div>
                                                                <div class="position-relative">
                                                                    <div class="d-flex align-items-center justify-content-end mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <i class="fa-solid fa-check-double me-2 text-success fs-12"></i>
                                                                            <p class="mb-0">02:39 PM</p>
                                                                            <i class="fa-solid fa-circle text-gray-1 fs-7 mx-1"></i>
                                                                        </div>
                                                                        <h6 class="fs-14 fw-normal d-flex align-items-center">You</h6>
                                                                    </div>
                                                                    <div>
                                                                        <div class="sent-message">
                                                                            <p>How’s the assignment coming along?</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="media received">
                                            <div class="d-flex align-items-end mb-1">
                                                <div class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="User Image ">
                                                </div>
                                                <div class="media-body flex-grow-1">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h6 class="fs-14 fw-normal d-flex align-items-center">Ronald Richard</h6>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fa-solid fa-circle text-gray-1 fs-7 mx-1"></i>
                                                            <p>02:40 PM</p>
                                                        </div>
                                                    </div>
                                                    <div class="msg-box">
                                                        <div class="position-relative">
                                                            <div class="d-flex align-items-center ">
                                                                <div class="received-message me-2">
                                                                    <p>t’s going okay, but I’m stuck on the analysis part.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="sent-message-group">
                                            <ul>
                                                <li class="media sent d-flex align-items-end">
                                                    <div class="media-body flex-grow-1">
                                                        <div class="msg-box">
                                                            <div class="d-flex align-items-end justify-content-end mb-1">
                                                                <div class="avatar avatar-md avatar-rounded flex-shrink-0 ms-2">
                                                                    <img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="User Image ">
                                                                </div>
                                                                <div class="position-relative">
                                                                    <div class="d-flex align-items-center justify-content-end mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <i class="fa-solid fa-check-double me-2 text-success fs-12"></i>
                                                                            <p class="mb-0">02:39 PM</p>
                                                                            <i class="fa-solid fa-circle text-gray-1 fs-7 mx-1"></i>
                                                                        </div>
                                                                        <h6 class="fs-14 fw-normal d-flex align-items-center">You</h6>
                                                                    </div>
                                                                    <div>
                                                                        <div class="sent-message">
                                                                            <p>Which part exactly?</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="media received">
                                            <div class="d-flex align-items-end mb-1">
                                                <div class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="User Image ">
                                                </div>
                                                <div class="media-body flex-grow-1">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h6 class="fs-14 fw-normal d-flex align-items-center">Ronald Richard</h6>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fa-solid fa-circle text-gray-1 fs-7 mx-1"></i>
                                                            <p>02:40 PM</p>
                                                        </div>
                                                    </div>
                                                    <div class="msg-box">
                                                        <div class="position-relative">
                                                            <div class="d-flex align-items-center ">
                                                                <div class="received-message me-2">
                                                                    <p>Understanding the variable relationships.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="sent-message-group">
                                            <ul>
                                                <li class="media sent d-flex align-items-end">
                                                    <div class="media-body flex-grow-1">
                                                        <div class="msg-box">
                                                            <div class="d-flex align-items-end justify-content-end mb-1">
                                                                <div class="avatar avatar-md avatar-rounded flex-shrink-0 ms-2">
                                                                    <img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="User Image ">
                                                                </div>
                                                                <div class="position-relative">
                                                                    <div class="d-flex align-items-center justify-content-end mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <i class="fa-solid fa-check-double me-2 text-success fs-12"></i>
                                                                            <p class="mb-0">02:39 PM</p>
                                                                            <i class="fa-solid fa-circle text-gray-1 fs-7 mx-1"></i>
                                                                        </div>
                                                                        <h6 class="fs-14 fw-normal d-flex align-items-center">You</h6>
                                                                    </div>
                                                                    <div>
                                                                        <div class="sent-message">
                                                                            <p>Try plotting them. Let’s check together.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="media received">
                                            <div class="d-flex align-items-end mb-1">
                                                <div class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="User Image ">
                                                </div>
                                                <div class="media-body flex-grow-1">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h6 class="fs-14 fw-normal d-flex align-items-center">Ronald Richard</h6>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fa-solid fa-circle text-gray-1 fs-7 mx-1"></i>
                                                            <p>02:40 PM</p>
                                                        </div>
                                                    </div>
                                                    <div class="msg-box">
                                                        <div class="position-relative">
                                                            <div class="d-flex align-items-center ">
                                                                <div class="received-message me-2">
                                                                    <p>Sure!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                                            
                                    </ul>
                                </div>
                                <div class="chat-footer border-0 pt-0">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center chat-input-icons">
                                            <a class="btn no-bg" href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="text-gray-5 fa-solid fa-ellipsis-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end p-3">
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-camera me-2"></i>Camera</a>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-gallery me-2"></i>Gallery</a>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-audio-square me-2"></i>Audio</a>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-location me-2"></i>Location</a>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-user-cirlce-add me-2"></i>Contact</a>
                                            </div>
                                            <div class="form-item emoj-action-foot">
                                                <a href="javascrip:void(0);" class="action-circle"><i class="text-gray-5  fa-regular fa-face-smile"></i></a>
                                                <div class="emoj-group-list-foot down-emoji-circle">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);"><img src="{{URL::asset('build/img/icons/emonji-02.svg')}}" alt="Icon"></a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"><img src="{{URL::asset('build/img/icons/emonji-05.svg')}}" alt="Icon"></a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"><img src="{{URL::asset('build/img/icons/emonji-06.svg')}}" alt="Icon"></a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"><img src="{{URL::asset('build/img/icons/emonji-07.svg')}}" alt="Icon"></a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"><img src="{{URL::asset('build/img/icons/emonji-08.svg')}}" alt="Icon"></a>
                                                        </li>
                                                        <li class="add-emoj"><a href="javascript:void(0);"><i class="isax isax-add"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);"><i class="isax isax-microphone-2 text-gray-5"></i></a>
                                        </div>
                                        <div class="chat-input me-2">
                                            <input class="form-control" placeholder="Type your message here...">
                                        </div>
                                        <div>
                                            <button class="btn btn-secondary btn_send"><i class="isax isax-send-1 text-white" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chat Content -->
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection    