<?php $page = 'student-order-history'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
        	Order History
        @endslot
        @slot('item1')
         Home
        @endslot
        @slot('item2')
        	Order History
        @endslot
    @endcomponent
    
		<div class="content">
			<div class="container">
					<!-- profile box -->
					<div class="profile-card overflow-hidden bg-blue-gradient2 mb-5 p-5">
						<div class="profile-card-bg">
							<img src="{{URL::asset('build/img/bg/card-bg-01.png')}}" class="profile-card-bg-1" alt="">
						</div>
							<div class="row align-items-center row-gap-3">
								<div class="col-lg-6">
									<div class="d-flex align-items-center">
										<span class="avatar avatar-xxl avatar-rounded me-3 border border-white border-2 position-relative">
											<img src="{{URL::asset('build/img/user/user-02.jpg')}}" alt="">
											<span class="verify-tick"><i class="isax isax-verify5"></i></span>
										</span>
										<div>
											<h5 class="mb-1 text-white d-inline-flex align-items-center">Ronald Richard<a href="{{url('instructor-profile')}}" class="link-light fs-16 ms-2"><i class="isax isax-edit-2"></i></a></h5>
											<p class="text-light">Student</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="d-flex align-items-center justify-content-lg-end flex-wrap gap-2">
										<a href="{{url('become-an-instructor')}}" class="btn btn-white rounded-pill me-3">Become an Instructor</a>
										<a href="{{url('instructor-dashboard')}}" class="btn btn-secondary rounded-pill">Instructor Dashboard</a>
									</div>
								</div>
							</div>
					</div>
					<!-- profile box -->
				<div class="row">
					@component('components.sidebar')
					@endcomponent
					<div class="col-lg-9">
						<div class="page-title d-flex align-items-center justify-content-between">
							<h5>Order History</h5>
						</div>
							<div class="row">
								<div class="col-md-8">
									<div class="mb-3">
										<div class="dropdown">
											<a href="javascript:void(0);" class="dropdown-toggle btn rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
												Status
											</a>
											<ul class="dropdown-menu dropdown-menu-end p-3">
												<li>
													<a href="javascript:void(0);" class="dropdown-item rounded-1">Completed</a>
												</li>
												<li>
													<a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
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
												<th>Order ID</th>
												<th>Date</th>
												<th>Amount</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#view_invoice">#ORD010</a></td>
												<td>22 Aug 2025</td>
												<td>$160</td>
												<td><span class="badge bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span></td>
												<td>
													<div class="d-flex align-items-center">
														<a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_invoice"><i class="isax isax-eye"></i></a>
														<a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#view_invoice">#ORD009</a></td>
												<td>10 Aug 2025</td>
												<td>$180</td>
												<td><span class="badge bg-info d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span></td>
												<td>
													<div class="d-flex align-items-center">
														<a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_invoice"><i class="isax isax-eye"></i></a>
														<a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#view_invoice">#ORD008</a></td>
												<td>26 Jul 2025</td>
												<td>$200</td>
												<td><span class="badge bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span></td>
												<td>
													<div class="d-flex align-items-center">
														<a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_invoice"><i class="isax isax-eye"></i></a>
														<a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#view_invoice">#ORD007</a></td>
												<td>12 Jul 2025</td>
												<td>$220</td>
												<td><span class="badge bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span></td>
												<td>
													<div class="d-flex align-items-center">
														<a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_invoice"><i class="isax isax-eye"></i></a>
														<a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#view_invoice">#ORD006</a></td>
												<td>02 Jul 2025</td>
												<td>$170</td>
												<td><span class="badge bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span></td>
												<td>
													<div class="d-flex align-items-center">
														<a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_invoice"><i class="isax isax-eye"></i></a>
														<a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#view_invoice">#ORD005</a></td>
												<td>25 Jun 2025</td>
												<td>$150</td>
												<td><span class="badge bg-success d-inline-flex align-items-center me-1"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span></td>
												<td>
													<div class="d-flex align-items-center">
														<a href="#" class="d-inline-flex fs-14 me-1 action-icon" data-bs-toggle="modal" data-bs-target="#view_invoice"><i class="isax isax-eye"></i></a>
														<a href="#" class="d-inline-flex fs-14 action-icon"><i class="isax isax-import"></i></a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
					</div>
				</div>
			</div>
		</div>
    @endsection