<?php $page = 'course-category'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Course Category
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Course Category
        @endslot
    @endcomponent

        <!-- Course -->
        <section class="course-category">
            <div class="container">
                <h2 class="mb-1">Browse By Categories</h2>
                <p>One stop shop for all your needs</p>

                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Graphics & Design</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Programming & Tech</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Digital Marketing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-video" aria-selected="false">Video & Animation</button>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-1.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Logo Design</a></h6>
                                    </div>
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">21</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-2.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Brand Style Guides</a></h6>
                                    </div>
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-3.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Game Art</a></h6>
                                    </div>
                                    <span class="cat-count fs-14 text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-4.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Business Cards</a></h6>
                                    </div>
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">22</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-5.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Illustration</a></h6>
                                    </div>
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                                <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-6.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Pattern Design</a></h6>
                                    </div>
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-7.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Brochure Design</a></h6>
                                    </div>
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">14</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-8.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Flyer Design</a></h6>
                                    </div>
                                        
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-9.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Book Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-10.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Social Media Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">12</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-11.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Icon Design</a></h6>
                                    </div>
                                        
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-12.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Invitation Design</a></h6>
                                    </div>
                                        
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-13.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Graphics for Streamers</a></h6>
                                    </div>
                                        
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">06</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-14.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Label Design</a></h6>
                                    </div>
                                        
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-15.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">UX Design</a></h6>
                                    </div>
                                        
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-16.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Photoshop Editing</a></h6>
                                    </div>
                                        
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">10</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-17.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Presentation Design</a></h6>
                                    </div>
                                        
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-18.jpg')}}" alt="img">
                                        <h6 class="pe-2"><a href="{{url('course-details')}}">Infographic Design</a></h6>
                                    </div>
                                        
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                    
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row mt-4 mt-md-5">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-category-item">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-1.jpg')}}" alt="img">
                                    <h6 class="pe-2"><a href="{{url('course-details')}}">Logo Design</a></h6>
                                </div>
                                    
                                <span class="cat-count text-white fw-medium bg-dark d-inline-flex">21</span>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-2.jpg')}}" alt="img">
                                    <h6 class="pe-2"><a href="{{url('course-details')}}">Brand Style Guides</a></h6>
                                    </div>
                                        
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-3.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Game Art</a></h6>
                                        </div>
                                            
                                        <span class="cat-count fs-14 text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-4.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Business Cards</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">22</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-5.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Illustration</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                    <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-6.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Pattern Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-7.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Brochure Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">14</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-8.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Flyer Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-9.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Book Design</a></h6>
                                            </div>
                                                
                                            <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-10.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Social Media Design</a></h6>
                                            </div>
                                                
                                            <span class="cat-count text-white fw-medium bg-dark d-inline-flex">12</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-11.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Icon Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-12.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Invitation Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-13.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Graphics for Streamers</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">06</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-14.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Label Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-15.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">UX Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-16.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Photoshop Editing</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">10</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-17.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Presentation Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-18.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Infographic Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                        
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row mt-4 mt-md-5">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-category-item">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-1.jpg')}}" alt="img">
                                    <h6 class="pe-2"><a href="{{url('course-details')}}">Logo Design</a></h6>
                                </div>
                                    
                                <span class="cat-count text-white fw-medium bg-dark d-inline-flex">21</span>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-2.jpg')}}" alt="img">
                                    <h6 class="pe-2"><a href="{{url('course-details')}}">Brand Style Guides</a></h6>
                                    </div>
                                        
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-3.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Game Art</a></h6>
                                        </div>
                                            
                                        <span class="cat-count fs-14 text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-4.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Business Cards</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">22</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-5.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Illustration</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                    <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-6.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Pattern Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-7.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Brochure Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">14</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-8.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Flyer Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-9.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Book Design</a></h6>
                                            </div>
                                                
                                            <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-10.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Social Media Design</a></h6>
                                            </div>
                                                
                                            <span class="cat-count text-white fw-medium bg-dark d-inline-flex">12</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-11.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Icon Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-12.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Invitation Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-13.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Graphics for Streamers</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">06</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-14.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Label Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-15.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">UX Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-16.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Photoshop Editing</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">10</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-17.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Presentation Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-18.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Infographic Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                        
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                    <div class="row mt-4 mt-md-5">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-category-item">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-1.jpg')}}" alt="img">
                                    <h6 class="pe-2"><a href="{{url('course-details')}}">Logo Design</a></h6>
                                </div>
                                    
                                <span class="cat-count text-white fw-medium bg-dark d-inline-flex">21</span>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                        
                                <div class="course-category-item">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-2.jpg')}}" alt="img">
                                    <h6 class="pe-2"><a href="{{url('course-details')}}">Brand Style Guides</a></h6>
                                    </div>
                                        
                                    <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-3.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Game Art</a></h6>
                                        </div>
                                            
                                        <span class="cat-count fs-14 text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-4.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Business Cards</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">22</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-5.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Illustration</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                    <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-6.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Pattern Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-7.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Brochure Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">14</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-8.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Flyer Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-9.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Book Design</a></h6>
                                            </div>
                                                
                                            <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-10.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Social Media Design</a></h6>
                                            </div>
                                                
                                            <span class="cat-count text-white fw-medium bg-dark d-inline-flex">12</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-11.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Icon Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-12.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Invitation Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-13.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Graphics for Streamers</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">06</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-14.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Label Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-15.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">UX Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-16.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Photoshop Editing</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">10</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                            
                                    <div class="course-category-item">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-17.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Presentation Design</a></h6>
                                        </div>
                                            
                                        <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="course-category-item">
                                        <div class="d-flex flex-row justify-content-between align-items-center">
                                            
                                            <div class="d-flex align-items-center">
                                                <img class="img-fluid category-image" src="{{URL::asset('./build/img/category/category-18.jpg')}}" alt="img">
                                            <h6 class="pe-2"><a href="{{url('course-details')}}">Infographic Design</a></h6>
                                            </div>
                                            <span class="cat-count text-white fw-medium bg-dark d-inline-flex">15</span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Course -->

@endsection