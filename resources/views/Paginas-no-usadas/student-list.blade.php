<?php $page = 'student-list'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Students List
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Students List
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
                                        <h5 class="mb-1 text-white d-inline-flex align-items-center">Eugene Andre<a href="{{url('instructor-profile')}}" class="link-light fs-16 ms-2"><i class="isax isax-edit-2"></i></a></h5>
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
                        <div class="page-title d-flex align-items-center justify-content-between">
                            <h5 class="fw-bold">Students</h5>
                            <div class="d-flex align-items-center list-icons">
                                <a href="{{url('student-list')}}" class="active me-2"><i class="isax isax-task"></i></a>
                                <a href="{{url('students')}}"><i class="isax isax-element-3"></i></a>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-4">
                                <div class="input-icon mb-3">
                                    <span class="input-icon-addon">
                                        <i class="isax isax-search-normal-14"></i>
                                    </span>
                                    <input type="email" class="form-control form-control-md" placeholder="Search">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive custom-table">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Student Name</th>
                                        <th>Enroll Date</th>
                                        <th>Progress</th>
                                        <th>Courses</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="{{url('student-details')}}" class="text-primary">#STU020</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-01.jpg')}}" alt="">
                                                </a>
                                                <a href="{{url('student-details')}}"><p class="fs-14">Thompson Hicks</p></a>
                                            </div>
                                        </td>
                                        <td>22 Aug 2025</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-xs flex-shrink-0" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 4px;width: 110px">
                                                    <div class="progress-bar bg-success" style="width: 0%"></div>
                                                </div>
                                                <span class="ms-2">0%</span>
                                            </div>
                                        </td>
                                        <td>10</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-messages-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('student-details')}}" class="text-primary">#STU019</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-06.jpg')}}" alt="">
                                                </a>
                                                <a href="{{url('student-details')}}"><p class="fs-14">Jennifer Tovar</p></a>
                                            </div>
                                        </td>
                                        <td>10 Aug 2025</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-xs flex-shrink-0" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 4px;width: 110px">
                                                    <div class="progress-bar bg-success" style="width: 15%"></div>
                                                </div>
                                                <span class="ms-2">15%</span>
                                            </div>
                                        </td>
                                        <td>08</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-messages-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('student-details')}}" class="text-primary">#STU018</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-09.jpg')}}" alt="">
                                                </a>
                                                <a href="{{url('student-details')}}"><p class="fs-14">James Schulte</p></a>
                                            </div>
                                        </td>
                                        <td>26 Jul 2025</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-xs flex-shrink-0" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 4px;width: 110px">
                                                    <div class="progress-bar bg-success" style="width: 60%"></div>
                                                </div>
                                                <span class="ms-2">60%</span>
                                            </div>
                                        </td>
                                        <td>12</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-messages-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('student-details')}}" class="text-primary">#STU017</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-20.jpg')}}" alt="">
                                                </a>
                                                <a href="{{url('student-details')}}"><p class="fs-14">Kristy Cardona</p></a>
                                            </div>
                                        </td>
                                        <td>12 Jul 2025</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-xs flex-shrink-0" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 4px;width: 110px">
                                                    <div class="progress-bar bg-success" style="width: 20%"></div>
                                                </div>
                                                <span class="ms-2">20%</span>
                                            </div>
                                        </td>
                                        <td>17</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-messages-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('student-details')}}" class="text-primary">#STU016</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-27.jpg')}}" alt="">
                                                </a>
                                                <a href="{{url('student-details')}}"><p class="fs-14">William Aragon</p></a>
                                            </div>
                                        </td>
                                        <td>02 Jul 2025</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-xs flex-shrink-0" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 4px;width: 110px">
                                                    <div class="progress-bar bg-success" style="width: 10%"></div>
                                                </div>
                                                <span class="ms-2">10%</span>
                                            </div>
                                        </td>
                                        <td>09</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-messages-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('student-details')}}" class="text-primary">#STU015</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-30.jpg')}}" alt="">
                                                </a>
                                                <a href="{{url('student-details')}}"><p class="fs-14">Shirley Lis</p></a>
                                            </div>
                                        </td>
                                        <td>25 Jun 2025</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-xs flex-shrink-0" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 4px;width: 110px">
                                                    <div class="progress-bar bg-success" style="width: 80%"></div>
                                                </div>
                                                <span class="ms-2">80%</span>
                                            </div>
                                        </td>
                                        <td>15</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-messages-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('student-details')}}" class="text-primary">#STU014</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-17.jpg')}}" alt="">
                                                </a>
                                                <a href="{{url('student-details')}}"><p class="fs-14">John Brewer</p></a>
                                            </div>
                                        </td>
                                        <td>17 Jun 2025</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-xs flex-shrink-0" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 4px;width: 110px">
                                                    <div class="progress-bar bg-success" style="width: 40%"></div>
                                                </div>
                                                <span class="ms-2">40%</span>
                                            </div>
                                        </td>
                                        <td>13</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-messages-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('student-details')}}" class="text-primary">#STU013</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-37.jpg')}}" alt="">
                                                </a>
                                                <a href="{{url('student-details')}}"><p class="fs-14">Doris Hughes</p></a>
                                            </div>
                                        </td>
                                        <td>04 Jun 2025</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-xs flex-shrink-0" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 4px;width: 110px">
                                                    <div class="progress-bar bg-success" style="width: 50%"></div>
                                                </div>
                                                <span class="ms-2">50%</span>
                                            </div>
                                        </td>
                                        <td>17</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-messages-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('student-details')}}" class="text-primary">#STU012</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-04.jpg')}}" alt="">
                                                </a>
                                                <a href="{{url('student-details')}}"><p class="fs-14">Sarah Martinez</p></a>
                                            </div>
                                        </td>
                                        <td>20 May 2025</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-xs flex-shrink-0" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 4px;width: 110px">
                                                    <div class="progress-bar bg-success" style="width: 20%"></div>
                                                </div>
                                                <span class="ms-2">20%</span>
                                            </div>
                                        </td>
                                        <td>08</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-messages-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('student-details')}}" class="text-primary">#STU011</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                    <img src="{{URL::asset('build/img/user/user-18.jpg')}}" alt="">
                                                </a>
                                                <a href="{{url('student-details')}}"><p class="fs-14">Sarah Martinez</p></a>
                                            </div>
                                        </td>
                                        <td>15 May 2025</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-xs flex-shrink-0" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 4px;width: 110px">
                                                    <div class="progress-bar bg-success" style="width: 60%"></div>
                                                </div>
                                                <span class="ms-2">60%</span>
                                            </div>
                                        </td>
                                        <td>10</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('student-details')}}" class="d-inline-flex fs-14 me-1 action-icon"><i class="isax isax-eye"></i></a>
                                                <a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-messages-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /pagination -->
                        <div class="row align-items-center mt-4">
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
        </div>
@endsection